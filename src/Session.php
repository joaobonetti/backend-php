<?php

namespace Moovin\Job\Backend;

require_once('config/Config.php');

/**
 * Classe de sessão
 *
 * @author João Bonetti <joaopaulodalmeida2@gmail.com>
 */

 class Session 
 {

     public function startSession()
     {
        return array_rand(BANK_ACCOUNT, 1);
     }
 }