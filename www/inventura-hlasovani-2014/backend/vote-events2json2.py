import json
import slugify
import csv

out = {
    "spo": {
        "id":"spo",
        "short_name":'SPO',
        'name': "Strana Práv Občanů",
        "friendly_name": 'spo',
        "vote":{}
    },
    "svobodni": {
        "id":"svobodni",
        "short_name":'Svobodní',
        'name': "Strana svobodných občanů",
        "friendly_name": 'svobodni',
        "vote":{}
    },
    "pirati": {
        "id":"pirati",
        "short_name":'Piráti',
        'name': "Česká pirátská strana",
        "friendly_name": 'pirati',
        "vote":{}
    },
    "zeleni": {
        "id":"zeleni",
        "short_name":'Zelení',
        'name': "Strana zelených",
        "friendly_name": 'zeleni',
        "vote":{}
    },
}
with open("answers2.csv") as infile:
    csvr = csv.reader(infile)
    for row in csvr:
        out['spo']['vote'][row[5]] = int(row[1])
        out['svobodni']['vote'][row[5]] = int(row[2])
        out['pirati']['vote'][row[5]] = int(row[3])
        out['zeleni']['vote'][row[5]] = int(row[4])

with open("answers2.json", "w") as outfile:
    json.dump(out,outfile)


