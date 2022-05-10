<?php
    class Order {
        
        protected $number_order;
        protected $number_products;
        protected $order_status;


        function __construct($number_order,$number_products,$order_status)
        {
            $this->number_order = $number_order;
            $this->number_products = $number_products;
            $this->order_status = $order_status;
    
        }


    }
?>