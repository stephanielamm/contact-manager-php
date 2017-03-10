<?php
  include 'header.php'
  ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Style Guide</title>

    <!-- MOBILE -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- BOOTSTRAP -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/587778f1fd.js"></script>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400|Roboto+Slab:100,300" rel="stylesheet">
    </head>
  <body>
<div class="container-fluid">
    <h1>Style Guide</h1>
    <p>By Stephanie Lamm.</p>

    <h1>Colors</h1>
    <div class="swatch main2"></div>
    <div class="swatch main1"></div>
    <div class="swatch text"></div>
    <div class="swatch accent1"></div>
    <div class="swatch accent2"></div>
    <div class="swatch accent3"></div>
    <div class="swatch neutral1"></div>
    <div class="swatch neutral2"></div>


    color squares here with #

    <h1>Typography</h1>
    Poppins
    300
    400

    Roboto Slab
    100
    300

    light
    regular
    bold


    <h1>h1. here.</h1>
    <h2>h2. in a different color.</h2>
    <h3>h3. in a bold font.</h3>
    <h4>h4. in an italic font.</h4>
    <h5></h5>

    <p><b>A paragraph.</b>lorem ipsum here with ITALICS every once in a while.</p>
    p.lead-text (bigger, bolder)
    p.light-text

    LINK STYLING

    INPUT (FORM) EXAMPLES
    watch padding on the inputs (should be 8-14px padding on the right, top and bottom)

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

    LIST EXAMPLES
    <h4 class="align-center">Ordered List</h4>
      <ol>
        <li>This is the first item.</li>
        <li>This is the second item.</li>
        <li>This is the third item.</li>
        <li>This is the fourth item.</li>
        <li>This is the fifth item.</li>
        <li>This is the sixth item.</li>
        <li>This is the seventh item.</li>
        <li>This is the eighth item.</li>
        <li>This is the ninth item.</li>
        <li>This is the tenth item.</li>
      </ol>

      <h4 class="align-center">Unordered List</h4>
        <ul>
          <li>This is the first item.</li>
          <li>This is the second item.</li>
          <li>This is the third item.</li>
          <li>This is the fourth item.</li>
          <li>This is the fifth item.</li>
          <li>This is the sixth item.</li>
          <li>This is the seventh item.</li>
          <li>This is the eighth item.</li>
          <li>This is the ninth item.</li>
          <li>This is the tenth item.</li>
        </ul>


  <h1>Shadow Box</h1>
    <div class="container panel panel-default">
      <div class="row panel-heading">
          <h2 class="panel-title">All Contacts</h2>
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


<h1>Floating Button</h1>
<div id="container-floating">
  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="#;">
    <p class="plus">+</p>
    <img class="edit" src="http://ssl.gstatic.com/bt/C3341AA7A1A076756462EE2E5CD71C11/1x/bt_compose2_1x.png">
  </div>
</div>
</div>
  </body>
</html>
