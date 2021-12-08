<script>
var rpta="";
var ocurrencia=0;
var contador=0;
var contador2=0;
var divanterior="";
window.parent.carga();
function start() {
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_034.png'  style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Speicheranweisungen. Wählen Sie zwei verschiedene Kästchen aus. Wenn der Text darunter übereinstimmt, haben Sie einen Punkt.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arrrpta=cualrpta.split("|");
	for(var k=0;k<arrrpta.length-1;k++){
		if(arrrpta[k]!="")	{
			Array.from(document.querySelectorAll(".divslide")).forEach(function(actual) { 
				divactual=actual.parentElement;
				if(arrrpta[k]==divactual.querySelector(".divspan").innerText)	{
					divactual.querySelector(".divslide").style.display="none";
					divactual.querySelector(".divspan").classList.add("hit");
				}
			});
		}
	}	
}
window.onload=function()	{
	instructions();
	carga();
}
function carga()	{
	arr=["Schlafzimmer","Bad","Wohnzimmer","Hinterhof","Spielzimmer","Studie","Terrasse","Garage","Küche","Esszimmer"];
	var contador=0;
	while (contador<10 || contador2<100)	{
		var valor1=parseInt(Math.random()*20);
		var valor2=parseInt(Math.random()*20);
		var dive1= document.getElementById("dive_"+(valor1<10 ? "0"+valor1 : valor1 ));
		var dive2= document.getElementById("dive_"+(valor2<10 ? "0"+valor2 : valor2 ));
		var divi1= document.getElementById("divi_"+(valor1<10 ? "0"+valor1 : valor1 ));
		var divi2= document.getElementById("divi_"+(valor2<10 ? "0"+valor2 : valor2 ));
		if(divi1.innerHTML=="" && divi2.innerHTML=="" && divi1!=divi2)	{
			divi1.innerHTML="?";
			divi2.innerHTML="?";
			dive1.innerHTML=dive1.innerHTML+"<div class='divspan'>"+arr[contador]+"</div>";
			dive2.innerHTML=dive2.innerHTML+"<div class='divspan'>"+arr[contador]+"</div>";
			contador++;
		}
		contador2++;
	}
	Array.from(document.querySelectorAll(".divslide")).forEach(function(actual) { actual.addEventListener("click", function (e) {
		ocurrencia++;
		if(ocurrencia==3)	{
			ocurrencia=0;
			divanterior="";
			Array.from(document.querySelectorAll(".divslide")).forEach(function(actual) { actual.style.top="0px";});
		} else {
			actual.style.top="80px";
			divactual=actual.parentElement;
			if(divanterior!="" && divanterior.querySelector(".divspan").innerText==divactual.querySelector(".divspan").innerText)	{
				myAudio1.play();
				rpta+=divactual.querySelector(".divspan").innerText+"|";
				divanterior.querySelector(".divslide").style.display="none";
				divactual.querySelector(".divslide").style.display="none";
				
				divanterior.querySelector(".divspan").classList.add("hit");
				divactual.querySelector(".divspan").classList.add("hit");
				
				ocurrencia=0;
				divanterior="";
			} else	{
				divanterior=actual.parentElement;
			}
		}
	});});
}
function respuesta(valor)	{
	var cantidad=valor.split("|").length-1;
	return(String(100*cantidad/10).formatMoney(2)+"%");
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
		width:100%;height:100%;overflow:hidden;
		background:url('media/ho2.jpg') center center no-repeat; 
		background-size: cover;
	}
	.divslide	{
		background:#aaa;
		height:100%;
		width:100%;
		position:absolute;
		top:0px;
		left:0px;
		text-align:center;
		font:bold 72px verdana;
		text-shadow:1px 1px 1px #fff;
		color:#a00;
		z-Index:666;
	}
	.divmemory	{
		float:left;
		height:90px;
		width:90px;
		margin:10px;
		border:1px solid;
		background:#ccc;
		color:#000;
		afont:bold 20px verdana;
		position:relative;
		overflow:hidden;
		box-shadow:1px 1px 10px #000;
		cursor:pointer;
		transition:1s;
		atransform:rotate(45deg);
	}
	.divspan	{
		float:left;
		aposition:absolute;
		abottom:10%;
		padding:40% 0%;
		font:bold 15px verdana;
		text-align:center;
		width:100%;
	}
	.hit	{
		transform:rotate(-30deg);
		background:#f00;
		color:#fff;
		transition:3s;
	}
	.divslide:hover	{
		background:#f99;
		transition:1s;
	}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;padding:20px 0px;font:bold 40px verdana;text-align:center;color:#ccf;text-shadow:1px 1px 1px #009,1px 2px 2px #00f,2px 2px 10px #008;" id="" class="" >ERINNERUNG</div>
	<div style="float:left;width:calc(100% - 100px);height:400px;padding:50px;" id="" class="" >
		<div id="dive_00" class="divmemory"><div id="divi_00" style="" class="divslide"></div></div>
		<div id="dive_01" class="divmemory"><div id="divi_01" style="" class="divslide"></div></div>
		<div id="dive_02" class="divmemory"><div id="divi_02" style="" class="divslide"></div></div>
		<div id="dive_03" class="divmemory"><div id="divi_03" style="" class="divslide"></div></div>
		<div id="dive_04" class="divmemory"><div id="divi_04" style="" class="divslide"></div></div>
		<div id="dive_05" class="divmemory"><div id="divi_05" style="" class="divslide"></div></div>
		<div id="dive_06" class="divmemory"><div id="divi_06" style="" class="divslide"></div></div>
		<div id="dive_07" class="divmemory"><div id="divi_07" style="" class="divslide"></div></div>
		<div id="dive_08" class="divmemory"><div id="divi_08" style="" class="divslide"></div></div>
		<div id="dive_09" class="divmemory"><div id="divi_09" style="" class="divslide"></div></div>
		<div id="dive_10" class="divmemory"><div id="divi_10" style="" class="divslide"></div></div>
		<div id="dive_11" class="divmemory"><div id="divi_11" style="" class="divslide"></div></div>
		<div id="dive_12" class="divmemory"><div id="divi_12" style="" class="divslide"></div></div>
		<div id="dive_13" class="divmemory"><div id="divi_13" style="" class="divslide"></div></div>
		<div id="dive_14" class="divmemory"><div id="divi_14" style="" class="divslide"></div></div>
		<div id="dive_15" class="divmemory"><div id="divi_15" style="" class="divslide"></div></div>
		<div id="dive_16" class="divmemory"><div id="divi_16" style="" class="divslide"></div></div>
		<div id="dive_17" class="divmemory"><div id="divi_17" style="" class="divslide"></div></div>
		<div id="dive_18" class="divmemory"><div id="divi_18" style="" class="divslide"></div></div>
		<div id="dive_19" class="divmemory"><div id="divi_19" style="" class="divslide"></div></div>
	</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('034',rpta)">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('034',rpta)">Aufgabe erledigt!</button>
	</div>
	<audio id="myAudio1"><source src="media/ding.mp3"></audio>
</body>
<script>
</script>