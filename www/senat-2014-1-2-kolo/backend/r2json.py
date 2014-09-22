# -*- coding: utf-8 -*-

import csv
import json

# order of voters
#i = 0
#order0 = []
#with open('order.tsv','r') as f:
#  csvreader = csv.reader(f,delimiter="\t")
#  for row in csvreader:
#    if i == 0:
#      nothing = 0
#    else:
#      order0.append({'id':row[1],'value':float(row[2])})
#    i = i+1

#order = []
#orderob = {}
#order1 = sorted(order0, key=lambda x: x['value'])
#for k in order1:
#  order.append({k['id'] : k['value']})
#  orderob[k['id']]= k['value']

#print order

# questions' coeffs
i = 0
qcoefs = {}
with open('qcoefs.tsv','r') as f:
  csvreader = csv.reader(f,delimiter="\t")
  for row in csvreader:
    if i == 0:
      nothing = 0
    else:
      qcoefs[row[1]] = float(row[2])
    i = i + 1
print qcoefs

#reorder answers.json
answersf = open('answers.json')
answers = json.load(answersf)
answersf.close()

#as ordered matrix:
#answers2 = []
#for item in answers:
#  item2 = item
#  item2['d1'] = orderob[item['id']]
#  answers2.append(item2)
#  
#answers2 = sorted(answers2, key=lambda x:x['d1'])
#print answers2

#as object:
answers2 = {}
for item in answers:
  answers2[item['id']] = item

print answers2

#save files 
with open('answers2.json', 'w') as outfile:
  json.dump(answers2, outfile)
outfile.close()
with open('qcoefs.json', 'w') as outfile:
  json.dump(qcoefs, outfile)
outfile.close()
