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
	msg.lang = 'en';
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
		msg.lang = 'en';
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
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:90px;padding:0px 10px 50px 10px;color:#ccc;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,5px 5px 1px #000;font-weight:bold;" class="fontsports"  >HOME</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:30px;padding:0px 50px;text-align:justify;line-height:120%;color:#000;text-shadow:1px 1px 1px #fff,2px 2px 1px #000;" id='divspeech'  class="fontech" >
	A house is a single-unit residential building, which may range in complexity from a rudimentary hut to a complex, structure of wood, masonry, concrete or other material, outfitted with plumbing, electrical, and heating, ventilation, and air conditioning systems.[1][2] Houses use a range of different roofing systems to keep precipitation such as rain from getting into the dwelling space. Houses may have doors or locks to secure the dwelling space and protect its inhabitants and contents from burglars or other trespassers. Most conventional modern houses in Western cultures will contain one or more bedrooms and bathrooms, a kitchen or cooking area, and a living room. A house may have a separate dining room, or the eating area may be integrated into another room. Some large houses in North America have a recreation room. In traditional agriculture-oriented societies, domestic animals such as chickens or larger livestock (like cattle) may share part of the house with humans.
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>

