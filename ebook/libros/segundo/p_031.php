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
		document.getElementById("divspeech").innerHTML="El deporte incluye todas las formas de actividad física competitiva o juegos que, [1] mediante la participación informal u organizada, al menos en parte tienen como objetivo utilizar, mantener o mejorar la capacidad y las habilidades físicas al tiempo que brindan diversión a los participantes y, en algunos casos, entretenimiento a los espectadores. . [2] Los deportes pueden traer resultados positivos a la salud física. Existen cientos de deportes, desde aquellos entre concursantes individuales, hasta aquellos con cientos de participantes simultáneos, ya sea en equipos o compitiendo como individuos. En ciertos deportes como las carreras, muchos concursantes pueden competir, simultánea o consecutivamente, con un ganador; en otros, la contienda (un partido) es entre dos bandos, cada uno intentando superar al otro. Algunos deportes permiten un 'empate' o 'empate', en el que no hay un único ganador; otros proporcionan métodos de desempate para asegurar un ganador y un perdedor. Se pueden organizar varios concursos en un torneo que produzca un campeón. Muchas ligas deportivas se convierten en campeones anuales organizando juegos en una temporada deportiva regular, seguida en algunos casos por los playoffs.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/sports.jpg') center center no-repeat; 
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
	src: url(media/sports.ttf);
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
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:50px;padding:0px 10px 10px 10px;color:#080;text-shadow:1px 1px 1px #000;" class="fontsports"  >Geografia de America del Sur</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:30px;padding:0px 50px;text-align:justify;line-height:80%;color:#900;text-shadow:1px 1px 1px #fff;" id='divspeech' class="fontech" >
	Geográficamente, América del Sur es generalmente considerada la porción sur del continente americano y el sur y el este del Canal de Panamá. Dependiendo de la fuente, América del Sur y América del Norte son a veces consideradas un único continente o supercontinente, mientras que sus regiones constituyentes son en rara ocasión llamadas subcontinentes. Geopolíticamente, los países que unen el norte y el sur son considerados otro subcontinente: América Central.<br/>	
	La plataforma continental de América del Sur incluye varias islas, la mayor parte de las cuales son controladas por los países del propio continente (Dependencias Federales y Estado Nueva Esparta de Venezuela), así como otros países independientes (Trinidad y Tobago) o dependientes (Aruba, Bonaire y Curazao, colonia de los Países Bajos), aunque en estos casos se prefiere integrar estos países a la región de Las Antillas.<br/>	
	Aquí se encuentra el río más largo y caudaloso del mundo: el Río Amazonas, la cordillera más larga: Cordillera de los Andes, el río más ancho: el Río de la Plata, la montaña más alta del planeta fuera de Asia: el Aconcagua, el desierto más seco: Atacama, la selva más grande: Selva Amazónica, la ciudad capital a mayor altura: Quito,ya que La Paz, Bolivia no es considerada capital, la cascada más alta: Salto Ángel en Venezuela, la elevación litoral más alta del planeta: Sierra Nevada de Santa Marta en Colombia, el lago navegable más alto: el Titicaca, la ciudad más austral: Puerto Williams en Chile, la localidad más austral: Puerto Toro en Chile, y la tercera mayor extensión de hielos continentales: el Hielo continental patagónico, entre Argentina y Chile.<br/>	
	Clima<br/>	
	América del Sur presenta una gran variedad de climas. Cabe destacar que debido a que la mayor parte del territorio se encuentra por encima del trópico de capricornio, el clima predominante es el tropical, que abarca la mayor parte de los territorios de Brasil, Bolivia, Paraguay, Perú, Ecuador, Colombia y Venezuela. En Guyana, Surinam y Guayana Francesa es el único clima existente. Se caracteriza por elevadas temperaturas todo el año, así como elevada humedad ambiental. Variantes del mismo se deben a diferencias de precipitaciones, como en el chaco de la Argentina, Bolivia y Paraguay donde hay una estación seca entre los meses de abril y octubre, o zonas donde son abundantes todo el año, como en toda la zona cercana al ecuador. También dentro de esta zona se observan variaciones en la temperatura por acción de la altitud, lo que permite la existencia de nieves perpetuas en montañas de más de 5000 m de altura en la zona ecuatorial.<br/>	
	Hidrografía<br/>	
	El 26% del agua dulce de la Tierra se encuentra en Sudamérica, donde destacan por su enorme extensión las cuencas del río Amazonas, la mayor del planeta, la del río Orinoco y la del río Paraná. Por su estructura geológica presenta dos grandes tipos de ríos: los que desembocan en el Atlántico son largos, caudalosos, mientras que los que desembocan en el Pacífico son cortos y torrenciales, ya que en su recorrido desde los Andes hasta el océano deben salvar un gran desnivel. Además, los ríos que desembocan en el Mar Caribe se asemejan mucho a los que desembocan en el Pacífico. También se destaca el Acuífero Guaraní, el tercero más grande del mundo, capaz de abastecer a la población mundial por 200 años. Es compartido por Argentina, Brasil, Paraguay y Uruguay.<br/>	
</div>
<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</body>

