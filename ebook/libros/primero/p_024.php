<!DOCTYPE html>
<html>
	<head>
		<style>
		html  {
			background: url(media/music.jpg) center center no-repeat;
			background-size: cover;
			font-family: 'Noto Serif', serif;
			-webkit-font-smoothing: antialiased;
			text-align: center;
			overflow:hidden;
    }
		header {
      position: relative;
      margin: 10px 0;
		}
		header:after {
      content: '';
      width: 460px;
      height: 15px;
      abackground: url(images/intro-div.svg) no-repeat center;
      display: inline-block;
      text-align: center;
      background-size: 70%;
		}
		h1 {
      color: #fff;
      font-size: 50px;
      font-weight: 400;
      letter-spacing: 0.18em;
      text-transform: uppercase;
      margin: 0;
		}
		h2 {
      color: #fff;
      font-size: 24px;
      font-style: italic;
      font-weight: 400;
      margin: 0 0 30px;
		}
		.nowplaying {
      font-size: 80px;
      line-height: 1;
      color: #eee;
      text-shadow: 0 0 5rem #028ae9;
      transition: all .07s ease;
      min-height: 80px;
		}
		.keys {
      display: block;
      width: 100%;
      height: 350px;
      max-width: 880px;
      position: relative;
      margin: 40px auto 0;
      // cursor: none;
		}
		.key {
      position: relative;
      border: 4px solid black;
      border-radius: .5rem;
      transition: all .07s ease;
      display: block;
      box-sizing: border-box;
      z-index: 2;
		}
		.key:not(.sharp) {
      float: left;
      width: 10%;
      height: 100%;
      background: rgba(255, 255, 255, .8);    
		}
		.key.sharp {
      position: absolute;
      width: 6%;
      height: 60%;
      background: #000;
      color: #eee;
      top: 0;
      z-index: 3;
		}
		.key[data-key="87"] {
      left: 7%;
		}
		.key[data-key="69"] {
      left: 17%;
		}
		.key[data-key="84"]  {
      left: 37%;
		}
		.key[data-key="89"] {
      left: 47%;
		}
		.key[data-key="85"] {
      left: 57%;    
			}
		.key[data-key="79"] {
      left: 77%;    
		}
		.key[data-key="80"] {
      left: 87%;    
		}
		.playing {
      transform: scale(.95);
      border-color: #028ae9;
      box-shadow: 0 0 1rem #028ae9;
		}
		.hints {
      display: block;
      width: 100%;
      opacity: .25;
      position: absolute;
      bottom: 7px;
      transition: opacity .3s ease-out;
      font-size: 20px;
		}
		.keys:hover .hints {
      aopacity: 1;
		}
		</style>
	</head>
<script>
var rpta="";
window.parent.carga();
window.onload=function() {
	instructions();
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCTIONS</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_024.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Pressing the letters a,s,d,f,g,h,j,k,l you can make any music sound. Make a song and write the letters in the text field so you can hear it when you press Play.</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >This semitransparent page is an instructions page. After you click here, the page will be completely revealed and the test will start. Read carefully the above instructions and, if you are not sure about hot to do the task, DONT click yet and ask to your teacher first. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PAGE TO START!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function start() {
	window.parent.addEventListener("keydown", playNote);	
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	document.getElementById("txt").value=rpta;
}
function musica()	{
	rpta=document.getElementById("txt").value;
}

function respuesta(valor)	{
	var rpta="JJJ JJJ JLGHJ KKK KKJJ JJHHJH L";
	var ok=0;
	for(k=0;k<rpta.length-1;k++)	{
		if(valor.substr(k,1)==rpta.substr(k,1))	ok++;
	}
	return(String(100*ok/rpta.length).formatMoney(2)+"%");
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
		<section id="wrap">
			<header>
				<h1>Pian-o-man</h1>
			</header>
			<section id="main">
				<div style="float:left;width:100%;overflow:hidden;" id="" class="" ><button style='font:32px verdana;width:45%;color:#f00;' onclick="reduce();refoco();" onblur="refoco()">Clear</button></div>
				<div class="nowplaying" style=""></div>
				<div class="keys">
					<div data-letra="A" onclick="playNote3(65)" data-key="65" 	class="key" 			data-note="C">	<span class="hints">A</span></div>
					<div data-letra="W" onclick="playNote3(87)" data-key="87" 	class="key sharp" data-note="C#">	<span class="hints">W</span></div>
					<div data-letra="S" onclick="playNote3(83)" data-key="83" 	class="key" 			data-note="D">	<span class="hints">S</span></div>
					<div data-letra="E" onclick="playNote3(69)" data-key="69" 	class="key sharp" data-note="D#">	<span class="hints">E</span></div>
					<div data-letra="D" onclick="playNote3(68)" data-key="68" 	class="key" 			data-note="E">	<span class="hints">D</span></div>
					<div data-letra="F" onclick="playNote3(70)" data-key="70" 	class="key" 			data-note="F">	<span class="hints">F</span></div>
					<div data-letra="T" onclick="playNote3(84)" data-key="84" 	class="key sharp" data-note="F#">	<span class="hints">T</span></div>
					<div data-letra="G" onclick="playNote3(71)" data-key="71" 	class="key" 			data-note="G">	<span class="hints">G</span></div>
					<div data-letra="Y" onclick="playNote3(89)" data-key="89" 	class="key sharp" data-note="G#">	<span class="hints">Y</span></div>
					<div data-letra="H" onclick="playNote3(72)" data-key="72" 	class="key" 			data-note="A">	<span class="hints">H</span></div>
					<div data-letra="U" onclick="playNote3(85)" data-key="85" 	class="key sharp" data-note="A#">	<span class="hints">U</span></div>
					<div data-letra="J" onclick="playNote3(74)" data-key="74" 	class="key" 			data-note="B">	<span class="hints">J</span></div>
					<div data-letra="K" onclick="playNote3(75)" data-key="75" 	class="key" 			data-note="C">	<span class="hints">K</span></div>
					<div data-letra="O" onclick="playNote3(79)" data-key="79" 	class="key sharp" data-note="C#">	<span class="hints">O</span></div>
					<div data-letra="L" onclick="playNote3(76)" data-key="76" 	class="key" 			data-note="D">	<span class="hints">L</span></div>
					<div data-letra="P" onclick="playNote3(80)" data-key="80" 	class="key sharp" data-note="D#">	<span class="hints">P</span></div>
					<div data-letra=";" onclick="playNote3(186)" data-key="186" class="key" 			data-note="E">	<span class="hints">;</span></div>
				</div>
				<audio data-letra="A" id="a_65" 	data-key="65" 	src="media/040.wav"></audio>
				<audio data-letra="W" id="a_87" 	data-key="87" 	src="media/041.wav"></audio>
				<audio data-letra="S" id="a_83" 	data-key="83" 	src="media/042.wav"></audio>
				<audio data-letra="E" id="a_69" 	data-key="69" 	src="media/043.wav"></audio>
				<audio data-letra="D" id="a_68" 	data-key="68" 	src="media/044.wav"></audio>
				<audio data-letra="F" id="a_70" 	data-key="70" 	src="media/045.wav"></audio>
				<audio data-letra="T" id="a_84" 	data-key="84" 	src="media/046.wav"></audio>
				<audio data-letra="G" id="a_71" 	data-key="71" 	src="media/047.wav"></audio>
				<audio data-letra="Y" id="a_89" 	data-key="89" 	src="media/048.wav"></audio>
				<audio data-letra="H" id="a_72" 	data-key="72" 	src="media/049.wav"></audio>
				<audio data-letra="U" id="a_85" 	data-key="85" 	src="media/050.wav"></audio>
				<audio data-letra="J" id="a_74" 	data-key="74" 	src="media/051.wav"></audio>
				<audio data-letra="K" id="a_75" 	data-key="75" 	src="media/052.wav"></audio>
				<audio data-letra="O" id="a_79" 	data-key="79" 	src="media/053.wav"></audio>
				<audio data-letra="L" id="a_76" 	data-key="76" 	src="media/054.wav"></audio>
				<audio data-letra="P" id="a_80" 	data-key="80" 	src="media/055.wav"></audio>
				<audio data-letra=";" id="a_186"	data-key="186" 	src="media/056.wav"></audio>
			</section>
		</section>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="" ><button style='font:32px verdana;width:95%;' onclick="espacio();refoco();" onblur="refoco()">Space</button></div>
		<div style="float:left;width:100%;overflow:hidden;padding:10px;" id="" class="" ><input type='text' id='txt' style='font:32px verdana;width:75%;' oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" placeholder="write here the letters to be played"  onblur="refoco()">&nbsp;<button onclick="playme()"  onblur="refoco()"  style='font:32px verdana;width:20%;'>Play</button></div>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="" >ASDADAD SDFFDSF DFGDGDG FGHHGFH GASDFGH HSDFGHJ JDFGHJK KJHFJGKG D S A</div>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="" >AASAFD AASAGF AAKHFFDS JJHFGF</div>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="" >SSGGHHG FFDDSSA GDFSDAS GDFSDAS SSGGHHG FFDDSSA</div>
		<div style="float:left;width:100%;overflow:hidden;" id="" class="" >JJJ JJJ JLGHJ KKK KKJJ JJHHJH L</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="musica();parent.saveforlater('024',rpta)">Save for later</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="musica();parent.taskdone('024',rpta)">Task done!</button>
	</div>
	</body>
<script>
	const keys = document.querySelectorAll(".key"),
	note = document.querySelector(".nowplaying"),
	hints = document.querySelectorAll(".hints");
	function playNote3(cual) {
		var audio = document.getElementById("a_"+cual)
		var letra=document.getElementById("a_"+cual).getAttribute("data-letra");
		audio.currentTime = 0;
		audio.play();
		document.getElementById("txt").value+=letra;
	}
	function playNote(e) {
		const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`),
		key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
		if(e.keyCode==8)	document.getElementById("txt").value=document.getElementById("txt").value.substr(0,document.getElementById("txt").value.length-1);
		if(e.keyCode==32)	document.getElementById("txt").value+=" ";
		if (!key) return;
		var letra=document.getElementById("a_"+e.keyCode).getAttribute("data-letra");
		const keyNote = key.getAttribute("data-note");
		key.classList.add("playing");
		// note.innerHTML = keyNote;
		audio.currentTime = 0;
		audio.play();
		document.getElementById("txt").value+=letra;
	}
	function playNote2(numero) {
		if(numero!=" ")	{
			const audio = document.querySelector("audio[data-letra="+numero+"]"),
			key = document.querySelector(".key[data-letra="+numero+"]");
			if (!key) return;
			const keyNote = key.getAttribute("data-note");
			key.classList.add("playing");
			// note.innerHTML = keyNote;
			audio.currentTime = 0;
			audio.play();
		}
	}
	function removeTransition(e) {
		if (e.propertyName !== "transform") return;
		this.classList.remove("playing");
	}
	function hintsOn(e, index) {
		e.setAttribute("style", "transition-delay:" + index * 50 + "ms");
	}
	hints.forEach(hintsOn);
	keys.forEach(key => key.addEventListener("transitionend", removeTransition));
	// window.parent.addEventListener("keydown", playNote);
	var intervalo;
	var teclaactual=0;
	function playme()	{
		intervalo = setInterval(tecla, 500);
	}
	function tecla() {
		var texto=document.getElementById("txt").value;
		if (teclaactual < texto.length) playNote2(texto.substr(teclaactual,1));
    if (teclaactual >= texto.length) {
			teclaactual=0;
      clearInterval(intervalo);
    } else {
      teclaactual++; 
    }
  }
	function espacio()	{
		document.getElementById("txt").value=document.getElementById("txt").value+" ";
	}
	function reduce()	{
		if(document.getElementById('txt').value!="")	document.getElementById('txt').value=document.getElementById('txt').value.substr(0,document.getElementById('txt').value.length-1)
	}
	function refoco()	{
		rpta=document.getElementById("txt").value;
		window.parent.focus();
	}
</script>
</body>
</html>