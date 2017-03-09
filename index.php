<?php
  include 'header.php';

  $contacts = $db->query('SELECT * FROM contacts')->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container panel panel-default">
  <div class="row panel-heading">
  <div class="col-lg-8 col-md-10 col-sm-11">
      <h2 class="panel-title">All Contacts</h2>
    </div>
      <div class="col-lg-4 col-md-2 col-ms-1">
      <a href="new.php"> <button class="btn btn-outline new-contact" style="float: right;" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button></a>
  </div>
</div>

<?php foreach ($contacts as $contact) :?>
  <ul class="list-group" id="contact-list">
      <li class="list-group-item">
          <div class="col-xs-12 col-sm-10">
              <span class="edit"><a href="/edit.php?id=<?=$contact['id'];?>"></span>
              <span class="name"><?= $contact['first']; ?> <?= $contact['last']; ?></span><br>
              <span class="detail text-muted"><?= $contact['title']; ?></span><br></span>
              <span class="detail text-muted"><?= $contact['phone']; ?></span><br></span>
              <span class="detail text-muted"><?= $contact['address']; ?></span><br></span>
              <span class="detail text-muted"><?= $contact['city']; ?>, <?= $contact['state']; ?> <?= $contact['zipcode']; ?></span><br></span>
              <span class="detail text-muted"><?= $contact['notes']; ?></span><br></span>
          </div>
          <div class="clearfix"></div>
      </li>
  </ul>
<?php endforeach; ?>

</div>


<?php include 'footer.php';?>
