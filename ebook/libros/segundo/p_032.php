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
		//console.clear();
console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",rpta);
	})});
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;this.play();}, false);
}
function stop() {
	n0.src="";
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_032.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:20px 50px;' id='' class='' >Resuelva esta trivia con lo aprendido de la geografia de america del sur.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
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
	var arrok=[
	"1:2",
	"2:3",
	"3:0",
	"4:1",
	"5:4",
	"6:2",
	"7:4",
	"8:1",
	"9:0",
	"10:3",
	];
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
html,body	{
	width:100%;height:100%;overflow:hidden;;
	background: url(media/usa.jpg) center center no-repeat;
	background-size: cover;
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
<div style="float:left;width:100%;overflow:hidden;font-weight:bold;font-size:calc(32px + 3vw);text-align:center;padding:10px 0px;color:#000;" id="" class="fontech" >TRIVIA</div>
<div style="float:left;font-size:28px;text-shadow:2px 2px 1px #000;color:#0f0;">
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(109,253,137,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">Geopolíticamente, los países que unen el norte y el sur son considerados</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="">
			<select class="seleccion"  id="c_1">
				<option value="0">América</option>
				<option value="1">América del Norte</option>
				<option value="2">América Central</option>
				<option value="3">América del Sur</option>
				<option value="4">Ninguna Anterior</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">Cuales son islas en America?</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_2">
				<option value="0">Curazao</option>
				<option value="1">Bonaire</option>
				<option value="2">Aruba</option>
				<option value="3">Todas las anteriores</option>
				<option value="4">Ninguna de las anteriores</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">Río más largo y caudaloso del mundo</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_3">
				<option value="0">Amazonas</option>
				<option value="1">Etna</option>
				<option value="2">Nilo</option>
				<option value="3">Titicaca</option>
				<option value="4">Rimac</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">cordillera más larga?</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_4">
				<option value="0">Alpes</option>
				<option value="1">Andes</option>
				<option value="2">Fujiyama</option>
				<option value="3">Negra</option>
				<option value="4">Continental</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">El río más ancho:</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_5">
				<option value="0">Saldarriaga</option>
				<option value="1">Po</option>
				<option value="2">Amazonas</option>
				<option value="3">Rimac</option>
				<option value="4">Rio de la Plata</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">el desierto más seco</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_6">
				<option value="0">Sechura</option>
				<option value="1">Sahara</option>
				<option value="2">Atacama</option>
				<option value="3">Aconcagua</option>
				<option value="4">Piura</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">Ciudad capital a mayor altura:</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_7">
				<option value="0">Oruro</option>
				<option value="1">La Paz</option>
				<option value="2">Lima</option>
				<option value="3">Santiago</option>
				<option value="4">Quito</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">El lago navegable más alto:</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_8">
				<option value="0">Iguazu</option>
				<option value="1">Titicaca</option>
				<option value="2">Rimac</option>
				<option value="3">Bella</option>
				<option value="4">Oropampa</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">El clima predominante es:</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_9">
				<option value="0">Tropical</option>
				<option value="1">Arido</option>
				<option value="2">Seco</option>
				<option value="3">Humedo</option>
				<option value="4">Frio</option>
			</select>
		</div>	
	</div>	
	<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
		<div style="float:left;width:70%;overflow:hidden;" id="">Pais que no estan en America del Sur</div>	
		<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
			<select class="seleccion"  id="c_10">
				<option value="0">Brasil</option>
				<option value="1">Argentina</option>
				<option value="2">Colombia</option>
				<option value="3">Guatemala</option>
				<option value="4">Venezuela</option>
			</select>
		</div>	
	</div>	
</div>	
<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
	<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('032',rpta)">Guardar para despues</button>
	<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('032',rpta)">Tarea terminada!</button>
</div>
<audio id="n0"><source src="media/ag01.wav"></audio>
</body>