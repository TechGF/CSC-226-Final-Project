<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/employees.php';


$ch = curl_init();

$query = isset($_GET['search']) ? $_GET['search'] : die();

curl_setopt($ch, CURLOPT_URL, 'https://api.rawg.io/api/games?key=5599d030de7e4967846d6e1d6c7ed036&search_precise=true&search_exact=true&search='.$query);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);

print_r($result);
curl_close($ch);
?>