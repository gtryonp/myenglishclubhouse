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
	background:url(media/usa.jpg) center center no-repeat fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.colortitulo	{
	background: -webkit-linear-gradient(45deg, #fff, #88a, #fff);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;	
}
.fontech {
	font-family: ech;
}
.subtitulo	{
	text-shadow:1px 0px 1px #000;padding:15px 0px 0px 0px;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;color:#000;" >
	<div style="float:left;overflow:hidden;font-size:60px;position:relative;height:120px;font-weight:bold;" class="colortitulo">HIDROSFERA</div>
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;font-weight:bold;color:#fff;' class='fontech' id='divspeech' >
		El agua es la sustancia en la cual se originó la vida y en la que evolucionaron las especies de plantas y animales que más tarde colonizarían la tierra firme. Es también el recurso natural de mayor volumen y extensión en nuestro planeta, ya que ocupa 71% (es decir, tres cuartas partes del planeta) contra una cuarta parte (29%) de los continentes e islas. En realidad, el planeta Tierra se debería llamar Agua. Además de ser formadora de suelos es una gran modeladora de la corteza terrestre capaz de crear valles, cañones y nivelar montañas. Determina en buen grado el clima y es un recurso imprescindible para la industria y la generación de energía eléctrica. No debemos olvidar que es el hábitat de numerosas especies de animales y plantas acuáticas y subacuáticas e indispensable para el hombre, ya que representa 70 % del total de masa en nuestro cuerpo. Básicamente estamos hechos de agua<br/>
		<img src="media/relieve_submarino.jpg" style="margin:5px;width:calc(100% - 10px);">
		<div style="float:left;width:100%;overflow:hidden;text-shadow:1px 0px 1px #000;padding:20px 0px 0px 0px;" id="" class="" >El relieve submarino</div>
		Existen dos tipos de relieve: el relieve oceánico y el relieve submarino. Se sabe poco sobre el relieve submarino; lo que más ha sido estudiado son las regiones más someras y a las que les llega la luz. El fondo submarino ha sido investigado de manera indirecta con el uso de radares y submarinos no tripulados y hasta ahora se han identificado algunas zonas del relieve, de acuerdo con su profundidad.<br/>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="subtitulo" >Plataforma continental</div>
		Esta parte de la corteza oceánica no llega a más de 200 m de profundidad. Generalmente la luz llega hasta el fondo, por lo tanto, es rica en especies animales y vegetales y predomina la sedimentación de arenas.<br/>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="subtitulo" >Talud continental</div>
		Es una pared muy pronunciada que cae desde la plataforma continental (aprox. 200 m de profundidad), hasta la llanura abisal, que se encuentra a 2,000 o 3,000 m de profundidad.<br/>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="subtitulo" >Llanura abisal</div>
		La llanura abisal o cuenca oceánica es la menos estudiada, sin embargo, se cree que está conformada por enormes planicies, cordilleras submarinas (dorsales oceánicas), volcanes submarinos, fosas marinas o trincheras y fuentes hidrotermales o humeros, algo muy parecido al relieve continental		
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</div>	
</body>