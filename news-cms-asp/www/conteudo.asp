<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>Conteúdo das Notícias</title>
</head>

<h1 align="center"> Conteúdo das Notícias </h1>
<%
Dim DB
Dim SQL
Dim RecSet
Set DB=Server.CreateObject ("ADODB.Connection")
DB.Open "noticias"
If Request.QueryString("ID") <> "" then
	SQL =  "SELECT  ID, DATA, TITULO, CONTEUDO FROM NOTICIAS where ID=" & Request.QueryString ("ID")
                  Set RecSet=DB.Execute(SQL)
	If  RecSet.eof  then  
		Response.Write "O código <b>" & Request.QueryString("ID") & "</b> não existe!"
	Else
		Response.Write "<b>" & RecSet ("ID") &" </b>"
		Response.Write "<title>Notícia - " & RecSet("TITULO") & "</title>" & vbCrLF
		Response.Write "<b>" &  RecSet("TITULO") & "</b><BR><BR>"
		Response.Write RecSet ("CONTEUDO")
	End If
Else
	Response.Write "Nenhum Código de notícia Informado!"
End If
DB.close
%>
<hr>
<a href="indice.asp"> Retornar ao Índice de Notícias</a><br>
</html>