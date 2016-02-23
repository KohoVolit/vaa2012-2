<script>
  //highlight more table
  $('document').ready(function() {
    $('.list-group-item').hover(function(){
      $(this).toggleClass('active');
    });
  });
</script>

<script>
    comparison_name = "{$settings->match->comparison->name}";
  //me
    user = {$user};
    weights = user['weight'];
    me = { "votes": user['votes'] };
    me[comparison_name] = "{$text['me']}";
  //answers and q(uestions') coefs loaded directly
  answers = {$answers_json};

  
  lang = "{$lang}";
  texts = { 'yes':"{$text['result_yes']}", 'no':"{$text['result_no']}" , 'question':"{$text['result_question']}"};
  
  theTemplate = {};
</script>

<script src="{$settings->cdn_domain}js/showcomparison2016.js"></script>
