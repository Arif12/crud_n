<?php
//print_r($_POST);
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$comment=$_POST['comment'];


$link=mysqli_connect("localhost",
    "root",
    "lict@2",
   "facebook");

$query="UPDATE `facebook`.`users` SET `firstname` = '".$firstname."',`lastname` = '".$lastname ."',`email` ='".$email."',`comment` ='".$comment."' WHERE `users`.`id` = '$id';";
print_r($query);
mysqli_query($link,$query);
header('location:list.php');
?>
