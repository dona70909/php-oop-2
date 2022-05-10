<?php

    

    class Customer  {

        const DISCOUNT = 20;

        protected $user_name;
        protected $user_lastname;
        protected $birth_date;
        protected $isRegistered;

        protected $credit_card;
        protected $discount;

        function __construct($user_name,$user_lastname,$birt_date,$isRegistered,$credit_card)
        {
            $this->user_name = $user_name;
            $this->user_lastname = $user_lastname;
            $this->birth_date = $birt_date;
            $this->isRegistered = $isRegistered;
            $this->setCreditCard($credit_card);
            $this->discount = $this->setDiscount();
        }

    

        /**
         * get the calue ogo isRegistered wich could be true or false
         */
        public function getRegistered() {
            return $this->isRegistered;
        }


        public function getDiscount(){

            return $this->discount;
        }

        public function getCreditCard() {
            return $this->credit_card;
        }

        public function getBalance()
        {
            return $this->credit_card->getBalance() . '€';
        }


        /**
         * 
         * Check if a customer can get a discount
         * */ 

        public function setDiscount(){
            if($this->isRegistered === true) {
                return $this->discount = 20;
            } else {
                return "You don't have any discounts";
            }
        }


        /**
         * check if $credit_card is an object typeof CreditCard(class)
         */
        public function setCreditCard($credit_card)
        {
            if (!$credit_card instanceof CreditCard) return false;
            $this->credit_card = $credit_card;
        }



        public function makeOrder($product) {
            if($this->credit_card->getExpireDate() < date('Y')) {
                return "Sorry your credit card is expired try another one";
            }

            if($this->credit_card->getBalance() < $product->getPrice()){
                return "your balance is not sufficient, payment failed";
            }

            if($this->discount > 0) {

                $price =  $product->getPrice() / 100 * $this->getDiscount(); 
                $product->setPrice($price);
                $balance =  $this->credit_card->getBalance() - $product->getPrice();
                $this->credit_card->setBalance($balance);

                return "Transazione approvata"; 

            } else {
                $balance = $this->credit_card->getBalance() - $product->getPrice();
                return "Transazione approvata, non hai ricevuto nessuno sconto e hai speso ";
            } 
        }
    }

?>