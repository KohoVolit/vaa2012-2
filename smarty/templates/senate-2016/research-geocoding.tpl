    <input type="hidden" id='geolocation' name="geolocation">
    <input type="hidden" id='latitude' name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <input type="hidden" id="accuracy" name="accuracy">

<script>
//geolocation
function storePosition(position) {
    if (position) {
        $("#latitude").val(position.coords.latitude);
        $("#longitude").val(position.coords.longitude);
        $("#accuracy").val(position.coords.accuracy);
        $("#geolocation").val("ok"); 
    } else {
       $("#geolocation").val("not_supported"); 
    }
}
function errorPosition(error) {
    var x = $("#geolocation");
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.val("permission_denied");
            break;
        case error.POSITION_UNAVAILABLE:
            x.val("position_unavailable");
            break;
        case error.TIMEOUT:
            x.val("timeout");
            break;
        case error.UNKNOWN_ERROR:
            x.val("unknown_error");
            break;
    }
}

$('document').ready(function() {
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(storePosition,errorPosition,{ maximumAge:Infinity });
    } else {
        storePosition(false);
    }
});
</script>
