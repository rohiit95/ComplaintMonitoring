<?php
  $user='abhishek';
  $password='abd';
  $host="localhost";
  $db="chatbox";
 $con= mysqli_connect($host,$user,$password,$db) or die();
 
 
$t=time();
$user=$_POST["user"];
$msg=$_POST["msg"];
$query=" INSERT INTO `chatbox`.`chat` (`id`, `msg`, `sender_id`, `time`) VALUES (NULL, '$msg', '$user', '$t')";
$query_run=mysqli_query($con,$query);


?>

