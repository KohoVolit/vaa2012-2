# get all votes, etc.

import csv
import json
import vpapi
import re
import slugify

data = {}
ves = []
with open("questions.csv") as fin:
    csvd = csv.DictReader(fin)
    for r in csvd:
        ves.append(r)

o2o = {
    "yes": 1,
    "no": -1,
    "abstain": -1,
    "not voting": 0,
    "absent": 0
}

g2g = {
    "Senátorský klub Občanské demokratické strany":"ODS",
    "Klub otevřené demokracie":"KOD",
    "Klub TOP 09 a Starostové":"TOP 09 a STAN",
    "Senátorský klub České strany sociálně demokratické":"ČSSD",
    "Senátorský klub Unie svobody - Občanské demokratické aliance":"US-DEU",
    "Senátoři nezařazení do klubu":"Nezařazení",
    "Senátorský klub SPOZ+KSČM+Severočech":"SPOZ+KSČM+Severočech",
    "Senátorský klub ANO + Severočeši.cz":"ANO + Severočeši.cz",
    "Senátorský klub Křesťanské a demokratické unie - Československé strany lidové":"KDU-ČSL",
    "Klub Starostové a Ostravak":"STAN a Ostravak",
    "Senátorský klub Občanské demokratické aliance":"ODA",
    "Klub pro obnovu demokracie - KDU-ČSL a nezávislí":"KOD",
    "Senátorský klub KDU-ČSL a nezávislí":"KDU-ČSL",
    'Senátorský klub "Nezávislí"':'Nezávislí',
    "Klub Starostové a nezávislí":"STAN",
    "Senátorský klub SNK":"SNK",
    "Senátorský klub SPO+KSČM+Severočech":"SPO+KSČM+Severočech",
    "Nezařazení":"Nezařazení",
    "Senátorský klub Zelení - nezávislí":"Zelení",
    'Senátorský klub "Nezařazení"':"Nezařazení"
}

# psp

parliaments = [
    {
        "code_api" : "cz/psp",
        "code": "psp",
        "code_csv": "lower",
        "name": "Sněmovna"
    },
    {
        "code_api" : "cz/senat",
        "code": "senat",
        "code_csv": "upper",
        "name": "Senát"
    }
    
    
]

for p in parliaments:
    vpapi.parliament(p['code_api'])
    for ve in ves:
        if ve[p['code_csv'] + '_vote_event_id'] != '':
            votes = vpapi.getall("votes",where={"vote_event_id":ve[p['code_csv'] + '_vote_event_id']})
            print(ve[p['code_csv'] + '_vote_event_id'])
            for v in votes:
                try:
                    data[p['code'] + '_' + v['voter_id']]
                except:
                    data[p['code'] + '_' + v['voter_id']] = {}
                    data[p['code'] + '_' + v['voter_id']]['votes'] = {}
                    data[p['code'] + '_' + v['voter_id']]['chamber'] = p['code']
                    data[p['code'] + '_' + v['voter_id']]['chamber_name'] = p['name']
                    data[p['code'] + '_' + v['voter_id']]['id'] = v['voter_id']
                data[p['code'] + '_' + v['voter_id']]['votes'][ve['id']] = o2o[v['option']] * int(ve[p['code_csv'] + '_polarity'])
                data[p['code'] + '_' + v['voter_id']]['group_id'] = v['group_id']
    
    os = {}   
    for k in data:
        if data[k]['chamber'] == p['code']:
            mpapi = vpapi.get("people",where={"id":data[k]['id']})
            mp = mpapi["_items"][0]
            data[k]['family_name'] = mp['family_name']
            data[k]['name'] = mp['family_name'] + ' ' + mp['given_name']
            data[k]['given_name'] = mp['given_name']
            try:
                o = os[data[k]["group_id"]]
            except:
                oapi = vpapi.get("organizations",where={"id":data[k]["group_id"]})
                o = oapi["_items"][0]
                os[data[k]["group_id"]] = o
            data[k]['group'] = o['name']
            if data[k]['chamber'] == 'senat':
                data[k]['party_abbreviaton'] = g2g[o['name']]
                if data[k]['id'] == '253':
                    data[k]['picture'] = 'http://senat.cz/images/senatori/' + slugify.slugify(data[k]['family_name']) + slugify.slugify(data[k]['given_name'])[0:1] + '_295.jpg'
                else:
                    data[k]['picture'] = 'http://senat.cz/images/senatori/' + slugify.slugify(data[k]['family_name']) + slugify.slugify(data[k]['given_name'])[0] + '_295.jpg'
            else:
                data[k]['party_abbreviaton'] = o['other_names'][0]['name']
                data[k]['picture'] = "http://www.psp.cz/eknih/cdrom/2013ps/eknih/2013ps/poslanci/i" + data[k]["id"] + '.jpg'
            data[k]['party_logo'] = "image/logo/" + slugify.slugify(data[k]['party_abbreviaton']) + ".jpg"
            

with open("../answers.json","w") as fout:
    json.dump(data,fout)
                             
            
            

 
# senat           
     
