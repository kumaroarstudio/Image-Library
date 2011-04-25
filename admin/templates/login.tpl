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

#login {
	margin: 8em auto;
	width: 265px;
	border: 1px solid #0063DC;
	color: #0063DC;
	padding: 10px;
}

	#login p {
		background-image: url("../images/dotted.gif");
		background-position: left bottom;
		background-repeat: repeat-x;
		padding-bottom: 10px;
		margin-bottom: 10px;
	}

	.input {
		border: 1px solid #DDDDDD;
		font-size: 16px;
		padding: 5px;
		width: 250px;
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
	
	.right {
		text-align: right;
	}
</style>
</head>
<body>
<div id="login">
<form action="" method="post">
	<p>Log in:</p>
	<p>USERNAME<input type="text" maxlength="100" class="input"
		name="username" /><br class="clearfix" />
	PASSWORD<input type="password" maxlength="100" class="input"
		name="password" /></p>
	<div class="right"><input type="submit" class="btn" value="Log in" /></div>
</form>
</div>
</body>
</html>