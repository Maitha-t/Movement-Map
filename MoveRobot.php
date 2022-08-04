<?php
if(isset($_POST["button1"]))
{
		header('Location:btnmap.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Move Robot</title>
<style>
body {
       background: linear-gradient(to left,#D8BFD8,#FAF0E6); }
  
 

.F-button {
             display: block;
             margin : 0 auto;
			 padding:10px;
			 background-color:#D8BFD8;
			 color: #FFFFFF;
			 border: 0px;
			 cursor:pointer;
			 border-radius: 5px;
        }
.R-button {
             display: block;
             margin : 	 auto;
			 padding:10px;
			 background-color:#D8BFD8;
			 color: #FFFFFF;
			 border: 0px;
			 cursor:pointer;
			 border-radius: 5px;
			 position: absolute;
             right: 620px;
			 top: 70px;
			 

        }
.L-button {
             display: block;
             margin : 0 auto;
			 padding:10px;
			 background-color:#D8BFD8;
			 color: #FFFFFF;
			 border: 0px;
			 cursor:pointer;
			 border-radius: 5px;
			 position: absolute;
             left: 620px;
			 top: 70px;
        }
.B-button {
             display: block;
             margin : 0 auto;
			 padding:10px;
			 background-color:#D8BFD8;
			 color: #FFFFFF;
			 border: 0px;
			 cursor:pointer;
			 border-radius: 5px;
			 position: absolute;
			 left: 730px;
             top: 130px;
        }
.S-button {
             display: block;
             margin : 0 auto;
			 padding:10px;
			 background-color:#D8BFD8;
			 color: #FFFFFF;
			 border: 0px;
			 cursor:pointer;
			 border-radius: 5px;
			 position: absolute;
			 left: 745px;
             top: 70px;
        }		
</style>
</head>
<body>
<form action="btnmap.php" method="post" >
<button class="F-button" name="button1">Forward</button>
<button class="R-button" name="button2">Right</button>
<button class="L-button" name="button3">Left</button>
<button class="B-button" name="button4">Backward</button>
<button class="S-button" name="button5">Stop</button>
</body>
</html> 