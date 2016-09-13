# coding: utf-8

import csv
import io
import json
import logging
import os
import re
import requests
from slugify import slugify
import time

logger = logging.getLogger('simple_example')
logger.setLevel(logging.DEBUG)

try:
    tmp = os.path.realpath(__file__).split("/")
    path = "/".join(tmp[:-1]) + "/"
except:
    path = ""

try:
    with open(path + "settings.json",encoding="utf-8") as f:
        settings = json.load(f)
except Exception as e:
    logger.exception(e)
    print(e)

answers_url = settings['answers_url'] #url of the CSV
acc = settings['answers_codes_column'] # answers codes columns
nq = settings['number_of_questions'] # number of questions
voters_url = settings['voters_url'] #url of the CSV
questions_url = settings['questions_url'] # url of questions
niqc = settings['number_in_questionnaire_column'] # column in questions list with order in questionnaire (only sometimes equals with id)

def vote2vote (vote):
#    print(settings['yes'])
    if vote == settings['yes']:
        return 1
    if vote == settings['no']:
        return -1
    else:
        return 0

# read questions
i = 0
r = requests.get(questions_url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
qcol2id = {}
for row in csv.reader(csvio):
    if i == 0:
        nothing = 0
    else:
        if row[niqc] != "":
            qcol2id[row[niqc]] = row[0]
    i += 1

# read voters
i = 0
voters = {}
r = requests.get(voters_url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
for row in csv.reader(csvio):
    if i == 0:
        nothing = 0
    else:
        if row[21].strip() == "m":
            gender = "male"
        else:
            gender = "female"
        voter = {
            'id': row[0].strip(),
            'name': row[2].strip() + ' ' + row[1].strip(),
            'given_name': row[1].strip(),
            'family_name': row[2].strip(),
            'party_abbreviation': row[5].strip(),
            'party': row[3].strip(),
            'constituency': row[4].strip(),
            'friendly_name': slugify(row[1].strip() + ' ' + row[2].strip() + ' ' + row[5].strip()),
            'picture': settings['picture_prepend'] + row[0].strip() +  settings['picture_append'],
            'gender': gender,
            'cro_n': row[22].strip()
        }
        voters[row[10].strip()] = voter # secret code column
    i = i + 1

# print(voters)

#get votes and details (comments)
i = 0
details = {}
print ("mismatching codes:")
r = requests.get(answers_url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
for row in csv.reader(csvio):
    if i == 0:
        questions = {} # col: id
        for j in range(0,nq):
            col = (4 + 2*j)
            questions[col] = qcol2id[re.search('\d*', row[col]).group(0)]
        #print questions
    else:
        try:
            votes = {}
            voter_id = voters[row[acc].strip()]['id']
            details[voter_id] = {}
            for key in questions:
                votes[questions[key]] = vote2vote(row[key])
                if row[key+1].strip() != "":
                    details[voter_id][questions[key]] = row[key+1].strip()
            #print votes
            voters[row[acc].strip()]['votes'] = votes
        except:
            print(row[acc].strip())
    i = i + 1


#reorder as list and deselect voters with no votes:
print("not answered:")
data = []
nodata = []
for key in voters:
#    print(key)
    try:
        voters[key]['votes']
#        print(voters)
    except:
        print(voters[key]['friendly_name']) #note: must be ASCII for running from PHP
#        del voters[key]['code']
        nodata.append(voters[key])
#        print(nodata)
    else:
#        del voters[key]['code']
        data.append(voters[key])
#        print(data)
#print('**')

#time.sleep(10)
#order alphabetically
data = sorted(data, key=lambda x: x['friendly_name'])
nodata = sorted(nodata, key=lambda x: x['friendly_name'])

#array to obj
dataout = {}
for item in data:
    dataout[item['id']] = item

# db-like file for R
votesdb = []
for item in data:
    for key in item['votes']:
        votesdb.append({"votes":item['votes'][key],"voter":int(item['id']),"question":int(key)})

#save files
try:
    with open(path+'answers.json', 'w') as outfile:
        json.dump(dataout, outfile)
    with open(path+'noreply.json', 'w') as outfile:
        json.dump(nodata, outfile)
    with open(path+'details.json', 'w') as outfile:
        json.dump(details, outfile)
    with open(path+'matrix.json', 'w') as outfile:
        json.dump(votesdb, outfile)
except Exception as e:
    print(e)
