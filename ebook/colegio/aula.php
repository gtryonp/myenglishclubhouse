<?
session_start();
if (!isset($_SESSION['clientesesion']))	$_SESSION['clientesesion']="";
error_reporting( E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
ini_set("display_errors", 1);
header("Content-Type: text/html; charset=iso-8859-1");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", FALSE);
header("Pragma: no-cache");
set_time_limit(0);
date_default_timezone_set("America/Lima");
ini_set("memory_limit","1200M");
?>
<!--HEAD																																																																																																-->
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	window.onload = function () {
		cargaaula()	
	}
	
	function 	cargaaula()	{
	var xr = new XMLHttpRequest();xr.open("POST", "clase.php", true);xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xr.onreadystatechange = function() {if(xr.readyState == 4 && xr.status == 200) {	creatabla(JSON.parse(xr.responseText),"divtablaaula");}};
	xr.send("modo=get&modoarchivo=aula");
	}
	
function creatabla(msg,cualdiv)	{
	var bufferc="",bufferb="",clave="",hayclave=false;
	var fecha=new Date().getUTCFullYear()+(new Date().getUTCMonth() + 1<10 ? "0" : "")+(new Date().getUTCMonth() + 1)+(new Date().getUTCDate()<10 ? "0" : "")+new Date().getUTCDate();
	$.each(msg, function(i, str) {
		bufferb+="<tr ondblclick='editafila("+i+",this)'>";
		var k=0;
		$.each(str, function(a, b) {
			if(i==0)	bufferc+="<th title='"+a+"'>"+a+"</th>";
			bufferb+="<td>"+(k==0 ? "<input type='checkbox' id='chk_"+i+"'>" : "" )+b+"</td>";
			k++;
		});
		bufferb+="</tr>";
	});
	bufferc="<tr>"+bufferc+"</tr>";
	document.getElementById(cualdiv).innerHTML="";
	$("#"+cualdiv).append("<table id='"+cualdiv.split("div").join("")+"'>"+bufferc+bufferb+"</table>");
	resizableGrid(document.getElementById(cualdiv.split("div").join("")));
	porcolumnas();
}

function resizableGrid(table) {
 var row = table.getElementsByTagName('tr')[0],
 cols = row ? row.children : undefined;
 if (!cols) return;
 table.style.overflow = 'hidden';
 var tableHeight = table.offsetHeight;
 for (var i=0;i<cols.length;i++){
  var div = createDiv(tableHeight);
  cols[i].appendChild(div);
  cols[i].style.position = 'relative';
  setListeners(div);
 }
 function setListeners(div){
  var pageX,curCol,nxtCol,curColWidth,nxtColWidth;
  div.addEventListener('mousedown', function (e) {
   curCol = e.target.parentElement;
   nxtCol = curCol.nextElementSibling;
   pageX = e.pageX; 
   var padding = paddingDiff(curCol);
   curColWidth = curCol.offsetWidth - padding;
   if (nxtCol)
    nxtColWidth = nxtCol.offsetWidth - padding;
  });
  div.addEventListener('mouseover', function (e) {
   e.target.style.borderRight = '2px solid #f00';
  })
  div.addEventListener('mouseout', function (e) {
   e.target.style.borderRight = '';
  })
  document.addEventListener('mousemove', function (e) {
   if (curCol) {
    var diffX = e.pageX - pageX;
    if (nxtCol)
     nxtCol.style.width = (nxtColWidth - (diffX))+'px';
    curCol.style.width = (curColWidth + diffX)+'px';
   }
  });
  document.addEventListener('mouseup', function (e) { 
   curCol = undefined;
   nxtCol = undefined;
   pageX = undefined;
   nxtColWidth = undefined;
   curColWidth = undefined
  });
 }
 function createDiv(height){
  var div = document.createElement('div');
  div.style.top = 0;
  div.style.right = 0;
  div.style.width = '5px';
  div.style.position = 'absolute';
  div.style.cursor = 'col-resize';
  div.style.userSelect = 'none';
  div.style.height = height + 'px';
  return div;
 }
 function paddingDiff(col){
  if (getStyleVal(col,'box-sizing') == 'border-box'){
   return 0;
  }
  var padLeft = getStyleVal(col,'padding-left');
  var padRight = getStyleVal(col,'padding-right');
  return (parseInt(padLeft) + parseInt(padRight));
 }
 function getStyleVal(elm,css){
  return (window.getComputedStyle(elm, null).getPropertyValue(css))
 }
};	
function porcolumnas()	{
	document.querySelectorAll("tr").forEach(function(actual) {actual.addEventListener("selectstart",function(e) {e.preventDefault();})})
	document.querySelectorAll("td").forEach(function(actual) {actual.addEventListener("mousedown",function(e) {
		document.querySelectorAll(".highlight").forEach(function(cual) {cual.classList.remove("highlight")});
		activo=true;
		actual.classList.add("highlight");
	})})
	document.querySelectorAll("td").forEach(function(actual) {actual.addEventListener("mouseup",function(e) {
		activo=false;
	})})
	document.querySelectorAll("td").forEach(function(actual) {actual.addEventListener("mousemove",function(e) {
		if(activo)	actual.classList.add("highlight");
	})})
}


</script>
<style>
body {
	margin: 0px auto; 
	padding: 0px 10px; 
	font: 12px verdana; 
	color: #000; 
}
*																	{box-sizing: border-box;}
td																{padding:5px 15px;text-align:left;max-width:200px;overflow:hidden;}
th																{padding:5px 15px;text-align:left;background:#009;color:#fff;max-width:200px;aoverflow:hidden;}
th,td															{border:0px solid #000;}
table															{border:1px solid #000;width:calc(100% - 4px);margin:2px 2px;margin:0px;table-layout:fixed;}
tr:hover 													{background-color: #fc8 !important;}
tr:nth-child(even)								{background: #fec }
tr:nth-child(odd)									{background: #fea}
</style>


<body>
	<div style="float:left;width:calc(100%);" class="divcaja">
		<div style="float:left;width:100%;overflow:hidden;text-align:right;" id="" class="divtitulo" ><button class="btontop" onclick="anade('tablaaula')">+</button><button class="btontop" onclick="retira('tablaaula',this)">-</button></div>
		<div style="float:left;width:100%;overflow:auto;height:100px;" id="divtablaaula" class="" ></div>
	</div>
</body>
