<style>
html,	
body	{
	background:rgba(0,0,0,.25); 
	height:100%;
	width:100%;
	overflow:hidden;
	padding:0px;
}	
.clasecolor	{
	background:#fff;
}
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
</style>
<body onclick="start();">
	<!--div style="float:left;width:100%;overflow:hidden;background:rgba(242,151,164,0.5);font:bold 20px verdana;" id="divconsole" class="" >***</div-->
	<div style="float:left;width:100%;font-weight:bold;font-size:32px;text-shadow:1px 1px 1px #fff,1px 1px 1px #00f;" id="divcolor" class="fontech" >NAME A COLOR!</div>
	<div style="float:left;width:100%;font-size:22px;" id="" class="fontech" ><span class='spannombre'></span>: Can you speech aloud the following colors?</div>
	
	<div style="float:left;width:50%;">
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >blue</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >green</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >red</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >yellow</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >orange</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >cyan</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >pink</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >grey</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >purple</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >lime</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >aqua</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >navy</div>
	</div>
	<div style="float:left;width:50%;">
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >coral</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >mustard</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >brown</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >amber</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >peach</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >maroon</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >charcoal</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >olive</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >copper</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >violet</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >camel</div>
		<div style="float:left;width:calc(100% - 2px);text-align:center;font-size:calc(20px + .75vw);color:#aaa;border:1px solid #fff;" class="fontech clasecolor" >fucshia</div>
	</div>
	
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('006',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('006',rpta)">Task done!</button>
	</div>
	

	
</body>
<script type="text/javascript">
var rpta="";	
var runok=true;
var idmostrardebuganimacion;
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var	recognition = new SpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
window.parent.carga();

window.onload=function() {
	instructions();
}
function start() {
}
function stop() {
	runok=false;
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_006.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 36px verdana;text-align:center;padding:50px 50px;' id='' class='' >	Spell aloud the microphone for each color until it gets marked!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	rpta=cualrpta;
	var arrcolors={"blue" :"#00f","green" :"#0f0","red" :"#f00","yellow" :"#ff0","orange" :"#fa0","cyan" :"#cff","pink" :"#f99","grey" :"#ccc","purple" :"#A40190","lime" :"#77FF05","aqua" :"#05F3CF","navy" :"#0E385E","coral" :"#FF974E","mustard" :"#E3A51E","brown" :"#775549","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","olive" :"#477F40","copper" :"#DE9A1D","violet" :"#B9B3D9","camel" :"#E7C39F","fucshia" :"#E73D96" };
	var arrrpta=rpta.split("|");
	for(k=0;k<arrrpta.length;k++)	{
		for (var key in arrcolors) {
			var value = arrcolors[key];
			if(key==arrrpta[k])	{
				Array.from(document.querySelectorAll(".clasecolor")).forEach(function(actual) { if(actual.innerHTML==arrrpta[k])	{
					actual.style.background=value;
					actual.style.color="#000";
				}});
			}
		}		
	}		
}
function respuesta(valor)	{
	var cantidad=valor.split("|").length-1;
	return(String(100*cantidad/24).formatMoney(2)+"%");
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
function start()	{
	var arrcolors={"blue" :"#00f","green" :"#0f0","red" :"#f00","yellow" :"#ff0","orange" :"#fa0","cyan" :"#cff","pink" :"#f99","grey" :"#ccc","purple" :"#A40190","lime" :"#77FF05","aqua" :"#05F3CF","navy" :"#0E385E","coral" :"#FF974E","teal" :"#009788","mustard" :"#E3A51E","brown" :"#775549","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","olive" :"#477F40","copper" :"#DE9A1D","violet" :"#B9B3D9","camel" :"#E7C39F","fucshia" :"#E73D96" };
	recognition.start();
	idmostrardebuganimacion = setInterval(mostrardebuganimacion, 500);
	recognition.onresult = function (event) {
		for (var i = 0; i < event.results.length; ++i) {
			ultimo=event.results[i][0].transcript.toLowerCase().split(" ");
			orden=ultimo[ultimo.length-1];
			// console.log(event.results[i][0].transcript.toLowerCase(),orden);
			for (var key in arrcolors) {
				var value = arrcolors[key];
				if(key==orden)	{
					Array.from(document.querySelectorAll(".clasecolor")).forEach(function(actual) { if(actual.innerHTML==orden)	{
						actual.style.background=value;
						actual.style.color="#000";
						if(rpta.indexOf(key+"|")==-1)	rpta+=key+"|";
					}
					});
				}
			}		
			document.getElementById("divcolor").innerHTML=orden.toUpperCase();
		}
	}
}
function mostrardebuganimacion() {
	// try { recognition.start();}	catch(err) {document.getElementById("divconsole").innerHTML+="->"+err+"<-"	};	
	if(runok) {
		try { recognition.start();}	catch(err) {};	
	} else {
		recognition.stop();
		clearInterval(idmostrardebuganimacion);
	}
}
</script>