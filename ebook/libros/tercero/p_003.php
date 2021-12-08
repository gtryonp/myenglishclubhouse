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
		document.getElementById("divspeech").innerHTML="Un número es un objeto matemático utilizado para contar, medir y etiquetar. Los ejemplos originales son los números naturales 1, 2, 3, 4, etc. [1] Para ser manipulados, los números individuales necesitan ser representados por símbolos, llamados números; por ejemplo, '5' es un número que representa el número cinco. Como solo se puede memorizar una pequeña cantidad de símbolos, los números básicos se organizan comúnmente en un sistema de numeración, que es una forma organizada de representar cualquier número. El sistema de numeración más común es el sistema de numeración hindú-árabe, que permite representar cualquier número mediante una combinación de diez números básicos llamados dígitos. [2] [3] Además de su uso para contar y medir, los números se usan a menudo para etiquetas (como con números de teléfono), para ordenar (como con números de serie) y para códigos (como con ISBN). En el uso común, un número no se distingue claramente del número que representa. En matemáticas, la noción de número se ha extendido a lo largo de los siglos para incluir 0, [4] números negativos, [5] números racionales como números reales [6] como √2 y π, y números complejos, [7] que extiende los números reales con una raíz cuadrada de −1 (y sus combinaciones con números reales por suma y multiplicación). [5] Los cálculos con números se realizan con operaciones aritméticas, siendo las más familiares la suma, resta, multiplicación, división y exponenciación. Su estudio o uso se llama aritmética. El mismo término también puede referirse a la teoría de números, el estudio de las propiedades de los números. Además de sus usos prácticos, los números tienen importancia cultural en todo el mundo. [8] [9] Por ejemplo, en la sociedad occidental, el número 13 se considera desafortunado, y 'un millón' puede significar 'mucho'. [8] Aunque ahora se lo considera pseudociencia, la creencia en un significado místico de los números, conocida como numerología, impregnado el pensamiento antiguo y medieval. [10] La numerología influyó mucho en el desarrollo de las matemáticas griegas, estimulando la investigación de muchos problemas en la teoría de números que todavía son de interés hoy en día. [10] Durante el siglo XIX, los matemáticos comenzaron a desarrollar muchas abstracciones diferentes que comparten ciertas propiedades de los números y pueden verse como una extensión del concepto. Entre los primeros estaban los números hipercomplejos, que consisten en varias extensiones o modificaciones del complejo sistema numérico. Hoy en día, los sistemas numéricos se consideran ejemplos especiales importantes de categorías mucho más generales, como anillos y campos, y la aplicación del término 'número' es una cuestión de convención, sin importancia fundamental. [11]";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
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
	<div style='float:left;text-align:center;font-size:90px;color:#080;text-shadow:1px 1px 1px #000;' class='fontlm'>die Zahlen</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		Eine Zahl ist ein mathematisches Objekt, das zum Zählen, Messen und Beschriften verwendet wird. Die ursprünglichen Beispiele sind die natürlichen Zahlen 1, 2, 3, 4 usw. [1] Um manipuliert zu werden, müssen einzelne Zahlen durch Symbole dargestellt werden, die als Ziffern bezeichnet werden. Beispielsweise ist "5" eine Zahl, die die Zahl fünf darstellt. Da nur eine kleine Anzahl von Symbolen gespeichert werden kann, werden grundlegende Ziffern üblicherweise in einem Zahlensystem organisiert, das eine organisierte Art ist, eine beliebige Zahl darzustellen. Das gebräuchlichste Zahlensystem ist das hindu-arabische Zahlensystem, mit dem jede Zahl durch eine Kombination von zehn Grundzahlen dargestellt werden kann, die als Ziffern bezeichnet werden. [2] [3] Zusätzlich zu ihrer Verwendung beim Zählen und Messen werden Ziffern häufig für Etiketten (wie bei Telefonnummern), für Bestellungen (wie bei Seriennummern) und für Codes (wie bei ISBNs) verwendet. Im allgemeinen Sprachgebrauch wird eine Ziffer nicht klar von der Zahl unterschieden, die sie darstellt.
		In der Mathematik wurde der Begriff der Zahl im Laufe der Jahrhunderte um 0, [4] negative Zahlen, [5] rationale Zahlen wie reelle Zahlen [6] wie √2 und π und komplexe Zahlen [7] erweitert Erweitern Sie die reellen Zahlen mit einer Quadratwurzel von -1 (und ihre Kombinationen mit reellen Zahlen durch Addition und Multiplikation). [5] Berechnungen mit Zahlen werden mit arithmetischen Operationen durchgeführt, wobei Addition, Subtraktion, Multiplikation, Division und Exponentiation am bekanntesten sind. Ihr Studium oder ihre Verwendung wird als Arithmetik bezeichnet. Der gleiche Begriff kann sich auch auf die Zahlentheorie beziehen, das Studium der Eigenschaften von Zahlen.
		Neben ihrer praktischen Verwendung haben Zahlen weltweit kulturelle Bedeutung. [8] [9] In der westlichen Gesellschaft wird die Zahl 13 beispielsweise als unglücklich angesehen, und "eine Million" kann "viel" bedeuten. [8] Obwohl sie jetzt als Pseudowissenschaft angesehen wird, wird der Glaube an eine mystische Bedeutung von Zahlen, bekannt als Numerologie, durchdrungenes altes und mittelalterliches Denken. [10] Die Numerologie hat die Entwicklung der griechischen Mathematik stark beeinflusst und die Untersuchung vieler Probleme in der Zahlentheorie angeregt, die bis heute von Interesse sind. [10]
		Im 19. Jahrhundert begannen Mathematiker, viele verschiedene Abstraktionen zu entwickeln, die bestimmte Eigenschaften von Zahlen gemeinsam haben und als Erweiterung des Konzepts angesehen werden können. Zu den ersten gehörten die hyperkomplexen Zahlen, die aus verschiedenen Erweiterungen oder Modifikationen des komplexen Zahlensystems bestehen. Zahlensysteme gelten heute als wichtige Sonderbeispiele für viel allgemeinere Kategorien wie Ringe und Felder, und die Anwendung des Begriffs "Zahl" ist eine Frage der Konvention ohne grundsätzliche Bedeutung. [11]
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>