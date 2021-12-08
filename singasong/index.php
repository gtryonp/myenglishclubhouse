<?
session_start();
if (!isset($_SESSION['clientesesion']))	$_SESSION['clientesesion']="";
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
// error_reporting( E_ALL );
ini_set("display_errors", 1);
header("Content-Type: text/html; charset=iso-8859-1");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
date_default_timezone_set("America/Lima");
ini_set("memory_limit","1200M");
?>
<!--HEAD																																																																																																-->
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> 
<meta name="DC.title" lang="en" content="English ClubHouse: Play Sing-a-Song!"/>
<meta property="og:url"                content="https://ech.lat.pe/singasong" />
<meta property="og:type"               content="WebSite" />
<meta property="og:title"              content="English ClubHouse Sing-a-Song" />
<meta property="og:description"        content="Sing like a pro and test your english skills here" />
<meta property="og:image"              content="https://ech.lat.pe/images/icon.jpg" />
<title>English ClubHouse Sing-a-Song </title>
<link rel="shortcut icon"  href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAACUklEQVQ4y4WSXUjTYRTGf/+57ItZNjB0oKY2NKUwP6oLEZUkggoyCIruLKLoqqK6CO0TvJMoIiRDEglCEyKwIam4hBqioG41rG0usWFbm2PqxrbTxZ/sw63O3Xs+nnOe530gSVicAalrGpJrz6zCP0KTrLAcieP6EmDys++PfN/EvCQFuNVrl4O3zQJQZUxXdhZl4A+Gsc+FBOBql1UaLr6ifdgtCQGGxjz0m2w8MDkF4GR1DnXlBlK1atvr9zOsWaulMm9z4gv6b1QpBcVZ3O+ZAiAzfR1OT4jxmQXsnpC4HD4O1BopMegU5/ySTLqDskqDljPl7CjQ02F2y/atG9hdoCcci9NlnkUkzpWjRQDcfG7lTrcNJZGAnSOz0vXGgW5jKm8tbgBq9uWSmgKPz5UpE+6gtLz4wJ5CvQrQO+qRkY9eju3NpDIvXQE40WqRqU9eGg8VkqKBh702tmVt4tH5Mr76l1lYilJdqFcPuNw5KVuOdMqpexaZcAdlf/Ow1DcPi9n+fUXtUWdAaq8PScUlk3T89gsrFNoGXKJbr6W128Y37yLT7YcT0jM2vpRYXLh7toLjlZmK9mfhdE2OAtBjmZOmJ+NJnReNCg31eWSkpSa351PzbFL77rrQJ2Ou4GoKf0fbgEsiMWFhKcrichSNBuJxeDc1j6m5SvkvAIBzLiDR0CJxrRbQYMzVr+pXAMTrFQYHIRxW1zgcoNNBSQlYraAoEIupOY8H8vPB74fi4l8XyPS0EAjAyAiUlqoDBgNEIuDzqe+0NHVQo1GXZWfzAy9NDTNuR/P1AAAAAElFTkSuQmCC" type="image/png" />
</head>
<style>
	body {
	background:url(../images/logosmall.png);
	margin: 0px auto; 
	apadding: 2px 5px; 
	font: calc(24px + .2vw) verdana; 
	color: #000; 
}
button	{
	width:50%;
	margin:10px 0px;
	box-shadow: 2px 2px 2px #fff inset;
	text-shadow:1px 1px 1px #fff;
	background:#4591d2;
	border:2px solid;
	padding:4px;
	aborder-radius:8px;
}
button:hover	{
	background:#85c1f2;
	box-shadow: 0px 0px 0px #fff inset;
}

@font-face { 
	font-family: bradley; 
	src: url('../fonts/nw.ttf'); 
}
.clasebradley	{ 
	margin: 0 auto; 
	text-align: left; 
	color: #fff; 
	font-family: bradley; 
	text-shadow: 1px 1px 1px #000;
}

#divtitulo {
   text-align:center;
	font-size: calc(60px + .5vw);
 }

#divsubtitulo	{
   text-align:center;
	font-size:calc(18px + 0.2vw);	 
 }
 
#divtitulotop {
   text-align:center;
	font-size:calc(28px + 0.2vw);	 
 }
 
.divrs{
	width:7%;
} 

@media screen and (max-width: 600px) {
  #divtitulo {
    text-align:left;
		font-size: calc(20px + .5vw);
  }
	
	#divsubtitulo	{
		 text-align:left;
		font-size:calc(16px + 0.2vw);		 
	 }
	 
	.divrs{
		width:20%;
	} 

	#divtitulotop {
	 text-align:left;
		font-size:calc(24px + 0.2vw);	 
	 }

	
}


</style>
<link rel="stylesheet" href="../fa/css/all.css">
<body>
<div style="float:left;width:100%;background:#1561b2;overflow:hidden;position:relative;" id="" class="" >
	<div style="float:left;width:100%;overflow:hidden;color:#fff;" id="divtitulotop" class="" >English ClubHouse</div>
	<div style="float:left;width:100%;margin:5px 0px 10px 0px;" id="divtitulo" class="clasebradley" >English the fun way!</div>
	<div style="position:absolute;float:left;top:0px;right:0px;width:50%;text-align:right;">
		<div title="Visit Facebook Site" 	style="float:right;cursor:pointer;margin:0px 10px;padding:5px 0px;color:#008;" class='divrs' onclick="window.open('https://www.facebook.com/EnglishClubHousePeru/')">																							<img style="width:90%;" src='../images/f1.png'></div>
		<div title="Visit Instagram site" style="float:right;cursor:pointer;margin:0px 10px;padding:5px 0px;color:#a00;" class='divrs' onclick="window.open('https://www.instagram.com/englishclubhouse/')">																								<img style="width:90%;" src='../images/i1.png'></div>
		<div title="WhatsApp" 						style="float:right;cursor:pointer;margin:0px 10px;padding:5px 0px;color:#a00;" class='divrs' onclick="window.open('https://wa.me/51992467502?text=Quisiera%20informacion%20acerca%20de%20English%20ClubHouse')">	<img style="width:90%;" src='../images/w1.png'></div>
	</div>	
	<div style="float:left;width:100%;overflow:hidden;color:#fff;text-shadow:2px 2px 2px #000" id="divsubtitulo" class="" >#yomequedoencasa</div>
</div>
<div style="float:left;width:calc(100% - 20px);padding:10px;background:#2581d2;color:#fff;text-align:justify;font: calc(10px + .4vw) verdana;position:relative;">
	<div title="Share this page!" 		style="float:right;cursor:pointer;margin:0px 20px;padding:20px 0px;color:#fff;" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://ech.lat.pe/singasong')"><i class="fas fa-share-alt fa-2x"></i></div>
	<b>Instructions:</b><br/>
	After the website has fully loaded, press the START button and read outloud as clearly as possible into your microphone.<br/>
	After you finish reading, press the Stop button. Now you will be able to listen to what your own voice sounds like when singing in English!<br/>
	The computer will allow you to hear the interpretation of your own pronunciation, are your lyrics the same as the original one? Hopefully yes, or even better maybe you have created your own funny lyrics to this song!
	You can press Restart/Clear all to start over again.	
</div>	
<div style="float:left;width:100%;overflow:hidden;" id="" class="" >&nbsp;</div>
<div style="float:left;width:15%;overflow:hidden;text-align:right;" id="" class="" >&nbsp;</div>
<div style="float:left;width:calc(70% - 0px);overflow:hidden;background:rgba(250,200,0,1);border:0px solid;text-align:center;color:#000;" id="" class="" >
	<div style="float:left;width:calc(100% - 32px);padding:4px 10px;margin:3px;border-radius:20px;overflow:hidden;font-size: calc(28px + .2vw);background:#2581d2;color:#fff;text-align:center;" id="" class="clasebradley" >We will rock you!</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(214,213,223,0);">Buddy you are a boy</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(255,172,225,0);">make a big noise</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(170,169,177,0);">Playing in the street</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(214,202,198,0);">gonna be a big man someday</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(152,169,234,0);">You got mud on your face</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(183,173,216,0);">you big disgrace</div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(240,205,186,0);">Kicking your can </div>
	<div class='claseplayno' style="float:left;text-align:center;width:100%;background:rgba(172,178,218,0);">all over the place</div>
	<img class='claseplaysi' src="../images/fm.jpg" style='display:none;'>	
</div>
<div style="float:left;width:15%;overflow:hidden;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:10px;background:rgba(242,191,222,0);display:anone;text-align:center;" id="" class="" >
		<button id="start" onclick="toggleStartStop()" 	style="width:70%;border-radius:20px;text-align:center;font-size:calc(24px + .2vw);" class="clasebradley">Start Recording</button>
	</div>
	<!--<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:5px;background:rgba(242,191,222,0);display:none;text-align:center;" id="" class="" ><button id="fix" onclick="fixone()"						 style="text-align:center;font-size:calc(24px + .2vw);" class="clasebradley">Clear Last Word</button></div>	-->
	<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:5px;background:rgba(242,191,222,0);display:anone;text-align:center;" id="" class="" >
		<button id="play" onclick="playtune()" 					style="width:70%;border-radius:20px;text-align:center;font-size:calc(24px + .2vw);" class="clasebradley">Play your song!</button>
	</div>
	<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:5px;background:rgba(242,191,222,0);display:anone;text-align:center;" id="" class="" >
		<button id="restart" onclick="limpiar()" 				style="width:70%;border-radius:20px;text-align:center;font-size:calc(24px + .2vw);" class="clasebradley">Restart/Clear</button>
	</div>	
	<div style="float:left;width:calc(100% - 20px);overflow:hidden;padding:10px;background:rgba(242,191,222,0);display:none;" id="" class="" >
		<div style="float:left;border:solid 1px #666;padding:10px;width:calc(100% - 20px);font:calc(12px + .2vw) verdana;background:#fff;">
			<span id="final_span"></span>
			<span id="interim_span" style="color:grey"></span>
		</div>
	</div>
	<div style="float:left;width:100%;overflow:hidden;padding:10px 0px 0px 0px;background:rgba(242,191,255,0);" id="" class="" >
		<div style="float:left;background:#1561b2;color:#fff;border-radius:10px;margin:5px;padding:4px 10px;" id="" class="" >Your song:</div>
		<textarea style="width:100%;height:50px;background:#FAC800;color:#000;" id="txt" readonly></textarea>	
	</div>
	<div class="divburbuja" style="float:left;position:absolute;bottom:0px;right:0px;" id="" class="" ><img src="../images/b1.png"></div>
	<div class="divburbuja" style="float:left;position:absolute;bottom:240px;right:20px;height:20px;color:#1561b2;text-align:right;cursor:pointer;font:bold 18px verdana;padding:2px 6px;;background:rgba(255,255,155,.75);border-radius:10px;" title="Dismiss" onclick="cierraburbuja()">X</div>
	<div class="divburbuja" style="float:left;position:absolute;bottom:120px;right:20px;height:120px;width:300px;color:#fff;font-size:16px;" id="" class="" >
		<div style="float:left;width:100%;text-align:center;padding:0px 0px 20px 0px;" id="" class="" ><b>Take a souvenir with you!</b></div>
		<div style="float:left;width:100%;padding:0px 0px 10px 0px;" id="" class="" >Enter your email and we will send you your song:</div>
		<input type='text' id='email' style="padding:4px;width:90%;">
	</div>
	
	
</body>
<script type="text/javascript">
	
function cierraburbuja()	{
	Array.from(document.querySelectorAll(".divburbuja")).forEach(function(actual) { actual.style.display="none";});
}
	
// window.onerror = function(msg, url, linenumber) {alert('Error : '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);return true;}
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var recognition = new SpeechRecognition();
var recognizing;
var espc=mobileAndTabletCheck();
var $_GET = {};			
document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
if($_GET['singasong']>0)	{
	var xhReq = new XMLHttpRequest();
	xhReq.open("POST", "clasesingasong.php", true);
	xhReq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');		
	xhReq.onreadystatechange = function() {
		if(xhReq.readyState == 4 && xhReq.status == 200) {
			document.getElementById("txt").value=xhReq.responseText;
		}
	};
	xhReq.send("modo=obtener&singasong="+$_GET['singasong']);
}		
recognition.continuous = true;
recognition.interimResults = true;
recognition.lang = 'en-US';
reset();
recognition.onend = reset;
recognition.onresult = function (event) {
	var final = "";
	var interim = "";
	for (var i = 0; i < event.results.length; ++i) {
		// document.getElementById("txt").value=document.getElementById("txt").value+" \n "+event.results[i].isFinal+" "+espc+" "+i+" "+event.results[i][0].transcript;
		if (event.results[i].isFinal) {
			if(!espc)	final += event.results[i][0].transcript;
			if(espc)	final = event.results[i][0].transcript;
		} else {
			if(!espc)	interim += event.results[i][0].transcript;
			if(espc)	interim = "";
		}
	}
	final_span.innerHTML = final;
	interim_span.innerHTML = interim;
}
function reset() {
	recognizing = false;
	document.getElementById("start").innerHTML = "Start Recording";
}
function toggleStartStop() {
	if (recognizing) {
		document.getElementById("restart").disabled=false;
		// document.getElementById("fix").disabled = false;
		document.getElementById("play").disabled = false;
		recognition.stop();
		reset();
		document.getElementById("txt").value=document.getElementById("txt").value+" "+document.getElementById("final_span").innerHTML+document.getElementById("interim_span").innerHTML;
		document.getElementById("final_span").innerHTML="";
		document.getElementById("interim_span").innerHTML="";
		var xhReq = new XMLHttpRequest();
		xhReq.open("POST", "clasesingasong.php", true);
		xhReq.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');		
		xhReq.onreadystatechange = function() {
			if(xhReq.readyState == 4 && xhReq.status == 200) console.log(xhReq.responseText);
		};
		xhReq.send("modo=grabar&email="+document.getElementById("email").value+"&cadena="+document.getElementById("txt").value);
	} else {
		document.getElementById("restart").disabled=true;
		// document.getElementById("fix").disabled = true;
		document.getElementById("play").disabled = true;
		recognition.start();
		recognizing = true;
		document.getElementById("start").innerHTML = "Stop Recording";
		interim_span.innerHTML = "";
	}
}
function fixone()	{
	document.getElementById('final_span').innerHTML ='';
	document.getElementById('interim_span').innerHTML ='';
	var speech=document.getElementById('txt').value.trim().split(" ");
	document.getElementById('txt').value="";
	for(k=0;k<speech.length-1;k++)	{
		document.getElementById('txt').value+=speech[k]+" ";
	}
} 
function limpiar()	{
	document.getElementById('txt').value='';
	document.getElementById('final_span').innerHTML ='';
	document.getElementById('interim_span').innerHTML ='';
	Array.from(document.querySelectorAll(".claseplayno")).forEach(function(actual) { actual.style.display="";});
	Array.from(document.querySelectorAll(".claseplaysi")).forEach(function(actual) { actual.style.display="none";});	
}
function playtune()	{
	Array.from(document.querySelectorAll(".claseplayno")).forEach(function(actual) { actual.style.display="none";});
	Array.from(document.querySelectorAll(".claseplaysi")).forEach(function(actual) { actual.style.display="";});
	if (window.speechSynthesis) {
		let u = new SpeechSynthesisUtterance();
		u.lang = "en-English";
		u.text = document.getElementById('txt').value;
		u.rate = 0.4;
		speechSynthesis.speak(u);
	}	
}
function mobileAndTabletCheck() {
  let check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};
</script>