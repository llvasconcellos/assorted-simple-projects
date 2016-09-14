<?
$what = $_GET["oque"];
$id = $_GET["id"];
$link = mysql_connect("localhost", "root", "Velox666")
        or die("Erro de conexão com o banco: " . mysql_error());

$query = "DELETE FROM " . $what . " WHERE (cd='" . $id . "')";

 mysql_select_db ("flundi");
 $result = mysql_query($query) or die("Erro ao atualizar registros no Banco: " . mysql_error());
?>
<html>
	<head>
		<title>Delete</title>
		<? if ($result == 1){ ?>
			<script language="JavaScript" type="text/javascript">
					setTimeout("location='<?=$what?>.php'",1000);
			</script>
		<? } ?>
	</head>
	<body>
		<? if ($result == 1){ ?>
			<center><h3>Informações gravadas com sucesso...</h3></center>
		<? } ?>
	</body>
</html>
<?php	mysql_close($link); ?>