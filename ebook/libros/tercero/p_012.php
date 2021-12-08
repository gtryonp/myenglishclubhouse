<script>
var rpta="";
window.parent.carga();
window.onload=function() {
	instructions();
}
function start() {
	Array.from(document.querySelectorAll(".seleccion")).forEach(function(actual) { actual.addEventListener("change", function (e) {	
		rpta="";
		Array.from(document.querySelectorAll(".seleccion")).forEach(function(actual)	{
			rpta+=actual.id.split("c_").join("")+":"+actual.value+"|";
		})
	})});
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;this.play();}, false);
}
function stop() {
	n0.src="";
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_012.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:20px 50px;' id='' class='' >Nachdem Sie die linke Seite gelesen haben, können Sie alle Fragen beantworten. Alle Antworten finden Sie auf der linken Seite. Wählen Sie jede Frage aus, um Ihre Antwort auszuwählen.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="") rpta=cualrpta;
	arrrpta=rpta.split("|");
	for(k=0;k<arrrpta.length-1;k++)	{
		if(arrrpta[k]!="")	{
			document.getElementById("c_"+arrrpta[k].split(":")[0]).value=arrrpta[k].split(":")[1];
		}
	}
}
function respuesta(valor)	{
	var arrrpta=valor.split("|");
	var arrok=["1:Berlin","2:zweitbeliebteste","3:1990","4:Bundesrepublik Deutschland","5:1999","6:Germania","7:germanischen","8:dritte","9:Polen und die Tschechische Republik","10:Alle sind wahr"];
	var total=0;
	for(k=0;k<arrrpta.length-1;k++)	{
		for(x=0;x<arrok.length-1;x++)	{
			if(arrok[x]==arrrpta[k])	total++;
		}
	}
	return(String(100*total/10).formatMoney(2)+"%");
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
select	{
	font-family:ech;
	font-size:28px;
	width:80%;
	border-radius:12px;
}
</style>
<body>
<div style="float:left;width:100%;overflow:hidden;font-weight:bold;font-size:calc(32px + 3vw);text-align:center;padding:10px 0px;color:#000;" id="" class="fontech" >Fragen und Antworten</div>
<div style="float:left;width:100%;overflow:hidden;;background:rgba(109,253,137,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Hauptstadt? </div>
	<div style="float:left;width:30%;overflow:hidden;" id="">
		<select class="seleccion"  id="c_1">
			<option value="Hamburg">Hamburg</option>
			<option value="Berlin">Berlin</option>
			<option value="München">München</option>
			<option value="Bayern">Bayern</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Deutschland ist das ... Migrationsziel der Welt?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_2">
			<option value="Am beliebtesten zuerst">Am beliebtesten zuerst</option>
			<option value="zweitbeliebteste">zweitbeliebteste</option>
			<option value="drittbeliebteste">drittbeliebteste</option>
			<option value="fünftbeliebtesten">fünftbeliebtesten</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">In welchem ​​Jahr wurden die Republiken vereinigt?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_3">
			<option value="2000">2000</option>
			<option value="2010">2010</option>
			<option value="1990">1990</option>
			<option value="1945">1945</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Deutschland Name?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_4">
			<option value="keiner">keiner</option>
			<option value="Bundesrepublik Deutschland">Bundesrepublik Deutschland</option>
			<option value="Deutschland">Deutschland</option>
			<option value="Deutsche republik">Deutsche republik</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">nahm die gemeinsame europäische Währung, den Euro, in ...</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_5">
			<option value="1982">1982i</option>
			<option value="1999">1999</option>
			<option value="1990">1990</option>
			<option value="1985">1985</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">war bekannt als ...</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_6">
			<option value="Germania">Germania</option>
			<option value="Balkan">Balkan</option>
			<option value="Bayern">Bayern</option>
			<option value="Hügel">Hügel</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Neben Deutsch ist auch die Verwendung des ... Gentilicio weit verbreitet</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_7">
			<option value="germanischen">germanischen</option>
			<option value="deutschen">deutschen</option>
			<option value="Mischen">Mischen</option>
			<option value="Aleutien">Aleutien</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Es stellt das ... größte jährliche Entwicklungshilfebudget der Welt bereit.</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_8">
			<option value="höher">höher</option>
			<option value="achte">achte</option>
			<option value="dritte">dritte</option>
			<option value="zuerst">zuerst</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">grenzt im Osten an: </div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_9">
			<option value="Nordsee, Dänemark und die Ostsee">Nordsee, Dänemark und die Ostsee</option>
			<option value="Österreich im Südwesten">Österreich im Südwesten</option>
			<option value="Schweiz">Schweiz</option>
			<option value="Polen und die Tschechische Republik">Polen und die Tschechische Republik</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Deutschland enthält ...</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_10">
			<option value="Wälder">Wälder</option>
			<option value="Ufer">Ufer</option>
			<option value="Berge">Berge</option>
			<option value="Alle sind wahr">Alle sind wahr</option>
		</select>
	</div>	
</div>	
<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
	<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('012',rpta)">Für später speichern</button>
	<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('012',rpta)">Aufgabe erledigt!</button>
</div>
<audio id="n0"><source src="media/g01a.mp3"></audio>
</body>