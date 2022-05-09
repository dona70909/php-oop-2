<?php 



class Products_Categories extends Shop {

    protected $name_category;
    protected $quantity;

    protected $product_category;
    protected $users;
    protected $orders;

    function __construct($name_category,$quantity,$product_category,$users,$orders)
    {
        $this->name_category = $name_category;
        $this-> quantity = $quantity;

        parent::__construct($product_category,$users,$orders);
    }
}

?>