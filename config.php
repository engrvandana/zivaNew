<?php 
require ('stripe-php-master/init.php');
$server = "localhost";
$user = "root";
$pass = "";
$database = "ziva";





$db = mysqli_connect($server, $user, $pass, $database);

if (!$db) {
    die("<script>alert('Connection Failed.')</script>");
}

$publishableKey="pk_test_51MIsftFc5kniAJPcukV1p80TuXGGWGdyczj93TfqrJLZUg93DZI9WQrfpkHoPaVolrwJLcGxTSDqCdbbBpw8AFDz000CNXys5Z";
$secretKey="sk_test_51MIsftFc5kniAJPcHzIJ5XbQWvmfRY68ywYOe60IJhOMoK2cAThpLkGwJnxJSLteNVgycpX7ygNkl7px2Ll4J3hW00mpb6gQmp";
\Stripe\Stripe::setApiKey($secretKey);
?>

				