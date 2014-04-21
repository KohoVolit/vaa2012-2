# -*- coding: utf-8 -*-

import csv
import json
import re
from slugify import slugify

def vote2vote (vote):
  if vote == 'Ano':
    return 1
  if vote == 'Ne':
    return -1
  else:
    return 0

# read voters
i = 0
voters = {}
with open('voters.tsv','r') as f:
  csvreader = csv.reader(f,delimiter="\t")
  for row in csvreader:
    if i == 0:
      nothing = 0
    else:
      voter = {
        'id': row[0].strip(),
        'name': row[1].strip(),
        'short_name': row[2].strip(),
        'code': row[3].strip(),
        'friendly_name': slugify(row[2].strip())
      }
      voters[voter['code']] = voter
    i = i + 1
    
#print voters

#get votes and details (comments)
i = 0
details = {}
print "mismatching codes:"
with open('answers.tsv','r') as f:
  csvreader = csv.reader(f,delimiter="\t")
  for row in csvreader:
    if i == 0:
      questions = {} # col: id
      for j in range(0,41):
        col = (4 + 2*j)
        questions[col] = re.search('\d*', row[col]).group(0)
      #print questions
    else:
      try:
        votes = {}
        for key in questions:
          # "votes[id] = vote"
          votes[questions[key]] = vote2vote(row[key])
          #details
          try:
            details[questions[key]]
          except:
            details[questions[key]] = {}
          if row[key+1].strip() != "":
            voter_id = voters[row[2].strip()]['id']
            details[voter_id][questions[key]] = row[key+1].strip()
        #print votes
        voters[row[2].strip()]['vote'] = votes
        
      except:
        print row[2].strip()
    i = i + 1

#reorder as list and deselect voters with no votes:
print "not answered:"
data = []
nodata = []
for key in voters:
  try:
    voters[key]['vote']
  except:
    print voters[key]['short_name']
    del voters[key]['code']
    nodata.append(voters[key]) 
  else:
    del voters[key]['code']
    data.append(voters[key])  

#order by alphabet
data = sorted(data, key=lambda x: x['friendly_name'])    
nodata = sorted(nodata, key=lambda x: x['friendly_name'])

# db-like file for R
votesdb = []
for item in data:
  for key in item['vote']:
    votesdb.append({"vote":item['vote'][key],"voter":int(item['id']),"question":int(key)})
  
#save files 
with open('answers.json', 'w') as outfile:
  json.dump(data, outfile)
outfile.close()
with open('noreply.json', 'w') as outfile:
  json.dump(nodata, outfile)
outfile.close()
with open('details.json', 'w') as outfile:
  json.dump(details, outfile)
outfile.close()
with open('matrix.json', 'w') as outfile:
  json.dump(votesdb, outfile)
outfile.close()
