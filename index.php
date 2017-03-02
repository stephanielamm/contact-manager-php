<?php
  include 'head.php';
?>

<div class="container-fluid">
  <a href="add.php">
    Add Contact
  </a>
</div>

<div class="container-fluid">
  <?php foreach($contacts as $contact) : ?>
    <?= $contact['firstname']; ?> <?= $contact['lastname']; ?>
</div>
<?php endforeach ?>

<?php include 'footer.php';
?>
