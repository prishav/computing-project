<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EDIT PROFILE</title>
<link href="<?php echo base_url('assets/bajaj.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/profileEdit.css')?>" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer2').parallax();
});
</script>
</head>
<body>
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:940px;float:left;clear:left;display:block;z-index:22;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:12px;top:10px;width:84px;height:96px;z-index:0;">
<a href="<?php echo base_url('customer/bikeDetails')?>"><img src="<?php echo base_url('assets/images/Bajaj Logo.jpg')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:89px;top:28px;width:792px;height:60px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('customer/bikeDetails')?>" target="_self">HOME</a>
</li>
<li><a href="<?php echo site_url('book/viewBill')?>" target="_self">BILL</a>
</li>
<li><a href="<?php echo site_url('customer/editProfile')?>"" target="_self">PROFILE</a>
</li>
<li><a href="<?php echo base_url('customer/logout')?>" target="_self">LOGOUT</a>
</li>
</ul>
</div>
</div>
</div>
<div id="wb_signupform" style="position:absolute;left:276px;top:203px;width:417px;height:631px;z-index:23;">

<?php
foreach ($profile as $row){
?>
	<form name="form3" method="post" action= "<?php echo base_url (); ?>customer/updateCustomer/" id="signupform">
	<h1 font-size =25>Edit Registration Form</h1><br/>

	<center>
	<h3>
	<input type="hidden" name="id" value="<?php echo $row->id;?>">
	
	<label for="" id="Label3" style="position:absolute;left:4px;top:35px;width:397px;height:16px;line-height:16px;z-index:3;">First name:</label> 
	<input type="text" name="fname" value="<?php echo $row->fname;?>" style="position:absolute;left:7px;top:59px;width:393px;height:18px;line-height:18px;z-index:4;">
	<label for="" id="Label8" style="position:absolute;left:12px;top:87px;width:380px;height:23px;line-height:23px;z-index:10;">Last Name:</label> 
	<input type="text" name="lname" value="<?php echo $row->lname;?>" style="position:absolute;left:5px;top:118px;width:393px;height:21px;line-height:21px;z-index:12;"><br>
	<label for="" id="Label9" style="position:absolute;left:1px;top:149px;width:402px;height:24px;line-height:24px;z-index:13;">Address:</label>
	<input type="text" name="address" value="<?php echo $row->address;?>" style="position:absolute;left:6px;top:181px;width:391px;height:18px;line-height:18px;z-index:14;"> <br>
	<label for="" id="Label9" style="position:absolute;left:1px;top:219px;width:402px;height:24px;line-height:24px;z-index:13;">Phone:</label>
	<input type="text" name="phone" value="<?php echo $row->phone;?>" style="position:absolute;left:6px;top:243px;width:391px;height:22px;line-height:22px;z-index:16;"> <br>
	<label for="password" id="Label4" style="position:absolute;left:3px;top:283px;width:397px;height:16px;line-height:16px;z-index:19;">Username: </label>
	<input type="text" name="username" value="<?php echo $row->username;?>" style="position:absolute;left:7px;top:317px;width:393px;height:18px;line-height:18px;z-index:5;"> <br>
	<label for="confirmpassword" id="Label5" style="position:absolute;left:3px;top:353px;width:397px;height:16px;line-height:16px;z-index:20;">Password:</label>
	<input type="password" name="password" value="<?php echo $row->password;?>" style="position:absolute;left:5px;top:385px;width:393px;height:18px;line-height:18px;z-index:6;"> <br>
	<label for="error" id="Label6" style="position:absolute;left:5px;top:427px;width:397px;height:16px;line-height:16px;z-index:11;">Re-Password:</label>
	<input type ="password" name="repassword" onchange="confirmPass();" style="position:absolute;left:4px;top:451px;width:393px;height:18px;line-height:18px;z-index:7;"> <br>
	<span id="error"></span><br>

	<input type="submit" name="submit" value="EDIT" style="position:absolute;left:160px;top:568px;width:97px;height:24px;z-index:17;">
	</h3>
<?php
}
?>
</center>
</h3>
</form>

</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:938px;width:100%;height:100px;z-index:-1;">
<div id="PageFooter1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text2" style="position:absolute;left:373px;top:28px;width:261px;height:18px;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:16px;">© 2017 Bajaj Bike Showroom™</span></div>
</div>
</div>
</body>
</html>