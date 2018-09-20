# -*- coding: utf-8 -*-

import csv
import io
import json
import requests

url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vS_pg4Sx32O2KgoqqwNqhhbu9Bv3OkNXnpbbG4BNMVb01R3ysvhNNWHGfWPd89DA_MWubRiUKzH6faz/pub?gid=0&single=true&output=csv"

try:
    tmp = os.path.realpath(__file__).split("/")
    path = "/".join(tmp[:-1]) + "/"
except Exception:
    path = ""

i = 0
questions = []
questions_all = []
r = requests.get(url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
i = 1
for row in csv.DictReader(csvio):
    if row['order'].strip() != '':
        item = {
            'id': row['id'].strip(),
            'name': row['name'].strip(),
            'question': row['question'].strip(),
            'description': row['description'],
            'order': float(row['order'].strip())
        }
        questions.append(item)
        order = float(row['order'].strip())
    else:
        order = 1000000 + i
        i += 1
    # tags = row[7].split(', ')
    it = {
        'id': row['id'].strip(),
        'name': row['name'].strip(),
        'question': row['question'].strip(),
        'description': row['description'],
        'order': order
    }
    questions_all.append(it)

questions = sorted(questions, key=lambda x: x['order'])
questions_all = sorted(questions_all, key=lambda x: x['order'])
# print questions

# save file
with open(path + 'questions.json', 'w') as outfile:
    json.dump(questions, outfile, ensure_ascii=False)
with open(path + 'questions_all.json', 'w') as outfile:
    json.dump(questions_all, outfile, ensure_ascii=False)
