<script>
var modo=1;	
var msg = new SpeechSynthesisUtterance();
var divspeechtxt="";
window.onload=function()	{
	var buffer=document.getElementById("divspeech").innerText;
	var voices = window.speechSynthesis.getVoices();
	msg.voice = voices[0]; 
	msg.volume = 1; // From 0 to 1
	msg.rate = 1; // From 0.1 to 10
	msg.pitch = 2; // From 0 to 2
	msg.lang = 'es';
	msg.text = buffer;
}	
function speechme()	{
	modo++;
	if(modo/2==parseInt(modo/2))	{
		speechSynthesis.speak(msg);		
	} else {
		speechSynthesis.cancel();		
	};
}
</script>
<style>
body	{
	background:url(media/nighti.jpg) no-repeat center center fixed; 
	background-size: cover;
	padding:1% 0%;
	margin:0px auto;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:play;
	src: url(media/play.otf);
}
.fontplay {
	font-family: play;
	background: -webkit-linear-gradient(45deg, #f00, #fff 30%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;	
}

.boton	{
	border:0px solid;
	font-size:32px;
	background:#ddd;
	cursor:pointer;
}
.boton:hover	{
	border:0px solid;
	background:#bbb;
	color:#fff;
}
.clasenumero {
	acolor:#f00;
}	
.cadadia	{
	color:#a00;
	font-weight:bold;
	text-shadow:1px 1px 1px #cff,2px 2px 1px #000;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style='float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;color:#8ac;' class='fontech'>
	<div style='float:left;font-size:52px;color:#12809B;width:100%;' class='fontplay'>LA TIERRA</div>
	<!--div style="float:left;width:100%;overflow:hidden;" id="divspeech"  -->
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;text-shadow:1px 1px 1px #000;color:#ff0;' class='fontech' id='divspeech'>
		Básicamente, la Tierra es un esferoide achatado, casi esférico, ligeramente aplanado en los polos y abultado en el Ecuador debido a su rotación. Aunque si tomamos en cuenta que la superficie de la Tierra no es plana, sino que presenta muchas elevaciones (montañas, volcanes, etc.), valles y depresiones (cuencas oceánicas), la forma correcta de llamarla sería un geoide, término que viene del griego geos = Tierra y eidos = forma.<br/>
		La necesidad del hombre de representar el lugar donde vive y los sitios tales como los cuerpos de agua, las zonas de cacería, los hábitat de la flora y de la fauna, los ríos, lagos, etc., y hasta sus lugares sagrados, se da desde los tiempos más remotos. Por esta razon, los distintos pueblos representaron su espacio geográfico mediante mapas rudimentarios.<br/>
		El paisaje es un concepto utilizado por los geógrafos para explicar y representar de forma sintética e integradora, las relaciones que se han establecido de manera histórica entre las diferentes sociedades con su naturaleza circundante y que han dejado huella en el espacio geográfico. Además de ser un concepto geográfico, el paisaje es una unidad distinguible en el espacio geográfico; es decir, es posible cartografiarlo. Pero para ello, el geógrafo requiere de un cuidadoso análisis sobre los hechos y fenómenos geográficos, tanto físicos y sociales, que han interactuado en cierto lugar y que pueden ser explicados en un mapa. Si bien el paisaje es una unidad a la escala del hombre, es decir, una unidad espacial de escala grande y con mucho detalle, su estudio requiere un doble abordaje: 1. Analizar los aspectos biofísicos que han determinado y potenciado el desarrollo de las actividades humanas sobre éste y 2. Analizar las modificaciones humanas a este medio biofísico. De allí que el paisaje sea un concepto y una unidad sintética e integradora.
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</div>	
</body>