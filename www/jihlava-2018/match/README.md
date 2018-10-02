# API - Volební kalkulačka 2018 (prezident)

Version: 2017-12-31

## Questions
Second round (24 questions):

https://volebnikalkulacka.cz/prezidentske-volby-2018/questions_2.json

All questions sent to the candidates may be downloaded from here:

https://volebnikalkulacka.cz/prezidentske-volby-2018/questions_all.json

Final selection of questions are available here:

https://volebnikalkulacka.cz/prezidentske-volby-2018/questions.json

(see why and how the final questions are selected: https://www.facebook.com/KohoVolit.eu/videos/10154786242016621/ , starting at 1:15:20)

## Match calculation (user vs. candidates)
### Request
GET request to

https://volebnikalkulacka.cz/prezidentske-volby-2018/match/

with parameters:
- `format` - if `json`, returns JSON values; simple HTML table is returned otherwise
- `q` - JSON encoded user's answers in form: {`question_id`: `user's answer`} (`1` = Yes, `-1` = No, `0` = Neutral)
- `w` - JSON encoded user's extra weights in form: {`question_id`: `user's weight`} (`true` if user selected the question as extra important for them, default otherwise)
- `key` - value to distinguish among different sources (useful for further analyses of the source's users)
- `complete` - if `1`, include also candidates who did not answers and their replies were prepared by experts (i.e., Mr. Zeman in Czech presidential elections 2018) (only selected 35 questions!)
- `r2` - if `1`, returns only candidates for second round (use together with `complete=1`) 


#### Example
An user took the test using `Plaský plátek` app and answered:
- `no` to question with `id` = `1`
- `yes` to question with `id` = `2`, and
- selected question with `id` = `2` as extra important for them
- include Mr. Zeman with 35 answers prepared by experts

https://volebnikalkulacka.cz/prezidentske-volby-2018/match/?format=json&q={"1":-1,"2":1}&w={"2":true}&key=plasky_platek&complete=1

#### Alternative server
There is an alternative API server set for the Czech presidential elections API: https://a.volebnikalkulacka.cz

### Response
If the requested format is set to `json`: The response is (ordered) JSON array with individual items representing the candidates:

- `id` - candidate's `id`
- `family_name` - candidate's family name (surname)
- `given_name` - candidate's given name(s) (first name(s))
- `name` - candidate's formatted name
- `votes` - candidate's answers to the questions `question_id`: `answer` (`1` = Yes, `-1` = No, `0` = Neutral)
- details - possible candidate's explanations for their answers `question_id`: `some long explanation`
- `extra_important` - candidates could mark the topic of the question as "very important to them" `question_id`: `Ano` for extra important
- `result` - calculated match in [0, 1]
- `result_percent` - calculated match in percents [0, 100]
- `random` - random number
- `answered_by` - whether answered by `candidate` themselves or by an `expert` (`complete=1` only)

The candidates are ordered by `result` in descending order and if necessary also by `random` in ascending order (for candidates with equal `result`s)

#### CORS
If the requested `format` is set to `json`, following headers are also sent:

```
Access-Control-Allow-Origin: *
Access-Control-Allow-Methods: GET
Access-Control-Allow-Headers: X-Requested-With
```
