<?php

// require_once __DIR__ . '/vendor/autoload.php';

require_once ('src/Session.php');
require_once ('src/Operations.php');

// use Moovin\Job\Backend;
// use Config\Config;
// use Src\Session;

$session = new Session;
$count = $session->startSession();
// print_r($count);
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