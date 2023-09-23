<?php
require('config.php');
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="1000"
		data-name="SPLIT PAYMENT"
		data-description="LETS REFORMAT THE EARTH Desc"
		data-image="logo.png"
		data-currency="inr"
		data-email="split.letsreformattheearth@gmail.com"
	>
	</script>

</form>

