<?php

$start = microtime(true);

setlocale(LC_COLLATE, 'cs_CZ.utf8');
  
  $csvs = array(
	  'jc' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=1&output=csv','name'=>'Jihočeský kraj'),
	  'jm' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=3&output=csv','name'=>'Jihomoravský kraj'),
	  'ka' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=8&output=csv','name'=>'Karlovarský kraj'),
	  'kr' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=7&output=csv','name'=>'Královéhradecký kraj'),
	  'li' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=6&output=csv','name'=>'Liberecký kraj'),
	  'mo' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=5&output=csv','name'=>'Moravskoslezský kraj'),
	  'ol' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=2&output=csv','name'=>'Olomoucký kraj'),
	  'pa' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=4&output=csv','name'=>'Pardubický kraj'),
	  'pl' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=9&output=csv','name'=>'Plzeňský kraj'),
	  'pr' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=0&output=csv','name'=>'Praha'),
	  'st' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=12&output=csv','name'=>'Středočeský kraj'),
	  'vy' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=13&output=csv','name'=>'Kraj Vysočina'),
	  'us' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=10&output=csv','name'=>'Ústecký kraj'),
	  'zl' => array('url'=>'https://docs.google.com/spreadsheet/pub?key=0Am65qMOA9x34dFZfTmx5dzhjZHU4UDlmM2R5RVFZTFE&single=true&gid=11&output=csv','name'=>'Zlínský kraj'),
 );
 
$data = array();
foreach ($csvs as $key => $csv) {
  $data[$key] = array('name'=>$csv['name']);
  if (($handle = fopen($csv['url'], "r")) !== FALSE) {
    $i = 1;
    while (($row = fgetcsv($handle)) !== FALSE) {
        if ($i>3) {
          $j = 1;
          foreach ($row as $item) {
            if ($j>1) {
              if (trim($item) != '') {
                $data[$key]['candidate'][$j]['candidate'][$i-2] = $item;
              }
            }
            $j++;
          }
        } else if ($i == 1) {
           $j = 1;
           foreach ($row as $item) {
             if ($j>1) {
               $data[$key]['candidate'][$j] = array('name' => $item);
             }
             $j++;
           }
        } else if ($i == 2) {
           $j = 1;
           foreach ($row as $item) {
             if ($j>1) {
               $data[$key]['candidate'][$j]['long_name'] = $item;
             }
             $j++;
           }
        }else if ($i == 3) {
          $j = 1;
           foreach ($row as $item) {
             if ($j>1) {
               $data[$key]['candidate'][$j]['value'] = $item;
             }
             $j++;
           }
        }
        
        $i++;
    }
    fclose($handle);
  }
}


/*
$outdata = array();
$parties_0 = array();
$parties_maybe = array();

foreach ($data as $key=>$region) {
  $outdata[$key]['name'] = $region['name'];
  foreach ($region as $rkey=>$row) {
    if ($rkey != 'name') {
       if ($row['value'] == '1') {
          $outdata[$key][] = array (
            'name' => $row['name'],
            'candidate' => $row['candidate'],
            'value' => $row['value']
          );
        } else if ($row['value'] == '0') {
          $parties_0[$row['name']] = $row['name'];
        } else {
          $parties_maybe[$row['name']] = $row['name'];
        }
    }
  }
}
print_r($outdata);die();

foreach($regions as $key=>$region) {
  $outdata[$key]['name'] = $region;
  //print_r($data[$key]);die();
  $parties_1 = array();
  foreach ($data[$key] as $rkey => $row) {
    if ($rkey != 'name') {
      if (isset($row['value'])) {
        if ($row['value'] == '1') {
          $parties_1[] = $row['name'];
        } else if ($row['value'] == '0') {
          $parties_0[$row['name']] = $row['name'];
        } else 
          $parties_maybe[$row['name']] = $row['name'];
      } else 
        $parties_maybe[$row['name']] = $row['name'];
    }
  }
  //print_r($parties_1);print_r($parties_maybe);die();
  $col->asort($parties_1);
  
  print_r($data[$key]);die();
  foreach($data[$key] as $pkey=>$row) {
    $outdata[$key][$p]['candidate'][] = $row['candidate'];
    $outdata[$key][$p]['name'] = $p;
  }
  print_r($outdata);die();
}

*/




/*foreach ($data as $key => $row) {
    $name[$key]  = $row['name'];
}
array_multisort($name, SORT_ASC, $data);
print_r($data);die();

$data_sorted = array();*/


//foreach ($data as $

  //print_r($data);die();
  
$parties_0 = array();
$parties_maybe = array();
foreach ($data as $regions) {
  foreach ($regions['candidate'] as $party) {
    //print_r($party);die();
    if ($party['value'] != 1) {
      if ($party['value'] == '') {
        $parties_maybe[$party['name']] = $party['name'];
        //print_r($parties_0);die();
      } else {
        $parties_0[$party['name']] = $party['name'];
      }
    }
  }
}

  

$time_taken = microtime(true) - $start;
echo $time_taken;



$fout = fopen("data.json","w");
fwrite($fout, json_encode($data));
fclose($fout);

$fout = fopen("maybe.json","w");
fwrite($fout, json_encode($parties_maybe));
fclose($fout);

$fout = fopen("no.json","w");
fwrite($fout, json_encode($parties_0));
fclose($fout);


function cmp($a, $b)
{
    if ($a['name'] == $b['name']) {
        return 0;
    }
    return ($a['name'] < $b['name']) ? -1 : 1;
}
?>
