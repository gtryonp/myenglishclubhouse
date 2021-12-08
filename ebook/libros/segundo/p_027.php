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
function cambio()	{
	if(document.getElementById("divspeech").classList.contains("spa"))	{
		document.getElementById("divspeech").classList.remove("spa")
		document.getElementById("divspeech").innerHTML=divspeechtxt;
		msg.lang = 'es';
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
	background: url(media/pet2.jpg) center center no-repeat fixed; 
	background-size: cover;
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
	<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 10px;height:98%;" >
		<div style="float:left;width:100%;overflow:hidden;font-size:42px;color:#f00;text-shadow:2px 0px 1px #0f0,4px 0px 1px #000;padding:0px 0px;" id="" class="" > Características Socioculturales de la Poblacion </div>
		<div style='float:left;text-align:justify;font-size:32px;padding:0px 10px 0px 50px;' class='fontech' id='divspeech' >
			Cada población presenta ciertos rasgos que la caracterizan y que constituyen por sí mismos los elementos básicos de un paisaje social. La descripción de la población se lleva a cabo tomando en cuenta rasgos culturales, de estructura (raza, lengua, religión) y de movimiento (nacimientos, defunciones, migraciones). La población mundial difiere en características raciales, lingüísticas y religiosas, aun cuando está conformada por una sola (homo sapiens), existiendo diferentes grupos culturales o étnicos que presentan características antropológicas propias.<br/>
			<br/><b>a) Etnia.</b><br/>
			Es el conjunto de características antropológicas que predominan en un grupo humano y se transmiten por medio de la herencia y de la memoria. Un grupo étnico comparte lengua, religión, costumbres, ideología, historia y forma de vida, aunque pueden ¿Cuáles son los factores socioeconómicos que influyen en la densidad de población? ¿Qué es densidad de población y cómo se obtiene? ¿Cuál es el país con menor densidad de población? ¿Cuáles crees tú que son las causas? ¿Cuál es el país con mayor densidad de población, del mismo cuadro? ¿Por qué crees que tiene mayor densidad de población? ¿Qué lugar ocupa México respecto a los demás países? Menciona algunas de las posibles causas de las diferencias en la densidad poblacional entre los países. PAISAJE HUMANO O SOCIAL existir ciertas diferencias al interior de éste (por ejemplo, la presencia de población protestante y católica entre los nahuas de Zongolica). Se observa además una gran diferencia en las características raciales de las poblaciones mundiales producto del mestizaje. El mestizaje es resultado de la variación racial debido a un intercambio biológico entre pueblos de diferentes etnias y del intercambio de costumbres o elementos culturales de poblaciones diferentes.<br/>
			<br/><b>b) La lengua.</b><br/>
			La lengua o idioma es el conjunto de sonidos articulados con el que el humano expresa lo que piensa o siente. Es el elemento mediante el cual el hombre y la mujer trasmiten sus costumbres y forma parte de la identidad de un pueblo. El surgimiento de los dialectos se debe a modificaciones lingüísticas de carácter regional y, si éstas continúan transformándose, se originan nuevos idiomas. Por ejemplo, el latín originó varios dialectos, los cuales con el 			tiempo dieron origen a los idiomas español, francés, italiano, portugués y rumano, debido a lo cual a estos idiomas se les conoce como lenguas romance o latinas.<br/>
			<br/><b>c) La religión.</b><br/>
			Es un sistema de creencias y dogmas acerca de la existencia del origen divino del mundo y de dioses o deidades. La religión establece normas morales que rigen la conducta individual y social de los pueblos. Al igual que el idioma, uniforma parte de la expresión cultural de los pueblos y se manifiesta como un vínculo social transmisor de la cultura y como un carácter distintivo de grupos étnicos y naciones. Las principales religiones en el mundo son las cristianas (católica, protestante y ortodoxa), el hinduismo, el islamismo, el budismo, el taoísmo y las religiones animistas.
		</div>
		<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	</div>
</body>