'''creates questions.json from google sheet 
'''

import json
import requests

url = "https://spreadsheets.google.com/feeds/list/1rTJm4qoie_QiPrL_B1MjslBeNwYJ4VTb1L75WMOGiNA/1/public/full?alt=json"
r = requests.get(url)
r.raise_for_status()
spreadsheet = json.loads(r.text)

data = []
for row in spreadsheet["feed"]["entry"]:
    item = {
        "id": row["gsx$id"]["$t"].strip(),
        "order": float(row["gsx$order"]["$t"].strip()),
        "question": row["gsx$questionsk"]["$t"].strip(),
        "name": row["gsx$namesk"]["$t"].strip(),
        "description": row["gsx$descriptionsk"]["$t"].strip()
    }
    if row["gsx$documentlink"]["$t"].strip() != '':
        item['document_link'] = row["gsx$documentlink"]["$t"].strip()
    item['link'] = 'http://www.nrsr.sk/web/Default.aspx?sid=schodze/hlasovanie/hlasklub&ID=' + item['id']
    data.append(item)

data = sorted(data, key=lambda x:x['order'])

with open('questions.json', 'w') as outfile:
  json.dump(data, outfile)
