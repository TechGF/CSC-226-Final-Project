<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../config/database.php';
    include_once '../class/employees.php';


    $ch = curl_init();
    $game_name = isset($_GET['slug']) ? $_GET['slug'] : die();

    curl_setopt($ch, CURLOPT_URL, 'https://api.rawg.io/api/games?key=5599d030de7e4967846d6e1d6c7ed036&slug='.$game_name);
//    curl_setopt($ch, CURLOPT_POST, 1);
//    curl_setopt($ch, CURLOPT_POSTFIELDS, POST DATA);
    $result = curl_exec($ch);

//    $data = json_decode($result);

//    $results = $data['results'];

//$suppliers = array();
//$customers = array();

// echo $results;

//    foreach($results as $key => $value) {
//        if ($key['slug'] == $game_name) {
//            echo $key['slug'];
//        }
//    }

//header('Content-Type: application/json');

//echo json_encode($customers);
//echo json_encode($suppliers);

//die();

    print_r($result);
    curl_close($ch);

//    $database = new Database();
//    $db = $database->getConnection();
//
//    $items = new Employee($db);
//
//    $stmt = $items->getEmployees();
//    $itemCount = $stmt->rowCount();
//
//
//    echo json_encode($itemCount);
//
//    if($itemCount > 0){
//
//        $employeeArr = array();
//        $employeeArr["body"] = array();
//        $employeeArr["itemCount"] = $itemCount;
//
//        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//            extract($row);
//            $e = array(
//                "id" => $id,
//                "name" => $name,
//                "email" => $email,
//                "age" => $age,
//                "designation" => $designation,
//                "created" => $created
//            );
//
//            array_push($employeeArr["body"], $e);
//        }
//        echo json_encode($employeeArr);
//    }
//
//
//    else{
//        http_response_code(404);
//        echo json_encode(
//            array("message" => "No record found.")
//        );
//    }
?>