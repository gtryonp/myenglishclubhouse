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
	<span>L</span>
	<span>a</span>
	<span>n</span>
	<span>g</span>
	<span>u</span>
	<span>a</span>
	<span>g</span>
	<span>e</span>
</h1>
<div style='float:left;text-align:justify;font-size:18px;padding:0px 10px 0px 50px;font-weight:bold;letter-spacing: 2px;word-spacing: 6px;color:#cff;text-shadow:1px 1px 1px #000;' class='fontech'>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		A language is a structured system of communication. Language, in a broader sense, is the method of communication that involves the use of – particularly human – languages.[1][2][3]
		The scientific study of language is called linguistics. Questions concerning the philosophy of language, such as whether words can represent experience, have been debated at least since Gorgias and Plato in ancient Greece. Thinkers such as Rousseau have argued that language originated from emotions while others like Kant have held that it originated from rational and logical thought. Twentieth century philosophers such as Wittgenstein argued that philosophy is really the study of language. Major figures in linguistics include Ferdinand de Saussure and Noam Chomsky.
		Estimates of the number of human languages in the world vary between 5,000 and 7,000. However, any precise estimate depends on the arbitrary distinction (dichotomy) between languages and dialect.[4] Natural languages are spoken or signed, but any language can be encoded into secondary media using auditory, visual, or tactile stimuli – for example, in writing, whistling, signing, or braille. This is because human language is modality-independent. Depending on philosophical perspectives regarding the definition of language and meaning, when used as a general concept, "language" may refer to the cognitive ability to learn and use systems of complex communication, or to describe the set of rules that makes up these systems, or the set of utterances that can be produced from those rules. All languages rely on the process of semiosis to relate signs to particular meanings. Oral, manual and tactile languages contain a phonological system that governs how symbols are used to form sequences known as words or morphemes, and a syntactic system that governs how words and morphemes are combined to form phrases and utterances.	
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>