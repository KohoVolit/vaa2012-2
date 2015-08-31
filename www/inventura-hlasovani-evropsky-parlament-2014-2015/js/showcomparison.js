$(document).on("click", ".open-dialog", function () {
  ids = ["0",$(this).data('id')];
});

$('#modal').on('show.bs.modal', function (e) {
  //alert ('ok');
    if (typeof (questions) == "undefined") {
        //load answers
        $.ajax({
          url: '../questions_' + lang + '.json',
          success: function(data){
            var questions = data;
            create_comparison(questions);
          }
        });
    } else {
      create_comparison(questions);
    }
});

function create_comparison(questions) {
  make_comparison(questions,data);
}

function make_comparison(questions, details) {
  answers["0"] = me;
  if (typeof(ids) == "undefined") ids = ["0","0"];
  
  html = '<table class="table table-striped comparison-table table-hover"><thead>';
  v1_id = ids[0];
  v2_id = ids[1];
  
  html += '<tr><th>'+ texts['question'] +'</th><th class="comp-center">' + answers[v1_id]['name'] + '</th><th></th><th class="comp-center">' + answers[v2_id]['name'] + '</th></tr>';
  html += '</thead><tbody>';
  for (key in questions) {
    q_id = questions[key]['id'];
    vote1 = answers[v1_id]['votes'][q_id];
    vote2 = answers[v2_id]['votes'][q_id];
    detail1 = get_detail(details,v1_id,q_id);
    detail2 = get_detail(details,v2_id,q_id);
    if (typeof(weights[q_id]) != "undefined")
      important = "<i class='fa fa-star'></i> </span>";
    else
      important = '';
    html += "<tr><td>" + important + questions[key]['name'] + tooltip(questions[key]['question'],'fa-info-circle');
    html += "</td><td class='comp-center'>" + val2word(vote1);
    if (detail1) html += tooltip(detail1, 'fa-info-circle');
    html += "</td><td class='comp-center'>";
    html += compare_answers(vote1,vote2);
    html += "</td><td class='comp-center'>" + val2word(vote2);
    if (detail2) html += tooltip(detail2, 'fa-info-circle');
    html += "</td></tr>";
  }
  html += "</tbody></table>"
  $("#comparison-dialog").html(html);
  $(".tooltip-top").tooltip({placement: 'bottom'});
}

function compare_answers(a1,a2) {
  if (a1*a2 == -1) return "<strong>✘</strong>";
  else return "";
}

function tooltip (text, icon) {
  return "<span data-toggle='tooltip' data-placement='top' title='" + text + "' class='tooltip-top'> <i class='fa " + icon + "'></i> </span>";
}

function get_detail(details,vid,qid) {
  if (typeof (details[vid]) == "undefined") return false;
  if (typeof (details[vid][qid]) == "undefined") return false;
  else return details[vid][qid];
}

function val2word(val) {
  if (typeof(val) == "undefined") return '=';
  if (val == 1) return texts['yes'];
  if (val == -1) return texts['no'];
  return "-";
}
