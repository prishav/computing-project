<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bill</title>
<link href="<?php echo base_url('assets/bajaj.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/bill.css')?>" rel="stylesheet">
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
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:940px;float:left;clear:left;display:block;z-index:4;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:12px;top:10px;width:84px;height:96px;z-index:0;">
<a href="<?php echo base_url('redirect/customer')?>"><img src="<?php echo base_url('assets/images/Bajaj Logo.jpg')?>" id="Image1" alt=""></a></div>
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
	<h1> Bajaj Bike Showroom</h1>
			
		<form action="<?php echo base_url();?>book/viewBill"  method="post">
		<table border="1" style="position:absolute;left:92px;top:160px;width:802px;height:312px;z-index:2;" id="Table1">
			<tr style="color:white;font-family:Arial;font-size:13px;line-height:16px;">>
				<td>Bike Name</td>
				<td>Price</td>
				
		
			</tr>
			<?php $total=0; ?>
				<?php 
						foreach($arr as $data){
				?>
			<tr style="color:white;font-family:Arial;font-size:13px;line-height:16px;">
				<td><?php echo $data['bike_name']?></td>
				<td><?php echo $data['price'] ?></td>
				<?php $total+=$data['price'];?>
			</tr>
			
				
			<?php 
						}
			?>
			<tr style="color:white;font-family:Arial;font-size:13px;line-height:16px;">>
				<td> Total Amount</td>
				<td><?php echo $total;?></td>

			</tr>
		

			
		</table>
	
		</form>
</div>

<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:938px;width:100%;height:100px;z-index:-1;">
<div id="PageFooter1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text2" style="position:absolute;left:373px;top:28px;width:261px;height:18px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:16px;">© 2017 Bajaj Bike Showroom™</span></div>
</div>
</div>
</body>
</html>