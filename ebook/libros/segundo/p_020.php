<script>
var rpta="";
window.parent.carga();
var inicio="";
var final="";
window.onload=function() {
	instructions()
	Array.from(document.querySelectorAll("td")).forEach(function(actual,numero) { 
		actual.id="td_"+(numero+1);
		actual.draggable=true;
		actual.addEventListener("dragstart", function(event) {
			event.dataTransfer.setData("Text", event.target.id);
			inicio=event.target.id;
		});
		actual.addEventListener("dragover", function(event) {
			event.preventDefault();
		});	
		actual.addEventListener("drop", function(event) {
			event.preventDefault();
			final=event.target.id;
			cambia(inicio,final);
		});	
	});
	colores();
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_020.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Ponga en fila las columnas de la izquierda, centro y de la derecha segun lo leido en el articulo.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
}
function restore(cualrpta)	{
	if(cualrpta!="") {
		rpta=cualrpta;
		arrrpta=rpta.split("|");
		Array.from(document.querySelectorAll("td")).forEach(function(actual,numero) { 
			actual.innerText=arrrpta[numero];
		})
	}	
}
function cambia(desde,hasta)	{
	var vdesde=document.getElementById(desde).innerText;
	var vhasta=document.getElementById(hasta).innerText;
	document.getElementById(desde).innerText=vhasta;
	document.getElementById(hasta).innerText=vdesde;
	myaudio.play();
	muestra();
}
function muestra()	{
	tabla=document.getElementById("mitabla");
	rpta="";
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			rpta+=tabla.rows[i].cells[j].innerHTML.trim()+"|";
		}
	}
	console.log(rpta);
}
function colores()	{
	tabla=document.getElementById("mitabla");
	for(var i=0;i<tabla.rows.length;i++){
		for(var j=0;j<tabla.rows[i].cells.length;j++){
			var color="rgba("+(50+200*Math.random())+","+(50+200*Math.random())+","+(50+200*Math.random())+",.85)";
			tabla.rows[i].cells[j].style.background=color;
		}
	}
	console.log(rpta);
}
function respuesta(valor)	{
	var cualrpta=["aridas|semiaridas|subhumedas", "clima|relieve|vegetacion", "deforestacion|agricultura|sobrepastoreo", "petroleo|carbon|gas natural", "metano|CH4|9%", "oxido nitroso|N2O|5%", "bioxido carbono|75%|desde 1750 a actualidad"];
	var total=3*cualrpta.length;
	var ok=0;
	for(k=0;k<cualrpta.length-1;k++)	{
		if(valor.indexOf(cualrpta[k])>-1)	ok++;
	}
	return(String(100*ok/total).formatMoney(2)+"%");
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
	background: url(media/sc.jpg) center center no-repeat;
	background-size: cover;
}	
table								{border:1px solid;font:28px verdana;}
th									{background:#009;padding:10px 0px;color:#fff;}
td									{padding:4px 1px;border-bottom:1px solid #ccc;border-right:1px solid #ccc;}
td:hover 						{background-color: #ccc !important;}
</style>
<body>
<div style="float:left;width:100%;overflow:hidden;text-align:center;font-size:40px;padding:20px;font-family:verdana;font-weight:bold;text-shadow:-2px 1px 1px #0ff,-1px 1px 1px #fff,1px 1px 1px #f00;color:#acf;" id="" class="" >Busque las lineas relacionadas</div>
<table id="mitabla" style="width:100%;border;0px solid;" ondblclick="muestra()">
	<tr><td>oxido nitroso			</td><td>semiaridas		</td><td>5%												</td></tr>
	<tr><td>aridas						</td><td>relieve			</td><td>vegetacion								</td></tr>
	<tr><td>deforestacion			</td><td>agricultura	</td><td>sobrepastoreo						</td></tr>
	<tr><td>bioxido carbono		</td><td>carbon				</td><td>subhumedas								</td></tr>
	<tr><td>metano						</td><td>CH4					</td><td>desde 1750 a actualidad	</td></tr>
	<tr><td>petroleo					</td><td>N2O					</td><td>gas natural							</td></tr>
	<tr><td>clima							</td><td>75%					</td><td>9%												</td></tr>
</table>
<audio id="myaudio"><source src="media/c1.wav"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('020',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('020',rpta)">Tarea terminada!</button>
	</div>
</body>