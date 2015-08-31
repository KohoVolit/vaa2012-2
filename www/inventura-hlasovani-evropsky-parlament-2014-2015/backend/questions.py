# creates questions.json

import csv
import json

appendix = "_hu"

data = []
with open("questions_hu.csv") as fin:
    csvd = csv.DictReader(fin)
    for r in csvd:
        if r['order'].strip() != '':
            it = {
                "id": r['id'],
                "name": r['name' + appendix],
                "question": r['question' + appendix],
                "order": float(r['order']),
            }
            try:
                it['link'] = r['vote_event_link']
            except:
                nothing = 0
            try:
                it['description'] = r['description' + appendix]
            except:
                nothing = 0
            data.append(it)

data = sorted(data, key=lambda item: item['order'])

with open("questions" + appendix + ".json","w") as fout:
    json.dump(data,fout)
        
