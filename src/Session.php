<?php
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
        return BANK_ACCOUNT[rand(0, 5)];
     }
 }