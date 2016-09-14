<%@ LANGUAGE=VBScript%>
<html>

<head>
<title> Alterar Notícias </title>
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

<hr>
<p align="center"><a href="form_insere_alteracao.asp"> <font size="4"> Clique aqui para inserir os dados alterados</font></a><br>
</html>