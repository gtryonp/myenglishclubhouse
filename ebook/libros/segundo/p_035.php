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
		document.getElementById("divspeech").innerHTML="";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/fm.jpg') center center no-repeat fixed; 
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
	src: url(media/queen.otf);
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
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:80px;padding:0px 10px 10px 10px;color:#609;letter-spacing:-12px;text-shadow:-8px 0px 10px #f0f;" class="fontsports"  >Regiones Naturales</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:28px;padding:0px 50px;text-align:justify;line-height:85%;color:rgba(255,255,255,1);text-shadow:1px 1px 1px #fff,2px 2px 1px #000;" id='divspeech'  class="fontech" >
<span style="color:#f00;font-size:40px;">Cuando llegaron los españoles al Perú, dividieron su territorio en tres grandes regiones: la Costa, que está ubicada al lado del Océano Pacífico; la Sierra, que está rodeada de las grandes alturas andinas, y la Montaña o Selva, que está ubicada en las frondosas selvas de la Amazonia Peruana.</span><br/>
Años después, el geógrafo Javier Pulgar Vidal, basado en sus constantes estudios del territorio peruano, propuso la creación de ocho regiones naturales para poder crear un mapa fisiográfico que estuviera más acorde con la realidad biográfica del territorio peruano. En 1941, la III Asamblea General del Instituto Panamericano de Geografía e Historia aprobó esta moción.<br/>
Las ocho regiones naturales son:2​<br/>
Costa o chala. Se localiza entre el océano pacífico hasta los 500 msnm desde la frontera de Ecuador hasta la frontera con chile.<br/>
Yunga.(yunka) en dos formas, dependiendo del flanco de la Cordillera de los Andes en que se encuentren: Yunga Marítima, desde los 500 msnm de altitud hasta los 2300 msnm sobre el nivel del mar, en el flanco occidental y Yunga Fluvial, desde los 500msnm hasta los 1400 msnm<br/>
Quechua (qechwa). Se extiende desde 2300 msnm hasta 3500 msnm de altitud sobre los dos flancos de la cordillera<br/>
Suni (huni). Se halla situado entre 3500 msnm y 4100 msnm sobre el nivel del mar.<br/>
Puna o Jalca (hallqa). Se encuentra entre 4100 msnm y 4800 msnm de altitud ocupando el área geográfica de las altas mesetas andinas<br/>
Janca o cordillera (hanka hirka). Situados a más de 4800 msnm sobre el nivel del mar.<br/>
Selva Alta o Región Rupa-rupa. Se extiende entre 500 msnm y 1400 msnm de altitud sobre el flanco oriental de la Cordillera de los Andes.<br/>
Selva baja o región Omagua. Comprende la gran llanura amazónica cuyo territorio está por debajo de los 500 msnm<br/>
A pesar de ya no considerarse a esta como la clasificación regional del Perú (hoy se considera así la propuesta de Antonio Brack: las 11 ecorregiones naturales) esta clasificación de 8 regiones naturales sigue siendo más práctica para fines de estudio de aspecto externo y para fines turísticos según lo sostiene el investigador D. López Mazzotti siempre y cuando se consideren desde el paralelo 4.103882º de latitud sur y hacia el sur. 2​<br/>
Ecorregiones<br/>
El Perú también es una combinación de 11 ecorregiones según la clasificación de Antonio Brack Egg y que es considerada hoy por hoy la clasificación oficial del Perú:<br/>
Mar frío<br/>
El más rico de todo el planeta, caracterizado por la corriente de Humboldt. Recientes investigaciones dan como resultado que el agua fría del mar peruano es debida al fenómeno de afloramiento que no es otra cosa que el emerger de las aguas más profundas a la superficie. El punto donde se encuentra la mayor diversidad es en el mar de Paracas y la isla Lobos de Tierra (Piura), donde las aguas no son comparables a ninguna otra en el planeta.Tiene como actividades económicas la pesca.<br/>
Mar tropical<br/>
Caracterizado por la corriente del Niño que trae aguas con un promedio de 26 °C de temperatura desde México. Es la única parte del Perú donde se pueden encontrar arrecifes de coral y manglares, por ello las especies que se encuentran aquí son totalmente diferentes a las del mar frío. Empieza desde el sur desde el departamento de Piura y se extiende hasta el norte. Por ser un ambiente tropical, en esta zona se hallan varias de las mejores playas del Perú, entre ellas están: Máncora, Punta Sal, Zorritos, Yacila, Colán y otras.<br/>
Bosque tropical del Pacífico o selva del Pacífico<br/>
Selva ubicada en el departamento de Tumbes, es una pequeña porción de lo que era antes un enorme bosque tropical que se extendía desde el norte de Guatemala hasta el Perú. En término de biodiversidad, esta zona tiene una de las más altas de todas las ecorregiones (superado solo por las selvas amazónicas), esto se debe a que en este lugar se encuentran animales del amazonas como el mono aullador y el jaguar, también animales de la sierra como el cóndor y venados, pero también hay especies únicas. Este increíble hábitat se encuentra en la Zona Reservada de Tumbes a 3 horas de la ciudad homónima.<br/>
Bosque seco<br/>
Es una combinación entre bosques secos de la India con sabana africana, se extiende desde el departamento de Lambayeque hasta Ecuador. Principalmente, es un bosque crecido en un desierto, en el que solo pueden vivir pocas especies de árboles. El algarrobo y el ceibo son algunas especies que pueden soportar la sequedad de aquella zona. Sin embargo la fauna es muy diversa. Aquí, animales del desierto buscan refugio y también se encuentran especies autóctonas de la zona.<br/>
Desierto Costero<br/>
Es una estrecha franja longitudinal que se extiende desde el Océano Pacífico por el oeste hasta los 1000 msnm y con una extensión que representa el 10.7% de la superficie total del país, con un litoral de 3080 km de longitud, es estrecho en el Sur (iniciándose en el Norte de Chile) y se va ampliando mucho en el departamento de Piura, cerca a los límites con el Ecuador, con un ancho variable entre 50 y 100 km.<br/>
Esta región se distingue por el terreno poco accidentado que muestra, encontramos pequeñas quebradas formados por las estribaciones andinas pero hay sobre todo pampas, dunas y tablazos, con predominio de formas rectilíneas y pocas bahías, las mayores son: Sechura, Paita, Chimbote, Callao y Paracas. En este desierto interrumpido por ríos estacionales cuyos valles han desarrollado una agricultura industrial (algodón, arroz, caña de azúcar, vid y olivos).<br/>
El clima es semicálido: húmedo aunque ausente de lluvias y árido subtropical, con precipitaciones promedio anuales inferiores a los 150 mm y temperaturas medias anuales entre los 17 a 19 °C. La causa de la falta de lluvias se debe a que los vientos alisios húmedos, al pasar sobre las aguas frías de la Corriente de Humboldt, se enfrían y producen un colchón de nubes que se hacen presentes en forma de neblinas hasta los 800 a 1000 msnm (lo que según el geógrafo Daniel López viene a marcar el límite superior a esta ecorregión), con temperaturas bajas de cerca de 13 °C. Encima de dicho colchón la temperatura aumenta de 13 a 24 °C (a este fenómeno se le llama "inversión térmica"), y el aire cálido absorbe la humedad, impidiendo la formación de nubes de lluvia.<br/>
Los hay de dos clases, planos y con montañas cerca de ellos o con dunas (algunas tan altas como de más de 20 metros), el primero se encuentra en casi toda la costa peruana mientras que el segundo solo en el departamento de Ica. Ambos son uno de los desiertos más secos del mundo, sin embargo fueron el hogar de civilizaciones avanzadas como los Moche, Vicus, Paracas, Nazca, Caral, Lima y otras.<br/>
Serranía esteparia<br/>
Abarca los territorios del lado occidental de la Cordillera de los Andes, y se inicia alrededor de los 1000 metros de altura, justo por encima de la capa de nubes que generalmente cubre la costa. Esta es una tierra de grandes montañas y precipicios; de fértiles valles y ríos torrentosos que han modelado el paisaje durante millones de años formando profundos cañones. Su clima es seco y muy soleado, pero frío durante las noches. Las lluvias son frecuentes en las zonas más altas, cercanas a la puna, pero disminuyen conforme se desciende hacia el desierto. Ésta es la tierra de los ceibos barrigones, que acuen estas montañas varios tipos de cactus y algunos arbustos de flores muy coloridas, como la chinchircuma y la cantuta, la flor nacional del Perú. La serranía esteparia es también el hogar del puma y el venado gris; del guanaco y el gato montés; de la vizcacha, el zorrino o añás y el zorro andino. En sus cielos abundan las aves: picaflores, águilas y halcones, loros y pericos, además de una gran variedad de pequeños pajarillos comedores de semillas.<br/>
Puna<br/>
Región extrema e inhabitable que se ubica a más de 3800 msnm. Posee un clima muy duro, caracterizado por grandes variaciones de temperatura: frío intenso en las noches y calor durante el día. Cuenta con una temporada de lluvias, conocida como «invierno» en la sierra, que se inicia en diciembre y se prolonga hasta marzo, aunque fuera de ella no son poco comunes los aguaceros. Su relieve es mayormente plano, con grandes planicies o pampas coronadas por escarpadas cordilleras. Es en estas últimas donde se ubican los glaciares y nevados, imponentes moles de hielo y nieve que a menudo sobrepasan los 6000 metros de altura. Allí abundan las lagunas color esmeralda, los grandes salares, y se forman gran parte de los ríos que recorren el país. La puna es, ante todo, una tierra de extremos. Un lugar donde las inclemencias del clima y la escasez de oxígeno han limitado el desarrollo de la vida, y donde solo algunas criaturas especialmente adaptadas han logrado sobrevivir soportando el frío y aprovechando los pocos recursos que el medio les provee: el kolle y el queñual, especies que forman los bosques a mayor altura del mundo; los bofedales y tolares, los enormes pastizales de ichu y los rodales de puya Raimondi. Este es el reino del majestuoso cóndor andino y las esbeltas parihuanas o flamencos andinos; de las gráciles vicuñas y el poderoso puma; de las juguetonas vizcachas, roedores emparentados con los conejos, y la bella taruca, el ciervo más grande de los Andes.<br/>
Páramo<br/>
El páramo es una suerte de puna húmeda. Una tierra de clima frío y muy lluvioso, generalmente cubierta por un manto de neblina que confiere al paisaje un toque de misterio. Se le encuentra solo en algunos lugares del Perú, principalmente en Cajamarca y la sierra de Piura. Ubicados a más de 3000 metros de altura, donde el aire suele ser helado, crecen amplios pajonales que se alternan con curiosos bosques de árboles en miniatura: los bosques enanos. Sus troncos, retorcidos y siempre cubiertos de un grueso abrigo de musgo, son el hogar de las más extrañas criaturas. Una de ellas es el pudú o sachacabra, un venado de apenas 30 centímetros de altura. Son habitantes de este lugar también el raro tapir lanudo o pinchaque, varias especies de murciélagos, el oso de anteojos o ucumari, el venado del páramo y una pequeña musaraña, el único mamífero insectívoro del Perú, descubierto recientemente por los científicos.<br/>
Selva alta<br/>
Los mayores territorios de la selva alta se extienden a lo largo del flanco oriental de la Cordillera de los Andes, justo sobre la llanura amazónica. Su clima es cálido y muy húmedo, haciéndose frío a medida que se acerca a las alturas andinas. Aquí llueve más que en ningún otro lugar del país (hasta 5000 mm anuales), lo que permite que se formen numerosos torrentes y cascadas de agua cristalina. Su relieve es montañoso y complejo, con valles angostos y profundas quebradas, siempre cubiertos por una selva impenetrable. En sus partes más altas, generalmente envueltas en niebla y lloviznas, se ubican los bosques de nubes, mientras en las zonas más bajas se encuentran las colinas que forman la llamada «ceja de montaña». La vegetación en las yungas es quizás la más exuberante de los trópicos, con muchas orquídeas, begonias gigantes y helechos arbóreos. Este es también el hogar del gallito de las rocas, el ave nacional del Perú; el oso de anteojos, única especie de oso sudamericano; el mono choro de cola amarilla, que hasta hace poco se creía extinto; los quetzales, el pato de los torrentes, más de veinte variedades de picaflores y varias docenas de especies de aves fruteras.<br/>
Selva baja<br/>
La selva o bosque lluvioso tropical, el hábitat más diverso de todo el planeta, cubre dos tercios del territorio peruano. En él vive la mayoría de las especies de plantas y animales del mundo. Posee un clima caluroso y muy húmedo, con lluvias entre diciembre y marzo, y frecuentes chaparrones a lo largo de todo el año. Aquí abundan los grandes ríos (Amazonas, Ucayali, Madre de Dios), fuente de alimento y de comunicación entre los pueblos. También hay numerosas cochas o lagos, además de pantanos o aguajales.<br/>
La flora de esta región está compuesta por más de 20.000 especies de plantas (árboles de madera fina, frutos útiles al hombre y plantas medicinales). La fauna, por su parte, es extraordinariamente rica y variada. Entre los habitantes más conspicuos del bosque tropical están los monos, como el maquisapa y el coto; los felinos como el tigrillo, el puma y el jaguar; la sachavaca o tapir, y el roedor más grande del mundo: el ronsoco. Sus aguas están pobladas de grandes peces como el paiche y el zúngaro, dos tipos de delfines de río y varias tortugas acuáticas.<br/>
La selva baja alberga cerca de mil variedades diferentes de aves: desde la imponente águila arpía hasta los minúsculos colibríes; grandes reptiles como el caimán negro y la anaconda; y números todavía desconocidos de ranas, arañas e insectos. Existen zonas aisladas con la mayor biodiversidad del planeta estas son el parque nacional del Manu y la Zona Reservada Tambopata - Candamo (especialmente el área del Candamo que es la última selva totalmente virgen del planeta, donde solo se puede acceder con expediciones previamente autorizadas. Aparte de ello otras áreas son la Reserva Nacional Pacaya - Samiria, Reserva Nacional de Güeppi, el llamado "hermano del Manu" el Parque Nacional Madidi en Bolivia y el Parque Nacional Jaú en Brasil.<br/>
Sabana de palmeras<br/>
Es una sabana compartida entre el Perú y Bolivia. Su apariencia es la de una enorme llanura de pastos altos y palmeras que llama la atención en medio de los bosques de la selva tropical. Se le conoce con el nombre de Pampas del Heath, debido al río que las recorre y sirve de límite entre los dos países. El clima es aquí muy cálido y húmedo, con una marcada estación lluviosa durante el verano. En ocasiones las lluvias son tan intensas que llegan a inundar grandes extensiones de sabana hasta convertirla en un enorme lago; solo las copas de las palmeras y los termiteros quedan como refugio para las criaturas más pequeñas.<br/>
Muchos de los animales y plantas que viven en esta región son únicos y están adaptados para sobrevivir sin problemas en el gran pastizal: el ciervo de los pantanos, el mayor de los cérvidos del Perú; el raro lobo de crin, que asemeja un zorro de patas largas; el tucán de pico amarillo (el mayor del país), y el elusivo carpintero blanco. También cohabitan en esta ecorregión los ñandúes (avestruces sudamericanas) el jaguar, pumas, el oso hormiguero gigante y los coloridos guacamayos.<br/>
</div>
<!--
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
-->	
</body>

