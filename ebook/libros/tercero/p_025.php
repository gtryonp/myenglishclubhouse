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
		document.getElementById("divspeech").innerHTML="Una mascota, o animal de compañía, es un animal que se mantiene principalmente para la compañía o el entretenimiento de una persona en lugar de un animal de trabajo, ganado o un animal de laboratorio. A menudo se considera que las mascotas populares tienen apariencias atractivas, inteligencia y personalidades relacionadas, pero algunas mascotas pueden ser aceptadas de manera altruista (como un animal callejero) y aceptadas por el propietario, independientemente de estas características. Dos de las mascotas más populares son perros y gatos; El término técnico para un amante de los gatos es un aururofilo y un amante de los perros un cinófilo. Otros animales mantenidos comúnmente incluyen: conejos; hurones cerdos roedores, como jerbos, hámsters, chinchillas, ratas, ratones y cobayas; mascotas aviarias, como loros, paseriformes y aves de corral; mascotas de reptiles, como tortugas, caimanes, cocodrilos, lagartijas y serpientes; mascotas acuáticas, como peces, caracoles de agua dulce y salada, anfibios como ranas y salamandras; y mascotas artrópodas, como tarántulas y cangrejos ermitaños. Las mascotas pequeñas se pueden agrupar como mascotas de bolsillo, mientras que el grupo equino y bovino incluye los animales de compañía más grandes.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background: url(media/pet.jpg);
	abackground-size: cover;
	overflow:hidden;
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
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" >
		<div style="float:left;width:100%;overflow:hidden;font-size:100px;color:#090;text-shadow:1px 1px 1px #000;line-height:100px;" id="" class="fontpaw" >Haustier</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
Ein Haustier oder Begleittier ist ein Tier, das in erster Linie zur Gesellschaft oder Unterhaltung einer Person gehalten wird und nicht als Arbeitstier, Vieh oder Labortier. Beliebte Haustiere werden oft als attraktiv, intelligent und zuordenbar angesehen. Einige Haustiere können jedoch altruistisch aufgenommen werden (z. B. streunende Tiere) und vom Besitzer unabhängig von diesen Merkmalen akzeptiert werden. Zwei der beliebtesten Haustiere sind Hunde und Katzen; Der Fachbegriff für einen Katzenliebhaber ist ein Ailurophiler und ein Hundeliebhaber ein Zynophiler. Andere Tiere, die üblicherweise gehalten werden, sind: Kaninchen; Frettchen; Schweine; Nagetiere wie Rennmäuse, Hamster, Chinchillas, Ratten, Mäuse und Meerschweinchen; Haustiere wie Papageien, Sperlingsvögel und Hühner; Reptilien-Haustiere wie Schildkröten, Alligatoren, Krokodile, Eidechsen und Schlangen; Wassertiere wie Fische, Süßwasser- und Salzwasserschnecken, Amphibien wie Frösche und Salamander; und Arthropoden-Haustiere wie Vogelspinnen und Einsiedlerkrebse. Kleine Haustiere können als Haustiere klassifiziert werden, während die Gruppe der Pferde und Rinder die größten Haustiere umfasst.
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
	</div>
</body>