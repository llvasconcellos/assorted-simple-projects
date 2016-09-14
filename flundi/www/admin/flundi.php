<?php
$filename = "flundi.txt";
$conteudo = "";

if (file_exists($filename)){
	$fd = fopen ($filename, "r");
	$conteudo = fread ($fd, filesize ($filename));
	fclose ($fd);
}
?>
<html>
<head>
<title>DJS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.textfield {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	background-color: #F0F9FF;
	width: 100%;
	border: none;
}
.label {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
	text-align: right;
	vertical-align: top;
	border: 1px solid #FFFFFF;
	color: #0161A7;
	width: 20%;
}
.cell {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
	text-align: right;
	vertical-align: top;
	border: 1px solid #FFFFFF;
	color: #0161A7;
}
.botao {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	border: 1px solid #FFFFFF;
	background-color: transparent;
	color: #0161A7;
}
.tabela {
	background-color: #B9E1FF;
	border: 1px solid #FFFFFF;
	width: 90%;
}
.textarea {
font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	background-color: #F0F9FF;
	width: 100%;
	border: none;
scrollbar-3dlight-color:#;
scrollbar-arrow-color:#FFFFFF;
scrollbar-base-color:#;
scrollbar-track-color:#B9E1FF;
scrollbar-face-color:#B9E1FF;
scrollbar-shadow-color:#FFFFFF;
scrollbar-highlight-color:#;
scrollbar-darkshadow-color:#FFFFFF;
}
-->
</style>
</head>
<body>
<table align="center" class="tabela" cols="2">
  <form name="form1" method="post" action="salvaflundi.php">
    <tr> 
      <td colspan="2" style="border: 1px solid #FFFFFF; text-align: center;"><b>FLUNDI?</b></td>
    </tr>
    <tr> 
      <td class="label">Conteúdo<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="cursor: pointer" onclick="javascript: window.open('http://www.detetivez.hpg.ig.com.br/tutoriais/html/fotehtml.htm')">Formatação de texto</div><div style="cursor: pointer" onclick="javascript: window.open('http://www.detetivez.hpg.ig.com.br/tutoriais/html/espehtml.htm')">Caracteres Especiais</div></td>
      <td class="cell"><textarea name="conteudo"  class="textarea" rows="26"><?=$conteudo?></textarea></td>
    </tr>
	 <tr> 
      <td></td>
      <td align="right"><input type="submit" value="Salvar" class="botao"></td>
    </tr>
  </form>
</table>
</body>
</html>
