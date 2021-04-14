<?php

class Operations
{
    public function deposit($count, $valueDeposit){
        echo "Depositando B$" . $valueDeposit . " na conta " . $count;
        return $bank_account[$count]['balance'] += $valueDeposit;
    }
    
    public function withdraw($balance, $valueWithdraw){
        return $balance - $valueWithdraw;
    }

    public function transfer($from, $to, $value) {
        

    }


}