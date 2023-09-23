<?php
require('config.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>"10000",
		"currency"=>"inr",
		"description"=>"LETS REFORMAT THE EARTH",
		"source"=>$token,
	));

	echo "<pre>";
	print_r($data);
}
?>