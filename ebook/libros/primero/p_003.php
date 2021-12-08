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
	<div style='float:left;text-align:center;font-size:90px;color:#080;text-shadow:1px 1px 1px #000;' class='fontlm'>The Numbers</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		A number is a mathematical object used to count, measure, and label. The original examples are the natural numbers 1, 2, 3, 4, and so forth.[1] For being manipulated, individual numbers need to be represented by symbols, called numerals; for example, "5" is a numeral that represents the number five. As only a small number of symbols can be memorized, basic numerals are commonly organized in a numeral system, which is an organized way to represent any number. The most common numeral system is the Hindu–Arabic numeral system, which allows representing any number by a combination of ten basic numerals called digits.[2][3] In addition to their use in counting and measuring, numerals are often used for labels (as with telephone numbers), for ordering (as with serial numbers), and for codes (as with ISBNs). In common usage, a numeral is not clearly distinguished from the number that it represents.
		In mathematics, the notion of number has been extended over the centuries to include 0,[4] negative numbers,[5] rational numbers such as real numbers[6] such as √2 and π, and complex numbers,[7] which extend the real numbers with a square root of −1 (and its combinations with real numbers by addition and multiplication).[5] Calculations with numbers are done with arithmetical operations, the most familiar being addition, subtraction, multiplication, division, and exponentiation. Their study or usage is called arithmetic. The same term may also refer to number theory, the study of the properties of numbers.
		Besides their practical uses, numbers have cultural significance throughout the world.[8][9] For example, in Western society, the number 13 is regarded as unlucky, and "a million" may signify "a lot."[8] Though it is now regarded as pseudoscience, belief in a mystical significance of numbers, known as numerology, permeated ancient and medieval thought.[10] Numerology heavily influenced the development of Greek mathematics, stimulating the investigation of many problems in number theory which are still of interest today.[10]
		During the 19th century, mathematicians began to develop many different abstractions which share certain properties of numbers and may be seen as extending the concept. Among the first were the hypercomplex numbers, which consist of various extensions or modifications of the complex number system. Today, number systems are considered important special examples of much more general categories such as rings and fields, and the application of the term "number" is a matter of convention, without fundamental significance.[11]
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>