<?session_start();?>
<style>
html,  body {
	height: 100%;
	margin: 0px auto; 
	padding: 0px ppx; 
	background:#fff;
	box-shadow:5px 5px 5px #fff inset,-2px -2px 2px #000 inset;
	overflow:hidden;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
@font-face {
	font-family:bd;
	src: url(media/bd.ttf);
}
.fontbd {
	font-family: bd;
}
</style>
<body>
	<div style="float:left;padding:20px 0px;width:35%;" id="" class="" >&nbsp;</div>
	<div style="float:left;padding:20px 0px;width:30%;" id="" class="" ><img src="media/logo.png" style="width:100%;"></div>
	<div style="float:left;padding:20px 0px;width:35%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#2571B2;font-size:50px;" id="" class="fontech" >English ClubHouse</div>
	<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#2571B2;font-size:50px;" id="" class="" >Meine Erste Lektion</div>
	<div style="float:left;width:100%;padding:20px 0px;text-align:center;color:#2571B2;font-size:40px;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:15%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:calc(70% - 20px);padding:20px 10px;overflow:hidden;background:rgba(255,255,255,1);border-radius:30px;border:3px outset #a00;border-shadow:1px 1px 1px #000;" id="" class="" >
		<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#2571B2;font-size:calc(20px + 1.5vw);text-shadow:1px 1px 1px #000;" id="" class="" >Fräulein Emily Tryon Vargas</div>
		<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#000;font-size:calc(26px + 1vw);text-shadow:1px 1px 1px #000;" id="" class="fontbd" ><?=$_SESSION['alumnonombre'];?></div>
	</div>
	<div style="float:left;width:15%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;overflow:hidden;background:rgba(208,243,185,0);position:absolute;bottom:1px;left:45%;font:bold 14px verdana;" id="" class="" >(c) 2020 - Tryon editors</div>
</body>

