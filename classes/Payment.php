
<?php
    class Payment extends User {

        
        protected $amount;
        protected $expired_date;

        function __construct($number_order,$number_products,$order_status, $user_name,$user_lastname,$birt_date,$isRegistered,$amount,$expired_date)
        {
            parent:: __construct($number_order,$number_products,$order_status, $user_name,$user_lastname,$birt_date,$isRegistered);
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