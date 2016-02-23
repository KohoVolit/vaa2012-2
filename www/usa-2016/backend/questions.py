# -*- coding: utf-8 -*-

# create questions_xx.json files (more languages)

import csv
import io
import json
import logging
import requests

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

url = settings['vote-events_url']

questions = {}
r = requests.get(url)
r.encoding = 'utf-8'
csvio = io.StringIO(r.text, newline="")
for row in csv.DictReader(csvio):
    for lang in settings['vote-events_languages']:
        questions[lang] = []
        if row['order'].strip() != "":
            item = {}
            for c in settings['vote-events_columns']:
                if c in settings['vote-events_number_columns']:
                    item[c] = float(row[c])
                else:
                    item[c] = row[c]
            for c in settings['vote-events_translatable_columns']:
                if c in settings['vote-events_number_columns']:
                    item[c] = float(row[c + '@' + lang])
                else:
                    item[c] = row[c + '@' + lang]
            questions[lang].append(item);


for lang in settings['vote-events_languages']:
    questions[lang] = sorted(questions[lang], key=lambda x:x['order'])
#print questions

#save files
for lang in settings['vote-events_languages']:
    with open(path+'../questions_'+lang+'.json', 'w') as outfile:
        json.dump(questions[lang], outfile)
