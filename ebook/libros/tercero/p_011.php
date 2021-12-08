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
		document.getElementById("divspeech").innerHTML="Alemania, oficialmente República Federal de Alemania, es uno de los veintisiete estados soberanos que forman la Unión Europea. Constituido en Estado social y democrático de derecho, su forma de gobierno es la república parlamentaria y federal. Su capital es Berlín. Está formado por dieciséis estados federados y limita al norte con el mar del Norte, Dinamarca y el mar Báltico; al este con Polonia y la República Checa; al sur con Austria y Suiza; y al oeste con Francia, Luxemburgo, Bélgica y los Países Bajos. La ciudad de Büsingen am Hochrhein, enclavada en Suiza, también forma parte de Alemania. El territorio de Alemania abarca 357.022 km² de extensión4​ y posee un clima templado. Con casi 83 millones de habitantes, es el país más poblado entre los estados miembros de la Unión Europea, y es el hogar del tercer mayor grupo de emigrantes internacionales. Después de Estados Unidos, Alemania es el segundo destino de las migraciones más popular en el mundo.8​  Las palabras alemán y Alemania provienen del latín y eran utilizadas en la antigüedad por los romanos para denominar a los alamanes (no es lo mismo que alemanes), el pueblo germánico más cercano al territorio del Imperio romano. De ahí fue usada para nombrar al país entero.9​ Además de alemán, está también extendido el uso del gentilicio germano, derivado del nombre con que los romanos se referían a las tribus ni romanas ni celtas de la zona central de Europa, cuyo territorio llamaban Germania.9​ Desde el siglo X, los territorios alemanes formaron una parte central del Sacro Imperio Romano Germánico que duró hasta 1806. Durante el siglo XVI, las regiones del norte del país se convirtieron en el centro de la Reforma Protestante.  Como un moderno Estado nación, el país fue unificado en tiempos de la guerra franco-prusiana, en 1871. Tras la Segunda Guerra Mundial, cuando la Alemania nazi fue derrotada por los aliados, Alemania fue dividida en dos Estados separados a lo largo de las líneas de ocupación aliadas en 1949; los Estados resultantes fueron la República Federal de Alemania y la República Democrática Alemana, que se reunificaron en 1990. Fue miembro fundador de la Comunidad Europea (1957), que se convirtió en la Unión Europea en 1993. Es parte de la zona Schengen y adoptó la moneda común europea, el euro, en 1999.  Alemania es miembro de la Organización de las Naciones Unidas, la OTAN, el G7, las naciones G4, y firmó el Protocolo de Kioto. Es la cuarta mayor economía mundial en cuanto al PIB nominal, la primera de Europa, y fue el mayor exportador de mercancías del mundo en 2007. En términos absolutos, asigna el tercer mayor presupuesto anual de la ayuda al desarrollo en el mundo,10​ mientras que sus gastos militares ocuparon el noveno lugar mundial en 2012.11​ El país ha desarrollado un alto nivel de vida y establecido un sistema completo de seguridad social. Tiene una posición clave en los asuntos europeos y mantiene una estrecha relación con varias asociaciones a nivel mundial. Limita al norte con el mar del Norte, Dinamarca y el mar Báltico; al este con Polonia y la República Checa; al sur con Austria al suroeste con Suiza, y al oeste con Francia, Luxemburgo, Bélgica y al noroeste con Países Bajos. Alemania contiene una vasta diversidad de paisajes. Montañas, bosques, colinas, llanuras, lagos, ríos y costas forman este gran país.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/usa.jpg) no-repeat center center #9DBBD8 fixed; 
	background-size: contain;
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
	<div style="float:left;overflow:hidden;font-size:60px;position:relative;height:120px;width:70%;text-shadow:1px 1px 1px #000;font-weight:bold;">
		<!--div style="float:left;position:absolute;left:000px;top:00px;color:#00f;"><img src="media/usa.gif"></div-->
		<div style="float:left;position:absolute;left:000px;top:20px;color:#000;">D</div>
		<div style="float:left;position:absolute;left:040px;top:20px;color:#f00;">E</div>
		<div style="float:left;position:absolute;left:080px;top:20px;color:#ff0;">U</div>
		<div style="float:left;position:absolute;left:120px;top:20px;color:#000;">T</div>
		<div style="float:left;position:absolute;left:160px;top:20px;color:#f00;">S</div>
		<div style="float:left;position:absolute;left:200px;top:20px;color:#ff0;">C</div>
		<div style="float:left;position:absolute;left:240px;top:20px;color:#000;">H</div>
		<div style="float:left;position:absolute;left:280px;top:20px;color:#f00;">L</div>
		<div style="float:left;position:absolute;left:320px;top:20px;color:#ff0;">A</div>
		<div style="float:left;position:absolute;left:360px;top:20px;color:#000;">N</div>
		<div style="float:left;position:absolute;left:400px;top:20px;color:#f00;">D</div>
	</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		Deutschland, offiziell die Bundesrepublik Deutschland, ist einer der 27 souveränen Staaten der Europäischen Union. In einem sozialen und demokratischen Rechtsstaat konstituiert, ist seine Regierungsform die parlamentarische und föderale Republik. Die Hauptstadt ist Berlin. Es besteht aus 16 Bundesländern und grenzt im Norden an die Nordsee, Dänemark und die Ostsee. im Osten mit Polen und der Tschechischen Republik; im Süden mit Österreich und der Schweiz; und im Westen mit Frankreich, Luxemburg, Belgien und den Niederlanden. Die Stadt Büsingen am Hochrhein in der Schweiz gehört ebenfalls zu Deutschland. Das Gebiet Deutschlands umfasst eine Fläche von 357.022 km²4 und ein gemäßigtes Klima. Mit fast 83 Millionen Einwohnern ist es das bevölkerungsreichste Land unter den Mitgliedstaaten der Europäischen Union und beherbergt die drittgrößte Gruppe internationaler Migranten. Deutschland ist nach den Vereinigten Staaten das zweitbeliebteste Migrationsziel der Welt.8 Die Wörter Deutsch und Deutschland stammen aus dem Lateinischen und wurden in der Antike von den Römern verwendet, um sich auf die Alemannen zu beziehen (nicht dasselbe wie die Deutschen ), die dem Gebiet des Römischen Reiches am nächsten gelegene germanische Stadt. Daher wurde es verwendet, um das gesamte Land zu benennen.9 Neben Deutsch ist auch die Verwendung des germanischen Gentilicio weit verbreitet, abgeleitet von dem Namen, mit dem sich die Römer auf die Stämme bezogen, die weder römisch noch keltisch in Mitteleuropa sind und deren Territorium Sie nannten sie Germania.9 Ab dem 10. Jahrhundert bildeten die deutschen Gebiete einen zentralen Teil des Heiligen Römischen Reiches, der bis 1806 andauerte. Im 16. Jahrhundert wurden die nördlichen Regionen des Landes zum Zentrum der protestantischen Reformation. Als moderner Nationalstaat wurde das Land zur Zeit des Deutsch-Französischen Krieges 1871 vereinigt Im Zweiten Weltkrieg, als Nazideutschland von den Alliierten besiegt wurde, wurde Deutschland 1949 entlang der alliierten Besatzungslinien in zwei getrennte Staaten aufgeteilt. Die daraus resultierenden Staaten waren die Bundesrepublik Deutschland und die Deutsche Demokratische Republik, die 1990 wiedervereinigt wurden. Sie war Gründungsmitglied der Europäischen Gemeinschaft (1957), die 1993 zur Europäischen Union wurde. Sie ist Teil der Schengen-Zone und wurde angenommen Die gemeinsame europäische Währung, der Euro, war 1999. Deutschland ist Mitglied der Vereinten Nationen, der NATO, der G7 und der G4 und hat das Kyoto-Protokoll unterzeichnet. Es ist die viertgrößte Weltwirtschaft gemessen am nominalen BIP, die erste in Europa, und war 2007 der weltweit größte Warenexporteur. In absoluten Zahlen weist es das drittgrößte Jahresbudget für Entwicklungshilfe der Welt zu, 10 Die Militärausgaben belegten 2012 den neunten Platz weltweit.11 Das Land hat einen hohen Lebensstandard entwickelt und ein umfassendes System der sozialen Sicherheit eingerichtet. Es hat eine Schlüsselposition in europäischen Angelegenheiten und unterhält enge Beziehungen zu verschiedenen Verbänden weltweit. Es grenzt im Norden an die Nordsee, Dänemark und die Ostsee. im Osten mit Polen und der Tschechischen Republik; im Süden mit Österreich im Südwesten mit der Schweiz und im Westen mit Frankreich, Luxemburg, Belgien und im Nordwesten mit den Niederlanden. Deutschland enthält eine Vielzahl von Landschaften. Berge, Wälder, Hügel, Ebenen, Seen, Flüsse und Küsten bilden dieses großartige Land.
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>