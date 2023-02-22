<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">	
	<style>
	body{
	font-family: Montserrat;
	}
	</style>
</head>
<body style="font-family:Montserrat" class="container" >
	<?php require 'include/layout.php'; ?>
	<div style="margin-top:60px">
		<style>
			.a{min-width:250px;min-height:50px;}
		</style>
		<div class="w3-container w3-center w3-animate-bottom">
		
		  <h1 style="font-size:40pt;padding-bottom:20px">Easily create math worksheets <i>free</i></h1>
		  <a style="width:80%" href="build/addition" class="a btn btn-outline-danger btn-lg" role="button" >Addition +</a>
		  <br>
		  <br>
		  <a style="width:80%" href="build/subtraction" class="a btn btn-outline-success btn-lg">Subtraction -</a>
		  <br>
		  <br>
		  <a style="width:80%" href="build/multiplication" class="a btn btn-outline-warning btn-lg">Multiplication &#215;</a>
		  <br>
		  <br>
		  <a style="width:80%" href="build/division" class="a btn btn-outline-primary btn-lg">Division &div;</a>
		  <br>
		  <br>
		  <a style="width:80%" href="more" class="a btn btn-outline-dark btn-lg">More</a>
		  
		</div>
	</div>
	<div style="padding-top:55px">
		<?php include "include/footer.php"; ?>
	</div>
</body>
</html>