  var voted = Object.keys(user['vote']);  //http://stackoverflow.com/questions/3068534/getting-javascript-object-key-list


    data = addme(answers)
    var order = positions(data,qcoefs,voted); //array of ids
    var matrix = calculate(data);
    var category1 = data2category(data,order);
    showmatrix(matrix,order,category1);

  
  function data2category(data,order) {
    out = [];
    for (key in order) {
      item = order[key];
      out.push(data[item]['short_name']);
    }
    return out;
  }
  
  function addme(data) {
    out = data;
    out['0'] = me;
    return out;
  }
  
  function positions(answers,qcoefs,voted) {
    //html = "";
    pos = [];
    for (key in answers) {
      pos.push([key,calc_position(answers[key]['vote'],voted,weights,qcoefs)]);
      //html += pos[key] + ' ';
    }
    pos.sort(function(a,b) {return a[1] - b[1];});  //array of "[id, d1]"s
    out = [];
    for (key in pos) {
      out.push(pos[key][0]);
    }
    return out;
  }
  
  function calc_position(voter,voted,weights,qcoefs) {
    s = 0;
    for (k in voted) {
      id = voted[k];
      if ((typeof (voter[id]) != 'undefined') && (typeof (qcoefs[id]) != 'undefined')) {
          if (typeof (weights[id]) != 'undefined') w = weights[id];
          else w = 1;
          s += voter[id] * w * qcoefs[id];
      }
    }
    return s;
  }
  
  function calculate(answers) {
    matrix = {}
    //html = "";
    for (key1 in answers) {
      for (key2 in answers) {
        if (
          typeof(matrix[answers[key1]['id']]) == 'undefined' ||
          typeof(matrix[answers[key1]['id']][answers[key2]['id']]) == 'undefined') {
          rn = Math.round(calc_match(answers[key1]['vote'],answers[key2]['vote'],voted,weights));
          if (typeof(matrix[answers[key1]['id']]) == 'undefined') {
            matrix[answers[key1]['id']] = {};
          }
          if (typeof(matrix[answers[key2]['id']]) == 'undefined') {
            matrix[answers[key2]['id']] = {};
          }
          matrix[answers[key1]['id']][answers[key2]['id']] = rn;
          matrix[answers[key2]['id']][answers[key1]['id']] = rn;
        }
        //html += rn + " ";
      }
      //html += "<br>";
    }
    //$("#matrix").html(html);
    return matrix;
  }
  
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
  
  function rescale (num) {
    return (num + 1) * 50;
  }
