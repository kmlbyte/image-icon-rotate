<!DOCTYPE html>
<html>
<head>
    <title>Audio Hover</title>
</head>
<body>
	<div id="hoverElement" style="width:200px; height:200px; background:blue;">
		Hover over me
	</div>
	<audio id=audio style="visibility:hidden;">
	   <source src="click.mp3" type='audio/mpeg; codecs="mp3"'>
	   <source src="click.oga" type='audio/ogg; codecs="vorbis"'> <!--In case mp3 is not supported-->
	</audio>
	<script>
	var hoverArea = document.getElementById('hoverElement');
	var audio = document.getElementById('audio');
	hoverArea.onmouseover= function(){
		audio.play();
	}
	hoverArea.onmouseout= function(){
		audio.pause();
	}    
    </script>
</body>    
</html>