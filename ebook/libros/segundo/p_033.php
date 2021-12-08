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
		document.getElementById("divspeech").innerHTML="Una casa es un edificio residencial de una sola unidad, que puede variar en complejidad desde una cabaña rudimentaria hasta una estructura compleja de madera, mampostería, concreto u otro material, equipada con plomería, electricidad y sistemas de calefacción, ventilación y aire acondicionado. [1] [2] Las casas utilizan una variedad de sistemas de techos diferentes para evitar que la lluvia, como la lluvia, ingrese al espacio de la vivienda. Las casas pueden tener puertas o cerraduras para asegurar el espacio de la vivienda y proteger a sus habitantes y su contenido de ladrones u otros intrusos. La mayoría de las casas modernas convencionales en las culturas occidentales contendrán uno o más dormitorios y baños, una cocina o área para cocinar y una sala de estar. Una casa puede tener un comedor separado o el área para comer puede estar integrada en otra habitación. Algunas casas grandes en América del Norte tienen una sala de recreación. En las sociedades tradicionales orientadas a la agricultura, los animales domésticos como las gallinas o el ganado mayor (como el ganado) pueden compartir parte de la casa con los humanos.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/ho1.jpg') center center no-repeat fixed; 
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
	font-family:sports;
	src: url(media/xxx.ttf);
}
.fontsports {
	font-family: sports;
}

</style>
<body>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:50px;padding:0px 10px 10px 10px;color:#ccc;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,5px 5px 1px #000;font-weight:bold;" class="fontsports"  >Geografía del Perú</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:30px;padding:0px 50px;text-align:justify;line-height:120%;color:#000;text-shadow:1px 1px 1px #fff,2px 2px 1px #000;" id='divspeech'  class="fontech" >
El Perú se encuentra situado en la parte central y occidental de América del Sur (UTM N7970840.422; E552505.422; ZONA 18). Está conformado por un territorio de una superficie continental de 1.285.216,60 km², lo que representa el 0.87% del planeta, que se distribuyen en región costeña 136.232,85 km² (10,6%), región andina 404.842,91 km² (31,5%) y región amazónica 754.139,84 km² (57,9%); el extremo septentrional del territorio peruano se encuentra el río Putumayo a 0°02´00" latitud sur, el extremo meridional se encuentra a orillas del mar en Tacna (punto La Concordia) a 18°21´03" latitud sur; el extremo oriental está en el río Heath en Madre de Dios a 68°39´00" longitud este y el extremo occidental se encuentra en Caleta Punta Balcones en Pariñas, Talara, Piura a 81°19'35".<br/>
El Mar Peruano o Mar de Grau es la parte del Océano Pacífico que se extiende a lo largo de la Costa peruana en una extensión de 3080 km.1​ y un ancho de 200 millas mar adentro. Su gran riqueza ictiológica es resultante de las corrientes marinas de Humboldt y del Niño. Su mar soberano cuenta con un área marítima de 991.194,97 km², siendo un país con un gran potencial hidrológico.<br/>
El pico más alto del Perú es el Huascarán en la Cordillera Blanca, con una altura de 6768 msnm; la zona más baja es la depresión de Sechura a -34 m.b.n.m.; el valle más profundo es el cañón de Cotahuasi, incluso superando al famoso cañón del Colorado; el río más largo de Perú es el río Ucayali (afluente del río Amazonas con 1771 km de longitud; el lago navegable más alto del mundo es el lago Titicaca en Puno/Perú con 8380 km² y la isla más grande del litoral peruano es la Isla San Lorenzo en el Callao con 16,48 km². Es el tercer país más grande de Sudamérica.<br/>
Geológicamente, el Perú es un país joven en gran parte de su territorio. El 42% de su superficie, el sistema andino y la costa, surgió en la Era Mesozoica, hace 130 a 65 millones de años, producto de los levantamientos tectónicos suscitados por la subducción de la placa de Nazca en la placa Sudamericana.<br/>
Se levanta sobre un territorio afectado por subducción de la placa oceánica de Nazca bajo la continental Sudamericana. La intensidad del choque entre ambas masas produjo, a partir de la Era Terciaria la cordillera de los Andes, un espectacular y prácticamente único sistema montañoso que estructura el país en tres regiones geográficas muy diferentes entre sí: costa, sierra y selva.	<br/>
Fronteras<br/>
Los actuales límites fronterizos del Perú son producto de un proceso de consolidación de muchísimos años, que se inicia en 1821, tomando como base el Uti possidetis iure de 1810 y se terminan estableciendo en el siglo XX. No fueron ajenos a este proceso los esfuerzos diplomáticos de la cancillería peruana y en algunos casos, derivaron en conflictos armados, tomando protagonismo las Fuerzas Armadas. Hasta el siglo XIX, ejercieron un papel descollante el Ejército, la Marina de Guerra y la Policía Nacional; en los conflictos que hubo en el siglo XX, lo hizo también la Fuerza Aérea. Las fronteras así configuradas, mediando enfrentamiento bélico o no, culminaron en una serie de tratados, ya sean de Paz, Amistad y Límites o de Navegación y Comercio, como es el caso de los tratados y convenios con los vecinos países amazónicos.<br/>
El Perú es uno de los doce países independientes de América del Sur. Se localiza en la parte central y occidental de esta parte de América. Tiene una superficie continental de 1.285.215,6 km² y un perímetro de 7.073 km de línea de frontera terrestre,1​ que se comparten con todos sus vecinos sudamericanos. La mayor longitud de frontera y una de las más agrestes, es con Brasil, la cual tiene una longitud de 2.822,496 km entre la boca del río Yavarí y la boca del río Yaverija en el río Acre y se desarrolla íntegramente en la selva amazónica, y la de menor longitud, con Chile de apenas 169 km entre la meseta de Ancomarca hasta el punto denominado Concordia en la orilla de playa en el océano Pacífico. Los límites totales según su mayor o menor longitud, son:<br/>
Límite	Extensión (km)	Trazado<br/>
Perú-Brasil	2.822,496	Desde la boca del río Yavarí hasta la boca del río Yaravija en el Acre.<br/>
Perú-Ecuador	1.528,546	Desde la boca del río Capones hasta la boca del río Güepí en el río Putumayo.<br/>
Perú-Colombia	1.506,06	Desde la boca del río Güepí hasta la confluencia del río Yavarí con el río Amazonas.<br/>
Perú-Bolivia	1.047,160	Desde la boca del río Yaravija en el Acre hasta la meseta de Ancomarca, en 17ª 29‘ 57“ de latitud sur y 69° 28‘ 28“ de longitud oeste (UTM: N8031396,478; E20229373,478; Zona: 0,000; Factor escala: 4,917).<br/>
Perú-Chile	169	Desde la meseta de Ancomarca, en 17ª 29‘ 57“ de latitud sur y 69°28‘ 28“ de longitud oeste (UTM: N8031396,478; E20229373,478; Zona: 0,000; Factor escala: 4,917) hasta el punto denominado Concordia en la orilla de playa / Hito No 1 en el océano Pacífico en 18°21`08`` latitud sur y 70°22`39`` de longitud oeste. Estos límites fueron aprobados en el Congreso de la República, mediante la Ley Nº 24650 del 19 de marzo de 1987.<br/>
Relieve<br/>
Los Andes atraviesan el Perú de norte a sur, condicionando con su imponente presencia el clima y la orografía del país. Aunque el abra de Porculla marque, a 2137 msnm, su punto más bajo, la Cordillera Blanca y la Cordillera de Huayhuash albergan en el sector norte las cumbres más altas del Perú. A partir del nudo de Pasco, los Andes centrales se ensanchan y presenta mesetas entre las cordilleras y cimas como las del Coropuna, el Ampato o el Salcantay. La meseta del Collao, a 3600 msnm y la cordillera Volcánica, con los nevados Misti, Pichu Pichu, y Ubinas, compone el sector meridional de los Andes peruanos a partir del Nudo de Vilcanota.<br/>
La cordillera Blanca es la cadena tropical más alta del mundo. Entre sus nevadas cumbres, que superan los 6000 msnm, destaca el Huascarán, la montaña más alta del Perú. Además cabe destacar la presencia del Alpamayo, considerado el nevado más bello del mundo y el Pastoruri, muy frecuentado por turistas. La cordillera Blanca tiene una longitud de 250 km y atraviesa el departamento de Ancash. El nevado de Pelagatos, al norte, y el nudo de Tuco, al sur, establecen sus límites. Junto con la cordillera Negra, de menor altitud y sin cumbres nevadas, forma el atractivo Callejón de Huaylas, por el que discurre el río Santa.<br/>
Clima<br/>
El hecho de estar en el Perú cerca de la línea ecuatorial indicaría que su clima debería ser eminentemente tropical, sin embargo dos factores alteran notablemente el clima. En primer lugar la existencia de la elevada Cordillera de los Andes paralela en América del Sur al Océano Pacífico y, en segundo lugar, la fría Corriente Peruana o de Humboldt que se manifiesta de sur a norte hasta la latitud 5° y que choca con la Corriente del Niño en las costas de Piura y Tumbes hasta la latitud 3.2°, al sur de la línea ecuatorial. Estos accidentes, más el anticiclón del Pacífico sur en esta parte del continente, originan una disminución de las temperaturas promedio anuales de unos diez grados centígrados en la costa y una gran variedad de climas simultáneos en todo el país el cual ha situado al Perú como uno de los países con mayor variedad de climas en el mundo.<br/>
Hidrografía<br/>
El Perú contiene el 4% del agua dulce del planeta. Este volumen se encuentra desigualmente distribuido en tres vertientes, la del Pacífico, la del Amazonas y la del Lago Titicaca, delimitadas por la cordillera de los Andes. En la segunda de estas cuencas nace también el gigante Amazonas que, con sus 6872 km, es el río más largo y caudaloso del mundo. Su vertiente ocupa el 75% del territorio.<br/>
El lago Titicaca es la vertiente más grande de Sudamérica, con 8380 km². Este lago tectónico es compartido por Perú y Bolivia. En él vierten sus aguas 20 ríos; entre ellos, el Ramis, el Ilave y el Huancané, por el lado peruano. Registra olas y mareas; tiene 36 islas e influye en el clima de la meseta del Collao, por su temperatura media de 12 °C. El lago Titicaca formaba, junto a la laguna de Arapa y el lago Poopó (Bolivia), el gran lago Ballivián del altiplano peruano.<br/>

</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
</body>

