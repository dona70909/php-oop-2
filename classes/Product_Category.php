<?php 



class Product_Category  {

    protected $name_category;
    

    function __construct($name_category)
    {
        $this->name_category = $name_category;
        /* $this-> quantity = $quantity; */
    }

    public function getNameCategory() {
        echo $this->name_category;
    }
}

?>