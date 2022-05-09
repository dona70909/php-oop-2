<?php

    class User {

        const DISCOUNT = .2;

        protected $user_name;
        protected $user_lastname;
        protected $birth_date;

        protected $isRegistered;
    


        function __construct($user_name,$user_lastname,$birt_date,$isRegistered)
        {
            $this->user_name = $user_name;
            $this->user_lastname = $user_lastname;
            $this->birth_date = $birt_date;
            $this->isRegistered = $isRegistered;
        }


        public function getRegistered() {
            return $this->isRegistered;
        }


        public function discount(){
            if($this->isRegistered === true) {
                return self::DISCOUNT;
            } else {
                return "You don't have any discounts";
            }
        }
    }
?>