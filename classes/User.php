<?php

    class User {

        const DISCOUNT = .2;

        protected $user_name;
        protected $user_lastname;
        protected $birth_date;

        protected $isRegistered;
        protected $discount;


        function __construct($user_name,$user_lastname,$birt_date,$isRegistered,$discount)
        {
            $this-> user_name = $user_name;
            $this-> user_lastname = $user_lastname;
            $this-> birth_date = $birt_date;
            $this-> isRegistered = $isRegistered;
            $this-> discount = $discount;
        }


        public function setDiscount(){
            if($this->isRegistered) {
                $this->discount = self::DISCOUNT;
            } 
        }
    }
?>