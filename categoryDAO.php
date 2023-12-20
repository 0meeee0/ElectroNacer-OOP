<?php
require_once("Connection.php");
require_once("category.php");




class CategoryDAO {
    private $db;
    public function __construct(){
        $this->db = DatabaseConnection::getInstance()->getConnection(); 
    }

    public function get_category(){
        $query = "SELECT * FROM categories";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $categoryData = $stmt->fetchAll();
        $Categories = array();
        foreach ($categoryData as $C) { 
            $Categories[] = new Category ($C["category_id"],$C["category_name"],$C["imag_category"],$C["is_disabled"]);
         
        }
        return $Categories;

    }
    public function insert_category($Category){
        $query= "INSERT INTO categories VALUES ('".$Category->getCatId()."','".$Category->getCatName()."','".$Category->getImgs()."',".$Category->getBl().") ";
        $stmt = $this->db->query($query);
        $stmt -> execute();

    }

    public function update_Category($Category){
        $query = "UPDATE `categories` SET `category_id`='".$Category->getCatId()."',`category_name`='".$Category->getCatName()."',`imag_category`='".$Category->getImgs()."',`is_disabled`='".$Category->getBl()."' WHERE 1";
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    public function delete_Category($id){
        $query = "UPDATE `products` SET `is_disabled`= 1 WHERE `category_id`=" . $id ;

        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

  

}


?>