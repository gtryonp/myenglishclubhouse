<script>
(function(root, factory) { 'use strict'; if (typeof define === 'function' && define.amd) { define('RowSorter', factory); } else if (typeof exports === 'object') { module.exports = factory(); } else { root.RowSorter = factory(); } })(this, function() { 'use strict'; var $ = window.jQuery||false, arrProto = Array.prototype, touchSupport = !!('ontouchstart' in document), helperAttrName = 'data-rowsorter', defaults = { handler         : null, tbody           : true, tableClass      : 'sorting-table', dragClass       : 'sorting-row', stickTopRows    : 0, stickBottomRows : 0, onDragStart     : null, onDragEnd       : null, onDrop          : null }; function RowSorter(table, opts) { if (!(this instanceof RowSorter)) { return new RowSorter(table, opts); } if (typeof table === 'string') { table = findTable(table); } if (is(table, 'table') === false) { throw new Error('Table not found.'); } if (table[ helperAttrName ] instanceof RowSorter) { return table[ helperAttrName ]; } this._options = extend(defaults, opts); this._table = table; this._tbody = table; this._rows = []; this._lastY = false; this._draggingRow = null; this._firstTouch = true; this._lastSort = null; this._ended = true; this._mousedown = bind(mousedown, this); this._mousemove = bind(mousemove, this); this._mouseup = bind(mouseup, this); this._touchstart = bind(touchstart, this); this._touchmove = bind(touchmove, this); this._touchend = bind(touchend, this); this._touchId = null; this._table[ helperAttrName ] = this; this.init(); } RowSorter.prototype.init = function() { if (this._options.tbody) { var bodies = this._table.getElementsByTagName('tbody'); if (bodies.length > 0) { this._tbody = bodies[0]; } } if (typeof this._options.onDragStart !== 'function') { this._options.onDragStart = null; } if (typeof this._options.onDrop !== 'function') { this._options.onDrop = null; } if (typeof this._options.onDragEnd !== 'function') { this._options.onDragEnd = null; } if (typeof this._options.stickTopRows !== 'number' || this._options.stickTopRows < 0) { this._options.stickTopRows = 0; } if (typeof this._options.stickBottomRows !== 'number' || this._options.stickBottomRows < 0) { this._options.stickBottomRows = 0; } addEvent(this._table, 'mousedown', this._mousedown); addEvent(document, 'mouseup', this._mouseup); if (touchSupport) { addEvent(this._table, 'touchstart', this._touchstart); addEvent(this._table, 'touchend', this._touchend); } if ('onselectstart' in document) { var that = this; addEvent(document, 'selectstart', function(e) { var ev = e||window.event; if (that._draggingRow !== null) { if (ev.preventDefault) { ev.preventDefault(); } else { ev.returnValue = false; } return false; } }); } }; function mousedown(ev) { ev = ev || window.event; if (this._start(ev.target || ev.srcElement, ev.clientY)) { if (ev.preventDefault) { ev.preventDefault(); } else { ev.returnValue = false; } return false; } return true; } function touchstart(ev) { if (ev.touches.length === 1) { var touch = ev.touches[0], target = document.elementFromPoint(touch.clientX, touch.clientY); this._touchId = touch.identifier; if (this._start(target, touch.clientY)) { if (ev.preventDefault) { ev.preventDefault(); } else { ev.returnValue = false; } return false; } } return true; } RowSorter.prototype._start = function(target, clientY) { if (this._draggingRow) { this._end(); } this._rows = this._tbody.rows; if (this._rows.length < 2) { return false; } if (this._options.handler) { var handlers = qsa(this._table, this._options.handler); if (!handlers || inArray(handlers, target) === -1) { return false; } } var draggingRow = closest(target, 'tr'); var current_index = rowIndex(this._tbody, draggingRow); if ( current_index === -1 || (this._options.stickTopRows > 0 && current_index < this._options.stickTopRows) || (this._options.stickBottomRows > 0 && current_index >= this._rows.length - this._options.stickBottomRows) ) { return false; } this._draggingRow = draggingRow; if (this._options.tableClass) { addClass(this._table, this._options.tableClass); } if (this._options.dragClass) { addClass(this._draggingRow, this._options.dragClass); } this._oldIndex = current_index; if (this._options.onDragStart) { this._options.onDragStart(this._tbody, this._draggingRow, this._oldIndex); } this._lastY = clientY; this._ended = false; addEvent(this._table, 'mousemove', this._mousemove); if (touchSupport) { addEvent(this._table, 'touchmove', this._touchmove); } return true; }; function mousemove(ev) { ev = ev || window.event; this._move(ev.target || ev.srcElement, ev.clientY); return true; } function touchmove(ev) { if (ev.touches.length === 1) { var touch = ev.touches[0], target = document.elementFromPoint(touch.clientX, touch.clientY); if (this._touchId === touch.identifier) { this._move(target, touch.clientY); } } return true; } RowSorter.prototype._move = function(target, clientY) { if (!this._draggingRow) { return; } var direction = clientY > this._lastY ? 1 : (clientY < this._lastY ? -1 : 0); if (direction !== 0) { var hoveredRow = closest(target, 'tr'); if (hoveredRow && hoveredRow !== this._draggingRow && inArray(this._rows, hoveredRow) !== -1) { var move = true; if (this._options.stickTopRows > 0 || this._options.stickBottomRows > 0) { var new_index = rowIndex(this._tbody, hoveredRow); if ( (this._options.stickTopRows > 0 && new_index < this._options.stickTopRows) || (this._options.stickBottomRows > 0 && new_index >= this._rows.length - this._options.stickBottomRows) ) { move = false; } } if (move) { moveRow(this._draggingRow, hoveredRow, direction); playsound(); } this._lastY = clientY; } } }; function mouseup() { this._end(); } function touchend(ev) { if (ev.changedTouches.length > 0 && this._touchId === ev.changedTouches[0].identifier) { this._end(); } } RowSorter.prototype._end = function() { if (!this._draggingRow) { return true; } if (this._options.tableClass) { removeClass(this._table, this._options.tableClass); } if (this._options.dragClass) { removeClass(this._draggingRow, this._options.dragClass); } var new_index = rowIndex(this._tbody, this._draggingRow); if (new_index !== this._oldIndex) { var previous = this._lastSort; this._lastSort = { previous: previous, newIndex: new_index, oldIndex: this._oldIndex }; if (this._options.onDrop) { this._options.onDrop(this._tbody, this._draggingRow, new_index, this._oldIndex); } } else if (this._options.onDragEnd) { this._options.onDragEnd(this._tbody, this._draggingRow, this._oldIndex); } this._draggingRow = null; this._lastY = false; this._touchId = null; this._ended = true; removeEvent(this._table, 'mousemove', this._mousemove); if (touchSupport) { removeEvent(this._table, 'touchmove', this._touchmove); } }; RowSorter.prototype.revert = function() { if (this._lastSort !== null) { var lastSort = this._lastSort, old_index = lastSort.oldIndex, new_index = lastSort.newIndex, rows = this._tbody.rows, max_index = rows.length - 1; if (rows.length > 1) { if (old_index < max_index) { this._tbody.insertBefore(rows[ new_index ], rows[ old_index + (new_index > old_index ? 0 : 1) ]); } else { this._tbody.appendChild(rows[ new_index ]); } } this._lastSort = lastSort.previous; } }; RowSorter.prototype.undo = RowSorter.prototype.revert; RowSorter.prototype.destroy = function() { this._table[ helperAttrName ] = null; if (this._ended === false) { this._end(); } removeEvent(this._table, 'mousedown', this._mousedown); removeEvent(document, 'mouseup', this._mouseup); if (touchSupport) { removeEvent(this._table, 'touchstart', this._touchstart); removeEvent(this._table, 'touchend', this._touchend); } }; RowSorter.revert = function(table, suppressError) { var sorter = getSorterObject(table); if (sorter === null && suppressError === false) { throw new Error('Table not found.'); } if (sorter) { sorter.revert(); } }; RowSorter.undo = RowSorter.revert; RowSorter.destroy = function(table, suppressError) { var sorter = getSorterObject(table); if (sorter === null && suppressError === false) { throw new Error('Table not found.'); } if (sorter) { sorter.destroy(); } }; function getSorterObject(table) { if (table instanceof RowSorter) { return table; } if (typeof table === 'string') { table = findTable(table); } if (is(table, 'table') && helperAttrName in table && table[ helperAttrName ] instanceof RowSorter) { return table[ helperAttrName ]; } return null; } function findTable(query) { var elements = qsa(document, query); if (elements.length > 0 && is(elements[0], 'table')) { return elements[0]; } return null; } function is(obj, tag) { return obj && typeof obj === 'object' && 'nodeName' in obj && obj.nodeName === tag.toUpperCase(); } function moveRow(row, reference, direction) { var parent = row.parentNode; if (direction === 1) { if (reference.nextSibling) { parent.insertBefore(row, reference.nextSibling); } else { parent.appendChild(row); } } else if (direction === -1) { parent.insertBefore(row, reference); } } function rowIndex(tbody, row) { var rows = tbody.rows, length = rows.length, i = 0; for (; i < length; i++) { if (row === rows[ i ]) { return i; } } return -1; } function addEvent(obj, type, fn) { if (obj.attachEvent) { obj.attachEvent('on' + type, fn); } else { obj.addEventListener(type, fn, false); } } function removeEvent(obj, type, fn) { if (obj.detachEvent) { obj.detachEvent('on' + type, fn); } else { obj.removeEventListener(type, fn, false); } } function trim(str) { return str.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, ''); } function hasClass(element, cls) { cls = trim(cls); if (cls === '') { return false; } if (cls.indexOf(' ') !== -1) { var classes = cls.replace(/\s+/g, ' ').split(' '), i = 0, len = classes.length; for (; i < len; i++) { if (hasClass(element, classes[ i ]) === false) { return false; } } return true; } if (element.classList) { return !!element.classList.contains(cls); } else { return !!element.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)')); } } function addClass(element, cls) { cls = trim(cls); if (cls === '') { return; } if (cls.indexOf(' ') !== -1) { var classes = cls.replace(/\s+/g, ' ').split(' '), i = 0, len = classes.length; for (; i < len; i++) { addClass(element, classes[ i ]); } return; } if (hasClass(element, cls) === false) { if (element.classList) { element.classList.add(cls); } else { element.className += ' ' + cls; } } } function removeClass(element, cls) { cls = trim(cls); if (cls === '') { return; } if (cls.indexOf(' ') !== -1) { var classes = cls.replace(/\s+/g, ' ').split(' '), i = 0, len = classes.length; for (; i < len; i++) { removeClass(element, classes[ i ]); } return; } if (hasClass(element, cls)) { if (element.classList) { element.classList.remove(cls); } else { element.className = element.className.replace(new RegExp('(\\s|^)' + cls + '(\\s|$)'), ' '); } } } function bind(fn, context) { if (Function.prototype.bind) { return fn.bind(context); } return function () { fn.apply(context, arrProto.slice.call(arguments)); }; } function extend(base, from) { if ($) { return $.extend({}, base, from); } var obj = {}, key; for (key in base) { if (base.hasOwnProperty(key)) { obj[ key ] = base[ key ]; } } if (from && '[object Object]' === Object.prototype.toString.call(from)) { for (key in from) { if (from.hasOwnProperty(key)) { obj[ key ] = from[ key ]; } } } return obj; } function qsa(element, query) { if ($) { return $.makeArray($(element).find(query)); } return element.querySelectorAll(query); } function closest(element, tag) { var c = 1, max = 20, found = element; tag = tag.toLowerCase(); while (found.tagName && found.tagName.toLowerCase() !== tag) { if (c > max || !found.parentNode) { return null; } found = found.parentNode; c++; } return found; } function inArray(arr, search) { if (arrProto.indexOf) { return arrProto.indexOf.call(arr, search); } for (var i = 0, len = arr.length; i < len; i++) { if (search === arr[ i ]) { return i; } } return -1; } if ($) { $.fn.extend({ rowSorter: function(options) { var sorters = []; this.each(function(index, element) { sorters.push(new RowSorter(element, options)); }); return sorters.length === 1 ? sorters[0] : sorters; } }); $.rowSorter = {undo: RowSorter.undo, revert: RowSorter.revert, destroy: RowSorter.destroy}; } return RowSorter; }); 
var rpta="";
window.parent.carga();
function start() {
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >INSTRUCCIONES</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_014.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 36px verdana;text-align:center;padding:0px 50px;' id='' class='' >	Ordena las capas de la atmosfera, comenzando con el titulo atmosfera</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:rgba(255,0,0,.5);' id='' class='' >Esta página semitransparente es una página de instrucciones. Después de hacer clic aquí, la página se revelará por completo y comenzará la prueba. Lea atentamente las instrucciones anteriores y, si no está seguro de si está listo para realizar la tarea, NO haga clic todavía y pregunte primero a su maestro. </div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >CLICK PARA INICIAR!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="")	rpta=cualrpta;
	arrrpta=rpta.split("|");
	tabla=document.getElementById("tabladow");
	buffer="";
	for(var k=0;k<arrrpta.length-1;k++){
		for(var i=0;i<tabla.rows.length;i++){
			if(tabla.rows[i].id.split("_")[1]==arrrpta[k])	buffer+="<tr id='tr_"+k+"'>"+tabla.rows[i].innerHTML+"</tr>\n";
		}
	}
	if(buffer!="")	{
		tabla.innerHTML="<tbody>\n"+buffer+"</tbody>\n";
	}
	RowSorter("#tabladow");
}
function crearpta()	{
	rpta="";
	tabla=document.getElementById("tabladow");
	for(var i=0;i<tabla.rows.length;i++){
		rpta+=tabla.rows[i].id.split("_")[1]+"|"
	}
	// alert(rpta)
}
window.onload = function() {
	instructions();
	crearpta();
}	
function 	playsound()	{
	myAudio1.play();
}
function respuesta(valor)	{
	var arrrpta=valor.split("|");
	var arrok=["0","1","2","3","4","5","6"];
	var total=0;
	for(k=0;k<arrrpta.length-1;k++)	{
		for(x=0;x<arrok.length-1;x++)	{
			if(arrok[x]==arrrpta[k] && x==k)	total++;
		}
	}
	return(String(100*total/7).formatMoney(2)+"%");
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
body	{
	background:url(media/night.jpg) no-repeat center center fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
	table {
		width: 100%; 
		font-size:32px;
	}
	table thead th {
		background-color: #ccc; 
		padding: 5px 8px;
	}
	table td {
		background-color: rgba(192,255,255,.15); 
		padding:10px 15px;
		color:#ddf;
		text-shadow:2px 2px 2px #000;
	}
	table.sorting-table {
		cursor: move;
	}
	table tr.sorting-row td {
		background-color: #fe8;
	}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;font-size:calc(32px + 1vw);text-align:center;padding:20px 0px;color:#ffa;" id="" class="" >Ordena las capas de la atmosfera</div>
	<div style="float:left;width:100%;overflow:hidden;padding:10px 0px;font-size:36px;color:#fff;" id="" class="" >Comienza con el titulo atmosfera !</div>
	<table id="tabladow" class='fontech'>
		<tbody>
			<tr id="tr_4"><td>Ionosfera			</td></tr>
			<tr id="tr_3"><td>Mesosfera			</td></tr>
			<tr id="tr_5"><td>Exosfera			</td></tr>
			<tr id="tr_1"><td>Troposfera		</td></tr>
			<tr id="tr_2"><td>Estratosfera	</td></tr>
			<tr id="tr_0"><td>Atmosfera			</td></tr>
		</tbody>
	</table>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="crearpta();parent.saveforlater('014',rpta)">Guardar para despues</button>
		<button id="btntd" 	style="font:bold 38px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="crearpta();parent.taskdone('014',rpta)">Tarea terminada!</button>
	</div>
	<audio id="myAudio1"><source src="media/fd.wav"></audio>
</body>

	