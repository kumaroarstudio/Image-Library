<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<style type="text/css">
body {
	margin: 0;
	padding: 0;
	font-family: "Microsoft YaHei", Tahoma, Arial;
	border-top: #0063DC 10px solid;
}
.clearfix {
	clear:both;
}
#edit {
	padding: 20px;
	margin: 10px auto 0;
	width: 960px;
}
	#edit a {
    	background: none repeat scroll 0 0 #0063DC;
		border: 1px solid #0063DC;
    	color: #FFFFFF;
    	display: block;
    	float: left;
    	font-size: 12px;
    	padding: 3px;
   	 	text-decoration: none;
		margin-right:5px;
	}
	#edit a:hover {
		background: none repeat scroll 0 0 #FFFFFF;
		color: #0063DC;
	}
	#edit img {
		width:150px;
		min-height:100px;
	}
	.editimgbox {
		width:152px;
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
	.editinfobox {
		width:300px;
		height:100px;
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
</style>
</head>
<body>
<div id="edit">
{foreach from = $filedirs item = file}
	<div class="editimgbox"><img src="../uploads/photo/{$file}"/></div>
	<div class="editinfobox">
	<a href="">EDIT</a> <a href="">DELETE</a>
	</div>
	<br class="clearfix"/>
{/foreach}
</div>
</body>
</html>