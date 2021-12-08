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
		Comics is a medium used to express narratives or other ideas through images, usually combined with text. It typically takes the form of a sequence of panels of images. Textual devices such as speech balloons, captions, and onomatopoeia can indicate dialogue, narration, sound effects, or other information. The size and arrangement of panels contribute to narrative pacing. Cartooning and other forms of illustration are the most common image-making means in comics; fumetti is a form which uses photographic images. Common forms include comic strips, editorial and gag cartoons, and comic books. Since the late 20th century, bound volumes such as graphic novels, comic albums, and tankōbon have become increasingly common, while online webcomics have proliferated in the 21st century.
		The history of comics has followed different paths in different cultures. Scholars have posited a pre-history as far back as the Lascaux cave paintings in France. By the mid-20th century, comics flourished, particularly in the United States, western Europe (especially France and Belgium), and Japan. The history of European comics is often traced to Rodolphe Töpffer's cartoon strips of the 1830s, but the medium truly became popular in the 1930s following the success of strips and books such as The Adventures of Tintin. American comics emerged as a mass medium in the early 20th century with the advent of newspaper comic strips; magazine-style comic books followed in the 1930s, in which the superhero genre became prominent after Superman appeared in 1938. Histories of Japanese comics and cartooning (manga) propose origins as early as the 12th century. Modern comic strips emerged in Japan in the early 20th century, and the output of comics magazines and books rapidly expanded in the post-World War II era (1945–) with the popularity of cartoonists such as Osamu Tezuka (Astro Boy, et al.). Comics has had a lowbrow reputation for much of its history, but towards the end of the 20th century began to find greater acceptance with the public and academics.	
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</body>