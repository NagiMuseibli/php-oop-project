<?php

class DatabaseConnection
{
   public function __construct()
   {
       $conn = new mysqli(DB_HOST,DB_USER, DB_PASSWORD, DB_DATABASE);
       if($conn->connect_error){
           die("Database connection failed..");
       }
       return $this->conn = $conn;
   }
}