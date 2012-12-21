



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Gallery</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="highslide-full.packed.js"></script>
<link rel="stylesheet" type="text/css" href="highslide.css" />

<script type="text/javascript">

var wedPics = new Array();
var wedThumbs = new Array();
var webSquares = new Array();
for( i=1; i<=215; i++){
	 wedPics[i] = 'http://offpools.com/weddingPictures/halfSize/img ('+i+')Half.jpg';
}

for(i =1;i<=215;i++)
{				
	wedThumbs[i] = 'http://www.offpools.com/weddingPictures/thumbs/img ('+i+')_Small.jpg';
}

for(i=1;i<=215;i++)
{
	webSquares[i] = 'https://linuxsandbox.coleman.edu/~pm60360/PictureProject/Pictures/square/img ('+i+')Square.jpg';
}

hs.graphicsDir = 'graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
hs.showCredits = false;

// Add the controlbar
hs.addSlideshow({
	interval: 5000,
	repeat: false,
	useControls: true,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: .75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});

</script>
</head>
<body>
<?php
$logfile= '/ips.html';
$IP = $_SERVER['REMOTE_ADDR'];
$logdetails=  date("F j, Y, g:i a") . ': ' . '<a href=http://dnsstuff.com/tools/city.ch?ip='.$_SERVER['REMOTE_ADDR'].'>'.$_SERVER['REMOTE_ADDR'].'</a>';
$fp = fopen($logfile, "a"); 
fwrite($fp, $logdetails);
fwrite($fp, "<br>");
fclose($fp); 
?> 
<div class="highslide-gallery">
</div>
</body>

<script type="text/javascript">
for(i = 1;i<=215;i++)
{
var wedImg = new Image();
wedImg.src = wedPics[i];
$('.highslide-gallery').append('<a href="' + wedImg.src + '" class="highslide"onclick="return hs.expand(this)">');
}

$(".highslide").each(function(i, elm) {
var thumbs = new Image();
thumbs.src = webSquares[i+1];
   // Prepend a img to each element
   $(elm).prepend('<img src="'+thumbs.src+'" title="Click to Enlarge"/></a>');

});

</script>

</html>