<!DOCTYPE HTML>
<html>
<head>
<script>
var rpta="";
var contador=0;
var loop;
var actual=-1;
var arrmovies=[
	["gone with the wind","lo que el viento se llevo","no me digas nada","el viento sin distancias","El que se fue","Por quien doblan las campanas"],
	["the good the bad and the ugly","dos mulas para la hermana sally","El bueno el malo y el feo","Apocallipsis ahora","Ben Hur","buenas y malas noticias","los buenos y los feos"],
	["planet of the apes","planeta cero","Cuando llora mi guitarra","pelicula extranjera","invasion extraterrestre","el planeta de los simios"],
	["into the woods", "las maderas del bosque", "el arbol del fondo", "dentro del bosque", "dentro de los arboles", "entrando a la madera"],
	["singing in the rain","la lluvia canto", 	"cantando bajo la lluvia", 	"encantando con lluvia", 	"la lluvia cae y encanta", 	"encantados"]
]
var arrrptas=[
	"lo que el viento se llevo",
	"El bueno el malo y el feo",
	"el planeta de los simios",
	"dentro del bosque",
	"cantando bajo la lluvia"
];
window.parent.carga();
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 24px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_040.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:10px 10px;' id='' class='' >Did you ever play scrabble? Well, here is an easier scrabble game: instead letters we have words and have to make a phrase with them. Drag the word and drop it on the top table to create the phrase..</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
	siguiente();
	loop=setInterval(function(){mifuncion();},20);
}
function mifuncion()	{
	document.getElementById("divnombre").style.transform="rotate(0deg) 	rotateX("+(contador++)+"deg) rotateY(0deg)";
	if(contador>360)	contador=0;
	if(contador==270)	{
		siguiente();
	}
}
function siguiente()	{
	if(++actual==arrmovies.length)	{
		actual=0;
		clearInterval(loop);
		Array.from(document.querySelectorAll(".ocultar")).forEach(function(actual) { actual.style.display="none";});
		document.getElementById("divnombre").style.display="none";
	}
	document.getElementById("divnombre").innerHTML=arrmovies[actual][0];
	document.getElementById("b1").innerHTML=arrmovies[actual][1];
	document.getElementById("b2").innerHTML=arrmovies[actual][2];
	document.getElementById("b3").innerHTML=arrmovies[actual][3];
	document.getElementById("b4").innerHTML=arrmovies[actual][4];
	document.getElementById("b5").innerHTML=arrmovies[actual][5];
}
function restore(cualrpta)	{
	if(cualrpta!="") rpta=cualrpta;
	if(rpta.split("|").length>2)	actual=rpta.split("|").length-3;
	siguiente();
}
window.onload=function() {
	instructions();
}
function respuesta(valor)	{
	var arr=valor.split("|");
	total=0;
	for(k=0;k<arr.length-1;k++)	{
		if(arr[k]!="")	{
			arrcu=arr[k].split("=");
			if(arrcu[0]==arrrptas[k])	total++;
		}
	}
	return(String(100*total/(arrmovies.length-1)).formatMoney(2)+"%");
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
function seleccion(cual)	{
	rpta+=cual.innerHTML+"="+arrmovies[actual][0]+"|";
	contador=0;
	siguiente();
}
</script>
<style type="text/css">
html,	
body	{
	background:url(media/m2.jpg) no-repeat center center; 
	background-size: cover;
	height:100%;
	width:100%;
	overflow:hidden;
	padding:0px;
}	
  .acontainer {width:80%;height:20%;padding:10px;border:1px solid #aaaaaa;}
  div {cursor: grabbing;}
  // div::before {content:" "}
  // div:first-child {text-transform:capitalize}
  // div:first-child:before {content:""}
  // div:last-child:after {content:"."}
	.container div	{
		background:#ff0;
		padding:6px 10px;
		border-radius:10px;
		margin:2px 4px;
		font:bold 32px verdana;
		border:1px solid;
	}
	#first div	{color:#fff;background:#c00;transform: rotate(0deg) !important;margin:2px !important;box-shadow:5px 5px 5px #f00 inset,5px 5px 5px #000 !important;}
	#second div	{color:#000;background:#ff0;}
	.center {
		display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
	}
	.boton	{
		background:#008;
		color:#fff;
		font-size:40px;
		text-align:center;
		border-radius:32px;
		width:100%;
	}
	
</style>
</head>
<body>
	<div style="float:left;width:100%;overflow:hidden;text-align:center;padding:10px;font-size:40px;font-weight:bold;text-shadow:3px 1px 1px #fff;color:#a00" id="" class="" >TRANSLATE THE MOVIE TITLES!</div>
	<div style="float:left;width:calc(100% - 40px);padding:10px;height:300px;background:rgba(204,191,255,0.75);font-size:75px;color:#fff;text-shadow:1px 1px 1px #000;;" id="divnombre" class="center" >gone with the wind</div>
	<div style="float:left;width:calc(100% - 40px);padding: 20px;" class=""></div>
	<div class="ocultar" style="float:left;width:calc(100% - 40px);padding: 5px 20px;background:rgba(0,0,0,0.5);" ><button class="boton" onclick="seleccion(this)" id="b1"></button></div>
	<div class="ocultar" style="float:left;width:calc(100% - 40px);padding: 5px 20px;background:rgba(0,0,0,0.5);" ><button class="boton" onclick="seleccion(this)" id="b2"></button></div>
	<div class="ocultar" style="float:left;width:calc(100% - 40px);padding: 5px 20px;background:rgba(0,0,0,0.5);" ><button class="boton" onclick="seleccion(this)" id="b3"></button></div>
	<div class="ocultar" style="float:left;width:calc(100% - 40px);padding: 5px 20px;background:rgba(0,0,0,0.5);" ><button class="boton" onclick="seleccion(this)" id="b4"></button></div>
	<div class="ocultar" style="float:left;width:calc(100% - 40px);padding: 5px 20px;background:rgba(0,0,0,0.5);" ><button class="boton" onclick="seleccion(this)" id="b5"></button></div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('040',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('040',rpta)">Task done!</button>
	</div>
	<audio id="myAudio1"><source src="media/c1.wav"></audio>
	<audio id="myAudio2"><source src="media/c2.wav"></audio>
</body>
</html>
