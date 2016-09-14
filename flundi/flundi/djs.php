<?php
$link = mysql_connect("localhost", "root", "Velox666") or die("Erro de conexão com o banco: " . mysql_error());
mysql_select_db ("flundi");
$result = mysql_query("SELECT * FROM djs") or die("Erro ao acessar registros no Banco de dados: " . mysql_error());	
$eof = mysql_num_rows($result);
?>		
<html>
<head>
<meta http-equiv="Page-Enter" content="blendtrans(duration=1.0)">
<style type="text/css">
<!--
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #990000;
	background-color: transparent;
	scrollbar-Track-Color: white; 
	 scrollbar-Face-Color: #FFFFA0;
	 scrollbar-Arrow-Color: #FFAA00;
	 scrollbar-3dLight-Color: white;
	 scrollbar-Highlight-Color: white;
	 scrollbar-Shadow-Color: white;
	 scrollbar-DarkShadow-Color: white;

}
.nome {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #000000;
	font-weight: bold;
}
.txt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #777700;
}
a {
	font-size: 12px;
	text-decoration: none;
	font-weight: bold;
	color: #555555;
}
a:hover{
	font-size: 12px;
	text-decoration: underline;
	color: #000000;
}
a:visited{
	font-size: 12px;
	text-decoration: none;
	color: #555555;
}
-->
</style>
</head>
<body>
<table>
<tr>
<td>
<?php for($i = 0; $i <= $eof; $i++){
		$dj = mysql_fetch_row($result);
		echo("<table>");
		echo("<tr><td class='nome' width=100%>" . $dj[1] . "</td></tr>");
		echo("<tr><td class='txt' width=100%>" . $dj[2] . "</td></tr>");
		echo("<tr><td class='txt' width=100%>" . $dj[3] . "</td></tr>");
		echo("<tr><td class='txt' width=100%>" . $dj[4] . "</td></tr>");
		echo("<tr><td class='txt' width=100%><a href='#' onClick=\"javascript: window.open('http://" . $dj[5] . "');\">" . $dj[5] . "</a></td></tr>");
		echo("<tr><td>&nbsp;</td></tr></table>");
		} 
?>
</td>		
</tr>
</table>
</body>
</html>
<?php mysql_close($link); ?>