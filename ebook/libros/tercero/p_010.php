<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react-with-addons.js" type="text/javascript"></script>
<script src="lib/literallycanvas.js" type="text/javascript"></script>
<script src="lib/docs.js" type="text/javascript"></script>
<script>
var rpta="";
var lc;	
window.parent.carga();
window.onload=function() {
	instructions();
	lc = LC.init(document.getElementById('l_c'));
}
function start() {
	playsong();	
	var newImage = new Image();
   newImage.src = rpta;
	lc.saveShape(LC.createShape('Image', {x: 0, y: 0, image: newImage}));
}
function stop() {
	myAudio1.src="";
}
function instructions() {
	var data="";	
	data+="<div style='float:left;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,0), rgba(194,115,36,1));padding:1% 0px 10% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='' >DIE ANLEITUNG</div>";
	data+="<div style='float:left;width:40%;overflow:hidden;font:bold 28px verdana;text-align:center;padding:5px 0px;' id='' class='' ><img class='imagenrotar'  src='libros/"+top.document.getElementById("ruta").value+"/media/i_010.png' /></div>";
	data+="<div style='float:left;width:calc(60% - 100px);overflow:hidden;font:bold 36px verdana;text-align:center;padding:50px;' id='' class='' >Zeichnen Sie mit Ihrer Fantasie das Gesicht von Herrn Beethoven!</div>";
	data+="<div style='float:left;width:calc(100% - 100px);overflow:hidden;font:bold 24px verdana;text-align:justify;padding:10px 50px;color:#a00;' id='' class='' >Diese halbtransparente Seite ist eine Anweisungsseite. Nachdem Sie hier geklickt haben, wird die Seite vollständig angezeigt und der Test gestartet. Lesen Sie die obigen Anweisungen sorgfältig durch. Wenn Sie sich nicht sicher sind, ob Sie die Aufgabe ausführen sollen, klicken Sie noch NICHT und fragen Sie zuerst Ihren Lehrer.</div>";
	data+="<div style='float:left;position:absolute;bottom:0px;;left:0px;width:100%;overflow:hidden;font:bold 42px verdana;text-align:center;background:linear-gradient(to top,rgba(194,115,36,1), rgba(194,115,36,0));padding:10% 0px 1% 0px;text-shadow:-1px -1px 1px #fff,3px 3px 5px #940' id='' class='txtinstrucciones' >KLICKEN SIE SEITE, UM ZU STARTEN!</div>";
	window.top.document.getElementById("divmascara").innerHTML=data;
}
function restore(cualrpta)	{
	if(cualrpta!="") rpta="data:image/png;base64,"+cualrpta.split(" ").join("+");
}
function playsong()	{
	myAudio1.play();
}
function saveToFile() {
	rpta=lc.canvasForExport().toDataURL().split(',')[1];	
	console.log(lc.canvasForExport().toDataURL());
	sa=rpta;
	parent.saveforlater('010',rpta);
}
</script>	
<style>
body	{
	background:url(media/gw.jpg) no-repeat center center fixed; 
	background-size: cover;
	overflow:hidden;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
.boton	{
	border:0px solid;
	font-size:32px;
	background:#ddd;
	cursor:pointer;
}
.boton:hover	{
	border:0px solid;
	background:#bbb;
	color:#fff;
}
.literally .button-style-1{border:2px solid transparent;border-radius:3px}
.literally .button-style-1{text-decoration:none;cursor:pointer}
.literally .button-style-1.selected:not(.disabled){background-color:#a1d9fe}
.literally .button-style-1:hover:not(.disabled){border-color:#a1d9fe}
.literally .button-style-1.disabled{cursor:default;opacity:0.3}
.literally.toolbar-at-top .lc-drawing{bottom:0;top:31px}
.literally.toolbar-at-top .lc-options{top:0;border-bottom:1px solid #555}
.literally.toolbar-at-bottom .lc-drawing{bottom:31px;top:0}
.literally.toolbar-at-bottom .lc-options{bottom:0;border-top:1px solid #555}
.literally{position:relative;background-color:#ddd;min-height:400px;-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-ms-touch-action:none;user-select:none}
.literally,.literally *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
.literally>*{position:absolute}
.literally .lc-picker{top:0;left:0;bottom:0;width:61px;background-color:#e6e6e6}
.literally .lc-drawing{right:0;left:61px;cursor:default}
.literally .lc-drawing>*{position:absolute;top:0;right:0;bottom:0;left:0}
.literally .lc-drawing .text-tool-input:focus{outline:none}
.literally .lc-picker{z-index:2;border-right:1px solid #555}
.literally .lc-picker .toolbar-button{width:26px;height:26px;line-height:26px;margin:2px;padding:0;cursor:pointer;text-align:center;border:2px solid transparent;border-radius:3px}
.literally .lc-picker .toolbar-button{text-decoration:none;cursor:pointer}
.literally .lc-picker .toolbar-button.selected:not(.disabled){background-color:#a1d9fe}
.literally .lc-picker .toolbar-button:hover:not(.disabled){border-color:#a1d9fe}
.literally .lc-picker .toolbar-button.disabled{cursor:default;opacity:0.3}
.literally .lc-picker .thin-button{cursor:pointer;float:left;position:relative}
.literally .lc-picker .fat-button{clear:both;width:56px}
.literally .lc-picker .lc-pick-tool,.literally .lc-picker .lc-undo,.literally .lc-picker .lc-redo,.literally .lc-picker .lc-zoom-in,.literally .lc-picker .lc-zoom-out{background-size:100% auto;background-repeat:no-repeat;background-position:center center}
.literally .color-well{font-size:10px;float:left;width:60px}
.literally .color-well.open{background-color:#a1d9fe}
.literally .color-well-color-container{border:2px solid transparent;border-radius:3px;border:1px solid #aaa;position:relative;width:28px;height:28px;margin:1px auto;overflow:visible}
.literally .color-well-color-container{text-decoration:none;cursor:pointer}
.literally .color-well-color-container.selected:not(.disabled){background-color:#a1d9fe}
.literally .color-well-color-container:hover:not(.disabled){border-color:#a1d9fe}
.literally .color-well-color-container.disabled{cursor:default;opacity:0.3}
.literally .color-well-color-container .color-well-checker{position:absolute;width:50%;height:50%;background-color:black}
.literally .color-well-color-container .color-well-checker-top-left{border-top-left-radius:3px}
.literally .color-well-color-container .color-well-checker-bottom-right{border-bottom-right-radius:3px}
.literally .color-well-color-container .color-well-color{position:absolute;top:0;right:0;bottom:0;left:0;border-radius:3px}
.literally .color-picker-popup{position:absolute;z-index:1;background-color:white;border:1px solid #555;left:60px;bottom:31px}
.literally .color-picker-popup .color-row{clear:both}
.literally .color-picker-popup .color-row .color-cell{cursor:pointer;width:20px;height:20px;line-height:20px;float:left}
.literally .color-picker-popup .color-row .color-cell:hover,.literally .color-picker-popup .color-row .color-cell.selected{border:1px solid #555;line-height:18px}
.literally .color-picker-popup .color-row .color-cell.transparent-cell{width:100%}
.literally .lc-options{z-index:1;right:0;left:61px;height:31px;background-color:#e6e6e6}
.literally .lc-options label{line-height:30px;margin:0 0.25em 0 0.25em;font-size:12px}
.literally .lc-options .square-toolbar-button{border:2px solid transparent;border-radius:3px;border:1px solid #aaa;width:28px;height:28px}
.literally .lc-options .square-toolbar-button{text-decoration:none;cursor:pointer}
.literally .lc-options .square-toolbar-button.selected:not(.disabled){background-color:#a1d9fe}
.literally .lc-options .square-toolbar-button:hover:not(.disabled){border-color:#a1d9fe}
.literally .lc-options .square-toolbar-button.disabled{cursor:default;opacity:0.3}
.literally .lc-options .square-toolbar-button img{max-width:100%;max-height:100%}
.literally .lc-options .lc-font-settings{height:30px;line-height:31px;padding-left:4px;background-color:#f5f5f5}
.literally .lc-options .lc-font-settings input{margin:0 0.5em 0 0}
.literally .lc-options .lc-font-settings input[type=checkbox]{margin:0 0.5em 0 0.5em}
</style>
<body>
	<div style="float:left;width:100%;overflow:hidden;text-align:center;font-size:38px;font-weight:bold;padding:2%;" id="" class="fontech" >Zeichnen Sie ein Bild von Herrn Beethoven!</div>
	<div style="float:left;width:10%;" id="" class="" >&nbsp;</div>
	<div style="float:left;border:1px solid;height:400px;width:calc(80% - 2px);"> 
		<div id="l_c" class="literally index" ></div>
	</div>
	<div style="float:left;width:10%;" id="" class="" >&nbsp;</div>
	<div style="position:absolute;right:10px;bottom:10px;float:left;width:100%;overflow:hidden;text-align:right;" id="" class="" >
		<button id="btnsl" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="saveToFile();">Für später speichern</button>
		<button id="btntd" 	style="font:bold 42px verdana;border-radius:10px;background:#FF9900;text-shadow:-1px -1px 3px #fff;box-shadow:-1px -1px 1px #fff;display:none" onclick="saveToFile();parent.taskdone('010',rpta)">Aufgabe erledigt!</button>
	</div>
	<audio id="myAudio1" loop><source src="media/gw.mp3" ></audio>
</body>