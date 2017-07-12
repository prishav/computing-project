<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bajaj Bike Showroom</title>
<link href="<?php echo base_url('assets/bajaj.css')?>" rel="stylesheet">
<link href="<?php echo base_url('assets/index.css')?>" rel="stylesheet">
<script src="jquery-1.12.4.min.js"></script>
<script src="wb.parallax.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wb.slideshow.min.js"></script>
<script>
$(document).ready(function()
{
   $('#Layer1').parallax();
   $("#SlideShow1").slideshow(
   {
      interval: 4000,
      type: 'sequence',
      effect: 'zoominout',
      direction: '',
      pagination: false,
      fullscreen: 5,
      effectlength: 2000
   });
});
</script>
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:600px;float:left;clear:left;display:block;z-index:5;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Image1" style="position:absolute;left:19px;top:14px;width:80px;height:93px;z-index:0;">
<a href="<?php echo base_url('redirect/index')?>"><img src="<?php echo base_url('assets/images/Bajaj Logo.jpg')?>" id="Image1" alt=""></a></div>
<div id="wb_CssMenu1" style="position:absolute;left:334px;top:33px;width:646px;height:54px;text-align:right;z-index:1;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('redirect/index')?>" target="_self">HOME</a>
</li>
<li><a href="#" target="_self">ABOUT</a>
</li>
<li><a href="#" target="_self">SERVICES</a>
</li>
<li><a href="<?php echo base_url('redirect/login')?>" target="_self">LOGIN</a>
</li>
</ul>
<ul>
<li><a href="<?php echo base_url();?>assets/user_guide.pdf" target="_self"><img src="<?php echo base_url('assets/images/help.png')?>"></a>
</li>
</ul>
</div>
</div>
</div>
<div id="SlideShow1" style="position:absolute;left:10px;top:914px;width:1271px;height:672px;z-index:6;">
<img class="image" src="<?php echo base_url('assets/images/220f.JPG')?>" alt="" title="">
<img class="image" src="<?php echo base_url('assets/images/150a.jpg')?>" style="display:none;" alt="" title="">
<img class="image" src="<?php echo base_url('assets/images/as2.jpg')?>" style="display:none;" alt="" title="">
<img class="image" src="<?php echo base_url('assets/images/rsred.jpg')?>" style="display:none;" alt="" title="">
<img class="image" src="<?php echo base_url('assets/images/dominar.jpg')?>" style="display:none;" alt="" title="">
<img class="image" src="<?php echo base_url('assets/images/ns.jpg')?>" style="display:none;" alt="" title="">
</div>
<div id="Layer2" style="position:relative;text-align:center;width:100%;height:314px;float:left;clear:left;display:block;z-index:7;">
<div id="Layer2_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text1" style="position:absolute;left:125px;top:10px;width:794px;height:286px;text-align:center;z-index:2;">
<span style="color:#FFFFFF;font-family:Arial;font-size:85px;"><strong>welcome</strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:19px;"><br></span><span style="color:#FFFFFF;font-family:Arial;font-size:24px;">We stand for what is right. And we share our resources. We do this while respecting the planet and our company. We believe in international trade, friendship and human dignity. Because we believe to succeed honesty, trust and sincerity count. Founded in 1989, with the commitment of personal funds, we are a privately held company with proper certification. The company has a reputation for providing outstanding service and support.</span></div>
</div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:center;left:0px;top:1594px;width:100%;height:208px;z-index:-1;">
<div id="PageFooter1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Text2" style="position:absolute;left:373px;top:136px;width:261px;height:18px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:16px;">© 2017 Bajaj Bike ShowroomT</span></div>
<div id="wb_CssMenu2" style="position:absolute;left:10px;top:-8px;width:270px;height:200px;z-index:4;">
<ul>
<li class="firstmain"><a href="<?php echo base_url('redirect/index')?>" target="_self">HOME</a>
</li>
<li><a href="#" target="_self">ABOUT</a>
</li>
<li><a href="#" target="_self">SERVICES</a>
</li>
<li><a href="<?php echo base_url('redirect/login')?>" target="_self">LOGIN</a>
</li>


</ul>
</div>
</div>
</div>
</body>
</html>