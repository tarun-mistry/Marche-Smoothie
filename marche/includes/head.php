<?php 
$Name = "";
ob_start();
if(!isset($_SESSION)){
  session_start();
}

 if(isset($_SESSION['NAME']) && !empty($_SESSION['NAME'])){
        $Name = $_SESSION['NAME'];
       }else{
        $Name="";
       }       


?>

<!DOCTYPE html>
<html>
<head>
<title>Marche Smoothies</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/Bootstrap/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Theme CSS -->

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */


.w3-bar .w3-button {
  padding: 16px;
}
.containe{
  position: relative;
  margin-top:10px;
  margin-right:0px;
  width:100%

}
.mymod{
width:400px;
  height:400px;
}

</style>

</head>