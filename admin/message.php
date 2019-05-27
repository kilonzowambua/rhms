<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$content=$_POST['content'];
//$lname=$_POST['lname'];
//$national_id=$_POST['national_id'];
//$phoneno=$_POST['phoneno'];
//$email=$_POST['email'];
//$username=$_POST['username'];
//$password=md5($_POST['password']);

$query="insert into message(name,content) values(?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('ss',$name,$content);
$stmt->execute();
echo"<script>alert('Message Sent ');</script>";
}
?>