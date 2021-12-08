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
	background:url(media/tree.jpg) no-repeat center center fixed; 
	background-size: cover;
}	
@font-face {
	font-family:lm;
	src: url(media/lm.ttf);
}
.fontlm {
	font-family: lm;
}
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}

.boton	{
	border:0px solid;
	font-size:32px;
	background:#ddd;
	cursor:pointer;
}
.boton:hover	{
	border:0px solid;
	background:#bbb;
	color:#fff;
}
.clasenumero {
	acolor:#f00;
}	
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style='float:left;text-align:center;font-size:90px;color:#f80;text-shadow:1px 1px 1px #000;' class='fontlm'>Geografia</div>
	<div style='float:left;text-align:justify;font-size:34px;padding:0px 50px;color:#cff;text-shadow:2px 2px 1px #000;' class='fontech' id='divspeech' >
		La geografia (del latin geographĭa, y este del griego γεωγραφία [geōgraphia],1​ literalmente traducido como «descripcion de la tierra») es la disciplina que trata de la descripcion o de la representacion grafica de la Tierra.1​2​ En sentido amplio es la ciencia que estudia la superficie terrestre, las sociedades que la habitan y los territorios, paisajes, lugares o regiones que la forman al relacionarse entre si.<br/>
		La geografia moderna es una disciplina cuyo objetivo primordial es la explicacion de toda una serie de fenomenos naturales y sociales y no se refiere solo a la localizacion de esos fenomenos, sino que también estudia como son y como han cambiado para llegar a ser lo que son.<br/>
		La geografia se divide en dos grandes ramas: geografia regional y geografia general.<br/>
		La geografia regional estudia las diferentes subdivisiones del espacio terrestre en paises, estados y regiones a distintas escalas de detalle, desde el analisis geografico de un pequeno valle de montana, hasta el estudio regional amplio de comarcas, paises, naciones o estados, e incluso, espacios multinacionales. Mientras que la geografia general se divide en dos grandes ramas: geografia fisica y geografia humana:
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</body>