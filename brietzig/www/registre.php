<?
require("funcoes.php");
inicia_pagina();
?>
<table width="100%">
<tr>
<td width="10%">&nbsp;</td>
<td width="80%">
<?
inicia_quadro_branco_sem_sombra();
?>
<script language="javascript">
	function valida_form(){
		f = document.forms[0];
		if(f.Nome.value == ""){
			alert('Digite o seu Nome');
			f.Nome.focus();
			return false;
		}
		if(f.Cidade.value == ""){
			alert('Digite a sua Cidade');
			f.Cidade.focus();
			return false;
		}
		if(f.Fone.value == ""){
			alert('Digite o seu Telefone');
			f.Fone.focus();
			return false;
		}
		if(f.EMail.value == ""){
			alert('Digite o seu E-Mail');
			f.EMail.focus();
			return false;
		}
		return true;
	}
</script>
<FORM name="Busca de Imovel" action="/cgi-bin/mailer.cgi" method="post" onsubmit="return valida_form();">
<INPUT TYPE=HIDDEN NAME="recipient" VALUE="daniela@brietzig.com.br">
<INPUT TYPE=HIDDEN NAME="subject" VALUE="Busca Im&oacute;vel">
<INPUT TYPE=HIDDEN NAME="redirect" VALUE="../obrigado.php">
<INPUT TYPE=HIDDEN NAME="env_report" VALUE="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT">
<br />
<TABLE cellSpacing="2" cellPadding="5" width="63%" border="0">
	<TBODY>
		<tr>
			<td colspan="2">
				<img src="imagens/registre.gif" /><br />
				<strong>Preencha o formulário abaixo para ser informado sobre novos imóveis disponíveis!</strong>
				<br /><br />
				Os campos marcados com (*) são obrigatórios.
				<br />
			</td>
		</tr>			
		<TR>
			<TD width="10%" align="left">Nome*:</TD>
			<TD width="90%" align="left"><INPUT size="40" name="Nome" /></TD>
		</TR>
		<TR>
			<TD align="left">Endereço:</TD>
			<TD align="left"><INPUT size="40" name="Endereco"></TD>
		</TR>
		<TR>
			<TD align="left">Cidade-U.F.*:</TD>
			<TD align="left"><INPUT size="40" name="Cidade"></TD>
		</TR>
		<TR>
			<TD align="left">Telefone(s)*:</TD>
			<TD align="left"><INPUT size="40" name="Fone"></TD>
		</TR>
		<TR>
			<TD align="left">E-Mail*:</TD>
			<TD align="left"><INPUT size="40" name="EMail"></TD>
		</TR>
		<tr>
			<td colspan="2" align="center"><br /><strong>DADOS DO IMÓVEL DESEJADO</strong></td>
		</tr>
		<TR>
			<TD align="left">Negociação*:</TD>
			<TD align="left">
				<SELECT>
					<OPTION value="">&gt;&gt; Selecione &lt;&lt;</OPTION>
					<OPTION value="Venda">Venda</OPTION>
					<OPTION value="Locação">Locação</OPTION>
				</SELECT>
			</TD>
		</TR>
		<TR>
			<TD align="left">Imóvel*:</TD>
			<TD align="left">
				<SELECT>
					<OPTION value="">&gt;&gt; Selecione &lt;&lt;</OPTION>
					<OPTION value="Casa">Casa</OPTION>
					<OPTION value="Apartamento">Apartamento</OPTION>
					<OPTION value="Terreno">Terreno</OPTION>
					<OPTION value="Sala Comercial">Sala Comercial</OPTION>
					<OPTION value="Área Industrial">Área Industrial</OPTION>
					<OPTION value="Chácara/Fazenda">Chácara/Fazenda</OPTION>
					<OPTION value="Outros">Outros</OPTION>
				</SELECT>
			</TD>
		</TR>
		<TR>
			<TD align="left">Uso principal:</TD>
			<TD align="left">
				<SELECT>
					<OPTION>&gt;&gt; Selecione &lt;&lt;</OPTION>
					<OPTION value="Residencial">Residencial</OPTION>
					<OPTION value="Comercial">Comercial</OPTION>
					<OPTION value="Industrial">Industrial</OPTION>
				</SELECT>
			</TD>
		</TR>
		<TR>
			<TD align="left">Outras características:</TD>
			<TD align="left"><TEXTAREA name=Descricao rows=6 cols=32></TEXTAREA></TD>
		</TR>
		<TR>
			<TD colspan="2">
				<INPUT type="submit" value="Enviar">&nbsp;&nbsp;&nbsp;&nbsp;<INPUT type="reset" value="Limpar">
			</TD>
		</TR>
	</TBODY>
</TABLE>
</FORM>
<?
termina_quadro_branco_sem_sombra();
?>
</td>
<td width="10%">&nbsp;</td>
</tr>
</table>
<?
termina_pagina(); ?>								