<?php 

include_once 'config.php';

$emri = $_POST['emri'];
$username = $_POST['username'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql = "UPDATE users SET emri=:emri, username=:username, email=:email WHERE id=:id";
$prep = $conn->prepare($sql);
$prep->bindParam(":emri",$emri);
$prep->bindParam(":username",$username);
$prep->bindParam(":email",$email);
$prep->bindParam(":id",$id);

$prep->execute();

header("Location: dashboard.php");