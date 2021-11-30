<?php

require('init.php');


$Publishable_key = "pk_test_51K1OEnG095I4P05QYWVwFIPTE1MyKx54GKJ0B3dUD33yw6aldKeeNioPlPoVX8r0VsVjCctiMrMbjloYwzMQaHzs00kCVAkHL4";

$Secret_key = "sk_test_51K1OEnG095I4P05QEesStDRtaFWhwfE4KOEWpOIaYsQrqptS3JhY51AU7diC0ARheavSvzz4M2EeThkCHlAhVDwF00YJBA4OJM";

\Stripe\Stripe::setApiKey($Secret_key);
?>