<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/pulgin.js" type="text/javascript"></script>
<script src="js/box.js" type="text/javascript"></script>
<script src="js/jquery.lazyload.js" type="text/javascript"></script>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: "Microsoft YaHei",Tahoma, Arial; 
	border-top: #0063DC 10px solid;
}
.clearfix {
	clear:both;
}
.mouse {
	cursor:default;
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
#sitelocal {
	border: 1px solid #DDDDDD;
	padding: 15px;
}
 	#sitelocal a {
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
	#sitelocal a:hover {
		background: none repeat scroll 0 0 #FFFFFF;
		color: #0063DC;
	}
#option {
	display:none;
}
#nav {
	border: 1px solid #DDDDDD;
	padding: 10px;
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
		margin-left:5px;
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
#sort {
	border: 1px solid #DDDDDD;
}
	#sort img {
		width:202px;
	}
	.box {
		width:202px;
		border: 1px solid #0063DC;
		box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    	float: left;
   	 	margin-bottom: 10px;
    	overflow: hidden;
    	padding: 10px;
    	position: relative;
	 	left: 0px; 
	 	top: 0px;
		margin: 5px;
	}
	.box:hover {
    	box-shadow: 0 0 3px rgba(0, 0, 0, 0.5);
	}
	.box a {
		background: none repeat scroll 0 0 #0063DC;
		border: 1px solid #0063DC;
    	color: #FFFFFF;
    	display: block;
    	float: left;
    	font-size: 10px;
    	padding: 2px;
   	 	text-decoration: none;
		margin-top:5px;
		margin-right:2px;
	}
	.box a:hover {
		background: none repeat scroll 0 0 #FFFFFF;
		color: #0063DC;
	}
	.content {
		background-image: url("images/dotted.gif");
    	background-position: left bottom;
    	background-repeat: repeat-x;
    	padding-bottom: 5px;
	}
	.content a {
		cursor:default;
	}
	.operation {
		background-image: url("images/dotted.gif");
    	background-position: left bottom;
    	background-repeat: repeat-x;
    	padding-bottom: 5px;
	}
	.info .cat {
		background-image: url("images/dotted.gif");
    	background-position: left bottom;
    	background-repeat: repeat-x;
    	padding-bottom: 5px;
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
	function open_Navigation(){
		$("#option").toggle(500);
	}
	window.onload=function(){
		$("img").lazyload({
		     placeholder : "images/grey.gif",       
		     effect      : "fadeIn"
		});
	}
</script>
</head>

<body>
<div id="wapper">
	<div id="header">
		{include file='static_pages/header.html'}
	</div>
	<br class="clearfix"/>
	<div id="sitelocal">
		<a class="mouse">{$keyword} : </a>
		{if $keyword eq "TAG"}
			<a href="page.php?tag={$word}">{$word}</a>
		{else if  $keyword eq "CAT"}
			{foreach from = $catnames item = catname}
			<a href="page.php?cat={$catname}">{$catname}-&gt;</a>
			{/foreach}
		{else}
			<a class="mouse">{$word}</a>
		{/if}
		<a href="#" onclick="open_Navigation()">[OPTION]</a>
	<div class="clearfix"></div>
	</div>
	<div id="option">
		<div id="nav">
		{include file='static_pages/menu.html'}
		</div>
		{include file='static_pages/tags.html'}
	</div>
	<br class="clearfix"/>
	<div id="sort">
		{foreach from = $fileids item = fileid}
			{if $fileid}
				{$page = 'static_pages/box/'|cat:$fileid}
				{* FIXBUG *}
				{* Config the static is here *}
				{include file="$page.html"}
			{else}
				<h1 style="padding:10px; color:#0063DC" >404</h1>
			{/if}
		{/foreach}
		<br class="clearfix"/>
	</div>
</div>
</body>
</html>