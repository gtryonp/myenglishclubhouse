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
	left:90px;
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
			<span>b</span>
			<span>r</span>
			<span>i</span>
			<span>e</span>
			<span>f</span>
			<span>e</span>
		</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;color:#040;' class='fontech' id='divspeech' ondblclick="cambio()">
		In der Linguistik ist die Grammatik (aus dem Altgriechischen γραμματική) ein Satz struktureller Regeln, die die Zusammensetzung von Klauseln, Phrasen und Wörtern in einer natürlichen Sprache regeln. Der Begriff bezieht sich auch auf das Studium solcher Regeln, und dieses Gebiet umfasst Phonologie, Morphologie und Syntax, die häufig durch Phonetik, Semantik und Pragmatik ergänzt werden. Fließende Sprecher einer Sprachvariante oder eines Vortrags haben eine Reihe verinnerlichter Regeln, die ihre Grammatik ausmachen. [1] Die überwiegende Mehrheit der Informationen in der Grammatik wird - zumindest im Fall der Muttersprache - nicht durch bewusstes Lernen oder Unterrichten, sondern durch das Hören anderer Sprecher erworben. Ein Großteil dieser Arbeit wird in der frühen Kindheit geleistet; Das Erlernen einer Sprache im späteren Leben erfordert normalerweise explizitere Anweisungen. [2] Grammatik ist also die kognitive Information, die dem Sprachgebrauch zugrunde liegt. Der Begriff "Grammatik" kann auch die Regeln beschreiben, die das Sprachverhalten einer Gruppe von Sprechern bestimmen. Beispielsweise kann sich der Begriff "englische Grammatik" auf die gesamte englische Grammatik beziehen; das heißt, zu den Grammatiken aller Sprecher der Sprache, in welchem ​​Fall der Begriff eine große Variation umfasst. [3] Alternativ kann es sich nur auf das beziehen, was den Grammatiken aller oder der meisten englischen Sprecher gemeinsam ist (z. B. Subjekt-Verb-Objekt-Wortreihenfolge in einfachen deklarativen Sätzen). Es kann sich auch auf die Regeln einer relativ genau definierten Form des Englischen beziehen (z. B. Standard-Englisch für eine Region).
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>