<?php
$conn = mysqli_connect('localhost','root','root','myproj','4306');
if(isset($_POST["button1"]))
{
    echo "<span class='tex-style'> f  </span>";
	$sql = "INSERT INTO MapMovement(move) VALUES ('f')";	  
    mysqli_query($conn , $sql);
}
else if(isset($_POST["button2"]))
{	
	echo "<span class='tex-style'> r  </span>";
    $sql = "INSERT INTO MapMovement(move) VALUES ('r')";	  
    mysqli_query($conn , $sql);
}	
else if(isset($_POST["button3"]))
{
	echo "<span class='tex-style'> l  </span>";
	$sql = "INSERT INTO MapMovement(move) VALUES ('l')";	  
    mysqli_query($conn , $sql);
}	
else if(isset($_POST["button4"]))
{	
	echo "<span class='tex-style'> b  </span>";
	$sql = "INSERT INTO MapMovement(move) VALUES ('b')";	  
    mysqli_query($conn , $sql);
}	
else if(isset($_POST["button5"]))
{	
	echo "<span class='tex-style'> s </span>";
	$sql = "INSERT INTO MapMovement(move) VALUES ('s')";	  
    mysqli_query($conn , $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
       background: linear-gradient(to left,#D8BFD8,#FAF0E6); 
	   }
	   
.tex-style {
	display:block;
        font-size: 50px;
        background: -webkit-linear-gradient(#FDF5E6, #F0FFFF);
	-webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
	 margin: 0 auto;
         text-align: center;
	 }
</style>
</head>	   
	   
