<?php
$metodo = $_GET["metodo"];

if($metodo == "update"){
	$link = mysql_connect("localhost", "root", "Velox666") or die("Erro de conexão com o banco: " . mysql_error());
	mysql_select_db ("flundi");
	$id = $_GET["id"];
	$query = "SELECT * FROM festas where cd=" . $id;
	$result = mysql_query($query) or die("Erro ao acessar registros no Banco de dados: " . mysql_error());
	$festa = mysql_fetch_row($result);
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
<?php if($metodo == "update"){ ?> 
	<script language="JavaScript" type="text/javascript">
		function apagar(){
			self.location = "del.php?oque=festas&id=<?=$id?>";
		}
	</script>
<? } ?>
</head>

<body>
  
<table align="center" class="tabela" cols="2">
  <form name="form1" method="post" action="salvafesta.php">
    <tr> 
      <td colspan="2" style="border: 1px solid #FFFFFF; text-align: center;"><b>Festas</b></td>
    </tr>
    <tr> 
      <td class="label">Nome</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="nome" class="textfield">
		<?php } else {?>
			<input type="text" name="nome" class="textfield" value="<?=$festa[1]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Data</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="data" class="textfield">
		<?php } else {?>
			<input type="text" name="data" class="textfield" value="<?=$festa[2]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">LineUp</td>
       <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<textarea name="lineup"  class="textarea" rows="10"></textarea>
		<?php } else {?>
			<textarea name="lineup"  class="textarea" rows="10"><?=$festa[3]?></textarea>
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Local</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<textarea name="local"  class="textarea" rows="5"></textarea>
		<?php } else {?>
			<textarea name="local"  class="textarea" rows="5"><?=$festa[4]?></textarea>
		<?php } ?>
		</td>
    </tr>
	<tr> 
      <td class="label">Ingressos</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="ingressos" class="textfield">
		<?php } else {?>
			<input type="text" name="ingressos" class="textfield" value="<?=$festa[5]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Links</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="links" class="textfield">
		<?php } else {?>
			<input type="text" name="links" class="textfield" value="<?=$festa[6]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td></td>
      <td align="right"><input type="button" value="Apagar" class="botao" onClick="javascript: apagar();"><input type="submit" value="Salvar" class="botao"></td>
    </tr>
    <?php if ($metodo == "add") {?>
    <input type="hidden" name="metodo" value="add">
    <?php } else {?>
    <input type="hidden" name="metodo" value="update">
	<input type="hidden" name="id" value="<?=$id?>">
    <?php } ?>
  </form>
</table>
</body>
</html>
