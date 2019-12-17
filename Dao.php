<?php 

class Dao {
private $host = "us-cdbr-iron-east-05.cleardb.net";
private $dbname = "heroku_7c49285684113b3";
private $username = "b58a9985383d8d";
private $password = "7ee61dfc";

 public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    echo print_r("Connection Success",1);

     return $connection;
  } 
    
public function getHistory($email) {
    $conn = $this-> getConnection();
    $sql = "Select sentence from History where email = :email";
    $q = $conn->prepare($sql);
    $q->bindParam(':email', $email);
    $q->execute();
    return $q;
}
 
public function saveUser($email,$passWord){
    $conn = $this-> getConnection();
    $saveQuery = "insert into Users (userID,email,passwd) values (0,:email,:passWord)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(':email', $email);
    $q->bindParam(':passWord', $passWord);
    $q->execute();
 }

public function getLogIn($inputEmail,$passWord){
    $conn = $this-> getConnection(); 
    $sql="select passwd from Users where email=:inputEmail" ;
    $q = $conn->prepare($sql);
    $q->bindParam(':inputEmail', $inputEmail);
     $q->execute();
    $result=$q->rowCount();
    if($result>0){
        return true;
    }
    else{
        return false;
    }
}
    
public function saveSentence($email,$sentence){
    $conn = $this-> getConnection();
    $saveQuery = "insert into History (email,sentence) values (:email,:sentence)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(':email', $email);
    $q->bindParam(':sentence', $sentence);
    $q->execute();
 }
    
}