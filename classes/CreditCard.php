
<?php
    class CreditCard  {

        protected $number;
        protected $balance;
        protected $expired_date;

        public function __construct($number,$balance,$expired_date)
        {
            $this->number = $number;
            $this->balance = $balance;
            $this->expired_date = $expired_date;

        }

        /**
         * Set the value of balance
         *
         * 
         */ 
        public function setBalance($balance)
        {
            return $this->balance = $balance;
        
        }

        /**
         * Get the value of balance
         */ 
        public function getBalance()
        {
            return $this->balance;
        }


        public function getExpireDate() {
            return $this->expired_date;
        }
    }
?>