<html>
<head><title>registration</title></head>
<style>
body{
background-image:url(dalmation.png);


}

</style>
<script>
function confirmPass() {
    var pass = document.form3.password.value;
    var confPass = document.form3.repassword.value; 
    if(pass === confPass) {
        //alert('Wrong confirm password !');
        document.getElementById('error').innerHTML="valid password";
    }
    else
    {
	//alert();
        document.getElementById('error').innerHTML="invalid password";
    }
}
function frmValidation()
{
var phone = document.form3.contact.value;
var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    
if(phone.match(phoneNum)) {
	                       document.getElementById('message').innerHTML = "";

                return true;
            }
            else {
                       document.getElementById('message').innerHTML = "invalid phone number_format";
 
            }
}

</script>
<body>
<h1 font-size =25>Registration Form</h1>
<form name="form3" method="post" action= "<?php echo base_url (); ?>customer/getData/">

<center>
<h3>
First name: <input type="text" name="fname"><br>
Last Name: <input type="text" name="lname"><br>
Username: <input type="text" name="username"> <br>
Password: <input type="password" name="password"> <br>
Re-Password: <input type ="password" name="repassword" onchange="confirmPass();"> <br>
<span id="error"></span><br>

<input type="submit" name="submit" value="submit">
</h3>
</center>


</form>
</body>
</html>