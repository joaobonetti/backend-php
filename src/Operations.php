<?php

class Operations
{
    public function deposit($balance, $valueDeposit){
        $balance += $valueDeposit;
        echo "Foram depositados B$" . $valueDeposit . " na conta. Saldo atual é de " . $balance . "\n \n";
        return $balance;
    }
    
    public function withdraw($balance, $valueWithdraw, $typeAccount){
        $discount = ($typeAccount == 'CC') ? 2.50 : 0.80;
        $limit = ($typeAccount == 'CC') ? 600 : 1000;
        if($balance >= ($valueWithdraw + $discount) && $valueWithdraw <= $limit) {
            $balance -= $valueWithdraw - $discount;
            echo "Foram sacados B$" . $valueWithdraw . " da conta. A taxa de operação é de: B$" . $discount . ". Saldo atual é de " . $balance . "\n \n";
            return $balance;
        }
        else {
            echo "Não existe saldo suficiente para a operação ou o valor de saque excede o limite de saque por acesso. \n \n";
            return $balance;
        }
    }

    public function transfer($from, $balanceFrom, $to, $value) {
        if($from >= $to) {
            echo "Não é possível transferir para a própria conta \n \n";
            return False;
        } else if($balanceFrom <= $value) {
            echo "A conta não possui saldo suficiente para a transferência. Saldo em conta: B$" . $balanceFrom . ". Valor da trasnferência: B$" . $value . "\n \n";
            return False;
        } else {
            $balanceFrom -= $value;
            $balanceTo = BANK_ACCOUNT[$to]['balance'];
            $balanceTo =+ $value;
            echo "Foram transferidos B$" . $value . " da conta " . $from . " para a conta " . $to; ". O novo saldo da conta origem é de B$" . $balanceFrom . ". O novo saldo da conta destino é de B$" . $balanceTo . ".\n \n ";
        }
    }
}