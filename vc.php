<?php
session_start();	
// if (!isset($_SESSION['personasesion']))	header('Location: index.php');
$_GET['modo']=(!isset($_GET['modo']) ? "" : $_GET['modo'] );
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<title>VC</title>
<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAACUklEQVQ4y4WSXUjTYRTGf/+57ItZNjB0oKY2NKUwP6oLEZUkggoyCIruLKLoqqK6CO0TvJMoIiRDEglCEyKwIam4hBqioG41rG0usWFbm2PqxrbTxZ/sw63O3Xs+nnOe530gSVicAalrGpJrz6zCP0KTrLAcieP6EmDys++PfN/EvCQFuNVrl4O3zQJQZUxXdhZl4A+Gsc+FBOBql1UaLr6ifdgtCQGGxjz0m2w8MDkF4GR1DnXlBlK1atvr9zOsWaulMm9z4gv6b1QpBcVZ3O+ZAiAzfR1OT4jxmQXsnpC4HD4O1BopMegU5/ySTLqDskqDljPl7CjQ02F2y/atG9hdoCcci9NlnkUkzpWjRQDcfG7lTrcNJZGAnSOz0vXGgW5jKm8tbgBq9uWSmgKPz5UpE+6gtLz4wJ5CvQrQO+qRkY9eju3NpDIvXQE40WqRqU9eGg8VkqKBh702tmVt4tH5Mr76l1lYilJdqFcPuNw5KVuOdMqpexaZcAdlf/Ow1DcPi9n+fUXtUWdAaq8PScUlk3T89gsrFNoGXKJbr6W128Y37yLT7YcT0jM2vpRYXLh7toLjlZmK9mfhdE2OAtBjmZOmJ+NJnReNCg31eWSkpSa351PzbFL77rrQJ2Ou4GoKf0fbgEsiMWFhKcrichSNBuJxeDc1j6m5SvkvAIBzLiDR0CJxrRbQYMzVr+pXAMTrFQYHIRxW1zgcoNNBSQlYraAoEIupOY8H8vPB74fi4l8XyPS0EAjAyAiUlqoDBgNEIuDzqe+0NHVQo1GXZWfzAy9NDTNuR/P1AAAAAElFTkSuQmCC" rel="icon" type="image/png" />
<script>
window.onerror = function(msg, url, linenumber) {alert('Error : '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);return true;}
var $_GET = {};
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
var audioselect;
var videoselect;
var offset="180";
/*___ window.onload=function()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
window.onload=function()	{
	(function (b) { b.support.touch = "ontouchend" in document; if (!b.support.touch) { return; } var c = b.ui.mouse.prototype, e = c._mouseInit, a; function d(g, h) { if (g.originalEvent.touches.length > 1) { return; } g.preventDefault(); var i = g.originalEvent.changedTouches[0], f = document.createEvent("MouseEvents"); f.initMouseEvent(h, true, true, window, 1, i.screenX, i.screenY, i.clientX, i.clientY, false, false, false, false, 0, null); g.target.dispatchEvent(f); } c._touchStart = function (g) { var f = this; if (a || !f._mouseCapture(g.originalEvent.changedTouches[0])) { return; } a = true; f._touchMoved = false; d(g, "mouseover"); d(g, "mousemove"); d(g, "mousedown"); }; c._touchMove = function (f) { if (!a) { return; } this._touchMoved = true; d(f, "mousemove"); }; c._touchEnd = function (f) { if (!a) { return; } d(f, "mouseup"); d(f, "mouseout"); if (!this._touchMoved) { d(f, "click"); } a = false; }; c._mouseInit = function () { var f = this; f.element.bind("touchstart", b.proxy(f, "_touchStart")).bind("touchmove", b.proxy(f, "_touchMove")).bind("touchend", b.proxy(f, "_touchEnd")); e.call(f); }; })(jQuery);
	$("#divlocalvideo").draggable().resizable();
	$("#divremotevideo").draggable().resizable();
	$("#divdummyvideo").draggable().resizable();
	posiciones();
	Array.from(document.querySelectorAll('.divvideo')).forEach(function(actual) { actual.addEventListener('click', function (e) {
		document.getElementById("divlocalvideo").style.zIndex=1;
		document.getElementById("divremotevideo").style.zIndex=1;
		document.getElementById("divdummyvideo").style.zIndex=1;
		actual.style.zIndex=2;});
	});
	selecciones();
	window.top.document.addEventListener("dblclick", function() {soporteaudio();}, false);
}
/*___ function soporteaudio()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function soporteaudio()	{
	window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
	var recognition = new SpeechRecognition();
	recognition.continuous = true;
	recognition.start();
	document.title="Oyendo";
	console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;","inicio");
	recognition.onresult = function (event) {
		console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",event);
		for (var i = 0; i < event.results.length; ++i) {
			ultimo=event.results[i][0].transcript.toLowerCase().split(" ");
			orden=ultimo[ultimo.length-1];
			console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#080;font:bold 9px verdana;",event,orden);		
			$_GET['modo']=orden;
			posiciones();
			document.title=orden;
			recognition.stop();
		}
	}
}
/*___ function posiciones()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function posiciones()	{
	switch(true)	{
		case ($_GET['modo']=="servidor"):
			document.getElementById("divlocalvideo").style.top="000px"	;document.getElementById("divlocalvideo").style.left=offset+"px"	;document.getElementById("divlocalvideo").style.height=screen.height+"px"	;document.getElementById("divlocalvideo").style.width=(screen.width-offset)+"px"		;
			document.getElementById("divremotevideo").style.top=offset+"px"	;document.getElementById("divremotevideo").style.left="000px"	;document.getElementById("divremotevideo").style.height=offset+"px"	;document.getElementById("divremotevideo").style.width=offset+"px"	;	
			document.getElementById("divdummyvideo").style.top="000px"	;document.getElementById("divdummyvideo").style.left="000px"	;document.getElementById("divdummyvideo").style.height=offset+"px"	;document.getElementById("divdummyvideo").style.width=offset+"px"		;
			document.getElementById("divlocalvideo").style.display="none";
			document.getElementById("divfondo").style.zIndex="-1";document.getElementById("divfondo").style.top="000px";document.getElementById("divfondo").style.left="000px";document.getElementById("divfondo").style.height=screen.height+"px";document.getElementById("divfondo").style.width=offset+"px";document.getElementById("divfondo").style.background="rgba(200,200,200,1)";
			break;
		case ($_GET['modo']=="cliente"):
			document.getElementById("divdummyvideo").style.top="0px"	;document.getElementById("divdummyvideo").style.left="000px"	;document.getElementById("divdummyvideo").style.height=(screen.height/2)+"px"	;document.getElementById("divdummyvideo").style.width=(screen.width/2)+"px"	;	
			document.getElementById("divremotevideo").style.top="0px"	;document.getElementById("divremotevideo").style.left=(screen.width/2)+"px"	;document.getElementById("divremotevideo").style.height=(screen.height/2)+"px"	;document.getElementById("divremotevideo").style.width=(screen.width/2)+"px"	;	
			document.getElementById("divlocalvideo").style.display="none";
			break;
		case (true):
			document.getElementById("divremotevideo").style.top="000px"	;document.getElementById("divremotevideo").style.left="000px"	;document.getElementById("divremotevideo").style.height=screen.height+"px"	;document.getElementById("divremotevideo").style.width=screen.width+"px"	;
			document.getElementById("divlocalvideo").style.top="000px"	;document.getElementById("divlocalvideo").style.left="000px"	;document.getElementById("divlocalvideo").style.height="000px"	;document.getElementById("divlocalvideo").style.width="000px"		;
			document.getElementById("divdummyvideo").style.top="000px"	;document.getElementById("divdummyvideo").style.left="000px"	;document.getElementById("divdummyvideo").style.height="000px"	;document.getElementById("divdummyvideo").style.width="000px"		;
			break;
	}
	
}
/*___ function vc()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function vc(cualid)	{
	var nombreid=cualid;
	document.getElementById("localvideo").onloadedmetadata = function() {	consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;","localvideo start/onloadedmetadata");};
	document.getElementById("remotevideo").onloadedmetadata = function() {	consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;","remotevideo start/onloadedmetadata");};
	var fechayyyymmdd=new Date().getUTCFullYear()+(new Date().getUTCMonth() + 1<10 ? "0" : "")+(new Date().getUTCMonth() + 1)+(new Date().getUTCDate()<10 ? "0" : "")+new Date().getUTCDate();
	var roomHash="a_"+fechayyyymmdd;
	var drone = new ScaleDrone('YuT5CMZp7o6lDMsn');
	var roomName = 'observable-' + roomHash;
	var configuration = {
		iceServers: [{
			urls: 'stun:stun.l.google.com:19302'
		}]
	};
	let room;
	let pc;
	function onSuccess() {
		consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Connection sucess",pc);
	};
	function onError(error) {
		consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Connection failed! ",error);
	};
	drone.on('open', error => {
		if (error) {
			consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Open Error! ", error)
			return console.error(error);
		}
		room = drone.subscribe(roomName);
		room.on('open', error => {
			if (error) {
				consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Error X:",error);
				onError(error);
			}
		});
		room.on('members', members => {
		if (members.length >= 3) {
			 return consoleinfo("The room is full",members);
		 }	
			for(k=0;k<members.length;k++)	{
				consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#f0f;font:bold 9px verdana;","member",members[k]['id']);
			}
			var isOfferer = members.length === 2;
			startWebRTC(isOfferer);
		});
	});
	function sendMessage(message) {
		drone.publish({
			room: roomName,
			message
		});
	}
	function startWebRTC(isOfferer) {
		consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;",'Starting WebRTC in as', isOfferer ? 'offerer' : 'waiter');
		pc = new RTCPeerConnection(configuration);
		consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;"," Success RTCPeerConnection",pc);
		pc.onicecandidate = event => {
			consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Send Message to Candidate",event);
			if (event.candidate) {
				sendMessage({'candidate': event.candidate});
			}
		};
		if (isOfferer) {
			consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;"," Create Offer ",pc);
			pc.onnegotiationneeded = () => {
				pc.createOffer().then(localDescCreated).catch(onError);
			}
		}
		pc.ontrack = event => {
			consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Display remote video >>>",pc,event.streams);
			const stream = event.streams[0];
			if (!remotevideo.srcObject || remotevideo.srcObject.id !== stream.id) {
				remotevideo.srcObject = stream;
				consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;","remotevideo ok",remotevideo.srcObject,stream);
			} else {
				consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#f00;font:bold 9px verdana;","ERR remotevideo ",remotevideo.srcObject,stream);
			}
		};
		pc.onaddstream = function (e) {    consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","OnAddStream ",e) };
		navigator.mediaDevices.getUserMedia({
			audio: true,
			video: { deviceId: nombreid },
			data: true,
		}).then(stream => {
			localvideo.srcObject = stream;
			// dummyvideo.srcObject = stream;
			stream.getTracks().forEach(track => pc.addTrack(track, stream));
			consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;","Track: ",stream.getTracks());
		}, onError);
		room.on('data', (message, client) => {
			if (client.id === drone.clientId) {
				return;
			}
			if (message.sdp) {
				pc.setRemoteDescription(new RTCSessionDescription(message.sdp), () => {
					if (pc.remoteDescription.type === 'offer') {
						consoleinfo("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]","color:#008;font:bold 9px verdana;"," Answer call ",pc);
						pc.createAnswer().then(localDescCreated).catch(onError);
					}
				}, onError);
			} else if (message.candidate) {
				pc.addIceCandidate(
					new RTCIceCandidate(message.candidate), onSuccess, onError
				);
			}
		});
	}
	function localDescCreated(desc) {
		pc.setLocalDescription(
			desc,
			() => sendMessage({'sdp': pc.localDescription}),
			onError
		);
	}
}
/*___ function consoleinfo(a="" , b="" , c="" , d="" , e="")	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function consoleinfo(a="" , b="" , c="" , d="" , e="")	{
	document.getElementById("divconsolelog").innerHTML+=a+" "+b+" "+c+" "+d+" "+e+"<br/>";
	console.info(a,b,c,d,e);
}
/*___ function selecciones()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function selecciones()	{
	audioselect = document.querySelector('select#selectaudio');
	videoselect = document.querySelector('select#selectvideo');
	audioselect.onchange = getStream;
	videoselect.onchange = getStream;
	getStream().then(getDevices).then(gotDevices);
}	
/*___ function getDevices() { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function getDevices() {
  return navigator.mediaDevices.enumerateDevices();
}
/*___ function gotDevices(deviceInfos) { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function gotDevices(deviceInfos) {
  window.deviceInfos = deviceInfos; 
  console.log('Available input and output devices:', deviceInfos);
  for (const deviceInfo of deviceInfos) {
    const option = document.createElement('option');
    option.value = deviceInfo.deviceId;
    if (deviceInfo.kind === 'audioinput') {
      option.text = deviceInfo.label || `Microphone ${audioselect.length + 1}`;
      audioselect.appendChild(option);
    } else if (deviceInfo.kind === 'videoinput') {
      option.text = deviceInfo.label || `Camera ${videoselect.length + 1}`;
      videoselect.appendChild(option);
    }
  }
	var nombreid="";
	for(k=0;k<document.getElementById("selectvideo").options.length;k++)	{
		if(nombreid=="" || document.getElementById("selectvideo").options[k].text.indexOf("screen")>-1)	nombreid=document.getElementById("selectvideo").options[k].value;
	}
	vc(nombreid);
}
/*___ function getStream() { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function getStream() {
  if (window.stream) {
    window.stream.getTracks().forEach(track => {
      track.stop();
    });
  }
  const selectaudio = audioselect.value;
  const selectvideo = videoselect.value;
  const constraints = {
    audio: {deviceId: selectaudio ? {exact: selectaudio} : undefined},
    video: {deviceId: selectvideo ? {exact: selectvideo} : undefined}
  };
  return navigator.mediaDevices.getUserMedia(constraints).then(gotStream).catch(consoleinfo(""));
}
/*___ function gotStream(stream) { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function gotStream(stream) {
  window.stream = stream; // make stream available to console
  audioselect.selectedIndex = [...audioselect.options].findIndex(option => option.text === stream.getAudioTracks()[0].label);
  videoselect.selectedIndex = [...videoselect.options].findIndex(option => option.text === stream.getVideoTracks()[0].label);
	document.getElementById("dummyvideo").srcObject = stream;
}
</script>
<style>

body	{
	background:rgba(229,157,166,0.1);
}	
video {
  direction:rtl;
	afilter: contrast(100%) brightness(100%);
}
#divconsolelog	{
	font-size:calc(8px + .5vw);
	background:rgba(173,131,220,0.5);
}
select	{width:100%;}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>	
<body>
	<div style='display:none'>
		<select id="selectaudio"></select>
		<select id="selectvideo"></select>
	</div>	
	<div style="position:absolute;bottom:0px;left:0px;height:300px;width:75%;overflow-x:hidden;<? echo ($_GET['modo']=="debug" ? "" : "display:none" );?>" id="divconsolelog" class="" ></div>
	<div class="divvideo" id="divdummyvideo" style="position:absolute;top:000px;left:000px;height:300px;width:400px;overflow:hidden;" title="dummy">	
		<video id="dummyvideo" 	 	autoplay	muted	style="height:100%;width:100%;;background:rgba(200,200,200,0.5);"></video>
	</div>	
	<div class="divvideo" id="divremotevideo" style="position:absolute;top:300px;left:000px;height:300px;width:400px;overflow:hidden;" title="remote">	
		<video id="remotevideo" 	autoplay 				style="height:100%;width:100%;;background:rgba(255,150,053,0.5);"></video>
	</div>	
	<div class="divvideo" id="divlocalvideo" 	style="position:absolute;top:000px;left:400px;height:300px;width:400px;overflow:hidden;" title="local">	
		<video id="localvideo" 		autoplay 	muted	style="height:100%;width:100%;background:rgba(200,255,200,0.5);;"></video>
	</div>	
	<div id="divfondo" style="position:absolute;z-Index=0"></div>
</body>