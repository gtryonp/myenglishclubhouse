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
	msg.lang = 'de';
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
		msg.lang = 'de';
		msg.text = document.getElementById("divspeech").innerHTML;
	} else {
		divspeechtxt=document.getElementById("divspeech").innerHTML;
		document.getElementById("divspeech").innerHTML="Un videojuego es un juego electrónico que implica la interacción con una interfaz de usuario o dispositivo de entrada, como un joystick, controlador, teclado o dispositivos de detección de movimiento, para generar retroalimentación visual en un dispositivo de visualización de video bidimensional o tridimensional, como un Televisor, monitor, pantalla táctil o casco de realidad virtual. Los videojuegos se mejoran con la retroalimentación de audio de los altavoces o auriculares y, opcionalmente, con otros tipos de sistemas de retroalimentación, incluida la tecnología háptica. Los videojuegos se definen en función de su plataforma, que incluye juegos de arcade, juegos de consola y juegos de PC. Más recientemente, la industria se ha expandido a los juegos móviles a través de teléfonos inteligentes y tabletas, y juegos remotos en la nube. Los videojuegos se clasifican en una amplia gama de géneros según su tipo de juego y propósito.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/pinball.jpg') center center no-repeat; 
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
	font-family:sports;
	src: url(media/xxx.ttf);
}
.fontsports {
	font-family: sports;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:90px;padding:0px 10px 50px 10px;color:#008;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;font-weight:bold;" class="fontsports"  >Videospiele</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:40px;padding:0px 50px;text-align:justify;line-height:120%;color:#fff;text-shadow:2px 2px 1px #f00;" id='divspeech'  class="fontech" >
	Ein Videospiel ist ein elektronisches Spiel, das die Interaktion mit einer Benutzeroberfläche oder einem Eingabegerät wie einem Joystick, einem Controller, einer Tastatur oder Bewegungserkennungsgeräten umfasst, um visuelles Feedback auf einem zwei- oder dreidimensionalen Videoanzeigegerät wie z Fernsehgerät, Monitor, Touchscreen oder Virtual-Reality-Headset. Videospiele werden durch Audio-Feedback von Lautsprechern oder Kopfhörern und optional durch andere Arten von Feedback-Systemen, einschließlich haptischer Technologie, ergänzt. <br/>
	Videospiele werden basierend auf ihrer Plattform definiert, einschließlich Arcade-Spielen, Konsolenspielen und PC-Spielen. In jüngerer Zeit hat sich die Branche auf mobile Spiele über Smartphones und Tablet-Computer sowie Remote-Cloud-Spiele ausgeweitet. Videospiele werden je nach Art des Spiels und Zweckes in eine Vielzahl von Genres eingeteilt.
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>

