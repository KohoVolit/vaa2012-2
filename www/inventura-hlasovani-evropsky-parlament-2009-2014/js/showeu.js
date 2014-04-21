/* shows comparison within eu */
eushown = false;
pos_eu = [];
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

function show_eu(data) {
  voter1 = answers["0"]['vote'];
  for (mep in data) {
    tmp = data[mep];
    tmp['match'] = calc_match(voter1,data[mep]['vote'],voted,weights);
    pos_eu.push(tmp);
  }
  pos_eu.sort(function(a,b) {return - a['match'] + b['match'];});
  
  showtable(pos_eu);
}

function showtable(pos) {
   country = {
    'Austria' : 'at',
    'Belgium' :  'be',
    'Bulgaria' :  'bg',
    'Croatia' :  'hr',
    'Cyprus' :  'cy',
    'Czech Republic' : 'cz',
    'Denmark' :  'dk',
    'Estonia' :  'ee',
    'Finland' :  'fi',
    'France' :  'fr',
    'Germany' :  'de',
    'Greece' :  'gr',
    'Hungary' :  'hu',
    'Ireland' :  'ie',
    'Italy' :  'it',
    'Latvia' :  'lv',
    'Lithuania' :  'lt',
    'Luxembourg' :  'lu',
    'Malta' :  'mt',
    'Netherlands' : 'nl',
    'Poland' :  'pl',
    'Portugal' :  'pt',
    'Romania' :  'ro',
    'Slovakia' :  'sk',
    'Slovenia' :  'si',
    'Spain' :  'es',
    'Sweden' :  'se',
    'United Kingdom' : 'uk'
  };
  
  group = {
    'ppe': 'epp',
    'na': 'ni',
    's-d': 'sd',
    'alde': 'aldeadle',
    'verts-ale': 'greensefa',
    'gue-ngl': 'guengl',
    'ecr': 'ecr',
    'efd': 'efd',
    'undefined': 'ni'
    
  }

  html = '<table class="table table-striped"><thead>';
  html += '<tbody>';
  for (key in pos) {
    mep = pos[key];
    html += '<tr><td>';
    html += '<img src="http://www.europarl.europa.eu/ep_framework/img/group/group_icon_'+ group[mep['group_friendly']]+'.gif" img-rounded media-object pull-left" alt="'+ mep['group'] +'" title="'+ mep['group'] +'" /> ';
    html += '<img src="http://www.europarl.europa.eu/ep_framework/img/flag/flag_icon_' + country[mep['country']] +'.gif" title="'+ mep['country'] +'">';
    html += " <strong>" + mep['last_name'] + "</strong> " + mep['first_name'] + "</td><td><span class='small'>" + mep['party'] + "</span></td>";
    rmatch = Math.round(mep['match']);
    html += "<td>" + rmatch + "&nbsp;%</td></tr>\n";
  }
  html += "</tbody></table>";
  $('#euro').html(html);
}

