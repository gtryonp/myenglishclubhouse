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
	background:url(media/w.jpg) center center fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
font-family: ech;
}

.desierto	{
	background: -webkit-linear-gradient(135deg, #000, #000,#f00, #000,#000);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;		
	atext-shadow:1px 1px 1px #000;
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
	aposition: absolute;
	afont-size: 18px;
	atext-align: center;
	atext-decoration: none;
	animation:spin 1.5s linear infinite;
	animation-direction: alternate-reverse;
	aleft:20px;
}
.playful span:nth-child(1n) {
  animation-delay: 0.3s;
}
.playful span:nth-child(2n) {
  animation-delay: 2.1s;
}
.playful span:nth-child(3n) {
  animation-delay: 0.5s;
}

.playful span:nth-child(4n) {
animation-delay: 0.1s;
}
.playful span:nth-child(5n) {
  animation-delay: 1s;
}
.playful span:nth-child(6n) {
  animation-delay: 0.7s;
}
.playful span:nth-child(7n) {
  animation-delay: 0.2s;
}
.playful span:nth-child(8n) {
  animation-delay: 1s;
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
<div style="float:left;text-align:justify;padding:0px 10px 0px 20px;height:98%;" class='fontech'>
		<div style="float:left;width:100%;overflow:hidden;font-size:90px;color:#fff;text-shadow:1px 1px 10px #000;color:#fff;letter-spacing:-16px;margin:-25px 0px;padding:0px 0px 20px 0px;" id="" class="fonttags playful">
			<span>D</span>
			<span>e</span>
			<span>s</span>
			<span>e</span>
			<span>r</span>
			<span>t</span>
			<span>i</span>
			<span>f</span>
			<span>i</span>
			<span>c</span>
			<span>a</span>
			<span>c</span>
			<span>i</span>
			<span>ó</span>
			<span>n</span>
			<span>y</span>
			<span>d</span>
			<span>e</span>
			<span>g</span>
			<span>r</span>
			<span>a</span>
			<span>d</span>
			<span>a</span>
			<span>c</span>
			<span>i</span>
			<span>ó</span>
			<span>n</span>
		</div>
	<div style='float:left;text-align:justify;font-size:32px;padding:0px 50px;font-weight:bold;color:#900;line-height:28px;' class='fontech desierto' id='divspeech' >
La desertificación se define como el proceso de degradación del suelo que afecta a zonas áridas, semiáridas y subhúmedas, causado por cambios climáticos y antrópicos, entre otros. Este
proceso provoca la reducción del potencial productivo de los recursos y, por lo tanto, la disminución de la calidad de vida de la población que vive en estas regiones. En general, los procesos
de desertificación se encuentran siempre ligados a las actividades humanas en esas regiones. La
vulnerabilidad a la desertificación depende del clima, el relieve, las condiciones de los suelos y
la vegetación, así como del uso de los recursos naturales. Entre las actividades que provocan la
desertificación, se encuentran la deforestación, el deficiente manejo agrícola y el sobrepastoreo. Dichas actividades provocan el deterioro del suelo y la destrucción de la cubierta vegetal 
Algunos de los procesos que contribuyen al cambio climático actual son:
−	 El incremento en 25 % de los niveles de gases con efecto invernadero debido a la combustión fósil (petróleo, carbón y gas natural) a partir de la segunda mitad del siglo xx.
−	 El incremento de la concentración media de bióxido de carbono en 75 %, en la atmósfera desde 1750 hasta la actualidad.
−	 El metano (CH4
) representa actualmente 9 % del total de las emisiones de gas producto
de la combustión y transporte de combustibles fósiles, la descomposición de desechos
orgánicos en basureros y la ganadería. Los niveles de metano se han duplicado en el
último siglo.
−	 El óxido nitroso (N2
O) representa 5 % del total de las emisiones de gases con efecto
invernadero. Estas emisiones son producidas por las actividades industriales y agrícolas
y han tenido un incremento de 89 % desde la era preindustrial a la fecha.
−	 Existen gases cuyo origen se debe exclusivamente a procesos industriales ya que no existen en condiciones naturales, tales como los clorofluorocarburos (CFC-11, CFC-12), los
hidrofluorocarburos (HFCs), los perfluorocarburos (PFCs) y los sulfuros hexafluoridos
(SF6), los cuales presentan un elevado efecto invernadero.
−	 Un gramo de fluorocarburos produce un efecto invernadero hasta 10,000 veces mayor
que un gramo de CO2
, aunque éste último contribuye con 53 % al calentamiento global,
debido a su elevada presencia en la atmósfera.

	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	 
</div>
</body>