<script>
var rpta="";
window.parent.carga();
function start() {
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_016.png'  style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Resuelva el crucigrama con las ayudas horizontales y verticales.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
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
	var data="DESIERTO*SI*TOUR*TERRENOPERU**DY*PRADERAAAA*NOA*";
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
	var data="DESIERTO*SI*TOUR*TERRENOPERU**DY*PRADERA*AAA*OEA*";
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
		background:url('media/bio.jpg') center center no-repeat; 
		background-size: cover;

	}
	.black	{background:#000;}
	.tool		{font:10px verdana;position:absolute;left:0px;top:0px;}
	tabla	{border:3px solid;}
	td		{font:32px verdana;padding:0px;margin:0px;}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;padding:20px 0px;font:bold 40px verdana;text-align:center;color:#ccf;text-shadow:1px 1px 1px #009,1px 2px 2px #00f,2px 2px 10px #008;" id="" class="" >CRUCIGRAMA</div>
	



<table id='tabla' style=''>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
	<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
</table>

<div style="float:left;width:100%;padding:20px;" id="" class="" >&nbsp;</div>

<div style="font:12px verdana;float:left;background:rgba(255,255,255,0.5);">
	<div style="float:left;width:100%;overflow:hidden;background:rgba(188,197,130,0.75);" id="" class="" >HORIZONTAL</div>
	<div style="float:left;width:100%;" id="" class="" >1		nombre de una region natural</div>
	<div style="float:left;width:100%;" id="" class="" >10	afirmacion</div>
	<div style="float:left;width:100%;" id="" class="" >13	paseo (ingles)</div>
	<div style="float:left;width:100%;" id="" class="" >18	division geografica rectangular</div>
	<div style="float:left;width:100%;" id="" class="" >25	nombre de pais sudamericano</div>
	<div style="float:left;width:100%;" id="" class="" >31 dy</div>
	<div style="float:left;width:100%;" id="" class="" >34 nombre de una region natural</div>
	<div style="float:left;width:100%;" id="" class="" >41 aaa </div>
	<div style="float:left;width:100%;" id="" class="" >46 noa</div>
	<div style="float:left;width:100%;overflow:hidden;background:rgba(202,151,243,0.75);" id="" class="" >VERTICAL</div>
	<div style="float:left;width:100%;" id="" class="" >1 cuarta letra alfabeto</div>
	<div style="float:left;width:100%;" id="" class="" >2 nombre de region natural</div>
	<div style="float:left;width:100%;" id="" class="" >3 zona geografica del Peru</div>
	<div style="float:left;width:100%;" id="" class="" >5 etr</div>
	<div style="float:left;width:100%;" id="" class="" >6 nombre de morderura de roedor</div>
	<div style="float:left;width:100%;" id="" class="" >7 nombre de region natural</div>
	<div style="float:left;width:100%;" id="" class="" >8 zona geografica del peru </div>
	<div style="float:left;width:100%;" id="" class="" >20 rua</div>
	<div style="float:left;width:100%;" id="" class="" >41 primera lketra alfabeto</div>
	<div style="float:left;width:100%;" id="" class="" >37 primera nota musical</div>
	<div style="float:left;width:100%;" id="" class="" >38 letra repetida</div>
</div>



	
	
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="check();parent.saveforlater('016',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="check();parent.taskdone('016',rpta)">Tarea terminada!</button>
	</div>
</body>
<script>
</script>