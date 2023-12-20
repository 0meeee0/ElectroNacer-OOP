<?php
class Products {
    private $product_id;
    private $reference;
    private $image;
    private $barcode;
    private $label;
    private $purchase_price;	
    private $final_price;	
    private $price_offer;	
    private $description;	
    private $min_quantity;	
    private $stock_quantity;	
    private $category_id;	
    private $disabled;
    

    public function __construct($product_id, $reference , $image , $barcode, $label, $purchase_price, $final_price , $price_offer , $description , $min_quantity , $stock_quantity ,$category_id , $disabled ){
        $this->product_id = $product_id;
        $this->reference = $reference;
        $this->image = $image;
        $this->barcode = $barcode;
        $this->label = $label;
        $this->purchase_price = $purchase_price;
        $this->final_price = $final_price;  
        $this->price_offer = $price_offer;
        $this->description = $description; 
        $this->min_quantity = $min_quantity;
        $this->stock_quantity = $stock_quantity;
        $this->category_id = $category_id;
        $this->disabled = $disabled;
    }
    



    /**
     * Get the value of reference
     */ 
    public function getProdId()
    {
        return $this->product_id;
    }
    /**
     * Get the value of reference
     */ 
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Get the value of image
     */ 
    public function getimage()
    {
        return $this->image;
    }

    /**
     * Get the value of label
     */ 
    public function getlabel()
    {
        return $this->label;
    }

    /**
     * Get the value of barcode
     */ 
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Get the value of purchase_price
     */ 
    public function getPurchase_price()
    {
        return $this->purchase_price;
    }

    /**
     * Get the value of final_price
     */ 
    public function getFinal_price()
    {
        return $this->final_price;
    }

    /**
     * Get the value of price_offer
     */ 
    public function getPrice_offer()
    {
        return $this->price_offer;
    }

    /**
     * Get the value of description
     */ 
    public function getdescription()
    {
        return $this->description;
    }

    /**
     * Get the value of min_quantity
     */ 
    public function getMin_quantity()
    {
        return $this->min_quantity;
    }

    /**
     * Get the value of stock_quantity
     */ 
    public function getStock_quantity()
    {
        return $this->stock_quantity;
    }

    /**
     * Get the value of category_id
     */ 
    public function getcategory_id()
    {
        return $this->category_id;
    }

    /**
     * Get the value of bl
     */ 
    public function getBl()
    {
        return $this->disabled;
    }
}
?>