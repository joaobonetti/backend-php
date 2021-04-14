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

echo "Sessão iniciada com conta de número: " . $count;

// $operations = new Operations;
// $details['balance'] = $operations->deposit($details['balance'], 500.78);
// print_r($details);