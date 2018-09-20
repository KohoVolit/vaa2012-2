# prepare for "Questions" list

import csv

with open("prepared.csv", "w") as fout:
    csvw = csv.writer(fout)
    with open("questions.tsv") as fin:
        csvr = csv.reader(fin, delimiter='\t')
        i = 1
        for row in csvr:
            nrow = [
                'MULTIPLE_CHOICE',
                str(i) + ". " + row[0].strip(),
                row[1].strip(),
                '',
                'YES',
                'Ano',
                'Ne',
                'Nevím / nemám jednoznačný názor'
            ]
            csvw.writerow(nrow)
            nrow2 = [
                'PARAGRAPH_TEXT',
                'Případný komentář k otázce ' + str(i),
                '',
                '',
                'NO'
            ]
            csvw.writerow(nrow2)
            nrow3 = [
                'CHECKBOX',
                'Téma otázky ' + str(i) + ' je pro mě velmi důležité.',
                '',
                '',
                'NO',
                'Ano'
            ]
            csvw.writerow(nrow3)
            i += 1
