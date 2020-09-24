"""Create questions JSONs."""

import gspread
import json

gc = gspread.service_account()

path = "/home/michal/project/volebnikalkulacka.cz/dev/kraje-2020/questions/"

with open(path + "settings.json", encoding="utf-8") as f:
    settings = json.load(f)

# regions - codes
sheetR = gc.open_by_key(settings['regions_key'])
worksheetR = sheetR.worksheet(settings['regions_sheet_name'])
codesR = worksheetR.col_values(settings['regions_column'])[1:]

# questions
sheetQ = gc.open_by_key(settings['questions_key'])
for code in codesR:
    questions = []
    questions_all = []
    worksheet = sheetQ.worksheet(code)
    data = worksheet.get_all_records()
    i = 1
    for row in data:
        if str(row['order']).strip() != '':
            item = {
                'id': row['id'],
                'name': row['name'].strip(),
                'question': row['question'].strip(),
                'description': row['description'],
                'order': float(str(row['order']).strip())
            }
            questions.append(item)
            questions_all.append(item)
        else:
            item = {
                'id': row['id'],
                'name': row['name'].strip(),
                'question': row['question'].strip(),
                'description': row['description'],
                'order': 1000000 + i
            }
            i += 1
            questions_all.append(item)
    # sort questions
    questions = sorted(questions, key=lambda x: x['order'])
    questions_all = sorted(questions_all, key=lambda x: x['order'])
    # save file
    with open(path + 'questions_' + code + '.json', 'w') as outfile:
        json.dump(questions, outfile, ensure_ascii=False)
    with open(path + 'questions_all_' + code + '.json', 'w') as outfile:
        json.dump(questions_all, outfile, ensure_ascii=False)