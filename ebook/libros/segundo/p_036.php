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
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_036.png'  style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >presiona el boton comenzar a grabar y lee en voz alta el parrafo marcado en rojo. Al terminar de leerlo, presione el boton Terminar de grabar!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
/*GFTP_20200814		//		if(cualrpta!="")	rpta=cualrpta;^^	arrrpta=cualrpta.split("|");^^	for(var k=0;k<arrrpta.length-1;k++){^^		if(arrrpta[k]!="")	{^^			Array.from(document.querySelectorAll(".divslide")).forEach(function(actual) { ^^				divactual=actual.parentElement;^^				if(arrrpta[k]==divactual.querySelector(".divspan").innerText)	{^^					divactual.querySelector(".divslide").style.display="none";^^					divactual.querySelector(".divspan").classList.add("hit");^^				}^^			});^^		}^^	}	*/
	if(cualrpta!="")	rpta=cualrpta;
	document.getElementById("txt").value=rpta;
}
window.onload=function()	{
	instructions();
	carga();
}
function respuesta(valor)	{
	var data="Cuando llegaron los españoles al Perú dividieron su territorio en tres grandes regiones la Costa que está ubicada al lado del Océano Pacífico la Sierra que está rodeada de las grandes alturas andinas y la Montaña o Selva que está ubicada en las frondosas selvas de la Amazonia Peruana";
	var arr=valor.split(" ");
	var cantidad=0;
	for(k=0;k<arr.length;k++)	{
		if(arr[k].length>1 && data.indexOf(arr[k])>-1)	cantidad++;
	}
	return(String(100*cantidad/data.split(" ").length).formatMoney(2)+"%");
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
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var recognition = new SpeechRecognition();
var recognizing;
var espc=mobileAndTabletCheck();
var $_GET = {};			
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});

function carga() {
	/*GFTP_20200814		//	if($_GET['singasong']>0)	{^^	var xhReq = new XMLHttpRequest();^^	xhReq.open("POST", "clasesingasong.php", true);^^	xhReq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');		^^	xhReq.onreadystatechange = function() {^^		if(xhReq.readyState == 4 && xhReq.status == 200) {^^			document.getElementById("txt").value=xhReq.responseText;^^		}^^	};^^	xhReq.send("modo=obtener&singasong="+$_GET['singasong']);^^*/		
	recognition.continuous = true;
	recognition.interimResults = true;
	recognition.lang = 'es-PE';
	reset();
	recognition.onend = reset;
	recognition.onresult = function (event) {
		var final = "";
		var interim = "";
		for (var i = 0; i < event.results.length; ++i) {
			// document.getElementById("txt").value=document.getElementById("txt").value+" \n "+event.results[i].isFinal+" "+espc+" "+i+" "+event.results[i][0].transcript;
			if (event.results[i].isFinal) {
				if(!espc)	final += event.results[i][0].transcript;
				if(espc)	final = event.results[i][0].transcript;
			} else {
				if(!espc)	interim += event.results[i][0].transcript;
				if(espc)	interim = "";
			}
		}
		final_span.innerHTML = final;
		document.getElementById("txt").value=final;
		rpta=final;
		
		interim_span.innerHTML = interim;
	}
}

function reset() {
	recognizing = false;
	document.getElementById("start").innerHTML = "Comenzar a grabar";
}
function toggleStartStop() {
	if (recognizing) {
		document.getElementById("restart").disabled=false;
		// document.getElementById("fix").disabled = false;
		document.getElementById("play").disabled = false;
		recognition.stop();
		reset();
		// alert(document.getElementById("txt").value+" / "+document.getElementById("final_span").innerHTML+" / "+document.getElementById("interim_span").innerHTML);
		// document.getElementById("txt").value="->"+document.getElementById("txt").value+" "+document.getElementById("final_span").innerHTML+document.getElementById("interim_span").innerHTML;
		document.getElementById("final_span").innerHTML="";
		document.getElementById("interim_span").innerHTML="";
		// var xhReq = new XMLHttpRequest();
		// xhReq.open("POST", "clasesingasong.php", true);
		// xhReq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');		
		// xhReq.onreadystatechange = function() {
			// if(xhReq.readyState == 4 && xhReq.status == 200) console.log(xhReq.responseText);
			// rpta=xhReq.responseText;
		// };
		// xhReq.send("modo=grabar&email="+document.getElementById("email").value+"&cadena="+document.getElementById("txt").value);
	} else {
		document.getElementById("restart").disabled=true;
		// document.getElementById("fix").disabled = true;
		document.getElementById("play").disabled = true;
		recognition.start();
		recognizing = true;
		document.getElementById("start").innerHTML = "Terminar de grabar";
		interim_span.innerHTML = "";
	}
}
function fixone()	{
	document.getElementById('final_span').innerHTML ='';
	document.getElementById('interim_span').innerHTML ='';
	var speech=document.getElementById('txt').value.trim().split(" ");
	document.getElementById('txt').value="";
	for(k=0;k<speech.length-1;k++)	{
		document.getElementById('txt').value+=speech[k]+" ";
	}
} 
function limpiar()	{
	document.getElementById('txt').value='';
	document.getElementById('final_span').innerHTML ='';
	document.getElementById('interim_span').innerHTML ='';
	Array.from(document.querySelectorAll(".claseplayno")).forEach(function(actual) { actual.style.display="";});
	Array.from(document.querySelectorAll(".claseplaysi")).forEach(function(actual) { actual.style.display="none";});	
}
function playtune()	{
	Array.from(document.querySelectorAll(".claseplayno")).forEach(function(actual) { actual.style.display="none";});
	Array.from(document.querySelectorAll(".claseplaysi")).forEach(function(actual) { actual.style.display="";});
	if (window.speechSynthesis) {
		let u = new SpeechSynthesisUtterance();
		u.lang = "es-Spanish";
		u.text = document.getElementById('txt').value;
		u.rate = 0.4;
		speechSynthesis.speak(u);
	}	
}
function mobileAndTabletCheck() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};


</script>
<style>
	html,body{
		width:100%;height:100%;overflow:hidden;
		background:url('media/concert.jpg') center center no-repeat; 
		background-size: cover;
	}
	
@font-face {
	font-family:sports;
	src: url(media/queen.otf);
}
.fontsports {
	font-family: sports;
}
button	{
	font:22px verdana;
}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;padding:20px 0px;font-size:32px;text-align:center;color:#ccf;text-shadow:1px 1px 1px #009,1px 2px 2px #00f,2px 2px 10px #008;" id="" class="fontsports" >Lee el primer parrafo en voz alta</div>
	<div style="float:left;width:calc(100% - 100px);height:400px;padding:50px;" id="" class="" >
		<div style="float:left;width:100%;overflow:hidden;" id="" class="" ><textarea style="width:100%;height:350px;background:rgba(255,255,255,.5);color:#f00;font:30px verdana;" id="txt" readonly></textarea>	</div>
		<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;" id="" class="" >
			<button id="start" 		onclick="toggleStartStop()" 	style="padding:5px 0px;color:#000;background:#fa0;width:calc(50% - 6px);" class="">Comenzar a grabar</button>
			<button id="play" 		onclick="playtune()" 					style="padding:5px 0px;color:#000;background:#fa0;width:calc(25% - 6px);" class="">Escuchar</button>
			<button id="restart" 	onclick="limpiar()" 					style="padding:5px 0px;color:#000;background:#fa0;width:calc(25% - 6px);" class="">Borrar</button>
		</div>
		<div style="float:left;border:solid 1px #666;padding:10px;width:calc(100% - 20px);font:calc(12px + .2vw) verdana;background:#fff;display:none;"><span id="final_span"></span><span id="interim_span" style="color:grey"></span></div>
	</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('036',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('036',rpta)">Tarea terminada!</button>
	</div>
	<audio id="myAudio1"><source src="media/ding.mp3"></audio>
</body>
