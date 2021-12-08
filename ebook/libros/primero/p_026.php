<!DOCTYPE HTML>
<html>
<head>
<script>
var rpta="";
window.parent.carga();
window.onload=function() {
	instructions();
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_026.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Those little rascals escape from their homes. Drag and drop all the pets inside their houses, but be careful: the use to run from one place to another while they are free!.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
var id;
function start() {
	// init();
	id = setInterval(shake, 1000);
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;this.play();}, false);
}
function stop() {
	n0.src="";
}
function shake() {
	try { 
		total=document.getElementById("divshake").querySelectorAll(".animal").length-1;
		primero=parseInt(Math.random()*total);
		ultimo=1+parseInt(Math.random()*total);
		primero=					(document.getElementById("divshake").querySelectorAll(".animal")[primero]);
		ultimo=						(document.getElementById("divshake").querySelectorAll(".animal")[ultimo]);
		pst=primero.style.top;
		psl=primero.style.left;
		ust=ultimo.style.top;
		usl=ultimo.style.left;
		primero.style.top=ust;
		primero.style.left=usl;
		ultimo.style.top=pst;
		ultimo.style.left=psl;
	}	catch(err)	{
		console.log(err);
	};
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arrrpta=rpta.split("|");
	for(k=0;k<arrrpta.length;k++)	{
		Array.from(document.querySelectorAll(".animal")).forEach(function(actual) { 
			if(actual.id.split("_")[1]==arrrpta[k])	{
				cualdiv=document.getElementById("div_"+arrrpta[k]);
				cualdiv.appendChild(actual);
				actual.style.top=(cualdiv.offsetTop+10)+"px";
				actual.style.left=(cualdiv.offsetLeft+10)+"px";
				actual.style.height="50px";
				actual.style.width="50px";
			}
		});
	}
}
function allowDrop(ev) {
  ev.preventDefault();
}
function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}
function drop(cualdiv,ev,cual) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
	if(document.getElementById(data).id==cual)	{
		cualdiv.innerHTML="";
		ev.target.appendChild(document.getElementById(data));
		document.getElementById(data).style.top=(cualdiv.offsetTop+10)+"px";
		document.getElementById(data).style.left=(cualdiv.offsetLeft+10)+"px";
		document.getElementById(data).style.height="50px";
		document.getElementById(data).style.width="50px";
	}
	rpta="";	
	Array.from(document.querySelectorAll(".cage")).forEach(function(actual) { 
		if(actual.querySelector(".animal"))	rpta+=actual.querySelector(".animal").id.split("_")[1]+"|";
	});
	console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",rpta);	
}

function respuesta(valor)	{
	var total=valor.split("|").length-1;
	return(String(100*total/8).formatMoney(2)+"%");
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
</head>
<style>
	body	{padding:0px 0px 0px 5%;}
</style>
<body>
	<div style="float:left;width:100%;font-size:60px;font-weight:bold;" id="" class="" >GETPET! </div>
	<div style="float:left;width:100%;overflow:hidden;" id="" class="" >Those little rascals escape from their homes. Help us take their homes!</div>
	<div id="div_1" class="cage" ondrop="drop(this,event,'drag_1')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(200,100,155,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">PARROT</div>
	<div id="div_2" class="cage" ondrop="drop(this,event,'drag_2')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(100,200,155,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">MOUSE</div>
	<div id="div_3" class="cage" ondrop="drop(this,event,'drag_3')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(200,200,155,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">DOG</div>
	<div id="div_4" class="cage" ondrop="drop(this,event,'drag_4')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(100,100,155,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">CAT</div>
	<div style="clear:both;"></div>
	<div id="div_5" class="cage" ondrop="drop(this,event,'drag_5')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(150,200,125,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">HEDGEHOG</div>
	<div id="div_6" class="cage" ondrop="drop(this,event,'drag_6')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(250,200,125,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">RABBIT</div>
	<div id="div_7" class="cage" ondrop="drop(this,event,'drag_7')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(250,200,125,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">HAMSTER</div>
	<div id="div_8" class="cage" ondrop="drop(this,event,'drag_8')" ondragover="allowDrop(event)" style="float:left;height:125px;width:12%;background:url('media/house.png') center center rgba(250,200,125,0.5);background-size: cover;padding:20px;margin:5px;display: flex;justify-content: center;align-items: center;font:bold 24px verdana;color:#000;text-shadow:-1px -1px 1px #fff,1px 1px 1px #fff;">FISH</div>
	<div style="clear:both;"></div>
	<div style="float:left;width:100%;height:20px;overflow:hidden;" id="" class="" ></div>
	<div id="divshake" style="float:left;position:relative;height:400px;;width:92%;">
		<div id="drag_1" draggable="true" ondragstart="drag(event)" style="position:absolute;top:000px;left:00%;height:125px;width:12%;background:url(media/a_01.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_2" draggable="true" ondragstart="drag(event)" style="position:absolute;top:000px;left:20%;height:125px;width:12%;background:url(media/a_02.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_3" draggable="true" ondragstart="drag(event)" style="position:absolute;top:000px;left:40%;height:125px;width:12%;background:url(media/a_03.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_4" draggable="true" ondragstart="drag(event)" style="position:absolute;top:000px;left:60%;height:125px;width:12%;background:url(media/a_04.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_5" draggable="true" ondragstart="drag(event)" style="position:absolute;top:140px;left:00%;height:125px;width:12%;background:url(media/a_05.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_6" draggable="true" ondragstart="drag(event)" style="position:absolute;top:140px;left:20%;height:125px;width:12%;background:url(media/a_06.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_7" draggable="true" ondragstart="drag(event)" style="position:absolute;top:140px;left:40%;height:125px;width:12%;background:url(media/a_07.jpg) center center no-repeat;background-size:contain;" class="animal" ></div> 
		<div id="drag_8" draggable="true" ondragstart="drag(event)" style="position:absolute;top:140px;left:60%;height:125px;width:12%;background:url(media/a_08.jpg) center center no-repeat;background-size:contain;" class="animal" ></div>
	</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('026',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('026',rpta)">Task done!</button>
	</div>
	<audio id="n0"><source src="media/pg.wav"></audio>
</body>
</html>