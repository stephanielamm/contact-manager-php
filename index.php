<?php
  include 'header.php';

  $contacts = $db->query('SELECT * FROM contacts')->fetchALL(PDO::FETCH_ASSOC);
?>
<h3>Items: <?= count($contacts); ?></h3>

<table class="table table-hover">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Title</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th>Notes</th>
  </thead>

  <tbody>
    <?php foreach ($contacts as $contact) :?>
      <tr>
        <td><a href="/edit.php?id=<?=$contact['id'];?>"><?= $contact['id']; ?></a></td>
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

<?php include 'footer.php';?>
