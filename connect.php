<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$conn = new mysqli ('localhost','root', '', 'form');
if ($conn -> connect_error){
    die('Connection failed :' .$conn -> connect_error);
}
else{
    
    $stmt = $conn-> prepare("insert into contact(name, phone,email, msg) values(?,?,?,?)");
    $stmt -> bind_param("siss", $name, $phone, $email, $msg);
    $stmt -> execute();
    echo "Success";
    $stmt->close();
    $conn->close();
}

?>