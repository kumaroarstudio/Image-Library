<?php /*%%SmartyHeaderCode:153574dab8604ab3660-26587353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1302827527,
      2 => 'file',
    ),
    '5dfc6513f023ca8274994bf69a1ee83a8fc35dca' => 
    array (
      0 => 'static_pages/header.html',
      1 => 1302838111,
      2 => 'file',
    ),
    'da007bb699722d98c98c119e002c79f87dc89b1f' => 
    array (
      0 => 'static_pages/menu.html',
      1 => 1302750698,
      2 => 'file',
    ),
    'c844c4e8b4abc20e7942b62d753001763d20a7ac' => 
    array (
      0 => 'static_pages/tags.html',
      1 => 1302750698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153574dab8604ab3660-26587353',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INDEX</title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: "Microsoft YaHei",Tahoma, Arial; 
	border-top: #0063DC 10px solid;
}

.clearfix{
	clear:both;
}

#wapper {
	padding: 20px;
	margin: 10px auto 0;
	width: 960px;
}

#header {
	height: 30px;
}
	.input {
	    border: 1px solid #DDDDDD;
	    font-size: 16px;
	    padding: 5px;
	    width: 350px;
	}
	.input:focus {
	    border: 1px solid #0063DC;
	}
	.btn {
	    background-color: #FEFEFE;
	    border: 1px solid #DDDDDD;
	    color: #0063DC;
	    cursor: pointer;
	    display: inline-block;
	    font-size: 16px;
		padding: 3px;
	    font-weight: normal;
	    line-height: 24px;
	    margin: 0;
	    text-decoration: none;
		width: 100px;
	}
	.btn:focus {
	    border: 1px solid #0063DC;
	}
	
#nav {
	border: 1px solid #DDDDDD;
	padding: 15px;
	margin: 15px 0 15px 0;
}
    #nav a {
    	background: none repeat scroll 0 0 #0063DC;
		border: 1px solid #0063DC;
    	color: #FFFFFF;
    	display: block;
    	float: left;
    	font-size: 14px;
    	padding: 3px;
   	 	text-decoration: none;
		margin-right:5px;
	}
	#nav a:hover {
		background: none repeat scroll 0 0 #FFFFFF;
		color: #0063DC;
	}
	.menu {
    	background-image: url("images/dotted.gif");
    	background-position: left bottom;
    	background-repeat: repeat-x;
    	padding-bottom: 10px;
		margin-bottom:10px;
    	text-align: center;
	}
	.item {
		display:none;
	}
	.item_child {
		display:none;
	}

#TagCloud {
	border: 1px solid #DDDDDD;
	padding: 15px;
}
	#TagCloud a {
	    text-decoration: none;
		color: #0063DC;
	}
	#TagCloud a:hover {
	    background: #0063DC;
		color: #FFF;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){});
	function slide(num){
		$(".item").hide();
		$(".item_child").hide();
		$("#item"+num).slideDown();
	}
	function slide_child(num){
		$(".item_child").hide();
		$("#item_child"+num).slideDown();
	}
</script>
</head>

<body>
<div id="wapper">
	<div id="header">
		<form action="page.php" method="post">
	<input type="text" maxlength="100" class="input" name="keywords"/> 
	<input type="submit" class="btn" value="Search" />
	<a href="admin/login.php" style="float:right;color: #0063DC;font-size:10px;">Login</a>
</form>	</div>
	<div id="nav">
		<div class="menu">
	<a class="mouse">&nbsp;1&nbsp;</a>
		<a href="page.php?cat=Digital Art">Digital Art</a>
	<a href="#" onclick="slide('1')" style="margin-left:1px;">+</a>
		<a href="page.php?cat=Drawings">Drawings</a>
	<a href="#" onclick="slide('2')" style="margin-left:1px;">+</a>
		<a href="page.php?cat=Miscellaneous">Miscellaneous</a>
	<a href="#" onclick="slide('3')" style="margin-left:1px;">+</a>
		<a href="page.php?cat=Mixed Media">Mixed Media</a>
	<a href="#" onclick="slide('4')" style="margin-left:1px;">+</a>
		<a href="page.php?cat=Photomanipulation">Photomanipulation</a>
	<a href="#" onclick="slide('7')" style="margin-left:1px;">+</a>
		<a href="page.php?cat=Pixel Art">Pixel Art</a>
	<a href="#" onclick="slide('8')" style="margin-left:1px;">+</a>
		<div class="clearfix"></div>
</div>
<div class="menu">
<a class="mouse">&nbsp;2&nbsp;</a>
<div id="item1" class="item">
					<a href="page.php?cat=Bookmarks">Bookmarks</a>
		<a href="#" onclick="slide_child('9')" style="margin-left:1px;">+</a>
							<a href="page.php?cat=Mobile">Mobile</a>
		<a href="#" onclick="slide_child('10')" style="margin-left:1px;">+</a>
						</div>
<div id="item2" class="item">
											<a href="page.php?cat=people">people</a>
		<a href="#" onclick="slide_child('11')" style="margin-left:1px;">+</a>
			</div>
<div id="item3" class="item">
										</div>
<div id="item4" class="item">
										</div>
<div id="item7" class="item">
										</div>
<div id="item8" class="item">
										</div>
<div class="clearfix"></div>
</div>

<a class="mouse">&nbsp;3&nbsp;</a>
<div id="item_child9" class="item_child">
					<a href="page.php?cat=douban">douban</a>
			</div>
<div id="item_child10" class="item_child">
				</div>
<div id="item_child11" class="item_child">
				</div>
<div class="clearfix"></div>	</div>
	<div id="TagCloud">
		<a href="page.php?tag=Colver" style="font-size: 18px;">Colver</a>
		<a href="page.php?tag=art" style="font-size: 12px;">art</a>
		<a href="page.php?tag=beach" style="font-size: 14px;">beach</a>
		<a href="page.php?tag=city" style="font-size: 30px;">city</a>
		<a href="page.php?tag=blue" style="font-size: 18px;">blue</a>
		<a href="page.php?tag=australia" style="font-size: 28px;">australia</a>
		<a href="page.php?tag=flower" style="font-size: 21px;">flower</a>
		<a href="page.php?tag=food" style="font-size: 15px;">food</a>
		<a href="page.php?tag=canada" style="font-size: 17px;">canada</a>
		<a href="page.php?tag=china" style="font-size: 19px;">china</a>
		<a href="page.php?tag=festival" style="font-size: 18px;">festival</a>
		<a href="page.php?tag=friends" style="font-size: 20px;">friends</a>
		<a href="page.php?tag=london" style="font-size: 28px;">london</a>
		<a href="page.php?tag=newyork" style="font-size: 20px;">newyork</a>
		<a href="page.php?tag=wedding" style="font-size: 38px;">wedding</a>
		<a href="page.php?tag=water" style="font-size: 25px;">water</a>
		<a href="page.php?tag=food" style="font-size: 15px;">food</a>
		<a href="page.php?tag=food" style="font-size: 15px;">food</a>
	</div></div>
</body>
</html><?php } ?>