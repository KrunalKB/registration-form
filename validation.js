//function for validate input fields

function validation(){
	var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var address = document.getElementById("address").value;
    var country=document.getElementById("country").value;
    var state=document.getElementById("state").value;
    var city=document.getElementById("city").value;
	var zip = document.getElementById("zip").value;
	var error_message = document.getElementById("error_message");
	var text;
	var regxemail=/^[a-zA-Z0-9_\.\-]+\@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,4}$/;

	error_message.style.padding="10px";

	//condition for validation:
	if(fname.length <3){
		text="<div class='alert-danger'>Please enter valid first name </div>";
		error_message.innerHTML= text;  
		return false;
	}

    if(lname.length <3){
		text="<div class='alert-danger'>Please enter valid last name </div>";
		error_message.innerHTML= text;
		return false;
	}   

    if(email == "" || email == null){
		text="<div class='alert-danger'>Please enter valid email </div>";
		error_message.innerHTML= text;
		return false;
	}

	if(regxemail.test(email) == 0){
		text="<div class='alert-danger'>Should include '@' and '.' in Email or Not contain whitespace</div>";
		error_message.innerHTML= text;
		return false;
	}

    if(password.length<6){
        text="<div class='alert-danger'>Please Enter Minimum 6 characters in password </div>";
        error_message.innerHTML=text;
        return false;
    }

	if(address == "" || address == null){
		text="<div class='alert-danger'>Please enter valid address</div>";
		error_message.innerHTML= text;
		return false;
	}

	 if(country=="Select a country"){
        text="<div class='alert-danger'>Please select a country </div>";
		error_message.innerHTML= text;
		return false;

    }

    if(state=="Select a state"){
        text="<div class='alert-danger'>Please select a state </div>";
		error_message.innerHTML= text;
		return false;

    }

    if(city=="Select a city"){
        text="<div class='alert-danger'>Please select a city </div>";
		error_message.innerHTML= text;
		return false;

    }

    if(zip == "" || zip == null){
		text="<div class='alert-danger'>Please enter 6 digit pincode </div>";
		error_message.innerHTML= text;
		return false;
	}
		return true;
	
}

//function for show password
function myFunction(){
	var a=document.getElementById("password");
	if(a.type == "password"){
		a.type = "text";
	}
	else{
		a.type="password";
	}
}
