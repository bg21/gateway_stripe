<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$valor = 9.99;
		$valor = $valor*100;

		//https://stripe.com/docs/legacy-checkout/php

	?>
	<form action="3-processar.php" method="POST">
		<input type="hidden" name="amount" value="<?php echo $valor; ?>">
	  <script
	    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	    data-key="trocar para a sua"
	    data-amount="<?php echo $valor; ?>"
	    data-name="Danki Code"
	    data-label="Pagar com Cartão"
	    data-panel-label="Pagar"	
	    data-description="Pagamento referente a tal e tal"
	    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
	    data-locale="auto"
	    data-currency="brl">
	  </script>
	</form>
</body>
</html>