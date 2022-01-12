<?php require('index.php'); ?>
<?php

 if(isset($_POST["submit"]))
{
	//server side validation

 	if ($_POST["fname"] == "")
 	{
 		echo "Please enter first name";
 	}
 	elseif ($_POST["lname"] == "")
 	{
 		echo "Please enter last name";
 	}
 	elseif ($_POST["email"] == "")
 	{
 		echo "Please enter email";
 	}
	elseif ($_POST["password"] == "")
 	{
 		echo "Please enter password";
 	}
	elseif ($_POST["gender"] == "")
 	{
 		echo "Please select gender";
 	}
	elseif ($_POST["country"] == "")
 	{
 		echo "Please select country";
 	}
	elseif ($_POST["state"] == "")
 	{
 		echo "Please select state";
 	}
	elseif ($_POST["city"] == "")
 	{
 		echo "Please select city";
 	}
	elseif ($_POST["address"] == "")
 	{
 		echo "Please enter address";
 	}
	elseif ($_POST["zip"] == "")
 	{
 		echo "Please enter zip";
 	}
	else
	{

	 	$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address= $_POST['address'];
		$gender= $_POST['gender'];
		$country= $_POST['country'];
		$state= $_POST['state'];
		$city= $_POST['city'];
		$zip= $_POST['zip'];

		$address1=str_replace("","",$address);
		// Encrypt password
		$hash = password_hash($password , PASSWORD_DEFAULT);
		$q = "select * from sign where firstname = '$fname' && lastname ='$lname' && email = '$email'  && password = '$password'
			&& address='$address' && gender='$gender' && country='$country' && state='$state' && city='$city' && zip='$zip' ";

		$result = mysqli_query($con,$q);
		$num = mysqli_num_rows($result);

		// validate unique email
		$emailquery="select * from sign where email='$email' ";
		$equery=mysqli_query($con,$emailquery);
		$emailcount=mysqli_num_rows($equery);

		if($emailcount>0){
		?>
				<script>
					alert("Email Already Taken.");
				</script>
			<?php
		}
		else{
			$qy = " insert into sign(firstname,lastname,email,password,address,gender,country,state,city,zip,register_date) values('$fname' ,'$lname','$email'  , '$hash' , '$address', '$gender' , '$country', '$state','$city' , '$zip' , current_timestamp()) ";
			mysqli_query($con,$qy);
		}


		if($con && !$emailcount>0){

			?>
				<script>
					alert("Registration Successful");
				</script>
			<?php		
		}
		else{
			?>
				<script>
					alert("No Connection");
				</script>
			<?php        
		}
	}
}


?>