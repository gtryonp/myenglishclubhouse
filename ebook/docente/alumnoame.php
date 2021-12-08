<!DOCTYPE html>
<html lang="es">
<head>
<!--title>Ventas Primeras v2</title-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' href='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAACXBIWXMAAAsTAAALEwEAmpwYAAACPUlEQVQ4y42Sy0tUYRjGf+ebM7fvzOVMo5OXIWs0LMOShsrUqAhr265dUIGbLsv+gDYFrVsU2FAtoo0QbQIXtekCggPlmIKVijNp1piOM+M5c/laDApBXp7Vs/q9z/vwaEopBWCaIYygSW9PL6Ofx5kaG2Un0tdN59FugofP0ba/heVQB017YmRmv2H6fVxoi/IiOfFfgFg3mgYBr2RyZoFg0OTkxWuEwnXc6z5ALLu6aYINwOJ8Go/bScCQBKVBfUMLty9dpnX6B3dn5rZ/4eCx0xjShy4EDodAFxpnU+957Y3Qv10HDxPPaY+fQQgHuhBoGjSlp6iMT/Clu3/LEsWVqwMUhElASoLSi1t3YBXyNI995Gekhbcj77YGJB4/YnjoCQHpxfQZ1OsKj9tFKTmC6jrOwnxmawBArlAkYHgxKdF+Z4CGySTFTBrvka6d7WDNsjH9ElkfIt/ZQ/jZA+xqhVKkbltALcGaxS5TEgn7aLx+C2cuh3S5yCp7hwnWinjdOi6H4itVrH0xyr8WGX45xKungyzlcli2jWkYZHM5hBC4dJ03o8kaYPrThw3iifgh7vf14SnZ/P45T7WQxy8lYUMiFNguFyFDsmrb/w5pXdFolNYbNylNf6cjlWIwkWB5dfMpa0opdT62l1PNu9HLZaqaIB6PI3UnydQY2UwaT0MjqlhAWRaa24OmgVUokpdGLYHpELSbJpXcCugOVuZm+WNZRFSZsNuJS3qoaoqq7qhddTqpqgpLQT9/Ae25wXHTYuQXAAAAAElFTkSuQmCC' type='image/ico' >
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<link rel="stylesheet" href="js/jquery-ui.css">
<script defer src="fa/js/all.js"></script>
<script src="js/chart.min.js"></script>
<script src="gf.js"></script>
<script defer src="fa/js/all.js"></script>
<script src="js/chart.min.js"></script>
<script src="js/jquery.poshytip.js"></script>
<link href="js/tip-yellow/tip-yellow.css" rel="stylesheet" type="text/css" /> 
<style>
body	{background:#ededed !important;font:1.6vmin "arial black" !important;}
button {
	border: 1px solid #BEBEBE;
	border-radius: 4px;    
	box-shadow:0px 10px 10px #fff inset;
	background:#ccc;
	height:34px !important;
	font:1.6vmin "arial black" !important; color:#999 !important;
	text-align-last:center;
}
button:hover {
	background:#ffa;
	transition:all 1s ease;
}
select.izquierda {
	border: 1px solid #BEBEBE;
	border-radius: 4px;    
	apadding: 6px 0px;
	acolor:#000;
	box-shadow:0px 10px 10px #fff inset;
	afont-size:2vmin !important;
	background:#ccc;
	height:34px !important;
	font:1.6vmin "arial black" !important; color:#999 !important;
	text-align-last:center;
}
select.izquierda:hover {
	background:#ffa;
	transition:all 1s ease;
	font:1.6vmin "arial black" !important; color:#999 !important;
}
select {
	border: 1px solid #BEBEBE;
	border-radius: 4px;    
	padding: 0px 2px;
	acolor:#000;
	box-shadow:0px 10px 10px #fff inset;
	afont-size:2vmin !important;
	background:#ccc;
	height:22px !important;
	font:1.6vmin "arial black" !important; color:#999 !important;
	width:95%;
}
select:hover {
	background:#ffa;
	transition:all 1s ease;
	font:1.6vmin "arial black" !important; color:#999 !important;
}
input[type="text"]{
	border: 1px solid #aaa;
	border-radius: 4px; 
	padding:2px;
	acolor:#000;
	afont-size:2vmin;
	width:100%;
	box-shadow:4px 4px 10px #ccc inset;
	font:1.6vmin arial !important; color:#999 !important;
}
input[type="date"]{
	border: 1px solid #aaa;
	border-radius: 4px; 
	padding:0px 2px;
	color:#000;
	afont-size:2vmin;
	width:100%;
	box-shadow:4px 4px 10px #ccc inset;
	font:1.6vmin arial !important; color:#999 !important;
}
input[type="text"]:hover	,input[type="date"]:hover	{
	background:#ffa;
	transition:all 1s ease;
	font:1.6vmin arial  !important; color:#999 !important;
}
	.adivinputtexto							{width:100%;}
	.divinputtexto							{width:100%;}
	.boton												{width:100%;}
	.boton:hover									{background:rgba(255,2555,100,1);}
	button.ui-multiselect				{padding:6px 0px !important;}
	#divizquierda								{background:#ededed;}
	.ui-tabs											{margin:0px !important;border:0px solid !important;background:#eee !important;}
	.ui-tabs-nav									{background:#ededed !important;margin:0px !important;border:0px solid !important;font:1.3vmin "arial black" !important;}
	.ui-tabs-panel							{background:#fff !important;margin:0px !important;}
	.ui-state-default 					{background:#f7f7f7 !important;margin:0px !important;padding:5px 10px 12px 10px !important;}
	.ui-state-active 						{background:#fff !important;margin:0px !important;padding:5px 10px 12px 10px !important;}
	.botondetalles							{font:2vmin "arial black";background:#fff;width:90%;color:#888;padding:10px 0px;}
	.botondetalles:hover				{color:#000;}
	.diva													{background:#fafafa !important;padding:6px 0px;color:#888;}
	.divb													{background:#fff !important;padding:6px 0px;color:#888;}
	.ui-multiselect 																											{ text-align:left ;border:1px solid #aaa;margin:0px;border-radius: 4px;font:1.75vmin "arial black" !important; color:#999 !important;box-shadow:0px 10px 10px #fff inset;background:#ccc !important;text-align:center !important;}
	.ui-multiselect:hover 																								{ background:#ffa !important;transition:all 1s ease;}
	.ui-multiselect-menu 																									{ display:none; position:absolute; z-index:10000; background:#ffa !important;}
	.ui-multiselect-header ul li		 																			{ float:left; }
	.ui-multiselect-checkboxes label																		{ cursor:default; display:block;font:1.75vmin "arial black" !important; color:#999 !important; }
	.ui-multiselect-checkboxes label:hover															{ cursor:default; display:block; background:#1E90FF !important;color:#fff !important;}
	.ui-multiselect-checkboxes li 																			{ clear:both;}
	.ui-multiselect-checkboxes li.ui-multiselect-optgroup-label 			{ text-align:center; border-bottom:1px solid; }
	.ui-multiselect-checkboxes li.ui-multiselect-optgroup-label a 	{ display:block; margin:1px 0; text-decoration:none;box-shadow:0px 10px 10px #fff inset; }
	.ui-widget			{apadding:0px;font:1.5vmin "arial black" !important; }
	.divinput			{float:left;padding:15px;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAAIh0lEQVRIx52XfYxcVRnGf+ece2d35u7u7Ozs7vQTaFlSARuhKgQkQohA0oBCqJCYQlpNMKnxK5qIkmBIxJTEGA0RI4mKUDACMfUjKolgoYZWsYUQqESw0MV2uzOd7szs7M79Ou/rH7PbQvwAPTcnubnnnvOcnPd5n+c9hnfR6vV6NDMzc7mIbDbGbBKRVWEYnmmMIUmSI865Y977g6VS6alarfbrsbGx9J3WNP9tcGZmZqJer38lz/NbRGTSOYcxBmMM1lpU9VQXEVQVY8xx59wPnXP3bNy4cf5/Bn7++ee3pWm60xhTc85RKpWIoojBwUHCMMRaC4CIkGUZvV6PhYUF4jgmz3NEZDaKots3btz4wLsCPnTokJufn79PRG5zzjE8ElEdr1EoWFChebLJiU6DTtZG1TA0UKY2uoJquQrGEyfCyXqT+W4bESEIgvsrlcqOqakp/x+B9+/f7+I4/lEQBLcWCgVWr15NqTxKb/4Ee6ef5pmZnzOdHaKpx8kyT54pmltG8xpThQv4yNQWrlh/OdFImXZnjmPHjpEkCar6YK1W++SGDRv8vwXes2fPD4DbSqUS69atIyyEvHTkID9r3MuL7nfEWYZmoKmFRMkyJU8Unyveg0lDzh24lM998KtsmrqINE05fPgwcRwTBMH9l1122af/BXjPnj3b8jz/cbFY5Jxzzsa6En94/XEe999h1r9MloFkHskgTy0kjjxTfKbkqcUlnlgMmgvDfpzPvO9ObrzoFrIs5rW/vUYcxwwPD2+/+OKLHwCwAHv37p3o9Xo7jTGsXbuWsFBk35Ff8Ki7mwavoAhWHKGA0SKjMklkq0SuSsWsxLoAMQ6Dx6As0OTbB+5k9593ERWGWLNmDQMDA3Q6nZ0HDhyYAAgAut3uVxRqY5UK5XKZl04e4BHuYs5PAwJqweRk1rKuMMX3r36Sgg4Ajoycmx9/P0eSN7FqUaeAEJs23z14F1O187lw3SaaJ0/SbrdrzWbzduBL9rnnnoviOL5F1LBqzUq6cZefzd1F27yOsR6MEFjtdwOOkMhWGHTDFIOIkWAEawcIrMc6sNZg1BCq0jFz3LvvbtK0y4pVa7Fq6PV6W1988cXITk9PXyMikxOjw9hSgRdaT3M4eBYNPHZJLP5tHr7te/9d3zJm1IL1HDjxR555/U8Ml4YYLo+QZdnkq6++ermN4/hKgJGJcQYSy978pySB4iUAFYyCwQAWBQwKKqcgVRVRRUVRD5IvUcdZbOIQzfjNy4+iPqE6OQlAnuebA1XdJCKMlCPm80XeWHgBnEG8JfABg72I3CskYFPBUiEzpk8OwKtAXMR1qxibgBdEwbOIN4oXeO7IPuqtOtXxCtVqlVartSkQkfMAokLE9OLf6fTaGKfk3rPabuB7VzyDpYDBIvSPf0Ddsi4TaMDPb30aQTEaYI1FUa68d4pjnX+AMbR9gzfbR9lUnaRQKFAoFM4L0jQtDw0NEdqQdt5k0Se4TPACUGLAjGCx9A9cMOrA6Om4OmHQl/BkOOMw9IFPRV8N3qbUuzMYvZAwDMnzvBwsu4o3sNBZwEuGohgcpmBZfvoBdkt4p4mlAqIe58J/JZwxGBQjAfgMgzvFC6uq7WKxCCg2CXASnhr03uM173eTIwiiHuW0FYrIaadaIpog6Fv2YHGMFqoo/TnOuXYwNjZ2qFwuX5JISnWoSrFRYsGlKMJsepg79t+MikFEUbFMhGfx5UvuwWnfj52zfP33X6Axf4wMQQRElFavuZwDFMwgKypn4CXHe4+IHArCMDwoIpfkcY9VI2cz7s+mU/gL1hh6zLHv5C8RgdwrIoYzggvA0CeRKsYo++pPMn3yb3jx4A3iQX2fFQqcVTqHleOr6PV65HmO9/6g7Xa7T6VpSnd+kaHiCB8oXo0V+5Y4gWpfHRyG0DqM6imh0CXlUH27uNjleKvlyvUfpVgYZHGxR5qmpGn6lO10Ok8kSVKfb8/jVfjwmR9jIl6HU1BMH9wqWIMA4hVvPIIiKDkZRg1ql/5WUOnvwluohWu57oLrEclpt1qkaVrP8/wJu2PHjoU4jh/qdlvMd5qsm3wPVw99GmEAJ7ZPOnE4sRgFj+JyB9LXZKMBigVjsHpaQAVD6It86r2fY01tDe12e7k02rV169aFAKDVat0zFA1tbZw4URuKhrjh3FuZ3v9Xnh14iMhMgAvo9GYwKLPpG3z+yRvwalBRJFfmem8SiCF1YP1ymgVsXvVxbrj0E6RpSqPRYHFxcXZubm7n2xLyscce31atjv141cqVrF45SbPb4ycvf5Pn+RXH41k07+ux9x7x4HMgB5M7vIdYPN4bNA9xueGqyk187bpvMlKKOPqPY8zOztLpdLZff/31DwBLGQ089tijL9x4442rvMj7jQ2pjQ5zwdjFtGaFN9NDpHRRNUvl7JJPCKgGqDrwAmIZZYxt67/IZ6++g5FiwPH6HCcaDZIkuf/aa6/9xjKee6vVXXXVVb8tlUpnGbL3pWoZKle48IwPcX5wOdmcoZUdJ88TPB5RMAK5Ci4vMC5ncsX4DXzt0m9xzabNOKvMzLZonpghz+XBo0eP3rZ79279j+Xtrl273NjY2H1RFN1WqVQYHx8niiJQmG02eK35Cm/Mvcp83EREGR2scFZlA+tXnM+KsQkMSrfbpV6v02q1mJ+fv7/X6+246aab/Lsq6Hfv3r1teHh4Z6lUqo2MjDBSLlMsDVF0FhVBXNC3DSMIgk+FuLdIqzVHu90mjuPZubm527ds2fLA/3yFeeSRRybK5fLtg4ODWwthYXJwICQYGKQURYS2X51kWU6cxsRxj7iXkCRpPUmSXXEc79yyZUvj/7o7LbeHH344qlQq14RheKUxZpOqnmeMKWtfrtrGmEPe+4NZlj3VaDSe2L59+8I7rflPLZedUUTTnyMAAAAASUVORK5CYII=) 100% 100% no-repeat;}
	.formimagen		{display:none;}
	.colorgris					{color:#ccc !important;}
	.circulo_rojo			{color:rgba(255,100,100,1);margin:0px 1px 0px 0px;font-size:1vmin;}
	.circulo_no				{color:rgba(216,216,216,0);margin:0px 1px 0px 0px;font-size:1vmin;}
	.circulo_gris			{color:rgba(216,216,216,1);margin:0px 1px 0px 0px;font-size:1vmin;}
	.circulo_verde		{color:rgba(0,216,0,1);margin:0px 1px 0px 0px;font-size:1vmin;}
	.circulo_azul			{color:rgba(128,128,255,1);margin:0px 1px 0px 0px;font-size:1vmin;}
	.circulo_amarillo	{color:rgba(255,255,128,1);margin:0px 1px 0px 0px;font-size:1vmin;}
</style>
<script>
	// window.onerror = function(msg, url, linenumber) {alert('Error : '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);return true;}
	(function($, undefined){var multiselectID = 0;$.widget("ech.multiselect", { 	options: { 		header: true, 		height: 175, 		minWidth: 125, 		classes: '', 		checkAllText: 'Todos', 		uncheckAllText: 'Ninguno', 		noneSelectedText: 'Todos', 		selectedText: '# seleccion(es)', 		selectedList: 2, 		show: null, 		hide: null, 		autoOpen: false, 		multiple: true, 		position: {} 	}, 	_create: function(){ 		var el = this.element.hide(), 			o = this.options; 		this.speed = $.fx.speeds._default; 		this._isOpen = false; 		var 			button = (this.button = $('<button type="button"><span class="ui-icon ui-icon-triangle-2-n-s"></span></button>')) 				.addClass('ui-multiselect ui-widget ui-state-default ui-corner-all') 				.addClass( o.classes ) 				.attr({ 'title':el.attr('title'), 'aria-haspopup':true, 'tabIndex':el.attr('tabIndex') }) 				.insertAfter( el ), 			buttonlabel = (this.buttonlabel = $('<span />')) 				.html( o.noneSelectedText ) 				.appendTo( button ), 			menu = (this.menu = $('<div />')) 				.addClass('ui-multiselect-menu ui-widget ui-widget-content ui-corner-all') 				.addClass( o.classes ) 				.appendTo( document.body ), 			header = (this.header = $('<div />')) 				.addClass('ui-widget-header ui-corner-all ui-multiselect-header ui-helper-clearfix') 				.appendTo( menu ), 			headerLinkContainer = (this.headerLinkContainer = $('<ul />')) 				.addClass('ui-helper-reset') 				.html(function(){ 					if( o.header === true ){ 						return '<li><a class="ui-multiselect-all" href="#"><span class="ui-icon ui-icon-check"></span><span>' + o.checkAllText + '</span></a></li><li><a class="ui-multiselect-none" href="#"><span class="ui-icon ui-icon-closethick"></span><span>' + o.uncheckAllText + '</span></a></li>'; 					} else if(typeof o.header === "string"){ 						return '<li>' + o.header + '</li>'; 					} else { 						return ''; 					} 				}) 				.append('<li class="ui-multiselect-close"><a href="#" class="ui-multiselect-close"><span class="ui-icon ui-icon-circle-close"></span></a></li>') 				.appendTo( header ), 			checkboxContainer = (this.checkboxContainer = $('<ul />')) 				.addClass('ui-multiselect-checkboxes ui-helper-reset') 				.appendTo( menu ); 		this._bindEvents(); 		this.refresh( true ); 		if( !o.multiple ){ 			menu.addClass('ui-multiselect-single'); 		} 	}, 	_init: function(){ 		if( this.options.header === false ){ 			this.header.hide(); 		} 		if( !this.options.multiple ){ 			this.headerLinkContainer.find('.ui-multiselect-all, .ui-multiselect-none').hide(); 		} 		if( this.options.autoOpen ){ 			this.open(); 		} 		if( this.element.is(':disabled') ){ 			this.disable(); 		} 	}, 	refresh: function( init ){ 		var el = this.element, 			o = this.options, 			menu = this.menu, 			checkboxContainer = this.checkboxContainer, 			optgroups = [], 			html = "", 			id = el.attr('id') || multiselectID++; 		el.find('option').each(function( i ){ 			var $this = $(this), 				parent = this.parentNode, 				title = this.innerHTML, 				description = this.title, 				value = this.value, 				inputID = 'ui-multiselect-' + (this.id || id + '-option-' + i), 				isDisabled = this.disabled, 				isSelected = this.selected, 				labelClasses = [ 'ui-corner-all' ], 				liClasses = (isDisabled ? 'ui-multiselect-disabled ' : ' ') + this.className, 				optLabel; 			if( parent.tagName === 'OPTGROUP' ){ 				optLabel = parent.getAttribute( 'label' ); 				if( $.inArray(optLabel, optgroups) === -1 ){ 					html += '<li class="ui-multiselect-optgroup-label ' + parent.className + '"><a href="#">' + optLabel + '</a></li>'; 					optgroups.push( optLabel ); 				} 			} 			if( isDisabled ){ 				labelClasses.push( 'ui-state-disabled' ); 			} 			if( isSelected && !o.multiple ){ 				labelClasses.push( 'ui-state-active' ); 			} 			html += '<li class="' + liClasses + '">'; 			html += '<label for="' + inputID + '" title="' + description + '" class="' + labelClasses.join(' ') + '">'; 			html += '<input id="' + inputID + '" name="multiselect_' + id + '" type="' + (o.multiple ? "checkbox" : "radio") + '" value="' + value + '" title="' + title + '"'; 			if( isSelected ){ 				html += ' checked="checked"'; 				html += ' aria-selected="true"'; 			} 			if( isDisabled ){ 				html += ' disabled="disabled"'; 				html += ' aria-disabled="true"'; 			} 			html += ' /><span>' + title + '</span></label></li>'; 		}); 		checkboxContainer.html( html ); 		this.labels = menu.find('label'); 		this.inputs = this.labels.children('input'); 		this._setButtonWidth(); 		this._setMenuWidth(); 		this.button[0].defaultValue = this.update(); 		if( !init ){ 			this._trigger('refresh'); 		} 	}, 	update: function(){ 		var o = this.options, 			$inputs = this.inputs, 			$checked = $inputs.filter(':checked'), 			numChecked = $checked.length, 			value; 		if( numChecked === 0 ){ 			value = o.noneSelectedText; 		} else { 			if($.isFunction( o.selectedText )){ 				value = o.selectedText.call(this, numChecked, $inputs.length, $checked.get()); 			} else if( /\d/.test(o.selectedList) && o.selectedList > 0 && numChecked <= o.selectedList){ 				value = $checked.map(function(){ return $(this).next().html(); }).get().join(', '); 			} else { 				value = o.selectedText.replace('#', numChecked).replace('#', $inputs.length); 			} 		} 		this.buttonlabel.html( value ); 		return value; 	}, 	_bindEvents: function(){ 		var self = this, button = this.button; 		function clickHandler(){ 			self[ self._isOpen ? 'close' : 'open' ](); 			return false; 		} 		button 			.find('span') 			.bind('click.multiselect', clickHandler); 		button.bind({ 			click: clickHandler, 			keypress: function( e ){ 				switch(e.which){ 					case 27: 					case 38: 					case 37: 						self.close(); 						break; 					case 39: 					case 40: 						self.open(); 						break; 				} 			}, 			mouseenter: function(){ 				if( !button.hasClass('ui-state-disabled') ){ 					$(this).addClass('ui-state-hover'); 				} 			}, 			mouseleave: function(){ 				$(this).removeClass('ui-state-hover'); 			}, 			focus: function(){ 				if( !button.hasClass('ui-state-disabled') ){ 					$(this).addClass('ui-state-focus'); 				} 			}, 			blur: function(){ 				$(this).removeClass('ui-state-focus'); 			} 		}); 		this.header 			.delegate('a', 'click.multiselect', function( e ){ 				if( $(this).hasClass('ui-multiselect-close') ){ 					self.close(); 				} else { 					self[ $(this).hasClass('ui-multiselect-all') ? 'checkAll' : 'uncheckAll' ](); 				} 				e.preventDefault(); 			}); 		this.menu 			.delegate('li.ui-multiselect-optgroup-label a', 'click.multiselect', function( e ){ 				e.preventDefault(); 				var $this = $(this), 					$inputs = $this.parent().nextUntil('li.ui-multiselect-optgroup-label').find('input:visible:not(:disabled)'), 					nodes = $inputs.get(), 					label = $this.parent().text(); 				if( self._trigger('beforeoptgrouptoggle', e, { inputs:nodes, label:label }) === false ){ 					return; 				} 				self._toggleChecked( 					$inputs.filter(':checked').length !== $inputs.length, 					$inputs 				); 				self._trigger('optgrouptoggle', e, { 				    inputs: nodes, 				    label: label, 				    checked: nodes[0].checked 				}); 			}) 			.delegate('label', 'mouseenter.multiselect', function(){ 				if( !$(this).hasClass('ui-state-disabled') ){ 					self.labels.removeClass('ui-state-hover'); 					$(this).addClass('ui-state-hover').find('input').focus(); 				} 			}) 			.delegate('label', 'keydown.multiselect', function( e ){ 				e.preventDefault(); 				switch(e.which){ 					case 9: 					case 27: 						self.close(); 						break; 					case 38: 					case 40: 					case 37: 					case 39: 						self._traverse(e.which, this); 						break; 					case 13: 						$(this).find('input')[0].click(); 						break; 				} 			}) 			.delegate('input[type="checkbox"], input[type="radio"]', 'click.multiselect', function( e ){ 				var $this = $(this), 					val = this.value, 					checked = this.checked, 					tags = self.element.find('option'); 				if( this.disabled || self._trigger('click', e, { value: val, text: this.title, checked: checked }) === false ){ 					e.preventDefault(); 					return; 				} 				$this.focus(); 				$this.attr('aria-selected', checked); 				tags.each(function(){ 					if( this.value === val ){ 						this.selected = checked; 					} else if( !self.options.multiple ){ 						this.selected = false; 					} 				}); 				if( !self.options.multiple ){ 					self.labels.removeClass('ui-state-active'); 					$this.closest('label').toggleClass('ui-state-active', checked ); 					self.close(); 				} 				self.element.trigger("change"); 				setTimeout($.proxy(self.update, self), 10); 			}); 		$(document).bind('mousedown.multiselect', function( e ){ 			if(self._isOpen && !$.contains(self.menu[0], e.target) && !$.contains(self.button[0], e.target) && e.target !== self.button[0]){ 				self.close(); 			} 		}); 		$(this.element[0].form).bind('reset.multiselect', function(){ 			setTimeout($.proxy(self.refresh, self), 10); 		}); 	}, 	_setButtonWidth: function(){ 		var width = this.element.outerWidth(), 			o = this.options; 		if( /\d/.test(o.minWidth) && width < o.minWidth){ 			width = o.minWidth; 		} 		this.button.width( width ); 	}, 	_setMenuWidth: function(){ 		var m = this.menu, 			width = this.button.outerWidth()- 				parseInt(m.css('padding-left'),10)- 				parseInt(m.css('padding-right'),10)- 				parseInt(m.css('border-right-width'),10)- 				parseInt(m.css('border-left-width'),10); 		m.width( width || this.button.outerWidth() ); 	}, 	_traverse: function( which, start ){ 		var $start = $(start), 			moveToLast = which === 38 || which === 37, 			$next = $start.parent()[moveToLast ? 'prevAll' : 'nextAll']('li:not(.ui-multiselect-disabled, .ui-multiselect-optgroup-label)')[ moveToLast ? 'last' : 'first'](); 		if( !$next.length ){ 			var $container = this.menu.find('ul').last(); 			this.menu.find('label')[ moveToLast ? 'last' : 'first' ]().trigger('mouseover'); 			$container.scrollTop( moveToLast ? $container.height() : 0 ); 		} else { 			$next.find('label').trigger('mouseover'); 		} 	}, 	_toggleState: function( prop, flag ){ 		return function(){ 			if( !this.disabled ) { 				this[ prop ] = flag; 			} 			if( flag ){ 				this.setAttribute('aria-selected', true); 			} else { 				this.removeAttribute('aria-selected'); 			} 		}; 	}, 	_toggleChecked: function( flag, group ){ 		var $inputs = (group && group.length) ?  group : this.inputs, 			self = this; 		$inputs.each(this._toggleState('checked', flag)); 		$inputs.eq(0).focus(); 		this.update(); 		var values = $inputs.map(function(){ 			return this.value; 		}).get(); 		this.element 			.find('option') 			.each(function(){ 				if( !this.disabled && $.inArray(this.value, values) > -1 ){ 					self._toggleState('selected', flag).call( this ); 				} 			}); 		if( $inputs.length ) { 			this.element.trigger("change"); 		} 	}, 	_toggleDisabled: function( flag ){ 		this.button 			.attr({ 'disabled':flag, 'aria-disabled':flag })[ flag ? 'addClass' : 'removeClass' ]('ui-state-disabled'); 		var inputs = this.menu.find('input'); 		var key = "ech-multiselect-disabled"; 		if(flag) { 			inputs = inputs.filter(':enabled') 				.data(key, true) 		} else { 			inputs = inputs.filter(function() { 				return $.data(this, key) === true; 			}).removeData(key); 		} 		inputs 			.attr({ 'disabled':flag, 'arial-disabled':flag }) 			.parent()[ flag ? 'addClass' : 'removeClass' ]('ui-state-disabled'); 		this.element 			.attr({ 'disabled':flag, 'aria-disabled':flag }); 	}, 	open: function( e ){ 		var self = this, 			button = this.button, 			menu = this.menu, 			speed = this.speed, 			o = this.options, 			args = []; 		if( this._trigger('beforeopen') === false || button.hasClass('ui-state-disabled') || this._isOpen ){ 			return; 		} 		var $container = menu.find('ul').last(), 			effect = o.show, 			pos = button.offset(); 		if( $.isArray(o.show) ){ 			effect = o.show[0]; 			speed = o.show[1] || self.speed; 		} 		if( effect ) {       args = [ effect, speed ]; 		} 		$container.scrollTop(0).height(o.height); 		if( $.ui.position && !$.isEmptyObject(o.position) ){ 			o.position.of = o.position.of || button; 			menu 				.show() 				.position( o.position ) 				.hide(); 		} else { 			menu.css({ 				top: pos.top + button.outerHeight(), 				left: pos.left 			}); 		} 		$.fn.show.apply(menu, args); 		this.labels.eq(0).trigger('mouseover').trigger('mouseenter').find('input').trigger('focus'); 		button.addClass('ui-state-active'); 		this._isOpen = true; 		this._trigger('open'); 	}, 	close: function(){ 		if(this._trigger('beforeclose') === false){ 			return; 		} 		var o = this.options, 		    effect = o.hide, 		    speed = this.speed, 		    args = []; 		if( $.isArray(o.hide) ){ 			effect = o.hide[0]; 			speed = o.hide[1] || this.speed; 		}     if( effect ) {       args = [ effect, speed ];     }     $.fn.hide.apply(this.menu, args); 		this.button.removeClass('ui-state-active').trigger('blur').trigger('mouseleave'); 		this._isOpen = false; 		this._trigger('close'); 	}, 	enable: function(){ 		this._toggleDisabled(false); 	}, 	disable: function(){ 		this._toggleDisabled(true); 	}, 	checkAll: function( e ){ 		this._toggleChecked(true); 		this._trigger('checkAll'); 	}, 	uncheckAll: function(){ 		this._toggleChecked(false); 		this._trigger('uncheckAll'); 	}, 	getChecked: function(){ 		return this.menu.find('input').filter(':checked'); 	}, 	destroy: function(){ 		$.Widget.prototype.destroy.call( this ); 		this.button.remove(); 		this.menu.remove(); 		this.element.show(); 		return this; 	}, 	isOpen: function(){ 		return this._isOpen; 	}, 	widget: function(){ 		return this.menu; 	}, 	getButton: function(){ 	  return this.button;   }, 	_setOption: function( key, value ){ 		var menu = this.menu; 		switch(key){ 			case 'header': 				menu.find('div.ui-multiselect-header')[ value ? 'show' : 'hide' ](); 				break; 			case 'checkAllText': 				menu.find('a.ui-multiselect-all span').eq(-1).text(value); 				break; 			case 'uncheckAllText': 				menu.find('a.ui-multiselect-none span').eq(-1).text(value); 				break; 			case 'height': 				menu.find('ul').last().height( parseInt(value,10) ); 				break; 			case 'minWidth': 				this.options[ key ] = parseInt(value,10); 				this._setButtonWidth(); 				this._setMenuWidth(); 				break; 			case 'selectedText': 			case 'selectedList': 			case 'noneSelectedText': 				this.options[key] = value; 				this.update(); 				break; 			case 'classes': 				menu.add(this.button).removeClass(this.options.classes).addClass(value); 				break; 			case 'multiple': 				menu.toggleClass('ui-multiselect-single', !value); 				this.options.multiple = value; 				this.element[0].multiple = value; 				this.refresh(); 		} 		$.Widget.prototype._setOption.apply( this, arguments ); 	} });})(jQuery);
	window.onload = function () {
		Array.from(document.querySelectorAll('input')).forEach(function(actual) { actual.addEventListener('input', function (e) {handleInput(e);});});
		var tab = document.createElement('div');
		tab.style="z-Index:999999;opacity:.5;position:absolute;abackground:rgba(128,128,128,.75);left:0px;top:0px;color:rgb(255,255,0);height:100%;width:100%;background: url(data:image/gif;base64,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) center center no-repeat rgba(128,128,128,.75);";
		$( "#tabs" ).tabs().css({'overflow': 'auto'});
		window.top.document.body.appendChild(tab);
		$.ajax({url: 'clasearchivo.php',type: 'POST',async:true,data: "modo=nada",dataType: 'html', success: function(msg){ 
			var $_GET = {};			
			document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {function decode(s) {return decodeURIComponent(s.split("+").join(" "));}$_GET[decode(arguments[1])] = decode(arguments[2]);});
			ponstyle();
			cargaselects();
			$.ajax({url: 'clasepersona.php',type: 'POST',async:false,data: "modo=getpersona&persona="+$_GET['persona'],dataType: 'json', success: function(msg){ 
				otitle(document.location.href,"AÑADIR PERSONA");
				if(msg.length>0)	{
					if(msg.length>0)	document.getElementById("divusuario").innerHTML=msg[0].paterno+" "+msg[0].materno+" "+msg[0].nombres;
					Object.keys(msg[0]).forEach(function(key) {
						if(document.getElementById(key)!=null)	{
							document.getElementById(key).style.width="95%";
							try { 
								switch (document.getElementById(key).type) {
									case "text":
									case "hidden":
									case "color":
									case "date":
										document.getElementById(key).value =msg[0][key];
										break;
									case "select":
									case "select-one":
										valor=msg[0][key];
										$.ajax({url: 'clasearchivo.php',type: 'POST',async:false,data: "modo=leeini&archivo=parametros.txt&ini=["+key+"]",dataType: 'html', success: function(msg){ 
											msg=msg.split("|");
											var rpta="";
											for(k=0;k<msg.length;k++)	{
												cadauno=msg[k].split("=>")
												if(cadauno[0]!="usuario") rpta+="<option "+(cadauno[0]==valor ? " selected " : "" )+" value='"+cadauno[0]+"'>"+cadauno[1]+"</option>";
											}
											document.getElementById(key).innerHTML=rpta;
										},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
										break;
								}	
							}	catch(err)	{console.log(err);};
						}	
					})
					otitle(document.location.href,"EDICION:"+msg[0].paterno+" "+msg[0].materno+" "+msg[0].nombres);
					$.ajax({url: 'clasetuit.php',type: 'POST',async:false,data: "modo=grabar&persona="+top.document.getElementById("persona").value+"&mensaje=Edicion:<a href=\"javascript:personaficha("+msg[0].persona+")\">"+msg[0].paterno+" "+msg[0].materno+" "+msg[0].nombres+"</a>",dataType: 'html', success: function(msg){ console.log(msg)},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
				}
				defaults();
			},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});		
			$(".multiselect").multiselect();
			if($_GET['persona']=="")	$( "#tabs" ).tabs( "option", "disabled", [1,2,3,4,5,6,7] );
			document.getElementById("divizquierda").style.height=document.getElementById("divderecha").offsetHeight+"px";
			top.document.body.removeChild(tab);
		},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
	}
	/*___ 	function cargaselects()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function cargaselects()	{
		$("select").each(function() {
			key=$(this).attr("id");
			$.ajax({url: 'clasearchivo.php',type: 'POST',async:false,data: "modo=leeini&archivo=parametros.txt&ini=["+key+"]",dataType: 'html', success: function(msg){ 
				if(msg.length>0)	{
					msg=msg.split("|");
					var rpta="";
					for(k=0;k<msg.length;k++)	{
						cadauno=msg[k].split("=>")
						rpta+="<option value='"+cadauno[0]+"'>"+cadauno[1]+"</option>";
					}
					document.getElementById(key).innerHTML=rpta;
				};
			},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
		})
	}
	/*___ function personatab(cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function personatab(cual)	{
		switch(cual)	{
			case 1:
				break;
			case 2:
				if(document.getElementById("iframe2").src.indexOf("dummy.php")>-1)	document.getElementById("iframe2").src="personapedido.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
			case 3:
				if(document.getElementById("iframe3").src.indexOf("dummy.php")>-1)	document.getElementById("iframe3").src="personabusqueda.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
			case 4:
				if(document.getElementById("iframe4").src.indexOf("dummy.php")>-1)	document.getElementById("iframe4").src="personacontacto.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
			case 5:
				if(document.getElementById("iframe5").src.indexOf("dummy.php")>-1)	document.getElementById("iframe5").src="personavisita.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
			case 6:
				if(document.getElementById("iframe6").src.indexOf("dummy.php")>-1)	document.getElementById("iframe6").src="personaoferta.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
			case 7:
				if(document.getElementById("iframe7").src.indexOf("dummy.php")>-1)	document.getElementById("iframe7").src="personahistorico.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
			case 8:
				if(document.getElementById("iframe8").src.indexOf("dummy.php")>-1)	document.getElementById("iframe8").src="personaimagen.php?modo=edita&persona="+document.getElementById('persona').value;
				break;
		}
	}	
	/*___ function anadeinput(nombre,cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function anadeinput(nombre,cual)	{
		if(cual==0)	{
			arr=document.getElementById(nombre).value.split(" ");
			document.getElementById(nombre+"_0").value=arr[0];
			for(k=1;k<arr.length;k++)	{
				if(arr[k]!="") {
					valor=(parseInt(document.getElementById("div"+nombre).style.height));
					document.getElementById("div"+nombre).style.height= (valor+22)+"px";
					$("#div"+nombre).append("<div id='div"+nombre+"_"+k+"' style='float:left;width:100%;overflow:hidden;' ><div style='float:left;width:calc(100% - 24px);'><input type='text' autocomplete='off'  id='"+nombre+"_"+k+"' class='clase"+nombre+"' value='"+arr[k]+"'></div><div style='float:right;cursor:pointer;' onclick=\"retirainput('"+nombre+"',"+k+")\" ><span class='far fa-minus-square fa-lg' ></span></div></div>")
				};
			}
		}
		if(cual==-1)	{
			valor=(parseInt(document.getElementById("div"+nombre).style.height))
			document.getElementById("div"+nombre).style.height= (valor+22)+"px";
			k=1+parseInt(valor/30);
			$("#div"+nombre).append("<div id='div"+nombre+"_"+k+"' style='float:left;width:100%;overflow:hidden;' ><div style='float:left;width:calc(100% - 24px);'><input type='text' autocomplete='off'  id='"+nombre+"_"+k+"' class='clase"+nombre+"' ></div><div style='float:right;cursor:pointer;' onclick=\"retirainput('"+nombre+"',"+k+")\" ><span class='far fa-minus-square fa-lg' ></span></div></div>")
		}
	};
	/*___ function retirainput(nombre,cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function retirainput(nombre,cual)	{
		document.getElementById("div"+nombre+"_"+cual).style.display="none";
		document.getElementById(nombre+"_"+cual).style.display="none";
		valor=(parseInt(document.getElementById("div"+nombre).style.height))
		document.getElementById("div"+nombre).style.height= (valor-22)+"px";
	};
	/*___ function anadeinput(nombre,cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function anadeinput2(nombre,nombre2,cual)	{
		if(cual==0)	{
			arr=document.getElementById(nombre).value.split(" ");
			arr2=document.getElementById(nombre2).value.split(" ");
			document.getElementById(nombre+"_0").value=arr[0];
			document.getElementById(nombre2+"_0").value=arr2[0];
			for(k=1;k<arr.length;k++)	{
				if(arr[k]!="") {
					valor=(parseInt(document.getElementById("div"+nombre).style.height));
					document.getElementById("div"+nombre).style.height= (valor+22)+"px";
					$("#div"+nombre).append("<div id='div"+nombre+"_"+k+"' style='float:left;width:100%;height:22px;overflow:hidden;;' class='corredor cliente propietario usuario' ><div style='float:left;width:100%;overflow:hidden;'><div style='float:left;width:calc(70% - 22px);'  ><input type='text' autocomplete='off'  class='clase"+nombre+"' id='"+nombre+"_"+k+"' style='width:calc(100% - 10px)' value='"+arr[k]+"'></div>	 <div style='float:left;width:10%;;'>P:</div>	 <div style='float:left;width:20%;'><input type='text' autocomplete='off'  class='clase"+nombre2+"' id='"+nombre2+"_"+k+"' style='width:calc(100% - 10px)' value='"+arr2[k]+"'></div><div style='float:right;cursor:pointer;' onclick=\"retirainput2('"+nombre+"','"+nombre2+"',"+k+")\" ><span class='far fa-minus-square fa-lg' ></span></div></div></div>");
				};
			}
		}
		if(cual==-1)	{
			valor=(parseInt(document.getElementById("div"+nombre).style.height))
			document.getElementById("div"+nombre).style.height= (valor+22)+"px";
			k=1+parseInt(valor/22);
			$("#div"+nombre).append("<div id='div"+nombre+"_"+k+"' style='float:left;width:100%;height:22px;overflow:hidden;;' class='corredor cliente propietario usuario' ><div style='float:left;width:100%;overflow:hidden;'><div style='float:left;width:calc(70% - 22px);'  ><input type='text' autocomplete='off'  class='clase"+nombre+"' id='"+nombre+"_"+k+"' style='width:calc(100% - 10px)'></div>	 <div style='float:left;width:10%;;'>P:</div>	 <div style='float:left;width:20%;'><input type='text' autocomplete='off'  class='clase"+nombre2+"' id='"+nombre2+"_"+k+"' style='width:calc(100% - 10px)'></div><div style='float:right;cursor:pointer;' onclick=\"retirainput2('"+nombre+"','"+nombre2+"',"+k+")\" ><span class='far fa-minus-square fa-lg' ></span></div></div></div>");
		}
	};
	/*___ function retirainput(nombre,cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function retirainput2(nombre,nombre2,cual)	{
		document.getElementById("div"+nombre+"_"+cual).style.display="none";
		document.getElementById(nombre+"_"+cual).style.display="none";
		document.getElementById(nombre2+"_"+cual).style.display="none";
		console.log("->>>>",nombre+"_"+cual,document.getElementById(nombre+"_"+cual).style.display)
		valor=(parseInt(document.getElementById("div"+nombre).style.height))
		document.getElementById("div"+nombre).style.height= (valor-22)+"px";
	};
	/*___ 	function afacebook()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function afacebook()	{
		window.open(document.getElementById("facebook").value);
	}
	/*___ 	function afacebook()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function awhatsapp()	{
		window.open(document.getElementById("whatsapp").value);
	}
	/*___ function defaults()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function defaults()	{
		document.getElementById("div_wrap").style.display="block";
		var tamano=(parseInt(window.innerHeight/20));
		document.getElementById("tabs-1").style.height=parseInt(window.innerHeight*.8)+"px";
		var tamano=parseInt(document.getElementById("divizquierda").offsetWidth*.6);
		document.getElementById("divimagenpersonabig").src="fotospersona/foto_"+document.getElementById("persona").value+"_02.jpg?d="+ Math.random();
		document.querySelector('.divimagenpersonabig').style.height=(tamano)+"px";
		document.querySelector('.divimagenpersonabig').style.width=(tamano)+"px";
		select_corredor_asignado();
		select_corredord_asignado();
		select_empresa();
		select_ubigeo();
		anadeinput("telefono",0);
		anadeinput("celular",0);
		anadeinput("correo_electronico",0);
		anadeinput2("auto","placa",0);
		Array.from(document.querySelectorAll('.iframe')).forEach(function(actual) { actual.style.height=(window.innerHeight*.8)+"px"; });
		var fechayyyymmddhhiiss=new Date().getUTCFullYear()+(new Date().getUTCMonth() + 1<10 ? "0" : "")+(new Date().getUTCMonth() + 1)+(new Date().getUTCDate()<10 ? "0" : "")+new Date().getUTCDate()+(new Date().getHours()<10 ? "0" : "" )+new Date().getHours()+(new Date().getMinutes()<10 ? "0" : "" )+new Date().getMinutes()+(new Date().getSeconds()<10 ? "0" : "")+new Date().getSeconds();
		document.getElementById("fechahora").value=fechayyyymmddhhiiss;
		Array.from(document.querySelectorAll('.anchoimagen')).forEach(function(actual) { actual.style.width=document.getElementById("divimagencontenedor").offsetWidth+"px";console.log(document.getElementById("divimagencontenedor").offsetWidth,actual.style.width)});
		$.ajax({url: 'clasepersona.php',type: 'POST',async:false,data: "modo=indicadores&persona="+document.getElementById("persona").value,dataType: 'json', success: function(msg){ 
			if(msg.length>0)	{
				$.each(msg[0], function(key, value){
					color=(key=="divhref2" ? "circulo_verde" : (key=="divhref3" ? "circulo_azul" : (key=="divhref6" ? "circulo_amarillo" : "circulo_gris" ) ));
					if (document.getElementById(key)!=null)	document.getElementById(key.split("div").join("span")).classList.add(color)
				});
			}
		},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});		
	}
	/*___ 	function select_ubigeo()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function select_ubigeo()	{
		$("#ubigeo_nombre").on("keyup", function(event) {
			var request = new XMLHttpRequest();
			request.open('POST', 'claseubigeo.php', true);
			request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			request.onreadystatechange = function (response) {
				if(request.readyState == 4 && request.status == 200) {
					var dataList = document.getElementById('list_ubigeo_nombre');
					dataList.innerHTML = '';
					msg=JSON.parse(request.responseText);
					msg.forEach(function (item) {
						var option = document.createElement('option');
						option.value = item.ubigeonombre;
						dataList.appendChild(option);
					});
				}	
			};
			request.send("modo=select&buscaxnombre="+this.value);
		}).on("blur", function(x) {
			document.getElementById("ubigeo").value="";
			if(this.value!="")	{
				console.log("modo=select&buscaxnombre="+this.value)
				$.ajax({url: 'claseubigeo.php',type: 'POST',async:false,data: "modo=select&buscaxnombre="+this.value,dataType: 'json', success: function(msg){ 
					if(msg.length>0)	{
						document.getElementById("ubigeo").value=msg[0].ubigeo;
						document.getElementById("ubigeo_nombre").value=msg[0].ubigeonombre;
					};
				},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
			}
		})		
	}
	/*___ function inputproveedor()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function select_corredor_asignado()	{
		$("#corredor_asignado_nombre").on("keyup", function(event) {
			var request = new XMLHttpRequest();
			request.open('POST', 'clasepersona.php', true);
			request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			request.onreadystatechange = function (response) {
				if(request.readyState == 4 && request.status == 200) {
					var dataList = document.getElementById('list_corredor_asignado_nombre');
					dataList.innerHTML = '';
					msg=JSON.parse(request.responseText);
					msg.forEach(function (item) {
						var option = document.createElement('option');
						option.value = item.personanombre;
						// option.text = item.personanombre;
						dataList.appendChild(option);
					});
				}	
			};
			request.send("modo=select&orden=personanombre&buscaxnombre="+this.value);
		}).on("blur", function(x) {
			$.ajax({url: 'clasepersona.php',type: 'POST',async:false,data: "modo=select&buscaxnombre="+this.value,dataType: 'json', success: function(msg){ 
				if(msg.length>0)	{
					document.getElementById("corredor_asignado").value=msg[0].persona;
					document.getElementById("corredor_asignado_nombre").value=msg[0].personanombre;
				};
			},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
		})		
	}
	/*___ function inputproveedor()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function select_empresa()	{
		$("#empresa_nombre").on("keyup", function(event) {
			var request = new XMLHttpRequest();
			request.open('POST', 'clasepersona.php', true);
			request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			request.onreadystatechange = function (response) {
				if(request.readyState == 4 && request.status == 200) {
					var dataList = document.getElementById('list_empresa_nombre');
					dataList.innerHTML = '';
					msg=JSON.parse(request.responseText);
					msg.forEach(function (item) {
						var option = document.createElement('option');
						option.value = item.razonsocial_empresa;
						// option.text = item.personanombre;
						dataList.appendChild(option);
					});
				}	
			};
			request.send("modo=select&orden=personanombre&buscaxnombre="+this.value);
		}).on("blur", function(x) {
			$.ajax({url: 'clasepersona.php',type: 'POST',async:false,data: "modo=select&buscaxnombre="+this.value,dataType: 'json', success: function(msg){ 
				if(msg.length>0)	{
					document.getElementById("empresa").value=msg[0].persona;
					document.getElementById("empresa_nombre").value=msg[0].razonsocial_empresa;
				};
			},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
		})		
	}
	/*___ function inputproveedor()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
	function select_corredord_asignado()	{
		$("#corredord_asignado_nombre").on("keyup", function(event) {
			var request = new XMLHttpRequest();
			request.open('POST', 'clasepersona.php', true);
			request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			request.onreadystatechange = function (response) {
				if(request.readyState == 4 && request.status == 200) {
					var dataList = document.getElementById('list_corredord_asignado_nombre');
					dataList.innerHTML = '';
					msg=JSON.parse(request.responseText);
					msg.forEach(function (item) {
						var option = document.createElement('option');
						option.value = item.personanombre;
						dataList.appendChild(option);
					});
				}	
			};
			request.send("modo=select&orden=personanombre&buscaxnombre="+this.value);
		}).on("blur", function(x) {
			$.ajax({url: 'clasepersona.php',type: 'POST',async:false,data: "modo=select&persona="+this.value,dataType: 'json', success: function(msg){ 
				if(msg.length>0)	{
					document.getElementById("corredord_asignado").value=msg[0].persona;
					document.getElementById("corredord_asignado_nombre").value=msg[0].personanombre;
				};
			},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
		})		
	}
/*___ $(document).ready(function(){ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
$(document).ready(function(){
	$('.add_more').click(function(e){
		e.preventDefault();
		siguiente=$("#frmimagenes").find(".formimagen").length+1;
		$(this).before("<div style='float:left;width:100%;'><input name='file[]' type='file' class='formfile' id='formfile_"+siguiente+"' onchange='readURL(this)' /><img src='' name='imagen[]' style='height:50px;width:50px;' class='formimagen' id='formimagen_"+siguiente+"'></div>");
	});
	$('body').on('click', '#upload', function(e){
		e.preventDefault();
		var formData = new FormData($(this).parents('form')[0]);
		$.ajax({
			url: 'uploadfile.php',
			type: 'POST',
			xhr: function() {
				var myXhr = $.ajaxSettings.xhr();
				return myXhr;
			},
			success: function (data) {
				alert(data);
			},
			data: formData,
			cache: false,
			contentType: false,
			processData: false
		});
		return false;
	});
});
/*___ function readURL(input) { ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function readURL(input) {
	actual=input.id.split("_")[1];
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#divimagenpersonabig').attr('src', e.target.result);
      $('#divimagenpersonabig').css('display', 'inline');
    }
    reader.readAsDataURL(input.files[0]);
  }
}
/*___ function test()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function test()	{
	$(".telefono").each(function(cual,x)	{console.log(x.value);})
}
/*___ function opcionesavanzadas()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function opcionesavanzadas()	{
	document.getElementById('divavanzadas').style.display=(document.getElementById('divavanzadas').style.display=="none" ? "block" : "none");
}
/*___ function ficha()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function ficha()	{
	window.top.popup("personaficha.php?persona="+document.getElementById("persona").value)
}
/*___ function grabarpersonaedita()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function grabarpersonaedita()	{
	if($("#tipopersona").val()=="por definir")	$("#tipopersona").val("cliente")
	if(confirm("Desea grabar?"))	{
		document.getElementById("telefono").value="";
		Array.from(document.querySelectorAll('.clasetelefono')).forEach(function(actual) { console.log("->",actual,"->>",actual.style.display);if(actual.style.display!="none") document.getElementById("telefono").value+=actual.value+" ";});
		document.getElementById("celular").value="";
		Array.from(document.querySelectorAll('.clasecelular')).forEach(function(actual) { if(actual.style.display!="none") document.getElementById("celular").value+=actual.value+" ";});
		document.getElementById("correo_electronico").value="";
		Array.from(document.querySelectorAll('.clasecorreo_electronico')).forEach(function(actual) { if(actual.style.display!="none") document.getElementById("correo_electronico").value+=actual.value+" ";});
		document.getElementById("auto").value="";
		document.getElementById("placa").value="";
		Array.from(document.querySelectorAll('.claseauto')).forEach(function(actual) { if(actual.style.display!="none") document.getElementById("auto").value+=actual.value+" ";});
		Array.from(document.querySelectorAll('.claseplaca')).forEach(function(actual) { if(actual.style.display!="none") document.getElementById("placa").value+=actual.value+" ";});
		var parametros=""; 
		$("select,  textarea, input[type='text'], input[type='number'],input[type='color'], input[type='date'], input[type='hidden']").each(function() {
			parametros+=$(this).attr("id")+"="+$(this).val()+"&";
		})
		$("input:checkbox, input:radio").each(function() {
			parametros+=($(this).prop("checked") ? $(this).attr("name")+"="+$(this).attr("id")+"&" : "" );
		})
		$.ajax({url: 'clasepersona.php',type: 'POST',async:false,data: "modo=grabar&modoarchivo=persona&llave=persona&"+parametros,dataType: 'html', success: function(msg){ 
			if(document.getElementById("persona").value=="")	document.getElementById("persona").value=msg;
			if(document.getElementById("persona").value!="")	$( "#tabs" ).tabs( "option", "disabled", [] );
			document.getElementById("idpersona").value=document.getElementById("persona").value;
			var formData = new FormData($("#formimagen_1").parents('form')[0]);
			$.ajax({ url: 'uploadfile.php', type: 'POST', xhr: function() { var myXhr = $.ajaxSettings.xhr(); return myXhr; }, success: function (data) { 
				alert("Registro grabado "+msg+" "+data); 
				top.refresca("persona.php")
			}, data: formData, cache: false, contentType: false, processData: false }); 
		},error: function (xhr, ajaxOptions, thrownError) {alert("ERROR:" + xhr.responseText+" - "+thrownError);}});
	}
}
/*___ function cambiatituloagente(cual)	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function cambiatituloagente(cual)	{
	document.getElementById("divtituloagente").innerHTML=(cual.value=="directo" ? "AGENTE" : "CORREDOR" );
}
/*___ function checkubigeo()	{ ______________________________________________________________________________________________________________________________________________________________________________________________________________________________	*/
function checkubigeo()	{
	// var 
}
</script>	
<body style='margin:0 auto;padding:0px;'>
	<div id="div_wrap" style='display:none'>
		<div style='float:left:width:100%;padding:10px 25px;font:bold 2.4vmin "arial black";color:#000;'>
			<div id='divusuario'  ></div>
		</div>
		<div id='divizquierda' style='position:relative;float:left;width:20%;text-align:center;font:bold 2vmin "arial black";padding:px 0px 0px 0px;'>
			<div style='background:rgba(100,0,0,0);float:left;overflow:hidden;width:100%;'>
				<div style='float:left;width:10%;'>&nbsp;</div>
				<div id='divimagencontenedor' style='float:left;width:60%;padding:10% 10% 10% 10%;background:#fff;border:1px solid #ccc;border-radius:6px;'>
					<img class='divimagenpersonabig' id='divimagenpersonabig' src='' style='border-radius:200px;border:1px solid #eee;height:10px;' onerror="this.src='fotos/foto_nn.png';" onclick="document.getElementById('formfile_1').click()" title='Click aqui para seleccionar imagen'>
					<form id='frmimagenes' enctype="multipart/form-data" action="uploadfile.php" method="post">
						<div style='float:left;width:100%;'><div style='display:none'><input name='file[]'  id='formfile_1' type='file' class='formfile' onchange='readURL(this)' /></div><img src='' name='imagen[]' style='height:50px;width:50px;display:none;' class='formimagen' id='formimagen_1'></div>
						<input type='hidden' name='idpersona' id='idpersona'>
					</form>
				</div>
			</div>
			<div style='float:left;width:100%;padding:10px 0px;color:#000;' >TIPO DE PERSONA</div> 
			<div id='divtest' style='float:left;width:100%;padding:10px 0px;' ><select id='tipopersona' class='anchoimagen multiselect'></select></div>
			<div style='float:left;width:100%;padding:10px 0px;color:#000;' >TIPO DE CLIENTE</div> 
			<div style='float:left;width:100%;padding:10px 0px;color:#000;' ><select class='izquierda anchoimagen' id='tipo_clientes' onchange='cambiatituloagente(this)'></select></div>
			<div style='float:left;width:100%;padding:10px 0px;color:#000;' id='divtituloagente'>AGENTE</div> 
			<div style='float:left;width:100%;padding:10px 0px;color:#000;' ><input type='hidden' id='corredor_asignado'><input type='text' autocomplete='off'  list='list_corredor_asignado_nombre' style='width:95%;height:34px;padding:0px;' class='anchoimagen'  id='corredor_asignado_nombre'><datalist id='list_corredor_asignado_nombre'></datalist></div>
			<div style='position:absolute;bottom:5px;left:0px;text-align:center;width:100%;background:rgba(0,0,0,0)'>
				<button class='anchoimagen' style='height:34px;padding:0px;' onclick="ficha()">Ficha</button>
			</div>
		</div>
		<div id='divderecha' style='float:right;width:80%;'>
			<div id="tabs">
				<ul>
					<li id='divhref1'><a href="#tabs-1" onclick="personatab(1)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>PRINCIPAL</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref1' ></span></div></a></li>
					<li id='divhref2'><a href="#tabs-2" onclick="personatab(2)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>PEDIDOS</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref2' ></span></div></a></li>
					<li id='divhref3'><a href="#tabs-3" onclick="personatab(3)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>P.CANDIDATAS</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref3' ></span></div></a></li>
					<li id='divhref4'><a href="#tabs-4" onclick="personatab(4)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>CONTACTOS</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref4' ></span></div></a></li>
					<li id='divhref5'><a href="#tabs-5" onclick="personatab(5)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>VISITAS</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref5' ></span></div></a></li>
					<li id='divhref6'><a href="#tabs-6" onclick="personatab(6)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>OFERTAS</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref6' ></span></div></a></li>
					<li id='divhref7'><a href="#tabs-7" onclick="personatab(7)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>HISTORIAL</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref7' ></span></div></a></li>
					<li id='divhref8'><a href="#tabs-8" onclick="personatab(8)" style="padding:0px;"><div style='float:left;padding:15px 5px 5px 5px;'>IMAGENES</div><div style='float:right;background:rgba(100,0,0,0)'><span class='fa fa-circle circulo_no'id='spanhref8' ></span></div></a></li>
					<div style='float:right;overflow:hidden;'><span class='fas fa-save' style='font-size:40px;cursor:pointer;color:#444;margin:4px;' title='Grabar' onclick="grabarpersonaedita()"></span></div>
				</ul>
				<div id="tabs-1" style='float:left;overflow:auto;'>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Fecha de Ingreso:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='date' id='fechaingreso'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Codigo:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='codigo' ></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Nombres:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='nombres' ></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Apellido Paterno:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='paterno'></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Apellido Materno:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='materno'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Telefono:</div><div id='divtelefono' style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><div style='float:left;width:100%;overflow:hidden;' ><div style='float:left;width:calc( 100% - 24px);'><input type='hidden' id='telefono' ondblclick='test()'><input type='text' autocomplete='off'  class='clasetelefono' id='telefono_0' style='width:100%'></div><div style="float:right;cursor:pointer;" onclick="anadeinput('telefono',-1)" ><span class='far fa-plus-square fa-lg' ></span></div></div></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Celular:</div><div id='divcelular' style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><div style='float:left;width:100%;overflow:hidden;' ><div style='float:left;width:calc( 100% - 24px);'><input type='hidden' id='celular' ondblclick='test()'><input type='text' autocomplete='off'  class='clasecelular' id='celular_0' style='width:100%'></div><div style="float:right;cursor:pointer;" onclick="anadeinput('celular',-1)" ><span class='far fa-plus-square fa-lg' ></span></div></div></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Email:</div><div id='divcorreo_electronico' style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><div style='float:left;width:100%;overflow:hidden;' ><div style='float:left;width:calc( 100% - 24px);'><input type='hidden' id='correo_electronico' ondblclick='test()'><input type='text' autocomplete='off'  class='clasecorreo_electronico' id='correo_electronico_0' style='width:100%'></div><div style="float:right;cursor:pointer;" onclick="anadeinput('correo_electronico',-1)" ><span class='far fa-plus-square fa-lg' ></span></div></div></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Referencia:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><select id='referencias'></select></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' > Auto/Placa: </div><div id='divauto' style='float:left;width:25%;height:22px;overflow:hidden;;' class='corredor cliente propietario usuario' ><div style='float:left;width:100%;overflow:hidden;'><div style='float:left;width:calc(70% - 22px);'  ><input type='hidden' id='auto'><input type='text' autocomplete='off'  class='claseauto' id='auto_0' style='width:calc(100% - 10px)'></div>	 <div style='float:left;width:10%;;'>P:</div>	 <div style='float:left;width:20%;'><input type='hidden' id='placa'><input type='text' autocomplete='off'  class='claseplaca' id='placa_0' style='width:calc(100% - 10px)'></div><div style="float:right;cursor:pointer;" onclick="anadeinput2('auto','placa',-1)" ><span class='far fa-plus-square fa-lg' ></span></div></div></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Facebook:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='facebook'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Instagram:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='instagram'></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Whatsapp:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='whatsapp'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Twitter:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='twitter'></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Linkedin:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='linkedin'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Tipo documento:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><select id='tipo_dni'></select></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Numero Documento:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='dni'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Calificacion de persona:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><select id='calificacion'></select></div></div>
					<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Observaciones:</div><div style='float:left;width:50%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='observaciones'></div></div>
					<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:32px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Color:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><div style='float:left;width:25%;overflow:hidden;color:#888;' >Texto:</div><div style='float:left;width:20%;'><input type='color' id='color' style='height:16px;width:24px;'></div><div style='float:left;width:25%;overflow:hidden;color:#888;text-align:center;' >Fondo:</div><div style='float:left;width:20%;' ><input type='color' id='color2' style='height:16px;width:24px;'></div></div></div>
					<div style='float:left;width:100%;text-align:center' class='diva'><button id='' style='padding:4px 10px;' onclick="opcionesavanzadas()">OPCIONES AVANZADAS</button></div>
					<div id='divavanzadas' style='display:none'>
						<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Direccion:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='direccion'></div></div>
						<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Ubic. Geog.:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='hidden' id='ubigeo'><input type='text' autocomplete='off'  list='list_ubigeo_nombre' style='width:85%;'  id='ubigeo_nombre' ><button style='padding:0px;height:20px !important;' onclick='checkubigeo()'>?</button><datalist id='list_ubigeo_nombre'></datalist></div></div>
						<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Fecha Nacimiento:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='date' id='nacimiento'></div></div>
						<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >RUC Persona:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='ruc_empresa'></div></div>
						<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Empresa:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='hidden' id='empresa'><input type='text' autocomplete='off'  list='list_empresa_nombre' style='width:95%;'  id='empresa_nombre'><datalist id='list_empresa_nombre'></datalist></div></div>
						<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Cargo:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='cargo'></div></div>
						<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Direccion Empresa:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><input type='text' autocomplete='off'  id='direccion_empresa'></div></div>
						<div style='float:left;width:100%;' class='diva'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Operacion:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><select id='cliente_operacion'></select></div></div>
						<div style='float:left;width:100%;' class='divb'><div style='float:left;width:25%;height:22px;overflow:hidden;color:#888;' class='corredor cliente propietario usuario' >Estado:</div><div style='float:left;width:25%;height:22px;overflow:hidden;' class='corredor cliente propietario usuario' ><select id='cliente_estado'></select></div></div>
					</div>
				</div>
				<div id="tabs-2" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe' id="iframe2" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
				<div id="tabs-3" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe' id="iframe3" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
				<div id="tabs-4" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe' id="iframe4" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
				<div id="tabs-5" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe' id="iframe5" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
				<div id="tabs-6" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe' id="iframe6" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
				<div id="tabs-7" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe'  id="iframe7" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
				<div id="tabs-8" style='float:left;width:calc(100% - 50px);'>
					<iframe class='iframe'  id="iframe8" src="dummy.php" style="width:100%;height:100%;" frameborder="0"></iframe>
				</div>
			</div>
		</div>	
		<input type='hidden' id='persona'>
		<input type='hidden' id='facebook'>
		<input type='hidden' id='whatsapp'>
		<input type='hidden' id='fechahora'>
		<input type='hidden' id='clave'>
		<input type='hidden' id='data_administracion'>
		<input type='hidden' id='superadmin'>
	</div>
</body>
