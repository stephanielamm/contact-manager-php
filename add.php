<?php
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- CREATE NEW CONTACT -->
<form>
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Phone Number</label> <!-- Will allow for cell, home, and add button for additional phone number -->
    <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number">
  </div>
  <div class="form-group">
    <label>Email Address</label> <!-- Will add button for additional email -->
    <input type="text" class="form-control" id="email" placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Address</label> <!-- Will add button for additional email -->
    <input type="text" class="form-control" id="address1" placeholder="Enter Street Address">
    <input type="text" class="form-control" id="address2" placeholder="Enter Additional Address">
    <input type="text" class="form-control" id="city" placeholder="City">
    <div class="form-group contact_state">
                  <label for="contact_state">State:</label>
                  <select name="contact_state" id="contact_state" value="_">
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
  </div>
  <div class="form-group">
    <label>Notes</label>
    <textarea class="form-control" id="notes" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
<!-- END CREATE NEW CONTACT -->
