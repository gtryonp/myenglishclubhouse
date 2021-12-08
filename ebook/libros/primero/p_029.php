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
		document.getElementById("divspeech").innerHTML="La historia (del griego ἱστορία, historia, que significa indagación; conocimiento adquirido por la investigación) [2] es el estudio del pasado. [3] [4] Los eventos que ocurren antes de la invención de los sistemas de escritura se consideran prehistoria. Historia es un término general que se refiere a eventos pasados, así como a la memoria, descubrimiento, recopilación, organización, presentación e interpretación de información sobre estos eventos. Los estudiosos que se centran en la historia se llaman historiadores. El papel del historiador es colocar el pasado en contexto, utilizando fuentes de momentos y eventos, y llenando los vacíos lo mejor que pueda. [5] Los documentos escritos no son las únicas fuentes que usan los historiadores para desarrollar su comprensión del pasado. También usan objetos materiales, relatos orales, marcadores ecológicos, arte y artefactos como fuentes históricas. La historia también incluye la disciplina académica que usa la narrativa para describir, examinar, cuestionar y analizar una secuencia de eventos pasados, investigar los patrones de causa y efecto que están relacionados con ellos. [6] [7] Los historiadores buscan comprender y representar el pasado a través de narraciones. A menudo debaten qué narrativa explica mejor un evento, así como la importancia de diferentes causas y efectos. Los historiadores también debaten la naturaleza de la historia y su utilidad al discutir el estudio de la disciplina como un fin en sí mismo y como una forma de proporcionar perspectiva sobre los problemas del presente. [6] [8] [9] [10] Las historias comunes a una cultura en particular, pero no respaldadas por fuentes externas (como las historias que rodean al Rey Arturo), generalmente se clasifican como patrimonio cultural o leyendas. [11] [12] La historia difiere del mito en que está respaldada por evidencia. Sin embargo, las influencias antiguas han ayudado a generar interpretaciones variantes de la naturaleza de la historia que han evolucionado a lo largo de los siglos y continúan cambiando hoy. El estudio moderno de la historia es muy amplio e incluye el estudio de regiones específicas y el estudio de ciertos elementos temáticos o temáticos de la investigación histórica. La historia a menudo se enseña como parte de la educación primaria y secundaria, y el estudio académico de la historia es una disciplina importante en los estudios universitarios.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url('media/wmold.jpg') center center no-repeat; 
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
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;color:#000;" >
	<div style="float:left;overflow:hidden;font-size:80px;position:relative;height:120px;text-shadow:1px 1px 1px #000;font-weight:bold;color:#cc0;" class="fontaqt">
	 History
	</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		History (from Greek ἱστορία, historia, meaning 'inquiry; knowledge acquired by investigation')[2] is the study of the past.[3][4] Events occurring before the invention of writing systems are considered prehistory. "History" is an umbrella term that relates to past events as well as the memory, discovery, collection, organization, presentation, and interpretation of information about these events. Scholars who focus on history are called historians. The historian's role is to place the past in context, using sources from moments and events, and filling in the gaps to the best of their ability.[5] Written documents are not the only sources historians use to develop their understanding of the past. They also use material objects, oral accounts, ecological markers, art, and artifacts as historical sources.
		History also includes the academic discipline which uses narrative to describe, examine, question, and analyze a sequence of past events, investigate the patterns of cause and effect that are related to them.[6][7] Historians seek to understand and represent the past through narratives. They often debate which narrative best explains an event, as well as the significance of different causes and effects. Historians also debate the nature of history and its usefulness by discussing the study of the discipline as an end in itself and as a way of providing "perspective" on the problems of the present.[6][8][9][10]
		Stories common to a particular culture, but not supported by external sources (such as the tales surrounding King Arthur), are usually classified as cultural heritage or legends.[11][12] History differs from myth in that it is supported by evidence. However, ancient influences have helped spawn variant interpretations of the nature of history which have evolved over the centuries and continue to change today. The modern study of history is wide-ranging, and includes the study of specific regions and the study of certain topical or thematic elements of historical investigation. History is often taught as part of primary and secondary education, and the academic study of history is a major discipline in university studies.		
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>