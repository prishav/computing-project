<html>
<head>
<title>Login Form</title>
</head>
<style>
body{
background-image:url(dalmation.png);

}
</style>
<body>

<center>
<h1> Login Form </h1>
<h4>
<form action="<?php echo base_url (); ?>customer/login" method="post">
Username:
<input type="text" name="username" placeholder="username" "/><br><br>
Password: 
<input type="password" name="password" placeholder="password" "/><br><br>
<input type="submit" name="login" value="login"/>
</form>
<a href="<?php echo base_url ('Welcome/signup'); ?>">Click here Register user</a>
</center>
</h4>
</body>
</html>
