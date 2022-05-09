<?php

    class Shop {

    
        const SHOPTYPE = "pet shop";

        protected $users;
        protected $orders;

        function __construct($users,$orders)
        {

            $this->users = $users;
            $this->orders = $orders;
        }
    }
?>