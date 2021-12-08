<script>
window.parent.carga();
window.onload=function() {
	instructions();
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_014.png' style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 24px verdana;text-align:center;padding:50px 10px;' id='' class='' >Hier ist Ihre Chance, der berühmte Schriftsteller zu werden, von dem Sie wissen, dass Sie es können: Schreiben Sie die Reden unseres gutaussehenden Helden in dieser Comic-Episode. Verwenden Sie Ihre Fantasie und zählen Sie der Welt eine großartige Geschichte!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
	Array.from(document.querySelectorAll(".textareas")).forEach(function(actual) { actual.addEventListener("blur", function (e) {	
		rpta="";
		Array.from(document.querySelectorAll(".textareas")).forEach(function(actual)	{
			rpta+=actual.id.split("t_").join("")+":"+actual.value.split('"').join("").split("'").join("").split("&").join("").split(",").join(";")+"|";
		})
	})});
	alert(respuesta(rpta));
}
function restore(cualrpta)	{
	if(cualrpta!="") rpta=cualrpta;
	arrrpta=rpta.split("|");
	for(k=0;k<arrrpta.length-1;k++)	{
		if(arrrpta[k]!="")	{
			document.getElementById("t_"+arrrpta[k].split(":")[0]).value=arrrpta[k].split(":")[1];
		}
	}
}
function respuesta(valor)	{
	var arr=valor.split("|");
	var ok=0;
	for(k=0;k<arr.length-1;k++)	{
		if(arr[k].length>2)	ok++;
	}
	return(String(100*ok/8).formatMoney(2)+"%");
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
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
textarea	{
	height:100%;
	width:100%;
	border:0px;
	font-size:15px;
	font-weight:bold;
	background:#fdd;
}
</style>
<body>
	<div style="float:left;width:100%;text-align:center;font-size:48px;font-weight:bold;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,2px 2px 1px #000;color:#caf;" id="" class="" >TEXT-A-COMIC</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_1" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v01.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_2" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v02.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_3" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v03.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_4" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v04.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_5" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v05.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_6" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v06.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_7" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v07.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="float:left;border:6px solid #000;height:25%;width:28%;margin:1% 1% 0% 0%;" >
		<div style="float:left;width:100%;height:40px;overflow:hidden;" id="" class="" ><textarea id="t_8" style="" class="textareas"  placeholder="Text hier"></textarea></div>
		<div style="float:left;width:100%;height:calc(100% - 40px);overflow:hidden;background:rgba(254,156,168,0.5);" id="" class="" ><img src="media/v08.png" style="height:100%;width:100%;"></div>
	</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('014',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('014',rpta)">Aufgabe erledigt!</button>
	</div>
</body>