<html>
<head>
</head>
<style>
html,	
body	{
	background:url(media/ga2.jpg) no-repeat center center; 
	background-size: cover;
	height:100%;
	width:100%;
	padding:0px;
	margin:0px;
}		
p {
  afont: 22pt sans-serif;
  amargin: 20px 20px 0px 20px;
}
#puzzle {
  border: 1px solid black;
  padding: 10px;
  float: left;
  margin: 30px 20px;
}
#puzzle div {
  width: 100%;
  margin: 0 auto;
}
/* style for each square in the puzzle */
#puzzle .puzzleSquare {
  height: 30px;
  width: 30px;
  text-transform: uppercase;
  background-color: white;
  border: 0;
  font: 1.2em sans-serif;
}
button::-moz-focus-inner {
  border: 0;
}
/* indicates when a square has been selected */
#puzzle .selected {
  background-color: orange;
}
/* indicates that the square is part of a word that has been found */ 
#puzzle .found {
  background-color: blue;
  color: white;
}
#puzzle .solved {
  background-color: purple;
  color: white;
}
/* indicates that all words have been found */
#puzzle .complete {
  animation: scatter 5s infinite;
}

@keyframes scatter {
  0% 		{background-color:#f00;}
  20% 	{background-color:#0ff;}
  40% 	{background-color:#00f;}
  60% 	{background-color:#ff0;}
  80% 	{background-color:#fff;}
  100% 	{background-color:#0f0;}
}

#words {
  padding-top: 5px;
  -moz-column-count: 2;
  -moz-column-gap: 20px;
  -webkit-column-count: 2;
  -webkit-column-gap: 20px;
  column-count: 2;
  column-gap: 2px;
  awidth: 300px;
	color:#ff0;
}
#words ul {
  list-style-type: none;
}
#words li {
  padding: 3px 0;
  afont: 1em sans-serif;
}
/* indicates that the word has been found */
#words .wordFound {
  text-decoration: line-through;
  color: #fa0;
}
/**
* Styles for the button
*/
#solve {
  margin: 0 10px;
}	
ul	{
	padding:0px 4px;
}
</style>	
<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/wordfind.js"></script> 
<script type="text/javascript" src="lib/wordfindgame.js"></script> 

<script>
var rpta="";
var gamePuzzle;
var words;
var id;
window.parent.carga();
window.onload=function() {
	init();
	instructions();
  words = ['night', 'woods', 'tree', 'bears', 'stars', 'owl','forest','bootcamp','scouts'];
  gamePuzzle = wordfindgame.create(words, '#puzzle', '#words');
  $('#solve').click( function() {
    wordfindgame.solve(gamePuzzle, words);
  });
  var puzzle = wordfind.newPuzzle(
    words, 
    {height: 18, width:18, fillBlanks: false}
  );
  wordfind.print(puzzle);
}
function stop() {
	n0.src="";
	n1.src="";
	n2.src="";
	n3.src="";
	n4.src="";
	n5.src="";
}

function sonidos()	{
	var actual=parseInt(Math.random()*10)
	switch(actual)	{
	case 0:	break;
	case 1:	
		n1.play();
		break;
	case 2:	
		n2.play();
		break;
	case 3:	
		n3.play();
		break;
	case 4:	
		n4.play();
		break;
	default:
		n5.play();
		break;
	}
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_022.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Oh, my! I adore the bootcamps, they get better when you also stay in the night. Playing a letter soup find and mark dragging the words. Yohoo!.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
	// restore("forest|night|")
	id = setInterval(sonidos, 10000);	
	document.getElementById("n0").loop;	
	n0.play();
	n0.addEventListener('ended', function() {this.currentTime = 0;this.play();}, false);
}
function callbackhallado(cual)	{
	rpta+=cual+"|";
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	// rpta="forest|night|";
	arrrpta=rpta.split("|");
	wordfindgame.solve(gamePuzzle, arrrpta);
}
function touchHandler(event) {
    var touch = event.changedTouches[0];
    var simulatedEvent = document.createEvent("MouseEvent");
        simulatedEvent.initMouseEvent({
        touchstart: "mousedown",
        touchmove: "mousemove",
        touchend: "mouseup"
    }[event.type], true, true, window, 1,
        touch.screenX, touch.screenY,
        touch.clientX, touch.clientY, false,
        false, false, false, 0, null);
    touch.target.dispatchEvent(simulatedEvent);
    event.preventDefault();
}
function init() {
	document.addEventListener("touchstart", touchHandler, true);
	document.addEventListener("touchmove", touchHandler, true);
	document.addEventListener("touchend", touchHandler, true);
	document.addEventListener("touchcancel", touchHandler, true);
}	


function respuesta(valor)	{
	var total=valor.split("|").length-1;
	return(String(100*total/9).formatMoney(2)+"%");
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
<body>
<div style="float:left;width:70%;">
	<div id='puzzle' style="float:left;padding:0px;"></div>
</div>	
<div id='words'  style="float:left;width:30%;font-size:22px;overflow:auto;"></div>
	<!--div><button id='solve'>Solve Puzzle</button></div-->
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('022',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('022',rpta)">Task done!</button>
	</div>
	<audio id="n0"><source src="media/n_00.wav"></audio>
	<audio id="n1"><source src="media/n_01.wav"></audio>
	<audio id="n2"><source src="media/n_02.wav"></audio>
	<audio id="n3"><source src="media/n_03.wav"></audio>
	<audio id="n4"><source src="media/n_04.wav"></audio>
	<audio id="n5"><source src="media/n_05.wav"></audio>
<script>
</script>
</body>
</html>