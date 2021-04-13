<?php

// require_once __DIR__ . '/vendor/autoload.php';

require_once ('src/Session.php');

// use Moovin\Job\Backend;
// use Config\Config;
// use Src\Session;

$session = new Session;
$details = $session->startSession();
print_r($details);