<?php
  include 'database.php';
  $stmt = $db->prepare("INSERT INTO contacts
    (first, last, title, phone, address, city, state, zipcode, notes, completed)
    VALUES
    (:first, :last, :title, :phone, :address, :city, :state, :zipcode, :notes, :completed)
  ");
  $stmt->execute(array(
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':title' => $_POST['title'],
    ':phone' => $_POST['phone'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zipcode' => $_POST['zipcode'],
    ':notes' => $_POST['notes'],
    ':completed' => array_key_exists('completed', $_POST) ? $_POST['completed'] : 0
  ));
  $id = $db->lastInsertId();
  header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
?>
