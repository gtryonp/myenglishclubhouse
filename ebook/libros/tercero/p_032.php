<script>
var rpta="";
window.parent.carga();
function start() {
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_032.png'  style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Solve the Crosswords filling answers horizontal/vertically.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arrrpta=rpta.split("|");
	var tabla=document.getElementById("tabla");
	var numero=0;
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			if(arrrpta[numero]!=undefined) document.getElementById("td_"+i+"_"+j).value=arrrpta[numero];
			numero++;
		}
	}	
}

window.onload=function()	{
	instructions();
	cargatabla();
	var elems = [].slice.call(document.querySelectorAll('.pass'));
	elems.forEach(function(el, i, array) {
		el.onkeypress = function(event) {
			var keycode = event.which;
			// if (!(event.shiftKey === false && (keycode === 46 || keycode === 8 || keycode === 37 || keycode === 39 || (keycode >= 48 && keycode <= 57)))) return;
			var nextInput = i + 1;
			if (nextInput < array.length) array[nextInput].focus();
		};
	});
}
	
function check()	{
	var tabla=document.getElementById("tabla");
	rpta="";
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			rpta+=document.getElementById("td_"+i+"_"+j).value+"|";
		}
	}	
}	
	
function cargatabla()	{
	var data="BASKET*O*ON*ERXICI*NU*ACTINGALE*DIBCARS*SY";
	var numero=0;
	var tabla=document.getElementById("tabla");
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			tabla.rows[i].cells[j].innerHTML="<div style='float:left;position:relative;'><div class='tool' style='float:left;'>"+(numero+1)+"</div><input type='text' id='td_"+i+"_"+j+"' style='width:40px;border:1px solid;font:32px verdana;text-align:center;' class='pass "+(data.substr(numero,1)=="*" ? "black" : "" )+"' maxlength='1' avalue='"+data.substr(numero,1)+"' /></div>";numero++;
		}
	}
}


function respuesta(valor)	{
	var arrrpta=valor.split("|");
	var data="BASKET*O*ON*ERXICI*NU*ACTINGALE*DIBCARS*SY";
	var ok=0;
	for(k=0;k<arrrpta.length-1;k++)	{
		if(arrrpta[k].toUpperCase()==data.substr(k,1))	ok++;
	}
	return(String(100*ok/(data.length-6)).formatMoney(2)+"%");
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
	html,body{
		width:100%;height:100%;overflow:hidden;padding:0px 50px;
	}
	.black	{background:#000;}
	.tool		{font:10px verdana;position:absolute;left:0px;top:0px;}
	tabla	{border:3px solid;}
	td		{font:32px verdana;padding:0px;margin:0px;}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;padding:20px 0px;font:bold 40px verdana;text-align:center;color:#ccf;text-shadow:1px 1px 1px #009,1px 2px 2px #00f,2px 2px 10px #008;" id="" class="" >das Kreuzworträtsel</div>


<table id='tabla' style=''>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>

<div style="float:left;width:100%;padding:20px;" id="" class="" >&nbsp;</div>

<div style="font:12px verdana;">
	<div style="float:left;width:100%;overflow:hidden;background:rgba(188,197,230,0.5);" id="" class="" >HORIZONTAL</div>
	<div style="float:left;width:100%;" id="" class="" >1		ENCEST A BALL WITH THE HANDS</div>
	<div style="float:left;width:100%;" id="" class="" >8		OXIGEN</div>
	<div style="float:left;width:100%;" id="" class="" >10	.../OFF</div>
	<div style="float:left;width:100%;" id="" class="" >13	(I)EMERGENCY ROOM</div>
	<div style="float:left;width:100%;" id="" class="" >20	NITROGEN/URANIUM</div>
	<div style="float:left;width:100%;" id="" class="" >23	PERFORMING ON PUBLIC</div>
	<div style="float:left;width:100%;" id="" class="" >29	CHEER (FRENCH)</div>
	<div style="float:left;width:100%;" id="" class="" >33 OFFER (INVERSE)</div>
	<div style="float:left;width:100%;" id="" class="" >36	AUTOMOTIVE RACING</div>
	<div style="float:left;width:100%;overflow:hidden;background:rgba(202,151,243,0.5);" id="" class="" >VERTICAL</div>
	<div style="float:left;width:100%;" id="" class="" >1 SPORT FIGHT</div>
	<div style="float:left;width:100%;" id="" class="" >3 FOOTBALL</div>
	<div style="float:left;width:100%;" id="" class="" >4 CROCHET</div>
	<div style="float:left;width:100%;" id="" class="" >6 SPORT WITH RACKETS</div>
	<div style="float:left;width:100%;" id="" class="" >14 AMERICAN RUGBY</div>
	<div style="float:left;width:100%;" id="" class="" >16 JAI... (INVERSE)</div>
	<div style="float:left;width:100%;" id="" class="" >26 IDENTIFICATION</div>
	<div style="float:left;width:100%;" id="" class="" >29 (I)AFTER CHRIST</div>
</div>



	
	
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="check();parent.saveforlater('032',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="check();parent.taskdone('032',rpta)">Aufgabe erledigt!</button>
	</div>
</body>
<script>
</script>