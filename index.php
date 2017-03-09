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
          <div class="col-xs-5 col-sm-5 contact-box left-detail">
              <a href="/edit.php?id=<?=$contact['id'];?>">
              <span class="name"><?= $contact['first']; ?> <?= $contact['last']; ?></span></a><br>
              <span class="title"><?= $contact['title']; ?></span><br></span>
            </div>
            <div class="col-xs-6 col-sm-6 right-detail">
              <p><span class="detail text-muted"><i class="fa fa-mobile icon" aria-hidden="true">&nbsp;</i><?= $contact['phone']; ?></span><br></span></p>
              <p><span class="detail text-muted"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?= $contact['address']; ?></span><br></span>
              <span class="detail text-muted"><?= $contact['city']; ?>, <?= $contact['state']; ?> <?= $contact['zipcode']; ?></span><br></span></p>
              <span class="detail text-muted"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;<?= $contact['notes']; ?></span><br></span>
          </div>
          <div class="col-xs-1 col-sm-1"><a href="/edit.php?id=<?=$contact['id'];?>"><i class="fa fa-pencil icon text-muted" style="float:right;" aria-hidden="true"></i></a>
          </div>
          <div class="clearfix"></div>
      </li>
  </ul>
<?php endforeach; ?>

</div>


<?php include 'footer.php';?>
