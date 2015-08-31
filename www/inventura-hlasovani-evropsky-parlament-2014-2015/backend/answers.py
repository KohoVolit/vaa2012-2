# prepares answers files

import json
import slugify
import os
import csv

countries = []
with open("/home/michal/project/vaa2012-2/dev/ep2015/member_states.csv") as fin:
    csvd = csv.DictReader(fin)
    for row in csvd:
        countries.append(row['code'])

meps = []
data = {}
files = ["meps_current","meps_ins","meps_outs"]
for f in files:
    with open("../" + f + ".json") as fin:
        meps = meps + json.load(fin)


g2g = {
    'Europe of Freedom and Direct Democracy Group':"group_icon_efd",
    'Group of the Alliance of Liberals and Democrats for Europe':'group_icon_aldeadle',
    'Non-attached Members':'group_icon_ni',
    'European Conservatives and Reformists Group':'group_icon_ecr',
    'Group of the Progressive Alliance of Socialists and Democrats in the European Parliament':'group_icon_sd',
    'Group of the Greens/European Free Alliance':'group_icon_greensefa',
    'Europe of Nations and Freedom Group':'http://www.europarl.europa.eu/ep_framework/img/group/group_icon_enf.gif',
    'Confederal Group of the European United Left - Nordic Green Left':'group_icon_guengl',
    "Group of the European People's Party (Christian Democrats)":'group_icon_epp'
}

ve2ve = {
    "1":"0773",
    "2":"0989",
    "3":"0369",
    "4":"0959",
    "5":"0943",
    "6":"0552",
    "7":"0349",
    "8":"0386",
    "9":"0217",
    "10":"0538",
    "11":"0282",
    "12":"0040",
    "13":"0195",
    "14":"0746",
    "15":"0286",
    "16":"0260",
    "17":"0343",
}

o2o = {
    'N': 0,
    '-': -1,
    '+': 1,
    '0': 0,
    'A': 0,
    'M': 0
}

name2id = {}
data = {}
for mep in meps:
    mep['party_logo'] = 'image/' + slugify.slugify(mep['party']) + ".jpg"
    mep['political_group_logo'] = 'http://www.europarl.europa.eu/ep_framework/img/group/' + g2g[mep['political_group']] + ".gif"
    mep['country_logo'] = "http://www.europarl.europa.eu/ep_framework/img/flag/flag_icon_" + mep['country_code'] + ".gif"
    mep['votes'] = {}
    data[mep['id']] = mep
    name2id[slugify.slugify(mep['name'])] = mep['id']
    

ves = []
for k in ve2ve:
    path = "/home/michal/project/vaa2012-2/dev/ep2015/votes_votewatch/" + "vote_event_" + ve2ve[k] + ".json"
    with open(path) as fin:
        votes = json.load(fin)
        for m in votes['all_votes']:
             idd = name2id[slugify.slugify(m['mep_name_name'])]
             data[idd]['votes'][k] = o2o[m['euro_vot_valoare_sign']]

with open("answers_eu.json","w") as fout:
    json.dump(data,fout)

for cc in countries:
    datacc = {}
    for k in data:
        if data[k]['country_code'] == cc:
            datacc[k] = data[k]
    with open("answers_" + cc + ".json","w") as fout:
        json.dump(datacc,fout)
    
