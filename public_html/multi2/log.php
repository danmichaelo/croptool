<?php

echo '.test.';

$a = $_POST['a'];
// $file_name = $_POST['file_name'];
$file_name2 = $_POST['file_name2'];
$file_name = '';

if ($file_name2 != '') { $file_name = $file_name2; }

if ($file_name == '') { 
    $file_name = rand();
};

$file_name = 'multilog/' . $file_name . '.json';

$json = json_decode($a, true);

$json = json_encode($json, true);

$put = file_put_contents($file_name, $json);

?>