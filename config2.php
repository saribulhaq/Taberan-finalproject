<?php
    require_once "stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51L4QEwHmrneqAu4Wm0CyxJdXhi4brrdNs4d5qrZhrNvojJLRzE8He2mrgEy9VXSiHhfL7dmwzhv7oIn4HFiR2zdk00Vc13Rvgp",
        "publishableKey" => "pk_test_51L4QEwHmrneqAu4WST6PKl6mb8RkEx4DTlyQFCoAcQf3h57QgC9P8Bva9daYwATf72YMtty5Zoou8iMIrqOvJvSB00czNTGHLN"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>