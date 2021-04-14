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
            echo "Foram sacados B$" . $valueWithdraw . " da conta. A taxa de operação é de: B$" . $discount;
            return $balance - $valueWithdraw - $discount;
        }
        else {
            echo "Não existe saldo suficiente para a operação ou o valor de saque excede o limite de saque por acesso.";
            return $balance;
        }
    }

    public function transfer($from, $balanceFrom, $to, $value) {
        if($from >= $to) {
            echo "Não é possível transferir para a própria conta";
            return False;
        } else if($balanceFrom <= $value) {
            echo "A conta não possui saldo suficiente para a transferência. Saldo em conta: B$" . $balanceFrom . ". Valor da trasnferência: B$" . $value;
            return False;
        } else {
            $balanceFrom -= $value;
            $balanceTo = BANK_ACCOUNT[$to]['balance'];
            $balanceTo =+ $value;
            echo "Foram transferidos B$" . $value . " da conta " . $from . " para a conta " . $to;;

            return [$balanceFrom, $balanceTo];
        }

        

    }


}