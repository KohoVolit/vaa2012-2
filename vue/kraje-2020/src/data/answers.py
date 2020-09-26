# coding: utf-8

import csv
import gspread
import io
import json
import os
import re
import requests
from slugify import slugify
import time

path = "/home/michal/project/volebnikalkulacka.cz/dev/kraje-2020/questions/"

gc = gspread.service_account()

with open(path + "settings.json", encoding="utf-8") as f:
    settings = json.load(f)


"""Vote 2 vote."""
def vote2vote(vote):
    # print(settings['yes'])
    if vote == settings['yes']:
        return 1
    if vote == settings['no']:
        return -1
    else:
        return 0

# read voters
sheetV = gc.open_by_key(settings['voters_key'])
worksheetV = sheetV.get_worksheet(0)

# regions - codes
sheetR = gc.open_by_key(settings['regions_key'])
worksheetR = sheetR.worksheet(settings['regions_sheet_name'])
codesR = worksheetR.col_values(settings['regions_column'])[1:]
regions = worksheetR.get_all_records()

for region in regions:
    code = region['iso']
    print("CODE: ", code)
    answers_url = region['answers']  # url of the CSV
    acc = settings['answers_codes_column']  # answers codes columns
    astep = settings['answers_step']  # step in answers (basically number of subquestions for each question in questionnaire)
    afirst = settings['answers_first']  # first column with answer

    # voters
    voters = {}
    for row in worksheetV.get_all_records():
        if row['region_iso'] == code:
            voter = {
                'id': row['id'],
                # 'given_name': row['given_name'].strip(),
                # 'family_name': row['family_name'].strip(),
                'name': row['name'].strip(),
                'abbreviation': row['abbreviation'].strip(),
                # 'constituency': row['constituency'].strip(),
                # 'constituency_code': int(row['constituency_id'].strip())
                # 'picture': settings['picture_prepend'] + row['picture'].strip() + settings['picture_append'],
                # 'weight': float(row['important'])
                # 'weight': float(row['weight'].strip())
            }
            voters[str(row['code'])] = voter  # secret code column
    # print(voters)


    # read questions (we need the count of them)
    with open(path + "questions_all_" + code + ".json") as fin:
        questions = json.load(fin)
    nq = len(questions)

    # get votes and details (comments)
    i = 0
    details = {}
    extraimportant = {}
    print("mismatching codes:")
    r = requests.get(answers_url)
    r.encoding = 'utf-8'
    csvio = io.StringIO(r.text, newline="")
    for row in csv.reader(csvio):
        if i == 0:
            questions = {}  # col: id
            for j in range(0, nq):
                col = (afirst + astep * j)
                questions[col] = re.search('\d*', row[col]).group(0)
            # print(questions)
        else:
            try:
                votes = {}
                voter_id = voters[row[acc].strip()]['id']
                details[voter_id] = {}
                extraimportant[voter_id] = {}
                for key in questions:
                    qid = questions[key]
                    # print(qid)
                    votes[qid] = vote2vote(row[key])
                    if row[key + 1].strip() != "":
                        details[voter_id][qid] = row[key + 1].strip()
                    if row[key + 2].strip() != "":
                        extraimportant[voter_id][qid] = row[key + 2].strip()
                # print(votes)
                voters[row[acc].strip()]['votes'] = votes
            except Exception:
                print(row[acc].strip())
        i = i + 1


    # reorder as list and deselect voters with no votes:
    print("not answered:")
    data = []
    nodata = []
    for key in voters:
        #    print(key)
        try:
            voters[key]['votes']
            #        print(voters)
        except Exception:
            print(voters[key]['name'])  # note: must be ASCII for running from PHP
    #        del voters[key]['code']
            nodata.append(voters[key])
    #        print(nodata)
        else:
            #        del voters[key]['code']
            data.append(voters[key])
    #        print(data)
    # print('**')

    # time.sleep(10)
    # order alphabetically
    data = sorted(data, key=lambda x: x['name'])
    nodata = sorted(nodata, key=lambda x: x['name'])

    # array to obj
    dataout = {}
    for item in data:
        dataout[item['id']] = item

    # db-like file for R
    votesdb = []
    for item in data:
        for key in item['votes']:
            votesdb.append({"votes": item['votes'][key], "voter": int(item['id']), "question": int(key)})


    # obj 2 arrays:
    def obj2array(obj):
        arr = []
        for k in obj:
            arr.append(obj[k])
        return arr


    for k in dataout:
        dataout[k]['details'] = details[k]
        dataout[k]['extra_important'] = extraimportant[k]

    # save files
    try:
        with open(path + 'answers_' + code + '.json', 'w') as outfile:
            json.dump(obj2array(dataout), outfile, ensure_ascii=False, sort_keys=True)
        with open(path + 'noreply_' + code + '.json', 'w') as outfile:
            json.dump(nodata, outfile, ensure_ascii=False, sort_keys=True)
        with open(path + 'details_' + code + '.json', 'w') as outfile:
            json.dump(details, outfile)
        with open(path + 'matrix_' + code + '.json', 'w') as outfile:
            json.dump(votesdb, outfile)
    except Exception as e:
        print(e)
