<?
session_start();
header("Content-Type: text/html; charset=UTF-8");
?>
<head>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	
<!--	
<script type="text/javascript" 	src="../lib/jquery.touch.js"></script>
<script type="text/javascript" 	src="../lib/jquery.cookie.js"></script>
<script type="text/javascript" 	src="../lib/jquery.blockUI.js"></script>
-->
<script>
// window.onerror = function(msg, url, linenumber) {alert('Error : '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);return true;}
var cual;
$(function() {
	//$.cookie("reglaregla",null);
	cual=getIframeID();
	$(".btn").button();
	refresca();
});
function anadir()	{
	top.popup('reglaame.php?cual='+cual+'&modo=a&id=','ANADIR regla','0100','0100','0180','0400');
}
var arrcampos=[
	["alumno","alumno","left","10"], 
	["paterno","paterno","left","10"], 
	["materno","materno","left","10"], 
	["nombres","Nombres","left","30"]
];
function refresca()	{
	console.log( "I:"+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()); 
	x=top.document.getElementById(cual);
	// $.blockUI({ message: "<h1><img src='./imagenes/ajax-loader2.gif' > Refrescando...</h1>" }); 
	parametros="modo=get&&modoarchivo=alumno&pagina="+($("#cmbpagina").val()==null ? 1 : $("#cmbpagina").val() );
	$.ajax({ url: 'clase.php', type: 'POST', async:true, data: parametros, dataType: 'json', 
		success: function(msg){
			var rpta="";
			rpta+="<table id='reglaregla' class='reglagrilla' border='0' cellpadding='0' cellspacing='0' >";
			rpta+="<thead>";
			rpta+="<th class='ui-widget-header threglagrilla' style='width:250px;min-width:150px;'  >&nbsp;";
			rpta+="</th>";
			for(x=0;x<arrcampos.length;x++)	{
				rpta+="<th class='ui-widget-header threglagrilla' style='width:"+arrcampos[x][3]+"0px;min-width:"+arrcampos[x][3]+"0px;' ondblclick=\"opcionorden('"+arrcampos[x][0]+"')\" title='"+arrcampos[x][0]+"'>";
				rpta+="<div>"+arrcampos[x][1]+"</div>";
				rpta+="<div><input type='text' class='busqueda' id='txt_"+arrcampos[x][0]+"' style='width:90%;' onblur='checkfiltros(\""+arrcampos.join("|")+"\")'></div>";
				rpta+="</th>";
			};
			rpta+="<th class='ui-widget-header threglagrilla'>&nbsp;</th></thead>";
			rpta+="<tbody>";
			for(k=0;k<(msg.length);k++)	{
				rpta+="<tr ondblclick='colorfila("+msg[k].regla+")'  id='tr_"+msg[k].regla+"'>";
				rpta+="	<td class='tdreglagrilla e_"+msg[k].prioridadmaxima+"' style='width:250px;min-width:150px;'>";
				rpta+="	<button class='grilla modificar' id='btnmenu_m_"+msg[k].regla+"' title='Click aqui para editar'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAUCAYAAACAl21KAAAABmJLR0QA7wDvAO/BzIMFAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wQRERQzvgPtZAAAAB1pVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAAD0ElEQVQ4y4WUXWwUVRiGn+/MbLvLdLu7rZZusSk/BYwCKgavwBpiwBiFRkKNIf4BJvbGnwQ1Gi8wxJBoiJHEn2hQuTDeGELECEklFkwTUcRCoRQawWbBLdvuzLLd7jA77BwvhiJFEr/k5Ds35/ne782bI4ODgzFrhoXWAZr/KQ0I+EFAsOOVO71RY085c3FTtL7hsBmJRHqUqQADARAJO+GjGy8CiBFD53qo7Tg2I7+rebbOZA/mJ89skUwmo82aCIZhICK3PggIKCOK5wxQO9LN3t5LfPp5oDc4jqTKPibCfyAAShSiBNGglAIx8Ut/UZd9g94/Jtj2lYHrF0luLNFw6e6TpjB9ulIKxXQlIkLVL2COvsfp80W2fFzFLbt68+qiLH94kefVrHvSFJFwMiHEEDVdmVLowIexrxkfHeLVDytMliusXGLLxs4WyjUrXpxcuXVQTa1xM2RKnYhJYO+n/PcB3t0dYXhkgvvaxtneHSdrbrCP2OsHlipBXV/nJoiIYJgxruYPIPY+Pvk+zr6fLrBsnsP73T75Gc/iWp3SaHkGgBkqCle7GeLbvdT5vez8IcKX3/7O4rYiW5+xKdY9RzHSSX08isICwBQRlKgwJ9cgplmDXxrC8g7zTU+Fnbv6mFl/hbeeymM0PkaGJ7gjmSCZTKJ1EHo5BQj9CHvg5zGK+zl01GHbBz8Sq63y0toCc9oXc9ZbR108SXNzM5ZlobW+Fpdp5hqIrlAd28Pg6WHe3vEzvu+zaVWRRx+8nd/Gu4jEZtLa2kpjYyMicmsQQPXiZ1wa+ZV3dh7jzxGHzatLbHxc6Dm/FlfmMmd2Ky0tLWFIbyjz39UMJot5yrkhtmw/wi8nPJ5f5dLdWea70+txWMji9ibS6TS+7+P7Pp5XiQQYxjSQKINJ+xzO1buI1A7w0JICr3UV2XvyES6682lvb2DWrFk4jkOpVAIEszZ6sHTZHrwOAsGvXKEw1k8hd5wX1pi0NsTpH7uHy8YKFi2aS1tbG4VCQedyOUmlUtX6+vpDZ0+deHrd+q6JZDIZgkzT4OTAcY729TGvxSPWtJxx636aFyxhactMlFJkMhnteRXp6OjAdSd3NzU1bwLIZrOk0+kwRwDH+vs5dSHBqjVdNKTvpS6eQAlorXEcR+fztsRiUWw7/8Xw8LmXp0xOp9NorZFcLqdTqRSjo1ksK04ylZz2pwVBgG3nGTpzhkhNzUcNicSb8xcsnPB9H9M0DaCqlMJ0XVdHo1FJJJJorSlNTFxPOYSKrlSCqpW4bVdpLPP6/GUPuKEdIWRK2T+NWoSNpDrMQgAAAABJRU5ErkJggg=='/></button>&nbsp;";
				rpta+="	&nbsp;";
				rpta+="	<button class='grilla eliminar' id='btnmenu_e_"+msg[k].regla+"' title='Click aqui para borrar'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAASCAYAAACEnoQPAAAABmJLR0QA7wDvAO/BzIMFAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3wQRERAP9QBU5wAAAB1pVFh0Q29tbWVudAAAAAAAQ3JlYXRlZCB3aXRoIEdJTVBkLmUHAAAB3ElEQVQ4y+VSsWobURCc3Xs6mTufyKkIBIFxc5XPuHJlhCG4EKlc5AcC/oGQD0iTfwmJehFMrCICNTJuQiqBixOpgkWQBNK9e283TexcXMSElJlqGWZgdhjC76DBYHDaarW6zMw13qrqh6Ojo2FdbM7Pz6nT6aSqKmEYemvtrqoeAjA13QbA5+l0GlprI1VFnuffaTab7Trn3gOYG2MWzPzVOSeq+isOEcIwFBF5Yq19TESWiF6a7e3t1wAO8QBUFUSEKIpARFitVo9oPp8rEeFvQERYLpcwV1dXH/f3911Zlut61D95gyCIyrJkMxwOXzBzJ8uy0ziOGQCccyAiGGNQVdXtzxARqqpqs1gs3q7X6wUBQL/ff3Z8fPyuKApaLpeS5zmstRiNRjg5OYH3HpPJBO12O9jb21uJyNM0Tb/w2dkZMXPAzFtFUcTT6TQRkWSz2STj8ThR1cRam1xeXibX19cRM2+panBzc4P6EFREICJ37d7e94u/LY3xD/gPzHp/rlxflfce3vs7wjkHVYWqoqoqcs4BAP1cGUyj0QCAyHvfyLJMd3Z2yBiDOI7R6/VARGg2m+h2u2i32xARISJRVRAAXFxcbB0cHLxi5jcPxCYi+gTgeZqm334AUbnr/cghTP4AAAAASUVORK5CYII=' /></button>&nbsp;";
				rpta+="	</td>";
				for(x=0;x<arrcampos.length;x++)	{
					rpta+="	<td id='td_"+k+"_"+x+"' class='tdreglagrilla "+msg[k].calificacion+"' style='width:"+arrcampos[x][3]+"0px;min-width:"+arrcampos[x][3]+"0px;background:linear-gradient(to bottom, "+msg[k].color2+",rgba(255,255,255,.5),rgba(255,255,255,.5),rgba(255,255,255,.5),"+msg[k].color2+");color:"+msg[k].color+";' ><div id='tddiv_"+k+"_"+x+"' style='text-align:"+arrcampos[x][2]+";overflow:hidden;height:20px;width:"+arrcampos[x][3]+"0px;min-width:"+arrcampos[x][3]+"0px;background:linear-gradient(to bottom, "+msg[k].color2+",rgba(255,255,255,0),"+msg[k].color2+");color:"+msg[k].color+";'>"+eval("msg[k]."+arrcampos[x][0]+".trim()")+"&nbsp;</div></td>";
				};
				rpta+="<td>&nbsp;</td>";
				rpta+="</tr>";				
			};
			rpta+="</tbody>";
			rpta+="</table>";
			paginas="";
			if(msg.length>0)	{
				// $("#qcantidad").html(msg[0].q+" de "+msg[0].qt+" registros");
				pagina=$("#cmbpagina").val();
				$("#cmbpagina").find('option').remove().end();
				for(k=0;k<(msg[0].q/$("#limite").val());k++)	{
					paginas+="<option "+(k+1==pagina ? "selected" : "" )+" value='"+(k+1).toString()+"'>"+(k+1).toString()+"</option>";
				}
				$('#cmbpagina').append(paginas);
			}
			$("#grilla").html(rpta);
			//nuevo
			var arr=$("#filtrar").val().replace(/'/gi,"").replace(/!/gi,"").split("|");
			for(k=0;k<arr.length;k++)	{
				$("#txt_"+arr[k].split("@")[0]).val(arr[k].split("@")[1]);
			}	
			$( "#reglaregla th" ).resizable({
				handles:'e',
 				stop: function(e, ui) { 
					columna=$(this).parent().children().index($(this));
					$('#reglaregla th').eq(columna).css({'min-width':ui.size.width+'px','width':ui.size.width+'px'});
					for(k=0;k<$("#reglaregla tr").length;k++)	{
						$("#reglaregla tr:eq("+k+") td:eq("+columna+")").css({'min-width':ui.size.width+'px','width':ui.size.width+'px'});
						$("#reglaregla tr:eq("+k+") td:eq("+columna+")").find("div").css({'min-width':ui.size.width+'px','width':ui.size.width+'px'});
					};
					var buffer="";
					$("#reglaregla tr:nth-child(1) td").each(function () {
						buffer+=$(this).css('width')+"|"; 
					});
					$.cookie("reglaregla", buffer.replace(/px/gi,"")); 
					//console.log("graba Cookie:"+buffer.replace(/px/gi,""));
				} 
			}); 
			if($.cookie("reglaregla")!=null)	{
				//console.log("lee Cookie:"+$.cookie("reglaregla"));
				arr=String($.cookie("reglaregla")).split("|");
				contador=0;
				$("#reglaregla tr:nth-child(1) td").each(function (columna, el) {	
					if(typeof arr[contador]=="undefined")	arr[contador]="400";
					$('#reglaregla th').eq(columna).css({'min-width':arr[contador]+'px','width':arr[contador]+'px'});
					for(k=0;k<$("#reglaregla tr").length;k++)	{
						$("#reglaregla tr:eq("+k+") td:eq("+columna+")").css({'min-width':arr[contador]+'px','width':arr[contador]+'px'});
						$("#reglaregla tr:eq("+k+") td:eq("+columna+")").find("div").css({'min-width':arr[contador]+'px','width':arr[contador]+'px'});
					};
					contador++;
				});
			};
			$('.grilla').button().click(function( event ) {
				arreglo=this.id.split('_');
				if (arreglo[1]=='f')	{
					//if($("#tipopersona").val()=="cliente") {top.popup("personafichacliente.php?persona="+arreglo[2],"FICHA CLIENTE","0100","0100","0720","0860") };
					//if($("#tipopersona").val()=="corredor") {top.popup("personafichacorredor.php?persona="+arreglo[2],"FICHA CORREDOR","0100","0100","0720","0860") };
					//if($("#tipopersona").val()=="propietario") {top.popup("personafichapropietario.php?persona="+arreglo[2],"FICHA PROPIETARIO","0100","0100","0720","0860") };
					top.popup("personafichacliente.php?persona="+arreglo[2],"FICHA PERSONA "+arreglo[2],"0100","0100","0720","0860");
				};
				if (arreglo[1]=="m")	{top.popup("reglaame.php?cual="+cual+"&modo=m&id="+arreglo[2],"EDITAR regla","0100","0100","0180","0400") };
				if (arreglo[1]=="e")	{eliminar(arreglo[2])};
				event.preventDefault();
			});
			$("#reglaregla tbody").height(top.document.getElementById(getIframeID()).height-150);
			if($("#tipopersona").val()=="")	$(".clasetipo").hide();
			accesos();
			$(".busqueda, #filtrogeneral").keypress(function(event) { if (event.keyCode == 13) { checkfiltros(arrcampos.join("|"));refresca();} });
			// $.unblockUI(); 
			console.log( "F:"+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()); 
			//nuevo
		},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}
	});
}
function checkfiltros(cual)	{
	var arrcampos=cual.split("|");
	var buffer="";
	for(k=0;k<arrcampos.length;k++)	{
		var campo=arrcampos[k].split(",")[0];
		//var campo=arrcampos[k];
		valor=$("#txt_"+campo).val();
		if(valor!="")	buffer+=campo+"@'!"+valor+"!'|";
	}
	$("#filtrar").val(buffer.substr(0,buffer.length-1));
}
function colorfila(cual)	{
	if ($("#tr_"+cual).hasClass('activo')) {
		$("#tr_"+cual).removeClass('activo');
	} else {
		$("#tr_"+cual).addClass('activo');
	}
}
function accesos()	{
	// var accesos="";
	// parametros="modo=set&menu=persona.php&perfil=<?=$_SESSION["clienteperfil"];?>";
	// $.ajax({ url: "claseperfil.php", type: "POST", async:false, data: parametros, dataType: "json", 
		// success: function(msg){
			// accesos=msg[0].propietario+"_"+msg[0].a+"_"+msg[0].m+"_"+msg[0].e+"_"+msg[0].otro;
			// if(msg[0].a!="s")	$(".anadir").hide();
			// if(msg[0].m!="s")	$(".modificar").hide();
			// if(msg[0].e!="s")	$(".eliminar").hide();
		// },error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText);}
	// });
	// return(accesos);
}
function f(cual)	{	 return(cual.indexOf("/")<0 ? (cual=="" ? "" : cual.substr(6,2)+"/"+cual.substr(4,2)+"/"+cual.substr(0,4)) : cual.substr(6,4)+cual.substr(3,2)+cual.substr(0,2) )}
function opcionorden(cual)	{	 
	if($("#orden").val()==cual) { $("#orden").val(cual+" desc"); } else { $("#orden").val(cual); }; 
	refresca();
}
function eliminar(cualid)	{
	if(confirm("Desea eliminar este registro "+cualid+" ?"))	{
		//alert("registro eliminado");
		parametros="modo=e&regla="+cualid;
		$.ajax({ url: 'claseregla.php', type: 'POST', async:false, data: parametros, dataType: 'html', 
			success: function(msg){
				if(msg.length>10) alert(msg);
				refresca();
			},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText);}
		});
	}
}
function getIframeID()	{
	var myTop = top;
	var myURL = location.href;
	var iFs = top.document.getElementsByTagName('iframe');
	var x, i = iFs.length;
	while ( i-- ){
		x = iFs[i];
		if(myURL.indexOf(x.src)>=0)	return (x.id);
		if (x.src == myURL)			return (x.id);
	}
	//alert(x.src);
	return("");
}
</script>
<style>
#reglaregla { border-collapse: collapse;table-layout: fixed;} 
#reglaregla thead { text-align:left; display: table; float: left; width: 100%; } 
#reglaregla thead tr { display: table-row; width: 100%;font:12px arial; } 
#reglaregla tbody { display: block; height: 300px; overflow: auto;overflow-x: hidden; float: left; width: 100%; background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAGCAYAAADgzO9IAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAO0lEQVQI12MsKipqZMACWBgYGBhev36NIigqKsrABON8+fKF4cuXL3BJJgYcgAXG4OHhwZQQFRXF0AEAd80LBGYNnL0AAAAASUVORK5CYII=) #000;} 
#reglaregla tbody tr { display: table; width: 100%;background: #fff;height: 18px; } 
#reglaregla tbody tr:hover { background: #bbb; color: #000; }
#reglaregla th { border:1px solid #ccc; } 
#reglaregla  td { border:1px solid #ccc; background:linear-gradient(to bottom, rgba(128,128,128,.3),rgba(128,128,128,.1),rgba(128,128,128,.3)); }
.tdcabecera	{background: #999;color:#fff;}
.ui-autocomplete { height: 100px; overflow-y: scroll; overflow-x: hidden;}
.estafador	{background:#f00;}
#reglaregla div {height:18px;overflow:hidden;}
div.button2 { background: #ffffff; padding: 6px 8px 6px 8px; font-size: 12px; font-weight: bold; display: inline; color: #888888; border: 1px solid #cccccc; border-radius: 32px; font-family: Arial, sans-serif; cursor: pointer; text-decoration: none; background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); } 
div.button2:Hover { border: 1px solid #000 !important; color: #000 !important; box-shadow: 0px 0px 5px #999; } 
.activo	{background:#fa9 !important;}.afondopiedra		{background:url(data:image/png;base64,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) #fda;}
.afondopiedra	{background:url(data:image/gif;base64,R0lGODlhDAAMAHAAACH5BAlkAAEALAAAAAAMAAwAgAAAAAAAAAITRIynmt28noOPUgntxEYzHnlAAQAh+QQJZAABACwAAAAADAAMAID///8AAAACEwyMp5rdvJ6Dj1IJ7cRGMx55QQEAIf8LTkVUU0NBUEUyLjADAQAAADs=) #a60;}
</style>
</head>
<body class='fondopiedra' style='background:#ddd'>
<div class='' style="float:left;width:50%;">
	<input type="text" id="limite" value="30" style="width:50px;" title="Numero de registros por pagina" readonly>
	G:<input type="text" id="filtrogeneral" style="width:30%;" placeholder="Parametro de busqueda">
</div>
<div style="float:left;text-align:right;width:50%;">
	<button class="btn" title="Click aqui para ingresar" onclick="anadir()"><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAArElEQVQ4y62UMQ7DMAhFAWWvrNZSb9SxWXvCrMmYG0VyqqgnSCck+9fEruI/YngGBDAZcr3fc/ZtDJyzcy2gBGQL4p4+D5hCFsZHkM/8TiCXx9WESSmTdVhoHZa0/MhHY8VyKAl9RYn/QBDmer938QP2BGX1jIioQ2fsh2W/ve5padRIPxnhT5oJ2g9Bcc2lnqBEByoeslppzDYGFmv8ayHNV6T90jY9I2cO2xdG0WDv0ssbeAAAAABJRU5ErkJggg==' ></button>
	<button class="btn" id="btnsistemaperfilreload" title="Click aqui para refrescar" onclick="refresca()"><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAADIElEQVQ4y41UwUtqeRT+7h3RG14kbqZo7SoqWlWjRYsWiUTRFNIiolWL6S2D/oAZegS1dVXzCoIW5SYoZCQ3TpAQ2vMWVARdKYq0sJumkt7qds8sZnSmNz2ZD35wOOf7fefwHX4/Bh+gWCzO7u7u/pLL5cCyLABA0zQwDIOenp7P9fX1v357h/k2sbGx8ZXjOHtHR4eN53kwzD8UVVVxdnZ2e35+nhwcHFyuq6v7rVTTlYJsNvvT6urqUGtra6fRaITFYgHHce+aaJqGhoYGW21tre3o6AjRaDTpdDr970jBYNAfDAYpn89TJaiqSs/PzxSJRCgQCPglSeosT7S1tdWRSCSGJiYmoNfrP7INhUIBiUQCDw8PUFUV1dXVkCRp6O7u7hbAFP4WoouLi4qTHBwckMvlIr1eTyzLUlNTEy0tLZHX66Vyt8XFRdI0jYiI3t7eSFXVdyKiKBLP8wSAGIYhnU5Xjl0uF8XjcWIVRflkMBgAAMlkEqOjo3C73djb2wPRX83W1tZQKBRgt9uxubmJUCiEgYEBEBFisRiOj4/Bqqr6c8mXp6cnZDIZ7O/vIxwOl1d/cnICTdPQ0tKCvr4+dHd3w+12l7aN+/t76BiGYbLZLADAaDSit7cXj4+PEAQBAKAoCq6ursqGx+Nx8DyPVCoFACAi6HQ66AwGw/L19fWioiiwWq0YGRmBIAjweDzQNA2np6e4ubkBAIiiiJWVFVgsFqyvrwMAWJaF1Wq9BQBMTU3R4eHhfzaVz+dpeHiYAHz3cBxHsizPAgAikQj19/eTz+ejQCBA29vbND8/T42NjRVFAND09DT9+4n82N7e/tXv98NkMiEcDiOdTkOWZVRCc3MzxsbGlr1eL1gA6OrqivE8/6mmpgbRaBSXl5dIpVJ4eXmpKDI+Pv57W1vbFwD4oVQIhUIxj8dj1+v1nblcDpqmwWw2g+d5EBFeX18BAIIgwOl0wmQyfVlYWPCZzeY/PvxGRFGMzc3NQZZlW7FYtJXy6XQaVVVVYBhGnJmZweTkZCf+DzKZzOzOzg45HA5yOBzk8/lIkiT6Hv9PLmPhv7aWr1AAAAAASUVORK5CYII='></button>
</div>
<div style="clear:both;"></div>
<div id="grilla" style='overflow:auto;'></div>
<div id="qcantidad" style="float:left;width:50%;"></div>
<div style="float:right;width:10%;height:10%;text-align:right;">
<select size="1"  name="cmbpagina" id="cmbpagina" onchange="refresca()"><?=$paginas;?></select>
</div>
<div style="width:100%;display:none;">
	<input type="text" id="filtrar" value="" style="width:50%;" ondblclick="refresca()">
	<input type="text" id="orden" value="nombre">
</div>
</body>
