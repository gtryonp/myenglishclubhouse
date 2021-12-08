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
		document.getElementById("divspeech").innerHTML="<span class = 'cadadia'>Domingo</span>: Inglés antiguo Sunnandæg (pronunciado [ˈsunnɑndæj]), que significa 'día del sol'. Esta es una traducción de la frase latina dies Solis. El inglés, como la mayoría de los idiomas germánicos, conserva la asociación del día con el sol. Muchas otras lenguas europeas, incluidas todas las lenguas romances, han cambiado su nombre al equivalente del 'día del Señor' (basado en el latín eclesiástico dies Dominica). Tanto en la mitología germánica occidental como en la germánica septentrional, el Sol se personifica como Sunna / Sól. <br/> <span class = 'cadadia'>Lunes</span>: inglés antiguo Mōnandæg (pronunciado [ˈmoːnɑndæj]), que significa 'día de la luna'. Esto es equivalente al nombre en latín dies lunae. En la mitología germánica del norte, la Luna se personifica como Máni.<br/> <span class = 'cadadia'>Martes</span>: inglés antiguo Tīwesdæg (pronunciado [ˈtiːwezdæj]), que significa 'día de Tiw'. Tiw (Norse Týr) fue un dios de una mano asociado con combates individuales y promesas en la mitología nórdica y también atestiguó de manera prominente en el paganismo germánico más amplio. El nombre del día también está relacionado con el nombre en latín dies Martis, 'Día de Marte'.<br/> <span class = 'cadadia'>Miércoles</span>: Inglés antiguo Wōdnesdæg (pronunciado [ˈwoːdnezdæj]) que significa el día del dios germánico Woden (conocido como Óðinn entre los pueblos del norte de Alemania), y un dios prominente de los anglosajones (y otros pueblos germánicos) en Inglaterra hasta aproximadamente el siglo VII También está vagamente relacionado con la contraparte latina muere Mercurii, 'Día de Mercurio'. El islandés Miðviku, el alemán Mittwoch, el bajo alemán entre semana y el finlandés keskiviikko significan a mediados de semana.<br/> <span class = 'cadadia'>Jueves</span>: inglés antiguo Þūnresdæg (pronunciado [ˈθuːnrezdæj]), que significa 'día de los hijos'. Orunor significa trueno o su personificación, el dios nórdico conocido en inglés moderno como Thor. De manera similar, el donderdag holandés, el Donnerstag alemán ('día del trueno'), el torstai finlandés y el Torsdag escandinavo ('día del Thor'). El día de Thor corresponde al latín dies Iovis, 'día de Júpiter'.<br/> <span class = 'cadadia'>Viernes</span>: Inglés antiguo Frīgedæg (pronunciado [ˈfriːjedæj]), que significa el día de la diosa anglosajona Fríge. El nombre nórdico para el planeta Venus era Friggjarstjarna, 'la estrella de Frigg'. Se basa en el latín dies Veneris, 'Día de Venus'.<br/> <span class = 'cadadia'>Sábado</span>: llamado así por el dios romano Saturno asociado con el Titán Crono, padre de Zeus y muchos olímpicos. Su versión original anglosajona fue Sæturnesdæg (pronunciado [ˈsæturnezdæj]). En latín, fue dies Saturni, 'Día de Saturno'. El escandinavo Lørdag / Lördag se desvía significativamente ya que no hace referencia ni al nórdico ni al panteón romano; deriva del antiguo nórdico laugardagr, literalmente 'día de lavado'. El alemán Sonnabend (utilizado principalmente en el norte y este de Alemania) y las palabras de bajo alemán Sünnavend significan 'Domingo Eva', la palabra alemana Samstag (utilizada principalmente en el sur y oeste de Alemania) deriva del nombre de Shabat.";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/nighti.jpg) no-repeat center center fixed; 
	background-size: cover;
	padding:1% 0%;
	margin:0px auto;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:play;
	src: url(media/play.otf);
}
.fontplay {
	font-family: play;
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
.cadadia	{
	color:#a00;
	font-weight:bold;
	text-shadow:1px 1px 1px #cff,2px 2px 1px #000;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style='float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;color:#8ac;' class='fontech'>
	<div style='float:left;text-align:center;font-size:52px;font-weight:bold;color:#008;text-shadow:-1px -1px 1px #cff,1px 1px 1px #cff,2px 2px 1px #000;' class='fontplay'>The days of the Week:</div>
	<!--div style="float:left;width:100%;overflow:hidden;" id="divspeech" ondblclick="cambio()"-->
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		<span class='cadadia'>Sunday</span>: Old English Sunnandæg (pronounced [ˈsunnɑndæj]), meaning "sun's day". This is a translation of the Latin phrase dies Solis. English, like most of the Germanic languages, preserves the day's association with the sun. Many other European languages, including all of the Romance languages, have changed its name to the equivalent of "the Lord's day" (based on Ecclesiastical Latin dies Dominica). In both West Germanic and North Germanic mythology, the Sun is personified as Sunna/Sól.<br/>
		<span class='cadadia'>Monday</span>: Old English Mōnandæg (pronounced [ˈmoːnɑndæj]), meaning "Moon's day". This is equivalent to the Latin name dies lunae. In North Germanic mythology, the Moon is personified as Máni.<br/>
		<span class='cadadia'>Tuesday</span>: Old English Tīwesdæg (pronounced [ˈtiːwezdæj]), meaning "Tiw's day". Tiw (Norse Týr) was a one-handed god associated with single combat and pledges in Norse mythology and also attested prominently in wider Germanic paganism. The name of the day is also related to the Latin name dies Martis, "Day of Mars".<br/>
		<span class='cadadia'>Wednesday</span>: Old English Wōdnesdæg (pronounced [ˈwoːdnezdæj]) meaning the day of the Germanic god Woden (known as Óðinn among the North Germanic peoples), and a prominent god of the Anglo-Saxons (and other Germanic peoples) in England until about the seventh century. It is also vaguely related to the Latin counterpart dies Mercurii, "Day of Mercury". The Icelandic Miðviku, German Mittwoch, Low German Middeweek and Finnish keskiviikko all mean mid-week.<br/>
		<span class='cadadia'>Thursday</span>: Old English Þūnresdæg (pronounced [ˈθuːnrezdæj]), meaning 'Þunor's day'. Þunor means thunder or its personification, the Norse god known in Modern English as Thor. Similarly Dutch donderdag, German Donnerstag ('thunder's day'), Finnish torstai, and Scandinavian Torsdag ('Thor's day'). Thor's day corresponds to Latin dies Iovis, "day of Jupiter".<br/>
		<span class='cadadia'>Friday</span>: Old English Frīgedæg (pronounced [ˈfriːjedæj]), meaning the day of the Anglo-Saxon goddess Fríge. The Norse name for the planet Venus was Friggjarstjarna, 'Frigg's star'. It is based on the Latin dies Veneris, "Day of Venus".<br/>
		<span class='cadadia'>Saturday</span>: named after the Roman god Saturn associated with the Titan Cronus, father of Zeus and many Olympians. Its original Anglo-Saxon rendering was Sæturnesdæg (pronounced [ˈsæturnezdæj]). In Latin, it was dies Saturni, "Day of Saturn". The Scandinavian Lørdag/Lördag deviates significantly as it has no reference to either the Norse or the Roman pantheon; it derives from old Norse laugardagr, literally "washing-day". The German Sonnabend (mainly used in northern and eastern Germany) and the Low German words Sünnavend mean "Sunday Eve", the German word Samstag (mainly used in southern and western Germany) derives from the name for Shabbat.	<br/>
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>