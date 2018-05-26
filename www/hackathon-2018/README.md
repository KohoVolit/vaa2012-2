# calculation
Calculation API for offline election calculator

## Match calculation (user vs. candidates)
### Request
GET request to

https://volebnikalkulacka.cz/hackathon-2018/

with parameters:
- `format` - if `json`, returns JSON values; simple HTML table is returned otherwise
- `q` - JSON encoded user's answers in form: {`question_id`: `user's answer`} (`1` = Yes, `-1` = No, `0` = Neutral)
- `key` - value to distinguish among different sources (useful for further analyses of the source's users)

#### Example
An user took the test during hackathon and answered:
- `no` to question with `id` = `1`
- `yes` to question with `id` = `11`

https://volebnikalkulacka.cz/hackathon-2018/?q={"1":-1,"11":1}&key=hackathon (`html table`)

or

https://volebnikalkulacka.cz/hackathon-2018/?q={"1":-1,"11":1}&key=hackathon&format=json (`json`)

### Response
The response is (ordered) JSON array with individual items representing the parties:

- `id` - party's `id`
- `name` - party name
- `abbreviation` - party's abbreviation
- `result` - calculated match in [0, 1]
- `result_percent` - calculated match in percents [0, 100]
- `random` - random number

The parties are ordered by `result` in descending order and if necessary also by `random` in ascending order (for candidates with equal `result`s)

#### CORS
Following headers are also sent:

```
Access-Control-Allow-Origin: *
Access-Control-Allow-Methods: GET
Access-Control-Allow-Headers: X-Requested-With
```
