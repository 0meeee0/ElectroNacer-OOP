<?php
    require_once("Connection.php");


    class LogDAO{
        private $db;
        public function __construct(){
            $this->db = DataBaseConnection::getInstance()->getConnetion();
        }

        public function get_user(){
            $query = "SELECT * FROM users";
            $stmt = $this->db->query($query);
            $stmt -> execute();
            $usersData = $stmt->fetchAll();
            $Users = array();
            foreach($usersData as $U) {
                $Users[] = new User ($U["user_id"],$U["username"],$U["email"],$U["password"],$U["role"],$U["verified"],$U["full_name"],$U["phone_number"],$U["address"],$U["disabled"],$U["city"])
            }
            return $Users;
        }
        public function add_user($User){
            $query="INSERT INTO users VALUES('".$User->getUser()."','".$User->getUsername()."','".$User->getEmail()."','".$User->getPassword()."','".$User->getRole()."','".$User->getVerified()."','".$User->getFull_name()."','".$User->getPhone_number()."','".$User->getAddress()."','".$User->getDisabled()."','".$User->getCity()."')";
            $stmt = $this->db->query($query);
            $stmt -> execute();
        }
        public function update_user($User){
            $query="UPDATE users SET "
        }
    }
?>