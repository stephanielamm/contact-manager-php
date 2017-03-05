<?php
  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

 ?>

 <?php if (array_key_exists('updated', $_GET)) : ?>
   <div class="alert alert-success">
     <p>Your contact was updated.</p>
   </div>
 <?php endif; ?>

 <?php if (array_key_exists('deleted', $_GET)) : ?>
 <div class="alert alert-danger">
   <p><strong>Your contact has been deleted!</strong></p>
 </div>
 <?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p>Your contact was created.</p>
</div>
<?php endif; ?>

<div class=container-fluid style="background-color: rgba(0, 255, 0, 0.11); padding-top: 50px; padding-bottom: 120px;">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6 col-md-10">
  <h1>Edit Contact</h1>

<!-- CLOSE BUTTON -->
<a href="index.php"><button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></a>

<!-- START OF EDIT CONTACT FORM -->
<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="first" value="<?= $contact['first']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input class="form-control" type="text" name="last" id="last" value="<?= $contact['last']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="title" value="<?= $contact['title']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <textarea class="form-control" name="phone" id="phone"><?= $contact['phone']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="contact_address">Street Address</label>
    <input class="form-control" type="text" name="address" id="address" value="<?= $contact['address']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_state">State</label>
    <select name="state" id="contact_state" value="<?= $contact['state']; ?>" class="form-control">
      <option value=""> </option>
      <option value="AL">Alabama</option>
      <option value="AK">Alaska</option>
      <option value="AZ">Arizona</option>
      <option value="AR">Arkansas</option>
      <option value="CA">California</option>
      <option value="CO">Colorado</option>
      <option value="CT">Connecticut</option>
      <option value="DE">Delaware</option>
      <option value="DC">District Of Columbia</option>
      <option value="FL">Florida</option>
      <option value="GA">Georgia</option>
      <option value="HI">Hawaii</option>
      <option value="ID">Idaho</option>
      <option value="IL">Illinois</option>
      <option value="IN">Indiana</option>
      <option value="IA">Iowa</option>
      <option value="KS">Kansas</option>
      <option value="KY">Kentucky</option>
      <option value="LA">Louisiana</option>
      <option value="ME">Maine</option>
      <option value="MD">Maryland</option>
      <option value="MA">Massachusetts</option>
      <option value="MI">Michigan</option>
      <option value="MN">Minnesota</option>
      <option value="MS">Mississippi</option>
      <option value="MO">Missouri</option>
      <option value="MT">Montana</option>
      <option value="NE">Nebraska</option>
      <option value="NV">Nevada</option>
      <option value="NH">New Hampshire</option>
      <option value="NJ">New Jersey</option>
      <option value="NM">New Mexico</option>
      <option value="NY">New York</option>
      <option value="NC">North Carolina</option>
      <option value="ND">North Dakota</option>
      <option value="OH">Ohio</option>
      <option value="OK">Oklahoma</option>
      <option value="OR">Oregon</option>
      <option value="PA">Pennsylvania</option>
      <option value="RI">Rhode Island</option>
      <option value="SC">South Carolina</option>
      <option value="SD">South Dakota</option>
      <option value="TN">Tennessee</option>
      <option value="TX">Texas</option>
      <option value="UT">Utah</option>
      <option value="VT">Vermont</option>
      <option value="VA">Virginia</option>
      <option value="WA">Washington</option>
      <option value="WV">West Virginia</option>
      <option value="WI">Wisconsin</option>
      <option value="WY">Wyoming</option>
    </select>
  </div>

  <div class="form-group">
    <label for="contact_zipcode">Zip Code</label>
    <input class="form-control" type="text" name="zipcode" id="zipcode" value="<?= $contact['zipcode']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes"><?= $contact['notes']; ?></textarea>
  </div>

  <!--div class="checkbox">
    <label>
    <input type="checkbox" name="completed" value="1"<!?= ($contacts['completed'] == 1) ? ' checked' : ''; ?>> Completed
    </label>
  </div-->

  <button class="btn btn-primary">Save Contact</button>
  <a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a>
</form>
</div>
</div>
</div>
<?php   include 'footer.php'; ?>
