import csv
import datetime
import json
import re
import requests
import os

r = requests.get("https://www.hithit.com/cs/project/4067/volebni-kalkulacka-on-steroids")

path = os.path.dirname(os.path.realpath(__file__)) + "/"

if r.status_code == 200:
    text = r.text
    pattern = 'Přispěvatel'
    m = re.search(pattern, text)
    pattern2 = '<strong>([0-9]{1,})'
    m2 = re.search(pattern2, text[m.start():])
    pattern3 = 'currency " >([0-9]{1,})'
    m3 = re.search(pattern3, text.replace('&nbsp;', ''))
    with open(path + "data.json", "w") as fdata:
        json.dump({
            "date": datetime.datetime.now().isoformat(),
            "amount": m3.group(1),
            "supporters": m2.group(1)
        }, fdata)
