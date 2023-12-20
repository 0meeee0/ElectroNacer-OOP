<?php
class User{
    private $user_id;
    private $username;
    private $email;
    private $password;
    private $role;
    private $verified;
    private $full_name;
    private $phone_number;
    private $address;
    private $disabled;
    private $city;

    public function __construct($user_id, $username, $email, $password, $role, $verified, $full_name, $phone_number, $address, $disabled, $city) {
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->verified = $verified;
        $this->full_name = $full_name;
        $this->phone_number = $phone_number;
        $this->address = $address;
        $this->disabled = $disabled;
        $this->city = $city;
    }


    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get the value of verified
     */ 
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Get the value of full_name
     */ 
    public function getFull_name()
    {
        return $this->full_name;
    }

    /**
     * Get the value of phone_number
     */ 
    public function getPhone_number()
    {
        return $this->phone_number;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Get the value of disabled
     */ 
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }
}
?>