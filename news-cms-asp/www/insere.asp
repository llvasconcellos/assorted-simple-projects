<%@ LANGUAGE=VBScript%>
<html>
<title>Inserir Notícias</title>
<body>
<%
Dim DB
Dim RecSet
Dim SQL
ID = Request.Form("ID")
DATA = Request.Form("DATA")
TITULO = Request.Form("TITULO")
CONTEUDO = Request.Form("CONTEUDO")
Set DB = Server.CreateObject("ADODB.Connection")
DB.Open "noticias"
SQL = "Insert into noticias (ID, DATA, TITULO,CONTEUDO) "
SQL= SQL +  " values ('"+ID+"','"+DATA+"','"+TITULO+"','"+CONTEUDO+"')"
Set RecSet = DB.Execute(SQL)
DB.close
%>
<b><p align="center">Notícia inserida com sucesso!.</p></b>
<hr>
<a href="main.htm"> Retornar ao Índice Geral</a><br>
</body></html>

