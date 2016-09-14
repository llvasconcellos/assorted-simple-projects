<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>Alteraçao de Notícias</title>
<%
Dim SQL
Dim RecSet
Dim DB
ID = Request.Form("ID") 
Set DB = server.createobject("ADODB.connection") 
DB.Open "noticias" 
SQL = "DELETE FROM NOTICIAS WHERE ID=" & REQUEST("ID")
Set RecSet = DB.Execute(SQL) 
DB.close
%> 
</head>

<p align="center"><b> 
Notícia de Código igual a 8 foi alterada com sucesso!</b>
<hr>
<a href="main.htm"> Retornar ao Índice Geral</a><br>
</html>
