<?php

class Operations
{
    public function deposit($balance, $valueDeposit){
        echo "Foram depositados B$" . $valueDeposit . "na conta.";
        return $balance + $valueDeposit;
    }
    
    public function withdraw($balance, $valueWithdraw, $typeAccount){
        $discount = ($typeAccount == 'CC') ? 2.50 : 0.80;
        $limit = ($typeAccount == 'CC') ? 600 : 1000;
        if($balance >= ($valueWithdraw + $discount) && $valueWithdraw <= $limit) {
            echo "Foram sacados B$" . $valueWithdraw . " da conta. A taxa de operação é de: " . $discount;
            return $balance - $valueWithdraw - $discount;
        }
        else {
            echo "Não existe saldo suficiente para a operação ou o valor de saque excede o limite de saque por acesso.";
            return $balance;
        }
    }

    public function transfer($from, $to, $value) {
        

    }


}