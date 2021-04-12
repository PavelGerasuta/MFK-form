<?php
session_start();
include("bd_connect.php");
class user
{
    protected  $first_name;
    protected  $last_name;
    protected  $login;
    protected  $email;
    protected  $password;
    protected  $password_confirm;


    public function __construct() {

    }

    /**
     * @return user
     */
    public static function create() {
        $instance = new self();
        return $instance;
    }


    /**
     * @param $login
     * @param $password
     * @return $this
     * Auth setter
     */
    public function setAuth($login,$password){
        $this->login = $login;
        $this->password= md5($password);
        return $this;
    }

    /**
     * @param $first_name
     * @param $last_name
     * @param $login
     * @param $email
     * @param $password
     * @param $password_confirm
     * Registration setter
     * @return $this
     */
    public function setRegistraition($first_name, $last_name, $login,$email,$password,$password_confirm){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
        $this->password_confirm = $password_confirm;
        return $this;
    }


    /**
     * @return mixed $this->login
     */
    public function getLogin(){
        return $this->login;
    }

    /**
     * @return mixed $this->first_name
     */
    public function getFirst_name(){
        return $this->first_name;
    }

    /**
     * @return mixed $this->last_name
     */
    public function getLast_name(){
        return $this->last_name;
    }

    /**
     * @return string $full_name
     */
    public function FullName(){
        $full_name = $this->first_name . " " . $this->last_name;
        return $full_name;
    }/**
     * @return mixed $this->email
     */
    public function getEmail(){
        return $this->email;
    }



    function correct_user(){
        $sql = "SELECT * FROM users WHERE login=:login AND password=:password";
        global $db;
        $result = $db->prepare($sql);
        $result->bindvalue(':login', $this->login);
        $result->bindvalue(':password', $this->password);
        $result->execute();
        $result = $result->fetchAll();


        if (count($result) > 0) {
            $_SESSION['user'] = [
                "login" => $this->login,
                "first_name" => $this->first_name,
                "last_name" => $this->last_name,
            ];

        }

    }

    function registration_user(){
        global $db;
        global $db_table;
        $data = array('first_name' => $this->first_name,'last_name' => $this->last_name,
            'login' => $this->login,'email'=>$this->email, 'password' => md5($this->password));
        $query = $db->prepare("INSERT INTO $db_table (first_name,last_name, login,email,password)
        values (:first_name,:last_name, :login, :email, :password)");

        $query->execute($data);

    }


}