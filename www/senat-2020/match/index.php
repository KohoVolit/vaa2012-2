<?php
/**
* VAA
* calculate match
*/

session_start();

$relative_path = "../";

//answers of voters
$answers = json_decode(file_get_contents('./answers.json'));


//missing voters
// $missing = json_decode(file_get_contents('../noreply.json'));
//extract user values
$user = get_user_values();

//calculate match, for selected CC only
$results = calc_match($user,$answers,2);



// API call
if (isset($_GET['format']) and ($_GET['format'] == 'json')) {
    // CORS https://stackoverflow.com/a/25661403/1666623
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET');
    header("Access-Control-Allow-Headers: X-Requested-With");

    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');
    echo json_encode($results);
} else {
    echo "
    <html><head>
    <link href='https://volebnikalkulacka.cz/kraje-2016/css/bootstrap.min.css' rel='stylesheet'>
    </head><body>
    <style>.table{max-width:666px; margin-top:50px;} .container{}</style>";

    echo "<div class='container'>
    <h3>Moje shoda s kandidáty</h3>
    <table class='table'>";
    foreach($results as $row) {
        echo "<tr><td><img src='https://volebnikalkulacka.azureedge.net/cs/praha-2018/statics/64x64/" . $row['picture'] . "'>";
        echo "<td>" . $row['name'];
        //echo "<td>" . $row['party_abbreviation'];
        echo "<td style='text-align:left'>" . $row['result_percent'] . '%';
    }
    echo "</table></div></body></html>";
}
save_results($relative_path, $user);

function arr2obj($arr) {
    $out = new stdClass();
//    print_r(len($arr));
    foreach($arr as $item) {
        $id = $item->id;
        //print_r($id);
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

/**
* extract noreplies
*/
function noreplies($allnr, $cc) {
    $out = [];
    foreach($allnr as $row) {
        if ($row->constituency == $cc) {
            $out[] = $row;
        }
    }
    return $out;
}

?>
