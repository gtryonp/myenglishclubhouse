<?
session_start();
header("Content-Type: text/html; charset=UTF-8");
?>
<head>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
<script>
var cual;
$(function() {
	cual=getIframeID();
	cargalibros()
});

function cargalibros()	{
	var xr = new XMLHttpRequest();xr.open("POST", "clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	
		mostrarlibros(JSON.parse(xr.responseText))
	}};
	xr.send("modo=get&modoarchivo=libro");
}

function mostrarlibros(msg)	{
	var buffer="";
	for(var k=0;k<msg.length;k++){
		console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",msg[k]);
		buffer+="<td>"
		buffer+="	<table class='cadalibro'><tr>"
		buffer+="		<tr><td><img src='../media/libro_"+msg[k].libro+".jpg' style='height:240px;width:200px;'></td></tr>";
		buffer+="		<tr><td class='boton'><button>AÑADIR</button></td></tr>";
		buffer+="		<tr><td class='nombre'>"+msg[k].nombre.toUpperCase()+"</td></tr>";
		buffer+="		<tr><td class='autor'>"+msg[k].autor+"</td></tr>";
		buffer+="		<tr><td class='precio'>Precio S/. "+msg[k].precio.formatMoney(2,',')+"</td></tr>";
		buffer+="		<tr><td class='comentario'>"+msg[k].comentario+"</td></tr>";
		buffer+="	</table>"
		buffer+="</td>";
	}
	buffer+=buffer;
	document.getElementById("tablalibros").innerHTML="<tr>"+buffer+"</tr>";
}

function getIframeID()	{
	var myTop = top;
	var myURL = location.href;
	var iFs = top.document.getElementsByTagName('iframe');
	var x, i = iFs.length;
	while ( i-- ){
		x = iFs[i];
		if(myURL.indexOf(x.src)>=0)	return (x.id);
		if (x.src == myURL)			return (x.id);
	}
	return("");
}
String.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator, currencySymbol) {
	decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces;
	decSeparator = decSeparator == undefined ? "." : decSeparator;
	thouSeparator = thouSeparator == undefined ? "," : thouSeparator;
	currencySymbol = currencySymbol == undefined ? "" : currencySymbol;
	var n = this,
	sign = n < 0 ? "-" : "",
	i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
	j = (j = i.length) > 3 ? j % 3 : 0;
	return sign + currencySymbol + (j ? i.substr(0, j) + thouSeparator : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator) + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
};


</script>

<style>
	#tablalibros			{max-width:100%;}
	#tablalibros	td	{vertical-align:top;}
	.tablalibro				{width:100%;}
	.cadalibro td			{padding:1px;font:12px verdana;text-align:center;max-width:200px;vertical-align: top;display: table-cell;}
	td .nombre				{text-weight:bold;}
	td .autor					{color:#f00;}
	td .precio				{text-align:right;text-weight:bold;color:#444;}
	td .comentario		{text-align:justify;}
	button						{width:100%;height:30px;letter-spacing:5px;background:#666;color:#fff;text-shadow:1px 1px 1px #aaa;transition:1s all ease;}
	button:hover			{background:#aaa;transition:1s all ease;}

::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	

</style>	

<body>
	<div style="float:left;width:100%;height:100%;overflow:auto;background:rgba(253,240,207,0.5);" id="divlibros" class="" >
		<table id="tablalibros" ></table>
	</div>
</body>


