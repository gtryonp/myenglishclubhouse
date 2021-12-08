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
function cambio()	{
	if(document.getElementById("divspeech").classList.contains("spa"))	{
		document.getElementById("divspeech").classList.remove("spa")
		document.getElementById("divspeech").innerHTML=divspeechtxt;
		msg.lang = 'es';
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
	background:url(media/m1.jpg) center center fixed; 
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
	animation:spin 24s linear;
}
.playful span:nth-child(1n) {
  animation-delay: 0.0s;
}
.playful span:nth-child(2n) {
  animation-delay: 4.0s;
}
.playful span:nth-child(3n) {
  animation-delay: 8.0s;
}

.playful span:nth-child(4n) {
  animation-delay: 12.0s;
}
.playful span:nth-child(5n) {
  animation-delay: 16.0s;
}
.playful span:nth-child(6n) {
  animation-delay: 20.0s;
}
@keyframes spin { 
	0% 		{	transform: rotate(0deg) 	rotateX(0deg) rotateY(0deg);color:#fff;opacity:1;}
	100% 	{	transform: rotate(0deg) 	rotateX(0deg) rotateY(0deg);color:#ff0;opacity:.5;}
} 

</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 20px;height:98%;" class=''>
		<div style="text-align:center;float:left;width:100%;overflow:hidden;font-size:70px;color:#88f;text-shadow:2px 2px 1px #fff,4px 4px 1px #f00;letter-spacing: 0px;background:rgba(0,0,0,0.5);" id="" class="fonttags playful">
			<span>S</span>
			<span>I</span>
			<span>E</span>
			<span>R</span>
			<span>R</span>
			<span>A</span>
			<span>D</span>
			<span>E</span>
			<span>L</span>
			<span>P</span>
			<span>E</span>
			<span>R</span>
			<span>U</span>
		</div>
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;font-weight:bold;color:#f60;text-shadow:2px 2px 1px #000;' class='fontech' id='divspeech'  >
En el Perú, la región de la Sierra, también llamada Región andina, Serranía o Andes peruanos, es la región montañosa y de altiplanicies del país constituida por las tierras medias y altas de la Cordillera de los Andes. Se extiende a lo largo del país de norte a sur y dentro de la geografía del Perú constituye una región geográfica tradicional. Limita al oeste con la región de la Costa y al este con la Selva. Al norte tiene continuidad con la Región Interandina del Ecuador y al sur con la Región Andina de Bolivia y de Chile.<br/>
La región andina es un concepto orográfico, biogeográfico y cultural. Orográficamente es producto de elevación y plegamiento rocoso que se originó durante el Cretáceo, cuando la corteza terrestre de la placa de Nazca inició la subducción bajo la placa sudamericana, dando lugar a un elevamiento que llega hasta los 6768 msnm en el nevado Huascarán y a la formación de una cordillera volcánica al sur del Perú. Biogeográficamente es una región que presenta una vegetación con una densidad intermedia entre la costa desértica y la selva tropical, y con clima de montaña que va de templado a frío según la altitud. Culturalmente está relacionado con la cultura andina del Perú, que étnicamente es quechua y aimara mayormente.<br/>
Clima de la sierra<br/>
El clima de la Sierra está relacionado con la altitud, y la cercanía a la costa desértica o a la selva húmeda. En general se considera que el clima serrano característico va de templado a frío, con aire muy seco y tiene dos fases estacionales, una lluviosa entre noviembre y marzo, y una seca de abril a octubre. El piso nival de congelación permanente comienza a los 4,800 msnm como promedio, por lo que hay numerosas montañas y cordilleras nevadas. Sin embargo, el calentamiento global está variando estas condiciones, por lo que el hielo por encima de los 5,000 msnm está en retroceso.1​<br/>
Cordilleras<br/>
Se considera que hay unas 20 cordilleras nevadas, las cuales se agrupan en tres sectores de norte a sur:<br/>
Los Andes del norte: Desde la frontera con Ecuador hasta el nudo de Pasco. Destaca por su altitud la Cordillera Blanca en Ancash.<br/>
Los Andes centrales: Del nudo de Pasco al nudo de Vilcanota.<br/>
Los Andes del Sur: Desde el nudo de Vilcanota hasta las fronteras con Bolivia y Chile, envolviendo todo el Altiplano peruano.<br/>
Por otro lado se pueden dividir también de oeste a este en las siguientes 3 cordilleras:<br/>
La Cordillera Occidental: Tiene la mayor altitud continua, por lo que constituye la divisoria continental entre la cuenca del Pacífico y las cuencas al interior del continente.<br/>
La Cordillera Central: En el sector norte divide los valles interandinos del Marañón y del Huallaga, y en el sector centro es discontínua.<br/>
La Cordillera Oriental: En su mayor parte es una cordillera de selva de poca altitud, salvo al sur que es divisoria entre la cuenca del Titicaca y la cuenca amazónica.<br/>
Pisos altitudinales<br/>
El geógrafo peruano Javier Pulgar Vidal vio que los pisos ecológicos de los Andes peruanos están en relación con su altitud. Haciendo un aparte del piso basal donde se sitúa la Costa y la Selva, en los Andes se definen las siguientes regiones:<br/>
Yunga marítima: De 500 a 2,300 msnm del flanco occidental de los Andes peruanos, equivalente a un piso altitudinal de premontano a montano bajo.<br/>
Yunga fluvial: De 1,000 a 2,300 msnm del flanco oriental, equivalente a un piso montano bajo.<br/>
Quechua: De 2,300 a 3,500 msnm, equivalente a un piso montano alto.<br/>
Suni: De 3,500 a 4,000 msnm, equivalente a un piso subalpino.<br/>
Puna: De 4,000 a 4,800 msnm, equivalente a un piso alpino.<br/>
Janca: De 4,800 a 6,768 msnm, equivalente a un piso nival.

	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
</div>
</body>