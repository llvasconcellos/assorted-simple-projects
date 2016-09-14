<?
$metodo = $_POST["metodo"];
$link = mysql_connect("localhost", "root", "Velox666")
        or die("Erro de conexão com o banco: " . mysql_error());

if ($metodo == "add")
	{
	$query = "INSERT INTO `festas` (`nome`,`data`,`lineup`,`local`, `ingressos`,`link`) VALUES ('";
	$query .= $_POST["nome"] ."','";
	$query .= $_POST["data"] ."','";
	$query .= $_POST["lineup"] ."','";
	$query .= $_POST["local"] ."','";
	$query .= $_POST["ingressos"] ."','";
	$query .= $_POST["links"] ."')";
}

if ($metodo == "update")
	{
	$query = "UPDATE `festas` SET ";
	$query .= "`nome`= '" . $_POST["nome"] ."', ";
	$query .= "`data`= '" . $_POST["data"] ."', ";
	$query .= "`lineup`= '" . $_POST["lineup"] ."', ";
	$query .= "`local`= '" . $_POST["local"] ."', ";
	$query .= "`ingressos`= '" . $_POST["ingressos"] ."', ";
	$query .= "`link`= '" . $_POST["links"] ."' ";
	$query .= "WHERE `cd` = '" . $_POST["id"] . "'";	
}
 mysql_select_db ("flundi");
 $result = mysql_query($query) or die("Erro ao atualizar registros no Banco: " . mysql_error());
?>
<html>
	<head>
		<title>Salvando as informações</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<? if ($result == 1){ ?>
			<script language="JavaScript" type="text/javascript">
				<? if($metodo == "add"){ ?>
					setTimeout("location='form_festas.php?metodo=add'",2000);
				<? } 
				else ?> setTimeout("location='festas.php'",2000);
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