<?php
    class User {
    public $name;
    public $surname;
    public $email;
    public $subscriptionType;

    public function __construct ($_name, $_surname, $_email, $_subscriptionType) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->subscriptionType = $_subscriptionType;
    }
    
    }

    
?>