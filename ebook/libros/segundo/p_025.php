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
		document.getElementById("divspeech").innerHTML="Una mascota, o animal de compañía, es un animal que se mantiene principalmente para la compañía o el entretenimiento de una persona en lugar de un animal de trabajo, ganado o un animal de laboratorio. A menudo se considera que las mascotas populares tienen apariencias atractivas, inteligencia y personalidades relacionadas, pero algunas mascotas pueden ser aceptadas de manera altruista (como un animal callejero) y aceptadas por el propietario, independientemente de estas características. Dos de las mascotas más populares son perros y gatos; El término técnico para un amante de los gatos es un aururofilo y un amante de los perros un cinófilo. Otros animales mantenidos comúnmente incluyen: conejos; hurones cerdos roedores, como jerbos, hámsters, chinchillas, ratas, ratones y cobayas; mascotas aviarias, como loros, paseriformes y aves de corral; mascotas de reptiles, como tortugas, caimanes, cocodrilos, lagartijas y serpientes; mascotas acuáticas, como peces, caracoles de agua dulce y salada, anfibios como ranas y salamandras; y mascotas artrópodas, como tarántulas y cangrejos ermitaños. Las mascotas pequeñas se pueden agrupar como mascotas de bolsillo, mientras que el grupo equino y bovino incluye los animales de compañía más grandes.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background: url(media/pet.jpg) center center no-repeat fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
@font-face {
	font-family:paw;
	src: url(media/paw.ttf);
}
.fontech {
	font-family: ech;
}
.fontpaw {
	font-family: paw;
}
.divtexto	{
	background: -webkit-linear-gradient(0deg, #00a, #060, #00a);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;		
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 0px;height:98%;" >
		<div style="float:left;width:100%;overflow:hidden;font-size:60px;color:#09f;text-shadow:1px 1px 1px #000;letter-spacing:-10px;" id="" class="fontpaw" >Distribucion de poblacion</div>
		<div style='float:left;text-align:justify;font-size:32px;padding:0px 10px 0px 60px;font-weight:bold;line-height:28px;' class='fontech divtexto' id='divspeech'  >
			<img src="media/map.png" style="margin:5px;float:right;width:100%;">
			La distribución de la población se ve afectada por factores geográficos tales como: el clima, el relieve, la hidrografía, el suelo y la vegetación. Clima.<br/>
			a) <span style='background:rgba(0,0,0,.25);'>Areas</span> Las áreas más pobladas del mundo se localizan en las zonas templadas del planeta con periodos largos de lluvia, debido a que favorecen las cosechas. Todo lo contrario sucede en las zonas con climas desérticos, tropicales o de tundra, en donde generalmente existe menor población. Relieve.b) Las áreas planas como las altiplanicies, las llanuras y las mesetas son las más pobladas, debido a que la topografía facilita las actividades agropecuarias y la construcción de viviendas y de vías de comunicación. También se encuentran densamente poblados los valles fluviales, como el del Ganges en India, el Mississippi en EUA, el Paraná en Argentina, etcétera. <br/>
			b) <span style='background:rgba(0,0,0,.25);'>Población relativa o densidad de población</span> Es el número de habitantes por kilómetro cuadrado. Se obtiene dividiendo la población absoluta entre la extensión del territorio en donde dicha población reside.<br/>
			c) <span style='background:rgba(0,0,0,.25);'>Hidrografía</span> Desde tiempos remotos, las primeras grandes ciudades se asentaron en áreas próximas a los ríos, debido a la disposición de agua, un recurso esencial para el ser humano. Algunos ejemplos son el florecimiento del antiguo Egipto, asentado cerca del Nilo, la ciudad de Bagdad en Irak a la orilla del río Tigris y el florecimiento de Basora, la ciudad portuaria de Irak asentada en la unión entre el Tigris y el Éufrates, en donde se forma el canal Shatt-al-Arab. <br/>
			d) <span style='background:rgba(0,0,0,.25);'>Suelo</span> Los suelos con abundante materia orgánica favorecen la agricultura, en tanto que las áreas con riquezas mineras permitieron el florecimiento de ciudades como Guanajuato, Hidalgo y Chihuahua en México.<br/> 
			e) <span style='background:rgba(0,0,0,.25);'>Vegetación</span> Las zonas de pradera, sabana o de bosques mixtos son lugares muy poblados, debido a que en éstas se pueden realizar actividades agropecuarias, a diferencia de las zonas desérticas, de selva o tundra. PAISAJE HUMANO O SOCIAL 163 También existen factores socioeconómicos que influyen en la densidad de la población, como son: la existencia de recursos naturales, fuentes de trabajo, centros educativos, servicios públicos y de asistencia social, así como la estabilidad política. Para calcular el tamaño de la población en un lugar determinado se utilizan los siguientes índices: a) Población absoluta. Es el número total de habitantes de una comunidad, región, país, continente o el planeta entero. <br/>
		</div>
		<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	</div>
</body>