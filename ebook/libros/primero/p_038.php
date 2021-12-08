<script>
var rpta="";
var canvas ;
var context ;
var x = 50; 
var y = 100;
var speed = 6; 
var sideLength = 50; 
var down = false;
var up = false;
var right = false;
var left = false;
var targetX = [0,0,0,0];
var targetY = [0,0,0,0];
var targetLength = 25;
var countdown = 180;
var id = null;
var actual=0;
var ammo=200;
var hit=0;
/*GFTP_20200818		//	var arrverbs=[^^["-1","1","2","3"],^^["HAS","BE","WAS","BEEN"],^^["HAVENT","HAD","HADNT","HAVENT"],^^["SAD","SAY","SAID","SAID"]]^^*/
var arrverbs=[
	["we","go","to","school"],
	["Anna","has","a","bike"],
	["is","up","to","you"],
	["I","cross","the","street"],
	["he","loves","the","beach"],
	["the","remote","is","broke"],
	["hit","the","road","Jack"],
	["we","love","eat","cookies"],
	["turn","off","the","tv"],
	["Freddy","throw","the","paper"]	
]
arrrptas=[];
for(k=0;k<arrverbs.length;k++)	{ arrcu=[]; for(w=0;w<arrverbs[k].length;w++)	{ arrcu.push(""); } arrrptas.push(arrcu); };
window.parent.carga();
window.onload  =function() {
	instructions();
	canvas = document.getElementById('canvas');
	context = canvas.getContext('2d');
	menu();
	canvas.focus();
	canvas.addEventListener('keydown', function(event) {
		/*GFTP_20200818		//			event.preventDefault();^^		console.log(event.key, event.keyCode);*/
		if (event.keyCode === 40) 	down = true;
		if (event.keyCode === 38) 	up = true;
		if (event.keyCode === 37) 	left = true;
		if (event.keyCode === 39) 	right = true;
		if (event.keyCode === 32) 	fire();
	});
	canvas.addEventListener('keyup', function(event) {
		/*GFTP_20200818		//			event.preventDefault();^^		console.log(event.key, event.keyCode);*/
		if (event.keyCode === 40) down 	= false;
		if (event.keyCode === 38) up 		= false;
		if (event.keyCode === 37) left 	= false;
		if (event.keyCode === 39) right = false;
	});
	canvas.addEventListener('mousemove', function(event) {
		var rect = event.target.getBoundingClientRect();
		x = event.clientX - rect.left - 20; 
		y = event.clientY - rect.top  - 40;  
	});
	canvas.addEventListener('click', function(event) {
		fire();
	});
}
function startGame() {
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;if(countdown>0) this.play();}, false);
  id = setInterval(function() {countdown--;}, 1000);
  canvas.removeEventListener('click', startGame);
	actual=-1;
	moveTarget();
  draw();
}
function fire()	{
	if(ammo>0)	{
		ammo--;
		for(var k=0;k<targetX.length;k++)	{
			if (isWithin(targetX[k], x, x + sideLength) || isWithin(targetX[k] + targetLength, x, x + sideLength)) { // X
				if (isWithin(targetY[k], y, y + sideLength) || isWithin(targetY[k] + targetLength, y, y + sideLength)) { // Y
					document.getElementById("boom"+hit).play();
					targetX[k] = -1;
					targetY[k] = -1;
					arrrptas[actual][hit]=arrverbs[actual][k];
					hit++;
					k=targetX.length;
					console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",arrrptas);
					if(hit>arrrptas[actual].length-1) moveTarget();
					pintarpta();
				}
			}
		}
		audiohit.play();
	}
}
function start() {
	startGame();
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_038.png'  style='width:100%;height;auto;'/></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >When ready, get on the plane, find and shoot the bandits. But, be aware than each bandit has a name, so you need to shoot them in order to make a phrase. Good luck, pilot!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arr=rpta.split("|");
	var numero=0;
	for(var k=0;k<arrrptas.length;k++)	{
		for(var w=0;w<arrrptas[k].length;w++)	{
			arrrptas[k][w]=arr[numero++];
		}
	}
	pintarpta();
}
function respuesta(valor)	{
	// var data="buddy you are boy make big noise playing in the street gonna be big man someday you got mud on your face you big disgrace kicking your can all over the place";
	// var arr=valor.split(" ");
	var cantidad=0;
	var total=0;
	for(var k=0;k<arrrptas.length;k++)	{
		for(var w=0;w<arrrptas[k].length;w++)	{
			if(arrverbs[k][w]==arrrptas[k][w])	cantidad++;
			total++;
		}
	}
	return(String(100*cantidad/total).formatMoney(2)+"%");
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
function stop() {
	countdown=0;
	n0.src="";
}
function pintarpta()	{
	var valor="";		
	rpta="";
	for(var k=0;k<arrrptas.length;k++)	{
		for(var w=0;w<arrrptas[k].length;w++)	{
			valor+=arrrptas[k][w]+"&nbsp;";
			rpta+=arrrptas[k][w]+"|";
		}
		valor+="<br/>";
	}
	document.getElementById("divrpta").innerHTML=valor;
}
function menu() {
  erase();
  context.fillStyle = '#000000';
  context.font = '36px Arial';
  context.textAlign = 'center';
  context.fillText('Shoot the bandits!', canvas.width / 2, canvas.height / 4);
  context.font = '24px Arial';
  context.fillText('Click to Start', canvas.width / 2, canvas.height / 2);
  context.font = '18px Arial'
  context.fillText('Use the arrow keys to move&shoot', canvas.width / 2, (canvas.height / 4) * 3);
  canvas.addEventListener('click', startGame);
}
function endGame() {
  clearInterval(id);
  erase();
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'center';
  context.fillText('THE END' , canvas.width / 2, canvas.height / 2);
}
function moveTarget() {
	hit=0;
	for(k=0;k<targetX.length;k++)	{
		targetX[k] = Math.abs(Math.round(Math.random() * canvas.width - targetLength)-250);
		targetY[k] = Math.abs(Math.round(Math.random() * canvas.height - targetLength)-50);
	}
	actual++;
	if(actual>=arrverbs.length)	{
		actual=0;
		countdown=0;
	}
}
function erase() {
  context.fillStyle = '#FFFFFF';
  context.fillRect(0, 0, canvas.width, canvas.height);
}
function draw() {
	for(k=0;k<targetX.length;k++)	{
		targetX[k]++;
		if(targetX[0]>canvas.width)	moveTarget();
	}	
  erase();
  if (down) 													y += speed;
  if (up) 														y -= speed;
  if (right) 													x += speed;
  if (left) 													x -= speed;
  if (y + sideLength > canvas.height)	y = canvas.height - sideLength;
  if (y < 0) 													y = 0;
  if (x < 0) 													x = 0;
  if (x + sideLength > canvas.width) 	x = canvas.width - sideLength;
	/*GFTP_20200817		//		for(var k=0;k<targetX.length;k++)	{^^		if (isWithin(targetX[k], x, x + sideLength) || isWithin(targetX[k] + targetLength, x, x + sideLength)) { // X^^			if (isWithin(targetY[k], y, y + sideLength) || isWithin(targetY[k] + targetLength, y, y + sideLength)) { // Y^^				moveTarget();^^				if(k==0) 	score++;^^				if(k>0) 	score--;^^			}^^		}^^  }*/
	context.fillStyle = 'rgba(200,255,255,.5)';
  context.fillRect(0,0,canvas.width,canvas.height*.7);
	context.fillStyle = 'rgba(120,80,0,.5)';
  context.fillRect(0,canvas.height*.7,canvas.width,canvas.height);
  context.drawImage(document.getElementById("imagen"), x, y);	
	context.font = '32px Verdana';
  context.fillStyle = '#00f';
  context.textAlign = 'left';
	for(k=0;k<targetX.length;k++)	{
		if(targetX[k]>-1 && targetY[k]>-1)	{
			// context.rotate(5*Math.PI/180);		
			context.drawImage(document.getElementById("bandits0"), targetX[k], targetY[k],Math.random()*2+60,Math.random()*2+30);	
			context.fillText(arrverbs[actual][k],targetX[k]+60, targetY[k]+20);
		} 
	}
  context.fillStyle = '#000000';
  context.font = '12px Arial';
  context.textAlign = 'left';
  // context.fillText('[' + score+'] Hits', 2, canvas.height - 25);
  context.fillText('[' + ammo+'] Ammo', 2, canvas.height - 15);
  context.fillText('[' + countdown+'] Fuel', 2, canvas.height - 5);
  if (countdown <= 0) {
		countdown = 0;
    endGame();
  } else {
		setTimeout(function() {window.requestAnimationFrame(draw)}, 30);
  }
}
function isWithin(a, b, c) {
  return (a > b && a < c);
}
</script>
<style>
body {
	background:url('media/airplane.jpg') center center no-repeat; 
	background-size: cover;
}	
</style>
<body>
	<div style="float:left;width:calc(100%);padding:25px 0px;text-align:center;" id="" class="" ><canvas id="canvas" width="600" height="400" tabindex="1"></canvas></div>
	<img style="display:none" id="bandits0" 	src="media/c.gif" >
	<img style="display:none"	id="imagen" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAyCAYAAAD1CDOyAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEbElEQVRo3t1avXLTQBD+nElBJ+jolIafgUKm4a+x00CgcaCgAUaP4JSUaqg9maGh0iM4FSWKn0BJyVA4PIFCR2eaPbM+393uSQozcDOauSinu/1ud7+93TPQrWUAZgCWAFYtnjmAHEDSRYhBy+9yAEcAhtb7M3p+AKgBnND7MY29AWBE/evsu0saW9C3V9pGjl0P7aYZE6PFWVfN+FpCk5uFGtq1VPguBIK3CYCKjV/ShvXWMjKNNjulBeHTdNEXgEa5O7bTZqw/igBua73sC8BcIYSx8ZqBNoJUzAy1jDRh65ddAZQKE6hI6JmlLducUgIwZ36V9CTHRkuVHyZM+NxhTpJPpDR/Q99rgMy0IGpmAtLE0x4cO6U1S0HbZq6JBGDGbDcJBLqGgPTJTiWB8a1bMNnS0O5yNvE5Wy0ENq05+TaoDvy/YkTTakBG9p9FCBULwmikbLPR3ObSgK9MIgVqA0Jaq/T5bCWwURFSYY/mZBNH4iGCLW2kghYSyZkCFMyjN1qYVSFoY73pU3pRB7QQE2hG1mHORG9NcHPFq8RDMIapNuKCj/O1WpDMiQe3LEIbIbnWcSNkShOB8iRWcflEDMuF1i95FDfq9gU/zXHY5/guEM8AfKCdfAngFb1/DODA0V/ROAC4B+AhiykrANUOSytdbSwcP4yZTAEcOszJ1Z4CuAbgGMBHppEDEt7uXwB4T/03DJCReWxAnHsWHAJYKLRwTPk6fzRHnLsKR78AcNPxfi2zAbH07PClQpixIoa42k8ScE8Y98sqKtgAscv/sNpewMw40OsBTbraCet/AXCH+qfsPe9/BfDOY/brTVj9w08FYLWD/6DtMLs2DvkcwFt69x3Aa3r/BMALqz8G8I19fx/AI4dzDzzPIZnOoOWYDRD7FgXeJla6JVDggmz6wEGBUJKCxH4PAmPGHEQSYAYNBe61tARtHGo8B8wNTQw7CHjGNBRzthoRsy0UQE89MQwALna5WlpS4GcAn+icE6LkgSPxOepA4fucdptAFcGnSm3q6juClMrj/TQwbuP0XQpZXSXUhWwguQfESnm24s1XOt1K5LYSDE+RV5tWmoJawRbKWS6hLRLnAad3JnINW6yLNjhwXhSe08Ix9w6hAvbSlcgVQl6RCQU1TbUjxpxChYncV+BLFNrQVDz6KNlIG2a0UEhlQt8Ec8RdfMSCSIQcXCPjGmUZWKSOABJjTuZGKhc0tJL8M7MYxQdkDt3FS8yd3TJQ9UtYXFCZ9JSpLBOcbynsigTClHFqYa2SEY+aXEolEH5L5LrCCplTqSyoaWXp/PGI1GyyrQKbt0cjVklcsmCY9CiDOEmoQmjb7oTRMU8jZzSHRpiU+UAnAC4gVWRhuU2wmzIW6gUAj5J8Ym1hOCZO2IXoClfw84jUWqQhLWUdQCT4c8XF553iiluO7R+VmDvsiWVuLhAjEnLuYawUf7FNPIKs2DG5Yk/jGWeYqrXwgx7AJFRWGVPeOxTGX1JKuaBNOO8qwG+PEkbJEwEoJwAAAABJRU5ErkJggg==" >
	<div id="divrpta" style="float:left;width:calc(100% - 2px);border:1px solid;font:24px verdana;;background:#ddd;height:200px;overflow:auto;"></div>
	<audio id="audiohit"><source src="media/hit.wav"></audio>
	<audio id="n0"><source src="media/airplane.wav"></audio>
	<audio id="boom0"><source src="media/boom.wav"></audio>
	<audio id="boom1"><source src="media/boom.wav"></audio>
	<audio id="boom2"><source src="media/boom.wav"></audio>
	<audio id="boom3"><source src="media/boom.wav"></audio>
	<audio id="boom4"><source src="media/boom.wav"></audio>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="pintarpta();parent.saveforlater('038',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="pintarpta();parent.taskdone('038',rpta)">Task done!</button>
	</div>
</body>

