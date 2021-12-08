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
		document.getElementById("divspeech").innerHTML="La historia (del griego ἱστορία, historia, que significa indagación; conocimiento adquirido por la investigación) [2] es el estudio del pasado. [3] [4] Los eventos que ocurren antes de la invención de los sistemas de escritura se consideran prehistoria. Historia es un término general que se refiere a eventos pasados, así como a la memoria, descubrimiento, recopilación, organización, presentación e interpretación de información sobre estos eventos. Los estudiosos que se centran en la historia se llaman historiadores. El papel del historiador es colocar el pasado en contexto, utilizando fuentes de momentos y eventos, y llenando los vacíos lo mejor que pueda. [5] Los documentos escritos no son las únicas fuentes que usan los historiadores para desarrollar su comprensión del pasado. También usan objetos materiales, relatos orales, marcadores ecológicos, arte y artefactos como fuentes históricas. La historia también incluye la disciplina académica que usa la narrativa para describir, examinar, cuestionar y analizar una secuencia de eventos pasados, investigar los patrones de causa y efecto que están relacionados con ellos. [6] [7] Los historiadores buscan comprender y representar el pasado a través de narraciones. A menudo debaten qué narrativa explica mejor un evento, así como la importancia de diferentes causas y efectos. Los historiadores también debaten la naturaleza de la historia y su utilidad al discutir el estudio de la disciplina como un fin en sí mismo y como una forma de proporcionar perspectiva sobre los problemas del presente. [6] [8] [9] [10] Las historias comunes a una cultura en particular, pero no respaldadas por fuentes externas (como las historias que rodean al Rey Arturo), generalmente se clasifican como patrimonio cultural o leyendas. [11] [12] La historia difiere del mito en que está respaldada por evidencia. Sin embargo, las influencias antiguas han ayudado a generar interpretaciones variantes de la naturaleza de la historia que han evolucionado a lo largo de los siglos y continúan cambiando hoy. El estudio moderno de la historia es muy amplio e incluye el estudio de regiones específicas y el estudio de ciertos elementos temáticos o temáticos de la investigación histórica. La historia a menudo se enseña como parte de la educación primaria y secundaria, y el estudio académico de la historia es una disciplina importante en los estudios universitarios.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url('media/wmold.jpg') center center no-repeat fixed; 
	background-size: cover;
}	
@font-face {
	font-family:aqt;
	src: url(media/aqt.ttf);
}
.fontaqt {
	font-family: aqt;
}
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
table	{font:18px verdana;background:rgba(255,222,222,.5);border:2px solid;width:100%;}
td		{border:1px solid;padding:5px;}
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 10px;height:98%;color:#000;" >
	<div style="float:left;overflow:hidden;font-size:80px;position:relative;height:120px;text-shadow:1px 1px 1px #fff;font-weight:bold;color:#a00;" class="fontaqt">
	 Geografía de América
	</div>
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;font-weight:bold;text-shadow:0px 1px 1px #fa0' class='fontech' id='divspeech'  >
		América corresponde a la segunda masa de tierra más grande del planeta, después de Asia, con una extensión aproximada de 42 111 231 km². Se extiende de norte a sur desde el Cabo Morris Jesup (83ºN,Groenlandia) en el océano Glacial Ártico hasta el pasaje de Drake, que separa al continente americano de la Antártida. Su ciudad más oriental corresponde al cabo Branco en Brasil (34°47'W) mientras que el punto más occidental corresponde a la isla Attu en las islas Aleutianas (173°11'E), junto al estrecho de Bering que separa a Alaska del continente asiático. Cubre el 8,3 % de la superficie total de la tierra y el 28,4 % de la tierra emergida; además concentra el 14 % de la población humana.<br/>
		Está compuesta por cuatro subcontinentes: América del Norte, América Central, América del Sur y Antillas. De acuerdo a las teorías de la deriva continental y de tectónica de placas, lo que sería América del Norte y América del Sur habrían permanecido durante millones de años separadas. Luego de la división de Gondwana y Laurasia ambos subcontinentes habrían viajado hasta su actuales posiciones quedando unidos por Centroamérica, un puente de tierra surgido entre ellos por acción de la tectónica de placas, que fuera primero un arco insular y más tarde se convertirá en tierra continua		<br/>
		Superficie<br/>
		El Aconcagua, en Argentina, es con 6962.El punto más alto del mundo fuera del Himalaya en Asia, además de ser la cumbre de mayor altitud de los hemisferios meridional y occidental.<br/>
		El Huascarán, en Perú, es con 6768 m s. n. m., el punto más alto de toda la zona intertropical del mundo, además de ser el lugar con la menor fuerza de atracción gravitacional de la Tierra.1​<br/>
		El Salto Ángel en Venezuela es la cascada o caída de agua más alta del mundo, con casi 1 Km.<br/>
		El Pico Duarte, localizado en la República Dominicana, es el pico más alto de la América Insular, con una elevación de 3098 m. s. n. m. Es el único lugar en el Caribe donde se registran heladas de manera ocasional.<br/>
		La cumbre máxima del continente es el Aconcagua en Argentina, con 6960,8 m s. n. m.; es el punto más alto del mundo fuera de los Himalayas (en Asia), además de ser la cumbre de mayor altitud de los hemisferios meridional y occidental. La segunda cumbre continental es el nevado Ojos del Salado, entre Argentina y Chile, el cual destaca además por ser el volcán más alto del mundo.<br/>
		Hidrografía<br/>
		Lago de Maracaibo el lago más grande de Latinoamérica.<br/>
		Las cataratas del Iguazú, entre la Argentina y Brasil; fueron reconocidas en el 2011 como una de las Siete maravillas naturales del mundo.<br/>
		El Río de la Plata, entre Argentina y Uruguay, es tradicionalmente considerado como el río más ancho del planeta.<br/>
		Vista aérea de las cataratas del Niágara, que conecta los lagos Ontario y Erie.<br/>
		El lago Titicaca es el lago navegable a mayor altitud en el mundo.<br/>
		La mayoría de los ríos de América discurren desde los sistemas montañosos del occidente y se distribuyen en las vertientes de los océanos Glacial Ártico, Atlántico y Pacífico. En la vertiente del Atlántico fluyen los ríos más largos, formando importantes cuencas que favorecen en todas las maneras a los habitantes de esas zonas.		<br/>
		Clima<br/>
		Debido a que el continente se extiende de norte a sur, cuenta con corrientes frías y cálidas.<br/>
		<div style="float:left;width:100%;overflow:hidden;background:rgba(255,255,255,1);padding:10px 0px;" id="" class="" >Paises y capitales de America</div>
		<table>
		<tr><td>Antigua y Barbuda</td><td> Saint John's</td></tr>
		<tr><td>Argentina</td><td> Buenos Aires</td></tr>
		<tr><td>Bahamas</td><td> Nasáu</td></tr>
		<tr><td>Barbados</td><td> Bridgetown</td></tr>
		<tr><td>Belice</td><td> Belmopán</td></tr>
		<tr><td>Bolivia</td><td> Sucre</td></tr>
		<tr><td>Brasil</td><td> Brasilia</td></tr>
		<tr><td>Canadá</td><td> Ottawa</td></tr>
		<tr><td>Chile</td><td> Santiago</td></tr>
		<tr><td>Colombia</td><td> Bogotá</td></tr>
		<tr><td>Costa Rica</td><td> San José</td></tr>
		<tr><td>Cuba</td><td> La Habana</td></tr>
		<tr><td>Dominica</td><td> Roseau</td></tr>
		<tr><td>Ecuador</td><td> Quito</td></tr>
		<tr><td>El Salvador</td><td> San Salvador</td></tr>
		<tr><td>Estados Unidos</td><td> Washington D.C</td></tr>
		<tr><td>Granada</td><td> Saint George</td></tr>
		<tr><td>Guatemala</td><td> Ciudad de Guatemala</td></tr>
		<tr><td>Guyana</td><td> Georgetown</td></tr>
		<tr><td>Haití</td><td> Puerto Príncipe</td></tr>
		<tr><td>Honduras</td><td> Tegucigalpa</td></tr>
		<tr><td>Jamaica</td><td> Kingston</td></tr>
		<tr><td>México</td><td> Ciudad de México</td></tr>
		<tr><td>Nicaragua</td><td> Managua</td></tr>
		<tr><td>Panamá</td><td> Ciudad de Panamá</td></tr>
		<tr><td>Paraguay</td><td> Asunción</td></tr>
		<tr><td>Perú</td><td> Lima</td></tr>
		<tr><td>República Dominicana</td><td> Santo Domingo</td></tr>
		<tr><td>San Cristóbal y Neives</td><td> Basseterre</td></tr>
		<tr><td>San Vicente y las Granadinas</td><td> Kingstown</td></tr>
		<tr><td>Santa Lucía</td><td> Castries</td></tr>
		<tr><td>Surinam</td><td> Paramaribo</td></tr>
		<tr><td>Trinidad y Tobago</td><td> Puerto España</td></tr>
		<tr><td>Uruguay</td><td> Montevideo</td></tr>
		<tr><td>Venezuela</td><td> Caracas</td></tr>
		</table>
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</div>	
</body>