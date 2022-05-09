
<?php
    class Payment  {

        
        protected $amount;
        protected $expired_date;

        function __construct($amount,$expired_date)
        {
    
            $this->amount = $amount;
            $this->$expired_date;

            $this->setOrderStatus();
        }


        public function setOrderStatus(){
            if($this->expired_date < date('Y/m/d H:i:s')) {

                return "expired method";
            } else {
                return "payment accepted";
            }
        }

    }
?>