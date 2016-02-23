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

votes_url = settings['votes_url'] #url of the CSV
voters_url = settings['voters_url'] #url of the CSV

def vote2vote (vote):
    if vote == 'yes':
        return 1
    if vote == 'no':
        return -1
    else:
        return 0

# read voters
voters = {}
r = requests.get(voters_url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
for row in csv.DictReader(csvio):
    voter = {}
    for c in settings['voters_columns']:
        voter[c] = row[c]
    for c in settings['voters_pictures_columns']:
        voter[c] = settings['voters_pictures_prepend'] + row[c] + settings['voters_pictures_append']
    voters[voter['id']] = voter

# get votes and details (comments)
details = {}
print ("mismatching codes:")
r = requests.get(votes_url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
for row in csv.DictReader(csvio):
    try:
        voters[row['voter_id']]['votes']
    except:
        voters[row['voter_id']]['votes'] = {}
        details[row['voter_id']] = {}
    try:
        voters[row['voter_id']]['votes'][row['vote_event_id']] = vote2vote(row['vote'])
        if row['description'].strip() != "":
            details[row['voter_id']][row['vote_event_id']] = row['description'].strip()
    except:
        print(row['voter_id'])

# reorder as list and deselect voters with no votes:
print("not answered:")
data = []
nodata = []
for key in voters:
#    print(key)
    try:
        voters[key]['votes']
#        print(voters)
    except:
        print(voters[key][settings["voters_ascii"]]) #note: must be ASCII for running from PHP
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
data = sorted(data, key=lambda x: x[settings["voters_ascii"]])    
nodata = sorted(nodata, key=lambda x: x[settings["voters_ascii"]])

#array to obj
dataout = {}
for item in data:
    dataout[item['id']] = item

# db-like file for R
votesdb = []
for item in data:
    for key in item['votes']:
        votesdb.append({"votes":item['votes'][key],"voter":item['id'],"question":key})
  
#save files 
try:
    with open(path+'../answers.json', 'w') as outfile:
        json.dump(dataout, outfile)
    with open(path+'../noreply.json', 'w') as outfile:
        json.dump(nodata, outfile)
    with open(path+'../details.json', 'w') as outfile:
        json.dump(details, outfile)
    with open(path+'../matrix.json', 'w') as outfile:
        json.dump(votesdb, outfile)
except Exception as e:
    print(e)
