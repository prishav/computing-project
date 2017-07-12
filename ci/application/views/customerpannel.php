<?php

if(!isset($this->session->userdata['id'])){

redirect('redirect/customer');
}
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Customer Panel</title>
<link href="<?php echo base_url('assets/bajaj.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/signup.css')?>" rel="stylesheet">
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
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:1410px;float:left;clear:left;display:block;z-index:4;">
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
<form action="<?php echo base_url();?>customer/updateDetails"  method="post">
		<table border="1" style="position:absolute;left:92px;top:160px;width:801px;height:311px;z-index:2;">
			<tr style="background-color: #4CAF50;color: white;padding: 15px;text-align: left;">
				<td>bike Name</td>
				<td>cc</td>
				<td>color</td>
				<td>Price</td>
				<td>image</td>
				<td>Action</td>
		
			</tr>
		
				<?php 
					//if ($productlist->num_rows() > 0){
						foreach ($bikelist as $row){
				?>
			<tr style="height: 30px;vertical-align: bottom;padding: 15px;text-align: left;">
				<td><input type="text" name="name" value="<?php echo $row->bike_name?>" style="width:100px;"></td>
				<td><input type="text" name="cc" value="<?php echo $row->cc?>" style="width:80px;"></td>
				<td><input type="text" name="color" value="<?php echo $row->color?>" style="width:120px;"></td>
				<td><input type="text" name="price" value="<?php echo $row->price?>" style="width:80px;"></td>
				<td><img src="<?php echo base_url();?>assets/images/<?php echo $row->image ?>" height="100" width="100"></td>
				<td><?php echo anchor("book/bookBike/{$row->bike_id}",'book')?></td>
				

			</tr>
				
			<?php 
						}
//					}
					
			?>
		</table>
		</form>
</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:1399px;width:100%;height:100px;z-index:-1;">
<div id="PageFooter1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text2" style="position:absolute;left:373px;top:28px;width:261px;height:18px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:16px;">© 2017 Bajaj Bike Showroom™</span></div>
</div>
</div>
</body>
</html>