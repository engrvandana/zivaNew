<?php
    require('config.php');
    $token = $_POST['stripeToken'];

    \Stripe\Stripe::setVerifySslCerts(false);
    $data = \Stripe\Charge::create(array(
        "amount"=>5000,
        "currency"=>"inr",
      
        "source"=>$token,
        



    ));
    echo "<pre>";
    print_r($data)
?>