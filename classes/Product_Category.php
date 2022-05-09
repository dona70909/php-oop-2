<?php 



class Product_Category  {

    protected $name_category;
    

    function __construct($name_category)
    {
        $this->name_category = $name_category;
    }

    public function getNameCategory() {
        echo $this->name_category;
    }
}

?>