# creates table fortatted as "table for form" - for formCreator

import csv

data = []

with open("questions4form.csv", "w") as fout:
    csvw = csv.writer(fout)
    with open("questions.csv") as fin:
        dr = csv.DictReader(fin)
        i = 1
        for row in dr:
            item = [
                '',
                '',
                'MULTIPLE_CHOICE',
                str(i) + '. ' + row['question'],
                '',
                '',
                'YES',
                'Ano',
                'Ne',
                'Nevíme / nemáme jednoznačný názor'
            ]
            csvw.writerow(item)
            item2 = [
                '',
                '',
                'PARAGRAPH_TEXT',
                'Případný komentář k otázce ' + str(i),
                '',
                '',
                'NO'
            ]
            csvw.writerow(item2)
            i += 1
