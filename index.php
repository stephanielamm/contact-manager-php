<?php
  include 'header.php';

  $contacts = $db->query('SELECT * FROM contacts')->fetchALL(PDO::FETCH_ASSOC);
?>


<!--h3>Items: <?= count($contacts); echo reset($contacts[1]) ?></h3-->
<div class="container-fluid">
  <div class="row justify-content-lg-center">
<table class="table table-hover table-striped" style="background-color: rgba(0, 255, 0, 0.11);">
  <thead class="thead-inverse">
    <th></span>Edit</th>
    <th>ID</th>
    <th>First</th>
    <th>Last</th>
    <th>Title</th>
    <th>Phone</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>Notes</th>
  </thead>

  <tbody>
    <?php foreach ($contacts as $contact) :?>
      <tr>
        <td><a href="/edit.php?id=<?=$contact['id'];?>">Edit</a></td>
        <td><?= $contact['id']; ?></td>
        <td><?= $contact['first']; ?></td>
        <td><?= $contact['last']; ?></td>
        <td><?= $contact['title']; ?></td>
        <td><?= $contact['phone']; ?></td>
        <td><?= $contact['address']; ?></td>
        <td><?= $contact['city']; ?></td>
        <td><?= $contact['state']; ?></td>
        <td><?= $contact['zipcode']; ?></td>
        <td><?= $contact['notes']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
</div>
<?php include 'footer.php';?>
