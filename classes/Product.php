<?php
    class Product extends Product_Category {

        protected $name_product;
        protected $product_stock_quantity;
        protected $img_file;
        protected $price;

        function __construct($name_category,$quantity,$users,$orders,$name_product,$product_stock_quantity,$img_file,$price)
        {
            parent::__construct($name_category,$quantity,$users,$orders);

            $this->name_product = $name_product;
            $this->product_stock_quantity = $product_stock_quantity;
            $this->img_file = $img_file;

            $this->price = $price;
        }

        public function getNameProduct() {
            echo $this->name_product;
        }

        public function getPrice() {
            echo $this->price;
        }
    }
?>