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
			<span>F</span>
			<span>A</span>
			<span>R</span>
			<span>B</span>
			<span>E</span>
		</div>
		<div style="float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;" class="fontech" id="divspeech" ondblclick="cambio()">
Farbe ist das Merkmal der visuellen Wahrnehmung, das durch Farbkategorien mit Namen wie Rot, Orange, Gelb, Grün, Blau oder Lila beschrieben wird. Diese Farbwahrnehmung beruht auf der Stimulation von Photorezeptorzellen (insbesondere Kegelzellen im menschlichen Auge und anderen Wirbeltieraugen) durch elektromagnetische Strahlung (im sichtbaren Spektrum beim Menschen). Farbkategorien und physikalische Farbspezifikationen werden Objekten über die Wellenlängen des von ihnen reflektierten Lichts und ihre Intensität zugeordnet. Diese Reflexion wird durch die physikalischen Eigenschaften des Objekts wie Lichtabsorption, Emissionsspektren usw. bestimmt.
Durch die Definition eines Farbraums können Farben numerisch durch Koordinaten identifiziert werden, die 1931 von der Internationalen Beleuchtungskommission in globaler Übereinstimmung mit international vereinbarten Farbnamen wie oben (rot, orange usw.) benannt wurden. Der RGB-Farbraum ist beispielsweise ein Farbraum, der der menschlichen Trichromie und den drei Kegelzelltypen entspricht, die auf drei Lichtbänder reagieren: lange Wellenlängen mit einem Peak nahe 564–580 nm (rot); mittlere Wellenlänge, Peak nahe 534–545 nm (grün); und kurzwelliges Licht nahe 420–440 nm (blau). [1] [2] Es kann auch mehr als drei Farbdimensionen in anderen Farbräumen geben, wie im CMYK-Farbmodell, wobei sich eine der Dimensionen auf die Farbigkeit einer Farbe bezieht.
Die Photoempfänglichkeit der "Augen" anderer Arten unterscheidet sich ebenfalls erheblich von der des Menschen und führt zu entsprechend unterschiedlichen Farbwahrnehmungen, die nicht ohne weiteres miteinander verglichen werden können. Honigbienen und Hummeln haben zum Beispiel ein trichromatisches Farbsehen, das gegenüber Ultraviolett empfindlich ist, aber gegenüber Rot unempfindlich ist. Papilio-Schmetterlinge besitzen sechs Arten von Photorezeptoren und können ein pentachromatisches Sehvermögen haben. [3] Das komplexeste Farbsichtsystem im Tierreich wurde bei Stomatopoden (wie der Mantis-Garnele) mit bis zu 12 Spektralrezeptortypen gefunden, von denen angenommen wird, dass sie als mehrere dichromatische Einheiten funktionieren. [4]
Die Wissenschaft der Farbe wird manchmal als Chromatik, Kolorimetrie oder einfach als Farbwissenschaft bezeichnet. Es umfasst die Untersuchung der Wahrnehmung von Farbe durch das menschliche Auge und Gehirn, den Ursprung von Farbe in Materialien, die Farbtheorie in der Kunst und die Physik der elektromagnetischen Strahlung im sichtbaren Bereich (dh das, was üblicherweise einfach als Licht bezeichnet wird) ).		</div>
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>