<?php
include 'database.php';

header('Location: http://localhost:8080/index.php?updated=true');


$stmt = $db->prepare('UPDATE contacts SET first = :first, last = :last, title = :title, phone = :phone, address = :address, city = :city, state = :state, zipcode = :zipcode, notes = :notes WHERE id = :id');

$stmt->execute(array(
  ':id' => $_POST['id'],
  ':first' => $_POST['first'],
  ':last' => $_POST['last'],
  ':title' => $_POST['title'],
  ':phone' => $_POST['phone']
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zipcode' => $_POST['zipcode'],
  ':notes' => $_POST['notes']
//  ':updated' => array_key_exists('updated', $_POST) ? $_POST['updated'] : 0
));

// print('<h5>' . $_POST['id'] . '</h5>');
