'''creates answers.json from google sheet 
'''

#def vote2vote (vote):
#  if vote == 'pro':
#    return 1
#  if vote == 'proti':
#    return -1
#  if vote == 'zdržel se':
#    return 0
#  else:
#    return 0

import json
import requests
import slugify

# adding parties:
url = "https://spreadsheets.google.com/feeds/list/1uRAunXj_ohdWl75aiox66oRaQE69Ns_4004RXLOu08s/1/public/full?alt=json"
r = requests.get(url)
r.raise_for_status()
spreadsheet = json.loads(r.text)
clubs = {}
for row in spreadsheet["feed"]["entry"]:
    clubs[row["gsx$id"]["$t"].strip()] = row["gsx$clubshort"]["$t"].strip()



url = "https://spreadsheets.google.com/feeds/list/1Z2ZbRGQi4IQEK1vhri59pzQFYKYl0AGxFGTrmpLoLsg/1/public/full?alt=json"
r = requests.get(url)
r.raise_for_status()
spreadsheet = json.loads(r.text)

data = {}
for row in spreadsheet["feed"]["entry"]:
    mp_id = row["gsx$mpid"]["$t"].strip()
    try:
        data[mp_id]
    except:
        data[mp_id] = {
            "given_name": row["gsx$givenname"]["$t"].strip(),
            "family_name": row["gsx$familyname"]["$t"].strip(),
            "name": row["gsx$familyname"]["$t"].strip() + " " + row["gsx$givenname"]["$t"].strip(),
            "vote": {},
            "friendly_name": slugify.slugify(clubs[row["gsx$mpid"]["$t"].strip()]),
            "short_name": clubs[row["gsx$mpid"]["$t"].strip()],
            "id": mp_id
        }
    data[mp_id]['vote'][row["gsx$voteeventid"]["$t"].strip()] = int(row["gsx$optioncode"]["$t"].strip())

with open('answers.json', 'w') as outfile:
  json.dump(data, outfile)
