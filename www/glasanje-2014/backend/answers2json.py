'''creates answers.json from google sheet 
'''

def vote2vote (vote):
  if vote == 'yes':
    return 1
  if vote == 'no':
    return -1
  if vote == 'missing':
    return 0
  else:
    return 0

import json
import requests
import slugify

url = "https://spreadsheets.google.com/feeds/list/1mBFNEfKtspn6GKhYPhh5d98afBUM-uAcdu3qr7-qP4c/1/public/full?alt=json"
r = requests.get(url)
r.raise_for_status()
spreadsheet = json.loads(r.text)

data = {}
for row in spreadsheet["feed"]["entry"]:
    mp_id = row["gsx$mpid"]["$t"].strip()
    data[mp_id] = {
        "given_name": row["gsx$givenname"]["$t"].strip(),
        "family_name": row["gsx$familyname"]["$t"].strip(),
        "name": row["gsx$familyname"]["$t"].strip() + " " + row["gsx$givenname"]["$t"].strip(),
        "vote": {},
        "friendly_name": slugify.slugify(row["gsx$party"]["$t"].strip()),
        "short_name": row["gsx$party"]["$t"].strip(),
        "id": mp_id
    }
    for i in range(1,19):
        data[mp_id]['vote'][str(i)] = vote2vote(row["gsx$n"+str(i)]["$t"].strip())

with open('answers.json', 'w') as outfile:
  json.dump(data, outfile)
