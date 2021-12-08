<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
var rpta="";
window.parent.carga();
function start() {
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_030.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 20px);overflow:hidden;font:bold 28px verdana;text-align:center;padding:50px 10px;' id='' class='' >Conecta cada pais con su capital arrastrando el mouse desde cada esquina de color rojo hacia la capital respectiva. </div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arrrpta=rpta.split(";");
	for(k=0;k<arrrpta.length-1;k++)	{
		arrcu=arrrpta[k].split("|");
		var connector = $('#connector_canvas');
		var cur_con = $(document.createElementNS('http://www.w3.org/2000/svg','line'));
		connector.append(cur_con);
		cur_con.attr('x1',arrcu[0]);
		cur_con.attr('y1',arrcu[1]);
		cur_con.attr('x2',arrcu[2]);
		cur_con.attr('y2',arrcu[3]);
		cur_con.attr('cualdrag',arrcu[4]);
		cur_con.attr('cualdrop',arrcu[5]);
		cur_con.attr('id',arrcu[6]);
		document.getElementById(cur_con.attr("id")).addEventListener("click", function() {elimina(this);}, false);
		document.getElementById(arrcu[4]).classList.add("blanco");
		document.getElementById(arrcu[5]).classList.add("blanco");
	}
}
	var cualdrag="";
	!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);
	window.onload=function()	{
		instructions();
		Array.from(document.querySelectorAll(".left")).forEach(function(actual) { actual.addEventListener("mouseover", function (e) {document.getElementById("divfondo").style.background=actual.style.background;});});
		$('.anchor').on('click',function(){
			var width = parseInt($(this).parent().css('width'));
			if(width==10){
				$(this).parent().css('width','20%');
				$('#canvas').css('width','60%');
				}else{
				$(this).parent().css('width','10px');
				$('#canvas').css('width','calc( 80% - 10px)');
			}
		});
		$('.aui-item').draggable({
			containment: "#canvas",
			drag: function( event, ui ) {
				var lines = $(this).data('lines');
				var con_item =$(this).data('connected-item');
				var con_lines = $(this).data('connected-lines');
				if(lines) {
					lines.forEach(function(line,id){
						$(line).attr('x1',$(this).position().left).attr('y1',$(this).position().top+1);  
					}.bind(this));
				}
				if(con_lines){
					con_lines.forEach(function(con_line,id){
						$(con_line).attr('x2',$(this).position().left+5)
						.attr('y2',$(this).position().top+(parseInt($(this).css('height'))/2)+(id*5));
					}.bind(this));
				}
			}
		});
		$('.ui-item').droppable({
			accept: '.con_anchor',
			drop: function(event,ui){
				var item = ui.draggable.closest('.ui-item');
				var cualdrop=this;
				$(this).data('connected-item',item);
				ui.draggable.css({top:-2,left:-2});
				item.data('lines').push(item.data('line'));
				if($(this).data('connected-lines')){
					$(this).data('connected-lines').push(item.data('line'));
					var y2_ = parseInt(item.data('line').attr('y2'));
					item.data('line').attr('y2',y2_+$(this).data('connected-lines').length*5);
				}else $(this).data('connected-lines',[item.data('line')]);
				item.data('line',null);
				document.getElementById("connector_canvas").querySelectorAll("line").forEach(function(actual,indice) {
					actual.setAttribute("x1",100);
					if(document.getElementById("connector_canvas").querySelectorAll("line").length==1+indice)	{
						cualdrag.classList.add("blanco");
						cualdrop.classList.add("blanco");
						actual.setAttribute("y2",cualdrop.offsetTop);
						actual.setAttribute("x2",cualdrop.offsetLeft);
						actual.setAttribute("cualdrag",cualdrag.id);
						actual.setAttribute("cualdrop",cualdrop.id);
						actual.setAttribute("id","line_"+cualdrag.id.split("div_").join(""));
						actual.addEventListener("click", function() {elimina(this);}, false);
						document.getElementById(cualdrag.id).querySelector(".con_anchor").style.display="none";
						rpta+=actual.getAttribute("x1")+"|"+actual.getAttribute("y1")+"|"+actual.getAttribute("x2")+"|"+actual.getAttribute("y2")+"|"+actual.getAttribute("cualdrag")+"|"+actual.getAttribute("cualdrop")+"|"+actual.getAttribute("id")+";"
					}
				});
				// console.log('dropped',cualdrag.id,this.id,document.getElementById("connector_canvas"));
				// console.log(rpta);
			}
		});
		$('.con_anchor').draggable({
			containment: "#canvas",
			drag: function( event, ui ) {
				cualdrag=this.parentElement;
				var _end = $(event.target).parent().position();
				var end = $(event.target).position();
				if(_end&&end) $(event.target).parent().data('line').attr('x2',end.left+_end.left+5).attr('y2',end.top+_end.top+2);
			},
			stop: function(event,ui) {
				if(!ui.helper.closest('.ui-item').data('line')) return;
				ui.helper.css({top:-2,left:-2});
				ui.helper.closest('.ui-item').data('line').remove();
				ui.helper.closest('.ui-item').data('line',null);
				console.log('stopped');
			}
		});
		$('.con_anchor').on('mousedown',function(e){
			var cur_ui_item = $(this).closest('.ui-item');
			var connector = $('#connector_canvas');
			var cur_con;
			if(!$(cur_ui_item).data('lines')) $(cur_ui_item).data('lines',[]);
			if(!$(cur_ui_item).data('line')){
				cur_con = $(document.createElementNS('http://www.w3.org/2000/svg','line'));
				cur_ui_item.data('line',cur_con);
			} else cur_con = cur_ui_item.data('line');
			connector.append(cur_con);
			var start = cur_ui_item.position();
			cur_con.attr('x1',start.left+90).attr('y1',start.top+1);
			cur_con.attr('x2',start.left+1+90).attr('y2',start.top+1);
		});	
	}
	function elimina(cual)	{
		document.getElementById("connector_canvas").querySelectorAll("line").forEach(function(actual,indice) {
			if(actual.id==cual.id)	{
				cualdrag=actual.getAttribute("cualdrag");
				cualdrop=actual.getAttribute("cualdrop");
				document.getElementById(cualdrag).classList.remove("blanco");
				document.getElementById(cualdrop).classList.remove("blanco");
				document.getElementById("connector_canvas").removeChild(actual)
				document.getElementById(cualdrag).querySelector(".con_anchor").style.display="";
			}
		})
		rpta="";
		document.getElementById("connector_canvas").querySelectorAll("line").forEach(function(actual,indice) {
			rpta+=actual.getAttribute("x1")+"|"+actual.getAttribute("y1")+"|"+actual.getAttribute("x2")+"|"+actual.getAttribute("y2")+"|"+actual.getAttribute("cualdrag")+"|"+actual.getAttribute("cualdrop")+"|"+actual.getAttribute("id")+";"
		});
	}

function respuesta(valor)	{
	var rpta=["div_01|div_14|","div_02|div_11|","div_04|div_10|","div_03|div_15|","div_06|div_16|","div_08|div_13|","div_07|div_12|","div_05|div_05|"];
	var ok=0;
	for(k=0;k<rpta.length-1;k++)	{
		if(valor.indexOf(rpta[k])>-1)	ok++;
	}
	return(String(100*ok/8).formatMoney(2)+"%");
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
<style>
	html,body{
		width:100%;height:100%;overflow:hidden;
		background:url('media/wmold.jpg') center center no-repeat; 
		background-size: cover;
	}
	html,body,div{margin:0px;padding:0px;}
	#canvas{
		height:100%;
		display:inline-block;
		box-sizing:border-box;
		position:relative;
	}
	.blanco	{
		border:solid 2px #888 !important;
		opacity:0.5;
	}
	#canvas{
		width:90%;
	}
	.anchor{
		opacity:0.5;
		width: 10px;
		height: 100%;
		background-color: #0ebeff;
		position: absolute;
		transition: width ease-in-out 0.2s;
	}
	.ui-item{
		apostion:absolute;
		width:90px;
		height:90px;
		abackground-color:rgba(0,192,0,1);
		border:1px solid #000;
		atop:0px;
		aleft:0px;
	}
	.left	{
		abackground-color:rgba(0,192,0,1);
		border:solid 1px #f00;
		box-shadow:1px 1px 10px #000;
	}
	.right	{
		abackground-color:rgba(0,192,192,1);
		border:solid 1px #f00;
		box-shadow:1px 1px 10px #000;
	}
	.con_anchor{
		width: 8px;
		height: 8px;
		background-color: #f00;
		border-radius: 50%;
		z-index:5;
	}
	.c_right{
		float:right;
	}
	#connector_canvas{
		position:absolute;
		width:100%;
		height:100%;
		stroke:#f00;
		stroke-width:4;
	}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;padding:20px 0px;font:bold 40px verdana;text-align:center;color:#924C0B;text-shadow:-1px -1px 1px #000,1px 1px 1px #000,2px 2px 10px #924C0B;" id="" class="" >CONECTA CADA PAIS CON SU CAPITAL</div>
	<div id="divfondo" style="position:absolute;top:10%;left:10%;height:80%;width:70%;opacity:.5;" id="" class="" ></div>	
	<div id="canvas" style="position:relative;">
		<svg id='connector_canvas'></svg>
		<div id="div_01" class="ui-item left" 	title="Canada"	 	style="position:absolute;top:010px;left:1%;	background:url('media/hl_01.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_01" class="con_anchor c_right"></div></div>
		<div id="div_02" class="ui-item left" 	title="Jamaica"	 	style="position:absolute;top:110px;left:1%;	background:url('media/hl_02.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_02" class="con_anchor c_right"></div></div>
		<div id="div_03" class="ui-item left" 	title="Paraguay"	style="position:absolute;top:210px;left:1%;	background:url('media/hl_03.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_03" class="con_anchor c_right"></div></div>
		<div id="div_04" class="ui-item left" 	title="Argentina"	style="position:absolute;top:310px;left:1%;	background:url('media/hl_04.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_04" class="con_anchor c_right"></div></div>
		<div id="div_05" class="ui-item left" 	title="Honduras"	style="position:absolute;top:410px;left:1%;	background:url('media/hl_05.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_05" class="con_anchor c_right"></div></div>
		<div id="div_06" class="ui-item left" 	title="Colombia"	style="position:absolute;top:510px;left:1%;	background:url('media/hl_06.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_06" class="con_anchor c_right"></div></div>
		<div id="div_07" class="ui-item left" 	title="Venezuela"	style="position:absolute;top:610px;left:1%;	background:url('media/hl_07.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_07" class="con_anchor c_right"></div></div>
		<div id="div_08" class="ui-item left" 	title="Ecuador"		style="position:absolute;top:710px;left:1%;	background:url('media/hl_08.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_08" class="con_anchor c_right"></div></div>

		<div id="div_09" class="ui-item right" 														style="position:absolute;top:010px;right:0%;background:url('media/hr_05.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_09" class="x_con_anchor"></div></div>
		<div id="div_10" class="ui-item right" 														style="position:absolute;top:110px;right:0%;background:url('media/hr_04.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_10" class="x_con_anchor"></div></div>
		<div id="div_11" class="ui-item right" 														style="position:absolute;top:210px;right:0%;background:url('media/hr_03.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_11" class="x_con_anchor"></div></div>
		<div id="div_12" class="ui-item right" 														style="position:absolute;top:310px;right:0%;background:url('media/hr_07.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_12" class="x_con_anchor"></div></div>
		<div id="div_13" class="ui-item right" 														style="position:absolute;top:410px;right:0%;background:url('media/hr_08.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_13" class="x_con_anchor"></div></div>
		<div id="div_14" class="ui-item right" 														style="position:absolute;top:510px;right:0%;background:url('media/hr_01.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_14" class="x_con_anchor"></div></div>
		<div id="div_15" class="ui-item right" 														style="position:absolute;top:610px;right:0%;background:url('media/hr_02.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_15" class="x_con_anchor"></div></div>
		<div id="div_16" class="ui-item right" 														style="position:absolute;top:710px;right:0%;background:url('media/hr_06.jpg') center center no-repeat;background-size:cover;">	<div id="div_drag_16" class="x_con_anchor"></div></div>
	</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.saveforlater('030',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="parent.taskdone('030',rpta)">Tarea terminada!</button>
	</div>
</body>
<script>
</script>