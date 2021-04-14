<?php

class Operations
{
    public function deposit($balance, $valueDeposit){
        $balance += $valueDeposit;
        echo "Foram depositados B$" . number_format($valueDeposit, 2, ',', '.') . " na conta. Saldo atual é de B$" . number_format($balance, 2, ',', '.') . "\n \n";
        return $balance;
    }
    
    public function withdraw($balance, $valueWithdraw, $typeAccount){
        $discount = ($typeAccount == 'CC') ? 2.50 : 0.80;
        $limit = ($typeAccount == 'CC') ? 600 : 1000;
        if($balance < ($valueWithdraw + $discount)){
            echo "Não existe saldo suficiente para a operação \n \n";
            return;
        } else if($valueWithdraw > $limit) {
            echo "O valor de saque excede o limite de saque por acesso \n \n";
            return;
        } else {
            $balance -= ($valueWithdraw + $discount);
            echo "Foram sacados B$" .  number_format($valueWithdraw, 2, ',', '.') . " da conta. A taxa de operação é de: B$" . number_format($discount, 2, ',', '.') . ". Saldo atual é de B$" . number_format($balance, 2, ',', '.') . "\n \n";
            return $balance;
        }
    }

    public function transfer($from, $balanceFrom, $to, $value) {
        if($from >= $to) {
            echo "Não é possível transferir para a própria conta \n \n";
            return False;
        } else if($balanceFrom <= $value) {
            echo "A conta não possui saldo suficiente para a transferência. Saldo em conta: B$" . number_format($balanceFrom, 2, ',', '.') . ". Valor da transferência: B$" . number_format($value, 2, ',', '.') . "\n \n";
            return False;
        } else {
            $balanceFrom -= $value;
            $balanceTo = BANK_ACCOUNT[$to]['balance'];
            $balanceTo += $value;
            echo "Foram transferidos B$" . number_format($value, 2, ',', '.') . " da conta " . $from . " para a conta " . $to . ". O novo saldo da conta origem é de B$" . $balanceFrom . ". O novo saldo da conta destino é de B$" . number_format($balanceTo, 2, ',', '.') . ".\n \n ";
        }
    }
}