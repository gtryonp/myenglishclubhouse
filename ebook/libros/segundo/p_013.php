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
	msg.pitch = 1; // From 0 to 2
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
	background:url(media/comics.jpg) center center #9DBBD8; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:cs;
	src: url(media/comics.ttf);
}
.fontcs {
	font-family: cs;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style="float:left;width:calc(100% - 20px);color:rgba(192,255,255,0.5);font-size:70px;padding:0px 10px;" id="" class="fontcs" >ATMOSFERA</div>
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;font-weight:bold;color:#5ce;' class='fontech' id='divspeech' >
		La atmósfera es una envoltura gaseosa que forma una capa de varios kilómetros de altura; rodea a la Tierra y se encuentra unida a ésta por la atracción gravitacional. Empezó a formarse hace unos 4,600 millones de años con el mismo nacimiento del planeta, careciendo al principio de oxígeno (O2 ). Su transformación tuvo lugar hace unos 2,000 millones de años, cuando inició la actividad fotosintética de las plantas, generadora de oxígeno y ozono, y fue hasta hace unos 1,000 años cuando la atmósfera llegó a tener una composición similar a la actual. Esta envoltura es una mezcla de gases, vapor de agua, partículas de polvo, hollín y otros elementos que varían dependiendo del lugar y de otros factores. La atmósfera funciona como un escudo o barrera que protege a nuestro planeta de los meteoritos y absorbe parte de la radiación solar ultravioleta (uv-b), de tal manera que se atenúan las diferencias de la temperatura entre el día y la noche.<br/>
		
		<div style="float:left;width:100%;overflow:hidden;padding:20px 0px 0px 0px;text-align:center;color:#ff0;" id="" class="" >CAPAS DE LA ATMOSFERA</div>

		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;text-shadow:1px 0px 1px #000;color:#fff;" id="" class="" >Troposfera</div>	
		Esta capa se encuentra en contacto con la superficie terrestre<br/>
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;text-shadow:1px 0px 1px #000;color:#fff;" id="" class="" >Estratosfera</div>	
		Esta es la segunda capa después de la troposfera<br/>
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;text-shadow:1px 0px 1px #000;color:#fff;" id="" class="" >Mesosfera</div>
		Este estrato se ubica entre los 85 y 120 km de altura<br/>
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;text-shadow:1px 0px 1px #000;color:#fff;" id="" class="" >Ionosfera</div>
		Esta capa también es llamada termosfera<br/>
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;text-shadow:1px 0px 1px #000;color:#fff;" id="" class="" >Exosfera</div>
		Después de ionosfera se encuentra la exosfera, la última capa que compone a la atmósfera terrestre y que se encuentra en contacto con el espacio.
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</body>