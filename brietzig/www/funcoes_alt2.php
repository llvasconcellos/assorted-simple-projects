<?
error_reporting(E_NONE);

function inicia_pagina(){
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<META NAME="Description" Content="IMÓVEIS INDUSTRIAIS, comerciais e residenciais. Mais de 28 anos de experiência em Compra, venda, locação, administração, avaliações, arrematações e demais serviços imobiliários.">
	<META NAME="Author" Content="Cleiton Brietzig">
	<META NAME="Keywords" Content="imóvel, imóveis, casas, apartamentos, quitinetes, terrenos, residências, galpões, áreas, chácaras, galpão, salas, industriais, comerciais, residenciais, imobiliária, joinville, investimentos, indústrias, industrial">
	<link href="estilo.css" rel="stylesheet" rev="stylesheet">
	<TITLE>Brietzig Imobiliária - IMÓVEIS INDUSTRIAIS, comerciais e residenciais na região de Joinville-SC</TITLE>
	</head>
	<body>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td align="center" valign="center">
					<table width="768" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
						<tr>
							<td rowspan="3" width="8" background="imagens/lateral_esq_site.gif"><span style="font-size: 9px;">&nbsp;&nbsp;&nbsp;</span></td>
							<td width="760">
								<!--<marquee behavior="slide" direction="left" scrollamount="100" loop="1">-->
								<table height="89" width="100%" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td height="89"><img src="imagens/cabecalho1.jpg" width="768" height="89" /></td>
									</tr>
								</table>
								<!--</marquee>-->
							</td>
							<td rowspan="3" width="13" background="imagens/lateral_dir_site.gif"><span style="font-size: 8px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
						</tr>
						<tr>
							<td height="30" background="imagens/fundo_menu_2.jpg">
								<table width="600">
									<tr>
										<td onmouseover="this.style.backgroundColor = '#485577';" onmouseout="this.style.backgroundColor = '';"><a class="menu_horizontal" href="index.php">Home</a></td>
										<td align="center"><img src="imagens/divisor.gif"></td>
										<td onmouseover="this.style.backgroundColor = '#485577';" onmouseout="this.style.backgroundColor = '';"><a class="menu_horizontal" href="empresa.php">Empresa</a></td>
										<td align="center"><img src="imagens/divisor.gif"></td>
										<td onmouseover="this.style.backgroundColor = '#485577';" onmouseout="this.style.backgroundColor = '';"><a class="menu_horizontal" href="joinville.php">Conheça&nbsp;Joinville</a></td>
										<td align="center"><img src="imagens/divisor.gif"></td>
										<td onmouseover="this.style.backgroundColor = '#485577';" onmouseout="this.style.backgroundColor = '';"><a class="menu_horizontal" href="cadastre.php">Cadastre&nbsp;Seu&nbsp;Imóvel</a></td>
										<td align="center"><img src="imagens/divisor.gif"></td>
										<td onmouseover="this.style.backgroundColor = '#485577';" onmouseout="this.style.backgroundColor = '';"><a class="menu_horizontal" href="registre.php">Registre&nbsp;Sua&nbsp;Busca</a></td>
										<td align="center"><img src="imagens/divisor.gif"></td>
										<td onmouseover="this.style.backgroundColor = '#485577';" onmouseout="this.style.backgroundColor = '';"><a class="menu_horizontal" href="contato.php">Contato</a></td>
									</tr>
									<tr>
										<td></td>
									</tr>
									<tr>
										<td></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td height="500" class="conteudo" valign="top">
	<?
}
#######################################################################################################

function termina_pagina(){
	?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
<?
}
#######################################################################################################

function inicia_quadro_branco_sem_sombra($titulo){
	?>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="conteudo2">
		 <tr>
			<td width="18"><img src="imagens/canto_sup_esq.gif" width="18" height="18" /></td>
			<td width="276" background="imagens/lateral_sup.gif"></td>
			<td width="18"><img src="imagens/canto_sup_dir.gif" width="18" height="18" /></td>
		  </tr>
		  <tr>
			<td background="imagens/lateral_esq.gif">&nbsp;</td>
			<td bgcolor="#FFFFFF">
	<?
}
#######################################################################################################

function termina_quadro_branco_sem_sombra(){
	?>
			</td>
    <td background="imagens/lateral_dir.gif">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="imagens/canto_inf_esq.gif" width="18" height="19" /></td>
    <td background="imagens/lateral_inf.gif">&nbsp;</td>
    <td><img src="imagens/canto_inf_dir.gif" width="18" height="19" /></td>
  </tr>
	</table>
	<?
}

function inicia_quadro_branco_com_sombra($titulo){
	?>
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="conteudo2">
		  <tr>
    <td width="24"><img src="imagens/canto_sup_esq_sombra.gif" width="24" height="18"></td>
    <td width="347" background="imagens/lateral_sup_sombra.gif"></td>
    <td width="21"><img src="imagens/canto_sup_dir_sombra.gif" width="21" height="18"></td>
  </tr>
  <tr>
    <td background="imagens/lateral_esq_sombra.gif">&nbsp;</td>
    <td bgcolor="#FFFFFF">
	<?
}

function termina_quadro_branco_com_sombra(){
	?>
			</td>
    <td background="imagens/lateral_dir_sombra.gif">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="imagens/canto_inf_esq_sombra.gif" width="24" height="26"></td>
    <td background="imagens/lateral_inf_sombra.gif">&nbsp;</td>
    <td><img src="imagens/canto_inf_dir_sombra.gif" width="21" height="26"></td>
  </tr>
</table>
	<?
}
?>