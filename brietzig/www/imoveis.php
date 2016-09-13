<?
require("funcoes.php");
inicia_pagina();
?>
<table width="100%">
<tr>
<td width="10%">&nbsp;</td>
<td width="80%">
<? inicia_quadro_branco_sem_sombra(); ?>
<center><br /><img src="imagens/imoveis.gif" /></center><br />
<table width="100%">
	<tr>
		<td width="30%" align="left">
			<input type="button" value="Nova Pesquisa" onclick="getElementById('partner').src='http://www.partnerimoveis.com.br/busca_imob.php?imob=Brietzig';" />
		</td>
		<td width="70%" align="right">
			Caso você não encontre o imóvel que está procurando <a href="registre.php">clique aqui</a>
		</td>
	</tr>
</table>
<? if((strlen($_GET["negocio"]) == 0) && (strlen($_GET["imovel"]) == 0)){
	?>
	<iframe id="partner" src="http://www.partnerimoveis.com.br/busca_imob.php?imob=Brietzig" name="imoveis" width="100%" marginwidth="1" height="550" marginheight="1" align="top" scrolling="auto" frameborder="0"></iframe>
	<?
}
else {
?>
<iframe id="partner" src="http://www.partnerimoveis.com.br/listar_imob1.php?imob=Brietzig&id_imobiliaria=1&nome=Brietzig&pesquisar=pesquisar&imovel=<?=$_GET["imovel"]?>&negocio=<?=$_GET["negocio"]?>" name="imoveis" width="100%" marginwidth="1" height="550" marginheight="1" align="top" scrolling="auto" frameborder="0"></iframe>
<?
}
termina_quadro_branco_sem_sombra();
?>
</td>
<td width="10%">&nbsp;</td>
</tr>
</table>
<? termina_pagina(); ?>