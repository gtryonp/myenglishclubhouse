<script src="lib/rs.js?dummy="+ new Date().getTime()></script>
<script>
var rpta="";
window.parent.carga();
function start() {
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_008.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 36px verdana;text-align:center;padding:0px 50px;' id='' class='' >	Ziehen Sie jeden Tag in der Liste (nach oben und unten), bis sie bestellt werden. Beginnen Sie mit Sonntag</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arrrpta=rpta.split("|");
	tabla=document.getElementById("tabladow");
	buffer="";
	for(var k=0;k<arrrpta.length-1;k++){
		for(var i=0;i<tabla.rows.length;i++){
			if(tabla.rows[i].id.split("_")[1]==arrrpta[k])	buffer+="<tr id='tr_"+k+"'>"+tabla.rows[i].innerHTML+"</tr>\n";
		}
	}
	if(buffer!="")	{
		tabla.innerHTML="<tbody>\n"+buffer+"</tbody>\n";
	}
	RowSorter("#tabladow");
}
function crearpta()	{
	rpta="";
	tabla=document.getElementById("tabladow");
	for(var i=0;i<tabla.rows.length;i++){
		rpta+=tabla.rows[i].id.split("_")[1]+"|"
	}
}
window.onload = function() {
	instructions();
	// RowSorter("#tabladow");
	crearpta();
}	
function 	playsound()	{
	myAudio1.play();
}
function respuesta(valor)	{
	var arrrpta=valor.split("|");
	var arrok=["0","1","2","3","4","5","6"];
	var total=0;
	for(k=0;k<arrrpta.length-1;k++)	{
		for(x=0;x<arrok.length-1;x++)	{
			if(arrok[x]==arrrpta[k] && x==k)	total++;
		}
	}
	return(String(100*total/7).formatMoney(2)+"%");
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
	background:url(media/night.jpg) no-repeat center center fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
	table {
		width: 100%; 
		font-size:32px;
	}
	table thead th {
		background-color: #ccc; 
		padding: 5px 8px;
	}
	table td {
		background-color: rgba(192,255,255,.15); 
		padding:10px 15px;
		color:#ddf;
		text-shadow:2px 2px 2px #000;
	}
	table.sorting-table {
		cursor: move;
	}
	table tr.sorting-row td {
		background-color: #fe8;
	}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;font-size:calc(32px + 1vw);text-align:center;padding:20px 0px;color:#ffa;" id="" class="" >Bestellen Sie die Wochentage</div>
	
	<div style="float:left;width:100%;overflow:hidden;padding:10px;font-size:36px;color:#fff;" id="" class="" >Mach den Sonntag zuerst!</div>

	
	<table id="tabladow" class='fontech'>
		<tbody>
			<tr id="tr_5"><td>Freitag		</td><td>Viernes		</td></tr>
			<tr id="tr_4"><td>Donnerstag	</td><td>Jueves			</td></tr>
			<tr id="tr_3"><td>Mittwoch	</td><td>Miercoles	</td></tr>
			<tr id="tr_2"><td>tuesday		</td><td>Martes			</td></tr>
			<tr id="tr_6"><td>Samstag	</td><td>Sabado			</td></tr>
			<tr id="tr_0"><td>Sonntag		</td><td>Domingo		</td></tr>
			<tr id="tr_1"><td>Montag		</td><td>Lunes			</td></tr>
		</tbody>
	</table>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="crearpta();parent.saveforlater('008',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="crearpta();parent.taskdone('008',rpta)">Aufgabe erledigt!</button>
	</div>
	<audio id="myAudio1"><source src="media/fd.wav"></audio>
</body>