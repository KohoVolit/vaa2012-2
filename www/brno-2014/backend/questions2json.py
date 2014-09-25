# -*- coding: utf-8 -*-

import csv
import json

i = 0
questions = []
question_ids = []
with open('source/questions.tsv','r') as f:
  csvreader = csv.reader(f,delimiter="\t")
  for row in csvreader:
    if i == 0:
      nothing = 0
    else:
      if row[4].strip() != '':
        item = {
          'id': row[0].strip(),
          'name': row[1].strip(),
          'question': row[2].strip(),
          'description': row[3].strip(),
          'order': float(row[4].strip())
        }
        questions.append(item);
        question_ids.append(item['id'])
        
    i = i + 1
 
questions = sorted(questions, key=lambda x:x['order'])
print(questions)

#save file
with open('questions.json', 'w') as outfile:
  json.dump(questions, outfile)
outfile.close()

with open('question_ids.tsv', 'w') as outfile:
  writer = csv.writer(outfile, delimiter="\t",quoting=csv.QUOTE_MINIMAL)
  for item in question_ids:
    writer.writerow([item])
outfile.close()
