<html>
<head>
    <title>PHP Testing</title>
</head>
<body>
<?php
//$txt = "Hello World!";
//echo $txt;
//define("TIMEOUT", 300);
//define("HTTP_GET_REQUEST_TYPE", "getRequest");
//log.info(HTTP_GET_REQUEST_TYPE + "request")
//log.info(HTTP_GET_REQUEST_TYPE + "requestForID")
//log.info(HTTP_GET_REQUEST_TYPE + "requestForName")
//log.info(HTTP_GET_REQUEST_TYPE + "requestForAddress")
//
//print("TIMEOUT " . TIMEOUT);

//function myTest($scopeTest) {
//    $marks = 40;
//    print($marks >= 40) ? "pass" : "fail";
//
//    if($marks >= 40) {
//        print "pass";
//    }
//    else {
//        print "fail";
//    }
//}

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "<br>";
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
// hashing
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";

// Regular expression Matching
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4

echo "<br>";

$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"

?>
</body>
</html>