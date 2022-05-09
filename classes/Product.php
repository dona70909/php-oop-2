<?php
    class Product extends Product_Category {

        protected $name_product;
        protected $product_stock_quantity;

        function __construct($name_category,$quantity,$users,$orders,$name_product,$product_stock_quantity)
        {
            parent::__construct($name_category,$quantity,$users,$orders);

            $this->name_product = $name_product;
            $this->product_stock_quantity = $product_stock_quantity;
        }
    }
?>