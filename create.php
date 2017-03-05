<?php
  include 'database.php';
  $stmt = $db->prepare("INSERT INTO contacts
    (first, last, title, phone, address, city, state, zipcode, notes)
    VALUES
    (:first, :last, :title, :phone, :address, :city, :state, :zipcode, :notes)
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
    ':notes' => $_POST['notes']
    ));
  $id = $db->lastInsertId();
  header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
?>
