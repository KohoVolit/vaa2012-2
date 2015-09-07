# creates questions.json

import csv
import json

appendixes = ["_cs","_en"]

for appendix in appendixes:
    data = []
    with open("questions.csv") as fin:
        csvd = csv.DictReader(fin)
        for r in csvd:
            if r['order'].strip() != '':
                it = {
                    "id": r['id'],
                    "name": r['name' + appendix],
                    "question": r['question' + appendix],
                    "description": r['description' + appendix],
                    "order": float(r['order']),
                    "lower_link": r['lower_vote_event_link'],
                    "upper_link": r['upper_vote_event_link'],
                    "document_link": r['document_link'],
                    "lower_polarity": r['lower_polarity'],
                    "upper_polarity": r['upper_polarity']
                }
                
                data.append(it)

    data = sorted(data, key=lambda item: item['order'])

    with open("../questions" + appendix + ".json","w") as fout:
        json.dump(data,fout)
        
