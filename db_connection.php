<!-- Connect to the server -->

<?php

// function for open connection to the server
function OpenCon()
 {
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=practice", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    return $conn;
 }
 
 // function for close connection to the server
function CloseCon($conn)
 {
    $conn = null;
 }

// Create database
function createDB()
{
    $sql = "CREATE DATABASE myDBPDO";
    //use exec() because no results are returned
    $conn->exec($sql);
}
   
?>