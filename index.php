
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>

  <!--Main css-->
  <link rel="stylesheet" type="text/css" href="index.css"> 

  <!--JS Validation file-->
  <script src="validation.js"></script> 

  <!--Fontawesome link-->     
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >

  <!--Bootstrap link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
</head>

<body>
  <div class="cont">
  <div class="tname">
    <h3 id="title">Registration Form</h3>
  </div>

  <div id="error_message"></div>
  <form class="needs-validation"  id="form1" action="db_connect.php"   method="post" onsubmit="return validation()" autocomplete="off" >
  <h6 class="field">* indicate mandatory field. </h6> 
  <div class="row">
    <div class="col">
      &nbsp; <i class="fas fa-user"></i> &nbsp;
      <label><label class="indicate">*</label>First name:</label>
      <input  type="text" class="form-control" id="fname" name="fname" placeholder="Enter your first name"
      value="<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?>"  >
      
    </div>
    <div class="col">
      &nbsp; <i class="fas fa-user"></i> &nbsp;
      <label><label class="indicate">*</label>Last name:</label>
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your last name"
      value="<?php if(isset($_POST['lname'])) echo $_POST['lname']; ?>" >
    </div>
  </div>

  <br>

  <div class="row">
    <div class="col">
     &nbsp; <i class="fas fa-envelope"></i> &nbsp;
      <label><label class="indicate">*</label>Email:</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Enter your valid email (Eg. example12@gmail.com)" 
      value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" >
    </div>
    <div class="col">
     &nbsp; <i class="fas fa-key"></i> &nbsp;
      <label><label class="indicate">*</label>Password:</label> 
      <input type="Password" class="form-control" id="password" name="password" placeholder="Enter Minimum 6 Characters" >
      <input type="checkbox" onclick="myFunction()"> Show password
    </div>
  </div>

  <br>
   
    <div>
    &nbsp; <i class="fas fa-address-card"></i> &nbsp;
    <label><label class="indicate">*</label>Address:</label>
    <br>
    <textarea class="form-control" cols="50" rows="3" name="address" id="address" placeholder="Enter your current address... "
    ></textarea>
    </div>

    <br>
    <div>
      <label ><label class="indicate">*</label>Gender:</label> &nbsp &nbsp;
      <input type="radio" name="gender" id="gender" value="male" >male &nbsp;
      <input type="radio" name="gender" id="gender" value="female" >female &nbsp;
      <input type="radio" name="gender" id="gender" value="other" >other &nbsp;
    </div>

    <br>
    
    <div class="row">
      <div class="col">
        &nbsp; <i class="fas fa-flag"></i> &nbsp;
        <label><label class="indicate">*</label>Country</label>
        <select class="form-control" name="country" id="country">
        <option value="Select a country">--Select a country--</option>
        <option <?php if(isset($_POST['country']) && $_POST['country']=='India') echo"selected='selected'"; ?> value="India">India</option>
        <option <?php if(isset($_POST['country']) && $_POST['country']=='US') echo"selected='selected'"; ?> value="US">US</option>
        <option <?php if(isset($_POST['country']) && $_POST['country']=='Canada') echo"selected='selected'"; ?> value="Canada">Canada</option>
        </select>    
      </div>
      <div class="col">
      &nbsp; <i class="fas fa-map-marker-alt"></i> &nbsp;
        <label><label class="indicate">*</label>State</label>
        <select class="form-control" name="state" id="state">
        <option value="Select a state">--Select a state--</option>
        <option <?php if(isset($_POST['state']) && $_POST['state']=='Gujarat') echo"selected='selected'"; ?> value="Gujarat">Gujarat</option>
        <option <?php if(isset($_POST['state']) && $_POST['state']=='Punjab') echo"selected='selected'"; ?> value="Punjab">Punjab</option>
        <option <?php if(isset($_POST['state']) && $_POST['state']=='Rajasthan') echo"selected='selected'"; ?> value="Rajasthan">Rajasthan</option>
        </select>

      </div>
    </div>

    <br>

    <div class="row">
      <div class="col">
      &nbsp; <i class="fas fa-city"></i> &nbsp;
        <label><label class="indicate">*</label>City</label>
        <select class="form-control" name="city" id="city">
        <option value="Select a city">--Select a city--</option>
        <option <?php if(isset($_POST['city']) && $_POST['city']=='Ahmedabad') echo"selected='selected'"; ?> value="Ahmedabad">Ahmedabad</option>
        <option <?php if(isset($_POST['city']) && $_POST['city']=='Baroda') echo"selected='selected'"; ?> value="Baroda">Baroda</option>
        <option <?php if(isset($_POST['city']) && $_POST['city']=='Gandhinagar') echo"selected='selected'"; ?> value="Gandhinagar">Gandhinagar</option>
        </select>
      </div>
      <div class="col">
        &nbsp; <i class="fas fa-map-pin"></i> &nbsp;
        <label><label class="indicate">*</label>Zip</label>
        <input type="text" class="form-control" id="zip" name="zip" placeholder="Enter your pincode "
        value="<?php if(isset($_POST['zip'])) echo $_POST['zip']; ?>" >
      </div>  
    </div> 


     <br>
   
      <div class="submit">
        <input type="submit" value="Create Account" name="submit" id="submit" class="button">
      </div> 

    </form> 
    </div>


 <!-- JS library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
  </body>
</html>

