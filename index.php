<?php
  include 'header.php';

  $contacts = $db->query('SELECT * FROM contacts')->fetchALL(PDO::FETCH_ASSOC);
?>


<!--h3>Items: <?= count($contacts); echo reset($contacts[1]) ?></h3-->
<div class="panel panel-default">
  <div class="panel-heading">
      <h4 class="panel-title">Contacts</h4>
  </div>

<?php foreach ($contacts as $contact) :?>
  <ul class="list-group" id="contact-list">
      <li class="list-group-item">
          <div class="col-xs-12 col-sm-10">
              <span class="edit"><a href="/edit.php?id=<?=$contact['id'];?>"></span>
              <span class="name"><?= $contact['first']; ?> <?= $contact['last']; ?></span><br>
              <span class="text-muted"><?= $contact['title']; ?></span><br></span>
              <span class="text-muted"><?= $contact['phone']; ?></span><br></span>
              <span class="text-muted"><?= $contact['address']; ?></span><br></span>
              <span class="text-muted"><?= $contact['city']; ?>, <?= $contact['state']; ?> <?= $contact['zipcode']; ?></span><br></span>
              <span class="text-muted"><?= $contact['notes']; ?></span><br></span>
          </div>
          <div class="clearfix"></div>
      </li>
  </ul>
<?php endforeach; ?>

</div>


<?php include 'footer.php';?>
