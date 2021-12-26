<?php 

require_once './config/db.php';

if(isset($_POST["register"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $address = $_POST["address"];

    $data[] = $username;
    $data[] = $email;
    $data[] = $password;
    $data[] = $address;

    $sql = "INSERT INTO users (user_username, user_email, user_password, user_address) VALUES(?, ?, ?, ?)";
    $result = $db->prepare($sql);
    $result->execute($data);

    echo "<script>alert('Data berhasil disimpan!')</script>";
    echo "<script>window.location='index.php';</script>";
    


}


?>