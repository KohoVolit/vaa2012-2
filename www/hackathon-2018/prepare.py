import json

path = "/home/michal/project/offline/calculation/"

with open(path + "questions_original.json") as fin:
    qo = json.load(fin)

ids = [1, 11, 34, 10, 96, 60, 90, 3, 100, 49]

questions = []
for question in qo:
    if int(question['id']) in ids:
        questions.append(question)

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
