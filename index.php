<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rotating social icon</title>
<style>
#images
{
	
	width:90%;
	margin-left:auto;
	margin-right:auto;
	
	
}
.imgs:hover
{
	animation: rotate 2s linear infinite;
	-webkit-animation: rotate 2s linear infinite;
	-moz-animation: rotate 2s linear infinite;
	opacity:1;
   

}
.imgs
{
	padding:40px;
	opacity:0.5;

}
@keyframes rotate {
	0%{
		transform:rotate(0deg);
}
100% {
	transform:rotate(360deg);
}
}
@-webkit-keyframes rotate {
	0%{
			-webkit-transform:rotate(0deg);
}
100% {
	-webkit-transform:rotate(360deg);
}
}
@-moz-keyframes rotate {
	0%{
	-moz-transform:rotate(0deg);
}
100% {
	-moz-transform:rotate(360deg);
}
}
</style>
<script type="text/javascript" src="sound-mouseover.js"></script>
</head>

<body>
<div id= "images">
<a href="#" onmouseover="playclip();"><img src="f.jpg" class="imgs" /></a>
<a href="#" onmouseover="playclip();"><img src="g.jpg" class="imgs" /></a>
<a href="#" onmouseover="playclip();"><img src="t.jpg"  class="imgs" /></a>
</div>
<br /><br />
<audio>
<source src="click.mp3"></source>
<source src="click.ogg"></source>
</audio>
<a href="transform.php">click_here to popup</a>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="hover.php">click_here to hoversound</a>
</body>
</html>