<?php

    class Shop {

    
        const SHOPTYPE = "pet shop";

        protected $customers;
        protected $orders;

        function __construct($customers,$orders)
        {

            $this->customers = $customers;
            $this->orders = $orders;
        }
    }
?>