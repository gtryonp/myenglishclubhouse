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
	background:url(media/am1.jpg) center center fixed; 
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
	src: url(media/tropical.ttf);
}
.fonttags {
	font-family: tags;
}
::-webkit-scrollbar 							{width: .5em;height: .5em}
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
	0% 		{	transform: rotate(0deg) 	rotateX(0deg) rotateY(0deg);color:#0f0;opacity:1;}
	100% 	{	transform: rotate(0deg) 	rotateX(0deg) rotateY(0deg);color:#0a0;opacity:.5;}
} 

</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 20px;height:98%;" class=''>
		<div style="text-align:center;float:left;width:100%;overflow:hidden;font-size:70px;color:#060;text-shadow:2px 2px 1px #fff,4px 4px 1px #f00;letter-spacing: 0px;" id="" class="fonttags playful">
			<span>S</span>
			<span>e</span>
			<span>l</span>
			<span>v</span>
			<span>a</span>
			<span>&nbsp;</span>
			<span>d</span>
			<span>e</span>
			<span>l</span>
			<span>&nbsp;</span>
			<span>P</span>
			<span>e</span>
			<span>r</span>
			<span>u</span>
		</div>
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;font-weight:bold;color:#fc0;text-shadow:2px 2px 1px #000;' class='fontech' id='divspeech'  >
En el Perú, la Selva y el Oriente (antiguamente llamada la montaña) son denominaciones locales de la Amazonia, la gran selva tropical de América del Sur. La porción de territorio que este bioma ocupa, tiene un área de más de 782.800 km² desde las estribaciones orientales de la cordillera de los Andes hasta los límites políticos con Ecuador, Colombia, Brasil y Bolivia en el llano amazónico.<br/>
La Amazonía peruana es una de las áreas con mayor biodiversidad y endemismos del planeta, así como la región biogeográfica peruana con menor población humana. No obstante tener la menor densidad poblacional del país, es a su vez la más diversa antropológicamente. La mayor parte de etnias del país se asientan en ella y son habladas allí el grueso de las lenguas autóctonas del Perú.<br/>
Extensión<br/>
La mayor parte del territorio del Perú está cubierto por la densa selva amazónica. Según el Instituto de Investigaciones de la Amazonía Peruana (IIAP), 782.880,55 km² de territorio peruano son biogeográficamente Amazonía, lo cual supone un 13,05% del total continental, el segundo territorio nacional amazónico más grande, después del Brasil. La cuenca del Amazonas, que nace en las cumbres de los Andes, ocupa un territorio mucho mayor de 967.922,47 km², un 16,13% del total de la cuenca.<br/>
En el Perú se denomina amazonía a todos los territorios que se ubican al oriente de la Cordillera de los Andes que comprende la selva tropical e hidrográficamente todos los ríos son tributarios de la cuenca del río Amazonas.<br/>
Se trata de una enorme depresión geológica en los que predominan las grandes llanuras, montañas, pequeñas áreas de montaña, los territorios inundables en el tiempo de crecida de los ríos. Localmente algunos le llaman "montaña", selva amazónica o jungla.<br/>
Históricamente está asociada al mito o leyenda de El Dorado y el País de la Canela y a principios del siglo XX con la era del caucho.<br/>
Ocupa el 62% del territorio peruano y su densidad de población es muy baja (8%).<br/>
El clima marca dos temporadas básicas, la temporada seca con bajos niveles de aguas y es llamada verano (abril - octubre) y la temporada de lluvias (noviembre - marzo) en la que los niveles de aguas se eleva notablemente y genera grandes extensiones de terreno inundados.<br/>
La amazonía es considerada como la mayor reserva de recursos naturales biológicos de la Tierra (incluido el territorio amazónico de Brasil), además de ser la primera fuente generadora de oxígeno del planeta. Además, existen otras grandes fuentes de recursos naturales como los yacimientos de petróleo, gas natural y lavaderos de oro.<br/>
En la amazonía peruana se registran:<br/>
64 tribus y sub-tribus de seres humanos nativos y aborígenes. 14,712 especies de animales (8,000 únicos), 700 clases de mariposas, 282 de aves, 625 de insectos, 250 de reptiles, 2,000 de peces, mamíferos únicos, etc ., muchas de ellas endémicas. 20,000 o más especies botánicas, habiéndose encontrado hasta 100 especies en un área de 1 km²<br/>
Hay muchas especies zoológicas y botánicas por descubrir y clasificar científicamente.<br/>
En tiempos pasados, la falta de protección de legislación adecuada permitía la caza libre de algunas especies, llevándolas casi a la extinción, como el lagarto negro, la nutria gigante del río y algunos felinos por su valiosa piel. Hoy en día existen leyes de protección de la fauna y la flora y se han creado más de 50 áreas naturales protegidas que ocupan aproximadamente el 10% del territorio peruano.<br/>
En el área de selva baja en la amazonía predomina el transporte fluvial y aéreo. Los ríos son el camino natural para el transporte de carga, comercio y para las personas, las embarcaciones van desde las balsas y canoas hechas a mano hasta embarcaciones de madera de o casco de acero. En el área de la selva baja el transporte terrestre es escaso o inexistente y existen pocas carreteras.<br/>
Ecorregiones y clima<br/>
La Selva Alta <br/>
también llamada Rupa-Rupa, ceja de selva, yungas o bosques lluviosos de altura. Es una ecorregión de selva montana nubosa muy lluviosa que se extiende en las estribaciones orientales de los Andes peruanos, entre los 800 a 3.800 msnm. Sus temperaturas son cálidas en las partes bajas y templadas en las partes de mayor altura. La fauna es mayormente de origen amazónico con muchos endemismos (seres vivos que sólo habitan en dicho lugar mas no en otro en el mundo), debido al factor de aislamiento, ocasionada por la orografía accidentada de esta zona. La amazonía del Perú se divide a su vez en tres grandes áreas, definidas por su geografía y clima:<br/>
La Selva Baja. <br/>
Llamada también Omagua. Los territorios de la selva alta o yunga se extienden a lo largo del flanco oriental de la Cordillera de los Andes, entre los 3,800 y 800 m.s.n.m., justo sobre la llanura amazónica. Su clima es cálido y muy húmedo, haciéndose frío a medida que se acerca a las alturas andinas. Aquí llueve más que en ningún otro lugar del país (hasta 5.000 mm anuales), lo que permite que se formen numerosos torrentes y cascadas de agua cristalina.<br/>
Hidrografía<br/>
Los ríos de la Amazonia pertenecen a la Cuenca del Atlántico, curso Oeste-Este<br/>
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
</div>
</body>