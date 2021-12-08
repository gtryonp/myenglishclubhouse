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
		document.getElementById("divspeech").innerHTML="Un lenguaje es un sistema estructurado de comunicación. El lenguaje, en un sentido más amplio, es el método de comunicación que implica el uso de lenguajes, especialmente humanos. [1] [2] [3]<br/> El estudio científico del lenguaje se llama lingüística. Preguntas sobre la filosofía del lenguaje, como si las palabras pueden representar la experiencia, se han debatido al menos desde Gorgias y Platón en la antigua Grecia. Pensadores como Rousseau han argumentado que el lenguaje se originó de las emociones, mientras que otros como Kant sostuvieron que se originó del pensamiento racional y lógico. Filósofos del siglo XX como Wittgenstein argumentaron que la filosofía es realmente el estudio del lenguaje. Figuras importantes en lingüística incluyen Ferdinand de Saussure y Noam Chomsky.<br/> Las estimaciones de la cantidad de idiomas humanos en el mundo varían entre 5,000 y 7,000. Sin embargo, cualquier estimación precisa depende de la distinción arbitraria (dicotomía) entre idiomas y dialecto. [4] Los idiomas naturales se hablan o se firman, pero cualquier idioma se puede codificar en medios secundarios mediante estímulos auditivos, visuales o táctiles, por ejemplo, por escrito, silbidos, señas o braille. Esto se debe a que el lenguaje humano es independiente de la modalidad. Dependiendo de las perspectivas filosóficas con respecto a la definición del lenguaje y el significado, cuando se usa como un concepto general, el 'lenguaje' puede referirse a la capacidad cognitiva para aprender y usar sistemas de comunicación compleja, o para describir el conjunto de reglas que componen estos sistemas, o el conjunto de enunciados que se pueden producir a partir de esas reglas. Todos los idiomas se basan en el proceso de semiosis para relacionar signos con significados particulares. Los lenguajes oral, manual y táctil contienen un sistema fonológico que gobierna cómo se usan los símbolos para formar secuencias conocidas como palabras o morfemas, y un sistema sintáctico que gobierna cómo se combinan palabras y morfemas para formar frases y expresiones";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
html,	
body	{
	background:url(media/ga1.jpg) center center; 
	background-size: cover;
	background-attachment: fixed;
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
.playful span {
  position: relative;
  color: #ffa;
	text-shadow:1px 1px 10px #fff;
  animation: scatter 1.75s infinite;
}
.playful span:nth-child(2n) {
  color: #ff8;
  animation-delay: 0.3s;
}
.playful span:nth-child(3n) {
  color: #ff0;
  animation-delay: 0.15s;
}
.playful span:nth-child(4n) {
  color: #fa0;
  animation-delay: 0.4s;
}
.playful span:nth-child(5n), .playful span:nth-child(8n) {
  color: #f80;
  animation-delay: 0.25s;
}
@keyframes scatter {
  0% {
    top: 0;
  }
  50% {
    top: -10px;
  }
  100% {
    top: 0;
  }
}
body {
  background-color: $background;
}
h1 {
	padding:10px 0px 0px 20px;
  font-size: 65px;
  font-family: ech
  display: block;
  width: 100%;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<h1 class="playful" >
	<span>S</span>
	<span>p</span>
	<span>r</span>
	<span>a</span>
	<span>c</span>
	<span>h</span>
	<span>e</span>
</h1>
<div style='float:left;text-align:justify;font-size:18px;padding:0px 10px 0px 50px;font-weight:bold;letter-spacing: 2px;word-spacing: 6px;color:#cff;text-shadow:1px 1px 1px #000;' class='fontech'>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		Eine Sprache ist ein strukturiertes Kommunikationssystem. Sprache ist im weiteren Sinne die Kommunikationsmethode, bei der - insbesondere menschliche - Sprachen verwendet werden. [1] [2] [3] Das wissenschaftliche Studium der Sprache heißt Linguistik. Fragen zur Sprachphilosophie, wie zum Beispiel, ob Wörter Erfahrung darstellen können, wurden zumindest seit Gorgias und Platon im antiken Griechenland diskutiert. Denker wie Rousseau haben argumentiert, dass Sprache aus Emotionen stammt, während andere wie Kant der Meinung sind, dass sie aus rationalem und logischem Denken stammt. Philosophen des 20. Jahrhunderts wie Wittgenstein argumentierten, dass Philosophie wirklich das Studium der Sprache ist. Zu den wichtigsten Persönlichkeiten der Linguistik zählen Ferdinand de Saussure und Noam Chomsky. Schätzungen der Anzahl menschlicher Sprachen in der Welt variieren zwischen 5.000 und 7.000. Eine genaue Schätzung hängt jedoch von der willkürlichen Unterscheidung (Dichotomie) zwischen Sprachen und Dialekt ab. [4] Natürliche Sprachen werden gesprochen oder signiert, aber jede Sprache kann mithilfe von akustischen, visuellen oder taktilen Reizen in Sekundärmedien codiert werden - beispielsweise schriftlich, pfeifend, signierend oder in Blindenschrift. Dies liegt daran, dass die menschliche Sprache modalitätsunabhängig ist. Abhängig von den philosophischen Perspektiven hinsichtlich der Definition von Sprache und Bedeutung kann sich "Sprache" bei Verwendung als allgemeines Konzept auf die kognitive Fähigkeit beziehen, Systeme komplexer Kommunikation zu lernen und zu verwenden oder die Regeln zu beschreiben, aus denen diese Systeme bestehen. oder die Menge von Äußerungen, die aus diesen Regeln erzeugt werden können. Alle Sprachen verlassen sich auf den Prozess der Semiose, um Zeichen mit bestimmten Bedeutungen in Beziehung zu setzen. Mündliche, manuelle und taktile Sprachen enthalten ein phonologisches System, das regelt, wie Symbole zur Bildung von Sequenzen verwendet werden, die als Wörter oder Morpheme bekannt sind, und ein syntaktisches System, das regelt, wie Wörter und Morpheme zu Phrasen und Äußerungen kombiniert werden.
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>