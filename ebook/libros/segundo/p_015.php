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
</script>
<style>
body	{
	background:url(media/sp1.jpg) no-repeat center center; 
	background-size: cover;
	height:100%;
	width:100%;
	padding:0px;
	margin:0px;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:space;
	src: url(media/space.otf);
}
.fontspace {
	font-family: space;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" class='fontech'>
	<div style="float:left;width:100%;overflow:hidden;font-size:80px;font-weight:bold;color:#fff;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,2px 2px 1px #000,3px 3px 1px #000;opacity:0.5" id="" class='fontspace'>Biosfera</div>
	<div style='float:left;text-align:justify;font-size:28px;padding:0px 50px;font-weight:bold;color:#ffa;text-shadow:-1px 0px 1px #000,1px 0px 1px #000;' class='fontech' id='divspeech'>
		La vida en la Tierra se desarrolla y ha evolucionado en una capa de tan sólo unos cuantos kilómetros de espesor. A esta delgada, dinámica y frágil capa que envuelve la superficie de nuestro planeta se le denomina biosfera (la esfera de la vida) o ecósfera (nuestra casa). Es aquí en donde se interrelacionan, de manera compleja, los procesos químicos, físicos y biológicos derivados de la estrecha relación entre la capa superficial de la litosfera (las rocas y los suelos), la hidrosfera (los mares, ríos y océanos) y la atmósfera (los fenómenos meteorológicos y los climas). También se le denomina epidermis de la Tierra, es decir, la delgada piel que cubre a nuestro planeta, en donde habitamos como una especie más, ejerciendo en ella un papel importante en su transformación a través de las actividades que realizamos para producir nuestros bienes y satisfacer nuestras necesidades. De allí que la biosfera o ecósfera sea de singular importancia para nosotros y para el futuro de nuestra especie. Es en esta epidermis en donde la energía solar se constituye como el motor esencial del mantenimiento de la vida, al producir la fotosíntesis y regular el ciclo del oxígeno, pues sin estos procesos no existiríamos junto con los otros organismos que habitan el planeta. Además, la distribución de los organismos vivos en el planeta es diferenciada y desigual debido a los muy diversos factores y fenómenos que hemos estudiado en la Unidad I y a lo largo de esta unidad. El clima juega un papel fundamental como síntesis de estos factores y fenómenos, pues organiza espacial y temporalmente la estructura y función de los ecosistemas y los paisajes que resultan de la biodiversidad.<br/>
		Regiones naturales: Selva, Estepa, Bosque tropical, Sabana, Desierto, Mediterranea, Pradera, Bosque mixto, Taiga, Tundra<br/>
	</div>
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</body>