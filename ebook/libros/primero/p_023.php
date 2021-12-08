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
	<div style="float:left;width:100%;overflow:hidden;font-size:150px;color:#fff;text-shadow:1px 1px 1px #000;" id="" class="fontmusic" >Music</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;color:#fff;' class='fontech' id='divspeech' ondblclick="cambio()">
		Music is an art form, and cultural activity, whose medium is sound. General definitions of music include common elements such as pitch (which governs melody and harmony), rhythm (and its associated concepts tempo, meter, and articulation), dynamics (loudness and softness), and the sonic qualities of timbre and texture (which are sometimes termed the "color" of a musical sound). Different styles or types of music may emphasize, de-emphasize or omit some of these elements. Music is performed with a vast range of instruments and vocal techniques ranging from singing to rapping; there are solely instrumental pieces, solely vocal pieces (such as songs without instrumental accompaniment) and pieces that combine singing and instruments. The word derives from Greek μουσική (mousike; "art of the Muses").[1] See glossary of musical terminology.	
	</div>
	<div style="float:left;width:100%;overflow:hidden;color:rgba(255,255,0,1);font-size:30px;padding:10px 0px;" id="" class="" >Press keys : JJJ&nbsp;JJJ&nbsp;JLGHJ&nbsp;KKK&nbsp;KKJJ&nbsp;JJHHJH&nbsp;L</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>