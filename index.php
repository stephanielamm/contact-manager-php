<?php
//  $db = new PDO(‘mysql:host=localhost;dbname=nameofthedateabase;charset=utf8mb4’, ‘username’, ‘password’);
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <!-- bootstrap -->
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <title>Contact Manager</title>
 </head>
 <body>
   <h1>Contacts</h1>
<form>
<div class="form-group">
  <label>Name</label>
  <input type="name" class="form-control" id="name" placeholder="Enter Name">
</div>
<div class="form-group">
  <label>Phone Number</label> <!-- Will allow for cell, home, and add button for additional phone number -->
  <input type="phone" class="form-control" id="phone" placeholder="Enter Phone Number">
</div>
<div class="form-group">
  <label>Email Address</label> <!-- Will add button for additional email -->
  <input type="email" class="form-control" id="email" placeholder="Enter Email">
</div>
<div class="form-group">
  <label>Notes</label>
  <textarea class="form-control" id="notes" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Add</button>
</form>
 </body>
</html>
