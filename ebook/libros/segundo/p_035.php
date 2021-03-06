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
<span style="color:#f00;font-size:40px;">Cuando llegaron los espa??oles al Per??, dividieron su territorio en tres grandes regiones: la Costa, que est?? ubicada al lado del Oc??ano Pac??fico; la Sierra, que est?? rodeada de las grandes alturas andinas, y la Monta??a o Selva, que est?? ubicada en las frondosas selvas de la Amazonia Peruana.</span><br/>
A??os despu??s, el ge??grafo Javier Pulgar Vidal, basado en sus constantes estudios del territorio peruano, propuso la creaci??n de ocho regiones naturales para poder crear un mapa fisiogr??fico que estuviera m??s acorde con la realidad biogr??fica del territorio peruano. En 1941, la III Asamblea General del Instituto Panamericano de Geograf??a e Historia aprob?? esta moci??n.<br/>
Las ocho regiones naturales son:2???<br/>
Costa o chala. Se localiza entre el oc??ano pac??fico hasta los 500 msnm desde la frontera de Ecuador hasta la frontera con chile.<br/>
Yunga.(yunka) en dos formas, dependiendo del flanco de la Cordillera de los Andes en que se encuentren: Yunga Mar??tima, desde los 500 msnm de altitud hasta los 2300 msnm sobre el nivel del mar, en el flanco occidental y Yunga Fluvial, desde los 500msnm hasta los 1400 msnm<br/>
Quechua (qechwa). Se extiende desde 2300 msnm hasta 3500 msnm de altitud sobre los dos flancos de la cordillera<br/>
Suni (huni). Se halla situado entre 3500 msnm y 4100 msnm sobre el nivel del mar.<br/>
Puna o Jalca (hallqa). Se encuentra entre 4100 msnm y 4800 msnm de altitud ocupando el ??rea geogr??fica de las altas mesetas andinas<br/>
Janca o cordillera (hanka hirka). Situados a m??s de 4800 msnm sobre el nivel del mar.<br/>
Selva Alta o Regi??n Rupa-rupa. Se extiende entre 500 msnm y 1400 msnm de altitud sobre el flanco oriental de la Cordillera de los Andes.<br/>
Selva baja o regi??n Omagua. Comprende la gran llanura amaz??nica cuyo territorio est?? por debajo de los 500 msnm<br/>
A pesar de ya no considerarse a esta como la clasificaci??n regional del Per?? (hoy se considera as?? la propuesta de Antonio Brack: las 11 ecorregiones naturales) esta clasificaci??n de 8 regiones naturales sigue siendo m??s pr??ctica para fines de estudio de aspecto externo y para fines tur??sticos seg??n lo sostiene el investigador D. L??pez Mazzotti siempre y cuando se consideren desde el paralelo 4.103882?? de latitud sur y hacia el sur. 2???<br/>
Ecorregiones<br/>
El Per?? tambi??n es una combinaci??n de 11 ecorregiones seg??n la clasificaci??n de Antonio Brack Egg y que es considerada hoy por hoy la clasificaci??n oficial del Per??:<br/>
Mar fr??o<br/>
El m??s rico de todo el planeta, caracterizado por la corriente de Humboldt. Recientes investigaciones dan como resultado que el agua fr??a del mar peruano es debida al fen??meno de afloramiento que no es otra cosa que el emerger de las aguas m??s profundas a la superficie. El punto donde se encuentra la mayor diversidad es en el mar de Paracas y la isla Lobos de Tierra (Piura), donde las aguas no son comparables a ninguna otra en el planeta.Tiene como actividades econ??micas la pesca.<br/>
Mar tropical<br/>
Caracterizado por la corriente del Ni??o que trae aguas con un promedio de 26 ??C de temperatura desde M??xico. Es la ??nica parte del Per?? donde se pueden encontrar arrecifes de coral y manglares, por ello las especies que se encuentran aqu?? son totalmente diferentes a las del mar fr??o. Empieza desde el sur desde el departamento de Piura y se extiende hasta el norte. Por ser un ambiente tropical, en esta zona se hallan varias de las mejores playas del Per??, entre ellas est??n: M??ncora, Punta Sal, Zorritos, Yacila, Col??n y otras.<br/>
Bosque tropical del Pac??fico o selva del Pac??fico<br/>
Selva ubicada en el departamento de Tumbes, es una peque??a porci??n de lo que era antes un enorme bosque tropical que se extend??a desde el norte de Guatemala hasta el Per??. En t??rmino de biodiversidad, esta zona tiene una de las m??s altas de todas las ecorregiones (superado solo por las selvas amaz??nicas), esto se debe a que en este lugar se encuentran animales del amazonas como el mono aullador y el jaguar, tambi??n animales de la sierra como el c??ndor y venados, pero tambi??n hay especies ??nicas. Este incre??ble h??bitat se encuentra en la Zona Reservada de Tumbes a 3 horas de la ciudad hom??nima.<br/>
Bosque seco<br/>
Es una combinaci??n entre bosques secos de la India con sabana africana, se extiende desde el departamento de Lambayeque hasta Ecuador. Principalmente, es un bosque crecido en un desierto, en el que solo pueden vivir pocas especies de ??rboles. El algarrobo y el ceibo son algunas especies que pueden soportar la sequedad de aquella zona. Sin embargo la fauna es muy diversa. Aqu??, animales del desierto buscan refugio y tambi??n se encuentran especies aut??ctonas de la zona.<br/>
Desierto Costero<br/>
Es una estrecha franja longitudinal que se extiende desde el Oc??ano Pac??fico por el oeste hasta los 1000 msnm y con una extensi??n que representa el 10.7% de la superficie total del pa??s, con un litoral de 3080 km de longitud, es estrecho en el Sur (inici??ndose en el Norte de Chile) y se va ampliando mucho en el departamento de Piura, cerca a los l??mites con el Ecuador, con un ancho variable entre 50 y 100 km.<br/>
Esta regi??n se distingue por el terreno poco accidentado que muestra, encontramos peque??as quebradas formados por las estribaciones andinas pero hay sobre todo pampas, dunas y tablazos, con predominio de formas rectil??neas y pocas bah??as, las mayores son: Sechura, Paita, Chimbote, Callao y Paracas. En este desierto interrumpido por r??os estacionales cuyos valles han desarrollado una agricultura industrial (algod??n, arroz, ca??a de az??car, vid y olivos).<br/>
El clima es semic??lido: h??medo aunque ausente de lluvias y ??rido subtropical, con precipitaciones promedio anuales inferiores a los 150 mm y temperaturas medias anuales entre los 17 a 19 ??C. La causa de la falta de lluvias se debe a que los vientos alisios h??medos, al pasar sobre las aguas fr??as de la Corriente de Humboldt, se enfr??an y producen un colch??n de nubes que se hacen presentes en forma de neblinas hasta los 800 a 1000 msnm (lo que seg??n el ge??grafo Daniel L??pez viene a marcar el l??mite superior a esta ecorregi??n), con temperaturas bajas de cerca de 13 ??C. Encima de dicho colch??n la temperatura aumenta de 13 a 24 ??C (a este fen??meno se le llama "inversi??n t??rmica"), y el aire c??lido absorbe la humedad, impidiendo la formaci??n de nubes de lluvia.<br/>
Los hay de dos clases, planos y con monta??as cerca de ellos o con dunas (algunas tan altas como de m??s de 20 metros), el primero se encuentra en casi toda la costa peruana mientras que el segundo solo en el departamento de Ica. Ambos son uno de los desiertos m??s secos del mundo, sin embargo fueron el hogar de civilizaciones avanzadas como los Moche, Vicus, Paracas, Nazca, Caral, Lima y otras.<br/>
Serran??a esteparia<br/>
Abarca los territorios del lado occidental de la Cordillera de los Andes, y se inicia alrededor de los 1000 metros de altura, justo por encima de la capa de nubes que generalmente cubre la costa. Esta es una tierra de grandes monta??as y precipicios; de f??rtiles valles y r??os torrentosos que han modelado el paisaje durante millones de a??os formando profundos ca??ones. Su clima es seco y muy soleado, pero fr??o durante las noches. Las lluvias son frecuentes en las zonas m??s altas, cercanas a la puna, pero disminuyen conforme se desciende hacia el desierto. ??sta es la tierra de los ceibos barrigones, que acuen estas monta??as varios tipos de cactus y algunos arbustos de flores muy coloridas, como la chinchircuma y la cantuta, la flor nacional del Per??. La serran??a esteparia es tambi??n el hogar del puma y el venado gris; del guanaco y el gato mont??s; de la vizcacha, el zorrino o a????s y el zorro andino. En sus cielos abundan las aves: picaflores, ??guilas y halcones, loros y pericos, adem??s de una gran variedad de peque??os pajarillos comedores de semillas.<br/>
Puna<br/>
Regi??n extrema e inhabitable que se ubica a m??s de 3800 msnm. Posee un clima muy duro, caracterizado por grandes variaciones de temperatura: fr??o intenso en las noches y calor durante el d??a. Cuenta con una temporada de lluvias, conocida como ??invierno?? en la sierra, que se inicia en diciembre y se prolonga hasta marzo, aunque fuera de ella no son poco comunes los aguaceros. Su relieve es mayormente plano, con grandes planicies o pampas coronadas por escarpadas cordilleras. Es en estas ??ltimas donde se ubican los glaciares y nevados, imponentes moles de hielo y nieve que a menudo sobrepasan los 6000 metros de altura. All?? abundan las lagunas color esmeralda, los grandes salares, y se forman gran parte de los r??os que recorren el pa??s. La puna es, ante todo, una tierra de extremos. Un lugar donde las inclemencias del clima y la escasez de ox??geno han limitado el desarrollo de la vida, y donde solo algunas criaturas especialmente adaptadas han logrado sobrevivir soportando el fr??o y aprovechando los pocos recursos que el medio les provee: el kolle y el que??ual, especies que forman los bosques a mayor altura del mundo; los bofedales y tolares, los enormes pastizales de ichu y los rodales de puya Raimondi. Este es el reino del majestuoso c??ndor andino y las esbeltas parihuanas o flamencos andinos; de las gr??ciles vicu??as y el poderoso puma; de las juguetonas vizcachas, roedores emparentados con los conejos, y la bella taruca, el ciervo m??s grande de los Andes.<br/>
P??ramo<br/>
El p??ramo es una suerte de puna h??meda. Una tierra de clima fr??o y muy lluvioso, generalmente cubierta por un manto de neblina que confiere al paisaje un toque de misterio. Se le encuentra solo en algunos lugares del Per??, principalmente en Cajamarca y la sierra de Piura. Ubicados a m??s de 3000 metros de altura, donde el aire suele ser helado, crecen amplios pajonales que se alternan con curiosos bosques de ??rboles en miniatura: los bosques enanos. Sus troncos, retorcidos y siempre cubiertos de un grueso abrigo de musgo, son el hogar de las m??s extra??as criaturas. Una de ellas es el pud?? o sachacabra, un venado de apenas 30 cent??metros de altura. Son habitantes de este lugar tambi??n el raro tapir lanudo o pinchaque, varias especies de murci??lagos, el oso de anteojos o ucumari, el venado del p??ramo y una peque??a musara??a, el ??nico mam??fero insect??voro del Per??, descubierto recientemente por los cient??ficos.<br/>
Selva alta<br/>
Los mayores territorios de la selva alta se extienden a lo largo del flanco oriental de la Cordillera de los Andes, justo sobre la llanura amaz??nica. Su clima es c??lido y muy h??medo, haci??ndose fr??o a medida que se acerca a las alturas andinas. Aqu?? llueve m??s que en ning??n otro lugar del pa??s (hasta 5000 mm anuales), lo que permite que se formen numerosos torrentes y cascadas de agua cristalina. Su relieve es monta??oso y complejo, con valles angostos y profundas quebradas, siempre cubiertos por una selva impenetrable. En sus partes m??s altas, generalmente envueltas en niebla y lloviznas, se ubican los bosques de nubes, mientras en las zonas m??s bajas se encuentran las colinas que forman la llamada ??ceja de monta??a??. La vegetaci??n en las yungas es quiz??s la m??s exuberante de los tr??picos, con muchas orqu??deas, begonias gigantes y helechos arb??reos. Este es tambi??n el hogar del gallito de las rocas, el ave nacional del Per??; el oso de anteojos, ??nica especie de oso sudamericano; el mono choro de cola amarilla, que hasta hace poco se cre??a extinto; los quetzales, el pato de los torrentes, m??s de veinte variedades de picaflores y varias docenas de especies de aves fruteras.<br/>
Selva baja<br/>
La selva o bosque lluvioso tropical, el h??bitat m??s diverso de todo el planeta, cubre dos tercios del territorio peruano. En ??l vive la mayor??a de las especies de plantas y animales del mundo. Posee un clima caluroso y muy h??medo, con lluvias entre diciembre y marzo, y frecuentes chaparrones a lo largo de todo el a??o. Aqu?? abundan los grandes r??os (Amazonas, Ucayali, Madre de Dios), fuente de alimento y de comunicaci??n entre los pueblos. Tambi??n hay numerosas cochas o lagos, adem??s de pantanos o aguajales.<br/>
La flora de esta regi??n est?? compuesta por m??s de 20.000 especies de plantas (??rboles de madera fina, frutos ??tiles al hombre y plantas medicinales). La fauna, por su parte, es extraordinariamente rica y variada. Entre los habitantes m??s conspicuos del bosque tropical est??n los monos, como el maquisapa y el coto; los felinos como el tigrillo, el puma y el jaguar; la sachavaca o tapir, y el roedor m??s grande del mundo: el ronsoco. Sus aguas est??n pobladas de grandes peces como el paiche y el z??ngaro, dos tipos de delfines de r??o y varias tortugas acu??ticas.<br/>
La selva baja alberga cerca de mil variedades diferentes de aves: desde la imponente ??guila arp??a hasta los min??sculos colibr??es; grandes reptiles como el caim??n negro y la anaconda; y n??meros todav??a desconocidos de ranas, ara??as e insectos. Existen zonas aisladas con la mayor biodiversidad del planeta estas son el parque nacional del Manu y la Zona Reservada Tambopata - Candamo (especialmente el ??rea del Candamo que es la ??ltima selva totalmente virgen del planeta, donde solo se puede acceder con expediciones previamente autorizadas. Aparte de ello otras ??reas son la Reserva Nacional Pacaya - Samiria, Reserva Nacional de G??eppi, el llamado "hermano del Manu" el Parque Nacional Madidi en Bolivia y el Parque Nacional Ja?? en Brasil.<br/>
Sabana de palmeras<br/>
Es una sabana compartida entre el Per?? y Bolivia. Su apariencia es la de una enorme llanura de pastos altos y palmeras que llama la atenci??n en medio de los bosques de la selva tropical. Se le conoce con el nombre de Pampas del Heath, debido al r??o que las recorre y sirve de l??mite entre los dos pa??ses. El clima es aqu?? muy c??lido y h??medo, con una marcada estaci??n lluviosa durante el verano. En ocasiones las lluvias son tan intensas que llegan a inundar grandes extensiones de sabana hasta convertirla en un enorme lago; solo las copas de las palmeras y los termiteros quedan como refugio para las criaturas m??s peque??as.<br/>
Muchos de los animales y plantas que viven en esta regi??n son ??nicos y est??n adaptados para sobrevivir sin problemas en el gran pastizal: el ciervo de los pantanos, el mayor de los c??rvidos del Per??; el raro lobo de crin, que asemeja un zorro de patas largas; el tuc??n de pico amarillo (el mayor del pa??s), y el elusivo carpintero blanco. Tambi??n cohabitan en esta ecorregi??n los ??and??es (avestruces sudamericanas) el jaguar, pumas, el oso hormiguero gigante y los coloridos guacamayos.<br/>
</div>
<!--
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
-->	
</body>

