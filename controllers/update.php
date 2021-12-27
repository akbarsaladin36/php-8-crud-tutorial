<?php 

require_once './config/db.php';

if(isset($_POST['update'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $address = $_POST['address'];

    $data[] = $username;
    $data[] = $email;
    $data[] = $password;
    $data[] = $address;

    $id = $_GET['id'];
    
    $sql = "UPDATE users SET user_username = ?, user_email = ?, user_password = ?, user_address = ?, user_updated_at = NOW() WHERE user_id = '$id'";
    $result = $db->prepare($sql);
    $result->execute($data);

    echo "<script>alert('Data berhasil diupdate!')</script>";
    echo "<script>window.location='index.php';</script>";
}




?>