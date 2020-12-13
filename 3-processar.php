<?php 
	require('vendor/autoload.php');

	//https://dashboard.stripe.com/test/apikeys

	$stripe = [
	  "secret_key"      => "trocar para a sua",
	  "publishable_key" => "trocar para a sua",
	];

	\Stripe\Stripe::setApiKey($stripe['secret_key']);

	$token  = $_POST['stripeToken'];
  	$email  = $_POST['stripeEmail'];

  	$customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  	]);

  	$charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => $_POST['amount'],
      'currency' => 'brl',
  	]);

  	echo '<h1>Pagamento feito com sucesso!</h1>';

?>