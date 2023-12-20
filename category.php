<?php
class Category {
    private $category_id;	
    private $category_name;	
    private $imag_category;	
    private $is_disabled;

    public function __construct( $category_id, $category_name, $imag_category, $is_disabled ){
        $this->category_id = $category_id;
        $this->category_name = $category_name;
        $this->imag_category = $imag_category;
        $this->is_disabled = $is_disabled;
        
    }
    

   
   


    /**
     * Get the value of catname
     */ 
    public function getCatId()
    {
        return $this->category_id;
    }

    /**
     * Get the value of descrip
     */ 
    public function getCatName()
    {
        return $this->category_name;
    }

    /**
     * Get the value of imgs
     */ 
    public function getImgs()
    {
        return $this->imag_category;
    }

    /**
     * Get the value of bl
     */ 
    public function getBl()
    {
        return $this->is_disabled;
    }
}
?>