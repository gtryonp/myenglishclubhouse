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
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_028.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Past and present tense. Drag and drop each one to order the verbs until you have each verb on each row, each with their tenses.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
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
			var color="rgba("+(50+200*Math.random())+","+(50+200*Math.random())+","+(50+200*Math.random())+",.5)";
			tabla.rows[i].cells[j].style.background=color;
		}
	}
	console.log(rpta);
}
function respuesta(valor)	{
	var rpta=["be|was|been|","take|took|taken|","begin|began|begun|","come|came|come","eat|ate|eaten","get|got|got","leave|left|left","see|saw|seen","stand|stood|stood","tell|told|told"];
	var ok=0;
	for(k=0;k<rpta.length-1;k++)	{
		if(valor.indexOf(rpta[k])>-1)	ok++;
	}
	return(String(100*ok/10).formatMoney(2)+"%");
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
body {
	overflow:hidden;
}	
table								{border:1px solid;font:28px verdana;}
th									{background:#009;padding:10px 0px;color:#fff;}
td									{padding:4px 1px;border-bottom:1px solid #ccc;border-right:1px solid #ccc;}
td:hover 						{background-color: #ccc !important;}
</style>
<body>
<div style="float:left;width:100%;overflow:hidden;text-align:center;font-size:40px;padding:20px;font-family:verdana;font-weight:bold;text-shadow:-2px 1px 1px #0ff,-1px 1px 1px #fff,1px 1px 1px #f00;color:#acf;" id="" class="" >Past/Present/Future</div>
<table id="mitabla" style="width:100%;border;0px solid;" ondblclick="muestra()">
	<tr><td>be				</td><td>took		</td><td>left		</td></tr>
	<tr><td>take			</td><td>told		</td><td>eaten	</td></tr>
	<tr><td>begin			</td><td>came		</td><td>stood	</td></tr>
	<tr><td>come			</td><td>ate		</td><td>come		</td></tr>
	<tr><td>eat				</td><td>got		</td><td>taken	</td></tr>
	<tr><td>get				</td><td>left		</td><td>told		</td></tr>
	<tr><td>leave			</td><td>saw		</td><td>been		</td></tr>
	<tr><td>see				</td><td>stood	</td><td>begun	</td></tr>
	<tr><td>stand			</td><td>was		</td><td>got		</td></tr>
	<tr><td>tell			</td><td>began	</td><td>seen		</td></tr>
</table>
<audio id="myaudio"><source src="media/c1.wav"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('028',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('028',rpta)">Task done!</button>
	</div>
</body>