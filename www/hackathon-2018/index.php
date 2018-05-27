<?php
/**
* VAA
* calculate match
*/

error_reporting(0);

session_start();

$relative_path = '';

//answers of voters
$answers = json_decode(file_get_contents($relative_path . 'answers.json'));

//extract user values
$user = get_user_values();

//calculate match
$results = calc_match($user,$answers,2);

// API call
// CORS https://stackoverflow.com/a/25661403/1666623
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
if (isset($_GET['format']) and ($_GET['format'] == 'json')) {
    header('Content-type: application/json; charset=utf-8');
    echo json_encode($results);
} else {
    echo "
    <html><head>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    </head><body>
    <style>body{width: 215px; font-family: 'Open Sans', sans-serif;}
    .table{max-width:215px; margin-top:50px; border-collapse: collapse;}
    .underline {border-bottom: 5px solid black; }
    .logo {width: 384px;}
    .percentage {
        text-align:right;
        position:relative;
        bottom: 16px;
        right: 85px;
        font-size: 40px;
        font-weight: bold;
        width: 110px
    }
    </style>";

    echo "<div class='container'>
    <table class='table'>";
    foreach($results as $row) {
        echo "<tr style=''><td class='underline'><img class='logo' src='https://volebnikalkulacka.azureedge.net/hackathon-2018/logo/?p=" . $row['picture'] . "'>";
        // echo "<td>" . $row['name'];
        // echo "<td style='font-size:20px; font-weight: bold'>" . $row['abbreviation'];
        echo "<td class='percentage'>" . $row['result_percent'] . '%';
    }
    echo "</table></div></body></html>";
}

save_results('', $user);

function arr2obj($arr) {
    $out = new stdClass();
    foreach($arr as $item) {
        $id = $item->id;
        $out->$id = $item;
    }
    return $out;
}

function get_user_values() {
   $get = [];
   foreach($_GET as $k=>$g) {
        $get[$k] = json_decode(urldecode($g));
   }
   $out = ['votes' => [], 'weight' => []];
   if (isset($get['q'])) $out['votes'] = $get['q'];
   if (isset($get['w'])) $out['weight'] = $get['w'];
   return $out;
}

function save_results($relative_path, $user) {
    if(!isset($_COOKIE['vkid'])) {
        $vkid = session_id();
        setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
    } else {
        $vkid = $_COOKIE['vkid'];
    }

    $get = $_GET;
    $get['q'] = $user['votes'];
    $get['w'] = $user['weight'];

    $arr = [
        date("Y-m-d H:i:s"),
        $vkid,
        session_id(),
        json_encode($get),
        $_SERVER['REMOTE_ADDR']
    ];
    $file = fopen($relative_path . 'result.csv','a');
    fputcsv($file,$arr);
    fclose($file);
}

/**
* calculates results for one set
*/
function calc_match($user,$set,$extra=2) {
  $results = array();
    foreach ($set as $s) {
        $sum = 0;
        $count = 0;
        if (isset($user['votes']) and count($user['votes']) > 0) {
          foreach($user['votes'] as $key => $uv) {
            //weight
            if (isset($user['weight']->$key) and $user['weight']->$key == "true") $w = $extra;
            else $w = 1;
            // echo "w: " . $w . "<br/>\n";
            //existing divisions only:
            if ((property_exists($s,'votes')) and (property_exists($s->votes,$key))) {
              $sum = $sum + $w*$s->votes->$key*sign($uv);
              $count = $count + $w*abs(sign($uv));
            }
            else {
                $count = $count + abs(sign($uv));
            }
          }
        }
        if ($count == 0) $count = 1; // to allow match = 0/1 = 0;
        //read what data should go to result
        $res = array();
        foreach ($s as $key=>$item) {
          if (($key != 'details') and ($key != 'votes'))
            $res[$key] = $s->$key;
        }
        //common results for any calc
        $res['result'] = (1+$sum/$count)/2;
        $res['result_percent'] = round((100+100*$sum/$count)/2);
        $res['id'] = $s->id;
        $res['random'] = rand(0,1000000);
        $results[] = $res;
     }

  //sort by result
  foreach ($results as $key => $row) {
    $result[$key]  = $row['result'];
    $random[$key] = $row['random'];
  }
  array_multisort($result, SORT_DESC, $random, SORT_ASC, $results);

  return $results;
}
/**
* sign function
*/
function sign( $number ) {
    return ( $number > 0 ) ? 1 : ( ( $number < 0 ) ? -1 : 0 );
}
?>
