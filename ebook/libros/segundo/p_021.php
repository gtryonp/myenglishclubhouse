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
		document.getElementById("divspeech").innerHTML="Un lenguaje es un sistema estructurado de comunicación. El lenguaje, en un sentido más amplio, es el método de comunicación que implica el uso de lenguajes, especialmente humanos. [1] [2] [3]<br/> El estudio científico del lenguaje se llama lingüística. Preguntas sobre la filosofía del lenguaje, como si las palabras pueden representar la experiencia, se han debatido al menos desde Gorgias y Platón en la antigua Grecia. Pensadores como Rousseau han argumentado que el lenguaje se originó de las emociones, mientras que otros como Kant sostuvieron que se originó del pensamiento racional y lógico. Filósofos del siglo XX como Wittgenstein argumentaron que la filosofía es realmente el estudio del lenguaje. Figuras importantes en lingüística incluyen Ferdinand de Saussure y Noam Chomsky.<br/> Las estimaciones de la cantidad de idiomas humanos en el mundo varían entre 5,000 y 7,000. Sin embargo, cualquier estimación precisa depende de la distinción arbitraria (dicotomía) entre idiomas y dialecto. [4] Los idiomas naturales se hablan o se firman, pero cualquier idioma se puede codificar en medios secundarios mediante estímulos auditivos, visuales o táctiles, por ejemplo, por escrito, silbidos, señas o braille. Esto se debe a que el lenguaje humano es independiente de la modalidad. Dependiendo de las perspectivas filosóficas con respecto a la definición del lenguaje y el significado, cuando se usa como un concepto general, el 'lenguaje' puede referirse a la capacidad cognitiva para aprender y usar sistemas de comunicación compleja, o para describir el conjunto de reglas que componen estos sistemas, o el conjunto de enunciados que se pueden producir a partir de esas reglas. Todos los idiomas se basan en el proceso de semiosis para relacionar signos con significados particulares. Los lenguajes oral, manual y táctil contienen un sistema fonológico que gobierna cómo se usan los símbolos para formar secuencias conocidas como palabras o morfemas, y un sistema sintáctico que gobierna cómo se combinan palabras y morfemas para formar frases y expresiones";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
html,	
body	{
	background:url(media/ga1.jpg) center center; 
	background-size: cover;
	background-attachment: fixed;
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
.playful span {
  position: relative;
  letter-spacing:-24px;
  color: #ff0;
	text-shadow:1px 1px 10px #fff;
  animation: scatter 5s infinite;
}
.playful span:nth-child(2n) {
  color: #f00;
  animation-delay: 0.3s;
}
.playful span:nth-child(3n) {
  color: #fff;
  animation-delay: 0.15s;
}
.playful span:nth-child(4n) {
  color: #fa0;
  animation-delay: 0.4s;
}
.playful span:nth-child(5n), .playful span:nth-child(8n) {
  color: #a00;
  animation-delay: 0.25s;
}
@keyframes scatter {
  0% {
    top: 0;
  }
  50% {
    top: -10px;
  }
  100% {
    top: 0;
  }
}
body {
  background-color: $background;
}
h1 {
	padding:10px 0px 0px 10px;
  font-size: 65px;
  font-family: ech
  display: block;
  width: 100%;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<h1 class="playful" >
	<span>H</span>
	<span>u</span>
	<span>e</span>
	<span>l</span>
	<span>l</span>
	<span>a</span>
	<span>s</span>
	<span>d</span>
	<span>e</span>
	<span>l</span>
	<span>c</span>
	<span>a</span>
	<span>m</span>
	<span>b</span>
	<span>i</span>
	<span>o</span>
	<span>g</span>
	<span>l</span>
	<span>o</span>
	<span>b</span>
	<span>a</span>
	<span>l</span>
</h1>
<div style='float:left;text-align:justify;font-size:28px;padding:0px 10px 0px 50px;letter-spacing: 2px;word-spacing: 6px;color:#cff;text-shadow:1px 1px 1px #000;' class='fontech'>
	<div style='float:left;text-align:justify;font-size:24px;padding:0px 50px;font-weight:bold;letter-spacing:0px;' class='fontech' id='divspeech'  >
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;color:#fff;" id="" class="" >EN LA COMPOSICION ATMOSFERICA:</div>
		Aumento del bióxido de carbono (CO2) entre 1,750 y 2,000 de 280 ppm (partes por millón) a 368 ppm. Aumento del metano (CH4) entre 1,750 y 2,000 de 0.7 ppm a 1.75 ppm. Aumento del óxido nitroso (N2O) entre 1,750 y 2,000 de 0.27 ppm a 0.32 ppm<br/>
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;color:#fff;" id="" class="" >EN EL CLIMA</div>
		<img src="media/air.gif" style="margin:5px;float:right;width:25%;">
		Aumento de la temperatura media global durante el siglo xx entre 0.6 y 0.2 ° C. El año 2005 registró la temperatura global más cálida hasta la fecha.<br/>
		La década 1990-2000 fue la más cálida de todo el milenio en el hemisferio norte.La temperatura media de los primeros años del siglo xxi ha superado la de la década anterior.La diferencia entre las temperaturas mínimas y máximas diarias disminuyó entre 1950 y 2000.Aumento de los episodios de calor extremo.Disminución de los episodios de frío extremo.
		Aumento entre 5 y 10% de la precipitación en el hemisferio norte, aunque en algunas regiones ha disminuido.Aumento considerable de la precipitación en latitudes medias y altas.Aumento de sequías o periodos más largos sin lluvia.Aumento del número de huracanes en el Océano Atlántico.
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;color:#fff;" id="" class="" >EN EL OCEANO</div>
		<img src="media/ocean.gif" style="margin:5px;float:right;width:25%;">
		Aumento medio global del nivel del mar de entre 10 y 25 cm en los últimos 100 años. Aumento medio de la temperatura del océano de 0.31° C hasta 300 m de profundidad en los últimos 50 años. Disminución de la extensión del hielo Ártico en verano en 8 % por década desde finales de 1970, con tendencia a la aceleración. La extensión del hielo en el mes de marzo fue mínima en el año 2006. Aumento de CO2  y acidificación del océano.<br/> Centenares de compuestos sintéticos nuevos hallados en las partes más aisladas de los océanos a la mayor profundidad.
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;color:#fff;" id="" class="" >EN EL ECOSISTEMA</div> 
		<img src="media/coast.gif" style="margin:5px;float:right;width:25%;">
		Deterioro generalizado de la calidad del agua por lluvia ácida, eutrofización (aportes excesivos de nitrógeno y fósforo) y por aportes de contaminantes. Alteración de los ciclos biológicos de los organismos (migración, periodos de reproducción).Extinción de más de 800 especies durante los últimos siglos. Las tasas de extinción actuales son más de 1,000 veces superiores a las tasas anteriores al impacto humano. Disminución de las especies pesqueras en el océano.Pérdida de los hábitat: disminución anual de un 0.5% de los bosques tropicales, de un 4 a 9 % de los arrecifes de coral, de 1 a 2 % de manglares y de 2 a 5 % de las praderas submarinas.<br/>Disminución de la productividad de los ecosistemas, excepto en zonas eutrofizadas.Episodios de mortalidad debido a niveles bajos de oxígeno en ecosistemas costeros.Aumento de la fragilidad de los ecosistemas y paisajes debido a perturbaciones.Alteración de los recursos y procesos que aportan los ecosistemas.
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
</div>	
</body>