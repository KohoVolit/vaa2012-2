<!-- clicked -->
<script>
var session = '{$session_id}';
$("a, button, label, li").click(function() {
  save_action($(this).attr('id'));
});
function save_action(action) {
  $.ajax({
    url: "click.php",
    data: { 'action':action }
  });
}
</script>
<!-- /clicked -->
<!-- onload, offload -->
<script>
$('document').ready(function() {
  save_action('load');
});
jQuery(window).bind('beforeunload', function(){
    save_action('unload');
});
</script>
<!-- /onload, offload -->
