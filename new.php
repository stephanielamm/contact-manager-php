<?php
include 'header.php';

?>

<div class=container-fluid style="background-color: rgba(0, 255, 0, 0.11); padding-top: 50px; padding-bottom: 120px;">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6 col-md-10">


  <!-- CLOSE BUTTON -->
  <a href="index.php"><button type="button" class="close" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button></a>

  <!-- START OF ADD NEW CONTACT FORM -->
  <form method="POST" action="/create.php">

      <h1>Create New Contact</h1>

    <input type="hidden" name="id" id="id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="contact_first">First Name</label>
    <input class="form-control" type="text" name="first" id="first" placeholder="Enter First Name">
  </div>
  <div class="form-group">
    <label for="contact_last">Last Name</label>
    <input type="text" class="form-control" id="last" placeholder="Enter Last Name">
  </div>
  <div class="form-group">
    <label for="contact_title">Title</label>
    <input class="form-control" type="text" name="title" id="title" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <textarea class="form-control" name="phone" id="phone" placeholder="Enter Phone Number"></textarea>
  </div>
  <div class="form-group">
    <label for="contact_address">Street Address</label>
    <input class="form-control" type="text" name="address" id="address" placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label for="contact_city">City</label>
    <input class="form-control" type="text" name="city" id="city" placeholder="Enter City">
  </div>
    <div class="form-group">
      <label for="contact_state">State</label>
      <select name="state" id="contact_state" value="_" class="form-control">
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
    <input class="form-control" type="text" name="zipcode" id="zipcode" placeholder="Enter Zip Code">
  </div>
  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
  </div>
  <button class="btn btn-primary">Create New Contact</button>
</form>
</div>
</div>
</div>
<!-- END CREATE NEW CONTACT -->
<?php include 'footer.php' ?>
