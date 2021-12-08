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
	msg.lang = 'en';
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
function cambio()	{
	if(document.getElementById("divspeech").classList.contains("spa"))	{
		document.getElementById("divspeech").classList.remove("spa")
		document.getElementById("divspeech").innerHTML=divspeechtxt;
		msg.lang = 'en';
		msg.text = document.getElementById("divspeech").innerHTML;
	} else {
		divspeechtxt=document.getElementById("divspeech").innerHTML;
		document.getElementById("divspeech").innerHTML="O simplemente espacio, es la extensión que existe más allá de la Tierra y entre los cuerpos celestes. El espacio exterior no está completamente vacío: es un vacío duro que contiene una baja densidad de partículas, predominantemente un plasma de hidrógeno y helio, así como radiación electromagnética, campos magnéticos, neutrinos, polvo y rayos cósmicos. La temperatura de referencia del espacio exterior, según lo establecido por la radiación de fondo del Big Bang, es de 2.7 grados Kelvin (−270.45 ° C; −454.81 ° F). [1] El plasma entre las galaxias representa aproximadamente la mitad de la materia bariónica (ordinaria) en el universo; Tiene una densidad numérica de menos de un átomo de hidrógeno por metro cúbico y una temperatura de millones de grados Kelvin. [2] Las concentraciones locales de materia se han condensado en estrellas y galaxias. Los estudios indican que el 90% de la masa en la mayoría de las galaxias está en una forma desconocida, llamada materia oscura, que interactúa con otra materia a través de fuerzas gravitacionales pero no electromagnéticas. Las observaciones sugieren que la mayoría de la energía de masa en el universo observable es energía oscura, un tipo de energía de vacío que no se conoce bien. [5] [6] El espacio intergaláctico ocupa la mayor parte del volumen del universo, pero incluso las galaxias y los sistemas estelares consisten casi por completo en espacio vacío.";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/sp1.jpg) no-repeat center center; 
	background-size: cover;
	height:100%;
	width:100%;
	padding:0px;
	margin:0px;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:space;
	src: url(media/space.otf);
}
.fontspace {
	font-family: space;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" class='fontech'>
	<div style="float:left;width:100%;overflow:hidden;font-size:60px;font-weight:bold;color:#fff;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,2px 2px 1px #000,3px 3px 1px #000;opacity:0.5" id="" class='fontspace'>Outer space</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;color:#ffa;' class='fontech' id='divspeech' ondblclick="cambio()">
		Or simply space, is the expanse that exists beyond Earth and between celestial bodies. Outer space is not completely empty—it is a hard vacuum containing a low density of particles, predominantly a plasma of hydrogen and helium, as well as electromagnetic radiation, magnetic fields, neutrinos, dust, and cosmic rays. The baseline temperature of outer space, as set by the background radiation from the Big Bang, is 2.7 kelvins (−270.45 °C; −454.81 °F).[1] The plasma between galaxies accounts for about half of the baryonic (ordinary) matter in the universe; it has a number density of less than one hydrogen atom per cubic metre and a temperature of millions of kelvins.[2] Local concentrations of matter have condensed into stars and galaxies. Studies indicate that 90% of the mass in most galaxies is in an unknown form, called dark matter, which interacts with other matter through gravitational but not electromagnetic forces.[3][4] Observations suggest that the majority of the mass-energy in the observable universe is dark energy, a type of vacuum energy that is poorly understood.[5][6] Intergalactic space takes up most of the volume of the universe, but even galaxies and star systems consist almost entirely of empty space.
	</div>
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>