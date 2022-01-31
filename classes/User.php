<?php
    class User {
    public $name;
    public $surname;
    public $email;
    public $discount = 0;
    
    public function __construct ($_name, $_surname, $_email) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

        public function getSconto(){
            return $this -> discount;
        }
    }

    class UserPremium extends User {
        public $subType;
        public $discountPremium = 10;

    public function getSconto()
        {
            return $this-> discountPremium;
        }
    }
?>