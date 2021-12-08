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
		<div style="float:left;width:100%;overflow:hidden;font-size:100px;color:#090;text-shadow:1px 1px 1px #000;line-height:100px;" id="" class="fontpaw" >pets</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
			A pet, or companion animal, is an animal kept primarily for a person's company or entertainment rather than as a working animal, livestock or a laboratory animal. Popular pets are often considered to have attractive appearances, intelligence and relatable personalities, but some pets may be taken in on an altruistic basis (such as a stray animal) and accepted by the owner regardless of these characteristics.
			Two of the most popular pets are dogs and cats; the technical term for a cat lover is an ailurophile and a dog lover a cynophile. Other animals commonly kept include: rabbits; ferrets; pigs; rodents, such as gerbils, hamsters, chinchillas, rats, mice, and guinea pigs; avian pets, such as parrots, passerines and fowls; reptile pets, such as turtles, alligators, crocodiles, lizards, and snakes; aquatic pets, such as fish, freshwater and saltwater snails, amphibians like frogs and salamanders; and arthropod pets, such as tarantulas and hermit crabs. Small pets may be grouped together as pocket pets, while the equine and bovine group include the largest companion animals.
		</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
	</div>
</body>