<?php

// include_once __DIR__ . '/vendor/qiwi/bill-payments-php-sdk/src/BillPayments.php';
// include_once __DIR__ . '/vendor/qiwi/bill-payments-php-sdk/src/BillPaymentsException.php';
include_once './qiwi.php';
include_once './qiwi2.php';
include_once './key.php';

$billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);

$params = [
    'publicKey' => $publicKey,
    'amount' => $_POST['val_usd'],
    'billId' => gen_password()
];
$link = $billPayments->createPaymentForm($params);

header("Location: ${link}");
die();
