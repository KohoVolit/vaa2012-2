{if $ab_geo}
<script>
$('document').ready(function() {
    function storePosition(position) {
        $.ajax({
          url: "{$relative_path}position.php",
          method: "post",
          data: { 
            "position": position
          }
        });
    }
    function errorPosition(error) {
        $.ajax({
          url: "{$relative_path}position.php",
          method: "post",
          data: { 
            "error": error
          }
        });
    }

    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(storePosition,errorPosition,{ maximumAge:Infinity });
    } else {
        storePosition(false);
    }
});
</script>
{/if}
