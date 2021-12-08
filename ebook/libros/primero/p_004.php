<script>
var rpta="";
window.parent.carga();
function start() {
	playsong();
}
function stop() {
	song.pause();
}
function respuesta(valor)	{
	var cantidad=valor.split("|").length-1;
	return(String(100*cantidad/20).formatMoney(2)+"%");
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
function instructions() {
	var data="";	
	// data+="<div style='float:left;width:100%;overflow:hidden;padding:20% 0% 0% 0%;' id='' class='' ></div>";
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;background:rgba(194,215,136,0);padding:5px 0px 0px 40px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_004.png' style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:10px 10px;' id='' class='' >"+top.document.getElementById("alumnonombresolo").value+", look for all the 20 numbers that appears on the letter song and click on it. The numbers will be revealed as numbers!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	rpta=cualrpta;
	var arrnumbers={"one" :"1_#f00", "two" :"2_#00f", "three" :"3_#0a0", "four" :"4_#fa0", "five" :"5_#0af", "six" :"6_#f0a", "seven" :"7_#a0f", "eight" :"8_#00a", "nine" :"9_#0aa", "ten" :"10_#a00"};
	var arrrpta=rpta.split("|");
	for (var key in arrnumbers) {
		var value = arrnumbers[key].split("_");
		var ok=true;
		for(k=0;k<arrrpta.length;k++)	{
			if(arrrpta[k]==value[0])	{
				Array.from(document.querySelectorAll(".clasenumero")).forEach(function(actual) { 
					if(actual.innerHTML.toLowerCase()==key && ok)	{
						actual.style="background:"+value[1]+";color:#fff;padding:0px 12px;border-radius:20px;";
						actual.innerHTML=value[0];
						ok=(arrrpta.count(value[0])>1 ? true : false);
					}
				});
			}
		};
	};
}
Object.defineProperties(Array.prototype, {
	count: {
		value: function(value) {
			return this.filter(x => x==value).length;
		}
	}
});
var arrnumbers={"one" :"1_#f00", "two" :"2_#00f", "three" :"3_#0a0", "four" :"4_#fa0", "five" :"5_#0af", "six" :"6_#f0a", "seven" :"7_#a0f", "eight" :"8_#00a", "nine" :"9_#0aa", "ten" :"10_#a00"};
window.onload = function () { 
	// Array.from(document.querySelectorAll(".spannombre")).forEach(function(actual) { actual.innerHTML=top.document.getElementById("alumnonombresolo").value;});
	instructions();
	teclas();
}
function teclas()	{
	Array.from(document.querySelectorAll(".clasenumero")).forEach(function(actual) { actual.addEventListener("click", function (e) { 
		for (var key in arrnumbers) {
			var value = arrnumbers[key].split("_");
			if(actual.innerHTML.toLowerCase()==key)	{
				actual.style="background:"+value[1]+";color:#fff;padding:0px 12px;border-radius:20px;";
				actual.innerHTML=value[0];
				myAudio1.play();
				rpta+=value[0]+"|";
			};
		};
	});});
}

function playsong()	{
	song.play();
}
</script>
<style>
body	{
	background:url(media/tree2.jpg) no-repeat center center fixed; 
	background-size: cover;
	overflow:hidden;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
.boton	{
	border:0px solid;
	font-size:32px;
	background:#ddd;
	cursor:pointer;
}
.boton:hover	{
	border:0px solid;
	background:#bbb;
	color:#fff;
}
.clasenumero {
	acolor:#f00;
}	
</style>
<body>
	<div style="float:left;width:100%;font-weight:bold;font-size:50px;text-align:center;background:rgba(0,0,0,0.25);color:#ffc;text-shadow:-1px -1px 1px #f90;padding:10px 0px;" id="divcolor" >Sing a Song!</div>
	<div style="float:left;width:100%;padding:1% 0%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;font-size:26px;padding:0px 0px 0px 10%;" id="" class="fontech" >(<span class='spannombre'></span> find and click on the numbers)</div>
	<div style="float:left;width:100%;padding:2% 0%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>One</span>, little <span class='clasenumero'>two</span>, little <span class='clasenumero'>three</span>, little indians,</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>four</span>, little <span class='clasenumero'>five</span>, little <span class='clasenumero'>six</span>, little indians,</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>seven</span>, little <span class='clasenumero'>eight</span>, little <span class='clasenumero'>nine</span>, little indians,</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>ten</span> little indian boys!</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>ten</span>, little <span class='clasenumero'>nine</span>, little <span class='clasenumero'>eight</span>, little indians,</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>seven</span>, little <span class='clasenumero'>six</span>, little <span class='clasenumero'>five</span>, little indians,</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>four</span>, little <span class='clasenumero'>three</span>, little <span class='clasenumero'>two</span>, little indians,</div>
	<div style="float:left;width:100%;font-size:calc(22px + 1vw);padding:0px 0px 0px 12%;" id="" class="fontech" ><span class='clasenumero'>One</span> little indian boy!</div>
	<audio id="myAudio1"><source src="media/ding.mp3"></audio>
	<audio id="song"><source src="media/One-Little,-Two-Little-Indians-.mp3"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('004',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('004',rpta)">Task done!</button>
	</div>
</body>