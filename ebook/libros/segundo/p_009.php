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
	background:url(media/gw.jpg) center center no-repeat fixed;  
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
.colortitulo	{
	background: -webkit-linear-gradient(45deg, #09009f, #00ff95, #09009f);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;	
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style='float:left;text-align:justify;font-size:18px;padding:0px 10px 0px 50px;font-weight:bold;letter-spacing: 2px;word-spacing: 6px;' class=''>
	<div style="float:left;width:100%;overflow:hidden;font-size:50px;font-family:verdana;letter-spacing:-5px;" id="" class="colortitulo" >Relieve continental y submarino</div>
	<div style='float:left;text-align:justify;font-size:24px;padding:0px 50px;line-height:23px;' class='fontech' id='divspeech'>
		El interior de la Tierra no está constituido sólo por rocas sólidas, sino que está conformado por capas de diferentes densidades y composición, lo que origina el movimiento de la última capa, la corteza terrestre. Dicho movimiento provocó que la corteza terrestre se fragmentara en placas tectónicas. Estas placas, en cuyos límites se localizan las cadenas montañosas y los volcanes, al moverse originan los sismos y terremotos. De esta manera, los procesos que se llevan a cabo en el interior de la Tierra afectan de manera directa la vida en su superficie.<br/>
		<div style="float:left;width:calc(100% - 4px);overflow:hidden;background:rgba(204,210,222,1);padding:5px;border:2px solid;font:14px verdana;" id="" class="" >Placas tectonicas en el mundo:	Placa Africana, Placa Antártica, Placa Arábiga, Placa Australiana, Placa del Caribe, Placa Escocesa, Placa Euroasiática, Placa Filipina, Placa Indoaustraliana, Placa Juan de Fuca, Placa de Nazca, Placa del Pacífico, Placa Norteamericana, Placa Sudamericana		<br/></div>
		<div style="float:left;width:100%;overflow:hidden;text-shadow:1px 0px 1px #000;padding:10px 0px;" id="" class="" >PRINCIPALES TIPOS DE RELIEVE</div>
		<div style="float:left;width:100%;overflow:hidden;text-shadow:1px 0px 1px #000;" id="" class="" >Montañas</div> 
		<img src="media/montana.jpg" style="float:right;margin:5px;">
		Se clasifican en: colinas (elevaciones de poca altura que con frecuencia se encuentran en grupos), montañas medias (elevaciones de hasta 1,500 m y que a veces constituyen bloques montañosos de poca altura llamados macizos) y altas montañas (tienen más de 1,500 m y se agrupan en cordilleras y sierras).<br/>
		<div style="float:left;width:100%;overflow:hidden;text-shadow:1px 0px 1px #000;" id="" class="" >Mesetas</div> 
		<img src="media/meseta.jpg" style="float:right;margin:5px;">
		Son regiones planas y altas del relieve terrestre que se encuentran a una altitud mayor a los 500 m.s.n.m. Por esta razón se les llama también altiplanicies. Un ejemplo en nuestro país es el altiplano central que recorre el centro de México.<br/>
		<div style="float:left;width:100%;overflow:hidden;text-shadow:1px 0px 1px #000;" id="" class="" >Llanuras</div> 
		<img src="media/llanura.jpg" style="float:right;margin:5px;">
		Son extensiones de tierras planas que se ubican a bajas altitudes, menores de 500 m.s.n.m. Las llanuras se clasifican por su origen en: aluviales (formadas por los depósitos de los ríos), de sedimentación marina (éstas fueron fondos de antiguos mares que se elevaron y están cubiertos por sedimentos) y penillanuras (éstas fueron montañas alguna vez, pero se erosionaron a tal grado que se nivelaron y formaron una llanura).<br/>
		<div style="float:left;width:100%;overflow:hidden;text-shadow:1px 0px 1px #000;" id="" class="" >Depresiones</div> 
		<img src="media/depresion.jpg" style="float:right;margin:5px;">
		Son hundimientos de la corteza terrestre y se dividen en: absolutas (las que se encuentran por debajo del nivel del mar) y relativas (regiones situadas por encima del nivel del mar, pero a baja altitud). Ejemplos de depresiones relativas son: el Mar Muerto (394 m.b.n.m.), etc.<br/>
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
</div>
</body>