<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>Índice de Notícias</title>
</head>

<h1 align="center"><font face="Comic Sans MS"> Índice das Notícias</font></h1>
<hr>
<%
Dim DB
Dim SQL
Set DB = Server.CreateObject("ADODB.Connection")
DB.Open "noticias"
SQL="SELECT ID,DATA,TITULO,CONTEUDO FROM NOTICIAS order by DATA DESC"
Set RecSet=DB.Execute(SQL)
If RecSet.Eof then 
	Response.Write "Não há notícias cadastradas!"
Else
	Response.Write "Clique na notícia desejada:<br><br>"
	Do Until RecSet.Eof
		Response.Write RecSet("DATA")
		Response.Write "-<a href=conteudo.asp?ID="&RecSet("ID")&">"
		Response.Write RecSet("TITULO") & "</A><BR>"
		RecSet.MoveNext
	Loop
End If
DB.close
%>
<p><a href="main.htm"> Retornar ao Índice Geral</a><br>
</html>

