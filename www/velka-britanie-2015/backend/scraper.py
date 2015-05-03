import vpapi
import json
import slugify

ves = ["30192", "30380", "30892", "31058", "31238", "31333", "32185", "32835", "33176", "33180", "33351", "34005", "34039", "34570", "34573", "34685", "34759", "34795", "34796", "34806", "34825", "34971", "35006", "35072", "35075", "35083"]

def vote2vote (vote):
  if vote == 'yes':
    return 1
  if vote == 'no':
    return -1
  if vote == 'abstain':
    return -1
  else:
    return 0

answers = {}
groups = {}
mps = {}

vpapi.parliament('sk/nrsr')
for ve in ves:
    print(ve)
    vedb = vpapi.get("vote-events", where={"sources.url":{"$regex":"ID="+ve+"$"}})
    idd = vedb['_items'][0]['id']
    r = vpapi.getall("votes",where={"vote_event_id":idd})
    for row in r:
        try:
            answers[row['voter_id']]
        except:
            answers[row['voter_id']] = {"vote":{}}
        answers[row['voter_id']]['vote'][ve] = vote2vote(row['option'])
        if row['group_id'] is not None:
            try:
                groups[row['group_id']]
            except:
                group = vpapi.get("organizations/"+row['group_id'])
                groups[row['group_id']] = {"name": group['name'].replace('Klub ','')}
                groups[row['group_id']]['slug'] = slugify.slugify(groups[row['group_id']]['name'])
                print(groups[row['group_id']]['slug'])
            answers[row['voter_id']]['friendly_name'] = groups[row['group_id']]['slug']
            answers[row['voter_id']]['short_name'] = groups[row['group_id']]['name']
        else:
            answers[row['voter_id']]['friendly_name'] = 'nezaradeni'
            answers[row['voter_id']]['short_name'] = 'Nezaradení'
        try:
            mps[row['voter_id']]
        except:
            mp = vpapi.get("people/"+row['voter_id'])
            mps[row['voter_id']] = mp['name']
            print(mp['name'])
        answers[row['voter_id']]['name'] = mps[row['voter_id']]
        answers[row['voter_id']]['id'] = row['voter_id']
        
#        print(row)
#        raise(Exception)
#    
#    raise(Exception)
    
