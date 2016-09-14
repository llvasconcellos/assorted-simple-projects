<?php
$filename = "./admin/lista.txt";
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
	color: #005500;
	background-color: transparent;
	scrollbar-Track-Color: white; 
	scrollbar-Face-Color: #9FCF6C;
	scrollbar-Arrow-Color: #00FF00;
	scrollbar-3dLight-Color: white;
	scrollbar-Highlight-Color: white;
	scrollbar-Shadow-Color: white;
	scrollbar-DarkShadow-Color: white;
}
.nome {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #663399;
	font-weight: bold;
}
.txt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #990000;
}
a:link {
	font-size: 12px;
	text-decoration: none;
	color: #663399;
}
a:hover{
	font-size: 12px;
	text-decoration: underline;
	color: #000000;
}
a:visited{
	font-size: 12px;
	text-decoration: none;
	color: #FF0000;
}
-->
</style>
</head>
<body>
<?php echo($conteudo) ?>
</body>
</html>