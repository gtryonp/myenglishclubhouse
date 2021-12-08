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
		document.getElementById("divspeech").innerHTML="La música es una forma de arte y actividad cultural, cuyo medio es el sonido. Las definiciones generales de la música incluyen elementos comunes como el tono (que rige la melodía y la armonía), el ritmo (y sus conceptos asociados tempo, metro y articulación), la dinámica (volumen y suavidad) y las cualidades sonoras del timbre y la textura (que son a veces denominado el 'color' de un sonido musical). Diferentes estilos o tipos de música pueden enfatizar, restar énfasis u omitir algunos de estos elementos. La música se realiza con una amplia gama de instrumentos y técnicas vocales que van desde el canto hasta el rap; solo hay piezas instrumentales, solo piezas vocales (como canciones sin acompañamiento instrumental) y piezas que combinan canto e instrumentos. La palabra deriva del griego μουσική (mousike; 'arte de las musas'). [1] Ver glosario de terminología musical.		";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background: url(media/music.jpg) center center no-repeat fixed;
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
@font-face {
	font-family:music;
	src: url(media/music.ttf);
}
.fontech {
	font-family: ech;
}
.fontmusic {
	font-family: music;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" >
	<div style="float:left;width:100%;overflow:hidden;font-size:100px;color:#fff;text-shadow:1px 1px 1px #000;letter-spacing:-10px;" id="" class="fontmusic" >Poblacion</div>
	<div style='float:left;text-align:justify;font-size:30px;padding:0px 50px;font-weight:bold;color:#fff;' class='fontech' id='divspeech'  >
		Una población se define como el grupo de personas u organismos de una especie particular que viven en un área geográfica o espacio determinado, cuyo número se determina principalmente mediante un censo. La demografía es el estudio de las poblaciones humanas. Los aspectos del comportamiento humano en las poblaciones se estudian en antropología, sociología, economía y geografía. En esta unidad abordaremos las diferentes características de las poblaciones humanas del mundo.<br/>
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Indicadores de población</div>
		Los indicadores de población son los datos que nos permiten caracterizar una población a través del tiempo y entender su distribución geográfica. Mediante su obtención podemos determinar las necesidades o carencias de una población para, de este modo, buscar soluciones y estrategias que ayuden a mejorar su calidad de vida. Estos indicadores de población son:<br/>
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Edad</div>
		Es el tiempo de vida expresado en años. Para su expresión gráfica se emplean rangos de edad, que pueden ser decenales, quinquenales o veinteñales.
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Sexo</div>
		Es la estructura de la población en función del número de hombres y de mujeres que la componen.
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Fecundidad</div>
		Este índice se aplica sólo para la población femenina mayor de 12 años y menor de 49 y determina el resultado del proceso de reproducción humana, medido por el número promedio de hijos por mujer. Está relacionado con las condiciones socioeconómicas y educativas que poseen la mujer y su pareja.
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Natalidad</div>
		Es el número total de nacidos vivos ocurridos en un año. Se calcula considerando el número de nacimientos de una población por cada mil habitantes en un año (%o)
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Morbilidad</div>
		Este indicador señala la frecuencia de enfermedades y enfermos y la prevalencia de enfermedades en una población. Se multiplica el número de casos en un año por cien mil.
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Mortalidad</div>
		Es el número de fallecidos de una población en un año. Se determina multiplicando por mil el número de defunciones al año (%o). La tasa de mortalidad específica revela las causas de ésta; la más común es la de mortalidad infantil, que se presenta en el primer año de vida y de la cual se llevan registros precisos.
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Esperanza de vida</div>
		Es la estimación del número de años que vivirá una persona de acuerdo con los niveles de bienestar que tenga en el momento de su nacimiento. Este índice se ha visto modificado a través de los años por el desarrollo tecnológico y social, provocando que algunos países elevaran su esperanza de vida y que otros mantengan valores muy bajos
		<div style="float:left;width:100%;overflow:hidden;background:rgba(242,196,165,0.5);text-shadow:2px 2px 1px #000;padding:10px 5px 5px 5px;" id="" class="" >Migración</div>
		Es el desplazamiento de la población de su lugar de origen, cuya causa principal estriba en buscar mejores condiciones de vida. Para obtener las tasas de migración se toman en cuenta los siguientes indicadores: 1. lugar de nacimiento y 2. lugar de residencia durante los últimos cinco años.

</div>
	<div style="float:left;width:100%;overflow:hidden;color:rgba(255,255,0,1);font-size:30px;padding:10px 0px;" id="" class="" >Press keys : JJJ&nbsp;JJJ&nbsp;JLGHJ&nbsp;KKK&nbsp;KKJJ&nbsp;JJHHJH&nbsp;L</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
</div>
</body>