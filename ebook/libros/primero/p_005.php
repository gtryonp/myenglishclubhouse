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
		document.getElementById("divspeech").innerHTML="El color (inglés americano) o el color (inglés de la Commonwealth) es la característica de la percepción visual descrita a través de las categorías de color, con nombres como rojo, naranja, amarillo, verde, azul o púrpura. Esta percepción del color deriva de la estimulación de las células fotorreceptoras (en particular, las células cónicas en el ojo humano y otros ojos de vertebrados) por radiación electromagnética (en el espectro visible en el caso de los humanos). Las categorías de color y las especificaciones físicas del color están asociadas con los objetos a través de las longitudes de onda de la luz que se refleja de ellos y sus intensidades. Esta reflexión se rige por las propiedades físicas del objeto, como la absorción de luz, los espectros de emisión, etc. Al definir un espacio de color, los colores se pueden identificar numéricamente por coordenadas, que en 1931 también se nombraron en un acuerdo global con nombres de color acordados internacionalmente como se mencionó anteriormente. (rojo, naranja, etc.) por la Comisión Internacional de Iluminación. El espacio de color RGB, por ejemplo, es un espacio de color que corresponde a la tricromacia humana y a los tres tipos de células de cono que responden a tres bandas de luz: longitudes de onda largas, que alcanzan un máximo cercano a 564–580 nm (rojo); longitud de onda media, pico cerca de 534–545 nm (verde); y luz de longitud de onda corta, cerca de 420–440 nm (azul). [1] [2] También puede haber más de tres dimensiones de color en otros espacios de color, como en el modelo de color CMYK, en el que una de las dimensiones se relaciona con el colorido de un color). La fotorreceptividad de los 'ojos' de otras especies también varía considerablemente de la de los humanos y, por lo tanto, da como resultado diferentes percepciones de color que no se pueden comparar fácilmente entre sí. Las abejas melíferas y los abejorros, por ejemplo, tienen una visión tricromática del color sensible al ultravioleta pero insensible al rojo. Las mariposas de Papilio poseen seis tipos de fotorreceptores y pueden tener visión pentacromática. [3] El sistema de visión de color más complejo en el reino animal se ha encontrado en estomatópodos (como el camarón mantis) con hasta 12 tipos de receptores espectrales que funcionan como múltiples unidades dicromáticas. [4] La ciencia del color a veces se llama cromática, colorimetría o simplemente ciencia del color. Incluye el estudio de la percepción del color por el ojo y el cerebro humanos, el origen del color en los materiales, la teoría del color en el arte y la física de la radiación electromagnética en el rango visible (es decir, lo que comúnmente se conoce simplemente como luz )";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/mm.jpg) no-repeat center center fixed; 
	background-size: cover;
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
  color: #ffa;
  animation: scatter 1.75s infinite;
}
.playful span:nth-child(2n) {color: #ff0;animation-delay: 0.3s;}
.playful span:nth-child(3n) {animation-delay: 0.6s;}
.playful span:nth-child(4n) {animation-delay: 0.9s;}
@keyframes scatter {
  0% {color:#f00;}
  20% {color:#0ff;}
  40% {color:#00f;}
  60% {color:#ff0;top: -5px;}
  80% {color:#fff;}
  100% {color:#0f0;}
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style="float:left;text-align:justify;font-size:21px;padding:20px 10px 30px 50px;font-weight:bold;height:calc(100% - 60px);width:calc(100% - 60px);" class='fontech'>
		<div style="float:left;width:100%;overflow:hidden;text-align:center;font:bold 60px verdana;text-shadow:2px 2px 2px #000;" id="" class="playful" >
			<span>C</span>
			<span>O</span>
			<span>L</span>
			<span>O</span>
			<span>R</span>
			<span>S</span>
		</div>
		<div style="float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;" class="fontech" id="divspeech" ondblclick="cambio()">
			Color (American English), or colour (Commonwealth English), is the characteristic of visual perception described through color categories, with names such as red, orange, yellow, green, blue, or purple. This perception of color derives from the stimulation of photoreceptor cells (in particular cone cells in the human eye and other vertebrate eyes) by electromagnetic radiation (in the visible spectrum in the case of humans). Color categories and physical specifications of color are associated with objects through the wavelengths of the light that is reflected from them and their intensities. This reflection is governed by the object's physical properties such as light absorption, emission spectra, etc.
			By defining a color space, colors can be identified numerically by coordinates, which in 1931 were also named in global agreement with internationally agreed color names like mentioned above (red, orange, etc.) by the International Commission on Illumination. The RGB color space for instance is a color space corresponding to human trichromacy and to the three cone cell types that respond to three bands of light: long wavelengths, peaking near 564–580 nm (red); medium-wavelength, peaking near 534–545 nm (green); and short-wavelength light, near 420–440 nm (blue).[1][2] There may also be more than three color dimensions in other color spaces, such as in the CMYK color model, wherein one of the dimensions relates to a color's colorfulness).
			The photo-receptivity of the "eyes" of other species also varies considerably from that of humans and so results in correspondingly different color perceptions that cannot readily be compared to one another. Honeybees and bumblebees for instance have trichromatic color vision sensitive to ultraviolet but is insensitive to red. Papilio butterflies possess six types of photoreceptors and may have pentachromatic vision.[3] The most complex color vision system in the animal kingdom has been found in stomatopods (such as the mantis shrimp) with up to 12 spectral receptor types thought to work as multiple dichromatic units.[4]
			The science of color is sometimes called chromatics, colorimetry, or simply color science. It includes the study of the perception of color by the human eye and brain, the origin of color in materials, color theory in art, and the physics of electromagnetic radiation in the visible range (that is, what is commonly referred to simply as light).	
		</div>
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>