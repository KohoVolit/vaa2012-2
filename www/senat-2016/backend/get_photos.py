#get photos from CRo

import csv
import requests

with open("senat.csv") as fin:
    csvdr = csv.DictReader(fin)
    for row in csvdr:
        with open("../image/photo/" + row['id'] + '.jpg', "wb") as fout:
            try:
                r = requests.get(row['foto'])
                if r.status_code == 200:
                    fout.write(r.content)
                print(row['id'])
                # raise(Exception)
            except:
                print("Except:" + row['id'])
