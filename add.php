<?php
print_r($_POST);
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$dob=$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
$gender=$_POST['gender'];
$comment=$_POST['comment'];

$link=mysqli_connect("localhost",
                    "root",
                    "lict@2",
                    "facebook"

);

$query="INSERT INTO `facebook`.`users` (`id`, `firstname`, `lastname`, `email`,`dob`,`gender`,`comment`)
VALUES ('NULL','$firstname','$lastname','$email','$dob','$gender','$comment');";

mysqli_query($link,$query);
header('location:list.php');
