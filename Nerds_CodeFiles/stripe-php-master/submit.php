<?php

require('config.php');
\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];

$data = \stripe\Charge::create(array(
    "amount" => 500,
    "currency" => "cad",
    "description" => "Car-Rentals",
    "source"=>$token,
 ) );

echo '<pre>';
print_r($data);

?>