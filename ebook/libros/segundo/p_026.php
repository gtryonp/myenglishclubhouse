<script>
var rpta="";
window.parent.carga();
window.onload=function() {
	instructions();
}
function start() {
	Array.from(document.querySelectorAll(".seleccion")).forEach(function(actual) { actual.addEventListener("change" , function (e) {	
		rpta="";
		Array.from(document.querySelectorAll(".seleccion")).forEach(function(actual)	{
			rpta+=actual.id.split("c_").join("")+":"+actual.value+"|";
		})
	})});
	n0.play();
	n0.addEventListener('ended' , function() {this.currentTime = 0;this.play();} , false);
}
function stop() {
	n0.src="";
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top rgba(194 115 36 0)  rgba(194 115 36 1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff 3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_026.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:20px 50px;' id='' class='' >Resuelva esta trivia con lo aprendido de la distribucion de la poblacion.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255 0 0 .5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí  la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y  si no está seguro de si está listo para realizar la tarea  NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top rgba(194 115 36 1)  rgba(194 115 36 0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff 3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
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
	"1:clima relieve hidrografía suelo vegetacion" ,
	"2:zonas templadas del planeta con periodos largos de lluvia" ,
	"3:altiplanicies  llanuras y mesetas" ,
	"4:Egipto  Mesopotamia  Irak" ,
	"5:recursos naturales  fuentes de trabajo  centros educativos  servicios publicos  estabilidad politica" ,
	"6:Poblacion absoluta  Poblacion relativa" ,
	"7:Ganges  Mississippi  Parana" ,
	"8:Argentina" ,
	"9:Grupo de personas asentados en un lugar" ,
	"10:Agricultura"];
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
html body	{
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
<div style="float:left;width:100%;overflow:hidden;;background:rgba(109 253 137 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">La distribución de la población se ve afectada por: </div>
	<div style="float:left;width:30%;overflow:hidden;" id="">
		<select class="seleccion"  id="c_1">
			<option value="asteroides relieve hidrografía suelo vegetacion">asteroides relieve hidrografía suelo vegetacion</option>
			<option value="clima relieve hidrografía suelo vegetacion">clima relieve hidrografía suelo vegetacion</option>
			<option value="clima relieve hidrografía fuego vegetacion">clima relieve hidrografía fuego vegetacion</option>
			<option value="clima relieve hidrologia suelo vegetacion">clima relieve hidrologia suelo vegetacion</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Las áreas más pobladas del mundo se localizan en:</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_2">
			<option value="zonas frias del planeta con periodos largos de lluvia">zonas frias del planeta con periodos largos de lluvia</option>
			<option value="zonas templadas del planeta sin periodos largos de lluvia">zonas templadas del planeta sin periodos largos de lluvia</option>
			<option value="zonas templadas del planeta con periodos largos de lluvia">zonas templadas del planeta con periodos largos de lluvia</option>
			<option value="zonas templadas del planeta con periodos cortos de lluvia">zonas templadas del planeta con periodos cortos de lluvia</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Areas más pobladas?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_3">
			<option value="altiplanicies  llanuras y mesetas">altiplanicies  llanuras y mesetas</option>
			<option value="altiplanicies  llanuras y acantilados">altiplanicies  llanuras y acantilados</option>
			<option value="altiplanicies  desiertos y mesetas">altiplanicies  desiertos y mesetas</option>
			<option value="cuestas  llanuras y mesetas">cuestas  llanuras y mesetas</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Ejemplo de civilizaciones antiguas cercanas a rios?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_4">
			<option value="Egipto  Bagdad  Inca">Egipto  Bagdad  Inca</option>
			<option value="Nilo  Eufrates  Irak">Nilo  Eufrates  Irak</option>
			<option value="Egipto  Bagdad  Eufrates">Egipto  Bagdad  Eufrates</option>
			<option value="Egipto  Mesopotamia  Irak">Egipto  Mesopotamia  Irak</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">factores socioeconómicos que influyen en la densidad de la población?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_5">
			<option value="recursos naturales  fuentes de trabajo  centros educativos  servicios publicos  estabilidad politica">recursos naturales  fuentes de trabajo  centros educativos  servicios publicos  estabilidad politica</option>
			<option value="recursos naturales  oro  centros educativos  servicios publicos  estabilidad economica">recursos naturales  oro  centros educativos  servicios publicos  estabilidad economica</option>
			<option value="recursos naturales  oro  centros educativos  servicios publicos  estabilidad politica">recursos naturales  oro  centros educativos  servicios publicos  estabilidad politica</option>
			<option value="Ninguna Anterior">Ninguna Anterior</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Para calcular el tamaño de la población  índices usados:</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_6">
			<option value="Poblacion absoluta  Poblacion relativa">Poblacion absoluta  Poblacion relativa</option>
			<option value="Poblacion neta  Poblacion bruta">Poblacion neta  Poblacion bruta</option>
			<option value="Centros educativos  estabilidad politica">Centros educativos  estabilidad politica</option>
			<option value="cuestas  llanuras y mesetas">cuestas  llanuras y mesetas</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Nombres de valles fluviales?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_7">
			<option value="Ganges  Mississippi  Parana">Ganges  Mississippi  Parana</option>
			<option value="Ganges  Rimac  Parana">Ganges  Rimac  Parana</option>
			<option value="Ganges  Mississippi  Po">Ganges  Mississippi  Po</option>
			<option value="Ganges  Rimac  Po">Ganges  Rimac  Po</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Donde queda el Parana?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_8">
			<option value="Paraguay">Paraguay</option>
			<option value="Argentina">Argentina</option>
			<option value="Chile">Chile</option>
			<option value="Venezuela">Venezuela</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Que es la poblacion?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_9">
			<option value="Conjunto de personas de distinto idioma">Conjunto de personas de distinto idioma</option>
			<option value="Conjunto de factores geograficos">Conjunto de factores geograficos</option>
			<option value="Grupo de personas asentados en un lugar">Grupo de personas asentados en un lugar</option>
			<option value="Grupo de personas migrantes">Grupo de personas migrantes</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125 220 245 0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Los suelos con abundante materia orgánica favorecen la?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_10">
			<option value="Poblacion">Poblacion</option>
			<option value="Distribucion">Distribucion</option>
			<option value="Agricultura">Agricultura</option>
			<option value="Ganaderia">Ganaderia</option>
		</select>
	</div>	
</div>	
<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
	<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('026', rpta)">Guardar para despues</button>
	<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('026', rpta)">Tarea terminada!</button>
</div>
<audio id="n0"><source src="media/ag01.wav"></audio>
</body>