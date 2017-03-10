<?php
  include 'header.php'
  ?>
<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h1 class="align-center">Style Guide</h1>
  </div>
 </div>
</div>
<div class="container">
 <div class="row">
   <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
     <h1>Colors</h1>
   </div>
 </div>
 <div class="row">
   <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
     <div class="swatch main2"></div>
     <div class="swatch main1"></div>
     <div class="swatch text"></div>
   </div>
 </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
     <div class="swatch accent1"></div>
     <div class="swatch accent2"></div>
     <div class="swatch accent3"></div>
   </div>
 </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
     <div class="swatch white"></div>
     <div class="swatch neutral1"></div>
     <div class="swatch neutral2"></div>
</div>
</div>
</div>

<div class="container">
  <div class="row">
    <h1>Typography</h1>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
    <p style="font-family: 'Roboto Slab', serif; font-weight: 400; font-size: 35px;">This is Roboto Slab in 400<p>
    </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
      <p style="font-family: 'Roboto Slab', serif; font-weight: 400; font-size: 35px;">This is Roboto Slab in 300<p>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
      <p style="font-family: 'Roboto Slab', serif; font-weight: 100; font-size: 35px;">This is Roboto Slab in 100<p>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
    <p style="font-family: 'Poppins', sanss-serif; font-weight: 600; font-size: 35px;">This is Poppins in 600<p>
    </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
      <p style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 35px;">This is Poppins in 400<p>
  </div>
  </div>
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md- col-lg-12 col-xl-12">
    <p style="font-family: 'Poppins', sanss-serif; font-weight: 300; font-size: 35px;">This is Poppins in 300<p>
    </div>
  </div>
</div></br>
<div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h1>This is a Header 1 tag.</h1></br>
    <h2>This is a Header 2 tag.</h2></br>
    <h3>This is a Header 3 tag.</h3></br>
    <h4>This is a Header 4 tag.</h4></br>
</div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
    <p>This is a <b>paragraph. </b>Vivamus aliquet vehicula elementum. Proin ac ultrices elit, eget interdum neque. In suscipit consectetur porta. Mauris a nulla convallis massa tempor dignissim iaculis in libero.</p></br>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
    <p class="light-text">This is<b> light-text. </b>Maecenas ut dolor pellentesque, venenatis diam quis, dignissim nulla. Curabitur commodo congue diam, vehicula ullamcorper ante condimentum non. Praesent placerat, lectus in ultrices vulputate, augue arcu porta mi, volutpat dictum elit.</p></br>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
    <p class="lead-text">This is<b> lead-text. </b>Phasellus mollis dolor nec sapien imperdiet, sit amet blandit mauris suscipit. Cras purus sem, faucibus vel dignissim eu, auctor ac est.</p></br>
  </div>
</div>
    <p><a href="#">This is a<b> link. </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></p></br>
</div>

<div class="container">
  <h1>Input Form</h1></br>
<div class="row">
    <div class="container panel panel-default" id="presentation">
      <div class="row panel-heading">
    <form method="POST" action="/#.php">
      <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />
        <h1>Edit Contact</h1>
      </div>
      <input type="hidden" name="id" id="id" value="<?= $contact['id']; ?>" />
    <div class="form-group">
      <label for="contact_first">First Name</label>
      <input class="form-control" type="text" name="first" id="first" placeholder="Enter First Name">
    </div>
    <div class="form-group">
      <label for="contact_last">Last Name</label>
      <input type="text" class="form-control" name="last" id="last" placeholder="Enter Last Name">
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
  </form>
</div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <h2>Lists</h2>

  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <h4>Ordered List</h4>
      <ol class="list-ol">
        <li>This is the first item.</li>
        <li>This is the second item.</li>
        <li>This is the third item.</li>
        <li>This is the fourth item.</li>
        <li>This is the fifth item.</li>
      </ol>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
      <h4>Unordered List</h4>
        <ul class="list-ul">
          <li>This is the first item.</li>
          <li>This is the second item.</li>
          <li>This is the third item.</li>
          <li>This is the fourth item.</li>
          <li>This is the fifth item.</li>
        </ul>
      </div>
    </div>
  </div>


  <h1>Shadow Box</h1>
    <div class="container panel panel-default">
      <div class="row panel-heading">
          <h2 class="panel-title">Contacts</h2>
      </div>
            <a href="#">
            <div class="row contact-box" id="presentation">
              <div class="col-xs-6 col-sm-6 left-detail">
                <span class="name">John Doe</span><br>
                <span class="title">Supervisor</span><br></span>
              </div>
              <div class="col-xs-6 col-sm-6 right-detail">
                <p><span class="detail text-muted"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp;&nbsp;(919) 121-2892</span></p><br>
                <p><span class="detail text-muted"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;183 University Place</span></p><br>
                <p><span class="detail text-muted">Chapel Hill, NC 27514</span></p><br>
                <p><span class="detail text-muted"><i class="fa fa-sticky-note" aria-hidden="true"></i>&nbsp;&nbsp;This is how contacts will appear in the application.</span></p>
              </div>
            </div>
          </a>
    </div>

<h1>Buttons</h1>
<button class="btn btn-primary">Create</button>
<button class="btn btn-primary">Update</button>
<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-delete">Delete</a>


<div id="container-floating">
  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="#;">
    <p class="plus">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>
</div>
</div>

<?php include 'footer.php' ?>
