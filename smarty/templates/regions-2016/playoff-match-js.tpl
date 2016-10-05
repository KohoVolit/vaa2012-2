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
  cc = "{$cc}";

  theTemplate = {};

  // český rozhlass:
  $(document).on("click", ".open-dialog", function () {
    idd = $(this).data('id');
    $(".cro-n-link").attr("href","https://interaktivni.rozhlas.cz/data/volby-2016-vizitky/www/#" + answers[idd]['cro_n']);
    $(".cro-n-link").attr("id", "cro-comparison-link-" + idd);
  });

</script>

<script src="{$settings->cdn_domain}{$settings->directory}/playoff/match/showcomparison.js"></script>
