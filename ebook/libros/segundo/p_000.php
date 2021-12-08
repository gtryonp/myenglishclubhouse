<?session_start();?>
<style>
html,  body {
	background: url(media/fondo.jpg);
	background-size: cover;
	overflow:hidden;	
}	
@font-face {
	font-family:ech;
	src: url(media/geografia.ttf);
}
.fontech {
	font-family: ech;
	color:#cff;
}
</style>
<body>
	<div style="float:left;padding:20px 0px;width:35%;" id="" class="" >&nbsp;</div>
	<div style="float:left;padding:20px 0px;width:30%;" id="" class="" ><img src="media/logo.png" style="width:100%;"></div>
	<div style="float:left;padding:20px 0px;width:35%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#fff;font-size:70px;text-shadow:1px 1px 5px #000;" id="" class="fontech" >GEOGRAFIA</div>
	<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#fff;font-size:50px;text-shadow:1px 1px 5px #000;" id="" class="" >Perú y el mundo</div>
	<div style="float:left;width:100%;padding:20px 0px;text-align:center;color:#fff;font-size:40px;text-shadow:1px 1px 5px #000;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:15%;" id="" class="" >&nbsp;</div>
	<div style="float:left;width:calc(70% - 20px);padding:20px 10px;overflow:hidden;background:rgba(255,255,255,1);border-radius:30px;border:3px outset #a00;border-shadow:1px 1px 1px #000;" id="" class="" >
		<div style="float:left;width:100%;padding:10px 0px 0px 0px;text-align:center;color:#000;font-family:verdana;font-size:calc(20px + 1.5vw);text-shadow:1px 1px 1px #000;" id="" class="" >Autor: Grenville Tryon Pera</div>
		<div style="float:left;width:100%;padding:10px 0px;text-align:center;color:#f80;font-size:calc(26px + 1vw);text-shadow:1px 1px 1px #000;" id="" class="" ><?=$_SESSION['alumnonombre'];?></div>
	</div>
	<div style="float:left;width:15%;" id="" class="" >&nbsp;</div>
</body>
