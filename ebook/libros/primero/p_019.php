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
		document.getElementById("divspeech").innerHTML="En lingüística, la gramática (del griego antiguo γραμματική) es el conjunto de reglas estructurales que rigen la composición de cláusulas, frases y palabras en un idioma natural. El término se refiere también al estudio de tales reglas y este campo incluye fonología, morfología y sintaxis, a menudo complementada por fonética, semántica y pragmática. Los hablantes con fluidez de una variedad de idiomas o conferencias tienen un conjunto de reglas internalizadas que constituyen su gramática. [1] La gran mayoría de la información en la gramática es, al menos en el caso de la lengua materna de uno, adquirida no por estudio o instrucción consciente sino por escuchar a otros hablantes. Gran parte de este trabajo se realiza durante la primera infancia; aprender un idioma más tarde en la vida generalmente implica una instrucción más explícita. [2] Por lo tanto, la gramática es la información cognitiva que subyace al uso del lenguaje. El término 'gramática' también puede describir las reglas que rigen el comportamiento lingüístico de un grupo de hablantes. Por ejemplo, el término 'gramática inglesa' puede referirse a toda la gramática inglesa; es decir, para las gramáticas de todos los hablantes del idioma, en cuyo caso el término abarca una gran cantidad de variación. [3] Alternativamente, puede referirse solo a lo que es común a las gramáticas de todos o la mayoría de los hablantes de inglés (como el orden de palabras sujeto-verbo-objeto en oraciones declarativas simples). También puede referirse a las reglas de una forma de inglés relativamente bien definida (como el inglés estándar para una región).";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/w.jpg) center center; 
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
	font-family:tags;
	src: url(media/tags.ttf);
}
.fonttags {
	font-family: tags;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	


.playful span {
	position: absolute;
	afont-size: 18px;
	atext-align: center;
	atext-decoration: none;
	animation:spin 1.5s linear infinite;
	animation-direction: alternate-reverse;
	aleft:20px;
}
.playful span:nth-child(1n) {
  animation-delay: 0.3s;
	left:40px;
}
.playful span:nth-child(2n) {
  animation-delay: 2.1s;
	left:80px;
}
.playful span:nth-child(3n) {
  animation-delay: 0.5s;
	left:140px;
}

.playful span:nth-child(4n) {
  animation-delay: 0.1s;
	left:200px;
}
.playful span:nth-child(5n) {
  animation-delay: 1s;
	left:260px;
}
.playful span:nth-child(6n) {
  animation-delay: 0.7s;
	left:320px;
}
.playful span:nth-child(7n) {
  animation-delay: 0.2s;
	left:380px;
}
.playful span:nth-child(8n) {
  animation-delay: 1s;
	left:440px;
}

@keyframes spin2 { 
	0% 		{	transform:rotate(-10deg); } 
	100% 	{	transform:rotate(10deg); } 
}	
@keyframes spin { 
	0% 		{	transform: rotate(0deg) 	rotateX(10deg) rotateY(-10deg);}
	100% 	{	transform: rotate(0deg) 	rotateX(-10deg) rotateY(30deg);}
} 

</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 20px;height:98%;" class='fontech'>
		<div style="float:left;width:100%;overflow:hidden;font-size:220px;color:#fff;text-shadow:1px 1px 10px #000;letter-spacing: -30px;margin:-60px 0px -40px 0px;color:#f00;" id="" class="fonttags playful">
			&nbsp;
			<span>S</span>
			<span>p</span>
			<span>e</span>
			<span>l</span>
			<span>l</span>
			<span>i</span>
			<span>n</span>
			<span>g</span>
		</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;color:#040;' class='fontech' id='divspeech' ondblclick="cambio()">
		In linguistics, grammar (from Ancient Greek γραμματική) is the set of structural rules governing the composition of clauses, phrases and words in a natural language. The term refers also to the study of such rules and this field includes phonology, morphology and syntax, often complemented by phonetics, semantics and pragmatics.
		Fluent speakers of a language variety or lect have a set of internalized rules which constitutes its grammar.[1] The vast majority of the information in the grammar is – at least in the case of one's native language – acquired not by conscious study or instruction but by hearing other speakers. Much of this work is done during early childhood; learning a language later in life usually involves more explicit instruction.[2] Thus, grammar is the cognitive information underlying language use		
		The term "grammar" can also describe the rules which govern the linguistic behavior of a group of speakers. For example, the term "English grammar" may refer to the whole of English grammar; that is, to the grammars of all the speakers of the language, in which case the term encompasses a great deal of variation.[3] Alternatively, it may refer only to what is common to the grammars of all or most English speakers (such as subject–verb–object word order in simple declarative sentences). It may also refer to the rules of one relatively well-defined form of English (such as standard English for a region).		
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>