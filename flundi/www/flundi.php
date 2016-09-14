<?php
$filename = "./admin/flundi.txt";
$conteudo = "";

if (file_exists($filename)){
	$fd = fopen ($filename, "r");
	$conteudo = fread ($fd, filesize ($filename));
	fclose ($fd);
}
?>		
<html>
<head>
<meta http-equiv="Page-Enter" content="blendtrans(duration=1.0)">
<style type="text/css">
<!--
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #0000AA;
	background-color: transparent;
	scrollbar-Track-Color: white; 
	scrollbar-Face-Color: #0099CF;
	scrollbar-Arrow-Color: #0000FF;
	scrollbar-3dLight-Color: white;
	scrollbar-Highlight-Color: white;
	scrollbar-Shadow-Color: white;
	scrollbar-DarkShadow-Color: white;
}
a:link {
	font-weight: bold;
	text-decoration: none;
}
a:hover{
	text-decoration: underline;
}
a:visited{
	text-decoration: none;
}
-->
</style>
</head>
<body>
<?php echo($conteudo) ?>
</body>
</html>