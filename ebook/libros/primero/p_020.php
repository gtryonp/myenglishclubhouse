<!DOCTYPE HTML>
<html>
<head>
<script>
var rpta="";
window.parent.carga();
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 24px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_020.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:10px 10px;' id='' class='' >Did you ever play scrabble? Well, here is an easier scrabble game: instead letters we have words and have to make a phrase with them. Drag the word and drop it on the top table to create the phrase..</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
}
function restore(cualrpta)	{
	if(cualrpta!="") rpta=cualrpta;
	arrrpta=rpta.split("*");
	for(k=1;k<arrrpta.length-1;k++)	{
		var ok=true;
		Array.from(document.querySelector(".segundo").querySelectorAll("div")).forEach(function(actual) {
			if(ok)	console.log(actual.innerHTML,arrrpta[k],actual.innerHTML==arrrpta[k]);
			if(actual.innerHTML==arrrpta[k] && ok)	{
				document.querySelector(".primero").append(actual);
				ok=false;
			}
		});
	}
}
arr=shuffleArray(["When","Dave","and","Nancy","came","to","my","house","I","receive","they","then","invite","one","lunch"]);
window.onload=function() {
	instructions();
	document.getElementById("second").innerHTML="";
	for(k=0;k<arr.length-1;k++)	{
		document.getElementById("second").innerHTML+="<div id='word_"+k+"' draggable='true' ondragstart='drag(event)' style='float:left;box-shadow:5px 5px 5px #ffc inset,5px 5px 5px #000;transform: rotate("+(10*Math.random()-10*Math.random())+"deg);margin:10px;'>"+arr[k]+"</div>";
	}
}
function shuffleArray(array) {
	for (var i = array.length - 1; i > 0; i--) {
		var j = Math.floor(Math.random() * (i + 1));
		var temp = array[i];
		array[i] = array[j];
		array[j] = temp;
	}
	return(array);
}	
function allowDrop(ev)  {
	ev.preventDefault();
}
function drag(ev)  {
	ev.dataTransfer.setData("Text",ev.target.id);
}
function drop(ev)  {
	ev.preventDefault();
	var data=ev.dataTransfer.getData("Text");
	if (ev.target.classList.contains('container')) {
		var container = ev.target;
		container.appendChild(document.getElementById(data));
		myAudio2.play();
	} else {
		container = ev.target.parentElement;
		container.insertBefore(document.getElementById(data), ev.target);
		myAudio1.play();
	}
	rpta="*";
	Array.from(document.querySelector(".primero").querySelectorAll("div")).forEach(function(actual) {
		rpta+=actual.innerHTML+"*";
	});
}

function respuesta(valor)	{
	var total=valor.split("*").length-1;
	return(String(100*total/14).formatMoney(2)+"%");
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
<style type="text/css">
html,	
body	{
	background:url(media/w.jpg) no-repeat center center; 
	background-size: cover;
	height:100%;
	width:100%;
	overflow:hidden;
	padding:0px;
}	
  .acontainer {width:80%;height:20%;padding:10px;border:1px solid #aaaaaa;}
  div {cursor: grabbing;}
  // div::before {content:" "}
  // div:first-child {text-transform:capitalize}
  // div:first-child:before {content:""}
  // div:last-child:after {content:"."}
	.container div	{
		background:#ff0;
		padding:6px 10px;
		border-radius:10px;
		margin:2px 4px;
		font:bold 32px verdana;
		border:1px solid;
	}
	#first div	{color:#fff;background:#c00;transform: rotate(0deg) !important;margin:2px !important;box-shadow:5px 5px 5px #f00 inset,5px 5px 5px #000 !important;}
	#second div	{color:#000;background:#ff0;}
</style>
</head>
<body>
	<div style="float:left;width:100%;overflow:hidden;text-align:center;padding:10px;font-size:40px;font-weight:bold;text-shadow:3px 1px 1px #fff;" id="" class="" >SCRABBLE WORDS!</div>
  <div id="first" class="container primero" ondrop="drop(event)" ondragover="allowDrop(event)" style="float:left;border:1px solid;width:80%;height:30%;min-height:200px;padding:10px;background:url(media/wood.jpg);"></div>
	<div style="float:left;width:100%;overflow:hidden;height:50px;" id="" class="" >&nbsp;</div>
  <div id="second" class="container segundo" ondrop="drop(event)" ondragover="allowDrop(event)" style="float:left;border:1px solid;width:80%;height:35%;min-height:200px;padding:20px;background:url(media/wood1.jpg);overflow:auto;"></div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('020',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('020',rpta)">Task done!</button>
	</div>
	<audio id="myAudio1"><source src="media/c1.wav"></audio>
	<audio id="myAudio2"><source src="media/c2.wav"></audio>
</body>
</html>