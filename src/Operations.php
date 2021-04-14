<?php

class Operations
{
    public function deposit($balance, $valueDeposit){
        echo "Foram depositados B$" . $valueDeposit . "na conta. ";
        return $balance + $valueDeposit;
    }
    
    public function withdraw($balance, $valueWithdraw){
        return $balance - $valueWithdraw;
    }

    public function transfer($from, $to, $value) {
        

    }


}