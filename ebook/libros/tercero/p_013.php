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
		document.getElementById("divspeech").innerHTML="Los cómics son un medio utilizado para expresar narrativas u otras ideas a través de imágenes, generalmente combinadas con texto. Por lo general, toma la forma de una secuencia de paneles de imágenes. Los dispositivos de texto como globos de texto, subtítulos y onomatopeya pueden indicar diálogo, narración, efectos de sonido u otra información. El tamaño y la disposición de los paneles contribuyen al ritmo narrativo. Los dibujos animados y otras formas de ilustración son los medios más comunes para crear imágenes en los cómics; Fumetti es una forma que utiliza imágenes fotográficas. Las formas comunes incluyen historietas, caricaturas editoriales y mordazas, y cómics. Desde finales del siglo XX, los volúmenes encuadernados, como novelas gráficas, álbumes de historietas y tankōbon, se han vuelto cada vez más comunes, mientras que los cómics en línea han proliferado en el siglo XXI. La historia de los cómics ha seguido diferentes caminos en diferentes culturas. Los eruditos han postulado una prehistoria desde las pinturas rupestres de Lascaux en Francia. A mediados del siglo XX, los cómics florecieron, particularmente en los Estados Unidos, Europa occidental (especialmente Francia y Bélgica) y Japón. La historia de los cómics europeos a menudo se remonta a las tiras de dibujos animados de Rodolphe Töpffer de la década de 1830, pero el medio realmente se hizo popular en la década de 1930 después del éxito de tiras y libros como The Adventures of Tintin. Los cómics estadounidenses surgieron como un medio de comunicación a principios del siglo XX con la llegada de las tiras cómicas de los periódicos; Los cómics de estilo revista siguieron en la década de 1930, en los que el género de superhéroes se hizo prominente después de la aparición de Superman en 1938. Las historias de cómics y dibujos animados japoneses (manga) proponen orígenes desde el siglo XII. Las historietas modernas surgieron en Japón a principios del siglo XX, y la producción de revistas y libros de historietas se expandió rápidamente en la era posterior a la Segunda Guerra Mundial (1945–) con la popularidad de dibujantes como Osamu Tezuka (Astro Boy, et al. ) Los cómics han tenido una reputación baja durante gran parte de su historia, pero hacia finales del siglo XX comenzaron a encontrar una mayor aceptación entre el público y los académicos.		";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/comics.jpg) center center #9DBBD8; 
	background-size: contain;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:cs;
	src: url(media/cs.ttf);
}
.fontcs {
	font-family: cs;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
	<div style="float:left;width:calc(100% - 20px);text-shadow:-1px -1px 1px #000,1px 1px 1px #000,2px 2px 1px #000;color:#fa0;font-size:100px;;background:rgba(80,80,80,0.5);padding:0px 10px;" id="" class="fontcs" >C O M I C 	S</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		Comics sind ein Medium, um Erzählungen oder andere Ideen durch Bilder auszudrücken, die normalerweise mit Text kombiniert werden. Es hat normalerweise die Form einer Folge von Bildfeldern. Textgeräte wie Sprechblasen, Beschriftungen und Onomatopoeia können Dialoge, Erzählungen, Soundeffekte oder andere Informationen anzeigen. Die Größe und Anordnung der Tafeln tragen zum narrativen Rhythmus bei. Cartoons und andere Formen der Illustration sind das häufigste Mittel, um Bilder in Comics zu erstellen. Fumetti ist eine Form, die fotografische Bilder verwendet. Übliche Formen sind Comics, redaktionelle Cartoons und Gags sowie Comics. Seit dem späten 20. Jahrhundert sind gebundene Bände wie Graphic Novels, Comics und Tankōbon immer häufiger geworden, während sich Online-Comics im 21. Jahrhundert vermehrt haben. Die Geschichte der Comics hat in verschiedenen Kulturen unterschiedliche Wege beschritten. Wissenschaftler haben eine Vorgeschichte seit den Höhlenmalereien von Lascaux in Frankreich postuliert. Mitte des 20. Jahrhunderts blühten Comics auf, insbesondere in den USA, Westeuropa (insbesondere Frankreich und Belgien) und Japan. Die Geschichte der europäischen Comics reicht oft bis zu Rodolphe Töpffers Comic-Streifen der 1830er Jahre zurück, aber das Medium wurde in den 1930er Jahren nach dem Erfolg von Streifen und Büchern wie The Adventures of Tintin wirklich populär. Amerikanische Comics entstanden im frühen 20. Jahrhundert mit dem Aufkommen von Zeitungscomics als Kommunikationsmittel. In den 1930er Jahren folgten Comics im Stil eines Magazins, wobei das Superhelden-Genre nach Supermans Auftritt im Jahr 1938 an Bedeutung gewann. Japanische Comic- und Comic-Geschichten (Manga) lassen auf Ursprünge aus dem 12. Jahrhundert schließen. Zu Beginn des 20. Jahrhunderts entstanden in Japan moderne Comics, und die Produktion von Zeitschriften und Comics nahm in der Nachkriegszeit (1945–1945) mit der Popularität von Karikaturisten wie Osamu Tezuka (Astro Boy et al.) Rasch zu. al.) Comics hatten für einen Großteil ihrer Geschichte ein geringes Ansehen, aber gegen Ende des 20. Jahrhunderts fanden sie eine größere Akzeptanz in der Öffentlichkeit und in der Wissenschaft.	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>