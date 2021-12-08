<?
session_start();
if (!isset($_SESSION['pagina']))	$_SESSION['pagina']="0";
error_reporting( E_ALL );
// error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
// ini_set("display_errors", 1);
header("Content-Type: text/html; charset=iso-8859-1");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
set_time_limit(0);
date_default_timezone_set("America/Lima");
ini_set("memory_limit","1200M");
$cantidad=0;
if(isset($_GET['d']))	{
	$_SESSION['d']=0;
	if($_GET['d']==date("Ymd",time()))	{
		$_SESSION['d']=1;
		die("DOCENTE INICIADO. AHORA INGRESE COMO ALUMNO");
	}
	die("DOCENTE FINALIZADO. AHORA INGRESE COMO ALUMNO");
}	
if (!isset($_SESSION['d']))	$_SESSION['d']=0;
if ($_SESSION['d']=="")			$_SESSION['d']=0;
if (isset($_GET['alumno']) && isset($_GET['libro']))	{
	require_once "config/config.php";
	$cn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME) or die ("CN Error: ".mysqli_error($cn));
	mysqli_select_db($cn,DB_NAME);
	mysqli_set_charset($cn,'utf8');
	$cadena="select alumno.paterno,alumno.materno,alumno.nombres,alumno.alumno,libroalumno.libro,libro.ruta,libro.nombre as libronombre,libroalumno.paginas from libroalumno,alumno,libro where libroalumno.alumno=alumno.alumno and libroalumno.libro=libro.libro and alumno.clave='".$_GET['alumno']."' and libroalumno.libro='".$_GET['libro']."'";
	$rs=mysqli_query($cn,$cadena)  or die(@file_put_contents("logs/log_".date("Ymd",time()).".err", chr(13).chr(10)."[".date("H:i:s",time())."][".strtoupper(__FUNCTION__."-".$_POST['modo'])."]-->".$cadena." -> ".mysqli_error($cn), FILE_APPEND | LOCK_EX));
	$rows = array();
	while($r = mysqli_fetch_assoc($rs)) {
		$cantidad++;
		$_SESSION['alumnonombre']=$r['paterno']." ".$r['materno']." ".$r['nombres'];
		$_SESSION['alumnonombresolo']=$r['nombres'];
		$_SESSION['alumno']=$r['alumno'];
		$_SESSION['libro']=$r['libro'];
		$_SESSION['ruta']=$r['ruta'];
		$_SESSION['libronombre']=$r['libronombre'];
		$_SESSION['paginas']=$r['paginas'];
	}
}
if($cantidad==0)	die("<div style='float:left;width:100%;text-align:center;font:40px verdana;padding:20px 0px;' id='' class='' >Cant find ebook. Please use the link provided.</div>");
?>
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>E.T. - <?=$_SESSION['libronombre'];?></title>
<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAE8klEQVRYw7WXW2wUVRjH/3Ntp93d7m673Uv3cmZmba1UGkIMCCjGtKUIEcEQnowvKiBKuERITEg0JCZeIBFSL/EJBWMgBI1aKCCIj0b6UGhREdru9kLpQgO0sLc5nw+FEm1Lt4X9JyeZnJnvO785813OAJNIkYSLAEgWBXIUSTftmnS6vER5Z36l3YNHKGGiyTl6sWRpFckfvz8kd/UOYujaIC50tOPwkR9w7nz7DW+Jsj2WSH2JfKmWFUcal9TTOHFOx346QpGgn5zF8s7J7BtqnUJDrVOYMUB5iTLvzXWv02TqjXdRVI/wMoey8p7NrFDRbLdN/lhTxVaXTR522+TbRQXiObdN3lsZ0OZNtpb8/4mqgFYTS6R2RyLhSQEDwQgOHvxOWLjo2V1RvzaYuJnZEbvO6xvqlwjPP7cYjDEQgM7OzpozZ36rOdpycoNdk34psysbO68mL0zq2ONQXi1UpfScJ6vo2/37aCqtXrWCVEWmbZs30EBfbNLnrvbHaMvba6moULntc6qvTLj4XNMmKLIw0LRnF+18bwf9eurklACfN+2lXR99QLnqi6ZPSZGExOoFZWPxId67qHCp3kyWyhcufAadXd0IhkJTxkqJyw1fIJhzbD29YBEsTqWpDLePA/jj8rAHAEIRhr6+XkTCUwMQ5wBRzgCMMXACfr84HBkHMJLkprPEDqfLDZ5NQVa1HACy08ouu8MJT6kbyQw3xwGkMpxFwmGACJKk5OSQOJ9e1RNFRE2GVIYb4wAEAdHKx6K4MXQNNoczb0WOMR2igKpxAAToTNdxuasrpwAcfSNp+gC6gayF4DgAzokxpqMn3oOooecGIAgz2AEGArH/AKycV6oQoDPGEI/HEcpxBzBTAIK+bK5LGQO4dCXpzVqkmaaBnngcoXA4bzFgGAYyFmnxRNo7BtA/lGaAAF3XEY/HEKgI5g1A13XIkoiBG2k2BpDM8KDfVw61sBiJxCBKS8vyBiApBQgFA0hlKDIGkM6SGTXupia3IMkK8inGGEaS1v0dEAVUG6aBdOoO1MIi5FumYUCVheoxAAKCpmlg4Eo/vD5f3gGYriPLcf8TjNYAA/FYDMFgKP8ATAcRhQBAXL/EX2Bx+Blj6I7FEApVIJsaRnpkCJnkzWk3nFwBMhYFls11aeLPZ68zi5PKdB1d3TFs2rQFRTYXbE4Piu1ueMvLsWp5PT7b8wkSA32PJgZMA0RQ2uN3wuKtpBWxF2vw+/2or6vDmVMt6On6C/29cfTFLuH0iWY0LF2O5uajMKOVeH/HdqTujDwUgNfrg9Nhw0jSMmHXpDeqq6ITHqE4t4hbWeKWRUScOtpaqbFuMc1/ag719cTowP6v6cA3+x5sy60J79fWVJOzWF4vW5xYJDLaG9LJEZw8fhTHjh1Hx/k2/H2pEzyTgiApCIcq8PgTs7BmzRp0tJ1FXV0d1q9bC/fdopW6fQvHW5rR0nICHe1t+OdyN7iVgSipqDQZqmtmY2ljA+rqG6FqNoQiDB0X/gxBU8XDL69YRu9u20w+j5tGs/LBo7BAJVmWyOmw0e4Pd9K2LW+Rp9SZk63P46LtWzfSSy++QAWKeBiFqtiai2E+RoEitopEyH/iPyAjZbsmNWmqOL2GIiJwfTj7GtHoz60gAA5N+koQhGnlqfAw6KV2ZZOmiilVFlIeh7J1pn7+BT1C8f8VTjZYAAAAAElFTkSuQmCC" rel="icon" type="image/png" />
</head>
<script type="text/javascript">
var resizeEnd;
var pagina=<?=$_SESSION['pagina'];?>;
var totalpaginas=0;
var vcontadortd;
var contadortd=0;
var xr = new XMLHttpRequest();xr.open("POST", "lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	totalpaginas=JSON.parse(xr.responseText).length;}};
xr.send("modo=archivos&mascara=../libros/<?=$_SESSION['ruta'];?>/p*.php");
// window.addEventListener('resize',function(e) {clearTimeout(resizeEnd);resizeEnd = setTimeout(function() {cambiapagina(0);}, 500)});
window.onload = function () {
	cambiapagina(0);
	document.getElementById("div_pi").addEventListener("mouseout",function() 	{this.style.opacity="0.25"});document.getElementById("div_pi").addEventListener("mouseover",function() {this.style.opacity="1"})
	document.getElementById("div_pd").addEventListener("mouseout",function() 	{this.style.opacity="0.25"});document.getElementById("div_pd").addEventListener("mouseover",function() {this.style.opacity="1"})
}
/*___ function pad(n, width, z) { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function pad(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}
/*___ function cambiapagina(cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function cambiapagina(cual)	{
	if(document.getElementById("paginas").value!="")	{
		pagina=parseInt(document.getElementById("paginas").value);
		document.getElementById("f_i").style.display="none";
		document.getElementById("f_d").style.display="none";
	}
	try { window.top.document.body.removeChild(document.getElementById("divmascara"));}	catch(err)	{};
	try { window.clearInterval(vcontadortd);;}	catch(err)	{};
	var path="libros/<?=$_SESSION['ruta'];?>";
	var pagina0="",pagina1="";
	if(window.innerHeight/window.innerWidth<=1)	{
		document.getElementById("pagina0").style.width="50%";
		document.getElementById("pagina1").style.width="50%";
		switch(true)	{
		case(pagina<=0 && cual<0):
			pagina=0;
			pagina0="";
			pagina1=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(cual==0 && parseInt(pagina/2)!=pagina/2):
			pagina++;
			if(pagina>0)						pagina0=path+"/p_"+pad(pagina-1,3)+".php";
			if(pagina-totalpaginas!=0) 	pagina1=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(cual==0 && pagina==0):
			pagina0="";
			pagina1=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(pagina-totalpaginas==0 && cual>0):
			pagina0=path+"/p_"+pad(pagina-1,3)+".php";
			break;
		default:
			pagina+=2*cual;
			if(pagina>0)						pagina0=path+"/p_"+pad(pagina-1,3)+".php";
			if(pagina-totalpaginas!=0) 	pagina1=path+"/p_"+pad(pagina,3)+".php";
			break;
		}
	}
	document.getElementById("div_pi").style.display=(pagina>2 ? "" : "none" );
	document.getElementById("div_pd").style.display=(pagina>2 ? "" : "none" );
	document.getElementById("div_pi").innerHTML=pagina-1;
	document.getElementById("div_pd").innerHTML=pagina;
	if(window.innerHeight/window.innerWidth>1)	{
		document.getElementById("pagina0").style.width="100%";
		document.getElementById("pagina1").style.width="0%";
		document.getElementById("div_pi").style.left="50%";
		document.getElementById("div_pd").style.display="none";
		switch(true)	{
		case(pagina<=0 && cual==0):
			pagina=0;
			pagina0=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(pagina==0 && cual>0):
			pagina+=2;
			pagina0=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(pagina<=2 && cual<0):
			pagina=0;
			pagina0=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(pagina==0 && cual>0):
			pagina+=2;ok=true;
			break;
		case(pagina+1==totalpaginas && cual<0):
			pagina-=2;
			pagina0=path+"/p_"+pad(pagina,3)+".php";
			break;
		case(pagina+3>=totalpaginas && cual>0):
			pagina=totalpaginas-1;
			pagina0=path+"/p_"+pad(pagina,3)+".php";
			break;
		default:
			pagina+=cual;
			pagina0=path+"/p_"+pad(pagina,3)+".php";
			break;
		}
	}
	var xr = new XMLHttpRequest();xr.open("POST", "lib/clase.php", true);xr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xr.onreadystatechange = function() {
		if(xr.readyState == 4 && xr.status == 200) {
			if(document.getElementById("divprofesor")!=undefined) document.getElementById("divprofesor").parentElement.removeChild(document.getElementById("divprofesor"));
			console.log("Pagina sesion:"+xr.responseText);
			document.getElementById("f_i").title=pagina0.split(path+"/p_").join("").split(".php").join("");
			document.getElementById("f_d").title=pagina1.split(path+"/p_").join("").split(".php").join("");
			document.getElementById("frame0").src=pagina0;
			document.getElementById("frame1").src=pagina1;
			if(pagina>2)	{
				if(pagina/2==parseInt(pagina/2))	ponermascara();
			}
		}
	};
	xr.send("modo=setsession&variable=pagina&valor="+pagina);
}
function profesor()	{
	if(document.getElementById("divprofesor")!=undefined) document.getElementById("divprofesor").parentElement.removeChild(document.getElementById("divprofesor"));
	window.top.document.getElementById("divmascara").style="display:none;";
	var proporcion=window.innerHeight/window.innerWidth;
	tab = document.createElement("div");
	tab.id="divprofesor";
	window.top.document.body.appendChild(tab);
	height = screen.height;
	width = screen.width-30;
	window.top.document.getElementById("divprofesor").style="position:absolute;top:"+(proporcion<1 ? "calc(0%)" : "calc(100% - 60px)" )+";left:0%;height:100%;width:"+(proporcion<1 ? 50 : 100)+"%;background:rgba(0,0,255,1);overflow:hidden;z-Index:5000;text-align:center;font:bold 50px verdana;color:#ff0;text-shadow:1px 1px 1px #000;";
	window.top.document.getElementById("divprofesor").innerHTML="<div id='divprofesorcabecera' style='float:left;width:100%'>PANEL DE TUTOR</div><div id='divprofesordetalle' style='float:left;width:100%;background:rgba(218,209,218,0.15);height:90%;font:20px verdana;color:#fff;text-align:justify;'>&nbsp;</div>";
	document.getElementById("divprofesorcabecera").addEventListener("dblclick", function (){
		if(document.getElementById("divprofesor").offsetTop>500)		{
			document.getElementById("divprofesor").style.top="calc(0px)";
		} else {
			document.getElementById("divprofesor").style.top="calc(100% - 60px)";	
		}
	});	
	draggable(document.getElementById("divprofesor"));
	var xr = new XMLHttpRequest();xr.open("POST", "lib/clase.php", true);xr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {
		msg=JSON.parse(xr.responseText);
		arr=(msg[0].cantidad>0 ? msg[0] : msg[1]);
		var mensaje=arr['tiempo'].split("]");
		var performancefinal=arr['performance'];
		buffer="";
		for(k=0;k<mensaje.length;k++)	{
			if(mensaje[k]!="")	{
				mensaje[k]=mensaje[k].split("[").join("");
				cadamensaje=mensaje[k].split("(");
				fecha=cadamensaje[0].split(" ")[0];
				hora=cadamensaje[0].split(" ")[1];
				tiempo=cadamensaje[1].split(")").join("");
				rpta=cadamensaje[2].split(")").join("");
				performance="N/A";
				try { performance=document.getElementById("frame0").contentWindow.respuesta(rpta);}	catch(err)	{};
				try { performance=document.getElementById("frame1").contentWindow.respuesta(rpta);}	catch(err)	{};
				rpta=rpta.split("|").join(",");
				buffer+="<div style='float:left;padding:5px;'>"+f(fecha)+"</div>";
				buffer+="<div style='float:left;padding:5px;'>("+hora+")</div>";
				buffer+="<div style='float:left;padding:5px;'>, segundos usados: "+tiempo+"</div>";
				buffer+="<div style='float:left;padding:5px;'>Respuesta: "+rpta+"</div>";
				buffer+="<div style='clear:both;'></div>";
				buffer+="<div style='float:left;padding:5px;font:bold 20px verdana;'>Avance : "+performance+"</div>";
				buffer+="<div style='clear:both;'></div>";
			}
		}
		buffer+="<div style='float:left;padding:5px;font:bold 40px verdana;color:#ff0;'>Performance : "+performancefinal+"</div>";
		document.getElementById("divprofesordetalle").innerHTML=buffer;
	};};
	xr.send("modo=paginas&valores=<?=$_SESSION['pagina'].",".$_SESSION['alumno'].",".$_SESSION['libro'];?>,"+document.getElementById("f_i").title+","+document.getElementById("f_d").title);
	if(document.getElementById("frame0").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame0").contentWindow.document.getElementById("btnsl").style.display="none";
	if(document.getElementById("frame0").contentWindow.document.getElementById("btntd"))	document.getElementById("frame0").contentWindow.document.getElementById("btntd").style.display="none";
	if(document.getElementById("frame1").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame1").contentWindow.document.getElementById("btnsl").style.display="none";
	if(document.getElementById("frame1").contentWindow.document.getElementById("btntd"))	document.getElementById("frame1").contentWindow.document.getElementById("btntd").style.display="none";
	try { document.getElementById("frame0").contentWindow.start();}	catch(err)	{};
	try { document.getElementById("frame1").contentWindow.start();}	catch(err)	{};
	try { document.getElementById("frame0").contentWindow.stop();}	catch(err)	{};
	try { document.getElementById("frame1").contentWindow.stop();}	catch(err)	{};
}
function f(fecha)	{
	arr=['Enero','Febrero','Marzo','Abril','Mayo','Junio','julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
	return(fecha.substr(8,2)+"-"+arr[parseInt(fecha.substr(5,2))]+"-"+fecha.substr(0,4))
}
function draggable(element) {
	element.onmousedown = function(event) {
		let shiftX = event.clientX - element.getBoundingClientRect().left;
		let shiftY = event.clientY - element.getBoundingClientRect().top;
		if(!(element.offsetWidth-shiftX<20 && element.offsetHeight-shiftY<20))	{
			element.style.position = 'absolute';
			element.style.zIndex = 1000;
			moveAt(event.pageX, event.pageY);
		} else {
			return(true);
		}
		function moveAt(pageX, pageY) {
			// element.style.left = pageX - shiftX + 'px';
			element.style.top = pageY - shiftY + 'px';
		}
		function onMouseMove(event) {
			moveAt(event.pageX, event.pageY);
		}
		document.addEventListener('mousemove', onMouseMove,false);
		element.onmouseup = function() {
			document.removeEventListener('mousemove', onMouseMove,false);
			element.onmouseup = null;
		};
		element.onmouseout = function() {
			document.removeEventListener('mousemove', onMouseMove,false);
			element.onmouseup = null;
			return true;
		};
	};
	element.ondragstart = function() {
		return false;
	};
}
function ponermascara()	{
	var proporcion=window.innerHeight/window.innerWidth;
	tab = document.createElement("div");
	tab.id="divmascara";
	window.top.document.body.appendChild(tab);
	height = screen.height;
	width = screen.width-30;
	window.top.document.getElementById("divmascara").style="position:absolute;top:0px;left:"+(proporcion<1 ? 50 : 0)+"%;height:100%;width:"+(proporcion<1 ? 50 : 100)+"%;background:rgba(255,255,255,.75);overflow:hidden;z-Index:5000;";
	window.top.document.getElementById("divmascara").onclick = function () { iniciacontador() };
}
function iniciacontador()	{
	window.top.document.getElementById("divmascara").style="position:absolute;bottom:0px;left:0px;height:100px;width:25%;background:rgba(200,100,100,.5);overflow:hidden;z-Index:5000;font:50px verdana;color:#ff0;";
	window.top.document.getElementById("divmascara").style="display:none";
	try { document.getElementById("frame0").contentWindow.start();}	catch(err)	{};
	try { document.getElementById("frame1").contentWindow.start();}	catch(err)	{};
	contadortd=0;
	vcontadortd=setInterval(function(){contabiliza();},1000);
}
function contabiliza()	{
	contadortd+=1;
	window.top.document.getElementById("divmascara").innerHTML="T:"+contadortd;
}
function carga()	{
	var xr = new XMLHttpRequest();xr.open("POST", "lib/clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	
		var rpta=JSON.parse(xr.responseText);
		if(document.getElementById("frame0").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame0").contentWindow.document.getElementById("btnsl").style.display="none";
		if(document.getElementById("frame0").contentWindow.document.getElementById("btntd"))	document.getElementById("frame0").contentWindow.document.getElementById("btntd").style.display="none";
		if(document.getElementById("frame1").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame1").contentWindow.document.getElementById("btnsl").style.display="none";
		if(document.getElementById("frame1").contentWindow.document.getElementById("btntd"))	document.getElementById("frame1").contentWindow.document.getElementById("btntd").style.display="none";
		Array.from(document.getElementById("frame0").contentWindow.document.querySelectorAll(".spannombre")).forEach(function(actual) { actual.innerHTML=top.document.getElementById("alumnonombresolo").value;});
		Array.from(document.getElementById("frame1").contentWindow.document.querySelectorAll(".spannombre")).forEach(function(actual) { actual.innerHTML=top.document.getElementById("alumnonombresolo").value;});
		if(rpta[0]['rpta']!="" ) 		document.getElementById("frame0").contentWindow.restore(rpta[0]['rpta']);
		if(rpta[1]['rpta']!="" ) 		document.getElementById("frame1").contentWindow.restore(rpta[1]['rpta']);
		if(rpta[0]['estado']=="" )	if(document.getElementById("frame0").contentWindow.document.getElementById("btnsl")) 	document.getElementById("frame0").contentWindow.document.getElementById("btnsl").style.display="";
		if(rpta[0]['estado']!="F") {
			if(document.getElementById("frame0").contentWindow.document.getElementById("btntd"))	document.getElementById("frame0").contentWindow.document.getElementById("btntd").style.display="";
			if(document.getElementById("frame0").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame0").contentWindow.document.getElementById("btnsl").style.display="";
		}
		if(rpta[1]['estado']=="") {
			if(document.getElementById("frame1").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame1").contentWindow.document.getElementById("btnsl").style.display="";
		}
		if(rpta[1]['estado']!="F") {
			if(document.getElementById("frame1").contentWindow.document.getElementById("btntd"))	document.getElementById("frame1").contentWindow.document.getElementById("btntd").style.display="";
			if(document.getElementById("frame1").contentWindow.document.getElementById("btnsl"))	document.getElementById("frame1").contentWindow.document.getElementById("btnsl").style.display="";
		}
		if(<?=$_SESSION['d'];?>) profesor();
	}};
	xr.send("modo=paginas&valores=<?=$_SESSION['pagina'].",".$_SESSION['alumno'].",".$_SESSION['libro'];?>,"+document.getElementById("f_i").title+","+document.getElementById("f_d").title);
}
function taskdone(pagina,rpta="")	{
	var performance="N/A";
	try { performance=document.getElementById("frame0").contentWindow.respuesta(rpta);}	catch(err)	{};
	try { performance=document.getElementById("frame1").contentWindow.respuesta(rpta);}	catch(err)	{};
	var tiempo=window.top.document.getElementById("divmascara").innerHTML.split("T:").join("");
	var xr = new XMLHttpRequest();xr.open("POST", "lib/clase.php", true);xr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xr.onreadystatechange = function() {
		if(xr.readyState == 4 && xr.status == 200) {
			try { window.top.document.body.removeChild(document.getElementById("divmascara"));}	catch(err)	{console.log(err);};
			try { window.clearInterval(vcontadortd);;}	catch(err)	{console.log(err);};
			td.play();
			carga();
		};
	};
	xr.send("modo=taskdone&estado=F&valores="+pagina+"<?=",".$_SESSION['alumno'].",".$_SESSION['libro'].",";?>"+tiempo+","+performance+","+rpta);
}
function saveforlater(pagina,rpta="")	{
	var performance="N/A";
	try { performance=document.getElementById("frame0").contentWindow.respuesta(rpta);}	catch(err)	{};
	try { performance=document.getElementById("frame1").contentWindow.respuesta(rpta);}	catch(err)	{};
	var tiempo=window.top.document.getElementById("divmascara").innerHTML.split("T:").join("");
	var xr = new XMLHttpRequest();xr.open("POST", "lib/clase.php", true);xr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xr.onreadystatechange = function() {
		if(xr.readyState == 4 && xr.status == 200) {
			try { window.top.document.body.removeChild(document.getElementById("divmascara"));}	catch(err)	{console.log(err);};
			try { window.clearInterval(vcontadortd);;}	catch(err)	{console.log(err);};
			td.play();
			carga();
		};
	};
	xr.send("modo=taskdone&estado=P&valores="+pagina+"<?=",".$_SESSION['alumno'].",".$_SESSION['libro'].",";?>"+tiempo+","+performance+","+rpta);
}

</script>
<style>
html,  body {
	height: 100%;
	margin: 0px auto; 
	padding: 0px ppx; 
	overscroll-behavior: none;
}	
.derecha	{
	display:inline;padding:0px 6px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAnCAYAAABnlOo2AAAACXBIWXMAAAsTAAALEwEAmpwYAAACxUlEQVRYw82YP2gUQRTGb3dn5713muQKrZRoITYiSAoLsbLQyjTin0ZMip1YRZLKEAxnIREjKIrC7UKOkICYwsIuaWxsRSxsNJ1oY6ERvJuZm721MbBZct6/3Vun3WX3t2++733z1ir8JysIggnHca5ZeUL4vj/iOM5TRLzEOS9qrWssJ5DznPP7RHTKtu1dRRkYULVadcIwXEREDwBKre5jA6jGCdd1nyPiGcZY2/exDEU6AwAzRHS4UCh0rNVUgSqVyhHXdR8S0ThjjPfyDJbStlwFgLuIeDwp0oEBBUFAtm0vIeINzvn+tKrMeqjGWc75IyIas23bTlt7rAvLlgFAIOLBbkSaKpDv+8cYY48R8UInlu1nGWO0lHLdaqEPDwDmEXHUsqzMqtFsNiMp5ZbWesnzvKAQL32lUjnEGFvcyZUsq6GU+qWUWjfGlKempr7Gr1l/c2WJiE72a9k2W2KklO8ajcaCEGKzpYaKxeLLf2VLPyuKokhK+U1rXXUcpzw5ORnmEh2NRkNJKTeNMbNCiK2Bd+qYQD9pre95nrc68E4dE+i2UupFGIa3hRDbA+/UMZCftVrtohDibZrb3XPrB4DS0NDQm+Xl5Q3f90+nBWStra39SMFlkZTyu1JqNYqiO57n1fMGiou7Wa/XP2ity0KI17kDxZfW+reU8pUxZi7ZkVtqSEr5RCm1nQUQ53zf8PDw9VKp9GVlZeVzEATTbSsUS/ZxAHiQxqmvXarX6/UNY8ycEOJjS6BkyBLRFdd1IcOM3TGCH48Vq4PJ4RYRjWZ5KAvDMJRSvtdaz3f0km5nqz5MUOvqq2PTpwCAkdyB9pjPUz1H9QW0hwkuu66LuQMlTDANALO9nsVTB0pMK8+I6Fw3JsgMaI957iYiHsgdqNOfVLkAxcB2/cbLHShhggnO+QIRHbUsy8odKDmyM8bG/gAG0GK5oq+dmgAAAABJRU5ErkJggg==) right center no-repeat;	
}
.imagenrotar {
	animation:spin 6s linear infinite;
	animation-direction: alternate;
}
@keyframes spin { 
	0% { transform:rotate(-15deg); } 
	100% { transform:rotate(15deg); } 
}
.txtinstrucciones	{
  animation: scatter 30s infinite;
	animation-direction: alternate;
	text-shadow:-1px -1px 1px #000,1px 1px 1px #000;
}
@keyframes scatter {
  0% {
		color:#f00;
  }
  50% {
		color:#ff0;
  }
  100% {
		color:#0a0;
  }
}
</style>
<body>
	<div style="float:left;height:100%;width:100%;" id="" class="" >
		<div id="pagina0" style="float:left;height:100%;"><iframe style="height:100%;width:100%;" id="frame0" class="" frameborder="0"></iframe></div>
		<div id="pagina1" style="float:left;height:100%;"><iframe style="height:100%;width:100%;" id="frame1" class="" frameborder="0"></iframe></div>
	</div>
	<div style="position:absolute;height:50%;top:0px;left:0px		;float:left;width:60px;z-Index:6000;" id="" class="" ><img id="f_i" onclick="cambiapagina(-1)" style="cursor:pointer;position:absolute;bottom:0%;" src="data:image/png;base64,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"></div>
	<div style="position:absolute;height:50%;top:0px;right:0px	;float:left;width:60px;z-Index:6000;" id="" class="" ><img id="f_d" onclick="cambiapagina(+1)" style="cursor:pointer;position:absolute;bottom:0%;" src="data:image/png;base64,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"></div>
	<div style="opacity:0.25;position:absolute;bottom:0px;left:25%	;float:left;height:40px;width:60px;z-Index:6000;background:rgba(250,250,250,1);border-radius:30px;border:5px solid #444;text-align:center;font:26px verdana;padding:10px 0px 5px 0px;" id="div_pi" class="" ></div>
	<div style="opacity:0.25;position:absolute;bottom:0px;left:75%	;float:left;height:40px;width:60px;z-Index:6000;background:rgba(250,250,250,1);border-radius:30px;border:5px solid #444;text-align:center;font:26px verdana;padding:10px 0px 5px 0px;" id="div_pd" class="" ></div>
	<audio id="td"><source src="media/check.wav"></audio>
	<input type='hidden' 	id='ruta' value='<?=$_SESSION['ruta'];?>'>
	<input type='hidden' 	id='paginas' value='<?=$_SESSION['paginas'];?>'>
	<input type='text' 		id='alumnonombresolo' value='<?=$_SESSION['alumnonombresolo'];?>'>
</body>
</html>