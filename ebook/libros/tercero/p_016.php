<!DOCTYPE html>
<html>
	<head>
	</head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="lib/touch.js"></script>
<style>
html,	
body	{
	background:url(media/sp2.jpg) no-repeat center center; 
	background-size: cover;
	height:100%;
	width:100%;
	padding:0px;
	margin:0px;
	overflow:hidden;
}	
h2 {
	margin-top: 0;
}
.viewport {
	-webkit-perspective: 800px;
	-webkit-perspective-origin: 50% 200px;
	-webkit-transform: scale(0.75,0.75);
	-moz-perspective: 800px;
	-moz-perspective-origin: 50% 200px;
	-moz-transform: scale(0.75,0.75);
	perspective: 800px;
	perspective-origin: 50% 200px;
	transform: scale(1,1);
}
.cube {
	position: relative;
	margin: 0 auto 100px;
	height: 400px;
	width: 400px;
	-webkit-transition: -webkit-transform 50ms linear;
	-webkit-transform-style: preserve-3d;
	-webkit-transform: rotateX(-10deg) rotateY(20deg);
	-moz-transition: -moz-transform 50ms linear;
	-moz-transform-style: preserve-3d;
	-moz-transform: rotateX(-10deg) rotateY(20deg);
	transition: transform 50ms linear;
	transform-style: preserve-3d;
	transform: rotateX(-10deg) rotateY(20deg);
}
.cube h2 {
	color: #ff0;
	text-shadow:1px 1px 1px #000;
	padding-top: 0;
	margin-top: 0;
}
.cube a {
	color: #ff0;
	text-shadow:1px 1px 1px #000;
}
.cube a:hover {
	color: #f00;
	text-shadow:1px 1px 1px #000;
}
.cube > div {
	position: absolute;
	height: 360px;
	width: 360px;
	padding: 20px;
	background-color: rgba(150, 150, 250, 0.75);
	font-size: 1em;
	line-height: 1em;
	color: #000;
	text-shadow:1px 1px 1px #fff;
	border: 1px solid #555;
	border-radius: 3px;
}
.cube > div:first-child  {
	-webkit-transform: rotateX(90deg) translateZ(200px);
	-moz-transform: rotateX(90deg) translateZ(200px);
	transform: rotateX(90deg) translateZ(200px);
}
.cube > div:nth-child(2) {
	-webkit-transform: translateZ(200px);
	-moz-transform: translateZ(200px);
	transform: translateZ(200px);
}
.cube > div:nth-child(3) {
	-webkit-transform: rotateY(90deg) translateZ(200px);
	-moz-transform: rotateY(90deg) translateZ(200px);
	transform: rotateY(90deg) translateZ(200px);
	text-align: center;
}
.cube > div:nth-child(4) {
	-webkit-transform: rotateY(180deg) translateZ(200px);
	-moz-transform: rotateY(180deg) translateZ(200px);
	transform: rotateY(180deg) translateZ(200px);
}
.cube > div:nth-child(5) {
	-webkit-transform: rotateY(-90deg) translateZ(200px);
	-moz-transform: rotateY(-90deg) translateZ(200px);
	transform: rotateY(-90deg) translateZ(200px);
}
.cube > div:nth-child(5) p {
	text-align: center;
	font-size: 2.77em;
	margin: 40px;
	line-height: 60px;
}
.cube > div:nth-child(6) {
	-webkit-transform: rotateX(-90deg) rotate(180deg) translateZ(200px);
	-moz-transform: rotateX(-90deg) rotate(180deg) translateZ(200px);
	transform: rotateX(-90deg) rotate(180deg) translateZ(200px);
}
object {
	opacity: 0.85;
}
object:hover {
	opacity: .5;
}
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
</style>	
<script>
window.parent.carga();
var rpta="";
var id;
var pos=-400;
window.onload=function() {
	instructions();
	Array.from(document.querySelectorAll(".cube")).forEach(function(actual) { 
		actual.addEventListener("mouseover", function (e) {
			rpta=actual.style.transform;
		})
	;});
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_016.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 24px verdana;text-align:center;padding:50px 10px;' id='' class='' >gut gut. Houston, wir haben ein Problem! Unsere Landung Tripulation hat zu viel Yohoo getrunken und ihnen ist zu schwindelig, um die Marine pünktlich zu landen. Finde den Apollo und lege ihn perfekt horizontal. Gute Landung!.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
	id = setInterval(moverluna, 100);	
}
function stop()	{
	clearInterval(id);
	Array.from(document.querySelectorAll("")).forEach(function(actual) { actual.style.pointerEvents = "none";});
}
function hallarpta()	{
	Array.from(document.querySelectorAll(".cube")).forEach(function(actual) { 
		rpta=actual.style.transform.split("(").join("{").split(")").join("}");
	});
}
function respuesta(valor)	{
	if(valor.length>0)	{
		var arr=valor.split("{")
		arr1=Math.abs(parseFloat(arr[1]));  // 180
		arr2=Math.abs(parseFloat(arr[2]));	// 0 o 360
		var nota1=50-50*(180-arr1)/180;
		var nota2=50-50*( arr2>180 ? 360-arr2 : arr2 )/360;
	} else {
		var nota1=0;
		var nota2=0;
	}
	// var data=Math.abs((Math.abs(corr1)-Math.abs(arr1))+(Math.abs(corr2)-Math.abs(arr2)));
	// return((100-data)+"%");
	// console.log(valor,arr1,arr2,parseInt(nota1+nota2)+"%");
	return(String(nota1+nota2).formatMoney(2)+"%");
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
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	Array.from(document.querySelectorAll(".cube")).forEach(function(actual) { 
		actual.style.transform=rpta.split("{").join("(").split("}").join(")");
	});
}
function moverluna() {
	if (pos >= 0) {
		clearInterval(id);
	} else {
		pos=parseFloat(pos)+1; 
		document.getElementById("divmoon").style.bottom =pos+"px"; 
	}
	// Array.from(document.querySelectorAll(".cube")).forEach(function(actual) { respuesta(actual.style.transform);});
}
</script>
	<body>
		<div id="consolelog" style="float:left;width:100%;overflow:hidden;background:rgba(174,189,176,0.5);" id="" class="" >***</div>
		Upside and set horizontal the cube!
		<div style="float:left;width:100%;overflow:hidden;position:absolute;bottom:-400px;left;0px;" id="divmoon"><img src="media/moon.png"></div>
		<div style="float:left;width:100%;overflow:hidden;padding:50px 0px;" >		
			<div class="wrapper">
				<article class="viewport">
					<section class="cube">
						<div>
							<img src='media/vw.png' style="height:100%;width:100%;">
						</div>
						<div>
							<img src='media/store.png' style="height:100%;width:100%;">
						</div>
						<div>
							<img src='media/castle.png' style="height:100%;width:100%;">
						</div>
						<div>
							<img src='media/apollo.png' style="height:100%;width:100%;">
						</div>
						<div>
							<img src='media/hotdog.png' style="height:100%;width:100%;">
						</div>
						<div>
							<img src='media/logo.png' style="height:100%;width:100%;">
						</div>
					</section>
				</article>
			</div>
		</div>
		<div style="float:left;overflow:hidden;font-size:40px;transform: rotate(-90deg);margin:0px -50px;font-weight:bold;font-family:verdana;text-shadow:1px 1px 10px #ccf;color:#000;" id="" class="afontech" >Move3D</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="hallarpta();parent.saveforlater('016',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="hallarpta();parent.taskdone('016',rpta)">Aufgabe erledigt!</button>
	</div>
	</body>
</html>