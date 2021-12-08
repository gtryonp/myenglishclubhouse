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
	<div style="float:left;overflow:hidden;font-size:80px;position:relative;height:120px;text-shadow:1px 1px 1px #000;font-weight:bold;color:#cc0;" class="fontaqt">Geschichte</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		Geschichte (aus dem Griechischen ἱστορία, historia, was "Untersuchung; durch Untersuchung erworbenes Wissen" bedeutet) [2] ist das Studium der Vergangenheit. [3] [4] Ereignisse, die vor der Erfindung von Schriftsystemen auftreten, gelten als Vorgeschichte. "Geschichte" ist ein Überbegriff, der sich auf vergangene Ereignisse sowie auf die Erinnerung, Entdeckung, Sammlung, Organisation, Präsentation und Interpretation von Informationen über diese Ereignisse bezieht. Wissenschaftler, die sich auf Geschichte konzentrieren, werden Historiker genannt. Die Rolle des Historikers besteht darin, die Vergangenheit in einen Kontext zu stellen, Quellen aus Momenten und Ereignissen zu verwenden und die Lücken nach besten Kräften zu füllen. [5] Schriftliche Dokumente sind nicht die einzigen Quellen, aus denen Historiker ihr Verständnis für die Vergangenheit entwickeln. Sie verwenden auch materielle Objekte, mündliche Berichte, ökologische Marker, Kunst und Artefakte als historische Quellen. Zur Geschichte gehört auch die akademische Disziplin, die mithilfe von Erzählungen eine Abfolge vergangener Ereignisse beschreibt, untersucht, hinterfragt und analysiert und die damit verbundenen Muster von Ursache und Wirkung untersucht. [6] [7] Historiker versuchen, die Vergangenheit durch Erzählungen zu verstehen und darzustellen. Sie diskutieren oft, welche Erzählung ein Ereignis am besten erklärt und welche Bedeutung verschiedene Ursachen und Wirkungen haben. Historiker diskutieren auch die Natur der Geschichte und ihre Nützlichkeit, indem sie das Studium der Disziplin als Selbstzweck und als Mittel zur "Perspektive" auf die Probleme der Gegenwart diskutieren. [6] [8] [9] [10] Geschichten, die einer bestimmten Kultur gemeinsam sind, aber nicht von externen Quellen (wie den Geschichten um König Arthur) unterstützt werden, werden normalerweise als kulturelles Erbe oder Legenden eingestuft. [11] [12] Die Geschichte unterscheidet sich vom Mythos dadurch, dass sie durch Beweise gestützt wird. Alte Einflüsse haben jedoch dazu beigetragen, unterschiedliche Interpretationen der Natur der Geschichte hervorzubringen, die sich im Laufe der Jahrhunderte entwickelt haben und sich bis heute ändern. Das moderne Studium der Geschichte ist breit gefächert und umfasst das Studium bestimmter Regionen und das Studium bestimmter aktueller oder thematischer Elemente historischer Untersuchungen. Geschichte wird oft im Rahmen der Primar- und Sekundarstufe unterrichtet, und das akademische Studium der Geschichte ist eine wichtige Disziplin im Universitätsstudium.
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>