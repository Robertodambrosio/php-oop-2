<?php

class CreditCard
{
protected $number;
protected $accountholder;
protected $expiryDate;
protected $cvv;

public function __construct($_number, $_accountholder, $_expiryDate, $_cvv)
{
$this->number = $_number;
$this->accountholder = $_accountholder;
$this->expiryDate = $_expiryDate;
$this->cvv = $_cvv;
}
}


?>