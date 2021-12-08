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
		document.getElementById("divspeech").innerHTML="Los 48 estados contiguos y el Distrito de Columbia ocupan un área combinada de 3,119,884.69 millas cuadradas (8,080,464.3 km2). De esta área, 2,959,064.44 millas cuadradas (7,663,941.7 km2) son tierras contiguas, que componen el 83.65% de la superficie total de los Estados Unidos. [198] [199] Hawaii, que ocupa un archipiélago en el Pacífico central, al suroeste de América del Norte, tiene un área de 10,931 millas cuadradas (28,311 km2). Los territorios poblados de Puerto Rico, Samoa Americana, Guam, Islas Marianas del Norte y las Islas Vírgenes de EE. UU. En conjunto cubren 9,185 millas cuadradas (23,789 km2). [200] Medido solo por la superficie terrestre, Estados Unidos ocupa el tercer lugar detrás de Rusia y China, justo por delante de Canadá. [201] Estados Unidos es la tercera o cuarta nación más grande del mundo por área total (tierra y agua), clasificándose detrás de Rusia y Canadá y casi igual a China. La clasificación varía según cómo se cuentan dos territorios disputados por China e India, y cómo se mide el tamaño total de los Estados Unidos. [E] [202] [203] La llanura costera de la costa atlántica da paso tierra adentro a caducifolio bosques y las colinas del Piamonte. [204] Los Montes Apalaches dividen la costa este de los Grandes Lagos y los pastizales del Medio Oeste. [205] El río Mississippi-Missouri, el cuarto sistema fluvial más largo del mundo, corre principalmente de norte a sur a través del corazón del país. La pradera llana y fértil de las Grandes Llanuras se extiende hacia el oeste, interrumpida por una región montañosa en el sureste. [205] Las Montañas Rocosas, al oeste de las Grandes Llanuras, se extienden de norte a sur en todo el país, alcanzando un máximo de alrededor de 14,000 pies (4,300 m) en Colorado. [206] Más al oeste se encuentran la rocosa Gran Cuenca y desiertos como el Chihuahua y el Mojave. [207] Las sierras de Sierra Nevada y Cascade corren cerca de la costa del Pacífico, ambas alcanzan altitudes superiores a 14,000 pies (4,300 m). Los puntos más bajos y más altos en los Estados Unidos contiguos se encuentran en el estado de California, [208] y solo a unas 84 millas (135 km) de distancia. [209] A una altitud de 20.310 pies (6.190,5 m), el Denali de Alaska es el pico más alto del país y de América del Norte. [210] Los volcanes activos son comunes en las islas Alexander y Aleutian de Alaska, y Hawai consta de islas volcánicas. El supervolcán que subyace al Parque Nacional Yellowstone en las Montañas Rocosas es la característica volcánica más grande del continente. [21]";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/usa.jpg) no-repeat center center #9DBBD8; 
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
	<div style="float:left;overflow:hidden;font-size:60px;position:relative;height:120px;width:150px;text-shadow:1px 1px 1px #000;font-weight:bold;">
		<div style="float:left;position:absolute;left:000px;top:00px;color:#00f;"><img src="media/usa.gif"></div>
		<div style="float:left;position:absolute;left:020px;top:20px;color:#00f;">U</div>
		<div style="float:left;position:absolute;left:060px;top:20px;color:#f00;">S</div>
		<div style="float:left;position:absolute;left:100px;top:20px;color:#fff;">A</div>
	</div>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		The 48 contiguous states and the District of Columbia occupy a combined area of 3,119,884.69 square miles (8,080,464.3 km2). Of this area, 2,959,064.44 square miles (7,663,941.7 km2) is contiguous land, composing 83.65% of total U.S. land area.[198][199] Hawaii, occupying an archipelago in the central Pacific, southwest of North America, is 10,931 square miles (28,311 km2) in area. The populated territories of Puerto Rico, American Samoa, Guam, Northern Mariana Islands, and U.S. Virgin Islands together cover 9,185 square miles (23,789 km2).[200] Measured by only land area, the United States is third in size behind Russia and China, just ahead of Canada.[201]
		The United States is the world's third- or fourth-largest nation by total area (land and water), ranking behind Russia and Canada and nearly equal to China. The ranking varies depending on how two territories disputed by China and India are counted, and how the total size of the United States is measured.[e][202][203]
		The coastal plain of the Atlantic seaboard gives way further inland to deciduous forests and the rolling hills of the Piedmont.[204] The Appalachian Mountains divide the eastern seaboard from the Great Lakes and the grasslands of the Midwest.[205] The Mississippi–Missouri River, the world's fourth longest river system, runs mainly north–south through the heart of the country. The flat, fertile prairie of the Great Plains stretches to the west, interrupted by a highland region in the southeast.[205]
		The Rocky Mountains, west of the Great Plains, extend north to south across the country, peaking around 14,000 feet (4,300 m) in Colorado.[206] Farther west are the rocky Great Basin and deserts such as the Chihuahua and Mojave.[207] The Sierra Nevada and Cascade mountain ranges run close to the Pacific coast, both ranges reaching altitudes higher than 14,000 feet (4,300 m). The lowest and highest points in the contiguous United States are in the state of California,[208] and only about 84 miles (135 km) apart.[209] At an elevation of 20,310 feet (6,190.5 m), Alaska's Denali is the highest peak in the country and in North America.[210] Active volcanoes are common throughout Alaska's Alexander and Aleutian Islands, and Hawaii consists of volcanic islands. The supervolcano underlying Yellowstone National Park in the Rockies is the continent's largest volcanic feature.[211]
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>	
</body>