<script>
var palabra="CLASIFICACION DE LOS RECURSOS RECURSOS RENOVABLES RECURSOS NO RENOVABLES RECURSOS PERMANENTES RECURSOS ESTRATÉGICOS O ENERGETICOS RECURSOS DE FLUJO RECURSOS ESPORADICOS";
var actual=0;	
var rpta="";
window.parent.carga();
window.onload=function()	{
	instructions();
	for(k=0;k<palabra.length;k++)	{
		document.getElementById("divcontenedor").innerHTML+="<div id='div_"+k+"' class='claseletra' style='float:left;margin:0px 5px;'>"+(palabra.substr(k,1)==" " ? "&nbsp;" : "_" )+"</div>";
	}
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_018.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Descubre la frase escondida antes que te ahorquen!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
	// document.body.style.transform = 'scale(.75)';
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;this.play();}, false);
}
function stop()	{
	n0.src="";
}
function restore(cualrpta)	{
	if(cualrpta!="") rpta=cualrpta;
	if(rpta.length>0)	actual=rpta.substr(0,1);
	if(actual<=6)	document.getElementById("imagen").src="media/h_"+actual+".jpg";
	// if(actual>=6)	document.getElementById("juego").style.display="none";
	for(k=2;k<rpta.length-1;k++)	{
		if(document.getElementById("div_"+(k-2))!=undefined)
			document.getElementById("div_"+(k-2)).innerHTML=(rpta.substr(k,1)=="/" ? "&nbsp;" : rpta.substr(k,1)) ;
			Array.from(document.querySelectorAll(".botonletra")).forEach(function(actual) { if(actual.innerHTML==rpta.substr(k,1)) actual.style.background="#888"; });
	}
}

function respuesta(valor)	{
	var total=valor.split("/").join("").length-1;
	var porsaber=valor.split("_").length-1;
	return(String(100-100*porsaber/total).formatMoney(2)+"%");
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
function checkme(cual)	{
	// alert(cual.innerHTML);
}
function next(letra,cual)	{
	cual.style.background="#888";
	var ok=false;
	for(k=0;k<palabra.length;k++)	{
		if (palabra.substr(k,1)==letra)	{
			ok=true;
			document.getElementById("div_"+k).innerHTML=letra;
		}
	}
	if(!ok)	{
		x = document.getElementById("myAudio3"); 
		x.play(); 
		actual=parseInt(actual)+1;
		if(actual<=6)	document.getElementById("imagen").src="media/h_"+actual+".jpg";
		if(actual>=6)	document.getElementById("divbotones").style.display="none";
	}
	rpta=actual+":"
	for(k=0;k<palabra.length;k++)	{
		rpta+=(document.getElementById("div_"+k).innerHTML=="&nbsp;" ? "/" : document.getElementById("div_"+k).innerHTML );
	}
}
function test()	{
	x = document.getElementById("myAudio1"); 
	var seg=new Date().getSeconds();
	if(seg/2==parseInt(seg/2))	x = document.getElementById("myAudio2"); 
	x.play(); 
}
</script>
<style>
body	{
	background:url(media/grammar.jpg) no-repeat center center; 
	background-size: cover;
}	
.botonletra	{
	font:32px verdana;
	background:#ccc;
	box-shadow:1px 1px 10px #000;
	padding:2px 0px;
	margin:2px;
	width:50px;
	border-radius:2px;
}
.botonletra:hover	{
	background:#fff;
}

.claseletra	{
	
}
</style>
<body>
<div style="float:left;width:100%;overflow:hidden;text-align:center;font-size:52px;color:#ddd;font-weight:bold;text-shadow:1px 1px 10px #99f;" id="" class="" >HANGMAN</div>
<div style="float:left;width:100%;overflow:hidden;background:rgba(221,218,161,0);text-align:center;padding:10px 0px;" id="" class="" ><img id="imagen" src="media/h_0.jpg" style="height:320px;width:320px;"></div>
<div style="float:left;width:100%;;background:rgba(228,128,166,0);" id="juego"></div>
<div style="float:left;width:calc(100% - 100px);padding:0px 50px;" id="divbotones" class="" >
	<button class="botonletra" onclick="next('A',this)">A</button>
	<button class="botonletra" onclick="next('B',this)">B</button>
	<button class="botonletra" onclick="next('C',this)">C</button>
	<button class="botonletra" onclick="next('D',this)">D</button>
	<button class="botonletra" onclick="next('E',this)">E</button>
	<button class="botonletra" onclick="next('F',this)">F</button>
	<button class="botonletra" onclick="next('G',this)">G</button>
	<button class="botonletra" onclick="next('H',this)">H</button>
	<button class="botonletra" onclick="next('I',this)">I</button>
	<button class="botonletra" onclick="next('J',this)">J</button>
	<button class="botonletra" onclick="next('K',this)">K</button>
	<button class="botonletra" onclick="next('L',this)">L</button>
	<button class="botonletra" onclick="next('M',this)">M</button>
	<button class="botonletra" onclick="next('N',this)">N</button>
	<button class="botonletra" onclick="next('O',this)">O</button>
	<button class="botonletra" onclick="next('P',this)">P</button>
	<button class="botonletra" onclick="next('Q',this)">Q</button>
	<button class="botonletra" onclick="next('R',this)">R</button>
	<button class="botonletra" onclick="next('S',this)">S</button>
	<button class="botonletra" onclick="next('T',this)">T</button>
	<button class="botonletra" onclick="next('U',this)">U</button>
	<button class="botonletra" onclick="next('V',this)">V</button>
	<button class="botonletra" onclick="next('W',this)">W</button>
	<button class="botonletra" onclick="next('X',this)">X</button>
	<button class="botonletra" onclick="next('Y',this)">Y</button>
	<button class="botonletra" onclick="next('Z',this)">Z</button>
</div>
<div id="divcontenedor" style="float:left;font-size:36px;font-weight:bold;color:#ff0;text-shadow:1px 1px 1px #000;"></div>	
<audio id="myAudio1"><source src="media/ontn.oga" type="audio/ogg"></audio>
<audio id="myAudio2"><source src="media/ydmt.oga" type="audio/ogg"></audio>
<audio id="myAudio3"><source src="media/m.oga" type="audio/ogg"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('018',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('018',rpta)">Tarea terminada!</button>
	</div>
	<audio id="n0"><source src="media/tictac.mp3"></audio>
</body>