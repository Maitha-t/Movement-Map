<?php
$conn = mysqli_connect('localhost','root','root','myproj','4306');
if(isset($_POST["button1"]))
{
    echo "f";
	$sql = "INSERT INTO MapMovement(move) VALUES ('f')";	  
    mysqli_query($conn , $sql);
}
else if(isset($_POST["button2"]))
{	
	echo "r";
    $sql = "INSERT INTO MapMovement(move) VALUES ('r')";	  
    mysqli_query($conn , $sql);
}	
else if(isset($_POST["button3"]))
{
	echo "l";
	$sql = "INSERT INTO MapMovement(move) VALUES ('l')";	  
    mysqli_query($conn , $sql);
}	
else if(isset($_POST["button4"]))
{	
	echo "b";
	$sql = "INSERT INTO MapMovement(move) VALUES ('b')";	  
    mysqli_query($conn , $sql);
}	
else if(isset($_POST["button5"]))
{	
	echo "s";
	$sql = "INSERT INTO MapMovement(move) VALUES ('s')";	  
    mysqli_query($conn , $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
       background: linear-gradient(to left,#D8BFD8,#FAF0E6); }
</style>
</head>	   
	   