# adding answers for zeman

import csv
import json

with open("answers.json") as fin:
    answers = json.load(fin)
    for row in answers:
        row['answered_by'] = "candidate"

additional = {
    "last_name": "Zeman",
    "given_name": "Miloš",
    "name": "Miloš Zeman",
    "picture": "zeman.jpg",
    "id": "9",
    "votes": {},
    "details": {},
    "answered_by": "expert"
}

with open("zeman.csv") as fin:
    dr = csv.DictReader(fin)
    for row in dr:
        additional['votes'][row['id']] = int(row['answer'])
        additional['details'][row['id']] = row['detail']

answers.append(additional)

with open("answers_complete.json", "w") as fout:
    json.dump(answers, fout, ensure_ascii=False, sort_keys=True)
