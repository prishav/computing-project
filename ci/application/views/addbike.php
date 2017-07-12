<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Bike</title>
<link href="<?php echo base_url('assets/bajaj.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bikelist.css')?>" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:51px;float:left;clear:left;display:block;z-index:4;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text1" style="position:absolute;left:359px;top:1px;width:250px;height:32px;z-index:0;">
<span style="color:#000000;font-family:Arial;font-size:27px;"><strong>Admin Panel</strong></span></div>
</div>
</div>
<div id="Layer2" style="position:absolute;text-align:left;left:0px;top:51px;width:189px;height:802px;z-index:5;">
<div id="wb_Image1" style="position:absolute;left:13px;top:10px;width:82px;height:94px;z-index:1;">
<img src="<?php echo base_url('assets/images/Bajaj Logo.jpg')?>" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:13px;top:116px;width:176px;height:336px;z-index:2;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('Welcome/admindashboard')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('Welcome/addbike')?>" target="_self">ADDBIKE</a>
</li>
<li><a href="<?php echo site_url('customer/updateBikedetails')?>" target="_self">EDITBIKE</a>
</li>
<li><a href="<?php echo site_url('customer/editProfile')?>" target="_self">EDITPROFILE</a>
</li>
<li><a href="<?php echo site_url('customer/viewCustomer')?>" target="_self">VIEWCUSTOMER</a>
</li>
<li><a href="<?php echo site_url('book/viewDetails')?>" target="_self">BOOKINGS</a>
</li>
<li><a href="<?php echo site_url('customer/logout')?>" target="_self">LOGOUT</a>
</li>
</ul>
</div>
</div>
<div id="wb_Text3" style="position:absolute;left:348px;top:61px;width:274px;height:37px;z-index:6;">
<span style="color:#0000FF;font-family:Arial;font-size:32px;"><strong>Add Bike</strong></span></div>


<form method="post" action="<?php echo base_url();?>customer/getBike" enctype="multipart/form-data" />

<h1 font-size =25>Add Bike</h1>

<center>
<h3>
Bike name:<br> <input type="text" name="name" required><br>
cylinder capacity:<br>
<input type="text" name="cc" required><br>
color:<br>
<input type="text" name="color" required> <br>
price:<br>
<input type="text" name="price" required> <br>
image:<br>
<input type="file" name="userfile" required>
<input type="submit" name="submit" value="add"><br>
</h3>
</center>
</form>


<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:907px;width:100%;height:100px;z-index:-1;">
<div id="PageFooter1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text2" style="position:absolute;left:373px;top:28px;width:261px;height:18px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:16px;">© 2017 Bajaj Bike Showroom™</span></div>
</div>
</div>
</body>
</html>

