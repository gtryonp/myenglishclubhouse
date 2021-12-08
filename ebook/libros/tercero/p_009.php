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
		document.getElementById("divspeech").innerHTML="Ludwig van Beethoven1​ (Bonn, Arzobispado de Colonia; 16 de diciembre de 17702​-Viena, 26 de marzo de 1827) fue un compositor, director de orquesta, pianista y profesor de piano alemán. Su legado musical abarca, cronológicamente, desde el Clasicismo hasta los inicios del Romanticismo. Es considerado uno de los compositores más importantes de la historia de la música y su legado ha influido de forma decisiva en la evolución posterior de este arte. Siendo el último gran representante del clasicismo vienés (después de Christoph Willibald Gluck, Joseph Haydn y Wolfgang Amadeus Mozart), Beethoven consiguió hacer trascender la música del Romanticismo, influyendo en diversidad de obras musicales del siglo XIX. Su arte se expresó en numerosos géneros y aunque las sinfonías fueron la fuente principal de su popularidad internacional, su impacto resultó ser principalmente significativo en sus obras para piano y música de cámara. Su producción incluye los géneros pianístico (treinta y dos sonatas para piano), de cámara (incluyendo numerosas obras para conjuntos instrumentales de entre ocho y dos miembros), concertante (conciertos para piano, para violín y triple), sacra (dos misas, un oratorio), lieder, música incidental (la ópera Fidelio, un ballet, músicas para obras teatrales), y orquestal, en la que ocupan lugar preponderante Nueve sinfonías.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/gw.jpg) no-repeat center center fixed; 
	background-size: cover;
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
<div style='float:left;text-align:justify;font-size:18px;padding:0px 10px 0px 50px;font-weight:bold;letter-spacing: 2px;word-spacing: 6px;' class='fontech'>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		Ludwig van Beethoven1 (Bonn, Erzdiözese Köln; 16. Dezember 17702 - Wien, 26. März 1827) war ein deutscher Komponist, Dirigent, Pianist und Klavierlehrer. Sein musikalisches Erbe reicht chronologisch von der Klassik bis zu den Anfängen der Romantik. Er gilt als einer der wichtigsten Komponisten der Musikgeschichte und sein Erbe hat die spätere Entwicklung dieser Kunst entscheidend beeinflusst. Als letzter großer Vertreter des Wiener Klassizismus (nach Christoph Willibald Gluck, Joseph Haydn und Wolfgang Amadeus Mozart) gelang es Beethoven, die Musik der Romantik zu transzendieren und eine Vielzahl von Musikwerken des 19. Jahrhunderts zu beeinflussen. Seine Kunst wurde in zahlreichen Genres zum Ausdruck gebracht, und obwohl Symphonien die Hauptquelle seiner internationalen Popularität waren, stellte sich heraus, dass ihre Wirkung hauptsächlich in seinen Werken für Klavier- und Kammermusik von Bedeutung war. Seine Produktion umfasst die Genres Pianístico (32 Sonaten für Klavier), Chamber (einschließlich zahlreicher Werke für Instrumentalensembles mit acht bis zwei Mitgliedern), Concertante (Konzerte für Klavier, Violine und Triple), Sacra (zwei Messen, eine Oratorium), Lieder, Nebenmusik (die Oper Fidelio, ein Ballett, Musik für Theaterwerke) und Orchester, in denen neun Symphonien einen überwiegenden Platz einnehmen
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>