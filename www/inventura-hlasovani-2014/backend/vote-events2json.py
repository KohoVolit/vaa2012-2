'''creates vote-events from API
'''

import vpapi
import json
import slugify

vpapi.parliament("cz/psp")

vote_events = {}
next = True
page = 1

with open('people.json') as data_file:
    people = json.load(data_file)
with open('parties.json') as data_file:
    parties = json.load(data_file)
with open('option-meaning.json') as data_file:
    option_meaning = json.load(data_file)
    
source_vote_events = ["58720", "59235", "59862", "59952", "59651", "58818", "59773", "58748", "59507", "59664", "59653", "59996", "58646", "59955", "59034", "59698", "59928", "59766", "58699", "59789", "59801", "59516", "59042", "58640", "59475", "58565", "59710", "58782"]
#"60089", 

for key in source_vote_events:
    rve = vpapi.get("vote-events",where={"identifier":key},embed=["motion"])

    ve = rve["_items"][0]
    vote_event = {
        "id": ve["id"],
        "start_date": ve["start_date"],
        "identifier": ve["identifier"],
        "result": ve["result"],
        "motion": ve["motion"]
    }
    next = True
    page = 1
    votes = []
    while next:
        rv = vpapi.get("votes",page=page,where={"vote_event_id":ve["id"]})
        for v in rv["_items"]:
            votes.append({
                "voter_id": v["voter_id"],
                "group_id": v["group_id"],
                "option": v["option"]
            })
        page = page + 1
        try:
            rv["_links"]["next"]
        except:
            next = False
    vote_event["votes"] = votes
    if len(votes) == 0:
        issue["vote_events"][key]['available_vote_event'] = False
    
    vote_events[ve["identifier"]] = vote_event

def group2party(g,parties):
    for k in parties:
        if g in parties[k]['children']:
            return parties[k]['abbreviation']

out = {}
for k in vote_events:
    for v in vote_events[k]["votes"]:
        try:
            out[v['voter_id']]
        except:
            out[v['voter_id']] = {
                "id": v['voter_id'],
                "name": people[v['voter_id']]['name'],
                "friendly_name": slugify.slugify(group2party(v['group_id'],parties)),
                "short_name": group2party(v['group_id'],parties),
                "vote":{}
            }
        out[v['voter_id']]['vote'][vote_events[k]['identifier']] = int(option_meaning[vote_events[k]['motion']['requirement']]['options'][v['option']])

with open("answers.json", "w") as outfile:
    json.dump(out,outfile)

