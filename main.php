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
print_r($details);

foreach ($details as $key => $value) {
    $$key = $value;
}

echo "Sessão iniciada com conta de número " . $count . " do tipo " . $type . " com B$" . $balance . " de saldo \n";

$operations = new Operations;
$teste = $operations->deposit($count, 500.78);
print_r($teste);

// print_r($details);