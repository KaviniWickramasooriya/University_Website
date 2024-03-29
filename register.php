<?php

$link=mysqli_connect("localhost","root","","register");
$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$date_of_birth=$_REQUEST['date_of_birth'];
$email=$_REQUEST['email'];
$nic=$_REQUEST['nic'];
$tel_no=$_REQUEST['tel_no'];
$address=$_REQUEST['address'];

$sql="insert into customers values('$first_name','$last_name','$date_of_birth','$email','$nic','$tel_no','$address')";

if(mysqli_query($link,$sql))
{
echo ("Data Inserted");
}
else
{
echo ("Data Not Inserted");
}

?>