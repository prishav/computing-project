<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<link href="<?php echo base_url('assets/bajaj.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/admin.css')?>" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:51px;float:left;clear:left;display:block;z-index:8;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text1" style="position:absolute;left:359px;top:1px;width:250px;height:32px;z-index:0;">
<span style="color:#000000;font-family:Arial;font-size:27px;"><strong>Admin Panel</strong></span></div>
</div>
</div>
<div id="Layer2" style="position:absolute;text-align:left;left:0px;top:51px;width:189px;height:802px;z-index:9;">
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
<li><a href="<?php echo site_url('customer/editAdminProfile')?>?id=3" target="_self">EDITPROFILE</a>
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
<div id="wb_Heading1" style="position:absolute;left:333px;top:57px;width:773px;height:37px;z-index:10;">
<h1 id="Heading1">Welcome to Admin Dashboard</h1></div>
<div id="Layer3" style="position:relative;text-align:right;width:781px;height:49px;float:right;display:block;z-index:11;">
<div id="Layer3_Container" style="width:781px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
</div>
</div>
<div id="Layer4" style="position:absolute;text-align:right;left:189px;top:100px;width:781px;height:322px;z-index:12;">
<div id="Layer4_Container" style="width:781px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
<div id="wb_Image2" style="position:absolute;left:134px;top:0px;width:361px;height:322px;z-index:3;">

<a href="<?php echo site_url('Welcome/addbike')?>"><img src="<?php echo base_url('assets/images/bikeadd.jpg')?>" id="Image2" alt=""></a></div>
<div id="wb_Text3" style="position:absolute;left:170px;top:14px;width:176px;height:20px;z-index:4;">

<span style="background-color:#87CEFA;color:#000000;font-family:'Bookman Old Style';font-size:17px;"><strong>ADD BIKE</strong></span></div>
</div>
</div>

<div id="wb_Image3" style="position:absolute;left:811px;top:100px;width:363px;height:322px;z-index:13;">
<a href="<?php echo site_url('customer/updateBikedetails')?>"><img src="<?php echo base_url('assets/images/edit bike.jpg')?>" id="Image3" alt=""></a></div>
<div id="Layer5" style="position:absolute;text-align:right;left:203px;top:422px;width:752px;height:431px;z-index:14;">
<div id="Layer5_Container" style="width:752px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
<div id="wb_Image4" style="position:absolute;left:120px;top:24px;width:357px;height:357px;z-index:5;">

<a href="<?php echo site_url('customer/editAdminProfile')?>"><img src="<?php echo base_url('assets/images/edit.jpg')?>" id="Image4" alt=""></a></div>
<div id="wb_Text5" style="position:absolute;left:222px;top:131px;width:133px;height:19px;z-index:6;">

<span style="background-color:#87CEFA;color:#000000;font-family:'Bookman Old Style';font-size:16px;"><strong>EDIT PROFILE</strong></span></div>
</div>
</div>
<div id="wb_Image5" style="position:absolute;left:811px;top:434px;width:369px;height:369px;z-index:15;">

<a href="<?php echo site_url('customer/viewCustomer')?>"><img src="<?php echo base_url('assets/images/view.png')?>" id="Image5" alt=""></a></div>
<div id="wb_Text4" style="position:absolute;left:846px;top:105px;width:137px;height:19px;z-index:16;">

<span style="background-color:#87CEFA;color:#000000;font-family:'Bookman Old Style';font-size:16px;"><strong>EDIT BIKE</strong></span></div>
<div id="wb_Text6" style="position:absolute;left:866px;top:553px;width:191px;height:19px;z-index:17;">

<span style="background-color:#87CEFA;color:#000000;font-family:'Bookman Old Style';font-size:16px;"><strong>VIEW CUSTOMER</strong></span></div>

<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:852px;width:100%;height:100px;z-index:-1;">
<div id="PageFooter1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text2" style="position:absolute;left:373px;top:28px;width:261px;height:18px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:16px;">© 2017 Bajaj Bike Showroom™</span></div>
</div>
</div>
</body>
</html>