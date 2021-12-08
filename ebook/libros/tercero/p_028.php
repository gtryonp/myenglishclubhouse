<script>
var rpta="";
var arreglo=[
	"anziehen|anzog|hat angezogen",
	"backen|buk|hat gebacken",
	"befehlen|befahl|hat befohlen",
	"beginnen|begann|hat begonnen",
	"betrügen|betrog|hat betrogen",
	"beweisen|bewies|hat bewiesen",
	"biegen|bog|hat gebogen",
	"bieten|bot|hat geboten",
	"binden|band|hat gebunden",
	"bitten|bat|hat gebeten"
];
window.parent.carga();
var inicio="";
var final="";
window.onload=function() {
	llenatabla();
	instructions()
	Array.from(document.querySelectorAll("td")).forEach(function(actual,numero) { 
		actual.id="td_"+(numero+1);
		actual.draggable=true;
		actual.addEventListener("dragstart", function(event) {
			event.dataTransfer.setData("Text", event.target.id);
			inicio=event.target.id;
		});
		actual.addEventListener("dragover", function(event) {
			event.preventDefault();
		});	
		actual.addEventListener("drop", function(event) {
			event.preventDefault();
			final=event.target.id;
			cambia(inicio,final);
		});	
	});
	colores();
}

function llenatabla()	{
	var buffer="";
	for(var k=0;k<arreglo.length;k++){
		buffer+="<tr><td>"+arreglo[k].split("|")[0]+"</td><td>"+arreglo[k].split("|")[1]+"</td><td>"+arreglo[k].split("|")[2]+"</td></tr>";
	}
	document.getElementById("mitabla").innerHTML=buffer;
	for(var k=0;k<3*arreglo.length*3;k++){
		desdex=parseInt(Math.random()*arreglo.length);desdey=parseInt(Math.random()*3);
		hastax=parseInt(Math.random()*arreglo.length);hastay=parseInt(Math.random()*3);
		buffer=document.getElementById("mitabla").rows[hastax].cells[hastay].innerHTML;
		document.getElementById("mitabla").rows[hastax].cells[hastay].innerHTML=document.getElementById("mitabla").rows[desdex].cells[desdey].innerHTML;
		document.getElementById("mitabla").rows[desdex].cells[desdey].innerHTML=buffer;
	}
}

function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_028.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Vergangenheit und Gegenwart. Ziehen Sie jedes Verb per Drag & Drop, um die Verben zu ordnen, bis Sie jedes Verb in jeder Zeile mit ihren Zeitformen haben.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
}
function restore(cualrpta)	{
	if(cualrpta!="") {
		rpta=cualrpta;
		arrrpta=rpta.split("|");
		Array.from(document.querySelectorAll("td")).forEach(function(actual,numero) { 
			actual.innerText=arrrpta[numero];
		})
	}	
}
function cambia(desde,hasta)	{
	var vdesde=document.getElementById(desde).innerText;
	var vhasta=document.getElementById(hasta).innerText;
	document.getElementById(desde).innerText=vhasta;
	document.getElementById(hasta).innerText=vdesde;
	myaudio.play();
	muestra();
}
function muestra()	{
	tabla=document.getElementById("mitabla");
	rpta="";
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			rpta+=tabla.rows[i].cells[j].innerHTML.trim()+"|";
		}
	}
	console.log(rpta);
}
function colores()	{
	tabla=document.getElementById("mitabla");
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			var color="rgba("+(50+200*Math.random())+","+(50+200*Math.random())+","+(50+200*Math.random())+",.5)";
			tabla.rows[i].cells[j].style.background=color;
		}
	}
	console.log(rpta);
}
function respuesta(valor)	{
	var ok=0;
	for(k=0;k<arreglo.length-1;k++)	{
		if(valor.indexOf(arreglo[k])>-1)	ok++;
	}
	return(String(100*ok/10).formatMoney(2)+"%");
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
body {
	overflow:hidden;
}	
table								{border:1px solid;font:28px verdana;}
th									{background:#009;padding:10px 0px;color:#fff;}
td									{padding:4px 1px;border-bottom:1px solid #ccc;border-right:1px solid #ccc;}
td:hover 						{background-color: #ccc !important;}
</style>
<body>
<div style="float:left;width:100%;overflow:hidden;text-align:center;font-size:40px;padding:20px;font-family:verdana;font-weight:bold;text-shadow:-2px 1px 1px #0ff,-1px 1px 1px #fff,1px 1px 1px #f00;color:#acf;" id="" class="" >Vergangenheit/Gegenwart/Zukunft</div>
<table id="mitabla" style="width:100%;border;0px solid;" ondblclick="muestra()">
</table>
<audio id="myaudio"><source src="media/c1.wav"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('028',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('028',rpta)">Aufgabe erledigt!</button>
	</div>
</body>