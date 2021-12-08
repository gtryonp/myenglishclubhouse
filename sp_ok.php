<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Simplest possible examples of HTML, CSS and JavaScript.">
<meta name="author" content="//samdutton.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta itemprop="name" content="simpl.info: simplest possible examples of HTML, CSS and JavaScript">
<meta itemprop="image" content="/images/icons/icon192.png">
<meta id="theme-color" name="theme-color" content="#fff">
<base target="_blank">
<title>TS</title>
<style>
button#start {
  width: 50%;
	font-size:32px;
}
p#data {
  max-height: 500px;
  overflow-y: auto;
	font:13px verdana;
}
</style>
</head>
<body>
<div id="container">
  <button id="start">Click</button>
  <p id="data"></p>
  <script>
'use strict';
var data = document.querySelector('p#data');
function log(message) {
  data.innerHTML = message + '<br>' + data.innerHTML;
}
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
// recognition.lang = 'en-AU';
recognition.onresult = function(event) {
  var results = event.results;
  var interimTranscript = '';
  for (var i = event.resultIndex; i !== results.length; ++i) {
    var result = results[i];
			if(result[0].transcript.toLowerCase()=="plomo"			||	result[0].transcript.toLowerCase()=="grey")			document.body.style.background="#ccc";
			if(result[0].transcript.toLowerCase()=="azul"				||	result[0].transcript.toLowerCase()=="blue")			document.body.style.background="#00f";
			if(result[0].transcript.toLowerCase()=="blanco"			||	result[0].transcript.toLowerCase()=="white")		document.body.style.background="#fff";
			if(result[0].transcript.toLowerCase()=="amarillo"		||	result[0].transcript.toLowerCase()=="yellow")		document.body.style.background="#ff0";
			if(result[0].transcript.toLowerCase()=="naranja"		||	result[0].transcript.toLowerCase()=="orange")		document.body.style.background="#fa0";
			if(result[0].transcript.toLowerCase()=="rojo"				||	result[0].transcript.toLowerCase()=="red")			document.body.style.background="#f00";
			if(result[0].transcript.toLowerCase()=="verde"			||	result[0].transcript.toLowerCase()=="green")		document.body.style.background="#0f0";
			if(result[0].transcript.toLowerCase()=="negro"			||	result[0].transcript.toLowerCase()=="black")		document.body.style.background="#000";
    if (result.isFinal) {
      log('Final : ' + results[0][0].transcript);
      recognition.stop();
    } else {
      interimTranscript += result[0].transcript;
      // log('Interim transcript: ' + interimTranscript);
    }
  }
};
recognition.onend = function() {
	document.getElementById("start").style.background="#ccc";
	document.getElementById("start").innerHTML="Click";
  // log('Recognition ended.');
};
recognition.onerror = function(event) {
  log('Error: ' + event.error);
};
var start = document.querySelector('button#start');
start.onclick = function() {
	if(document.getElementById("start").innerHTML=="Escuchando")	{
		recognition.stop();
	} else {
		document.getElementById("start").style.background="#fff";
		document.getElementById("start").innerHTML="Escuchando";
		recognition.start();
	};		
};		
</script>
</div></body>
</html>