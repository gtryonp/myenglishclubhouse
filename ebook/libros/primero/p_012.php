<script>
var rpta="";
window.parent.carga();
window.onload=function() {
	instructions();
}
function start() {
	Array.from(document.querySelectorAll(".seleccion")).forEach(function(actual) { actual.addEventListener("change", function (e) {	
		rpta="";
		Array.from(document.querySelectorAll(".seleccion")).forEach(function(actual)	{
			rpta+=actual.id.split("c_").join("")+":"+actual.value+"|";
		})
	})});
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;this.play();}, false);
}
function stop() {
	n0.src="";
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_012.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:20px 50px;' id='' class='' >After you read the left page you will able to answer all the questions. All the answers are in the left page. Pick on every question to select your answer.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
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
	var arrok=["1:50","2:Canada","3:Yellowstone","4:Pacific and Atlantic","5:Washington","6:Mountains","7:Denali","8:Chihuahua","9:Virgin Islands","10:California"];
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
body	{
	background:url(media/usa.jpg) no-repeat center center #9DBBD8; 
	background-size: contain;
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
<div style="float:left;width:100%;overflow:hidden;;background:rgba(109,253,137,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">How many states has USA? </div>
	<div style="float:left;width:30%;overflow:hidden;" id="">
		<select class="seleccion"  id="c_1">
			<option value="50">50</option>
			<option value="52">52</option>
			<option value="38">38</option>
			<option value="48">48</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Which country limits with USA?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_2">
			<option value="Spain">Spain</option>
			<option value="Canada">Canada</option>
			<option value="China">China</option>
			<option value="Peru">Peru</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">National Park Name?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_3">
			<option value="Miami">Miami</option>
			<option value="Mississipi">Mississipi</option>
			<option value="Yellowstone">Yellowstone</option>
			<option value="Tocama">Tocama</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">USA has water on which Oceans?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_4">
			<option value="None">None</option>
			<option value="Pacific">Pacific</option>
			<option value="Atlantic">Atlantic</option>
			<option value="Pacific and Atlantic">Pacific and Atlantic</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Capital city?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_5">
			<option value="Miami">Miami</option>
			<option value="Mississipi">Mississipi</option>
			<option value="Yellowstone">Yellowstone</option>
			<option value="Washington">Washington</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">The Appalachian  are?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_6">
			<option value="Desert">Desert</option>
			<option value="River">River</option>
			<option value="Mountains">Mountains</option>
			<option value="State">State</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Highest Peak?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_7">
			<option value="Aleutian">Aleutian</option>
			<option value="Denali">Denali</option>
			<option value="Sierra Nevada">Sierra Nevada</option>
			<option value="Tocama">Tocama</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Desert Name?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_8">
			<option value="Chihuahua">Chihuahua</option>
			<option value="Denali">Denali</option>
			<option value="Yellowstone">Yellowstone</option>
			<option value="Tocama">Tocama</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Name of islands ?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_9">
			<option value="Yellowstone islands">Yellowstone islands</option>
			<option value="Virgin Islands">Virgin Islands</option>
			<option value="Mississipi islands">Mississipi islands</option>
			<option value="Tocama islands">Tocama islands</option>
		</select>
	</div>	
</div>	
<div style="float:left;width:100%;overflow:hidden;;background:rgba(125,220,245,0);" id="" class="fontech" >
	<div style="float:left;width:70%;overflow:hidden;font-size:28px;text-shadow:2px 2px 1px #fff;" id="">Which state has the lowest/highest points in USA?</div>	
	<div style="float:left;width:30%;overflow:hidden;" id="" class="fontech" >
		<select class="seleccion"  id="c_10">
			<option value="Miami">Miami</option>
			<option value="California">California</option>
			<option value="Washington">Washington</option>
			<option value="Nevada">Nevada</option>
		</select>
	</div>	
</div>	
<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
	<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('012',rpta)">Save for later</button>
	<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('012',rpta)">Task done!</button>
</div>
<audio id="n0"><source src="media/g01.wav"></audio>
</body>