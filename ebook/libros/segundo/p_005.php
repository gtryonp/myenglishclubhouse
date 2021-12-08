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
</script>
<style>
body	{
	background:url(media/mm.jpg) no-repeat center center fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
.playful span {
  position: relative;
  color: #ffa;
	letter-spacing:-30px;
  animation: scatter 8.75s infinite;
}
.playful span:nth-child(2n) {color: #000;animation-delay: 0.3s;}
.playful span:nth-child(3n) {animation-delay: 0.6s;}
.playful span:nth-child(4n) {animation-delay: 0.9s;}
@keyframes scatter {
  0% {color:#800;}
  20% {color:#088;}
  40% {color:#008;}
  60% {color:#880;top: -5px;}
  80% {color:#888;}
  100% {color:#080;}
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	

table	{font:13px verdana;width:100%;border:0px solid;table-layout:fixed;}

th	{border:1px solid #888;overflow:hidden;color:#fff;background:#888;}
td	{border:1px solid #fff;overflow:hidden;color:#000;background:#fff;text-align:center;}

</style>
<body>
	<div style="float:left;text-align:justify;font-size:21px;padding:20px 10px 30px 50px;font-weight:bold;height:calc(100% - 60px);width:calc(100% - 60px);" class='fontech'>
		<div style="float:left;width:100%;overflow:hidden;font:bold 60px verdana;text-shadow:2px 2px 2px #000;" id="" class="playful" >
			<span>G</span>
			<span>A</span>
			<span>L</span>
			<span>A</span>
			<span>X</span>
			<span>I</span>
			<span>A</span>
			<span>&nbsp;</span>
			<span>/</span>
			<span>&nbsp;</span>
			<span>V</span>
			<span>I</span>
			<span>A</span>
			<span>&nbsp;</span>
			<span>L</span>
			<span>A</span>
			<span>C</span>
			<span>T</span>
			<span>E</span>
			<span>A</span>
		</div>
		<div style="float:left;text-align:justify;font-size:24px;padding:0px 50px;color:#fff;" class="fontech" id="divspeech" >
			Nuestro Universo está compuesto por un número muy grande galaxias y cada una de ellas está compuesta por planetas, millones de asteroides, billones de cometas, gas y polvo cósmico. Una de estas galaxias es la Vía Láctea en la cual se encuentra nuestro Sistema Solar; éste se encuentra formado por el Sol, nueve planetas, más de 60 lunas, varios miles de asteroides y cometas. La tierra es uno de estos nueve planetas. A través de muchos años de investigación y utilizando técnicas  y  nuevos  instrumentos  de  medición  y  observación,  tales  como  los  viajes  espaciales interestelares, se ha hecho posible actualizar las teorías acerca del origen del Sistema Solar. 
			
<div style="float:left;width:100%;overflow:hidden;height:20px;" id="" class="" ></div>
		
<table id='tabla' >
	<tr><th>Planetas</th><th>Distancia</th><th>Diametro</th><th>temperatura</th><th>traslación</th><th>rotación</th><th>Composicion atmósfera</th></tr>
	<tr><td>Mercurio</td><td>58</td><td>4,878</td><td>327/-183</td><td>88 días</td><td>59 días</td><td>No tiene</td></tr>
	<tr><td>Venus</td><td>108</td><td>12,104</td><td>482 sup.</td><td>224 días</td><td>243 días</td><td>Dióxido de carbono (96%) y nitrógeno(3.5%)</td></tr>
	<tr><td>Tierra</td><td>150</td><td>12,756</td><td>15 promedio</td><td>365 días</td><td>23 horas</td><td>Nitrógeno (78%) oxígeno (21%) y argón (0.9%)</td></tr>
	<tr><td>Marte</td><td>228</td><td>6,794</td><td>-23/70</td><td>1 año</td><td>24 horas</td><td>Dióxido de carbono(95%), nitrógeno(2.7%) y argón(1.6%)</td></tr>
	<tr><td>Júpiter</td><td>778</td><td>142,800</td><td>-150 sup.</td><td> 11 años</td><td>9 horas</td><td>Hidrógeno (90%) helio (10%)en el Ecuador</td></tr>
	<tr><td>Saturno</td><td>1,427</td><td>120,000</td><td>-185 sup.</td><td> 29 años</td><td>10 horas</td><td>Hidrógeno (94%) y helio (6%)en el Ecuador</td></tr>
	<tr><td>Urano</td><td>2,870</td><td>51,800</td><td>-210 sup.</td><td> 84 años</td><td>17 horas</td><td>Hidrógeno (85%) helio (122%) ymetano (3%)</td></tr>
	<tr><td>Neptuno</td><td>4,500</td><td>49,500</td><td>-22 sup.</td><td> 164 años</td><td>16 horas</td><td>Hidrógeno helio (13%) y meta-no (2%)</td></tr>
	<tr><td>Plutón</td><td>5,900</td><td>2,400</td><td>-238 sup.</td><td> 247 años</td><td>6 días</td><td>Nitrógeno (78%) y metano (22%)</td></tr>
</table>






			
			
		</div>
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</body>