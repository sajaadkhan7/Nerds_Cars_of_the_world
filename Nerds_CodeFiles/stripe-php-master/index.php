<?php

require('stripe-php-master/config.php');




?>


<form action="submit.php" method="post">
<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
data-key="<?php echo $Publishable_key; ?>" 
data-amount="500"
data-name="Car-Rentals"
data-description="Car-Rentals"
data-image="logo/cars_logo_white.png"
data-currency="cad"
> 


   </script>

</form>