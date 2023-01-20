<?php

$Username = $_POST["Username"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$pass = $_POST["password"];

$host = "localhost";
$dbname = "data_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbname);

if(mysqli_connect_errno()){
    die("Connection error: " . mysqli_connect_errno());
}

$sql= "Insert Into dataform (name,email,phone,password) 
       Values (?,?,?,?)";

$stmt= mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt,$sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssis",$Username,$email,$phone,$pass);

mysqli_stmt_execute($stmt);

echo "Thank you for signing up! Log in now to begin your learning journey!";