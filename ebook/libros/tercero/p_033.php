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
		document.getElementById("divspeech").innerHTML="Una casa es un edificio residencial de una sola unidad, que puede variar en complejidad desde una cabaña rudimentaria hasta una estructura compleja de madera, mampostería, concreto u otro material, equipada con plomería, electricidad y sistemas de calefacción, ventilación y aire acondicionado. [1] [2] Las casas utilizan una variedad de sistemas de techos diferentes para evitar que la lluvia, como la lluvia, ingrese al espacio de la vivienda. Las casas pueden tener puertas o cerraduras para asegurar el espacio de la vivienda y proteger a sus habitantes y su contenido de ladrones u otros intrusos. La mayoría de las casas modernas convencionales en las culturas occidentales contendrán uno o más dormitorios y baños, una cocina o área para cocinar y una sala de estar. Una casa puede tener un comedor separado o el área para comer puede estar integrada en otra habitación. Algunas casas grandes en América del Norte tienen una sala de recreación. En las sociedades tradicionales orientadas a la agricultura, los animales domésticos como las gallinas o el ganado mayor (como el ganado) pueden compartir parte de la casa con los humanos.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/ho1.jpg') center center no-repeat; 
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
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:90px;padding:0px 10px 50px 10px;color:#ccc;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,5px 5px 1px #000;font-weight:bold;" class="fontsports"  >ZUHAUSE</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:30px;padding:0px 50px;text-align:justify;line-height:120%;color:#000;text-shadow:1px 1px 1px #fff,2px 2px 1px #000;" id='divspeech'  class="fontech" >
	Ein Haus ist ein Wohnhaus mit einer Einheit, dessen Komplexität von einer rudimentären Hütte bis zu einer komplexen Struktur aus Holz, Mauerwerk, Beton oder anderem Material reichen kann, die mit Sanitär-, Elektro- und Heizungs-, Lüftungs- und Klimaanlagen ausgestattet ist. [1] [2] Häuser verwenden eine Reihe verschiedener Dachsysteme, um zu verhindern, dass Niederschläge wie Regen in den Wohnraum gelangen. Häuser können Türen oder Schlösser haben, um den Wohnraum zu sichern und seine Bewohner und Inhalte vor Einbrechern oder anderen Eindringlingen zu schützen. Die meisten konventionellen modernen Häuser in westlichen Kulturen enthalten ein oder mehrere Schlafzimmer und Badezimmer, eine Küche oder einen Kochbereich und ein Wohnzimmer. Ein Haus kann ein separates Esszimmer haben oder der Essbereich kann in einen anderen Raum integriert sein. Einige große Häuser in Nordamerika haben einen Aufenthaltsraum. In traditionellen landwirtschaftlich orientierten Gesellschaften können Haustiere wie Hühner oder größere Tiere (wie Rinder) einen Teil des Hauses mit Menschen teilen.
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>

