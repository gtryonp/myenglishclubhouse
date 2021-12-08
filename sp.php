<body>
<div style="float:left;padding:10px;background:rgba(242,191,222,0);" id="" class="" >
	<button id="start" onclick="toggleStartStop()" style="font:36px verdana;"></button>
</div>
<div style="float:right;padding:10px;background:rgba(242,191,222,0);" id="" class="" >
	<button id="restart" onclick="limpiar()" style="font:36px verdana;">Limpiar</button>
</div>	
<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:10px;background:rgba(242,191,222,0);display:anone;" id="" class="" >
	<div style="float:left;border:solid 1px #666;padding:10px;width:calc(100% - 20px)">
		<span id="final_span"></span>
		<span id="interim_span" style="color:grey"></span>
	</div>
</div>
<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:10px;background:rgba(242,191,222,0);" id="" class="" >
	<textarea style="width:100%;overflow:hidden;background:rgba(242,191,222,0);" id="txt"></textarea>	
</div>

</body>
<script type="text/javascript">
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var recognizing;
var recognition = new SpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
reset();
recognition.onend = reset;
recognition.onresult = function (event) {
	var final = "";
	var interim = "";
	for (var i = 0; i < event.results.length; ++i) {
		if (event.results[i].isFinal) {
			final += event.results[i][0].transcript;
		} else {
			interim += event.results[i][0].transcript;
		}
	}
	final_span.innerHTML = final;
	interim_span.innerHTML = interim;
}
function reset() {
	recognizing = false;
	document.getElementById("start").innerHTML = "Iniciar";
}
function toggleStartStop() {
	if (recognizing) {
		recognition.stop();
		reset();
		document.getElementById("txt").value=document.getElementById("txt").value+" "+document.getElementById("final_span").innerHTML+document.getElementById("interim_span").innerHTML;
	} else {
		recognition.start();
		recognizing = true;
		document.getElementById("start").innerHTML = "Stop";
		interim_span.innerHTML = "";
	}
}
function limpiar()	{
	document.getElementById('txt').value='';
	document.getElementById('final_span').innerHTML ='';
	document.getElementById('interim_span').innerHTML ='';
	recognition.stop();
	reset();	
}
</script>