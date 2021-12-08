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
		document.getElementById("divspeech").innerHTML="El deporte incluye todas las formas de actividad física competitiva o juegos que, [1] mediante la participación informal u organizada, al menos en parte tienen como objetivo utilizar, mantener o mejorar la capacidad y las habilidades físicas al tiempo que brindan diversión a los participantes y, en algunos casos, entretenimiento a los espectadores. . [2] Los deportes pueden traer resultados positivos a la salud física. Existen cientos de deportes, desde aquellos entre concursantes individuales, hasta aquellos con cientos de participantes simultáneos, ya sea en equipos o compitiendo como individuos. En ciertos deportes como las carreras, muchos concursantes pueden competir, simultánea o consecutivamente, con un ganador; en otros, la contienda (un partido) es entre dos bandos, cada uno intentando superar al otro. Algunos deportes permiten un 'empate' o 'empate', en el que no hay un único ganador; otros proporcionan métodos de desempate para asegurar un ganador y un perdedor. Se pueden organizar varios concursos en un torneo que produzca un campeón. Muchas ligas deportivas se convierten en campeones anuales organizando juegos en una temporada deportiva regular, seguida en algunos casos por los playoffs.";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/sports.jpg') center center no-repeat; 
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
	font-family:sports;
	src: url(media/sports.ttf);
}
.fontsports {
	font-family: sports;
}

</style>
<body>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:90px;padding:0px 10px 50px 10px;color:#ccc;text-shadow:1px 1px 1px #000;" class="fontsports"  >SPORTS</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:30px;padding:0px 50px;text-align:justify;line-height:120%;color:#0ef;text-shadow:-1px -1px 1px #00a,1px 1px 1px #00a,2px 1px 1px #00a,3px 2px 1px #00a;" id='divspeech' class="fontech" >
Sport umfasst alle Formen von körperlicher Aktivität oder Spielen, die [1] durch gelegentliche oder organisierte Teilnahme zumindest teilweise darauf abzielen, körperliche Fähigkeiten und Fertigkeiten zu nutzen, zu erhalten oder zu verbessern und gleichzeitig den Teilnehmern Freude zu bereiten und in einigen Fällen den Zuschauern Unterhaltung zu bieten [2] Sport kann positive Ergebnisse für die körperliche Gesundheit bringen. Es gibt Hunderte von Sportarten, von denen zwischen einzelnen Teilnehmern bis zu solchen mit Hunderten von gleichzeitigen Teilnehmern, entweder in Teams oder als Einzelpersonen. In bestimmten Sportarten wie dem Rennsport können viele Teilnehmer gleichzeitig oder nacheinander mit einem Sieger antreten. In anderen Fällen findet der Wettbewerb (ein Match) zwischen zwei Seiten statt, die jeweils versuchen, die anderen zu übertreffen. Einige Sportarten erlauben ein "Unentschieden" oder "Unentschieden", bei dem es keinen einzigen Gewinner gibt. andere bieten Methoden, um einen Gewinner und einen Verlierer zu sichern. Eine Anzahl von Wettbewerben kann in einem Turnier organisiert werden, das einen Champion hervorbringt. Viele Sportligen machen einen jährlichen Champion, indem sie Spiele in einer regulären Sportsaison veranstalten, gefolgt von Playoffs.
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>

