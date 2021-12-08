<script>
var modo=1;	
var msg = new SpeechSynthesisUtterance();
var divspeechtxt="";
window.onload=function()	{
	var buffer=document.getElementById("divspeech").innerText;
	var voices = window.speechSynthesis.getVoices();
	msg.voice = voices[0]; 
	msg.volume = 1; // From 0 to 1
	msg.rate = 1; // From 0.1 to 10
	msg.pitch = 1; // From 0 to 2
	msg.lang = 'de';
	msg.text = buffer;
}	
function speechme()	{
	modo++;
	if(modo/2==parseInt(modo/2))	{
		speechSynthesis.speak(msg);		
	} else {
		speechSynthesis.cancel();		
	};
}
function cambio()	{
	if(document.getElementById("divspeech").classList.contains("spa"))	{
		document.getElementById("divspeech").classList.remove("spa")
		document.getElementById("divspeech").innerHTML=divspeechtxt;
		msg.lang = 'de';
		msg.text = document.getElementById("divspeech").innerHTML;
	} else {
		divspeechtxt=document.getElementById("divspeech").innerHTML;
		document.getElementById("divspeech").innerHTML="";		
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body {
	background:url('media/fm.jpg') center center no-repeat; 
	background-size: cover;
}	

@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}

@font-face {
	font-family:sports;
	src: url(media/queen.otf);
}
.fontsports {
	font-family: sports;
}

</style>
<body>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:120px;padding:0px 10px 50px 10px;color:#fff;text-shadow:5px 5px 1px #f00,7px 7px 1px #ff0;" class="fontsports"  >We will Rock you</div>
<div style="float:left;width:calc(100% - 100px);overflow:hidden;font-size:60px;padding:0px 50px;text-align:center;line-height:100%;color:#fff;text-shadow:-1px -1px 1px #fff,1px 1px 1px #00a,2px 1px 1px #fff,3px 2px 1px #fff;" id='divspeech'  class="" >
	Buddy you are a boy</br>
	make a big noise</br>
	Playing in the street</br>
	gonna be a big man someday</br>
	You got mud on your face</br>
	you big disgrace</br>
	Kicking your can </br>
	all over the place</br>
</div>
<!--
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
-->	
</body>

