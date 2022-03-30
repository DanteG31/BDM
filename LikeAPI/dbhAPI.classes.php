<?php
class DbhApi{

    protected function connect(){
        try{

            $server="localhost";
            $username="root";
            $password="1234";
            $database="news_web_page";

            $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
            return $conn;
        }
        catch(PDOException $error){
            die("Connection failed " . $error->getMessage());
        }
    }
}
?>