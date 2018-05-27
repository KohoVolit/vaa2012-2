import json

path = "/home/michal/project/volebnikalkulacka.cz/www/hackathon-2018/"

with open(path + "questions_all.json") as fin:
    qo = json.load(fin)

ids = [1, 11, 34, 10, 96, 60, 90, 3, 100, 49]

questions = [] * len(ids)
i = 0
for question in qo:
    if int(question['id']) in ids:
        for j in range(0, len(ids)):
            if ids[j] == int(question['id']):
                questions[j] = question
        i += 1

with open(path + "questions.json", "w") as fout:
    json.dump(questions, fout)

with open(path + "answers_original.json") as fin:
    ao = json.load(fin)

ids = [1, 4, 7, 8, 9, 12, 15, 20, 21, 24, 29]

answers = []
for answer in ao:
    if int(answer['id']) in ids:
        answers.append(answer)

with open(path + "answers.json", "w") as fout:
    json.dump(answers, fout)
