<?php
include_once 'config.php';

if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);
    $tempConfirm = $_POST['confirm_password'];
    $confirm_password = password_hash($tempPass, PASSWORD_DEFAULT);

    if (empty($emri) || empty($username) || empty($email) || empty($tempPass) || empty($confirm_password)) {
        echo "Please fill all the fields";
    } else {
        $sql = "INSERT INTO users(emri, username, email, password, confirm_password, is_admin) VALUES (:emri, :username, :email, :password, :confirm_password, :is_admin)";
        $insertSql = $conn->prepare($sql);

        $isAdmin = 0;
        $insertSql->bindParam(":emri", $emri);
        $insertSql->bindParam(":username", $username);
        $insertSql->bindParam(":email", $email);
        $insertSql->bindParam(":password", $password);
        $insertSql->bindParam(":confirm_password", $confirm_password);
        $insertSql->bindParam(":is_admin",$isAdmin);

        $insertSql->execute();

        header("Location: login.php");
    }
}

