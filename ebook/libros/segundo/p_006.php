<style>
html,	
body	{
	background:url(media/mm.jpg) no-repeat center center fixed; 
	background-size: cover;
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
	<div style="float:left;width:100%;font-weight:bold;font-size:32px;text-shadow:1px 1px 1px #fff,1px 1px 1px #00f;" id="divcolor" class="fontech" >NOMBRE DE LOS PLANETAS</div>
	<div style="float:left;width:100%;font-size:22px;" id="" class="fontech" >pronuncie el nombre de cada uno de estos planetas:</div>
	
	<div style="float:left;width:100%;">
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >mercurio</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >venus</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >tierra</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >marte</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >júpiter</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >urano</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >neptuno</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(32px + .75vw);color:#aaa;border:1px solid #fff;padding:10px 0px;" class="fontech clasecolor" >plutón</div>
	</div>
	
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('006',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('006',rpta)">Tarea terminada!</button>
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
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_006.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 36px verdana;text-align:center;padding:50px 50px;' id='' class='' >	mencione en voz alta el nombre de cada planeta hasta marcar a todos!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	rpta=cualrpta;
	var arrcolors={"mercurio" :"#00f","venus" :"#0f0","tierra" :"#f00","marte" :"#ff0","júpiter" :"#fa0","urano" :"#cff","neptuno" :"#f99","plutón" :"#ccc","purple" :"#A40190","lime" :"#77FF05","aqua" :"#05F3CF","navy" :"#0E385E","coral" :"#FF974E","mustard" :"#E3A51E","brown" :"#775549","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","olive" :"#477F40","copper" :"#DE9A1D","violet" :"#B9B3D9","camel" :"#E7C39F","fucshia" :"#E73D96" };
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
	var arrcolors={"mercurio" :"#00f","venus" :"#0f0","tierra" :"#f00","marte" :"#ff0","júpiter" :"#fa0","urano" :"#cff","neptuno" :"#f99","plutón" :"#ccc","purple" :"#A40190","lime" :"#77FF05","aqua" :"#05F3CF","navy" :"#0E385E","coral" :"#FF974E","teal" :"#009788","mustard" :"#E3A51E","brown" :"#775549","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","olive" :"#477F40","copper" :"#DE9A1D","violet" :"#B9B3D9","camel" :"#E7C39F","fucshia" :"#E73D96" };
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