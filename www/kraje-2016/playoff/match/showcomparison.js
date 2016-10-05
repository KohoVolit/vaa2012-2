$(function () {
    theTemplateScript = $("#comparison-template").html();
    theTemplate = Handlebars.compile(theTemplateScript);
});

$(document).on("click", ".open-dialog", function () {
  ids = ["0",$(this).data('id')];
});

$('#modal').on('show.bs.modal', function (e) {
  //alert ('ok');
    if (typeof (questions) == "undefined") {
        //load answers
        $.ajax({
          url: '../../questions_' + cc + '.json',
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
  if (typeof (details) == "undefined") {
        //load answers
        $.ajax({
          url: '../../details_' + cc + '.json',
          success: function(data){
            make_comparison(questions,data);
          }
        });
    } else {
      make_comparison(questions,data);
    }
}

function make_comparison(questions, details) {
    answers["0"] = me;
    if (typeof(ids) == "undefined") ids = ["0","0"];

    var context = {"header":{},"rows":[]};

    v1_id = ids[0];
    v2_id = ids[1];

    context['header'] = {
        "one": answers[v1_id][comparison_name],
        "two": answers[v2_id][comparison_name]
    };

    for (key in questions) {
        row = {};
        q_id = questions[key]['id'];
        vote1 = answers[v1_id]['votes'][q_id];
        vote2 = answers[v2_id]['votes'][q_id];
        detail1 = get_detail(details,v1_id,q_id);
        detail2 = get_detail(details,v2_id,q_id);
        if (typeof(weights[q_id]) != "undefined")
            row['important'] = "fa fa-star";
        else
            row['important'] = "";
        row['name'] = questions[key]['name'];
        row['text'] = questions[key]['question'];
        row['word'] = {
            'one': val2word(vote1),
            'two': val2word(vote2)
        }
        row['detail'] = {
            'two': detail2
        }
        row['compare_class'] = compare_answers_class(vote1,vote2);
        context['rows'].push(row);
    }
    var theCompiledHtml = theTemplate(context);
    $("#comparison-dialog").html(theCompiledHtml);
    $(".tooltip-left").tooltip({placement: 'left'});
    $(".tooltip-right").tooltip({placement: 'right'});
    $('[data-toggle="popover"]').popover();
}

function compare_answers_class(a1,a2) {
  if (a1*a2 == -1) return "text-danger";
  if (a1*a2 == 1) return "text-success";
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
