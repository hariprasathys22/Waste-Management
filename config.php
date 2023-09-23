<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51IzjnsSFq84yNiQzNuHMWp40MDAMFXS3kKNqBtYuFTIweyYDwqjtoDvphAFZGybhA2FNjRw0Tk3aTwTyHZOkInNr004xtvSZXm";

$secretKey="sk_test_51IzjnsSFq84yNiQzhBN48jSrDbfu79KueRdnOfwk9WBHgLOs5aUwQqML9srvVoeHtUPRA7KxLJrE1Cc0UQHzHNmZ00WWROjbZZ";

\Stripe\Stripe::setApiKey($secretKey);
?>