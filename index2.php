<?
session_start();
if (!isset($_SESSION['clientesesion']))	$_SESSION['clientesesion']="";
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
ini_set("display_errors", 1);
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
date_default_timezone_set("America/Lima");
ini_set("memory_limit","1200M");
$p03="";
$image_names = "ilsc,scmz,lsea,derv,logi,eyen,vkxl,ihrx,mwgc,bwdk,rfwb,oezh";
$images = explode(',', $image_names);
shuffle($images);
$new_width = "1200";
$new_height= "400";
$split_size= "200";
$p03.= "<ul class='clasepuzzle' id='sortable' style='width:" . $new_width . "px;height:" . $new_height . "px;'>";
foreach ($images as $key => $image_name) {
	$p03.= "<li class='ui-state-default' id='recordArr_$image_name' style='border:none;width:" . $split_size . "px;height:" . $split_size . "px;'><img src='images/puzzle/$image_name.jpg' /></li>";
}
$p03.= "</ul>";
?>
<!--HEAD																																																																																																-->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<title>English Club House 20/20</title>
<link href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAACUklEQVQ4y4WSXUjTYRTGf/+57ItZNjB0oKY2NKUwP6oLEZUkggoyCIruLKLoqqK6CO0TvJMoIiRDEglCEyKwIam4hBqioG41rG0usWFbm2PqxrbTxZ/sw63O3Xs+nnOe530gSVicAalrGpJrz6zCP0KTrLAcieP6EmDys++PfN/EvCQFuNVrl4O3zQJQZUxXdhZl4A+Gsc+FBOBql1UaLr6ifdgtCQGGxjz0m2w8MDkF4GR1DnXlBlK1atvr9zOsWaulMm9z4gv6b1QpBcVZ3O+ZAiAzfR1OT4jxmQXsnpC4HD4O1BopMegU5/ySTLqDskqDljPl7CjQ02F2y/atG9hdoCcci9NlnkUkzpWjRQDcfG7lTrcNJZGAnSOz0vXGgW5jKm8tbgBq9uWSmgKPz5UpE+6gtLz4wJ5CvQrQO+qRkY9eju3NpDIvXQE40WqRqU9eGg8VkqKBh702tmVt4tH5Mr76l1lYilJdqFcPuNw5KVuOdMqpexaZcAdlf/Ow1DcPi9n+fUXtUWdAaq8PScUlk3T89gsrFNoGXKJbr6W128Y37yLT7YcT0jM2vpRYXLh7toLjlZmK9mfhdE2OAtBjmZOmJ+NJnReNCg31eWSkpSa351PzbFL77rrQJ2Ou4GoKf0fbgEsiMWFhKcrichSNBuJxeDc1j6m5SvkvAIBzLiDR0CJxrRbQYMzVr+pXAMTrFQYHIRxW1zgcoNNBSQlYraAoEIupOY8H8vPB74fi4l8XyPS0EAjAyAiUlqoDBgNEIuDzqe+0NHVQo1GXZWfzAy9NDTNuR/P1AAAAAElFTkSuQmCC" rel="icon" type="image/png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script defer src="./fa/js/all.js"></script>
<script src="./js/libs/dat.gui.min.js"></script>
<script src="./js/libs/utils.js"></script>
<script src="./js/libs/webgl-utils.js"></script>
<script src="./js/clmtrackr.js"></script>
<script src="./js/model_pca_20_svm.js"></script>
<script src="./js/libs/Stats.js"></script>
<script src="./js/face_deformer.js"></script>
<script src="./js/libs/jquery.min.js"></script>
<script src="./js/libs/poisson_new.js"></script>
<script src="./js/jquery-1.7.2.js"></script>
<script src="./js/jquery.ui.core.js"></script>
<script src="./js/jquery.ui.widget.js"></script>
<script src="./js/jquery.ui.mouse.js"></script>
<script src="./js/jquery.ui.sortable.js"></script>
</head>
<!--JS																																																																																																-->
<script type="text/javascript">
var Inter;
var resizeEnd;
var imglogopos=0;
var imglogosuma=10;
var f1=1;f2=1;f3=1;
var sf1=1;sf2=1;sf3=1;
var tiempop05;
var posicion05=0;
window.onload = function () { 
	function_p01();
	function_p02();
	function_p03();
	function_p04();
	function_p05();
	parameters();
	recalcula();
}
$(window).bind('resize', function(e) {
	clearTimeout(resizeEnd);
	resizeEnd = setTimeout(function() {recalcula();}, 500);
});
function recalcula()	{
	document.getElementById("p01").style.height=window.innerHeight+"px";
	document.getElementById("p02").style.height=window.innerHeight+"px";
	document.getElementById("p03").style.height=window.innerHeight+"px";
	document.getElementById("p04").style.height=window.innerHeight+"px";
	document.getElementById("p05").style.height=window.innerHeight+"px";
	if(window.innerHeight>window.innerWidth)	{
		document.getElementById("divlogo").style.width="100%";
		document.getElementById("divmsg1").style.width="100%";
		document.getElementById("divmsg2").style.width="100%";
		document.getElementById("divmsgs").style.width="100%";
		document.getElementById("divmsg0").style.height="10px";
		document.getElementById("divtitlep04").style.display="none";
		document.getElementById("divmarcop04").style.width="100%";
		Array.from(document.querySelectorAll('.clasepuzzle')).forEach(function(actual) { actual.style.transform ="scale(0.5)" });
	} else {
		document.getElementById("divlogo").style.width="40%";
		document.getElementById("divmsgs").style.width="60%";
		document.getElementById("divmsg1").style.width="100%";
		document.getElementById("divmsg2").style.width="100%";
		document.getElementById("divmsg0").style.height="200px";
		document.getElementById("divtitlep04").style.display="";
		document.getElementById("divmarcop04").style.width="60%";
		Array.from(document.querySelectorAll('.clasepuzzle')).forEach(function(actual) { actual.style.transform ="scale(1)" });
	}
}
function pagina(cual)	{
	var rpta="";
	paginaactual=parseInt(document.documentElement.scrollTop/window.innerHeight)+1;
	if(cual>0)	if(paginaactual<5)	rpta=(paginaactual+1);
	if(cual<0)	if(paginaactual>1)	rpta=(paginaactual-1);
	if(rpta!="")	$('html, body').animate({	scrollTop: $('#p0'+rpta).offset().top}, 800)
}
/*___ function parameters()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function parameters()	{
	document.body.style.height=(window.innerHeight*5)+"px";
	setInterval(function(){ consolelog("screen.height="+screen.height +"\nscreen.width="+screen.width +"\nwindow.innerWidth="+window.innerWidth +"\nwindow.innerHeight="+window.innerHeight +"\nwindow.pageXOffset="+window.pageXOffset +"\nwindow.pageYOffset="+window.pageYOffset +"\ndocument.documentElement.clientWidth="+document.documentElement.clientWidth +"\ndocument.documentElement.clientHeight="+document.documentElement.clientHeight +"\ndocument.documentElement.scrollLeft="+document.documentElement.scrollLeft +"\ndocument.documentElement.scrollTop="+document.documentElement.scrollTop +"\ndocument.body.clientWidth="+document.body.clientWidth +"\ndocument.body.clientHeight="+document.body.clientHeight +"\ndocument.body.scrollLeft="+document.body.scrollLeft +"\ndocument.body.scrollTop="+document.body.scrollTop+"\nwindow.devicePixelRatio:"+window.devicePixelRatio);}, 100);
	// window.top.addEventListener('dblclick', function (e) {alert(document.documentElement.scrollTop);});
	// window.top.document.addEventListener('scroll', function() {var paginaactual=parseInt(document.documentElement.scrollTop/window.innerHeight)+1;console.log(document.documentElement.scrollTop,paginaactual)});
}
/*___ function function_p01()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function function_p01()	{
	document.getElementById("p01").style.background="#58e";
	setInterval(function(){clock();},6000);
	setInterval(function(){msg();},100);
	var rpta="";
	var actual=document.getElementById("divmsg").innerText;
	for(k=0;k<actual.length;k++)	{
		rpta+="<span style='color:#"+(Math.random()>.5 ? "f" : "0" )+(Math.random()>.5 ? "f" : "0" )+(Math.random()>.5 ? "f" : "0" )+";'>"+actual.substr(k,1)+"</span>";
	}
	document.getElementById("divmsg").innerHTML=rpta;
	var numero=0;
	setInterval(function(){ 
		obj=document.getElementById("p01");
		tab = document.createElement('div');
		tab.id="tab_"+numero;
		numero++;
		deg=parseInt(Math.random()*90-50);
		tab.innerHTML="<div style='float:left;position:absolute;top:10%;right:20%;' id='divfoto' class='' ><img src='images/foto_0"+parseInt(1+Math.random()*4)+".jpg' title='images/foto_0"+(1+Math.random()*4)+".jpg' style='padding:10px 10px 10px 10px;background:rgba(255,255,255,1);border:1px solid #ccc;height:250px;transform:rotate("+deg+"deg);box-shadow:10px 10px 10px #000;'></div>";
		obj.appendChild(tab);
		if(numero>10)	{
			obj=document.getElementById("tab_"+(numero-10));
			obj.parentElement.removeChild(obj);
		}
	}, 5000);
}
/*___ function msg()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function msg()	{
	// if(f1>10 || f1<2)	{sf1=-1*sf1;f2+=sf2};
	// if(f2>10 || f2<2)	{sf2=-1*sf2;f3+=sf3};
	// if(f3>10 || f3<2)	{f1=1;f2=1;f3=1;sf1=1;sf2=1;sf3=1;};
	// f1+=sf1;
	// document.getElementById("divmsg").style.textShadow="-"+f1+"px -"+f2+"px "+f3+"px #fff, "+f1+"px "+f2+"px "+f3+"px #000";
}
/*___ function clock()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function clock()	{
	var vstart=setInterval(function(){
		imglogopos=imglogopos+imglogosuma;
		if(imglogopos>20)		imglogosuma=-10;
		if(imglogopos<-20)	imglogosuma=10;
		if(imglogopos==0 && imglogosuma>0)	{
			window.clearInterval(vstart);
		}
		document.getElementById("imglogo").style.transform = "rotate("+imglogopos+"deg)";		
	}, 100);
}
/*___ function function_p02()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function function_p02()	{
	// document.getElementById("p02").style.top=1*window.innerHeight+"px";document.getElementById("p02").style.height=window.innerHeight+"px";
	document.getElementById("p02").style.background="linear-gradient(to right, rgba(0,0,32), rgba(0,0,96,1))";
	setInterval(function(){ startClock();},100)
	window.top.addEventListener('scroll', function (e) {
		if(parseInt(document.documentElement.scrollTop/window.innerHeight)+1<3)	{
			document.getElementById("divsha").style.left=(window.innerWidth*.8-document.documentElement.scrollTop)+"px";
			document.getElementById("divshb").style.right=(window.innerWidth*.8-document.documentElement.scrollTop)+"px";
			var valoractual=document.documentElement.scrollTop/window.innerHeight-.9;
			if(valoractual>0 && valoractual<=.5)	{
				valoractual+=valoractual+.5;
				console.info("%c["+new Date().toLocaleString()+"."+new Date().getUTCMilliseconds()+"]"+arguments.callee.name,"color:#008;font:bold 9px verdana;",window.innerWidth*.8-document.documentElement.scrollTop,valoractual);
				document.getElementById("divsha").style.opacity=valoractual;
				document.getElementById("divshb").style.opacity=valoractual;
			}
			Array.from(document.querySelectorAll('.banner')).forEach(function(actual) { actual.style.opacity=(document.documentElement.scrollTop)/(window.innerHeight);});
		}
	});
}
/*___ function function_p03()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function function_p03()	{
	// document.getElementById("p03").style.top=2*window.innerHeight+"px";document.getElementById("p03").style.height=window.innerHeight+"px";
	document.getElementById("p03").style.background="#090";
	$("#sortable").sortable({
		opacity: 0.6,
		cursor: 'move',
		update: function() {
			var winningString = "oezh,rfwb,lsea,vkxl,ihrx,ilsc,eyen,mwgc,derv,logi,bwdk,scmz";
			var currentString = '';
			$('#sortable li').each(function(){
				var imageId = $(this).attr("id");
				currentString += imageId.replace("recordArr_", "")+",";
			});
			currentString = currentString.substr(0,(currentString.length) -1);
			if(currentString == winningString){
				alert("Good for you!");
			}
		}
	});
}
/*___ function function_p04()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function function_p04()	{
	// document.getElementById("p04").style.top=3*window.innerHeight+"px";document.getElementById("p04").style.height=window.innerHeight+"px";
	document.getElementById("p04").style.background="#ff0";
	window.top.document.addEventListener('scroll', function() {
		var paginaactual=parseInt(document.documentElement.scrollTop/window.innerHeight)+1;
		document.getElementById("historia").style.opacity=1;
		if(paginaactual>3)	document.getElementById("historia").style.opacity=(document.documentElement.scrollTop-3*window.innerHeight)/(window.innerHeight);
	});
}
/*___ function function_p05()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function function_p05()	{
	// document.getElementById("p05").style.top=4*window.innerHeight+"px";document.getElementById("p05").style.height=window.innerHeight+"px";
	document.getElementById("p05").style.background="#514";
	window.top.document.addEventListener('scroll', function() {
		if((parseInt(document.documentElement.scrollTop/window.innerHeight)+1)>3)	{
			clearInterval(tiempop05);
			tiempop05=setInterval(function(){
				document.getElementById("divp05mensaje2").innerHTML+="<span style='color:#"+(Math.random()>.5 ? "f" : "9" )+(Math.random()>.5 ? "f" : "9" )+(Math.random()>.5 ? "f" : "9" )+";'>"+document.getElementById("divp05mensaje").innerHTML.substr(posicion05++,1)+"</span>";
			}, 50);
		} else {
			clearInterval(tiempop05);
			posicion05=0;
			document.getElementById("divp05mensaje2").innerHTML="";
		};
	});
}
/*___ function consolelog(cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function consolelog(cual)	{
	document.getElementById("consolelog").innerHTML=cual;
}
/*___ function startClock() { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function startClock() {
	var angle = 360/60,
	date = new Date(),
	hour = date.getHours() % 12,
	minute = date.getMinutes(),
	second = date.getSeconds(),
	hourAngle = (360/12) * hour + (360/(12*60)) * minute;
	$('#minute')[0].style["transform"] 	= 'rotate('+angle * minute+'deg)';
	$('#second')[0].style["transform"] 	= 'rotate('+angle * second+'deg)';
	$('#hour')[0].style["transform"] 		= 'rotate('+hourAngle+'deg)';
}
</script>
<style>
body {
	margin: 0px auto; 
	padding: 0px; 
	font: 2vmin verdana; 
	color: #000; 
}
.btn		{width:calc(50% - 4px);font:18px verdana;padding:10px 0px;}
select 	{width:calc(50% - 4px);font:24px verdana;padding:10px 0px;}
#clock {
	position: absolute;
	awidth: 90px;
	aheight: 90px;
	background-image: url('images/clockFace.png');
	amargin: 3em auto;
}
#clock div {
    position: absolute;
}
#clock img[src*='second'] {
    transition: transform 600000s linear;
}
#clock:target img[src*='second'] {
    transform: rotate(3600000deg);
}
#clock img[src*='minute'] {
    transition: transform 360000s linear;
}
#clock:target img[src*='minute'] {
    transform: rotate(36000deg);
}
#clock img[src*='hour'] {
    transition: transform 216000s linear;
}
#clock:target img[src*='hour'] {
    transform: rotate(360deg);
}
@font-face { 
	font-family: bradley; 
	src: url('fonts/bradley.ttf'); 
}
@font-face { 
	font-family: hechoamano; 
	src: url('fonts/hechoamano.ttf'); 
}
@font-face { 
	font-family: gsc; 
	src: url('fonts/gsc.ttf'); 
}
.clasehechoamano { 
	margin: 0 auto; 
	padding: 0; 
	text-align: left; 
	color: #000; 
	font-family: hechoamano; 
	font-size: 75px;
}
.clasegsc { 
	margin: 0 auto; 
	padding: 0; 
	text-align: left; 
	color: #000; 
	font-family: gsc; 
}
.clasebradleyp01 { 
	margin: 0 auto; 
	padding: 0; 
	text-align: center; 
	font-family: bradley; 
	text-shadow: 1px 1px 1px #000, 2px 2px 20px #020;
}
.clasebradleyp03 { 
	margin: 0 auto; 
	padding: 0; 
	text-align: left; 
	color: #cbd9ef; 
	font-family: bradley; 
	text-shadow: 5px 5px 1px #000, 2px 2px 2px #fa0;
}
.clasebradleyp04	{ 
	margin: 0 auto; 
	text-align: left; 
	color: #00a; 
	font-family: bradley; 
	text-shadow: 1px 2px 1px #f00, 2px 2px 2px #fa0;
}
#sortable 		{ list-style-type: none; margin: 10px auto; padding: 0; }
#sortable li 	{ float: left;}       
#overlay, #webgl {
	position: absolute;
	top: 0px;
	left: 0px;
	-o-transform : scaleX(-1);
	-webkit-transform : scaleX(-1);
	transform : scaleX(-1);
	-ms-filter : fliph; /*IE*/
	filter : fliph; /*IE*/
}
#videoel {
	-o-transform : scaleX(-1);
	-webkit-transform : scaleX(-1);
	transform : scaleX(-1);
	-ms-filter : fliph; /*IE*/
	filter : fliph; /*IE*/
}
#container {
	position : relative;
	width : 370px;
	aleft:30%;
}
#content {
	margin-top : 50px;
	margin-left : auto;
	margin-right : auto;
	max-width: 600px;
}
.paginacion	{
	color: #adf;
	text-shadow: 5px 5px 5px rgba(0,0,0,1);	
}
</style>
<body>
	<div style='float:left;width:100%;overflow:hidden;background:rgba(200,200,200,1);position:fixed;top:0px;left:0px;' id='consolelog'  ></div>
	
		<div style="float:left;width:100%;overflow:hidden;position:relative;left:0px;top:0px;width:100%;border:0px solid;" id="p01" class="pagina" >
			<div style='float:left;width:100%;overflow:hidden;height:15%;width:100%;' id='' class='' >
				<div style="float:right;cursor:pointer;margin:0px 10px;padding:20px 0px;color:#ddf;" onclick="window.open('https://www.facebook.com/EnglishClubHousePeru/')"><i class="fab fa-facebook fa-3x"></i></div>
				<div style="float:right;cursor:pointer;margin:0px 10px;padding:20px 0px;color:#ddf;" onclick="window.open('https://www.instagram.com/englishclubhouse/')"><i class="fab fa-instagram fa-3x"></i></div>
				<div style="float:right;cursor:pointer;margin:0px 10px;padding:20px 0px;color:#ddf;" onclick="window.open('https://tryonsite.com/myech')"><i class="fas fa-user-friends fa-3x"></i></div>
			</div>
			<div id="divlogo" style='float:left;overflow:hidden;padding:0px 0px 10px 0px;width:25%;text-align:center;' ><img id="imglogo" src="images/logo.png" style="width:80%;"></div>
			<div id="divmsgs" style='float:left;overflow:hidden;padding:0px 0px 10px 0px;width:75%;;background:rgba(107,250,177,0);' >
				<div style='float:left;width:100%;overflow:hidden;background:rgba(200,200,200,0);' id='divmsg0' class='' >&nbsp;</div>
				<div style='float:left;overflow:hidden;	font-size: calc(10px + 4vw);width:100%;padding:0px 0px 0px 0px;color: #abb9cf;text-shadow: -5px -5px 5px #ddd, 2px 2px 2px #000;;background:rgba(204,141,241,0);' 	id='divmsg1' class='clasebradleyp01' >Welcome to the</div>
				<div style='float:left;overflow:hidden;	font-size: calc(10px + 6vw);width:100%;padding:0px 0px 0px 0px;color: #ff9		;text-shadow: -5px -5px 5px #ddd, 2px 2px 2px #000;;background:rgba(216,221,169,0);' 	id='divmsg2' class='clasebradleyp01' >English Club House</div>
			</div>	
			<div style='position:absolute;bottom:50px;float:left	;width:80%;overflow:hidden;font-size:calc(10px + 4vw);text-shadow:1px 1px 1px #fff;' 															class='clasehechoamano' id='divmsg' >Aprender nunca fue tan divertido!</div>
			<div style='position:absolute;bottom:0px;float:right	;width:80%;overflow:hidden;font-size:calc(10px + 4vw);text-shadow:1px 1px 1px #fff;text-align:right;color:#00f;' 	class='clasehechoamano' id='divmsg' >Learn never was so fun!</div>
		</div>
		<div style="float:left;width:100%;overflow:hidden;position:relative;width:100%;border:0px solid;" id="p02" class="pagina" >
			<div style='position:absolute;top:590px;left:-150px;float:left;width:200%;height:240px;background:rgba(250,250,250,0.95);transform:rotate(-5deg)' id='' class='banner' >&nbsp;</div>	
			<div style='position:absolute;top:620px;left:-150px;float:left;width:200%;height:180px;background:rgba(200,0,0,0.95);transform:rotate(-5deg)' 		id='' class='banner' >&nbsp;</div>	
			<div style='position:absolute;top:130px;left:-150px;float:left;width:300%;height:240px;background:rgba(250,250,250,0.95);transform:rotate(5deg)' id=''	class='banner' >&nbsp;</div>	
			<div style='position:absolute;top:140px;left:-150px;float:left;width:300%;height:180px;background:rgba(200,000,000,0.95);transform:rotate(5deg)' id='' class='banner' >&nbsp;</div>	
			<div style='position:absolute;top:350px;left:0px;float:left;width:200%;height:240px;background:rgba(250,250,250,0.95);' 													id='' class='banner' >&nbsp;</div>	
			<div style='position:absolute;top:380px;left:0px;float:left;width:200%;height:180px;background:rgba(200,0,0,0.95);' 															id='' class='banner' >&nbsp;</div>	
			<div id="bb" style="position:absolute;top:0px;left:100px;height:1000px;" onclick="window.open('vc.php')">
				<img src="images/bb.png">
			</div>
			<div id="clock" style="position:absolute;top:425px;left:155px;">
				<div id="hour"><img src="images/hourhand.png" /></div>
				<div id="minute"><img src="images/minutehand.png" /></div>
				<div id="second"><img src="images/secondhand.png" /></div>
			</div>
			<div id='divsha' style="position:absolute;right:10%;top:10%;width:40%;"><img src="images/sh.png" style="width:100%"></div>
			<div id='divshb' style="position:absolute;right:10%;top:10%;width:40%;"><img src="images/sh.png" style="width:100%"></div>
			<div style='float:left;position:absolute;top:0px;font:bold calc(10px + 2vw) verdana;width:100%;overflow:hidden;color:#fff;text-shadow:1px 1px 1px #000;' id='' class='' >Clock Rocks! It really works!</div>
		</div>
		<div style="float:left;width:100%;overflow:hidden;position:relative;" id="p03" class="pagina" >
			<div style='float:left;width:100%;overflow:hidden;padding:30px 0px 0px 20px;font-size:calc(10px + 2vw);' id='' class='clasebradleyp03' >Drag & Drop the pieces to</div>
			<div style='float:left;width:100%;overflow:hidden;padding:0px 0px 50px 100px;	color: #fff;;font-size:calc(20px + 2vw);' id='' class='clasebradleyp03' >Solve the Puzzle!</div>
			<div style='float:left;width:100%;overflow:hidden;text-align:center;' class='clasepuzzle' ><?= $p03;?></div>
		</div>
		<div style="float:left;width:100%;overflow:hidden;position:relative;left:0px;top:0px;width:100%;border:0px solid;" id="p04" class="pagina" >
				<div style='float:left;width:40%;overflow:hidden;padding:25px 0px;text-align:center;font-size: calc(50px + 2vw);' id='divtitlep04' class='clasebradleyp04'  >Now is time to be an spy!</div>
				<div style='padding:50px 0px;float:right;width:60%;text-align:center;' id='divmarcop04'  ondblclick="this.style='position:fixed;top:0px;right:20px;zoom:0.35;;background:rgba(100,100,100,.5);'">
					<div id="container" >
						<video id="videoel" 	width="400" height="300" 	></video>
						<canvas id="overlay" 	width="400" height="300"	></canvas>
						<canvas id="webgl" 		width="400" height="300"	></canvas>
						<input class="btn" type="button" value="Start" onclick="xx();startVideo()" id="startbutton" style="font:24px verdana;"></input>
						<select name="mask" id="selectmask" style=""> <option value="0">Average face</option> <option value="1">Terminator</option> <option value="2">Walter</option> <option value="3">Tony Stark</option> <option value="4">Bieber</option> <option value="5">Kim</option> <option value="6">Rihanna</option> <option value="7">Audrey Hepburn</option> <option value="8">Bill Murray</option> <option value="9">Sean Connery</option> <option value="10">Cage</option> <option value="11">The Queen</option> <option value="12">Groot</option> <option value="13">Chuck Norris</option> <option value="14">Mona Lisa</option> <option value="15">Picasso</option> <option value="16">Abstract (Scream)</option> <option value="17">Messi</option> </select>
					</div>
					<div style="display:none"><canvas id="webgl2" width="400" height="300"></canvas></div>
				</div>
				<div style='float:left;width:calc(100% - 40px);padding:20px;color:#0a0;text-shadow:2px 2px 1px #060;overflow:hidden;font-family:verdana;font-size: calc(15px + 1vw);text-align:center;' id='' class='' >(for a better experience, stay in the middle of the webcam focus while press the start button and stay hold until the camera finish detecting your face)</div>
				<div style='float:left;width:calc(100% - 40px);padding:20px;color:#060;text-shadow:2px 2px 1px #000;overflow:hidden;font-family:verdana;font-size: calc(15px + 1vw);text-align:center;' id='' class='' >Double click on the video to stick on the top screen</div>
		</div>		
		<div style="float:left;width:100%;overflow:hidden;position:relative;left:0px;top:0px;width:100%;border:0px solid;padding:0px;" id="p05" class="pagina" >
			<div style='float:left;width:calc(20%);padding:100px 0px 0px 0px;' id='' class='' >
				<img src="images/home.jpg" style='padding:10px 10px 10px 10px;background:rgba(255,255,255,1);border:1px solid #ccc;height:250px;transform:rotate(15deg);box-shadow:10px 10px 10px #000;width:100%;height:100%;'>
				<div style='float:left;position:absolute;bottom:0px;left:20px;width:25%;'><img src="images/colors2.png" style="width:100%;height:100%;"></div>
			</div>
			<div style='float:left;width:calc(70%);overflow:hidden;padding:40px 0px;text-align:justify;color:#fff;text-shadow:-1px -1px 1px #fff, 1px 1px 1px #000;opacity:0.1;font-size:calc(15px + 2vw);line-height: calc(15px + 2vw);	' id='historia' class='clasegsc' >
				<span style="color:#fc6;text-shadow:-1px 0px 1px #fff,3px 0px 1px #f00;font-size:(45px + 1vw);"><b>La historia de English ClubHouse:</b></span></br>
				<div id='divp05mensaje'  style="width:100%;display:none;">
				¡Hola! Soy Lizzy, y desde hace 10 años doy clases particulares de Ingles. En un inicio, yo iba a la casa de mis alumnos, a la par, estudiaba en la universidad (¡también soy odontóloga!), posteriormente, empecé a trabajar para un instituto que enseñaba Ingles a adultos. En todo este tiempo, nunca dejé de trabajar con niños y poco a poco el “boca a boca”, hizo que mis horarios se llenen por completo por lo que tuve que dejar mi trabajo en el instituto y es así nació English ClubHouse.
				Así como tú, mi lengua materna también es el español, pero cuando me escuchan hablar inglés piensan que el inglés es mi lengua materna. Y es que, cuando era niña, viví en el extranjero y me sumergí en un mundo 100% en inglés y eso es exactamente lo que hacemos en English ClubHouse. Junto a mi esposo, Diego, creamos un lugar donde los niños puedan aprender y practicar Ingles a través de actividades cotidianas. En English ClubHouse, tenemos diferentes clubs como el Club de Reciclaje, Club de Chef, Club de Manualidades, Club de Juegos, Club de Teatro y otros más que hoy en día son la esencia de English ClubHouse (y la razón por la que desde setiembre recibimos llamadas por nuestro taller de verano). Todas las actividades dentro de los Clubs se realizan 100% en Ingles, en grupo pequeños, y con profesores bilingües y nativos (¡así como yo aprendí!).  English ClubHouse cuenta con un programa diseñado especialmente para que niños y adolescentes puedan dominar con mejor fluidez y correcta gramática el idioma con sesiones 100% en Ingles. 
				Tenemos alumnos de más de 10 colegios diferentes que día a día confían en nosotros para aprender inglés, prepararse para exámenes internacionales, mejorar su pronunciación y gramática, y aumentar su confianza al momento de hablar en inglés. Diseñamos diferentes programas para que los alumnos pueden escoger de acuerdo a sus necesidades; sesiones grupales (MAXIMO 4 POR SESION, SEMIPERSONALIZADO), sesiones particulares en English ClubHouse, y sesiones en casa. Ahora también, contamos con programa para adultos, ya que muchos padres de familia que en un inicio vinieron por clases para sus hijos vieron los resultados y ellos hoy en día también son alumnos de English ClubHouse.
				¿Porque English ClubHouse es único?
				Nuestra metodología es dinámica y divertida, no tradicional. Comprendemos que cada niño es independiente y avanza a su propio ritmo. En English ClubHouse valoramos cada etapa del desarrollo y sabemos que la infancia es una etapa única que siempre debe dejar buenos recuerdos. Es por eso que contamos con el apoyo psicológico permanente para que el área emocional de los niños siempre este resguardada. También, contamos con ambientes diseñados de forma didáctica y acogedora para darte las mejores herramientas al momento de aprender.<br/>
				¡Te esperamos! 			
				</div>
				<div id='divp05mensaje2' style="width:100%;"></div>
			</div>
		</div>
		<div style='position:fixed;bottom:20px;right:20px;float:left;overflow:hidden;font-size:60px;cursor:pointer;filter:drop-shadow(2px 2px 2px #666)' id='' class='' onclick="pagina(+1)"><i class="paginacion fas fa-arrow-alt-circle-down" style=""></i></div>
		<div style='position:fixed;bottom:80px;right:20px;float:left;overflow:hidden;font-size:60px;cursor:pointer;filter:drop-shadow(2px 2px 2px #666)' id='' class='' onclick="pagina(-1)"><i class="paginacion fas fa-arrow-alt-circle-up" style="text-shadow: 3px 6px #000;"></i></div>
</body>
<script>
	var images = [
	{"id":"average", 	"path":"./media/average2_crop.jpg"},
	{"id":"terminator", "path":"./media/terminator_crop.jpg"},
	{"id":"walter2", 	"path":"./media/walter2_crop.jpg"},
	{"id":"Stark", 	"path":"./media/stark.jpg"},
	{"id":"bieber", 	"path":"./media/Justin-Bieber2_crop.jpg"},
	{"id":"kim", 		"path":"./media/kim1_crop.jpg"},
	{"id":"rihanna", 	"path":"./media/ri_1_crop.jpg"},
	{"id":"audrey", 	"path":"./media/audrey_crop.jpg"},
	{"id":"bill", 		"path":"./media/bill-murray-snl_crop.jpg"},
	{"id":"connery2", 	"path":"./media/sean_guru2_crop.jpg"},
	{"id":"cage3", 		"path":"./media/cage2_crop.jpg"},
	{"id":"queen", 		"path":"./media/queen20_crop.jpg"},
	{"id":"groot", 	"path":"./media/groot.jpg"},
	{"id":"chuck", 		"path":"./media/chuck_crop.jpg"},
	{"id":"monalisa", 	"path":"./media/joconde_crop.jpg"},
	{"id":"picasso1", 	"path":"./media/picasso_drawing_crop.jpg"},
	{"id":"scream", 	"path":"./media/scream_crop.jpg"},
	{"id":"Messi", 	"path":"./media/messi.jpg"}
	];
	// when everything is ready, automatically start everything ?
	var vid = document.getElementById('videoel');
	var vid_width = vid.width;
	var vid_height = vid.height;
	var overlay = document.getElementById('overlay');
	var overlayCC = overlay.getContext('2d');
	var webgl_overlay = document.getElementById('webgl');
	var webgl_overlay2 = document.getElementById('webgl2');
	// canvas for copying the warped face to
	var newcanvas = document.createElement('CANVAS');
	newcanvas.width = vid_width;
	newcanvas.height = vid_height;
	// canvas for copying videoframes to
	var videocanvas = document.createElement('CANVAS');
	videocanvas.width = vid_width;
	videocanvas.height = vid_height;
	// canvas for masking
	var maskcanvas = document.createElement('CANVAS');
	maskcanvas.width = vid_width;
	maskcanvas.height = vid_height;
	/*********** Setup of video/webcam and checking for webGL support *********/
	var videoReady = false;
	var imagesReady = false;
	function enablestart() {
		if (videoReady && imagesReady) {
			var startbutton = document.getElementById('startbutton');
			startbutton.value = "start";
			startbutton.disabled = null;
		}
	}
	$(window).load(function() {
		enablestart();
	});
	var insertAltVideo = function(video) {
		if (supports_video()) {
			if (supports_webm_video()) {
				video.src = "./media/cap13_edit2.webm";
			} else if (supports_h264_baseline_video()) {
				video.src = "./media/cap13_edit2.mp4";
			} else {
				return false;
			}
			fd.init(webgl_overlay);
			fd2.init(webgl_overlay2);
			return true;
		} else return false;
	}
	function adjustVideoProportions() {
		// resize overlay and video if proportions are not 4:3
		// keep same height, just change width
		var proportion = vid.videoWidth/vid.videoHeight;
		vid_width = Math.round(vid_height * proportion);
		vid.width = vid_width;
		overlay.width = vid_width;
		webgl_overlay.width = vid_width;
		webgl_overlay2.width = vid_width;
		newcanvas.width = vid_width;
		videocanvas.width = vid_width;
		maskcanvas.width = vid_width;
		webGLContext.viewport(0,0,webGLContext.canvas.width,webGLContext.canvas.height);
		webGLContext2.viewport(0,0,webGLContext2.canvas.width,webGLContext2.canvas.height);
	}
	// check whether browser supports webGL
	var webGLContext;
	var webGLContext2;
	if (window.WebGLRenderingContext) {
		webGLContext = webgl_overlay.getContext('webgl') || webgl_overlay.getContext('experimental-webgl');
		webGLContext2 = webgl_overlay2.getContext('webgl') || webgl_overlay2.getContext('experimental-webgl');
		if (!webGLContext || !webGLContext.getExtension('OES_texture_float')) {
			webGLContext = null;
		}
	}
	if (webGLContext == null) {
		alert("Your browser does not seem to support WebGL. Unfortunately this face mask example depends on WebGL, so you'll have to try it in another browser. :(");
	}
	function gumSuccess( stream ) {
	// add camera stream if getUserMedia succeeded
		if ("srcObject" in vid) {
			vid.srcObject = stream;
		} else {
			vid.src = (window.URL && window.URL.createObjectURL(stream));
		}
		vid.onloadedmetadata = function() {
			adjustVideoProportions();
			fd.init(webgl_overlay);
			fd2.init(webgl_overlay2);
			vid.play();
		}
		vid.onresize = function() {
			adjustVideoProportions();
			fd.init(webgl_overlay);
			fd2.init(webgl_overlay2);
			if (trackingStarted) {
				ctrack.stop();
				ctrack.reset();
				ctrack.start(vid);
			}
			cancelRequestAnimFrame(detectionRequest);
			cancelRequestAnimFrame(animationRequest);
			overlayCC.clearRect(0, 0, vid_width, vid_height);
			drawGridLoop();
		}
	}
	function gumFail() {
		// fall back to video if getUserMedia failed
		insertAltVideo(vid);
		alert("There was some problem trying to fetch video from your webcam, using a fallback video instead.");
	}
	
function xx()	{
	
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
	window.URL = window.URL || window.webkitURL || window.msURL || window.mozURL;
	// check for camerasupport
	if (navigator.mediaDevices) {
		navigator.mediaDevices.getUserMedia({video : true}).then(gumSuccess).catch(gumFail);
	} else if (navigator.getUserMedia) {
		navigator.getUserMedia({video : true}, gumSuccess, gumFail);
	} else {
		insertAltVideo(vid);
		alert("Your browser does not seem to support getUserMedia, using a fallback video instead.");
	}

}
	
	vid.addEventListener('canplay', function() {videoReady = true;enablestart();}, false);
	/*********** Code for face substitution *********/
	var animationRequest, detectionRequest;
	var positions;
	var ctrack = new clm.tracker();
	ctrack.init(pModel);
	var trackingStarted = false;
	document.getElementById('selectmask').addEventListener('change', updateMask, false);
	function updateMask(el) {
		currentMask = parseInt(el.target.value, 10);
		var positions = ctrack.getCurrentPosition();
		if (positions) {
			switchMasks(positions);
		}
	}
	function startVideo() {
		// start video
		vid.play();
		// start tracking
		ctrack.start(vid);
		trackingStarted = true;
		// start drawing face grid
		drawGridLoop();
	}
	var fd = new faceDeformer();
	var fd2 = new faceDeformer();
	var masks = {
	"average" : [[26.416248681267973, 69.287261104729708], [24.481184011083002, 109.1589911732479], [29.947934496257105, 148.57677024306452], [40.60811914491601, 185.45355598250219], [58.738097832656997, 216.6373204614957], [81.913770252207783, 237.8126294428132], [109.98606755351314, 257.32753166261085], [146.73017889094805, 264.20702756677571], [176.39901111159972, 257.35535351543069], [205.55603543434725, 238.34973455076488], [230.2355979713912, 210.41080746713624], [246.42195156813636, 177.61588628182037], [256.27933737115922, 136.43585286772219], [257.59862842161016, 101.26962757170907], [254.73574762861881, 63.296736154716768], [231.99351427704215, 39.831219799322724], [211.74886735135794, 29.357561061634286], [185.76946624427666, 32.692120457915841], [164.22794828410485, 39.057255405015212], [46.913242738637145, 44.216922272932521], [67.285057768685547, 32.598869110365555], [94.508786161963428, 34.746232646423401], [114.82786184548833, 39.533999746268229], [65.935953298843103, 69.239210402794683], [84.787589310043472, 58.321913189471772], [107.1385272571674, 69.051184056088701], [84.265668561805413, 74.447322016970119], [86.02844527485162, 66.55652441349649], [215.49276321482714, 66.02198446506911], [194.41225043477402, 56.580567518322354], [173.10349613934835, 67.506651798297085], [193.89655333472706, 70.825843235112714], [194.97190332017632, 64.213669799586413], [140.21544525228168, 50.532541524375866], [115.12210668936649, 112.86816444161286], [106.91733219119472, 128.11159519340237], [116.15332322527513, 140.65598165170533], [143.55679637420633, 142.73810254422773], [167.66884888729888, 137.95626733353842], [177.01070972200523, 125.94118566337217], [167.72534960722709, 111.07005102224311], [141.09391638922847, 89.711267100602939], [125.01121871692496, 134.01776882451776], [158.83114482022663, 132.84441173561655], [98.530013119819074, 181.49830160240677], [114.57531577249451, 172.88988327185314], [130.69321885263625, 168.51487947819879], [140.91575863744487, 170.62230018050224], [150.99524791299294, 168.10359663640762], [166.86355823591094, 171.92886610080987], [186.52748819945225, 179.57395522560827], [172.54811810821857, 193.62104452332397], [161.34374255744575, 203.55652478332667], [143.04951921782722, 206.98995295806665], [122.71362572694508, 202.88542194975037], [109.36831831524565, 194.44995485842813], [121.30529318118789, 187.44959256875671], [141.15688782807084, 190.12567632986739], [161.94486681509784, 187.9983882494468], [161.78346166803792, 178.31913412814549], [141.60005262336557, 178.73596022750081], [121.19014424606702, 179.74550271876572], [142.06000674291235, 125.94776468631429], [74.161858259749053, 61.982126979168953], [99.563603953011338, 61.887044688264439], [97.202478466508737, 72.650836394381287], [74.199064214851546, 73.344884154018885], [204.65317864223729, 59.203268807746532], [180.45823699179422, 60.544222235843449], [183.20168844348697, 70.667846856664895], [204.99820389502713, 70.525790218266522]],
	"monalisa" : [[21.539778613571002, 52.843788988728249], [21.30390975615768, 83.302233189555977], [26.193573294663452, 114.35387895079327], [33.713954352167377, 143.15573844972926], [48.157124973567761, 166.98090240157057], [67.641939741413239, 187.09850232246515], [77.133435876412534, 196.36636012092117], [91.98589850664348, 199.49456958745145], [111.87519225850986, 196.53764992548162], [137.97232156668036, 189.79752653535775], [176.61286401088506, 171.50434543677886], [203.74322775690695, 142.02599538106227], [219.77440099078314, 108.71915538180275], [223.27759332415951, 70.224119840661501], [221.74514645738424, 45.204926829063027], [170.26964981149064, 23.837055025056486], [145.13712322351404, 20.0], [116.92175039938184, 18.258227338970613], [97.273435613850779, 30.048346359260734], [22.762490392814925, 34.008738851528051], [35.886077213728242, 27.0], [58.903367725863291, 26.0], [71.696536019219309, 32.203693146398479], [36.57998031880885, 52.779718566314955], [53.953459306751995, 44.216413703340322], [70.75345517431316, 52.451616524265091], [51.663136137968706, 56.36486568494297], [56.63327656416925, 50.02399260975119], [153.27491865673994, 47.895434696675409], [135.22403819342355, 41.835842816957268], [112.98660716766716, 51.531195401816717], [133.25469629277825, 53.995153369412776], [137.61394659073221, 47.643327423184189], [83.0, 51.0], [69.737945399362161, 99.757722929817021], [64.852131167360142, 112.67975493041121], [68.150737076897315, 119.49940769140733], [80.204731591906352, 125.87953636258146], [105.12317959249509, 122.54252162681382], [113.37839466290973, 114.67172527740343], [107.7986254362873, 97.551951798767789], [81.0, 80.0], [69.756744873013361, 116.32005216616164], [98.0322275619273, 117.28199170077062], [62.875143926336932, 144.03469795323042], [71.689261179819141, 140.91320569661593], [76.732039918708722, 139.45780089974846], [82.855831651040489, 141.56649844038935], [91.184232315061251, 139.74737597014604], [106.00603891713007, 140.25605273754718], [122.88222498993025, 142.36607174274792], [112.30505361714199, 152.45834288106249], [98.57616688568919, 156.8848818975423], [83.820014199000752, 157.10518323651632], [75.361906367460449, 156.71759346010083], [67.617149756063043, 151.56250078178363], [73.498856629406305, 146.17442547934229], [83.640659992846395, 147.73460503451736], [105.24803537963362, 147.68311332012382], [104.57542347435162, 147.53621455839362], [84.325579467524449, 147.67345155068153], [73.225375667881906, 145.9222277142419], [79.49642775725988, 113.63122813643895], [43.266309016571256, 46.998908993330446], [64.353645535131875, 46.83485523505226], [62.707535291980378, 54.409785609479741], [43.620326080711664, 56.573683367978902], [145.2498028902113, 42.866393256838194], [123.10477962337723, 45.18427292360775], [123.62079313091925, 53.764489759734829], [145.76553123073842, 52.446469912373288]],
	"Stark" : [[19.65959653975213, 58.927187574350853], [19.059936741854031, 84.069187035296466], [26.364149346947656, 116.00569220317783], [34.339224596136916, 150.19366409567897], [51.949088586144939, 181.34522063329388], [73.638843171470569, 200.2313071611942], [104.9963894743268, 212.04560334015787], [130.32250615166865, 213.84925849480038], [158.47042744325807, 206.01251760804871], [179.68180939317455, 189.87495266661051], [195.53125724625511, 170.05389773335617], [207.87916287667588, 150.263348854009], [211.60311756946669, 117.20491197917517], [215.1470951154223, 84.821473309459435], [211.28414850045669, 52.323401046109325], [191.07721405137181, 30.707410618465985], [178.7969744809098, 22.95445734151545], [153.07107270051728, 27.766421832907099], [135.8716261860317, 32.270221237428331], [40.797793860118304, 39.293939439043243], [60.586268390363102, 30.045790597286697], [83.66233092249044, 31.510753402473881], [101.7675287849857, 34.611095156640886], [55.196872088033274, 53.769827607374282], [73.294529697216632, 45.286958022232], [89.789514153589607, 52.475732958470758], [72.029799616216138, 54.79702256052326], [73.546514815544526, 48.155860928669142], [179.57558029610016, 46.278523901086771], [164.08951473989504, 39.553052148086266], [145.25477360830024, 47.559030577914911], [161.67137911336948, 47.743228605976327], [164.5570321919293, 42.316490011681282], [118.51043662636579, 41.615242195145811], [96.145654614985858, 89.83443556968848], [94.3004276388547, 101.2777184101229], [101.14232928754529, 107.81832135048145], [122.23729175986463, 111.54568657278116], [141.40084172004063, 108.09394746664645], [147.43968596286589, 98.605209918840785], [141.38241141848675, 86.81434583236927], [120.24759131986298, 71.477475584982272], [105.22693390782734, 102.2511538638106], [135.71453675842949, 102.69239102174873], [82.106944247692269, 143.22308347546931], [94.109143846121839, 139.40149577652141], [106.89618312823151, 136.60699903750498], [124.88130883248715, 140.90523844977974], [134.21351586850218, 137.56831409555417], [149.88840562683427, 138.81679306685891], [163.03665611069363, 137.94602751042942], [149.12971996396905, 143.88566574722165], [138.33054643604166, 147.00248023661715], [124.44218910312256, 149.23925548490803], [109.37911171081555, 149.45999223240068], [96.652978590522281, 146.671300600503], [107.6988534718862, 143.24503220634898], [125.16408321171812, 142.98263526928565], [143.47086754124314, 141.3936752079527], [150.2625022256851, 140.14425743374363], [124.86889327286275, 143.03426613514421], [107.71038700817618, 140.22310608370606], [121.13865545746836, 97.831789384933728], [63.746229482356711, 47.529221261778929], [83.542252517622927, 46.881351751053245], [80.910117350035449, 53.637093872553805], [63.111222164868025, 54.283991811834312], [173.83311856200004, 41.917012775126381], [152.17209160945234, 42.056325934275009], [153.46358946670941, 47.653634652561493], [171.12694131217529, 47.51275441245707]],
	"bieber" : [[19.53711459170038, 54.444293102992319], [22.410358417930311, 81.323108571931471], [32.401607743685382, 122.14228794382235], [40.548237569709926, 160.95800363740622], [55.830864519376661, 195.08306428683375], [81.385287393438929, 223.19377613278513], [112.80248099038053, 245.70922521138434], [143.66759219912683, 248.19456654705792], [170.97838880302498, 243.80815503839696], [202.54366882314216, 219.80900163327027], [229.12024016664279, 189.13313409839208], [244.51837898295568, 147.82841415594618], [248.62248099284733, 110.09427599568797], [252.16065269095574, 69.022615327489461], [251.1869106001711, 38.073482825891446], [223.77766201515098, 30.263843596126286], [197.68549009500683, 27.366877637166382], [172.02508396552125, 31.480903122367078], [150.59332989209975, 39.090254247657896], [38.741981623011633, 42.588528571746735], [54.958919220427802, 38.439293690791018], [80.326672773709362, 36.802767512800102], [105.79165522546174, 40.753572250309261], [59.731070080437199, 61.374403460631441], [82.0248909472554, 52.792320852576772], [102.98174927891796, 61.588233179208871], [81.291210273721063, 63.763521680101718], [82.102587870122846, 57.509244186188191], [202.9918057560875, 54.365166608239129], [183.35185317803828, 47.157748497015682], [161.8385137789503, 57.656333304586035], [183.83907055868855, 57.557394332838136], [183.42545741727207, 52.010032452550263], [131.686076554246, 53.909282900234132], [107.69799915829482, 106.47273945500959], [103.11407801720561, 120.60153702065169], [110.43523698455824, 130.94952817956354], [134.4500665704968, 133.04683073943445], [159.64146874757529, 129.78570852986701], [166.7487844961837, 117.81662059272365], [160.1901896709515, 104.45704674681713], [132.8335797372176, 85.328251842395701], [119.90596285959741, 128.2845201373249], [146.94103038566482, 127.18023554236562], [95.191706081438895, 169.00217518307196], [107.74010091792692, 162.93726104569006], [120.53732776801282, 157.36305081327322], [134.36346005292657, 158.19042577349052], [149.06532629960918, 156.03333668322352], [167.53754920890682, 160.14750809785232], [181.68075634048043, 166.51055859230061], [169.22867544048322, 177.30535719977763], [152.98958831541205, 185.89315973650133], [136.352332183502, 190.0381828867574], [120.88426223614132, 185.79922898421083], [107.35465833211961, 179.72589047488501], [114.79299794468891, 169.92000421669977], [135.13370299082726, 171.30173772478196], [158.39876693773857, 168.34925679955404], [158.23752239371439, 168.04209911043037], [134.80406768396711, 171.32584974562951], [115.32751612180201, 169.70233460348607], [132.43152742593281, 118.83318930228684], [69.123085034678766, 54.985576193750248], [94.253510496854048, 54.393003960509063], [92.485452013800042, 63.026429370670705], [70.154658366398536, 62.923362768598608], [194.57561889878309, 49.363550336040007], [170.8445542308101, 50.310130450256054], [172.48925643335903, 57.608921571249979], [193.42216119777584, 55.967660359955829]],
	"kim" : [[26.392953623213501, 74.847347679657105], [26.527141369604511, 113.68851836791519], [37.850280396733659, 153.34202975546106], [48.463148502888259, 198.41912707786042], [68.036605940850848, 230.63187132257846], [93.393921931707482, 256.18460712943767], [125.54962553340661, 277.0006892560142], [159.76888265265634, 283.50936210722568], [190.86251528873004, 273.21633240176328], [215.4823452806404, 246.84486234022947], [236.0322931252845, 221.15226043028213], [250.6507850464711, 189.90684387337964], [258.98554243442391, 147.8303429835579], [265.61657423486696, 111.82570412985555], [263.82649874587986, 67.66214176561175], [254.94521256635076, 37.757625912971747], [235.79466011571427, 28.645231408254602], [204.91596627739196, 32.48320193484367], [178.87856926846536, 45.012565822225127], [42.981527327852305, 45.1931744008115], [65.798535249115119, 30.205697217705545], [104.20469447938497, 38.014705489906277], [132.76130440395275, 47.358258842651956], [65.732837436644772, 73.313719718526713], [91.09303435966045, 62.44640989897627], [117.81003667247734, 77.588938967093213], [91.455791107898818, 78.157832338525793], [91.462070264092233, 70.129658655089131], [237.49694309020128, 70.204758493119016], [212.00252085043883, 60.741643699902738], [186.28991752012382, 75.480800750925113], [213.38992085780873, 75.700650938318205], [211.28408082179848, 66.628969802711069], [155.31681846547161, 61.723254148350158], [131.79242360681408, 132.03519502324014], [125.21093316902153, 145.05754431578387], [131.88896031053739, 158.30278486585388], [159.78089633124134, 160.7729628498802], [182.60204348750557, 155.22867538213509], [188.06987132384856, 142.36052040680599], [182.50935337688247, 131.17112912726614], [157.92771083963791, 101.9554747029501], [139.68757897346234, 150.2800567907548], [174.91470138004024, 149.77535693426591], [108.20772330971123, 199.82539585852084], [127.27495019814955, 190.57647699976485], [143.43128670979286, 183.79198573228979], [157.48346624056376, 187.99166515485183], [169.06090197834246, 183.92606098499843], [183.34853446393896, 189.45691649529616], [199.86559748534597, 195.95084259678697], [189.71112448658715, 213.68218280440522], [178.41365542672253, 224.07658144186891], [158.74710148750472, 231.45074591989936], [138.79163021123412, 228.1686029366403], [118.5034950367303, 215.59047900510384], [134.39528308805779, 203.05726622213831], [159.30274323745374, 209.15248016464469], [175.89464505418053, 201.96972700502886], [176.97487381747911, 198.90143676014918], [156.30097058265304, 198.13847443352608], [134.20235365838741, 199.40444860590469], [160.61948984308634, 139.11949191775341], [76.663536017602837, 65.783911161963701], [109.70319643529164, 68.269206273210557], [104.63389091894381, 76.826187107600873], [79.295001366702479, 77.141208919791538], [228.9531335582283, 64.425761944937264], [197.74571106481017, 63.914007487070201], [200.53834682135945, 75.244684951836774], [226.14466575989266, 72.954228841629359]],
	"bill" : [[27.840096322632149, 76.368615990185191], [30.154816021430406, 109.06063400353474], [39.379878405162572, 137.75576812530437], [49.720971343106442, 165.56006971830811], [69.685918962455162, 188.83062502686539], [91.136611503567053, 197.11213236968024], [114.01369602338886, 200.28928696425578], [137.67505607580313, 198.99464477027379], [162.00533931387088, 194.67502878665346], [183.59957539615169, 183.86171397188139], [200.64843069277788, 169.12249458895553], [212.74882015279246, 146.59654529811888], [216.19464878771885, 117.51545219326954], [219.7054153227329, 82.920303627910158], [216.55736851626409, 52.500598145987141], [195.29140690264768, 33.844288891203831], [182.10450082040984, 28.047753816454644], [160.04559543130165, 28.487796821539263], [142.86240187537408, 30.124466843837581], [40.405647296470676, 54.374170928106054], [56.295673096305649, 43.873060994871253], [76.723373554797661, 38.650838700640719], [95.621661762561274, 38.363822770704132], [60.297118828516858, 70.475169555111961], [78.651718472233313, 59.224037348059483], [99.573440037293096, 65.250504005881226], [82.29544502828054, 70.300901108009271], [79.134179987698502, 64.227444036123558], [184.89706951713521, 56.365831102188366], [165.52473664328181, 47.770967481018118], [146.32998667504086, 58.324349203503402], [164.82643203538686, 60.04407203414334], [164.39886888106582, 52.778806963733672], [120.52365835160424, 52.521477554028849], [101.06903113447152, 95.354177230792828], [97.706278577909302, 108.83642847893361], [102.04351853018306, 115.05243108012365], [125.99992209867958, 112.0236401737053], [148.45902991311357, 108.96260829647667], [152.23777198445976, 100.26761218015756], [147.33366694378407, 93.695762370380891], [122.28850921293144, 76.101379473190349], [111.44116718235543, 108.35150088493117], [138.55187585038368, 104.45109866815397], [89.123185296043147, 151.19072505820475], [101.70113856203162, 143.16269317848082], [114.55904368474734, 137.03596375729882], [127.5260977252027, 136.62440720393903], [142.15015468594385, 134.33539281866416], [154.35000323575321, 135.82860430555473], [164.20085849796595, 139.78224358677733], [152.9774542793399, 142.98379202064962], [141.73178221104934, 145.86324454310341], [129.89339680864276, 146.89033084663646], [116.84788403543834, 149.04075275643936], [106.82191699109006, 149.14242258364681], [114.60339284933946, 143.21586094656988], [128.31056675771958, 139.4452901718596], [148.33878241574769, 140.53480603779201], [147.93332321344963, 137.89989048828988], [128.69585663786603, 139.90709643494949], [114.63118953141685, 140.63329768649351], [123.81172998652696, 98.785958550314348], [66.474208747599363, 63.358122307976885], [89.613458219896927, 60.741998702521187], [90.438207912343842, 67.780375024366094], [73.297736628896502, 71.388966880916655], [176.21292587446089, 49.577879569149928], [152.92815791080079, 51.050952892124485], [156.57901529439357, 60.189126505911844], [175.86218001261233, 60.708989122215144]],
	"connery2" : [[38.892083339257844, 40.568761472443001], [29.90159331543386, 77.650979095829243], [23.528785192881184, 115.12981090320817], [28.511131183389089, 158.48255423521496], [36.942695419670031, 190.0233172264432], [54.458575857371784, 222.14890063102555], [83.272696884783187, 241.32312566364817], [112.34558466601413, 254.34619861333098], [144.58533461942631, 250.67758868401037], [172.20420363672687, 233.81852073557391], [196.39312100566269, 211.34357793943363], [213.39744139863737, 184.73519809603738], [225.21562242547819, 151.80094676818908], [237.24370618259738, 111.68508532117359], [245.37037238466385, 76.747156060247008], [233.37702308878991, 66.751881991182429], [217.53786714161851, 58.032768064935894], [190.31676158270122, 52.308575780288855], [169.41334844892879, 51.226316810323091], [56.207445417444667, 33.067483014583026], [76.722796932348402, 29.047185245786149], [105.73804935320115, 31.249505073127093], [129.41744120282408, 37.429432344589621], [76.681963278187865, 58.350090907959633], [94.19972974921599, 54.756572031752867], [112.85419644295345, 64.415693298960278], [92.812398165291782, 62.397598103038298], [93.655368395257653, 58.161653341144778], [210.96205026792569, 78.004343128986662], [195.75238522801715, 68.76760748433108], [176.43642892509493, 70.224445619890886], [193.68109207192683, 77.087571441960634], [194.70712087330261, 72.862005768658676], [148.20208672391288, 58.342590915631767], [111.1666788930213, 106.63701529362415], [101.34747511120258, 119.12987300043589], [104.18303077659665, 129.20360281985296], [133.37279277423349, 142.748980146029], [157.93432226268496, 141.55894442135795], [168.96130581416642, 132.07242708249322], [164.20633959835496, 118.18083518929345], [144.65602166235658, 92.397726364522015], [115.40494645905375, 126.40789286820008], [157.79608269264335, 134.75702279793697], [85.980010160822758, 162.15639224332949], [101.64943872830327, 158.38505258879277], [118.67438165368489, 160.35871309389356], [130.25722607258859, 165.38673650507471], [143.15742329539017, 165.77052618136571], [157.70242299467066, 172.33499834295802], [169.65543648993273, 175.78855371525023], [160.12055822257562, 188.16869070735714], [148.14213249766502, 194.82664029567607], [123.6042849464561, 194.88227565731569], [107.47564886902663, 189.02099163974216], [92.083113590444754, 178.87228804990815], [107.8070847076981, 175.41059890627554], [127.02743901200465, 178.34303343927226], [145.81970631097616, 178.37106140001052], [152.5287145895322, 172.6301131395058], [130.33035941222428, 168.52457058376751], [107.7206420350132, 162.47051940192065], [139.33872973963111, 126.60083436107105], [83.34288190802836, 55.8538320861296], [106.32865532584162, 59.237712272335273], [104.93444701975285, 63.759204900543274], [84.046862139237973, 61.775258429145531], [205.45785499618236, 72.338141123931806], [185.39496033403927, 66.696155105024673], [185.06364946271444, 74.709457364532881], [201.62551705633905, 78.249786099181634]],
	"cage3" : [[38.357056558682224, 60.736490607874416], [23.341327901797936, 107.25014599667472], [18.296846321559066, 148.23051012644805], [19.372695643526168, 188.65305377967664], [29.154876750304378, 215.96034564242314], [45.134310349980488, 244.36531182613257], [70.519067923334447, 267.83847469488006], [101.68753084001821, 281.0922742741248], [140.7331873207979, 285.88371876848129], [170.9390562968122, 277.08040962953862], [197.87163563750002, 261.59418146285884], [223.42845954976377, 241.97378591315569], [245.0650088791653, 210.18543074803304], [261.10462533802968, 172.38255310709295], [273.10872642190981, 123.91021190431911], [250.76635857684363, 84.600787431964889], [234.09351530198521, 72.517706680712692], [208.74167260911511, 64.247660836061527], [187.81514700728363, 58.544297226870881], [74.131483122576284, 36.136870472111582], [95.844126758687452, 32.281398321513123], [122.56035690731997, 37.962543427439527], [148.22450319574315, 44.249023213088549], [85.223771071744906, 58.544422052615509], [108.44657180031147, 54.503014392356079], [128.71885243916009, 71.094947200089337], [102.01015040453876, 69.872705287553586], [106.35614075069611, 61.135360036022256], [231.12788939629235, 99.795903411403984], [213.49537287525797, 83.776879991946686], [191.26433579749491, 88.068739788561743], [208.74485262843476, 100.64749621743501], [210.3902447700176, 91.745721437553414], [165.11333999594746, 65.233933098272132], [118.44177482082158, 118.67444264582296], [104.43633090065161, 134.36522676928988], [107.97325108027587, 153.94854060017767], [135.14700490709532, 162.46176003224451], [158.25542163066774, 168.81168710778437], [171.23871364437443, 157.8702716949802], [170.99524963368106, 136.00154408059339], [153.17970711274839, 104.6512535923592], [121.24856419365493, 146.72319602458541], [155.03701415731447, 155.47015160678404], [78.466354770855915, 196.06457566218131], [91.746762577873142, 190.71906729876349], [115.16530841874146, 190.9990107540126], [124.15308474531936, 197.67472452041352], [136.50232294953494, 199.494779982621], [154.59531097066568, 207.60344956896392], [165.2203651574051, 220.13387490642199], [152.12241005492899, 222.37254974396703], [136.95812099553518, 224.79934977608076], [118.62579187860695, 222.04126374309647], [101.43461433730506, 213.44877444745077], [91.126562884160748, 208.42063503351378], [103.31382289348142, 200.40641231858996], [123.70959937134573, 209.25298000999445], [144.3127346555429, 213.11037420816461], [145.01373850122738, 210.64398695827401], [124.5966930093344, 206.77316937277249], [104.34585866228781, 198.00179369859504], [140.87145828311228, 140.52728839936404], [94.034520017012127, 53.724169619451033], [121.73270003511465, 62.449610686083915], [115.01374220523665, 71.184949762616284], [90.815596125430076, 66.659246627086432], [225.11169678544977, 91.787112952908473], [199.92938089835985, 84.173222767668918], [198.25457269780782, 94.35966863611155], [222.73697143561492, 104.07355685539949]],
	"rihanna" : [[26.138899461407689, 92.244179099265835], [30.150033619898522, 129.0592834006242], [35.996054826216913, 157.99930474933535], [45.509781735478924, 187.12127271304053], [60.51024161514006, 210.41325200694192], [86.310688149068426, 227.46971998938116], [107.85974681746808, 236.69500599276591], [136.57644554048775, 238.10708866312754], [165.62648705221295, 231.57806683999053], [188.3608395007787, 214.39011511507942], [207.93248607083333, 196.0814225694686], [219.89916920545826, 168.58008860014098], [224.49883040486739, 138.90264901250617], [228.58281464622078, 106.91416429657839], [224.58252481471797, 70.933146993653779], [203.3774978319762, 28.028820808172352], [181.58472787599737, 19.435310158112408], [156.86417294526154, 24.460306030063659], [135.73914402023993, 31.456797488595342], [32.047262797597298, 50.543719104317915], [40.464089467706167, 38.381365394715388], [66.342397552413019, 34.321110135743673], [88.515953347009969, 36.93324860750586], [46.733268642989657, 78.712499539135578], [66.449686483581431, 65.373420492141349], [90.173907195079082, 74.9121559129796], [66.233854603446957, 78.415688222479957], [68.270574612475599, 71.660416916015635], [190.65898690318929, 64.810998305632253], [168.20638484997923, 55.804190409734566], [147.43315449749568, 68.626928898045307], [168.22673344465349, 67.61289342187888], [166.51021546156483, 61.875220550023961], [118.92897147566528, 60.280657952102231], [96.897767488546208, 103.97035633816941], [89.664096235805445, 122.34811624311288], [98.833438666909871, 128.43822554362711], [123.81326752339046, 129.33942642442472], [151.23906851910579, 124.56706552807259], [160.80260431887578, 112.48823512650107], [149.53543511254858, 101.14056094329058], [119.91425590973432, 81.776934802513281], [107.10091816874086, 119.93543263950561], [139.89073855497173, 114.97527848530341], [86.039156734614494, 163.79526897618302], [100.31550207547357, 151.95465454080531], [115.33537786053085, 145.67621375202529], [128.49927701873415, 149.08891090011926], [136.82856091872964, 144.23636993467616], [156.20890091990211, 147.83178979124301], [174.55301109182807, 155.65761972225934], [164.99975808270366, 165.63417075097752], [149.04314047426175, 174.12550564044938], [129.91702711147209, 174.845305670843], [113.34708735522268, 176.24295559630082], [101.03175759253789, 172.44295639648487], [105.93344735335506, 160.34735779820977], [127.43487958488878, 160.81933686724085], [149.58356968953328, 156.11918541420829], [149.5114621251295, 156.3177299583827], [126.90564735939108, 160.6358515740547], [105.55243401686153, 160.0615670038776], [122.24009751272602, 109.67347000836308], [54.593084788445459, 70.431269150370369], [79.107238894532827, 66.533611837568742], [80.595062712249302, 75.052674625787859], [57.682176074481895, 78.957592891796779], [183.02872671333918, 57.096961590684487], [155.0208679018707, 60.611070713694659], [157.0325640646339, 68.513983801624093], [181.04275593545705, 66.607854469117726]],
	"queen" : [[23.505386602589198, 50.457444393308663], [23.770997513824113, 79.750010592355807], [27.113644647783133, 107.05392377626163], [35.321303628622132, 136.44305205172321], [47.334549538017711, 159.18765164959615], [64.199292851437008, 177.03373895127152], [84.765625678051379, 191.83108912146804], [109.28402179239941, 196.45906084532959], [135.9359304546071, 190.54807551773638], [160.92638460512586, 174.43015267056262], [180.10178679830051, 153.97905507448695], [192.41726401346494, 126.67359148115031], [197.16242118270173, 101.15454548575792], [197.64413760608852, 70.312868465894098], [192.53172579302651, 41.967007222640632], [169.31080503903837, 22.162418347767982], [154.0273734545479, 18.374726602295368], [133.42613502058202, 22.96266560761353], [120.45410689424983, 25.502895906530568], [31.44546511558309, 31.945208272929221], [46.768848813254607, 23.581632433649531], [66.673207984269141, 24.172974522013021], [81.626067130688511, 27.638789633838883], [47.947701102202586, 47.681543362179184], [60.623376724198778, 41.633656006991998], [79.36915359618331, 45.721067869780654], [62.330186344080488, 51.371860492471512], [62.745750219507102, 45.599559964606215], [158.19258779162885, 45.300672194745914], [140.60340929518344, 38.45229892703685], [125.7806082208532, 46.347477725027204], [142.34288582277316, 50.698235503409762], [142.60871772009955, 44.437882664899462], [99.97940419106925, 41.514879333955264], [82.213624624444435, 82.354789460933432], [75.65401524869975, 96.278063325340668], [82.508445343639551, 102.11984542944111], [101.60744302836173, 105.94037459973111], [122.63043456337431, 99.592250218637901], [129.62786603125369, 93.957718348243077], [118.99818032302022, 81.401385613867888], [100.04956768903412, 67.861677148659396], [86.313389423664717, 98.430691407496624], [115.53309045382008, 97.1560811012248], [70.196138989073745, 129.52006520479512], [82.774122202456056, 125.37454913886643], [95.124174822972009, 124.78123204792121], [103.90869760615385, 126.2571438963663], [111.25150881410894, 123.17288375183074], [127.28656888633316, 124.55474856966089], [144.31109846428922, 128.65315176422104], [133.34586280219827, 140.30073546752016], [120.84012623666604, 147.41887856217244], [107.03519115747525, 149.60767216282352], [91.740550885270409, 146.68583392233438], [80.326767974424286, 141.46630043417008], [88.568623957901309, 136.39444745405399], [105.46004677224801, 140.46140391578234], [123.31897526995601, 138.15333836238494], [122.70288882671514, 128.17663770168849], [103.81577906858274, 129.49492394511066], [86.215486592429272, 129.49235140135801], [100.17418968456138, 92.838046187331713], [53.784991837303153, 43.657281631162277], [70.495495697799754, 42.176471952281418], [72.847366600432451, 48.547152030252391], [54.136195115745608, 50.027845814704847], [150.39702665408328, 39.876052149764064], [131.19169764996349, 40.900020983495949], [133.56176420233407, 49.52351354943147], [149.76874192232191, 48.5000219314216]],
	"groot" : [[20.483665550074608, 53.183692860767394], [24.361922673852241, 95.737273870516105], [30.400959413822353, 130.45754077869711], [41.242349718827768, 173.04726502529044], [58.105008569484156, 203.7660013530558], [76.869655382911503, 226.34291300753259], [99.369341611341881, 255.0713395857554], [139.74120550264209, 263.76162554942738], [171.32947217998174, 255.46957428093305], [199.946894095613, 226.62339957345694], [221.49837040108935, 199.79835948444554], [240.08516723936782, 168.18189730988399], [252.08395469198265, 131.21374537265351], [258.36170743521484, 90.380588166058288], [255.10754458650274, 42.584944707292443], [231.75249195960055, 45.327439832074035], [208.7290513846105, 33.264165113810314], [182.45184021795453, 34.887902751598574], [163.08711212720985, 36.03634039159865], [45.239265084152109, 48.306833774880189], [61.461858247924326, 37.834099965504009], [86.827961811524062, 37.197019300749332], [105.91824585785361, 37.88368161363735], [62.860924946003244, 61.188846253618586], [80.619662775077074, 51.747190870172624], [103.93398842852524, 59.997457002440939], [81.751456803195623, 64.255501456018763], [84.004294538216001, 57.077229167297531], [211.98838032569785, 57.593772126059918], [191.5778679580265, 47.983763125242731], [170.38855049276546, 58.461369542688253], [191.9441136281869, 60.225926779697986], [191.92669412372422, 52.579307802528767], [134.66117725008127, 47.998802609275117], [100.70375436244497, 117.18170772223409], [96.359586237232236, 130.97608621290914], [104.08684841884893, 141.69896624605406], [131.24128684772495, 143.97185685417674], [164.76450358310424, 138.26000471129672], [176.92626974984935, 126.08237618839462], [167.22572255493887, 112.72928720583801], [134.0611802462972, 85.717075270380818], [114.33387220509169, 133.05178089828468], [153.76794949662624, 131.67190072058332], [88.866522295425142, 180.54393261075492], [104.46692763753509, 175.38305552650226], [121.43438355304571, 169.84539945272661], [132.37535179506003, 171.81705846390579], [149.18563061624394, 166.35416111906289], [167.16644078199599, 170.78387842411823], [189.16695843585643, 176.57652671573587], [171.83553768789335, 187.7115867136792], [156.33804805643729, 195.81101875373039], [134.27563409833002, 201.38739357915634], [117.15337885298841, 196.70731823359964], [103.96847180524558, 188.68352736101971], [116.76487739956575, 181.44052669308485], [135.74530154751699, 182.90627748639344], [153.63331858186731, 179.62109542567683], [151.88019838003063, 178.74543573334981], [135.17389732718308, 183.56591812464339], [115.77196402700586, 181.24528883502023], [132.4588789817806, 125.30097836947944], [70.691361409540519, 55.425799087708185], [95.074744482330715, 52.724441664122146], [91.093459751654223, 62.828111718395917], [70.206999478716284, 63.420717668699439], [204.23047792617393, 51.746876200870737], [177.48356609989082, 50.074372448180128], [183.61325430243852, 59.696924337487069], [203.36282510792634, 59.961322827348759]],
	"picasso1" : [[36.250450718573873, 79.124566327720288], [35.119608310582322, 96.597861806811181], [36.404659318616737, 113.76840192150527], [38.224159134985243, 131.11062469484807], [44.454529797225646, 154.1814209057838], [58.375246123280007, 169.49596919632819], [72.97988779636654, 180.23977668215664], [87.756188367409294, 185.56552853643095], [105.03241234408378, 180.51444743653224], [122.265469633262, 174.06398165224769], [135.31714855705121, 162.76762378894259], [146.88777632654526, 149.70727178445324], [150.20000560168543, 129.10862928363522], [152.56739151849726, 107.17828639825538], [157.91289561898384, 85.214768152427581], [153.62665196335627, 77.105422620440464], [141.61928142399029, 70.524665935976373], [126.595892772441, 69.905523578840757], [116.49010775841327, 73.31386968143282], [49.0086575832958, 70.235265794279542], [62.701753537480243, 60.550337510943265], [82.1035199652176, 62.144635165724765], [94.457612858326257, 69.990264611588202], [55.814352473139024, 86.02727936226367], [71.316173892786423, 81.800811911371824], [88.080400330799591, 88.20180782468745], [70.246724559943019, 94.071810094606263], [71.121648446471397, 85.582545703028842], [148.10348497461655, 92.462063312908725], [133.05192015872387, 83.73718604655916], [116.27558519146325, 91.192600450046228], [131.88263279775612, 98.993646865368106], [131.78123048704896, 89.404774477148408], [105.51315626215361, 81.569662962447211], [96.191534478817118, 120.50668746252984], [90.199164697849596, 125.37517630957703], [93.463243841115599, 129.51593720857423], [103.40246819387983, 129.77184869247793], [112.65390571265101, 129.56664287134106], [113.58273157049868, 125.83472002370991], [112.97511629728987, 120.82815243119251], [106.03098831604788, 102.16807129228334], [98.211706690369823, 127.97534492896636], [107.00121682175407, 128.76139115375773], [81.658108662587608, 148.26923759836396], [92.806273612808184, 144.41797262560891], [98.041354041956538, 142.78033417226806], [102.38978597981389, 145.68476515395253], [106.77039887493248, 144.55888963561441], [111.2028829073426, 146.72397791119556], [118.41047414259552, 151.37431914236606], [114.09050148249918, 153.5845427811754], [108.26749560913638, 155.60812550724742], [101.03855866647899, 155.85689374282265], [94.667308403540687, 154.21614129562002], [88.606207885913079, 152.3634368283987], [94.799176802224451, 147.78175686140321], [101.61589425206924, 148.37134474983333], [110.19810766615751, 149.17710215768849], [110.00140558086673, 149.42392294958483], [101.78004560465695, 147.81385618194679], [94.666393329457804, 147.88634305613706], [104.96348601661472, 123.47557663615419], [63.067424126991767, 83.412995811464754], [79.698359035226673, 82.50077801608326], [80.163162608568456, 92.634906745609783], [62.531657767831675, 91.548319806853101], [142.57740074574272, 88.097933442704544], [123.16502620504644, 85.963352957311599], [123.58158606810653, 97.591877049766168], [140.99420788006387, 96.726951520247638]],
	"scream" : [[31.036290655849882, 57.432857152986685], [36.834032422703402, 76.616090763423301], [44.144879197624306, 91.506035663960802], [56.746870626966768, 106.12350665968165], [63.525573844882473, 121.99269842503458], [69.2934094352062, 141.18816557433274], [79.116034591995231, 158.27345628505338], [95.444768276521444, 157.85798622717158], [112.1506100202503, 149.53119369985041], [120.19223108149427, 133.77442783766503], [120.98364439956012, 118.34214249063547], [126.09006592863452, 102.16079319696235], [136.11638867777555, 90.042725252145431], [143.07386026688062, 75.600333966055501], [143.83480182971522, 54.469443259083619], [133.78044168407791, 38.927078049915451], [116.88883196831546, 29.805997108581423], [100.37012716461871, 31.831740142580585], [85.39723434749834, 42.341129078554331], [40.717793723347995, 43.305563127634542], [48.744681128699852, 37.771923766655192], [57.448931896748704, 36.028754590906701], [67.464345519404787, 36.944607085351322], [45.385363552887199, 58.225754147134666], [54.363960101074014, 47.630931768034003], [68.011017790419004, 54.583990783711471], [58.120050008047329, 62.745638214068549], [55.616718436597296, 53.995790698964527], [122.66684453667131, 54.6831401033742], [110.90016888640474, 45.569147756531351], [96.234198458489033, 53.677715067572848], [108.49190790972344, 62.644313336393992], [110.33329194240295, 54.935130623390222], [80.887741592339665, 51.027213274581243], [76.364796231779138, 68.40676367915853], [71.204026202304306, 77.172050050826158], [75.730620606370721, 82.644032983592723], [87.363757439691426, 80.118716444055792], [98.704261825861266, 80.021192400105463], [100.92981427616351, 75.460833622671146], [93.832797746290964, 66.709039647758487], [82.448627671183701, 59.880239108276982], [78.635928103659296, 73.849587320332546], [92.627257877148452, 73.43767426025039], [79.131242507468116, 114.47649461874275], [77.082061781015526, 104.8161820064411], [76.86256899541047, 91.51976352151155], [84.492130686253887, 87.376289229573757], [89.954070974658805, 90.754539182117583], [96.555921994018263, 100.64436225867991], [98.440888036356, 112.45487645254397], [99.900677251741001, 118.69433160303333], [97.588402646172568, 124.71623282477302], [91.597980889907518, 126.41777298016024], [84.533931967288538, 127.61556713904764], [79.240345390611509, 121.19778971162847], [83.178935170207694, 120.97334887551744], [90.622988915812243, 121.32946906512535], [95.211974749360394, 119.17107481925299], [90.610722471562042, 96.597036966133828], [85.032665543272103, 94.424007443444765], [80.833795006309913, 101.09683414893499], [85.305504524124245, 72.452653823137268], [48.8748794470348, 52.429091513207823], [63.68702721228027, 48.108214917609644], [66.062515145830616, 60.166087383119986], [51.2501982134619, 62.489540249221989], [117.78390022622665, 48.625670298558617], [103.06761868980499, 48.623588434563402], [101.36381278664584, 59.660098601097076], [117.07959483560742, 60.662984572138043]],
	"terminator" : [[29.076884732031772, 71.67890495708096], [27.66651993257193, 111.97958383082613], [32.905495727938842, 143.74759287325199], [41.548602943722187, 184.11191523512548], [57.134123028769864, 212.96132714313779], [85.982596883100427, 233.23682483532389], [116.34553106231533, 252.07189468414344], [153.54377487815492, 254.19994252292111], [184.09352786394243, 250.19280744913965], [210.84006513830786, 231.78958626538036], [230.33265432712187, 207.95546707713771], [242.54473105521458, 181.16454996007155], [245.32603716786156, 139.23222747588432], [253.95701774571654, 105.75356333489501], [250.16872236069304, 65.614622446558542], [234.42162441623111, 41.376144700389091], [218.06038382338016, 36.763971825401342], [195.01785757186678, 35.830381277151389], [173.22532214596566, 34.948429471706561], [54.903911233483029, 46.44126936726903], [74.831645200221715, 38.453426351873134], [97.147393013378746, 35.780078496224263], [124.15086404891906, 35.195299880035805], [66.35520762891224, 68.235316884765297], [88.846275187033712, 57.941876489833845], [109.10692456289365, 65.835365585188669], [89.15198347590956, 71.177597719421669], [88.362391942502256, 64.59180321109983], [223.52418336992747, 66.464653942855051], [200.72181416528224, 58.073962248085365], [180.51423847597891, 65.002569315598549], [201.60598302791442, 70.107080712007587], [201.4188717262528, 64.775640131702488], [151.03576003916953, 45.081162477481598], [123.46403491514627, 106.14140125029522], [119.73138344106076, 117.43345384315626], [125.15573426423208, 129.00558710238695], [156.06226938811682, 127.12365384578027], [178.19840010320991, 126.83676679574947], [183.26702924895841, 115.66950743874682], [175.51141450984255, 106.54676093041451], [151.75947907777766, 76.366817652668487], [133.66421579983097, 119.32339634260134], [172.1834824765383, 119.87854085001544], [107.48695740367185, 177.84786130901512], [119.72239618002311, 163.21478187250497], [140.4464890346631, 155.71112137112985], [155.86678473236145, 157.98177593573888], [167.21471198020845, 154.86495601683998], [180.68374974978832, 159.73999260624254], [190.76005528035921, 174.67434883370834], [180.73253431596419, 176.39562238973116], [169.53742410945182, 178.06866551441919], [155.53681594702357, 179.73851637572324], [141.80213459545843, 178.11191356675113], [126.33903348640217, 177.0074496842052], [132.38439794118267, 166.9144754158774], [154.18525275215882, 167.75142144628433], [171.26254237748122, 167.51576938990513], [172.534822324375, 166.51169079958765], [154.17356764276303, 166.77640382116056], [132.74611931034815, 165.54314795883778], [153.13151808703924, 107.35065481861218], [75.600007764156032, 61.08502670255362], [100.47692695245246, 59.887169821044154], [99.128136594613807, 69.002790596812332], [76.251785226012998, 71.202785857452454], [213.62188629502043, 60.266713925593479], [190.61716649430633, 59.53824381943511], [190.06078776389984, 69.052650607094705], [212.06614469025487, 68.784081158860744]],
	"chuck" : [[23.985805140787811, 59.253092736495404], [27.152914142356281, 93.63850488776103], [34.01220073959206, 124.65777588132323], [43.185644242726241, 161.9772579423547], [61.209744322279292, 192.42432570956339], [81.37821841704411, 220.37100316087003], [107.92580934104717, 237.80975318878194], [140.88839198974878, 241.278807347677], [167.70469646738874, 234.01970282186772], [186.12365924246313, 213.70594260547796], [202.80437939194087, 190.64053826009655], [217.69508138129819, 155.70072689125635], [221.02696388149508, 119.50512599746469], [227.99422254386025, 81.43151669889221], [227.11130532385494, 46.18417717200532], [207.21555625045997, 33.175332640476], [194.56294229742934, 28.937253432404674], [174.00649178397012, 27.028488506511849], [156.47566594458243, 32.350419791450179], [47.532877369699492, 42.421078138488781], [63.923256040387145, 34.721870564834518], [84.521999671791235, 28.68707065058706], [101.15791969739783, 30.213188331517443], [70.764074281840976, 51.416777160605335], [86.002488801591127, 44.424929334942277], [102.96119178404712, 53.160641855627574], [85.60397397751052, 55.234740063145978], [86.010308656883879, 49.899172374324678], [190.92358255141565, 49.397451262299313], [175.1523746520156, 41.900642395463876], [158.44345834031955, 52.154661706767172], [176.47309137989373, 53.014180036617432], [174.43308832832275, 47.307219358571558], [132.46182130918601, 45.48437589722576], [108.69786009928927, 99.545905831905316], [103.11665337522604, 113.75249817536462], [111.34508738112095, 123.58043415652844], [140.30363074789989, 128.37262124829522], [163.09709355203404, 119.0354984962861], [168.93097359374573, 108.93962862026251], [163.17674412901442, 97.84644989180623], [136.28156859047635, 77.887545322684673], [121.70408833473726, 123.07084388960436], [155.85885440334405, 121.00625017414006], [95.996752168226521, 161.32424774652623], [110.17525522629637, 156.4703757753677], [124.30175841524158, 153.55515190825861], [138.00204524415497, 153.64274134883692], [150.79297368282508, 150.23231929252609], [162.7406848240513, 149.85132514087474], [176.07303322566077, 151.81058946642867], [168.83777545300831, 164.0342671400889], [155.10895519199389, 171.80029333476506], [138.09166004169032, 175.18545713793497], [123.90094363765843, 175.40470843963408], [108.39952344275034, 170.40601225857262], [119.72606830073107, 167.28994293469788], [137.95384981384524, 168.64939698384137], [158.54405813052577, 165.50059529860471], [157.88012349108675, 151.99297197119006], [138.30132055467104, 157.65544747958882], [117.83502139036227, 157.58320456094589], [138.43867461393214, 113.41758462162812], [75.885110165472895, 46.920392101397766], [96.982049671082919, 46.292338804561751], [93.782070842166888, 54.197829817186403], [77.685715189360593, 54.825324576762569], [183.53723703826685, 44.14812614348557], [166.29837686271119, 44.526609395251143], [167.45958694297553, 52.084354270786775], [183.69784620690714, 51.704878940413039]],
	"walter2" : [[21.060764903593935, 23.625922265374243], [24.306589250104111, 82.418736978583837], [29.887480558415291, 123.52324050386761], [39.831216823892362, 169.58896662877407], [56.335070257713795, 208.02264871738436], [80.83703098412272, 239.09972028159933], [112.71581076572778, 260.86442641371349], [148.15849351544631, 266.69887307481594], [187.92956781495144, 259.94808309698487], [224.28242219428836, 232.92409488998584], [248.61360434331704, 197.4132216415324], [267.6255386426007, 159.22848713841142], [274.06946800796993, 115.04205523453288], [279.57264995946605, 75.577994810142314], [274.8147191886797, 27.93465035602847], [243.21321805049308, 34.977887137176154], [222.77074074138181, 27.896989700591064], [190.0620481119081, 30.307609477713669], [159.27010163455151, 35.824855447032391], [51.033153870664592, 38.112001064409583], [75.392081525881991, 35.207713004503645], [102.74022206320058, 37.331330371284338], [124.56616025441463, 38.787179979952285], [67.451381950900242, 57.279940574514285], [90.044614607889713, 50.578228454933793], [111.78861952878373, 57.042466275764184], [90.903644751441476, 61.901327302928138], [90.715389774152072, 55.427091197335699], [223.99115821955013, 52.230403503055442], [205.18136904851377, 47.795771446298119], [184.90200898390299, 54.36443314080293], [204.67995257670333, 57.277939005103178], [204.92195881859544, 50.712535873236902], [146.50907007729293, 46.432109337738268], [115.95255333726485, 107.46593045529727], [109.22792349913794, 119.47849063536196], [117.00821443824393, 134.84341026421072], [145.67296091894715, 139.65462387898862], [173.67398162073596, 137.75538299827045], [185.00619633858076, 121.44588720141769], [180.64955597511778, 108.4547161320798], [147.27934367148265, 85.136485659341048], [124.32188592953989, 129.20306658959251], [167.29393856301289, 130.98984492081911], [101.59640357940233, 178.49694962096316], [118.21488930910681, 170.49617831223611], [139.18293919359641, 169.52754924913722], [151.13320163675684, 173.77693897734923], [167.32315821430757, 170.41084550370888], [182.37144722622213, 172.04427561978318], [198.17756373260085, 178.48935722147763], [184.440295252439, 186.17852019611308], [168.46308888233028, 189.07826517145685], [149.98168191113766, 189.67271148067312], [131.94804230553046, 187.67924933109754], [115.53452060145878, 185.3486212656689], [126.11701238101571, 180.30913427171828], [151.51451552828283, 182.42858464837599], [175.33473635294803, 181.769054498201], [176.96189091245589, 177.03898480289513], [151.40990278903843, 177.58200927291426], [127.15568541835768, 176.24970135595123], [147.26055194223767, 122.55189537474888], [74.747311503817315, 52.428814802906686], [103.91716767645684, 51.310986682531166], [102.84404568037712, 59.974636811905299], [76.675078380855666, 60.093874542162325], [216.58585024902322, 47.512012033316537], [190.54061564242585, 48.580342228676585], [191.79112935486376, 55.322342001097468], [214.83596488608993, 56.255513236279938]],
	"audrey" : [[29.74201740403646, 63.58838131299683], [32.135740245991599, 98.613580728522948], [39.926486700973527, 142.66741859878613], [46.051376346280165, 185.19751106090678], [63.623885970848306, 221.21082623221213], [92.686071409745011, 246.75195165866961], [124.31266068980059, 268.32269819176895], [159.08115584618832, 276.8182094669599], [193.01372611356055, 271.19451253588267], [220.73964850426626, 251.23315855606597], [249.37653785044409, 220.99473411123051], [262.56272926082778, 184.02931054521218], [274.46785237450297, 145.09243674243754], [286.71422071660493, 100.2191807024135], [287.7724614993711, 67.093735883445845], [273.08419909909355, 58.949447547158684], [250.35119471727239, 46.547177746833199], [227.88483875688155, 51.863141039656796], [201.92763554902524, 54.635918821225715], [50.207093876417957, 43.532664996747542], [78.106228477816103, 39.524315405279566], [110.54774174250323, 45.635392409130048], [135.80324104447095, 54.83859321342041], [80.208953800441719, 83.486704599142797], [103.2843062554636, 71.77563604011084], [130.37335751351947, 93.351828892065782], [101.37155395907916, 97.268693939422747], [103.77768051230873, 78.554240071733545], [246.69639088723869, 90.839855800811847], [225.25431248616547, 79.371020311284838], [200.21435196089101, 98.005155765703194], [227.73999275494873, 103.13681628226215], [226.06528007794577, 84.737881341868274], [170.2704842069295, 87.241173044027562], [136.73140157570418, 155.55089637183414], [132.09382016348263, 166.28137163294355], [141.43437220076765, 179.71853115783472], [168.84018353954804, 185.51893631975383], [195.57024175323983, 180.96444682513931], [200.63701169781223, 171.50291787670471], [196.03834636609736, 155.55926335687627], [171.53575860945466, 129.05860619902546], [151.91223102812063, 171.32412239283428], [186.99889102154822, 171.94139857304066], [117.36179100195926, 210.57248720067804], [132.24409741439899, 205.79192498435566], [151.95455263416062, 203.25064014467529], [165.61565000621329, 208.18658812822247], [181.73633661629219, 204.11786374216797], [194.71091994807995, 208.09809058994574], [208.15078953905629, 212.57790820835453], [193.07898694502654, 226.67843340292291], [179.59750146882573, 236.19115922247897], [163.22005286691325, 238.45845823523985], [145.14731000170292, 234.92524246489165], [132.35629580062368, 227.3232920714367], [145.46895415593832, 215.5609803328374], [164.98592388769322, 216.32998112652183], [182.14032562432749, 217.3077976017484], [183.73772138569666, 217.00947047307966], [164.55379748244519, 216.51396287362655], [145.7179313684785, 215.79854206584145], [171.13908085531165, 165.20445766092308], [88.246693449260022, 75.136292959533421], [119.33001418358253, 80.065297266301059], [116.37014577148472, 95.815825381060108], [88.287291370337073, 92.88465259927068], [240.47641466360238, 82.609923128584455], [208.73309300337735, 86.192129111264819], [212.47694784065465, 102.57941207015807], [240.22165570085622, 99.99430087462639]],
	"Messi" : [[19.53711459170038, 54.444293102992319], [22.410358417930311, 81.323108571931471], [32.401607743685382, 122.14228794382235], [40.548237569709926, 160.95800363740622], [55.830864519376661, 195.08306428683375], [81.385287393438929, 223.19377613278513], [112.80248099038053, 245.70922521138434], [143.66759219912683, 248.19456654705792], [170.97838880302498, 243.80815503839696], [202.54366882314216, 219.80900163327027], [229.12024016664279, 189.13313409839208], [244.51837898295568, 147.82841415594618], [248.62248099284733, 110.09427599568797], [252.16065269095574, 69.022615327489461], [251.1869106001711, 38.073482825891446], [223.77766201515098, 30.263843596126286], [197.68549009500683, 27.366877637166382], [172.02508396552125, 31.480903122367078], [150.59332989209975, 39.090254247657896], [38.741981623011633, 42.588528571746735], [54.958919220427802, 38.439293690791018], [80.326672773709362, 36.802767512800102], [105.79165522546174, 40.753572250309261], [59.731070080437199, 61.374403460631441], [82.0248909472554, 52.792320852576772], [102.98174927891796, 61.588233179208871], [81.291210273721063, 63.763521680101718], [82.102587870122846, 57.509244186188191], [202.9918057560875, 54.365166608239129], [183.35185317803828, 47.157748497015682], [161.8385137789503, 57.656333304586035], [183.83907055868855, 57.557394332838136], [183.42545741727207, 52.010032452550263], [131.686076554246, 53.909282900234132], [107.69799915829482, 106.47273945500959], [103.11407801720561, 120.60153702065169], [110.43523698455824, 130.94952817956354], [134.4500665704968, 133.04683073943445], [159.64146874757529, 129.78570852986701], [166.7487844961837, 117.81662059272365], [160.1901896709515, 104.45704674681713], [132.8335797372176, 85.328251842395701], [119.90596285959741, 128.2845201373249], [146.94103038566482, 127.18023554236562], [95.191706081438895, 169.00217518307196], [107.74010091792692, 162.93726104569006], [120.53732776801282, 157.36305081327322], [134.36346005292657, 158.19042577349052], [149.06532629960918, 156.03333668322352], [167.53754920890682, 160.14750809785232], [181.68075634048043, 166.51055859230061], [169.22867544048322, 177.30535719977763], [152.98958831541205, 185.89315973650133], [136.352332183502, 190.0381828867574], [120.88426223614132, 185.79922898421083], [107.35465833211961, 179.72589047488501], [114.79299794468891, 169.92000421669977], [135.13370299082726, 171.30173772478196], [158.39876693773857, 168.34925679955404], [158.23752239371439, 168.04209911043037], [134.80406768396711, 171.32584974562951], [115.32751612180201, 169.70233460348607], [132.43152742593281, 118.83318930228684], [69.123085034678766, 54.985576193750248], [94.253510496854048, 54.393003960509063], [92.485452013800042, 63.026429370670705], [70.154658366398536, 62.923362768598608], [194.57561889878309, 49.363550336040007], [170.8445542308101, 50.310130450256054], [172.48925643335903, 57.608921571249979], [193.42216119777584, 55.967660359955829]]
	};
	var currentMask = 0;
	// create canvases for all the faces
	var imageCanvases = {};
	var imageCount = 0;
	loadMask = function(index){
		var mask = new Image();
		mask.onload = function(obj){
			var elementId = images[index].id;
			imagecanvas = document.createElement('CANVAS');
			imagecanvas.width = obj.target.width;
			imagecanvas.height = obj.target.height;
			imagecanvas.getContext('2d').drawImage(obj.target,0,0);
			imageCanvases[elementId] = imagecanvas;
			imageCount += 1;
			if (imageCount == images.length) {
				imagesReady = true;
			}
			enablestart();
		}
		mask.src = images[index].path;
	}
	//load masks
	for (var i = 0;i < images.length;i++) {
		loadMask(i);
	}
	var extended_vertices = [
		[0,71,72,0],
		[0,72,1,0],
		[1,72,73,1],
		[1,73,2,1],
		[2,73,74,2],
		[2,74,3,2],
		[3,74,75,3],
		[3,75,4,3],
		[4,75,76,4],
		[4,76,5,4],
		[5,76,77,5],
		[5,77,6,5],
		[6,77,78,6],
		[6,78,7,6],
		[7,78,79,7],
		[7,79,8,7],
		[8,79,80,8],
		[8,80,9,8],
		[9,80,81,9],
		[9,81,10,9],
		[10,81,82,10],
		[10,82,11,10],
		[11,82,83,11],
		[11,83,12,11],
		[12,83,84,12],
		[12,84,13,12],
		[13,84,85,13],
		[13,85,14,13],
		[14,85,86,14],
		[14,86,15,14],
		[15,86,87,15],
		[15,87,16,15],
		[16,87,88,16],
		[16,88,17,16],
		[17,88,89,17],
		[17,89,18,17],
		[18,89,90,18],
		[18,90,22,18],
		[22,90,21,22],
		[21,90,91,21],
		[21,20,91,21],
		[20,91,92,20],
		[20,92,19,20],
		[19,92,93,19],
		[19,93,71,19],
		[19,0,71,19],
		[44,61,56,44],
		[60,61,56,60],
		[60,56,57,60],
		[60,59,57,60],
		[58,59,57,58],
		[58,59,50,58]
	];
	function drawGridLoop() {
		// get position of face
		positions = ctrack.getCurrentPosition();
		overlayCC.clearRect(0, 0, vid_width, vid_height);
		if (positions) {
			// draw current grid
			ctrack.draw(overlay);
		}
		// check whether mask has converged
		var pn = ctrack.getConvergence();
		if (pn < 0.4) {
			switchMasks(positions);
		} else {
			detectionRequest = requestAnimFrame(drawGridLoop);
		}
	}
	function switchMasks(pos) {
		videocanvas.getContext('2d').drawImage(vid,0,0,videocanvas.width,videocanvas.height);
		// we need to extend the positions with new estimated points in order to get pixels immediately outside mask
		var newMaskPos = masks[images[currentMask].id].slice(0);
		var newFacePos = pos.slice(0);
		var extInd = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,22,21,20,19];
		var newp;
		for (var i = 0;i < 23;i++) {
			newp = [];
			newp[0] = (newMaskPos[extInd[i]][0]*1.3) - (newMaskPos[62][0]*0.3);// short for ((newMaskPos[extInd[i]][0]-newMaskPos[62][0])*1.1)+newMaskPos[62][0]
			newp[1] = (newMaskPos[extInd[i]][1]*1.3) - (newMaskPos[62][1]*0.3);
			newMaskPos.push(newp);
			newp = [];
			newp[0] = (newFacePos[extInd[i]][0]*1.3) - (newFacePos[62][0]*0.3);
			newp[1] = (newFacePos[extInd[i]][1]*1.3) - (newFacePos[62][1]*0.3);
			newFacePos.push(newp);
		}
		// also need to make new vertices incorporating area outside mask
		var newVertices = pModel.path.vertices.concat(extended_vertices);
		// deform the mask we want to use to face form
		fd2.load(imageCanvases[images[currentMask].id], newMaskPos, pModel, newVertices);
		fd2.draw(newFacePos);
		// and copy onto new canvas
		newcanvas.getContext('2d').drawImage(document.getElementById('webgl2'),0,0);
		// create masking
		var tempcoords = positions.slice(0,18);
		tempcoords.push(positions[21]);
		tempcoords.push(positions[20]);
		tempcoords.push(positions[19]);
		createMasking(maskcanvas, tempcoords);
		// do poisson blending
		Poisson.load(newcanvas, videocanvas, maskcanvas, function() {
			var result = Poisson.blend(30, 0, 0);
			// render to canvas
			newcanvas.getContext('2d').putImageData(result, 0, 0);
			// get mask
			var maskname = Object.keys(masks)[currentMask];
			fd.load(newcanvas, pos, pModel);
			animationRequest = requestAnimFrame(drawMaskLoop);
		});
	}
	function drawMaskLoop() {
		animationRequest = requestAnimFrame(drawMaskLoop);
		// get position of face
		positions = ctrack.getCurrentPosition();
		overlayCC.clearRect(0, 0, vid_width, vid_height);
		if (positions) {
			// draw mask on top of face
			fd.draw(positions);
		}
	}
	function createMasking(canvas, modelpoints) {
		// fill canvas with black
		var cc = canvas.getContext('2d');
		cc.fillStyle="#000000";
		cc.fillRect(0,0,canvas.width, canvas.height);
		cc.beginPath();
		cc.moveTo(modelpoints[0][0], modelpoints[0][1]);
		for (var i = 1;i < modelpoints.length;i++) {
			cc.lineTo(modelpoints[i][0], modelpoints[i][1]);
		}
		cc.lineTo(modelpoints[0][0], modelpoints[0][1]);
		cc.closePath();
		cc.fillStyle="#ffffff";
		cc.fill();
	}
	/*********** Code for stats **********/
	stats = new Stats();
	stats.domElement.style.position = 'absolute';
	stats.domElement.style.top = '0px';
	stats.domElement.style.display = 'none';
	document.getElementById('container').appendChild( stats.domElement );
	document.addEventListener("clmtrackrIteration", function(event) {	stats.update();}, false);
	
</script>
