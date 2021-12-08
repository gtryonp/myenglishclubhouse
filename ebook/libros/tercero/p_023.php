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
		document.getElementById("divspeech").innerHTML="La música es una forma de arte y actividad cultural, cuyo medio es el sonido. Las definiciones generales de la música incluyen elementos comunes como el tono (que rige la melodía y la armonía), el ritmo (y sus conceptos asociados tempo, metro y articulación), la dinámica (volumen y suavidad) y las cualidades sonoras del timbre y la textura (que son a veces denominado el 'color' de un sonido musical). Diferentes estilos o tipos de música pueden enfatizar, restar énfasis u omitir algunos de estos elementos. La música se realiza con una amplia gama de instrumentos y técnicas vocales que van desde el canto hasta el rap; solo hay piezas instrumentales, solo piezas vocales (como canciones sin acompañamiento instrumental) y piezas que combinan canto e instrumentos. La palabra deriva del griego μουσική (mousike; 'arte de las musas'). [1] Ver glosario de terminología musical.		";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background: url(media/music.jpg) center center no-repeat;
	background-size: cover;
	overflow:hidden;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
@font-face {
	font-family:music;
	src: url(media/music.ttf);
}
.fontech {
	font-family: ech;
}
.fontmusic {
	font-family: music;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" >
	<div style="float:left;width:100%;overflow:hidden;font-size:150px;color:#fff;text-shadow:1px 1px 1px #000;" id="" class="fontmusic" >Musik</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;color:#fff;' class='fontech' id='divspeech' ondblclick="cambio()">
		Musik ist eine Kunstform und kulturelle Aktivität, deren Medium Klang ist. Zu den allgemeinen Definitionen von Musik gehören allgemeine Elemente wie Tonhöhe (die Melodie und Harmonie regelt), Rhythmus (und die damit verbundenen Konzepte Tempo, Takt und Artikulation), Dynamik (Lautstärke und Weichheit) und die klanglichen Qualitäten von Klangfarbe und Textur (welche sind) manchmal als "Farbe" eines musikalischen Klangs bezeichnet). Verschiedene Musikstile oder -typen können einige dieser Elemente hervorheben, herabsetzen oder weglassen. Musik wird mit einer Vielzahl von Instrumenten und Gesangstechniken gespielt, die vom Singen bis zum Rappen reichen. Es gibt ausschließlich Instrumentalstücke, ausschließlich Vokalstücke (z. B. Lieder ohne Instrumentalbegleitung) und Stücke, die Gesang und Instrumente kombinieren. Das Wort stammt aus dem Griechischen μουσική (mousike; "Kunst der Musen"). [1] Siehe Glossar der musikalischen Terminologie.
	</div>
	<div style="float:left;width:100%;overflow:hidden;color:rgba(255,255,0,1);font-size:30px;padding:10px 0px;" id="" class="" >Tasten drücken : JJJ&nbsp;JJJ&nbsp;JLGHJ&nbsp;KKK&nbsp;KKJJ&nbsp;JJHHJH&nbsp;L</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>