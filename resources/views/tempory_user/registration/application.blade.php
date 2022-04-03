<h2>HTML Forms</h2>

<form action="application" method="POST">
    @csrf

  <label>surname:</label><br>
  <input type="text" id="surname" name="surname"><br>

  <label>First Name:</label><br>
  <input type="text" id="fname" name="fname"><br>

  <label>Middle Name:</label><br>
  <input type="text" id="mname" name="mname"><br>

  <label>Last Name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  
  <label>gender:</label><br>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>

  <label for="civil_status">Civil Status:</label><br>
  <input type="text" id="civil_status" name="civil_status"><br>

  <label>Current Address:</label><br>
  <input type="text" id="current_postal_address" name="current_postal_address"><br>

  <label>Permenent Address:</label><br>
  <input type="text" id="permenant_postal_address" name="permenant_postal_address"><br>

  <label>Current Mobile No:</label><br>
  <input type="number" id="current_mobile" name="current_mobile"><br>

  <label for="permenant_mobile">Permenent Mobile No:</label><br>
  <input type="number" id="permenant_mobile" name="permenant_mobile"><br>

  <label for="police">Police Devision:</label><br>
  <input type="text" id="police_division" name="police_division"><br>

  <label for="email">email:</label><br>
  <input type="email" id="email" name="email"><br>

  <label for="dob">Birthday:</label><br>
  <input type="date" id="dob" name="dob"><br>

  <label for="age_as_at_closing_date">Age as Closing Date:</label><br>
  <input type="number" id="age_as_at_closing_date" name="age_as_at_closing_date"><br>

  
  <label for="citizenship">Citizenship:</label><br>
  <input type="text" id="citizenship" name="citizenship"><br>

  
  <label for="nic">NIC Number:</label><br>
  <input type="text" id="nic" name="nic"><br>

  
  <label for="driving_licen_no">Driving Licence:</label><br>
  <input type="text" id="driving_licen_no" name="driving_licen_no"><br>

  
  <label for="driving_licen_issuing_date">Driving Licence issued date:</label><br>
  <input type="date" id="driving_licen_issuing_date" name="driving_licen_issuing_date"><br>

  
  <label for="profile_photo_path">Photo:</label><br>
  <input type="file" id="profile_photo_path" name="profile_photo_path"><br>
  <button type="submit">Upload File</button>

  <input type="submit" value="Next">

  
</form> 