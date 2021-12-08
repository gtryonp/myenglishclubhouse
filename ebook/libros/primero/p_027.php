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
		document.getElementById("divspeech").innerHTML="En gramática, el tiempo es una categoría que expresa referencia de tiempo con referencia al momento de hablar. [1] [2] Los tiempos verbales generalmente se manifiestan mediante el uso de formas específicas de verbos, particularmente en sus patrones de conjugación.<br/>Los tiempos principales que se encuentran en muchos idiomas incluyen el pasado, el presente y el futuro. Algunos idiomas tienen solo dos tiempos distintos, como pasado y no pasado, o futuro y no futuro. También hay idiomas sin tiempo, como la mayoría de los idiomas chinos, aunque pueden poseer un sistema futuro y no futuro, que es típico de los idiomas sino-tibetanos. [3] Un trabajo reciente de Bittner [4], Tonnhauser [5] ha descrito las diferentes formas en que los lenguajes sin tiempo marcan el tiempo. Por otro lado, algunos lenguajes hacen distinciones tensas más finas, como el pasado remoto versus el pasado reciente o el futuro cercano o remoto.		";		
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
	font-family:btf;
	src: url(media/btf.ttf);
}
.fontech {
	font-family: ech;
}
.fontbtf {
	font-family: btf;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" >
		<div style="float:left;width:100%;overflow:hidden;font-size:48px;color:#f00;text-shadow:1px 1px 1px #000;padding:20px 0px;" id="" class="fontbtf" >PAST < present future</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
			In grammar, tense is a category that expresses time reference with reference to the moment of speaking.[1][2] Tenses are usually manifested by the use of specific forms of verbs, particularly in their conjugation patterns.
			The main tenses found in many languages include the past, present, and future. Some languages have only two distinct tenses, such as past and nonpast, or future and nonfuture. There are also tenseless languages, like most of the Chinese languages, though they can possess a future and nonfuture system, which is typical of Sino-Tibetan languages.[3] Recent work by Bittner[4], Tonnhauser[5] has described the different ways in which tenseless languages nonetheless mark time. On the other hand, some languages make finer tense distinctions, such as remote vs recent past, or near vs remote future.
		</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
	</div>
</body>