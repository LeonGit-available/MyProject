<?php
session_start();
unset($_SESSION['language']);
$change = $_GET['change'];
// echo $change."<br>";

$result= "";

if($change == "BM"){
//    echo "bm"; exit;
    $_SESSION['language'] = "bm";
    $result = "bm";
}else if($change == "CN"){
//    echo "cn"; exit;
    $_SESSION['language'] = "cn";
    $result = "cn";
}else if($change == "english"){
//    echo "en"; exit;
    $_SESSION['language'] = "en";
    $result = "en";
}


//echo $result; exit;
echo json_encode($result);
    

?>