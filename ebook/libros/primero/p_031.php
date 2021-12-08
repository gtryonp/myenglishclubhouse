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
	Sport includes all forms of competitive physical activity or games which,[1] through casual or organized participation, at least in part aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators.[2] Sports can bring positive results to one's physical health. Hundreds of sports exist, from those between single contestants, through to those with hundreds of simultaneous participants, either in teams or competing as individuals. In certain sports such as racing, many contestants may compete, simultaneously or consecutively, with one winner; in others, the contest (a match) is between two sides, each attempting to exceed the other. Some sports allow a "tie" or "draw", in which there is no single winner; others provide tie-breaking methods to ensure one winner and one loser. A number of contests may be arranged in a tournament producing a champion. Many sports leagues make an annual champion by arranging games in a regular sports season, followed in some cases by playoffs.
</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>

