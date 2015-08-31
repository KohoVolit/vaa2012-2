
/* shows comparison within eu */
eushown = false;
pos_eu = [];
var voted = Array();
for (k in user['votes']) {
    if (user['votes'][k] != 0) voted.push(k);
}
function addme(data) {
    out = data;
    out['0'] = me;
    return out;
}
data = addme(answers)

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  if (!(eushown)) {
    $.ajax({
      url: '../answers_eu.json',
      success: function(data) {
        show_eu(data);
        eushown = true;
      }
    });
  }
});

function calc_match(voter1,voter2,voted,weights) {
    s = 0;
    c = 0;
    for (i in voted) {
      id = voted[i];
      if (typeof (voter1[id]) != 'undefined') {
        if (typeof (voter2[id]) != 'undefined') {
          if (typeof (weights[id]) != 'undefined') w = 2; //default weight is 2 weights[id];
          else w = 1;
          s += voter1[id] * voter2[id] * w;
          c += w;
        }
      }
    }
    if (c == 0) return rescale(0);
    else return rescale (s/c);
}

function show_eu(data) {
  voter1 = answers["0"]['votes'];
  for (mep in data) {
    tmp = data[mep];
    tmp['match'] = calc_match(voter1,data[mep]['votes'],voted,weights);
    pos_eu.push(tmp);
  }
  pos_eu.sort(function(a,b) {return - a['match'] + b['match'];});
  
  showtable(pos_eu);
}

function showtable(pos) {

  html = '<table class="table table-striped"><thead>';
  html += '<tbody>';
  for (key in pos) {
    mep = pos[key];
    html += '<tr><td>';
    html += '<img src="' + mep.political_group_logo + '" img-rounded media-object pull-left" alt="'+ mep['political_group'] +'" title="'+ mep['political_group'] +'" /> ';
    html += '<img src="' + mep['country_logo'] +'" title="'+ mep['country'] +'">';
    html += " <strong>" + mep['name'] + "</strong></td><td><span class='small'>" + mep['party'] + "</span></td>";
    rmatch = Math.round(mep['match']);
    html += "<td>" + rmatch + "&nbsp;%</td></tr>\n";
  }
  html += "</tbody></table>";
  $('#euro').html(html);
}

  function rescale (num) {
    return (num + 1) * 50;
  }

