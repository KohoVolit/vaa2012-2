# -*- coding: utf-8 -*-

import csv
import io
import json
import requests

url = "https://docs.google.com/spreadsheets/d/1Ztt8DE9gIoejf9eEW-o33T-ea2g5EU7YbYx02sBQvv0/pub?gid=176959617&single=true&output=csv"

try:
    tmp = os.path.realpath(__file__).split("/")
    path = "/".join(tmp[:-1]) + "/"
except:
    path = ""

i = 0
questions = []
questions_all = []
r = requests.get(url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
for row in csv.reader(csvio):
    if i == 0:
        nothing = 0
    else:
        if row[4].strip() != '':
            item = {
                'id': row[0].strip(),
                'name': row[1].strip(),
                'question': row[2].strip(),
                'description': row[3].strip(),
                'order': float(row[4].strip())
            }
            questions.append(item);
            order = float(row[4].strip())
        else:
            order = 1000000 + i
        it = {
                'id': row[0].strip(),
                'name': row[1].strip(),
                'question': row[2].strip(),
                'description': row[3].strip(),
                'order': order
            }
        questions_all.append(it);
    i = i + 1

questions = sorted(questions, key=lambda x:x['order'])
questions_all = sorted(questions_all, key=lambda x:x['order'])
#print questions

#save file
with open(path+'questions.json', 'w') as outfile:
    json.dump(questions, outfile)
with open(path+'questions_all.json', 'w') as outfile:
    json.dump(questions_all, outfile)
