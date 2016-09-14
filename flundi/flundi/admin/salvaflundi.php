<?php
$conteudo = $_POST["conteudo"];
$filename = "flundi.txt";
$result = false;
if ($fd = fopen ($filename, "w")){
	$result = fwrite($fd, $conteudo); 
	fclose ($fd);
}
?>
<html>
	<head>
		<title>Salvando as informações</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<? if ($result){ ?>
			<script language="JavaScript" type="text/javascript">
					setTimeout("location='flundi.php'",2000);
			</script>
		<? } ?>
	</head>
	<body>
		<? if ($result){ ?>
			<center><h3>Informações gravadas com sucesso...</h3></center>
		<? } ?>
	</body>
</html>