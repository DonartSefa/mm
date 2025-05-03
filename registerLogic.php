<?php 
include_once 'config.php';

if(isset($_POST['submit'])){
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['pasword'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);
    $tempConfirm = $_POST['confirm_password'];
    $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    if(emty($emri ) || ($username ) || ($email ) || ($tempPassword ) || ($tempConfirm )){
        echo "Please fill all the fields";
    }else{
        $sql = "INSERT INTO users(emri, username, email, password, confirm_password) VALUES (:emri, :username, :email, :password, :confirm_password)";
    }
}

