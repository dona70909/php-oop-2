<?php

    class Shop {

        protected $product_category;
        protected $users;
        protected $orders;

        function __construct($product_category,$users,$orders)
        {
            $this->product_category = $product_category;
            $this->users = $users;
            $this->orders = $orders;
        }
    }
?>