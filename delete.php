<?php
  include 'database.php';
  $stmt = $db->prepare('DELETE from contacts WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));
  header('Location: http://localhost:8080/index.php?deleted=true');
 ?>
