<?php

class BankAccount 
{
    private float $balance = 0;

    public function getBalance(): float
    {
        return $this->balance;   
    }

    public function deposit(float $amount): void
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw(int $amount): bool
    {
        if ($amount > 0 && $this->balance >= $amount) 
        {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}

$account = new BankAccount();
// echo $account->balance; // Error porque $balance es privado
echo $account->getBalance(); // Se puede acceder al atributo privado a través de un método público

$account->deposit(10000);

var_dump (
    $account->withdraw(5000),
    $account->getBalance()   
);