<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>Notícias</title>
</head>

<h1 align="center">Notícias</h1>
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
	Do Until RecSet.Eof
		Response.Write RecSet("ID") & " - " 
		Response.Write RecSet("DATA")  & " - " 
		Response.Write RecSet ("TITULO") & "<BR>"
		Response.Write RecSet("CONTEUDO") & "<BR><BR>"
		RecSet.MoveNext
	Loop
End If
DB.close
%>
<p><a href="main.htm"> Retornar ao Índice Geral</a><br>
<a href="form_apaga.asp"> Retornar para Apagar Notícias</a><br>
<a href="form_altera.asp"> Retornar para Alterar Notícias</a><br><br>
</p>
</html>