<?php 



class Product_Category extends Shop {

    protected $name_category;
    protected $quantity;

    function __construct($name_category,$quantity,$customers,$orders)
    {
        $this->name_category = $name_category;
        $this-> quantity = $quantity;

        parent::__construct($customers,$orders);
    }

    public function getNameCategory() {
        echo $this->name_category;
    }
}

?>