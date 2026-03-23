<?php
 $_firstname = $_POST['firstname'];
 $_lastname = $_POST['lastname'];
 $_gender = $_POST['gender'];
 $_email = $_POST['email'];
 $_password = $_POST['password'];
 $_number = $_POST['number']

 //Database connection
$conn = new mysqli('localhost','root','','social_promo_account');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    stmt = $conn->prepare("insert into accounts(firstname,lastname,gender,email,password,number)
    values(?,?,?,?,?,?)")
    $stmt->bind_param("sssssi",$firstname,$lastname,$gender,$email,$password,$number);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}
?>