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
	background:url(media/grammar.jpg) no-repeat center center fixed; 
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
	font-family:sc;
	src: url(media/sc.ttf);
}
.fontsc {
	font-family: sc;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style="float:left;text-align:justify;font-size:19px;padding:0px 10px 0px 70px;height:98%;" class='fontech'>
	<div style="float:left;width:100%;overflow:hidden;font-size:80px;" id="" class="fontsc" >Recursos Naturales</div>
	<div style='float:left;text-align:justify;font-size:24px;padding:0px 50px;color:#00a;text-shadow:-1px 0px 1px #000,2px 0px 1px #aff;' class='fontech' id='divspeech'  >
		El hombre ha basado su sobrevivencia en el aprovechamiento de los recursos que le ofrece la naturaleza. Somos una más de las especies que habita la biosfera pero que, a diferencia de todas las demás (se calculan al rededor de 30 millones), estamos dotados de un cerebro que nos permite tomar decisiones de manera consciente y organizarnos de forma compleja con nuestros semejantes, mediante el uso de la memoria y el lenguaje. Con estos medios, nuestra especie ha logrado a lo largo de los últimos 10,000 años desarrollar un sofisticado aprovechamiento de los recursos que nos ofrece la naturaleza, con el fin de satisfacer nuestras necesidades vitales de alimento, cobijo, salud, energía y transporte. No todo lo que existe en la naturaleza o en la biosfera ha sido utilizado por el hombre para satisfacer sus necesidades. El ser humano ha decidido, mediante un escrupuloso conocimiento del medio, cuáles son aquellos elementos que le ofrecen sustento en función de sus necesidades apremiantes. A estos elementos los denominamos recursos, sin embargo, no todo lo que hoy conocemos como un recurso ha sido reconocido de la misma manera en el pasado. Un caso ejemplar es la energía nuclear (recurso energético), y no todos los recursos que se utilizaban para satisfacer las necesidades básicas de sobrevivencia de sociedades anteriores a la nuestra siguen siendo un sustento básico para nuestra sobrevivencia, como es el caso de la caza. Hoy, la caza no es un recurso primordial para nuestras sociedades, aunque existen todavía algunos grupos que dependen de ésta.<br/>
		
Clasificación de los recursos
Para comprender mejor la variedad de recursos con los que contamos, su origen, características
y principales usos, se ha propuesto la siguiente clasificación:
Recursos renovables. Se reproducen de manera natural y en periodos cortos como el agua, el
aire, la vegetación y la fauna. Sin embargo, su explotación y aprovechamiento irracional puede
conducir a su agotamiento (por ejemplo, el agua dulce) o extinción (los organismos vivos).
Recursos no renovables. Se encuentran en una cantidad limitada y se producen o regeneran a lo
largo de millones de años. Son finitos o tardan mucho tiempo –en la escala del hombre– en formarse. Los suelos, el petróleo, el carbón y los minerales, son algunos de los más importantes.
Recursos permanentes. Su finitud rebasa la escala del hombre. Se originaron hace cientos de
millones de años, y aunque tienen ciclos de permanencia en la escala geológica pueden ser modificados por el hombre debido a su mal aprovechamiento y, por lo tanto, su calidad varía en
función de su uso. La energía solar, las mareas y los vientos son algunos de estos recursos.
Otra manera de clasificar los recursos es reconociendo su importancia estratégica para el hombre, su carácter fluido y su temporalidad. A cada uno de estos conjuntos de recursos se les
denomina: recursos estratégicos, de flujo y esporádicos.
Recursos estratégicos o energéticos. Es el conjunto de recursos energéticos que hoy se consideran básicos para la sociedad planetaria en función del desarrollo tecnológico. Éstos son la
electricidad, el petróleo, el gas y los minerales.
Recursos de flujo. Su disponibilidad no se verá afectada en el corto y mediano plazo, aunque su
calidad podría verse disminuida por el mal aprovechamiento y la sobreexplotación. La energía
solar, el viento y el agua son algunos de estos recursos. El caso del agua resulta significativo.		
Solamente el 3 % del agua que se distribuye en la biosfera es dulce y se encuentra disponible,
pero sólo el 0.003 % de ésta se puede utilizar para consumo humano, y no siempre cuenta con
la calidad necesaria.
Recursos esporádicos. Mantienen un ciclo corto para su aprovechamiento, pues requieren procesos naturales de transformación. Se pueden clasificar como recursos perecederos y limitados.
Un ejemplo de este tipo de recursos es el guano o excremento de ciertas aves que se deposita
en cantidades importantes en áreas en donde éstas habitan, sobre todo en las costas o en islas.
El guano es utilizado para la fabricación de fertilizantes para el campo, pues de éste se obtienen
fosfatos, elementos esenciales para la producción de agroquímicos.
Los recursos no solamente se valoran por sus productos derivados, sino también por sus funciones en la naturaleza. Un ejemplo es la fertilidad de los suelos, la fuerza de las mareas y los
vientos, y los aportes que ofrecen los bosques como fijadores de carbono, proveedores de agua
y generadores de oxígeno. El siguiente esquema sintetiza la clasificación de los recursos naturales
		
		
	</div>
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</div>
</body>