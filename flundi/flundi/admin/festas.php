<?php
$link = mysql_connect("localhost", "root", "Velox666") or die("Erro de conexão com o banco: " . mysql_error());
mysql_select_db ("flundi");
$result = mysql_query("SELECT * FROM festas") or die("Erro ao acessar registros no Banco de dados: " . mysql_error());	
$eof = mysql_num_rows($result);
?>
<html>
	<head>
		<title>Festas</title>
		<style type="text/css">
		<!--
		.textfield {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			color: #0158A7;
			background-color: #F0F9FF;
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
		}
		.tabela {
			background-color: #B9E1FF;
			border: 1px solid #FFFFFF;
		}
		.botao {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			border: 1px solid #0161A7;
			background-color: #F0F9FF;
			color: #0161A7;
			width: 100%;
		}
		-->
		</style>
		<script language="JavaScript" type="text/javascript">
			function novo(){
				self.location = 'form_festas.php?metodo=add';
			}
		</script>
	</head>
	<body>
		<table class="tabela" width="100%">
			<tr>
				<td><input type="button" class="botao" onClick="javascript: novo();" value="Novo"></td>
				<td class="label" align="center"><?=$eof?>&nbsp;festas cadastradas.</td>
			</tr>
		</table>
		<br>
		<table class="tabela" width="100%">
			<tr>
				<td class="textfield" align="center"><b>Editar</b></td>
				<td class="textfield" align="center"><b>Nome</b></td>
				<td class="textfield" align="center"><b>Data</b></td>
				<td class="textfield" align="center"><b>Lineup</b></td>
				<td class="textfield" align="center"><b>Local</b></td>
				<td class="textfield" align="center"><b>Ingressos</b></td>
				<td class="textfield" align="center"><b>Links</b></td>
			</tr>
			<?php for($i = 0; $i < $eof; $i++){
					$festa = mysql_fetch_row($result); ?>
				<tr>
					<td class="textfield"><a href="form_festas.php?metodo=update&id=<?=$festa[0]?>"><img border="0" src="../imagens/edit.gif"></a></td>
					<td class="textfield"><b><?=$festa[1]?></b></td>
					<td class="textfield"><?=$festa[2]?></td>
					<td class="textfield"><?=$festa[3]?></td>
					<td class="textfield"><?=$festa[4]?></td>
					<td class="textfield"><?=$festa[5]?></td>
					<td class="textfield"><?=$festa[6]?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
<?php mysql_close($link); ?>