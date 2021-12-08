<style>
html,	
body	{
	background:rgba(0,0,0,.25); 
	height:100%;
	width:100%;
	overflow:hidden;
	padding:0px;
}	
.clasecolor	{
	background:#fff;
}
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
</style>
<body onclick="start();">
	<!--div style="float:left;width:100%;overflow:hidden;background:rgba(242,151,164,0.5);font:bold 20px verdana;" id="divconsole" class="" >***</div-->
	<div style="float:left;width:100%;font-weight:bold;font-size:32px;text-shadow:1px 1px 1px #fff,1px 1px 1px #00f;" id="divcolor" class="fontech" >NENNEN SIE EINE FARBE!</div>
	<div style="float:left;width:100%;font-size:22px;" id="" class="fontech" >Sprechen Sie die folgenden Farben:</div>
	
	<div style="float:left;width:50%;">
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >blau</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >grau</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >rot</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >Gelb</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >orange</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >cyan</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >rosa</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >grau</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >lila</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >limette</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >aqua</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >navy blau</div>
	</div>
	<div style="float:left;width:50%;">
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >coral</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >goldgrlb</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >braun</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >amber</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >peach</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >maroon</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >charcoal</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >olive</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >cobre</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >lavendel</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >camel</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >hellrosa</div>
	</div>
	
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('006',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('006',rpta)">Aufgabe erledigt!</button>
	</div>
	

	
</body>
<script type="text/javascript">
var rpta="";	
var runok=true;
var idmostrardebuganimacion;
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var	recognition = new SpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
window.parent.carga();

window.onload=function() {
	instructions();
}
function start() {
}
function stop() {
	runok=false;
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_006.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 36px verdana;text-align:center;padding:50px 50px;' id='' class='' >Schreibe das Mikrofon für jede Farbe laut, bis es markiert ist!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	rpta=cualrpta;
	var arrcolors={"blau" :"#00f","Grün" :"#0f0","rot" :"#f00","Gelb" :"#ff0","orange" :"#fa0","cyan" :"#cff","Rosa" :"#f99","grau" :"#ccc","lila" :"#A40190","Limette" :"#77FF05","aqua" :"#05F3CF","Navy blau" :"#0E385E","coral" :"#FF974E","goldgelb" :"#E3A51E","braun" :"#775549","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","olive" :"#477F40","cobre" :"#DE9A1D","lavendel" :"#B9B3D9","camel" :"#E7C39F","hellrosa" :"#E73D96" };
	var arrrpta=rpta.split("|");
	for(k=0;k<arrrpta.length;k++)	{
		for (var key in arrcolors) {
			var value = arrcolors[key];
			if(key==arrrpta[k])	{
				Array.from(document.querySelectorAll(".clasecolor")).forEach(function(actual) { if(actual.innerHTML==arrrpta[k])	{
					actual.style.background=value;
					actual.style.color="#000";
				}});
			}
		}		
	}		
}
function respuesta(valor)	{
	var cantidad=valor.split("|").length-1;
	return(String(100*cantidad/24).formatMoney(2)+"%");
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
function start()	{
	var arrcolors={"blau" :"#00f","Grün" :"#0f0","rot" :"#f00","Gelb" :"#ff0","orange" :"#fa0","cyan" :"#cff","Rosa" :"#f99","grau" :"#ccc","lila" :"#A40190","Limette" :"#77FF05","" :"#05F3CF","Navy blau" :"#0E385E","coral" :"#FF974E","goldgelb" :"#E3A51E","braun" :"#775549","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","olive" :"#477F40","cobre" :"#DE9A1D","lavendel" :"#B9B3D9","camel" :"#E7C39F","hellrosa" :"#E73D96" };
	recognition.start();
	idmostrardebuganimacion = setInterval(mostrardebuganimacion, 500);
	recognition.onresult = function (event) {
		for (var i = 0; i < event.results.length; ++i) {
			ultimo=event.results[i][0].transcript.toLowerCase().split(" ");
			orden=ultimo[ultimo.length-1];
			// console.log(event.results[i][0].transcript.toLowerCase(),orden);
			for (var key in arrcolors) {
				var value = arrcolors[key];
				if(key==orden)	{
					Array.from(document.querySelectorAll(".clasecolor")).forEach(function(actual) { if(actual.innerHTML==orden)	{
						actual.style.background=value;
						actual.style.color="#000";
						if(rpta.indexOf(key+"|")==-1)	rpta+=key+"|";
					}
					});
				}
			}		
			document.getElementById("divcolor").innerHTML=orden.toUpperCase();
		}
	}
}
function mostrardebuganimacion() {
	// try { recognition.start();}	catch(err) {document.getElementById("divconsole").innerHTML+="->"+err+"<-"	};	
	if(runok) {
		try { recognition.start();}	catch(err) {};	
	} else {
		recognition.stop();
		clearInterval(idmostrardebuganimacion);
	}
}
</script>