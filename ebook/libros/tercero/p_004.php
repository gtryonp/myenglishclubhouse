<script>
var rpta="";
var arrnumbers={"ein" :"1_#f00", "zwei" :"2_#00f", "drei" :"3_#0a0", "vier" :"4_#fa0", "fünf" :"5_#0af", "sechs" :"6_#f0a", "sieben" :"7_#a0f", "acht" :"8_#00a", "neun" :"9_#0aa", "zehn" :"10_#a00"};
window.parent.carga();
function start() {
	playsong();
}
function stop() {
	song.pause();
}
function respuesta(valor)	{
	var cantidad=valor.split("|").length-1;
	return(String(100*cantidad/20).formatMoney(2)+"%");
}
String.prototype.formatMoney = function(decPlaces, thouSeparator, decSeparator, currencySymbol) {
	decPlaces = isNaN(decPlaces = Math.abs(decPlaces)) ? 2 : decPlaces;
	decSeparator = decSeparator == undefined ? "." : decSeparator;
	thouSeparator = thouSeparator == undefined ? "," : thouSeparator;
	currencySymbol = currencySymbol == undefined ? "" : currencySymbol;
	var n = this,
	sign = n < 0 ? "-" : "",
	i = parseInt(n = Math.abs(+n || 0).toFixed(decPlaces)) + "",
	j = (j = i.length) > 3 ? j % 3 : 0;
	return sign + currencySymbol + (j ? i.substr(0, j) + thouSeparator : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thouSeparator) + (decPlaces ? decSeparator + Math.abs(n - i).toFixed(decPlaces).slice(2) : "");
};
function instructions() {
	var data="";	
	// data+="<div style='float:left;width:100%;overflow:hidden;padding:20% 0% 0% 0%;' id='' class='' ></div>";
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;background:rgba(194,215,136,0);padding:5px 0px 0px 40px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_004.png' style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:10px 10px;' id='' class='' >	Suchen Sie nach allen 20 Zahlen, die auf dem Buchstabensong erscheinen, und klicken Sie darauf. Die Zahlen werden als Zahlen angezeigt!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	rpta=cualrpta;
	var arrrpta=rpta.split("|");
	for (var key in arrnumbers) {
		var value = arrnumbers[key].split("_");
		var ok=true;
		for(k=0;k<arrrpta.length;k++)	{
			if(arrrpta[k]==value[0])	{
				Array.from(document.querySelectorAll(".clasenumero")).forEach(function(actual) { 
					if(actual.innerHTML.toLowerCase()==key && ok)	{
						actual.style="background:"+value[1]+";color:#fff;padding:0px 12px;border-radius:20px;";
						actual.innerHTML=value[0];
						ok=(arrrpta.count(value[0])>1 ? true : false);
					}
				});
			}
		};
	};
}
Object.defineProperties(Array.prototype, {
	count: {
		value: function(value) {
			return this.filter(x => x==value).length;
		}
	}
});
window.onload = function () { 
	instructions();
	teclas();
}
function teclas()	{
	Array.from(document.querySelectorAll(".clasenumero")).forEach(function(actual) { actual.addEventListener("click", function (e) { 
		for (var key in arrnumbers) {
			var value = arrnumbers[key].split("_");
			if(actual.innerHTML.toLowerCase()==key)	{
				actual.style="background:"+value[1]+";color:#fff;padding:0px 12px;border-radius:20px;";
				actual.innerHTML=value[0];
				myAudio1.play();
				rpta+=value[0]+"|";
			};
		};
	});});
}

function playsong()	{
	song.play();
}
</script>
<style>
body	{
	background:url(media/tree2.jpg) no-repeat center center fixed; 
	background-size: cover;
	overflow:hidden;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
.boton	{
	border:0px solid;
	font-size:32px;
	background:#ddd;
	cursor:pointer;
}
.boton:hover	{
	border:0px solid;
	background:#bbb;
	color:#fff;
}
.clasenumero {
	acolor:#f00;
}	
</style>
<body>
	<div style="float:left;width:100%;font-weight:bold;font-size:50px;text-align:center;background:rgba(0,0,0,0.25);color:#ffc;text-shadow:-1px -1px 1px #f90;padding:10px 0px;" id="divcolor" >Sing ein Lied!!</div>
	<div style="float:left;width:100%;padding:1% 0%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;font-size:26px;padding:0px 0px 0px 10%;" id="" class="fontech" >(finde und klicke auf die Zahlen)</div>
	<div style="float:left;width:100%;padding:2% 0%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:calc(100% - 150px);font-size:36px;padding:0px 0px 0px 10%;text-align:justify;" id="" class="fontech" >
		Jürgen, 
		<span class='clasenumero'>ein</span>
		kleiner Junge und seine Freunde haben Durst und bestellen ein Getränk,
		<span class='clasenumero'>zwei</span> 
		Freunde bestellten insgesamt 
		<span class='clasenumero'>drei</span> 
		Getränke um 
		<span class='clasenumero'>vier</span> 
		Uhr nachmittags im Restaurant Nummer 
		<span class='clasenumero'>fünf</span>
		, das Nummer 
		<span class='clasenumero'>sechs</span>
		oder Nummer 
		<span class='clasenumero'>sieben</span> 
		ist. Sie kehrten um 
		<span class='clasenumero'>acht</span> 
		Uhr nachts nach Hause zurück, sahen um 
		<span class='clasenumero'>neun</span>
		Uhr fern und gingen um 
		<span class='clasenumero'>zehn</span> 
		Uhr ins Bett.		
	</div>
	<audio id="myAudio1"><source src="media/ding.mp3"></audio>
	<audio id="song"><source src="media/numbers.mp3"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('004',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('004',rpta)">Aufgabe erledigt!</button>
	</div>
</body>