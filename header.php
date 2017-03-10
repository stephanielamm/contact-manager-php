<?php
  include 'database.php';
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Contact Manager By Stephanie Lamm</title>

   <!-- MOBILE -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP -->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <!-- FONT AWESOME -->
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <script src="https://use.fontawesome.com/587778f1fd.js"></script>
   <!-- CUSTOM CSS -->
   <link rel="stylesheet" type="text/css" href="style.css">
   <!-- GOOGLE FONTS -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   </head>
 <body>
   <nav class="navbar">
     <!--
      <li><a href="index.php" class="my-contacts"> <button class="btn btn-outline my-contacts" type="button">Contacts</button></a></li>
      <li><a href="style.php" class="my-contacts"> <button class="btn btn-outline my-contacts" type="button">Style Guide</button></a></li>
-->
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="index.php">Contacts</a>
      <a href="styleguide.php">Style Guide</a>
      <a href="https://github.com/stephanielamm">GitHub</a>
    </div>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
</nav>
