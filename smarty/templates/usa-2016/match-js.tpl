<script>
  //me
    user = {$user};
    weights = user['weight'];
    me = {
      "votes": user['votes'],
      "name": "{$t['me']}"
    };
  //answers and q(uestions') coefs loaded directly
  answers = {$answers_json};

  
  lang = "{$lang}";
  texts = { 'yes':"{$t['result_yes']}", 'no':"{$t['result_no']}" , 'question':"{$t['result_question']}"};
</script>

<script src="{$settings->cdn_domain}{$settings->directory}/js/showcomparison.js"></script>
