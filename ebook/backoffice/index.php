<?
session_start();
if (!isset($_SESSION['clientesesion']))	$_SESSION['clientesesion']="";
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
ini_set("display_errors", 1);
header("Content-Type: text/html; charset=iso-8859-1");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
set_time_limit(0);
date_default_timezone_set("America/Lima");
ini_set("memory_limit","1200M");
if(isset($_POST['correo']))	{
	require_once("../lib/class.phpmailer.php");
	$mail             = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth   = true;                  
	// $mail->SMTPDebug  = 2;
	$mail->Host       = "mail.myenglishclubhouse.com";
	$mail->Port       = 26;
	$mail->Username   = "ech@myenglishclubhouse.com";  
	$mail->Password   = "gtryonp";
	$mail->From       = "ech@myenglishclubhouse.com";
	$mail->FromName   = "eBooks";
	$mail->Subject    = $_POST['alumnonombre'].", enlace a tu eBook ".$_POST['libronombre'];
	// $mail->AddAttachment( $arr[$k] , $arr[$k]  );
	$mail->WordWrap   = 50;
	$mail->MsgHTML("
	<b>eBook</b><br/>
	Hola, ".$_POST['alumnonombre']."!<br/>
	Este es tu enlace a tu ebook <a href='".str_replace("~","&",$_POST['mensaje'])."' >".$_POST['libronombre']."</a><br/>");
	$mail->AddAddress($_POST['correo'], "ebook");	
	$mail->IsHTML(true);
	$mail->Send();
	die("Proceso realizado: Se envia correo a ".$_POST['correo']."\n con mensaje : Esta es tu <a href='".str_replace("~","&",$_POST['mensaje'])."' >invitacion al ebook</a>");
}
if($_GET['exit']=="si")	unset($_SESSION['login']);
if(isset($_SESSION['login']))	$_GET['login']=$_SESSION['login'];
if(!isset($_GET['login']) || $_GET['login']=="null" || $_GET['login']!=date("Ymd",time()))							die("<script>window.history.pushState('', '', './index.php');x=prompt('Ingrese Clave de acceso');document.location.href='index.php?login='+x;</script>");
$_SESSION['login']=$_GET['login'];
?>
<!--HEAD																																																																																																-->
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<script src="../lib/jquery.min.js"></script>
<title>Backoffice-Editorial Tryon</title>
<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAE8klEQVRYw7WXW2wUVRjH/3Ntp93d7m673Uv3cmZmba1UGkIMCCjGtKUIEcEQnowvKiBKuERITEg0JCZeIBFSL/EJBWMgBI1aKCCIj0b6UGhREdru9kLpQgO0sLc5nw+FEm1Lt4X9JyeZnJnvO785813OAJNIkYSLAEgWBXIUSTftmnS6vER5Z36l3YNHKGGiyTl6sWRpFckfvz8kd/UOYujaIC50tOPwkR9w7nz7DW+Jsj2WSH2JfKmWFUcal9TTOHFOx346QpGgn5zF8s7J7BtqnUJDrVOYMUB5iTLvzXWv02TqjXdRVI/wMoey8p7NrFDRbLdN/lhTxVaXTR522+TbRQXiObdN3lsZ0OZNtpb8/4mqgFYTS6R2RyLhSQEDwQgOHvxOWLjo2V1RvzaYuJnZEbvO6xvqlwjPP7cYjDEQgM7OzpozZ36rOdpycoNdk34psysbO68mL0zq2ONQXi1UpfScJ6vo2/37aCqtXrWCVEWmbZs30EBfbNLnrvbHaMvba6moULntc6qvTLj4XNMmKLIw0LRnF+18bwf9eurklACfN+2lXR99QLnqi6ZPSZGExOoFZWPxId67qHCp3kyWyhcufAadXd0IhkJTxkqJyw1fIJhzbD29YBEsTqWpDLePA/jj8rAHAEIRhr6+XkTCUwMQ5wBRzgCMMXACfr84HBkHMJLkprPEDqfLDZ5NQVa1HACy08ouu8MJT6kbyQw3xwGkMpxFwmGACJKk5OSQOJ9e1RNFRE2GVIYb4wAEAdHKx6K4MXQNNoczb0WOMR2igKpxAAToTNdxuasrpwAcfSNp+gC6gayF4DgAzokxpqMn3oOooecGIAgz2AEGArH/AKycV6oQoDPGEI/HEcpxBzBTAIK+bK5LGQO4dCXpzVqkmaaBnngcoXA4bzFgGAYyFmnxRNo7BtA/lGaAAF3XEY/HEKgI5g1A13XIkoiBG2k2BpDM8KDfVw61sBiJxCBKS8vyBiApBQgFA0hlKDIGkM6SGTXupia3IMkK8inGGEaS1v0dEAVUG6aBdOoO1MIi5FumYUCVheoxAAKCpmlg4Eo/vD5f3gGYriPLcf8TjNYAA/FYDMFgKP8ATAcRhQBAXL/EX2Bx+Blj6I7FEApVIJsaRnpkCJnkzWk3nFwBMhYFls11aeLPZ68zi5PKdB1d3TFs2rQFRTYXbE4Piu1ueMvLsWp5PT7b8wkSA32PJgZMA0RQ2uN3wuKtpBWxF2vw+/2or6vDmVMt6On6C/29cfTFLuH0iWY0LF2O5uajMKOVeH/HdqTujDwUgNfrg9Nhw0jSMmHXpDeqq6ITHqE4t4hbWeKWRUScOtpaqbFuMc1/ag719cTowP6v6cA3+x5sy60J79fWVJOzWF4vW5xYJDLaG9LJEZw8fhTHjh1Hx/k2/H2pEzyTgiApCIcq8PgTs7BmzRp0tJ1FXV0d1q9bC/fdopW6fQvHW5rR0nICHe1t+OdyN7iVgSipqDQZqmtmY2ljA+rqG6FqNoQiDB0X/gxBU8XDL69YRu9u20w+j5tGs/LBo7BAJVmWyOmw0e4Pd9K2LW+Rp9SZk63P46LtWzfSSy++QAWKeBiFqtiai2E+RoEitopEyH/iPyAjZbsmNWmqOL2GIiJwfTj7GtHoz60gAA5N+koQhGnlqfAw6KV2ZZOmiilVFlIeh7J1pn7+BT1C8f8VTjZYAAAAAElFTkSuQmCC" rel="icon" type="image/png" />
</head>
<!--JS																																																																																																-->
<script type="text/javascript">
// window.onerror = function(message, source, lineno, colno, error) {console.error("message:[",message,"] source:[", source,"] lineno:[", lineno ,"] colno:[",colno,"] error:[", error,"]");alert("Message: ["+message+"]\nSource: ["+source+"]\nLineno: ["+lineno+"]\nColno: ["+colno+"]\nError: ["+error+"]");return true;}
var mitab="";
var activo=false;
window.onload = function () {
	window.history.pushState("", "", './index.php');
	cargalibroalumno();
	cargalibro();
	cargacolegio();
	cargaaula();
	cargaalumno();
	cargalibroalumnorespuesta();
}
function porcolumnas()	{
	document.querySelectorAll("tr").forEach(function(actual) {actual.addEventListener("selectstart",function(e) {e.preventDefault();})})
	document.querySelectorAll("td").forEach(function(actual) {actual.addEventListener("mousedown",function(e) {
		document.querySelectorAll(".highlight").forEach(function(cual) {cual.classList.remove("highlight")});
		activo=true;
		actual.classList.add("highlight");
	})})
	document.querySelectorAll("td").forEach(function(actual) {actual.addEventListener("mouseup",function(e) {
		activo=false;
	})})
	document.querySelectorAll("td").forEach(function(actual) {actual.addEventListener("mousemove",function(e) {
		if(activo)	actual.classList.add("highlight");
	})})
}
function cargalibroalumnorespuesta() {
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablalibroalumnorespuesta");}};
	xr.send("modo=cargalibroalumnorespuesta");	
}
function 	cargalibroalumno()	{
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablalibroalumno");}};
	xr.send("modo=cargalibroalumno");
}
function 	cargalibro()	{
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablalibro");}};
	xr.send("modo=cargalibros");
}
function 	cargacolegio()	{
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablacolegio");}};
	xr.send("modo=cargacolegios");
}
function 	cargaaula()	{
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablaaula");}};
	xr.send("modo=cargaaulas");
}
function 	cargaalumno()	{
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablaalumno");}};
	xr.send("modo=cargaalumnos");
}
function creatabla(msg,cualdiv)	{
	var bufferc="",bufferb="",clave="",hayclave=false;
	var fecha=new Date().getUTCFullYear()+(new Date().getUTCMonth() + 1<10 ? "0" : "")+(new Date().getUTCMonth() + 1)+(new Date().getUTCDate()<10 ? "0" : "")+new Date().getUTCDate();
	$.each(msg, function(i, str) {
		bufferb+="<tr ondblclick='editafila("+i+",this)'>";
		var k=0;
		$.each(str, function(a, b) {
			if(i==0)	bufferc+="<th title='"+a+"'>"+a+"</th>";
			bufferb+="<td>"+(k==0 ? "<input type='checkbox' id='chk_"+i+"'>" : "" )+(a=="alumnoclave" ? "**********" : b)+"</td>";
			if(a=="alumnoclave")	hayclave=true;
			k++;
		});
		if(i==0 && hayclave)	bufferc+="<th>Excel</th><th>localhost</th><th>WWW</th>";
		if(hayclave)					{
			bufferb+="<td align='center'>";
			bufferb+="<a href=\"javascript:aexcel('"+msg[i]['libro']+"','"+msg[i]['alumnoclave']+"')\"			class='link'><div title='L Excel' class='excellocalhost'></div></a>&nbsp;";
			bufferb+="</td>";
			bufferb+="<td align='center'>";
			bufferb+="<a href='http://localhost/myenglishclubhouse/ebook/index.php?libro="+msg[i]['libro']+"&alumno="+msg[i]['alumnoclave']+"' 																								target='_blank' class='link'><div title='Site local' class='localhost'></div></a>&nbsp;";
			bufferb+="<a href='http://localhost:8050/phpmyadminphpmyadmin/db_structure.php?server=1&db=ebook'																																		target='_blank' class='link'><div title='phpmyadmin local' class='palocalhost'></div></a>&nbsp;";
			bufferb+="<a href='http://localhost/myenglishclubhouse/ebook/index.php?d="+fecha+"&libro="+msg[i]['libro']+"&alumno="+msg[i]['alumnoclave']+"' 																		target='_blank' class='link'><div title='Docente local' class='docentelocalhost'></div></a>&nbsp;";
			bufferb+="</td>";
			bufferb+="<td align='center'>";
			bufferb+="<a href='https://myenglishclubhouse.com/ebook/index.php?libro="+msg[i]['libro']+"&alumno="+msg[i]['alumnoclave']+"'																										target='_blank' class='link'><div title='Site remoto' class='internet'></div></a>&nbsp;";
			bufferb+="<a href='https:/tryonsite.com/phpmyadminphpmyadmin'																																																				target='_blank' class='link'><div title='phpmyadmin remoto' class='painternet'></div></a>&nbsp;";
			bufferb+="<a href='https://myenglishclubhouse.com/ebook/index.php?d="+fecha+"&libro="+msg	[i]['libro']+"&alumno="+msg[i]['alumnoclave']+"'																				target='_blank' class='link'><div title='Docente remoto' class='docenteinternet'></div></a>&nbsp;";
			link="https://myenglishclubhouse.com/ebook/index.php?libro="+msg[i]['libro']+"&alumno="+msg[i]['alumnoclave'];
			correo=msg[i]['correo'];
			correo="gtryonp@gmail.com";
			alumnonombre=msg[i]['alumnonombre'];
			libronombre=msg[i]['libronombre'];
			bufferb+="<a href=\"javascript:linkmail('"+link+"','"+correo+"','"+alumnonombre+"','"+libronombre+"')\" class='link'><div title='Correo invitacion' class='correointernet'></div></a>&nbsp;";
			bufferb+="</td>";
		};
		bufferb+="</tr>";
	});
	bufferc="<tr>"+bufferc+"</tr>";
	document.getElementById(cualdiv).innerHTML="";
	$("#"+cualdiv).append("<table id='"+cualdiv.split("div").join("")+"'>"+bufferc+bufferb+"</table>");
	resizableGrid(document.getElementById(cualdiv.split("div").join("")));
	porcolumnas();
}

function linkmail(mensaje,correo,alumnonombre,libronombre)	{
	var xr = new XMLHttpRequest();xr.open("POST", "index.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	console.log("Rpta:",(xr.responseText));alert(xr.responseText)}};
	xr.send("correo="+correo+"&alumnonombre="+alumnonombre+"&libronombre="+libronombre+"&mensaje="+mensaje.split("&").join("~"));
}

function editafila(numerofila,nombre)	{
	if(document.querySelectorAll("input[type='text']").length==0)	{
		var tabla=nombre.parentNode.parentNode;
		archivo=tabla.id.split("tabla").join("");
		llave=tabla.rows[numerofila+1].cells[0].innerHTML.split(">")[1];
		var cual=tabla.id;
		for(k=1;k<tabla.rows[0].cells.length;k++)	{
			var ok=true;
			if(cual=="tablalibroalumno" && "|libro|alumno|desde|paginas|".indexOf("|"+tabla.rows[0].cells[k].innerHTML+"|")==-1)	ok=false;
			if(ok)	{
				valor=tabla.rows[numerofila+1].cells[k].innerHTML;
				tabla.rows[numerofila+1].cells[k].innerHTML="<input type='text' id='"+tabla.rows[0].cells[k].innerHTML+"' value='"+valor+"'><button onclick=\"grabaredita('"+tabla.id+"','"+llave+"','"+(numerofila+1)+"')\">OK</button>";
			}
		}
	}
}
function anade(tableID) {
	var table = document.getElementById(tableID);
	var rowCount = table.rows.length;
	var row = table.insertRow(rowCount);
	var colCount = table.rows[0].cells.length;
	for(var i=0; i<colCount; i++) {
		var newcell = row.insertCell(i);
		if(i>0)	newcell.innerHTML = "<input type='text' id='"+table.rows[0].cells[i].innerHTML+"' placeholder='"+table.rows[0].cells[i].innerHTML+"'/>"+(i+1==colCount ? "<button onclick=\"grabaranade('"+table.id+"')\">OK</button>" : "" );
	}
}
function grabaranade(cual)	{
	var table = document.getElementById(cual);
	var cadena="insert into "+table.id.split("tabla").join("")+" (parte1)  values (parte2) ";
	var parte1="",parte2="",colCount = table.rows[0].cells.length;
	for(var i=1; i<colCount; i++) {
		ok=true;
		if(cual=="tablalibroalumno" && "|libro|alumno|desde|paginas|".indexOf("|"+table.rows[0].cells[i].title+"|")==-1)	ok=false;
		if(ok)	{
			parte1+=table.rows[0].cells[i].title+",";
			parte2+="'"+table.rows[table.rows.length-1].cells[i].children[0].value+"',";
		}
	}
	parte1=parte1.substring(0, parte1.length - 1);
	parte2=parte2.substring(0, parte2.length - 1);
	cadena=cadena.split("parte1").join(parte1).split("parte2").join(parte2);
	console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",cadena);
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) { (cual=="tablaalumno" ? cargaalumno() : (cual=="tablalibro" ? cargalibro() : (cual=="tablalibroalumno" ? cargalibroalumno() : cargalibroalumnorespuesta() ) ))	}};
	xr.send("modo=sql&cadena="+cadena);
}
function grabaredita(cual,llave,fila)	{
	var table = document.getElementById(cual);
	var cadena="update "+table.id.split("tabla").join("")+" set ";
	var colCount = table.rows[0].cells.length;
	for(var i=1; i<colCount; i++) {
		ok=true;
		if(cual=="tablalibroalumno" && "|libro|alumno|desde|paginas|".indexOf("|"+table.rows[0].cells[i].title+"|")==-1)	ok=false;
		if(ok)	{
			cadena+=table.rows[0].cells[i].title+"='"+table.rows[fila].cells[i].children[0].value+"',"
		}
	}
	cadena=cadena.substring(0, cadena.length - 1);
	cadena+=" where "+table.id.split("tabla").join("")+"='"+llave+"'";
	console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",cadena);
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) { (cual=="tablaalumno" ? cargaalumno() : (cual=="tablalibro" ? cargalibro() : (cual=="tablalibroalumno" ? cargalibroalumno() : cargalibroalumnorespuesta() ) ))	}};
	xr.send("modo=sql&cadena="+cadena);
}
function deleteRow(tableID) {
	try {
		var table = document.getElementById(tableID);
		var rowCount = table.rows.length;
		for(var i=0; i<rowCount; i++) {
			var row = table.rows[i];
			var chkbox = row.cells[0].childNodes[0];
			if(null != chkbox && true == chkbox.checked) {
				if(rowCount <= 1) {
					alert("Cannot delete all the rows.");
					break;
				}
				table.deleteRow(i);
				rowCount--;
				i--;
			}
		}
		}catch(e) {
		alert(e);
	}
}
function retira(cual)	{
	tabla=document.getElementById(cual);
	if(confirm("Desea retirar estos elementos?"))	{
		for(var i=1;i<tabla.rows.length;i++){
			var data=(tabla.rows[i].cells[0])
			if(data.querySelector("input[type='checkbox']")!=undefined)	{
				var micheck=data.querySelector("input[type='checkbox']");
				if(micheck.checked)	{
					llavevalor=tabla.rows[i].cells[0].innerText;
					llavecampo=tabla.rows[0].cells[0].innerText;
					var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
					xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) { if(i==tabla.rows.length) (cual=="tablaalumno" ? cargaalumno() : (cual=="tablalibro" ? cargalibro() : (cual=="tablalibroalumno" ? cargalibroalumno() : cargalibroalumnorespuesta() ) ))	}};
					xr.send("modo=borra&nombretabla="+cual.split("tabla").join("")+"&llavecampo="+llavecampo+"&llavevalor="+llavevalor);	
				}
			}
		}
	}
}
function aexcel(libro,alumno)	{
	var $_GET = {};			
	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
	var xr = new XMLHttpRequest();xr.open("POST", "../lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	
		var msg=JSON.parse(xr.responseText);
		var bufferc="",bufferb=""
		for(var k=0;k<msg.length;k++){
			arr=msg[k];
			bufferb+="<tr>";
			Object.keys(arr).forEach(function(mmsg) {
				if(k==0)	bufferc+="<th>"+mmsg+"</th>";
				bufferb+="<td>"+msg[k][mmsg]+"</td>";
			})
			bufferb+="</tr>";
		}
		var fechayyyymmddhhiiss=new Date().getUTCFullYear()+(new Date().getUTCMonth() + 1<10 ? "0" : "")+(new Date().getUTCMonth() + 1)+(new Date().getUTCDate()<10 ? "0" : "")+new Date().getUTCDate()+(new Date().getHours()<10 ? "0" : "" )+new Date().getHours()+(new Date().getMinutes()<10 ? "0" : "" )+new Date().getMinutes()+(new Date().getSeconds()<10 ? "0" : "")+new Date().getSeconds();
		var tab_text="<table>"+bufferc+bufferb+"</table>";
		var enlace="<div style='float:left;padding:10px 0px;width:100%;'><div style='float:left;padding:0px 5px;'><a download='cuadro_"+fechayyyymmddhhiiss+".xls' href='data:application/vnd.ms-excel," + encodeURIComponent(tab_text)+"'>Descargar excel</a></div><div style='float:right;cursor:pointer;padding:2px 4px;background:#600;color:#fff;border-radius:12px;;margin:0px 10px;' onclick=\"this.parentElement.parentElement.parentElement.removeChild(this.parentElement.parentElement);mitab='';\" >X</div><div style='float:right;cursor:pointer;padding:2px 10px;background:#080;color:#fff;border-radius:12px;margin:0px 10px;' onclick='aexcel("+libro+","+alumno+")' >Refrescar</div></div>"
		if(mitab=="")	{
			mitab = document.createElement('div');
			mitab.style="z-Index:999999;opacity:1;position:absolute;left:0%;top:10%;height:calc(80% - 2px);width:calc(100% - 2px);overflow:auto;border:1px solid;background:#fff;box-shadow:1px 1px 50px #000;";
			window.top.document.body.appendChild(mitab);
		}
		mitab.innerHTML=enlace+tab_text.split(" ").join("&nbsp;");
		mitab.querySelectorAll("table").forEach(function(tabla) {
			if(tabla.innerHTML.length>0)	{
				for(var i=1;i<tabla.rows.length;i++){
					for(var j=0;j<2;j++){
						tabla.rows[i].cells[j].innerHTML="<div title='"+tabla.rows[i].cells[j].innerHTML+"'>"+tabla.rows[i].cells[j].innerHTML+"</div>";
					}
				}
				for(var j=0;j<tabla.rows[0].cells.length;j++){
					if(tabla.rows[0].cells[j].innerHTML.indexOf("p_")>-1)	tabla.rows[0].cells[j].innerHTML=tabla.rows[0].cells[j].innerHTML.split("_")[1];
				}
				for(var i=1;i<tabla.rows.length;i++){
					for(var j=0;j<tabla.rows[i].cells.length;j++){
						if(parseFloat(tabla.rows[i].cells[j].innerHTML)>0 && parseFloat(tabla.rows[i].cells[j].innerHTML)<50)	tabla.rows[i].cells[j].style.color="#f00";
					}
				}
			} else {
				alert("Aun sin evaluaciones")
			}
		})
	}};
	xr.send("modo=excel&libro="+libro+"&alumno="+alumno);	
}
function resizableGrid(table) {
 var row = table.getElementsByTagName('tr')[0],
 cols = row ? row.children : undefined;
 if (!cols) return;
 table.style.overflow = 'hidden';
 var tableHeight = table.offsetHeight;
 for (var i=0;i<cols.length;i++){
  var div = createDiv(tableHeight);
  cols[i].appendChild(div);
  cols[i].style.position = 'relative';
  setListeners(div);
 }
 function setListeners(div){
  var pageX,curCol,nxtCol,curColWidth,nxtColWidth;
  div.addEventListener('mousedown', function (e) {
   curCol = e.target.parentElement;
   nxtCol = curCol.nextElementSibling;
   pageX = e.pageX; 
   var padding = paddingDiff(curCol);
   curColWidth = curCol.offsetWidth - padding;
   if (nxtCol)
    nxtColWidth = nxtCol.offsetWidth - padding;
  });
  div.addEventListener('mouseover', function (e) {
   e.target.style.borderRight = '2px solid #f00';
  })
  div.addEventListener('mouseout', function (e) {
   e.target.style.borderRight = '';
  })
  document.addEventListener('mousemove', function (e) {
   if (curCol) {
    var diffX = e.pageX - pageX;
    if (nxtCol)
     nxtCol.style.width = (nxtColWidth - (diffX))+'px';
    curCol.style.width = (curColWidth + diffX)+'px';
   }
  });
  document.addEventListener('mouseup', function (e) { 
   curCol = undefined;
   nxtCol = undefined;
   pageX = undefined;
   nxtColWidth = undefined;
   curColWidth = undefined
  });
 }
 function createDiv(height){
  var div = document.createElement('div');
  div.style.top = 0;
  div.style.right = 0;
  div.style.width = '5px';
  div.style.position = 'absolute';
  div.style.cursor = 'col-resize';
  div.style.userSelect = 'none';
  div.style.height = height + 'px';
  return div;
 }
 function paddingDiff(col){
  if (getStyleVal(col,'box-sizing') == 'border-box'){
   return 0;
  }
  var padLeft = getStyleVal(col,'padding-left');
  var padRight = getStyleVal(col,'padding-right');
  return (parseInt(padLeft) + parseInt(padRight));
 }
 function getStyleVal(elm,css){
  return (window.getComputedStyle(elm, null).getPropertyValue(css))
 }
};	
</script>
<style>
body {
	margin: 0px auto; 
	padding: 0px 10px; 
	font: 12px verdana; 
	color: #000; 
}
*																	{box-sizing: border-box;}
td																{padding:5px 15px;text-align:left;max-width:200px;overflow:hidden;}
th																{padding:5px 15px;text-align:left;background:#009;color:#fff;max-width:200px;aoverflow:hidden;}
th,td															{border:0px solid #000;}
table															{border:1px solid #000;width:calc(100% - 4px);margin:2px 2px;margin:0px;table-layout:fixed;}
tr:hover 													{background-color: #fc8 !important;}
tr:nth-child(even)								{background: #fec }
tr:nth-child(odd)									{background: #fea}
input[type=text]									{width:calc(100% - 42px);}
button														{padding:0px 5px;;border-radius:20px;cursor:pointer;color:#fff;background:#f00;transition: all 1s ease;}
button:hover											{background:#00f;transition: all 1s ease;}

button.btnsalir											{padding:0px 15px;;border-radius:5px;cursor:pointer;color:#fff;background:#a00;transition: all 1s ease;text-shadow:1px 1px 1px #000;font:bold 14px verdana;}
button.btnsalir:hover								{background:#f00;transition: all 1s ease;}


.btontop													{padding:0px 5px;margin:0px 2px;border-radius:20px;cursor:pointer;color:#fff;background:#ccc;transition: all 1s ease;color:#444;}
.btontop:hover										{background:#f00;transition: all 1s ease;color:#fff;}
.divtitulo												{color:#fff;background:rgba(0,0,0,1);padding:3px 0px;font-weight:bold;letter-spacing:2px;}
.divcaja													{border:1px solid #ccc;box-shadow:1px 1px 10px;margin:10px 5px;;overflow:auto;;background:#ccc;}
::-webkit-scrollbar 							{width: .75em;height: .75em}
::-webkit-scrollbar-button 				{background: #000}
::-webkit-scrollbar-track-piece 	{background: #00a}
::-webkit-scrollbar-thumb 				{background: #99f}	
.link															{margin:0px 5px;opacity:.35}
.link:hover												{opacity:1;}

.highlight												{color:#f00;border:1px solid #f00;}

.docenteinternet									{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC+UlEQVQ4y63TT2icRRjH8e/M+8777mazTZNskkbdSJuQYtJdiVCtoYfWU/9I9ZCTkOLNk6AgpSd7KBQEQTx4M4cQhNysgoh/sAex6qHUdGMtkqgLtXXTJmk27b5vZt+Z8WKWthvNIn3Ov/kwz8zzCO6rz+b/cp/O3+DnygpLtYjOIENxVxcvF/s4XugXtFCN0KmLH7mFq5qaucNS/jZx2xr1S0fwpCGViTg84vPewQnREnh6+az72J6nbXEvXqWbqLIfXe1jIGWoDX9NdfR7jKrzSnqCt7On/xMVMz9dce+oM+jeMt6NPfDtBBtrj4OT9Ix+RWdmnX4hGap201PtxkOC5Qcp5ayU8pNisVgeGxtzm6D/eekOfv8A/q/PEJWL1O/mAAizy7Q9scD47wX6VncC4LAkWIADwHOe550olUqvA1c3QTlXNty7fAxzfTd+vkTQVQYgE64z/se+BrZVd8aYF7TWZ2ZnZ3sbIIDZaEebDuzIj3DiA9TgJfJRF70rPdv+qrX2UBzHhxrgU7vaAUhqO/EX9yOsj6hl6fFiQmFbmZQOa22hAb64rw9fCpyVcOsxxLVx6ku7kThaGjzAOdeIylcPDIijw1kA4ptDiF+exxnFUpJiw8pWvDXP8+YfeMP3JwriyNAOUl5AtN4NwG+6nZsms60mpfwunU5/07Qpm6t3/kqFuT+rrNTqjHRYDu+4RcbcxdkH31MIUZdSXgzD8M3JycnLW4KbNT09nXPOjSql5pIkGUyS5Ki19qAQYvCfyIIQ4kIQBF8YYxaBp4MgWMzn85UmcGZmZjiO43edcwWl1IVcLvdGtVo1URR1CSEyQgiAe2EYLqfTabe6unrOGPOSlPJaEARv+Q+DSZKcs9YeB6TW+mSlUnlWKfVhKpX6Umt92zmHUqpTa30siqLXjDEFwDfGPKm1jptuODU1VU2SJNu0FkJoKeUy4Ky1Oedc8HDG9/26v8XB7L/MWmCM6d9mHpXkEdcjB5taVkoZIYT3fzDP8/gbASw5Ecp+kW0AAAAASUVORK5CYII=) left center no-repeat;}

.correointernet										{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADBklEQVQ4y62UzW/UVRSGn3tn5teZ6bRCh7ZO29gywVCBQFAjrSYqQVxYRP8AIq51q9GFJsrCj43xPxA3mmiMrqAlKOAHYAiBIHE6hWo702k7IEPtfN7fxz0upJFJO02aeLbnvE9y7n3Pq9hAVXIzYktLqO4eOvr71Foz4Y0AvR9/pvzpJ6jEppYzGwKiNYEVpGFaj6ynn76RkZs/nZPl69elvrAott4gdvB50hd/Ua00TY1sNiPzhQK3i0XS6TSlYpGP33mXj4Z3kEo9SDU/R9z3iY0+iTgRRGtqCwX8aIxtx46pVSsb45LL5Tn84kughESsnc6uLk5fucLLV2GhUuWhvhTexGm0UlgB3/q4pk7h+OfS/+pR1bTy7VuLDAz0E9gAjaYjHOaFAwdZ9Axxp41YpA0dBES8Ko7vEtVCIhYhkYgjk783v+HlS7/KjUyGocFBbGCp/DnDzJkzFP6YJrmpC1HQ5oRAC1ghsC7WGPyGAc/DVivNwOnsJNFolHg8jmAh1obruZTrVe7WymilkZDG7wyt+Qki0gxcnJtneelvrAi+MRCPM7B/P0uVKoEFQehuT9BebXaaABZZbZvNyc0slUqICILgmgZ3irdo1GoEgUUpRUiHUPcZYwUjSq0GPrJ7D26tAdZiBQLPJfB9At/HtxYFKKVR94lF/YtVwL2N/7PN4/tGVT43K4FxQQIC4+K7NdxGAy/wsAihexCrQ/hRh3BPL3pLN8bUcdLp1cYGuHhqQrxKmTvZKWbPnqWUmWL31kEeO/oK7Tt3cXUqy7WpaUaeO8BTzzytWt7y7LXfZPzDD8h9+x19Pb2kOzqQ+Xme3THMwPvvkdw3ogAunT8vW4wh/fC21rd87rXX5eShMbY7Efbu2klveRnn5ClG3nqbPePjagW2spPjOKDWPmf9w9iYROfmOPTmGwymUgRff0MsmWT4+wmVOnJkTZXSrUMq3LP3Ucxkhr9OnKDziVFSxz/jgaGhddJEoZTCWsv/UpcvXJCvvvhS8vm8bDgPW+WdWqf/D8DOW1M8Fk5kAAAAAElFTkSuQmCC) left center no-repeat;}
.docentelocalhost									{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADAElEQVQ4y63TTWyURRjA8f/M+7G73S4VdrdNqytmi6AhW2wCiCmaWiUWTAHDoQeIBz1wMjGxCUdNNByqHvRgYmITm15KOBASlVi0jTE9QKKJlBQNlGQtSrZQWra279vZd2a8yAZYSDeG5/zMb+b5GMFdMfjpVfvN2DWmLy0SWcuz+SwH+1o4NtAuqDOqiW8NfmH/viiY0yWW2qZZPLeDf/7YQkPLDXp6Y5wcPCLqBo9OHLaT82dxL+wmmMlz/ZfnSAatZLsmcfecoNJ4i54nXuOzF75eExWfD5+3X4ZvI9Illn/s5fqpQ6wuNpF5ZobcvnEaGy35pxRb1DaaTStYoYBfpZSjUsrTHR0dxc7OTnsHdE+fuo3OF1gtHuDaeBdRkAAgtf086/KzvGp6yS6lAYjQAD6wC3jecZz9U1NT7wDTd0B57meYPXmIlcubaNl7hlhTGYB1SejiRbI2/dDqtNY9Sqn3R0dHm6sgwMqNNMpIHnvjBBvf+xg/PU/qQh/Z4Mk1h2CM6Q7DsLsKFramAFgqtqEvd2CDBmyY4PG2VeJeXYNtMsYUquDB/c24rkBXXNTVp5n7to/KcgNS2npXD2tt9WZ5bCAvul9KAjA3tofgyiYAZv+KEYROPd5tx3Eu3tPDs99tF6+8nCS8tQG1Egdg+lIDxT8Ta2pSyslEIjF+Dwjww5kd4qMPcuzaGSeZrLCqDMXZVoxdjxAiqhmxEBXHcX6KxWIf9vf3z9V8vbtjeHg4Y63d6nneb1EUtUdRtNcYs1sI0f5fyhUhxITv+99rrWeAbb7vz+RyuVINODIysjkMw0+stQXP8yYymcy75XJZB0GwQQiRFEIALMdisflEImEXFhaOa60PSCl/931/wL0fjKLouDHmdUAqpd4slUo7Pc/7Kh6Pjymlblpr8TxvvVJqXxAER7XWBcDVWm9USoU1LxwaGipHUZR6QM+UlHIesMaYjLXWvz/Hdd2K+4CDqYfsmq+1bl1jHz3JI45HDtaU7HmeFkI4/wdzHId/AZR1M5cXz1D/AAAAAElFTkSuQmCC) left center no-repeat;}
.excellocalhost										{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD5ElEQVQ4y42UbWiVZRjHf9fzPOdleubL1nSThWdnZnNu2NRJwzR8mUvFF1SIUIoiCsJAQjDpDSMiLT/Mog+lpURKiEpZas6mbNOZb0MzS1PTnOlSz3Rnb895Xq4+nDxuqNj17ea++V3/67r+1y30iFWrz+v3u5s59dtNXFVGxHKYO2swy5YWCv8z0g9fWPWp/n1S+MdrITHkFDd/Lqf99KP0GXyNyU+F2Lxqkfxv4Mt7F+r+GzVYJ56g61yMK0cfo29XHjnj92NVfoMTiTM5v4rqivUPhBprNhzShjMnALh1LcLFnyaQuJCPO/ACZvQ03qVh+OJSd6WGNY3v6wMVTplbo5djX2JfjNFcO56QkUF4QDvZ07cQLjiP2x5GHYOkrXi+hwBTomOyP3/1g/g9gZHsGtU+bUQGJug/6VvUsElKkvvVlhEMU5wXqzPEcABSkhVV6LC7WiyAzmvZBPt34EoCHxDtOa47EbKCuJ7LZ8+vmNivTwQFfN9DgXAgxJubq7FKR2Zy8FA3iYtDyDINUD+V9h7QpOegqox792kWVcyitTPBD8f34Sscf28bANbc2YM4cuwSrmPdURII8FBmFpfjLWRF+jMyr5D6s8dQVUSENQvfoHDww7iex+zRk0AhIxhCRLCWLY1J5Ywjuqe2PQ3MDEfYs2wdCz5ewvzRlWSEw9SfPZbqliqvbVrJMxUzudWZYPevBxAMGt/6OqUQoGbHWJk6/bD++R/wensrmxp38FzFHKaWVjC7enEP4wor5i2mKC+G47lMLn4cz/cIB4IIQrrOPTvLpbB4WtpnX9RtYd/yDXzXtJfm+NV0TxVl9c71zC+fRkd3J7tONqAKU0dW3FHYy0cimGIwtqCElrYbjI4WY5kmrueBpu5fnDCPUUOLcDyX4blRQAlaARAwesJMwyRkBRExWFL1LG9v+wRffeaPmZZeVN/z+OrAdhrPnaD290Osq9/K2rqtJN2UA3optEwT203ySG6UhjNHqT11kH7hvswc9SSbD/+I53qAsGBcFWXRYmzHJiczC1QJmBYi0ttpw5ZWqet7iAiqd6+t+ooYQmn+cGaMmkiH3UX9maOgsPGVD1m5fW1vhbcht/12+2waZmqPjVT+8lgpBTn5dCa7Sfouvp9aBl/9u4fSEy4IASuAquLhpW0zPHcoXY6NAEW5Bdi2za5fGmhubUn2Krlk+ZwVvvqlipYkXSdqiAREhKTr9HJBSAKVrd3tbYYII3IKBvxx/VKb4zv+kAGD4vf9MF/f+FHGuevNRX/Fr5Z0O/YI13dLk65TZBpmTlXhuFj1S+/Em5qasoDWsrKydMP/BZFVrkl1nWR5AAAAAElFTkSuQmCC) left center no-repeat;}
.excelinternet										{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAD60lEQVQ4y42UW2yURRTHf/N9314KLWKhtlUuvWgtbRdSEEKjYlCgRhQMNFHReEmMDwQjUaMQFYPyIFFjqsYHBaJpABPuIAqGAGkJNRBauYYgfVCq6ULZ0pbu7neZOT6srG24hPM2mZnf+Z8z/zOKQbH7VJfsPPUPp+MJLiZT3BkezsSifJ6eWMjcWLHiNiJ76J3D6+X8GY+kvsLFsd2kh/XiH3sc29JEh6eYWeXwxUMN6raAyy5/LNvMdoZ13I8dH0UqPhWvr5BxUU2yYh991a3okM+inAZW5C27JdRq+v2E/NTVhiCkczwGLjxI6lIpOp1L/z1HUI6HlSjGKMOm1HY2p3bILRUuamqWM8VboH80qT8n4qRH4XCVwO4gNG4fbq+L1W3jXvHRWqOAx0qmjPru9U8SNwRWrzogXsQjGr1E0L0DPTCAazxuVldOOEpVcVmzpSwfICNXEIEBNxV3ALSbixfy8Ht7MOq/xt6AGHHCBDrg21dWzhgxLBcBjNEIEA1FeH9TI86EolzaujyC5EiUbYGYTFq5HuppHxFh2kfP8ELdU/Qk+9l9/CBG4PiqbQA4T9YUcuJiJ4GxsvcjoRCj8/L5OxEnP/cOqovLaTnfhoiglOLL59+jvHAsgdbMmzwTBHLCEZRSOC9PH6fe2HxSdp3tyyrJi+ay7921NHy1lIWTZ5MTjdJyvi3TLRHe3Lia5+rm0pvs59fTh1FYtH6wPqMQoLEhphb/eFL2Hs0Au6/2sLH1Z16qm8+sWB3zGpcMMq5i5YIlVBaX4euAR6umo40mGgqjUBkgwDfPxlT5W3OyHlvXvIWDy39gZ/sBOhNd2Z4Kwue/fM/CqXMYSCfZc+oQIjCruu5/hUN8pBS2snigtIZ432Uml1Th2DaB1iCZ/VcfXsCk8ZX4OqCiqAQQwk4IFFiDYbZlE3HCKGWxtP5FVmz7GiOGhVPmZAfVaE3T4V20dpxg/9kjrG3ZyprmrXhBxgFDFDq2jRt43FdUwqFzx9h/5jdGRIczd9IjbDq6Fx1oQNEwrZ7akipc36UgLx9ECNkOSqmhTrv37XoJjEYphcj1IytGUJYiNqaCJybNYMBN0XLuGAhsWPwpq3etGarwGuSa366tbctGG42yMvmnlsUoLRhD0kvjmQBjMsNgxFz/KIPhCkXICSEiaHTWNhVF40n5LgqoLCrFdV32nDxEZ0/cG1JyzfL5K42YmCA1XuCXWEqFlFJ4gT/EBREVmt2TvtpnKcWEgtKRf3Rf6PONb+4eeVfipp/lsg2f5XR0d1b+leiqSfvuhMAEMS/wK23LLqgvn1bW+NqHifb29nygp7a2NtvwfwFACL3iCRnUlgAAAABJRU5ErkJggg==) left center no-repeat;}
.palocalhost											{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEZ0lEQVQ4y32UXWxTVQDHf/f2du1uu7aj29gHSDe2OIURlQ8xESLBoTxAMCYSoyYLDzyYyAsJbxoe8IEQMUr0ESIQEYwhAgYDGiJCItARwLlPxra2a+nX2vVj97b39h4fKptT4//lnJOT/y8n5/8/RxJCCIBUWufEVzEuXYkwOJTFFIJnOhrZtWMpe/paafA7AdA0DdM0UdVaEo/jtLS18XcpAKPxCQ6f/JHogEShIU797kGyt9Zzb1hiNDNEMOHg8IFNtPufwuFwYBgGRiFOKvkfwGy+yNGhD7ndcRWl8DLaeAfxiztxaS10bb2J0nuWYfcMn429xsfeY7gUNx6Ph1xoCFWR+KfkU+cHuTH6AIDZpJupnzeRn1yGWT+JLTBCJdyJJZlcj13lePDYvLGcDaM6ZYzs5GLg9+dnqYz0UDyzl8g3b1PKegFwr7tNqb0fyZvGHl1JoX8tP0/cmDeas5M4PC2I6C+Lgbd+hfC3bzI31snS7ZdxeHMASPYSEgpG2yjl6eXEvn6Xu1/2zhsrmXFM06QSubYYCDCX9FO2ZHxvnGXF/iPU+NNMnOgjfrIPSUjM3F1LMdbEzB/PVk9XTCL0NIqRRtFClNOjC8CeVXUA5KdaqYytQWgqQq8FQI83I8cDZO6vAqA7oFVdmQEqlsCuTSIsEyJXFoC7djahKBIVQ6H8qIvEDzswimoVmGhk4vMPKOfqUBTY9lK26krdA1mhppxgbq4I4cuAqAL39LXwymYXAIkrvWgPOxfuSXdQCC0DYPM6jbe2zVQ3kncAGcmuYpomNcWHlJODVWCD38knhzvZusWFPrOE8pxzcVEVia1bXBx5f5h6TzVdRZ8G2Y4kSdg9yylYHghdWgilZ7WXM6dWc+jgcjZucOJyGbhcBhs3ODl0cDlnTq2mp2EAZDvEb4JlICQbIFFXGqO04VMyU0FAVJ8eQIPfyYH97RzY3/6v9ldKeWQ9Cq51MH0NLAPJVgNWGdkqUScSWK8fJ5dJLQD/T9bsODbLxCgmmUkNYEhuCr5WisoyJmveIfG7jPVwkJYWL9KT36ZcLqMoCrIsI4RA13VsNhuyLFOMBMmFfiPjfAHFHSASSREOZwmFkszOFmludrNv3w5UtRbFMAwKhQL9/WOs7GzCU1eHbOZI3TyKv95LuG47FbmRzHiRB4+uEiu30+HoZ6TwHMKSaLLf59XevahqtbtSMDgiLly4jqraUBQb+XyF9W0hWj2zNFbGGdSfRtcEshbFkFS6PNPkNIHfZTGa9lFfk8Vdayew+zQ+nw85Go0TCDRis1UoFnVWrPCRS4wj0oPcmQKfS6HNMUmXZ5pudRB9yYvEy0vIqM/T4plDE040zxrcbne1NrHHGaKxMF5vLbpeYmIiAp5m4ko3Zn0PtlSQ2KxMsvsjhvMtpKfuUVIDxPMyU3kvMbqYU5aiKH/le/r0d8KyLGFZljh37qLQNG1+PTEcFD998Z6Ixx8LIYSwLEtUKpX58cncsizxRH8CZA0wsgfQdosAAAAASUVORK5CYII=) left center no-repeat;}
.painternet												{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEYUlEQVQ4y32US2xUVRjHf/fOnenMndvptKVMHxTa0vIqLUiCz0RjEMNLwJULw1ZWsnHlhq2YGFzh0hUrjBGQpAQJRCIq0ioIlgItbWemj3l13nPv3Mc5LiqtlcT/5pyTfPnl/+V/vk+RUkqAiuVwa2qJyw/n+Su1RLpm0hwIM9zewvHhGG/2t2IE/Zimieu66HqI9GKKjq4u/i1FSikz7hJf3L3K5LhNzSuQ7s5i6UWcsQP4VI9g2OTtHRqnX91PRDGoVCoEZJmn0ymGdu9ZA9TKdZOz1a+4NHARXd2KL9VKPbkXpxRjY9CjtuUGpcFfGPE7NJuTfBL+mEgkQin+CF1T+K/USxOTXFn8HYnECtlUE29gZnrxLINy128omo261IFQBN+YFxmpXwfALiTQgypOYWYtcORBAW1hI/pP7yNunqBe6AapEmjMUd0yRmHDE/xCRU9swHs2yHe5GwC4xRkaIh3I+R/XAu/PelT/OISX7EXrfkCgZRYAGSgj7TBCr2KuS6Isbsf5+TjjVwYB8PJTuK6Ll7y5Fgjg1Q1srwmx4w4cPYd/8xhOrgf76kmUZ7vACWPODePVWrCzA7jVDNLKoTk5NDOOnXuyCtzebiy3UIuiTe1FERpKrREA4QXwFTtRk/24uXYAtrcbkH+IJyR+cwYpXEheWwUe2RlDUxWkUCHTiTLxOk66d6XAntyFfecowg2iKZIjO2OQvQeqRsBOU6tVITECyGXgsaEYB7csO7IW+lEevYb0/CtAt9qCZ0YBeKs5xbGhGGTuAiqKX8d1XQLVSezM+DIwqgf49J3NHOiPEPQFMMutL/ytsF/h3bYUJ3vnMJx5NGsOVD+KouCPdFMREYhfWQ0l1hTi82NbOXO4j319BusaBKpXp7VBsK/P4MzhPj7rvca6kAKp2yAcpOIDFBrrT6m//CX52VFAoj13YQT9HBqMcWgw9oJDr15Gjc9SbNgFczdBOCi+AAgbVdRplGnEga8p5bOrwP+TKE7hEy5ONcNS9iGOYlCJdlLVNjAT+JD0AxUxOU5HR9PycgCwbRtN01BVFSkllmXh8/lQVZVqcpRS/FfywT1oRg/JZJZEokA8nqFYrNLebnDq1HvoegjNcRwqlQpjY0/Z3L+eSGMjqlsie/ssrc1NJBoP4qlt5Keq/PnsBxbsXvoaxnhc2Y0UCuv993ln/0foemh5fY2OPpaXL99C131omo9y2WNvV5zOSJE2b4pxayuWKVHNeRxFZyAyR8mUtIYFT3JRmgMFjJCfng/OE41GUefnU/T0tOHzeVSrFps2RSmlp5C5ce7OQjSs0dUww0Bkjm36OFbLK6TsFvL6S3REapgyiBkZxjCWJ05dWMwzv5CgqSmEZdWZnk5CpJ2Utg23eQhfdpSFokpm22kmyh3kZu9R13tIlVVmy00sMEBNi6Fp/+R7/vy3UgghhRDywoXvpWmaK+/piVF5/dwJmUotSimlFEJIz/NWzud3IYR8rr8BGJ47+DMTWUYAAAAASUVORK5CYII=) left center no-repeat;}
.localhost												{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADyklEQVQ4y51VXWwUVRT+7vzszA61u9vd2a0F+icNNsWmrFYopAoiRpPy40/aNNUgNhoffBHfCIk+YAzRBxNfNAgPaAOaSqSpBgU1IHFRIi39s6kUWml3293uLrNbZndn5871oSl02toQz9PJ+XK+3HPuOd8hWMaaW88U9PaRttgM30QI36Dr1AsAisLHGaMhv5rrrg+OdXx54sDs4lyyOLBh4zevj970HDbyxO/ya5BW5aFnc8g7ckDci4zmBgDIshVdV3n7UP/VF44uzOfnnZpOlfdGP/ycFMXeqSzTEtub/3AYngmHoz6Ewpc/hVoWxdRP28AsAc4CHdSwViWSzl31rRVrJ3ovdC15YU2n+j4H7iABgfhLM5MSqnmHGWLGmYaRdGPy560wDREVjdfg2/0VDHUCIpOhi0kAeHPwpdhnAMABwHNvHX5VgHDQggUKCt0/TNLPnhCzsoa/T+7F+NltMA0RjVtiA3IgDDEbQF7IzJMBwCc1neomAOCaW78tGLhcfMSEea8P1f0wL+7E2PdP2/qbqryywdVwlWXV6+lFrRcBfFzTqXJCbx/Xxh655r/XVAGJL/Zj8twzS35f9I8hfGE9kSb28qxIh7TvIzBizcObATQJsRm+yTveAGf8EqJdLSCRUkwOlSwhK6kbQS54EQVBCs7iFUUrQzZcBUnKIDlcA2nrj2CE7hMI4RtGe0pQzO1H8ZbfcL2vFDxvgVLORlj4xHlQUACAxVHonnFI/zQiHnFj7FQL1pky5LT7SZ5xrUcodWA2EsD0lSC8q1P58g8O8O7V00j118Kic5NFDB6iKECkCpgrBgYGyxuG3tUOLeKBHnYhNRpQeEFqe49Sx90p8jzaw4uP/Qqu9AbUur+g31oLI1EEfepBJH5/HHy6EM5NlwAA5p/bcaPrqTl/1gViCuAUhY8vLM2YLAOfl+ZKKxuCUhK2lR7tqYPDfGCOZKbYhikKH+cYo6GFwenBcmTOtgAAHLMBZEeqbUmMcpBMF4Q7Htw6vdOOMRoSVB/tvq2hybbgubl9jZ1+HqmIakuyLAItFIQ2VAUjq9gwv5rr5upqWYcsW9GFQPqmBxipR/jcjuXECMPHXkEktNkWk2UrWh8c6+AHB04ZD1fv1mbizl3zq51NeBDwWZgeLMf9GCEM66uSb5//of3yXXHwrzlzLDbjeg3/w1Sfdjw6safdJl9VlcPfWWhYk8lIG5eRyf98mepLHS/xvfvG1NQUW1Fgs1nOvxKZLFvRhyqShwZ6Xjy6omLfzwlQfbS7rpZ1fH1yz5IT8C9Za5GfovJZTQAAAABJRU5ErkJggg==) left center no-repeat;}
.internet													{display:inline;padding:10px 10px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAYAAACNiR0NAAAACXBIWXMAAAsTAAALEwEAmpwYAAADmUlEQVQ4y51VTWhcVRT+7r3vzf9PwiSTmaS1aGCaqUlgRsTUoGLBuugEG/zZVFCsLS66KLhLs2jRCl0Igt3YaHahOyk22Vl3OoiJaaWGNmkTJZKZefOb+Xkz896797oYEmeSEopndTkf57uH7xy+Q/CEOH/9tudBmZ4pmkqCMHa8YYoAADhUmpecJ7tZc/6ouT43c+VidW8t2Zs4cfXWuRQJfG5IEnQ5ylBtFuqmAcNtQin4YXI/AMBOhdaPwvSdqbdm2uvZziOSjbOhw599y92FT3u0UmFkYMlW783YzOhdNF6/Ca87h/rqGAAGG9VhGcJdgWsidjZ6eP37H3/Y12EkG79KQaaIoOhJvinpos+qDzZVq8eCqPtQW3sBXKoIDKyAjM5DD2lQuQ01ZwUAPlnt/f0bAKAA8PbNLz9UBJsSkOCUY7tvg+Q+XlB5l4HSvZMor46BSxWjNH2fujNwWr0wbM0dMgD4OpKNvwQA9Nz1256/tOA1i/JdHYzn1uBcfhnltfEOfXPRlWEWXZElz9+VPdKrAL6KZONUeVimZ+rRh8FdUSUDuzOJwvqr+6YvnJso//ks8W6eYPawge2Ts5BE7MBjABJK0VQSXekYmplF8PsJ2DJh5CqhfWT+4DqK8WVwwlHk1OXLh+HMPAOm6zDrQzCO/QxB+AcKYex4Oh+CO/kOXANLKG2EQSEgWvL+F5FfwElLFsEEysEUupbi0C0/avcS8HM7nDn3a8z/yvvXBLPBrPVC3xqGz10xyXtfMKdDA09FIWSLmDQIFMZgMx2wPEVISBiBLFxL70Kv+WHkPGimAy6lc80peGhTNdw1GLEknH0a9F8nwbUjaGgjgDYCT98fwOnHreXeeBH5bH+r68YABK+BOlSa7yAtDUBpqACAev9jKN5MB6xnn4fddLf+r/Z0YA6V5qnkPNmerOQOwXH3FADAWQmApAb3jJrCaXhhq/lQXexcK8l5UulWrfmaQKIdULivVfvbG2jogU4+EFgPjgFbR8CJqwPrZs15OuQTc3YqtHagkfLC9c8o9EfjTzIjlBYnoW/FO3J2KrSj5vocvXFhohqW+WlIuQvW84PwPhpuTx0cUiIs89MzVy5Wd80hdnnhu22l6yP8j/Bbpdnly6fOdthXqLSy4IiMH2oSewyEPHVnfr49K29dOp9Op+WBBtsUNHgQl50KLSzz0z9dOj1zoGM/1QlQrfkhn5i7cWFi3wn4FzFolVtZhiWEAAAAAElFTkSuQmCC) left center no-repeat;}
</style>
<!--HTML																																																																																																-->
<body>
	<div style="float:left;width:100%;overflow:hidden;text-align:right;background:rgba(0,0,0,1);padding:5px 0px;" id="" class="" ><button class='btnsalir' onclick="document.location.href='index.php?exit=si'">SALIR</button></div>
	<div style="float:left;width:calc(030% - 12px);" class="divcaja"><div style="float:left;width:100%;overflow:hidden;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablacolegio')">+</button><button class="btontop" onclick="retira('tablacolegio',this)">-</button>COLEGIOS</div><div style="float:left;width:100%;overflow:auto;height:100px;" id="divtablacolegio" class="" ></div></div>
	<div style="float:left;width:calc(030% - 12px);" class="divcaja"><div style="float:left;width:100%;overflow:hidden;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablaaula')">+</button><button class="btontop" onclick="retira('tablaaula',this)">-</button>AULAS</div><div style="float:left;width:100%;overflow:auto;height:100px;" id="divtablaaula" class="" ></div></div>
	<div style="float:left;width:calc(040% - 12px);" class="divcaja"><div style="float:left;width:100%;overflow:hidden;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablalibro')">+</button><button class="btontop" onclick="retira('tablalibro',this)">-</button>LIBROS</div><div style="float:left;width:100%;overflow:auto;height:100px;" id="divtablalibro" class="" ></div></div>
	<div style="float:left;width:calc(100% - 12px);" class="divcaja"><div style="float:left;width:100%;overflow:hidden;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablaalumno')">+</button><button class="btontop" onclick="retira('tablaalumno',this)">-</button>COLEGIOS/AULAS/ALUMNOS</div><div style="float:left;width:100%;overflow:auto;height:200px;" id="divtablaalumno" class="" ></div></div>
	<div style="float:left;width:calc(100% - 12px);" class="divcaja"><div style="float:left;width:100%;overflow:hidden;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablalibroalumno')">+</button><button class="btontop" onclick="retira('tablalibroalumno',this)">-</button>LIBROS/ALUMNOS</div><div style="float:left;width:100%;overflow:auto;height:200px;" id="divtablalibroalumno" class="" ></div></div>
	<div style="float:left;width:calc(100% - 12px);border:1px solid #ccc;box-shadow:1px 1px 10px;margin:10px 5px;;overflow:auto;" class="divcaja"><div style="float:left;width:100%;overflow:hidden;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablalibroalumnorespuesta')">+</button><button class="btontop" onclick="retira('tablalibroalumnorespuesta')">-</button>LIBROS/ALUMNOS/RESPUESTAS</div><div style="float:left;width:100%;overflow:auto;height:200px;" id="divtablalibroalumnorespuesta" class="" ></div></div>
</body>
</html>