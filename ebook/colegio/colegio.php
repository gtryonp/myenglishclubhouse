<script>
window.onload = function () { 
	cargadatos()
}
function cargadatos()	{	
	var xr = new XMLHttpRequest();xr.open("POST", "clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	
		msg=JSON.parse(xr.responseText);
		if(msg.length>0)	{
			Object.keys(msg[0]).forEach(function(key) {
				if(document.getElementById(key)!=null)	document.getElementById(key).value=msg[0][key];
			})			
		}
	}};
	xr.send("modo=get&modoarchivo=colegio&llavecampo=colegio&llavevalor=1");
}

function grabar()	{
	var parametros=""; 
	Array.from(document.querySelectorAll('input')).forEach(function(actual) { parametros+=actual.id+"="+actual.value+"&";});
	var xr = new XMLHttpRequest();xr.open("POST", "clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	
		alert("Datos grabados");
		Array.from(top.document.querySelectorAll('iframe')).forEach(function(y) { 
			if(y.src.indexOf("colegio.php")>-1)	{
				cualdiv=top.document.getElementById(y.id.substring(1));
				top.document.body.removeChild(cualdiv);
			}
		});
	}};
	xr.send("modo=grabar&modoarchivo=colegio&llave=colegio&"+parametros);
}
</script>	
<style>
	body		{font:14px verdana;}
	div			{padding:2px 0px;}
	button	{width:50%;font:bold 14px verdana;margin:10px 0px;padding:10px 0px;}
	input		{width:90%;}
</style>

<body>
	<div style="float:left;width:100%;text-align:right;" id="" class="" ><img src="../media/colegio_1.png" style="height:160px;width:160px;margin:10px 50px;">	</div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Nombre:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="nombre"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Clave:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="password" id="clave"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Correo:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="correo"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Contacto:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="contacto"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Celular:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="celular"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Direccion:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="direccion"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Estado:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="estado"></div></div>
	<div style="float:left;width:100%;" class=""><div style="float:left;width:40%;overflow:hidden;" class="" >Comentario:</div><div style="float:left;width:60%;overflow:hidden;" class="" ><input type="text" id="comentario"></div></div>
	<div style="float:left;width:100%;text-align:right;" class=""><button onclick="grabar()">Grabar</button></div>
	<input type="hidden" id="colegio" value="1">
</body>


