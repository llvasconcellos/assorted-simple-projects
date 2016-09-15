<%@LANGUAGE="vbscript"%>
<%
Dim fso, arq, pasta, html, last, temp,i, oque
'html = 
programa = lcase(request.ServerVariables("APPL_PHYSICAL_PATH"))
dir = Request.QueryString("dir")
last = request.QueryString("last")
pasta = request.QueryString("pasta")
oque = request.QueryString("oque")

if pasta = "s" then
	if len(dir) < len(programa) then
		dir = programa
	end if
else
	if dir <> "" then
		if last <> "" then
			dir = last & "\" & dir
		else
			dir = programa & "\" & dir
		end if
	else
		dir = programa
	end if
end if
%>
<html>
<head>
</head>
<body>
	<TABLE cELLSPACING="0" CELLPADDING="0">
		<%
			Set fso = CreateObject("Scripting.FileSystemObject")
			Set pasta = fso.GetFolder(dir)
			temp = split(pasta.path,"\")
			for i=0 to ubound(temp)-1
				path = path & temp(i) & "\"
			next
			path = server.URLEncode(path)
			response.Write("<tr><td><a href='files.asp?oque=" + oque + "&pasta=s&dir=" & path & "'>GO</a></td><td>" & ".." & "</td></tr>")
			for each arq in pasta.subfolders
				response.Write("<tr><td><a href='files.asp?oque=" + oque + "&dir=" & arq.name & "&last=" & pasta.path & "'>GO</a></td><td>" & arq.name & "</td></tr>")			
			next
			temp = split(programa,"\")
			path=""
			for i=0 to ubound(temp)-2
				path = path & temp(i) & "\"
			next
			for each arq in pasta.files
				response.Write("<tr><td onclick=" & chr(34) & "javascript: ok('" & replace(replace(lcase(arq.path),path,""),"\","/") & "')" & chr(34) & " style='cursor: pointer; text-decoration: underline; color: blue;'>GET</td><td>" & arq.name & "</td></tr>")			
			next
			response.Write("<br><br><br><br>")
		%>
	</table>
</body>
<SCRIPT language="JavaScript" type="text/javascript">
	function ok(valor){
		window.close();
		window.opener.<%=oque%>.value = "/" + valor;
		<% if oque = "css.imgpath" then %>
				window.opener.teste.style.backgroundImage = "url('/" + valor + "')";
		<% else %>
				set_filter_alphaimageloader()
		<% end if %>
	}
	function set_filter_alphaimageloader(){
		var filtro;
		if (window.opener.css.imagemalfafiltro.value != ""){
			filtro = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src=";
			filtro += window.opener.css.imagemalfafiltro.value;
			filtro += ",sizingmethod=" + window.opener.css.alphaimageloader_type.value + ")";
			window.opener.teste.style.filter = filtro;
		}	
	}
</SCRIPT>
</html>
