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
		document.getElementById("divspeech").innerHTML="Película o imagen en movimiento, es una forma de arte visual que se utiliza para simular experiencias que comunican ideas, historias, percepciones, sentimientos, belleza o atmósfera mediante el uso de imágenes en movimiento. Estas imágenes suelen ir acompañadas de sonido y, más raramente, de otros estímulos sensoriales. [1] La palabra cine, abreviatura de cinematografía, se usa a menudo para referirse al cine y la industria cinematográfica, y a la forma de arte que es el resultado de ello. Las imágenes en movimiento de una película se crean al fotografiar escenas reales con una cámara cinematográfica, al fotografiar dibujos o modelos en miniatura utilizando técnicas de animación tradicionales, mediante CGI y animación por computadora, o mediante una combinación de algunas o todas estas técnicas. y otros efectos visuales.";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/m1.jpg) center center; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/ech.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:tags;
	src: url(media/ms.ttf);
}
.fonttags {
	font-family: tags;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	


.playful span {
	position: absolute;
	afont-size: 18px;
	atext-align: center;
	atext-decoration: none;
	animation:spin 24s linear;
	aanimation-direction: alternate-reverse;
}
.playful span:nth-child(1n) {
  animation-delay: 0.0s;
	left:40px;
}
.playful span:nth-child(2n) {
  animation-delay: 4.0s;
	left:120px;
}
.playful span:nth-child(3n) {
  animation-delay: 8.0s;
	left:180px;
}

.playful span:nth-child(4n) {
  animation-delay: 12.0s;
	left:240px;
}
.playful span:nth-child(5n) {
  animation-delay: 16.0s;
	left:340px;
}
.playful span:nth-child(6n) {
  animation-delay: 20.0s;
	left:320px;
}
@keyframes spin { 
	0% 		{	transform: rotate(0deg) 	rotateX(0deg) rotateY(0deg);color:#fff;opacity:1;}
	100% 	{	transform: rotate(0deg) 	rotateX(0deg) rotateY(0deg);color:#ff0;opacity:.5;}
} 

</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 20px;height:98%;" class=''>
		<div style="text-align:center;float:left;width:100%;overflow:hidden;font-size:120px;color:#88f;text-shadow:2px 2px 1px #fff,4px 4px 1px #f00;letter-spacing: 0px;background:rgba(0,0,0,0.5);" id="" class="fonttags playful">
			&nbsp;
			<span>F</span>
			<span>I</span>
			<span>L</span>
			<span>M</span>
			<span>E</span>
			<span>&nbsp;</span>
		</div>
	<div style='float:left;text-align:justify;font-size:40px;padding:0px 50px;font-weight:bold;color:#f60;text-shadow:2px 2px 1px #000;' class='fontech' id='divspeech' ondblclick="cambio()">
Film, Film oder Bewegtbild ist eine visuelle Kunstform, mit der Erfahrungen simuliert werden, die mithilfe von Bewegtbildern Ideen, Geschichten, Wahrnehmungen, Gefühle, Schönheit oder Atmosphäre vermitteln. Diese Bilder werden im Allgemeinen von Ton und seltener von anderen sensorischen Stimulationen begleitet. [1] Das Wort "Kino", kurz für "Kinematographie", wird häufig verwendet, um sich auf das Filmemachen und die Filmindustrie sowie auf die daraus resultierende Kunstform zu beziehen. Die bewegten Bilder eines Films werden durch Fotografieren tatsächlicher Szenen mit einer Filmkamera, durch Fotografieren von Zeichnungen oder Miniaturmodellen unter Verwendung traditioneller Animationstechniken, mittels CGI und Computeranimation oder durch eine Kombination einiger oder aller dieser Techniken erstellt. und andere visuelle Effekte.
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>