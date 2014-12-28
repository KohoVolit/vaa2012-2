'''creates questions.json from google sheet 
'''

import json
import requests

url = "https://spreadsheets.google.com/feeds/list/1sk_hz5VS7V5y2jGQVwYgucAbcMyyVSITMZEWRUoG4KU/1/public/full?alt=json"
r = requests.get(url)
r.raise_for_status()
spreadsheet = json.loads(r.text)

data = []
for row in spreadsheet["feed"]["entry"]:
    item = {
        "id": row["gsx$id"]["$t"].strip(),
        "order": float(row["gsx$order"]["$t"].strip()),
        "question": row["gsx$question"]["$t"].strip(),
        "name": row["gsx$name"]["$t"].strip(),
        "description": row["gsx$description"]["$t"].strip()
    }
    data.append(item)

data = sorted(data, key=lambda x:x['order'])

with open('questions.json', 'w') as outfile:
  json.dump(data, outfile)
