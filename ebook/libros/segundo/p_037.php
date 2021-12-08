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
		document.getElementById("divspeech").innerHTML="Un videojuego es un juego electrónico que implica la interacción con una interfaz de usuario o dispositivo de entrada, como un joystick, controlador, teclado o dispositivos de detección de movimiento, para generar retroalimentación visual en un dispositivo de visualización de video bidimensional o tridimensional, como un Televisor, monitor, pantalla táctil o casco de realidad virtual. Los videojuegos se mejoran con la retroalimentación de audio de los altavoces o auriculares y, opcionalmente, con otros tipos de sistemas de retroalimentación, incluida la tecnología háptica. Los videojuegos se definen en función de su plataforma, que incluye juegos de arcade, juegos de consola y juegos de PC. Más recientemente, la industria se ha expandido a los juegos móviles a través de teléfonos inteligentes y tabletas, y juegos remotos en la nube. Los videojuegos se clasifican en una amplia gama de géneros según su tipo de juego y propósito.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/pinball.jpg') center center no-repeat fixed; 
	background-size: 100% 100%;
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
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:90px;padding:0px 10px 10px 10px;color:#008;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;font-weight:bold;" class="fontsports"  >Costa del Perú</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:36px;padding:0px 10px 0px 50px;text-align:justify;line-height:85%;color:#fff;text-shadow:2px 2px 1px #f00;font-weight:bold;" id='divspeech'  class="fontech" >
<img src="media/c_01.jpg" style="float:right;margin:5px;">	
Se distingue como la Costa a la larga y estrecha región litoral del Perú entre el Océano Pacífico y las estribaciones de los Andes peruanos. En su mayor parte, constituye una zona de clima cálido o templado caracterizado por sus bajas precipitaciones. Presenta un desierto costero por efecto de la fría corriente de Humboldt sobre las precipitaciones y la sombra orográfica que generan los Andes sobre esta región.<br/>
El desierto costero da paso al bosque seco en el extremo norte de la costa peruana, donde las precipitaciones son mayores debido a la confluencia de la corriente de Humboldt con la contracorriente ecuatorial y la reducción de la sombra orográfica andina por la baja altitud de la Depresión de Huancabamba.<br/>
Diversos ríos de corto recorrido y caudal estacional atraviesan la Costa de este a oeste, sustentando vegetación riparia y permitiendo la agricultura intensiva. La altitud máxima de la región varía de norte a sur, presentando su mayor altitud en el extremo meridional, se estima una media de 500 msnm.1​ Tiene unos 2250 km de longitud, aunque el litoral alcanza los 3080 km y tiene un ancho variable entre los 15 km en Arequipa y los 180 km en Piura.<br/>
En Cajamarca, se le denomina también como Llanos. Se considera que la Costa es una de las tres regiones tradicionales del país, concepto introducido en 1865 por Paz Soldán, en su "Atlas del Perú".<br/>
Relieve<br/>
<img src="media/c_02.jpg" style="float:right;margin:5px;">	
La Costa peruana es moderadamente accidentada con muchas playas arenosas y acantilados, con presencia limitada de pequeñas bahías, ensenadas, penínsulas, puntas, morros, islas guaneras, albúferas y un oasis (Huacachina), además de esteros, deltas y manglares en el norte. El relieve está formado principalmente por llanuras desérticas clasificadas como pampas, tablazos, desiertos y depresiones, que se interrumpen por la presencia de quebradas y de 53 valles fértiles en donde está la mayor población y la mayor producción agrícola del país. También presenta abruptas elevaciones rocosas que son los cerros de las estribaciones andinas, los cuales son prolongaciones de los Andes que ocasionalmente llegan hasta el mar. En ocasiones las elevaciones presentan un microclima por la alta humedad invernal entre los 150 y 600 m.s.n.m, generando la llamada vegetación de las lomas, como en el caso de las lomas de Lachay.<br/>
Clima<br/>
<img src="media/c_03.jpg" style="float:right;margin:5px;">	
Presenta un clima semicálido muy árido, salvo en el extremo norte que es de clima tropical seco. A pesar de la desertificación hay alta humedad atmosférica, lo que produce una ligera sensación de frío, aunque la temperatura raramente baja a 12 °C. Durante el verano, en cambio, el sol brilla con fuerza y la temperatura alcanza con frecuencia los 30 °C. Las regiones centrales y sur de la costa peruana poseen dos estaciones bien marcadas: una invernal, entre abril y octubre; y una estival, entre diciembre y abril. La región norteña de la costa, por su parte, no sufre el efecto de las aguas frías, lo que se traduce en casi 300 días de sol y temperaturas cálidas a lo largo del año (hasta 35 °C en el verano) . El período de lluvias se produce entre noviembre y marzo.<br/>
Costa central<br/>
<img src="media/c_04.jpg" style="float:right;margin:5px;">	
La Costa central donde se ubica la capital, Lima, posee características climáticas de orden desértico: con escasez de lluvias durante todo el año. El clima es templado-cálido ausente de extremo frío pero también carente de extremo calor. Los inviernos de mayo a septiembre son templados y húmedos con muy baja radiación solar y brumas persistentes, la temperatura media oscila entre los 13 °C y los 19 °C, Lima es una ciudad muy húmeda y con una densa capa que impide que el sol aparezca en gran parte del año.<br/>
Costa sur<br/>
La costa sur es menos húmeda y con mayor radiación solar durante los días de invierno que la costa centro, se mantiene con 22 °C durante el día aunque por las noches alcanza temperaturas más frías que la costa centro, alrededor de 8 °C. Los veranos que son de diciembre a abril, mantienen temperaturas cálidas de 28 °C por las tardes y 22 °C por las noches. La región del desierto de Nazca si logra temperaturas superiores durante el verano. La primavera y el otoño mantiene temperaturas que oscilan entre los 17 °C y 22 °C.[dentro de la costa peruana]<br/>
Costa norte<br/>
En la costa norte el clima es más cálido y promedia los 25 °C. Las regiones este de Lambayeque, toda Piura y Tumbes presentan precipitaciones oscilan entre los 50 y los 200mm solamente durante los veranos y el clima es de tropical-seco o más conocido como de tipo sabana tropical. Los inviernos son cálidos pero muy secos, rara vez la temperatura baja de los 25 °C durante el día aunque baja hasta los 16 °C por las noches. En invierno existe la presencia de vientos en la costa debido a la presencia de la fría corriente de Humboldt.<br/>
Demografía<br/>
<img src="media/c_05.jpg" style="float:right;margin:5px;">	
Más de la mitad de la población peruana (58,1%) es costeña; 17,3 millones de habitantes los cuales viven en 136 232,85 km² que representan el 10.6 % del territorio peruano.<br/>
El mestizaje producido entre los siglos XV y XVIII en la costa peruana entre blancos (criollos) e indígenas y negros hizo que la denominación “criollo” rotulara por extensión a los costeños, puesto que prácticamente toda la población vivía en la costa (posteriormente fue que se produjo la migración hacia la sierra andina), por esa razón los términos “criollo” y “costeño” en muchos casos se utilizan indistintamente en Perú, aunque tal uso no siempre sea procedente.<br/>
Etnográficamente, en toda la costa peruana la mayoría de la composición étnica es la mestiza (de la mezcla racial de blanco con indígena), seguida de la población blanca y en minorías pequeñas la población afrodescendiente e indígena, la población negra se centra principalmente en la costa centro y sur en ciudades como Ica, Chincha o Pisco, mientras que la población indígena se centra principalmente en la región de la sierra o Andes.<br/>
Es preciso destacar que las comunidades afrodescendientes han dado cierto aporte a la idiosincrasia y cultura costeñas. La población negra se estableció en la costa peruana por la necesidad de mano de obra en el trabajo rural. Al Perú llegaron negros criollos de las Antillas, y miembros de distintas culturas africanas; no constituían etnias específicas, sino disgregadas, que gestaron en tierras peruanas una nueva identidad social y cultural.<br/>
Parte de la costa peruana tiene influencia negra pero ésta se manifiesta con mayor intensidad en las danzas (por ejemplo la Danza de Negritos en Chincha), el canto, los instrumentos musicales (cajón o caja peruana), la literatura, el deporte y la gastronomía del Perú. La mayor concentración de afroperuanos se hallan en El Callao, Cañete, Chincha, Ica, y Nazca. Los departamentos con más población afro son Ica, Lambayeque, Lima, Piura, La Libertad y Tumbes.<br/>
En tiempos prehispánicos la región de la costa estuvo habitada por los incas, quienes hablaban una variedad del quechua clásico (quechua costeño o marítimo), principalmente en los actuales departamentos de Ica y Lima.<br/>
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
	 </body>

