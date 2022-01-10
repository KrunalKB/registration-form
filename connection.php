<?php

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
			alert("Email already exist");
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
    echo "<b> Your data has been submitted.. </b>";
    echo "<a href='index.php' >Click here to get back to page</a>";
	
	
}
else{
	?>
		<script>
			alert("No Connection");
		</script>
	<?php
	echo "<b> Something went wrong... </b>";
    echo "<a href='index.php' >Click here to get back to page</a>";
        
}

?>