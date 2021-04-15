<?php

use Moovin\Job\Backend\Session;
use Moovin\Job\Backend\Operations;


require_once __DIR__ . '/vendor/autoload.php';

$session = new Session;
$count = $session->startSession();
$details = BANK_ACCOUNT[$count];

foreach ($details as $key => $value) {
    $$key = $value;
}

echo "\nSessão iniciada com conta de número " . $count . " do tipo " . $type . " com B$" . number_format($balance, 2, ',', '.') . " de saldo \n \n";

$operations = new Operations;
$balance = $operations->deposit($balance, 500.78);

$balance = $operations->withdraw($balance, 780.00, $type);

$operations->transfer($count, $balance, array_rand(BANK_ACCOUNT), 950.45);

echo "Sessão finalizada\n\n";