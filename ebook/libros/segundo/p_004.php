<script>
var rpta="";
window.parent.carga();
function start() {
	playsong();
	Array.from(document.querySelectorAll(".geo")).forEach(function(actual) { actual.addEventListener("click", function (e) {actual.innerHTML="GEOGRAFIA";rpta+=actual.id+"|";actual.classList.add("clicked")});});
}
function stop() {
	song.pause();
}
function respuesta(valor)	{
	var cantidad=valor.split("|").length-1;
	var total=Array.from(document.querySelectorAll(".geo")).length;
	return(String(100*cantidad/total).formatMoney(2)+"%");
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
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;background:rgba(194,215,136,0);padding:5px 0px 0px 40px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_004.png' style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:10px 10px;' id='' class='' >Busca y haz cick sobre todas las palabras 'geografia'</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arr=rpta.split("|");
	for(var k=0;k<arr.length-1;k++){
		if(arr[k]!="") {
			document.getElementById(arr[k]).classList.add("clicked");
			document.getElementById(arr[k]).innerHTML="GEOGRAFIA"
		}
	}
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
}
function playsong()	{
	// song.play();
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
.clicked	{
	background:#ff0;
}
</style>
<body>
	<div style="float:left;width:100%;font-weight:bold;font-size:50px;text-align:center;background:rgba(0,0,0,0.25);color:#ffc;text-shadow:-1px -1px 1px #f90;padding:10px 0px;" id="divcolor" >Marca la palabra Geografia!</div>
	<div style="float:left;width:100%;padding:1% 0%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;font-size:36px;font-weight:bold;padding:0px 0px 20px 10%;color:#fc0;" id="" class="fontech" >(Busca y haz click sobre cada palabra 'geografia' que encuentres)</div>
	<div style="float:left;width:calc(100% - 100px);padding:1% 0%;font-size:32px;text-align:justify;padding:0px 50px;color:#cff;text-shadow:2px 2px 1px #000;" id="divgeografia" class="fontech" >
		La <span class='geo'>geografia</span> (del latin geographĭa, y este del griego γεωγραφία [geōgraphia],1​ literalmente traducido como «descripcion de la tierra») es la disciplina que trata de la descripcion o de la representacion grafica de la Tierra.1​2​ En sentido amplio es la ciencia que estudia la superficie terrestre, las sociedades que la habitan y los territorios, paisajes, lugares o regiones que la forman al relacionarse entre si.
		La <span class='geo'>geografia</span> moderna es una disciplina cuyo objetivo primordial es la explicacion de toda una serie de fenomenos naturales y sociales y no se refiere solo a la localizacion de esos fenomenos, sino que también estudia como son y como han cambiado para llegar a ser lo que son.
		La <span class='geo'>geografia</span> se divide en dos grandes ramas: <span class='geo'>geografia</span> regional y <span class='geo'>geografia</span> general.
		La <span class='geo'>geografia</span> regional estudia las diferentes subdivisiones del espacio terrestre en paises, estados y regiones a distintas escalas de detalle, desde el analisis geografico de un pequeno valle de montana, hasta el estudio regional amplio de comarcas, paises, naciones o estados, e incluso, espacios multinacionales. Mientras que la <span class='geo'>geografia</span> general se divide en dos grandes ramas: <span class='geo'>geografia</span> fisica y <span class='geo'>geografia</span> humana:
	</div>
	<audio id="myAudio1"><source src="media/ding.mp3"></audio>
	<audio id="song"><source src="media/One-Little,-Two-Little-Indians-.mp3"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('004',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('004',rpta)">Tarea terminada!</button>
	</div>
</body>
<script>
	Array.from(document.querySelectorAll(".geo")).forEach(function(actual,x) { actual.id="actual_"+x;});
</script>	
