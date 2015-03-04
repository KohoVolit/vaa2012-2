'''creates questions.json from google sheet 
'''

import json
import requests

url = "https://spreadsheets.google.com/feeds/list/1cal-O9chrFZj5xXCNQwRSSJndY76dOLYMyyMlqgcQQg/1/public/full?alt=json"
r = requests.get(url)
r.raise_for_status()
spreadsheet = json.loads(r.text)

data = []
for row in spreadsheet["feed"]["entry"]:
    item = {
        "id": row["gsx$id"]["$t"].strip(),
        "order": float(row["gsx$order"]["$t"].strip()),
        "question": row["gsx$questionen"]["$t"].strip(),
        "name": row["gsx$nameen"]["$t"].strip(),
        "description": row["gsx$descriptionen"]["$t"].strip()
    }
    if row["gsx$documentlink"]["$t"].strip() != '':
        item['document_link'] = row["gsx$documentlink"]["$t"].strip()
    if row["gsx$voteeventlink"]["$t"].strip() != '':
        item['link'] = row["gsx$voteeventlink"]["$t"].strip()
    data.append(item)

data = sorted(data, key=lambda x:x['order'])

with open('questions.json', 'w') as outfile:
  json.dump(data, outfile)
