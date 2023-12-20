<?php
require_once("Connection.php");
require_once("products.php");


class fetchingdata {
    private $db;
    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection(); 
    }

    public function get_product(){
        $query = "SELECT * FROM products WHERE disabled = 0";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $productData = $stmt->fetchAll();
        $Products = array();
        foreach ($productData as $P) {
            $Products[] = new Products ($P["product_id"],$P["reference"],$P["image"],$P["barcode"],$P["label"],$P[ "purchase_price"], $P["final_price"] , $P["price_offer"] , $P["description"] , $P["min_quantity"] , $P["stock_quantity"] , $P["category_id"] , $P["disabled"]);
         
        }
        return $Products;

    }
    public function insert_product($Products){
        $query= "INSERT INTO products VALUES (0,'".$Products->getimage()."',".$Products->getBarcode().",'".$Products->getlabel()."',".$Products->getPurchase_price().",".$Products->getFinal_price().",".$Products->getPrice_offer().",'".$Products->getdescription()."',".$Products->getMin_quantity().",".$Products->getStock_quantity().",'".$Products->getcategory_id()."',".$Products->getBl().") ";
       echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();

    }

    public function update_product($Product){
        $query = "UPDATE `products` SET `image`='".$Product->getimage()."',`label`='".$Product->getlabel()."',`barcode`=".$Product->getBarcode().",`purchase_price`=".$Product->getPurchase_price().",`final_price`=".$Product->getFinal_price().",`price_offer`=".$Product->getPrice_offer().",`description`='".$Product->getdescriptiontion()."',`min_quantity`=".$Product->getMin_quantity().",`stock_quantity`=".$Product->getStock_quantity().",`category_id`='".$Product->getCategory_id()."',`disabled`=".$Product->getBl()." WHERE `reference`= ".$Product->getReference();
        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    public function delete_product($id){
        $query = "UPDATE `products` SET `disabled`= 0 WHERE `reference`=" . $id ;

        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }
    public function filter_product(){
        if (isset($_POST["category"]) && !empty($_POST["category"])) {
            $category_array = json_decode($_POST["category"], true);
            if (is_array($category_array)) {
                $category_filter = implode("','", $category_array);
                $query .= " AND category_id IN ('" . $category_filter . "')";
            }
        }
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $productData = $stmt->fetchAll();
        $Products = array();
        foreach ($productData as $P) {
            $Products[] = new Product ($P["product_id"],$P["reference"],$P["image"],$P["label"],$P["barcode"],$P[ "purchase_price"], $P["final_price"] , $P["price_offer"] , $P["descriptiontion"] , $P["min_quantity"] , $P["stock_quantity"] , $P["category_id"] , $P["disabled"]);
         
        }
        return $Products;


    }

}


?>