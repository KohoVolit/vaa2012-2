<script src="{$settings->cdn_domain}js/fingerprint2.min.js"></script>

<script>
$('document').ready(function() {
    new Fingerprint2().get(function(result, components){      
        $.ajax({
          url: "{$relative_path}fingerprint.php",
          method: "post",
          data: { 
            'fingerprint':result,
            'components':components,
            'width': $(window).width(),
            'height': $(window).height()
           }
        });
    });
});
</script>
