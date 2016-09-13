<?
require("funcoes.php");
inicia_pagina();
?>
<script language="javascript">
	function enviar1(){
		var f = document.forms[0];
		if(f.imovel.value != "") f.submit();
	}
	function enviar2(){
		var f = document.forms[0];
		if(f.negocio.value != "") f.submit();
	}
</script>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 8;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: x-small;
}
-->
</style>

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td colspan="2" align="right">
			<br />
			<form name="QForm" action="imoveis.php">
			<table width="600" border="0">
				<tr>
				  <td rowspan="2" width="40"><img src="imagens/lupa.gif" /></td>
				  <td width="300" class="branco_no_azul">Pesquisa&nbsp;Por&nbsp;Im&oacute;vel</td>
				  <td width="100" class="branco_no_azul">Tipo&nbsp;Neg&oacute;cio:</td>
				  <td width="200" class="branco_no_azul">Tipo&nbsp;Im&oacute;vel:</td>
			  </tr>
				<tr>
					<td>
						<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="300" height="6" id="barra" align="middle">
						<param name="allowScriptAccess" value="sameDomain" />
						<param name="movie" value="imagens/barra.swf" />
						<param name="quality" value="high" />
						<param name="bgcolor" value="#ffffff" />
						<param name="wmode" value="transparent" />
						<embed src="imagens/barra.swf" quality="high" bgcolor="#ffffff" width="300" height="6" name="barra" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
						</object>
					</td>
					<td>
					  <select name="negocio" id="negocio" onchange="enviar1();">
							<option value="">&lt;&lt;&lt; Selecione</option>
							<option value="Venda">Venda</option>
							<option value="Locação">Loca&ccedil;&atilde;o</option>
						</select>
					</td>
					<td>
						<select name="imovel" id="imovel" onchange="enviar2();">
						  <option value="">&lt;&lt;&lt; Selecione</option>
						  <option value="3">Apartamento</option>
						  <option value="10">Armaz&eacute;m</option>
						  <option value="2">Casa</option>
						  <option value="23">Casa Comercial</option>
						  <option value="32">Casa Em Condom&iacute;nio Fechado</option>
						  <option value="30">Ch&aacute;cara</option>
						  <option value="5">Cond. Fechado</option>
						  <option value="24">Ed. Comercial</option>
						  <option value="8">Fazenda</option>
						  <option value="9">Galp&atilde;o</option>
						  <option value="20">Geminado</option>
						  <option value="25">Germinado</option>
						  <option value="14">Im&oacute;vel Comercial</option>
						  <option value="16">Im&oacute;vel Rural</option>
						  <option value="33">Instala&ccedil;&otilde;es Comerciais</option>
						  <option value="31">Kitinete</option>
						  <option value="11">Lote</option>
						  <option value="28">Ponto Comercial</option>
						  <option value="29">Pr&eacute;dio</option>
						  <option value="1">Qualquer</option>
						  <option value="22">Quitinete</option>
						  <option value="15">Resid./cml.</option>
						  <option value="13">Sala</option>
						  <option value="17">Sala Comercial</option>
						  <option value="7">S&iacute;tio</option>
						  <option value="4">Sobrado</option>
						  <option value="27">Sobrado Geminado</option>
						  <option value="26">Sobrado Germinado</option>
						  <option value="6">Terreno</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan="2" align="center"><a class="menu_horizontal" href="imoveis.php">Busca Avançada</a></td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
	<tr>
		<td width="346" valign="top">&nbsp;</td>
		<td width="414" align="center" valign="top">
			<? //inicia_quadro_branco_sem_sombra(); ?>
						<img src="imagens/destaque.gif" />
						<table width="100%">
							<tr>
								<td width="50%" valign="top">
									<? inicia_quadro_branco_com_sombra(); ?>
												<!-- TEXTO E FOTO DO PRIMEIRO IMÓVEL EM DESTAQUE -->
												<img src="imoveis/foto1.jpg" /><br />
												fdjsal fdjlsa flkdjsa lfkjdsaçlfjdsalçfj dsçalk fçldksja fldsja
												fdjsal fdjlsa flkdjsa lfkjdsaçlfjdsalçfj dsçalk fçldksja fldsja
												fdjsal fdjlsa flkdjsa lfkjdsaçlfjdsalçfj dsçalk fçldksja fldsja
												<!-- FIM -->
									<? termina_quadro_branco_com_sombra(); ?>
								</td>
								<td width="50%" valign="top">
									<? inicia_quadro_branco_com_sombra(); ?>
												<!-- TEXTO E FOTO DO SEGUNDO IMÓVEL EM DESTAQUE -->
												<img src="imoveis/foto2.jpg" /><br />
												fdjsal fdjlsa flkdjsa lfkjdsaçlfjdsalçfj dsçalk fçldksja fldsja
												fdjsal fdjlsa flkdjsa lfkjdsaçlfjdsalçfj dsçalk fçldksja fldsja
												fdjsal fdjlsa flkdjsa lfkjdsaçlfjdsalçfj dsçalk fçldksja fldsja
												<!-- FIM -->
									<? termina_quadro_branco_com_sombra(); ?>
								</td>
							</tr>
						</table>
						<? // termina_quadro_branco_sem_sombra(); ?>
	  </td>
  </tr>
	<tr>
	  <td colspan="2" valign="top" bgcolor="#990000"><div align="center"><span class="style1"><span class="style2">Imobili&aacute;ria Brietzig Ltda. - Fone +55 47 3425-8999 - Rua Tenente Ant&ocirc;nio Jo&atilde;o, 2147 - Joinville/SC</span>.</span></div></td>
  </tr>
			</table>
		</td>
	</tr>
</table>
								
<? termina_pagina(); ?>							