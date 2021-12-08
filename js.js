var imglogopos=0;
var imglogosuma=10;
var numero=0;
var tiempop05,posicion05=1;
var campanarotacion=6000;

window.onload = function () { 	
	setInterval(function(){foto();},5000);
	setInterval(function(){clock();},6000);
 	saltedtitle();
	menuangled();
 	function_p05();
	nieve();
 	imagen();
 	wa();
 	if(document.location.href.indexOf("/c_0")==-1) campana();
}

function campana()	{
	var campana = document.createElement('div');
	document.body.appendChild(campana); 
  	campana.id="campanaid";
	campana.innerHTML="<img id='campanaimg' src='/campana/c_01.jpg' >";
	campana.style="position:fixed;z-Index:999999;box-shadow:5px 5px 10px #000;padding:15px;border:1px solid #000;background:#fff;"  
}

function wa() {
	var whatsapp = document.createElement('div');
	document.body.appendChild(whatsapp); 
 	whatsapp.id="whatsappid";
	whatsapp.innerHTML="<a href='https://api.whatsapp.com/send?phone=51992467502&text=Hola%2C%20Lizzy!%20Tengo%20una%20pregunta%20acerca%20de%20English%20ClubHouse' target='_blank' rel='noopener noreferrer'><img loading='lazy' src='https://www.myenglishclubhouse.com/wp-content/uploads/2020/12/w2.png' alt='' ></a>";
	whatsapp.style="position:fixed;z-Index:999999;"  
}

function imagen() {
	var show = document.createElement('img');
	document.body.appendChild(show); 
	show.src = '/images/show.gif';
  	show.id="showid";
	show.style="position:fixed;z-Index:999999;"  
}

function nieve()	{
  var canv = document.createElement('canvas');
	canv.id = 'canvasId';
	document.body.appendChild(canv); // adds the canvas to the body element  
   	canv.onmousemove=function()	{this.style.zIndex=-1;}
	canv.style="position:absolute;top:0px;left:0px;z-Index:999999;"
	var canvas = document.querySelector("canvas");
	var ctx = canvas.getContext("2d");
	var cw = canvas.width = window.innerWidth;
	var ch = canvas.height = document.body.offsetHeight;
	var el_Id = null;
	var numCopos = 300;
	var coposRy = [];
	function Copo() {
		this.colo=(Math.random()*10<5 ? "#fff" : "#ccc" ); 
		this.r = ~~(Math.random()*3 + 1);
		this.x = ~~(Math.random()*cw + 1);
		this.y = -this.r;
		this.vx = ~~(Math.random() * (15 - 5 + 1) + 5)/10 * (Math.random() < .5 ? 1 : -1);
		this.vy =  ~~(Math.random()*3 + 1); 
	}
	Copo.prototype.dibujar = function(ctx) {
		ctx.fillStyle = this.colo;
		ctx.beginPath();
		ctx.arc(this.x, this.y, this.r, 0, 2 * Math.PI);
		ctx.fill();
	}
	Copo.prototype.movimiento = function() {
		if (this.x >= cw + this.r ||
			this.x <= -this.r ||
			this.y >= ch + this.r
		) {
			this.y = -this.r;
			this.x = ~~(Math.random()*cw + 1);
		} else {
			this.x += this.vx;
			this.y += this.vy;
		}
	}
	function AnimarCopos() {
		if(campanarotacion++>9000) campanarotacion=0;
		document.getElementById("campanaimg").src="/campana/c_0"+parseInt(1+campanarotacion/1000)+".jpg";
		document.getElementById("campanaimg").onclick=function() { document.location.href=document.location.href+"/c_0"+parseInt(1+campanarotacion/1000)}
		el_Id = window.requestAnimationFrame(AnimarCopos);
		if (coposRy.length < numCopos) {
			var copo = new Copo();
			coposRy.push(copo);
		}
		ctx.clearRect(0, 0, cw, ch);
		for (var i = 0; i < coposRy.length; i++) {
			coposRy[i].movimiento();
			coposRy[i].dibujar(ctx);
		}
	}
	el_Id = window.requestAnimationFrame(AnimarCopos);
}
function function_p05()	{
	tiempop05=setInterval(function(){
		// if(document.getElementById("divp05mensaje2")!=undefined) document.getElementById("divp05mensaje2").innerHTML+="<span style='color:#"+(Math.random()>.5 ? "f" : "9" )+(Math.random()>.5 ? "f" : "9" )+(Math.random()>.5 ? "f" : "9" )+";'>"+document.getElementById("divp05mensaje").innerHTML.substr(posicion05++,1)+"</span>";
		if(document.getElementById("divp05mensaje2")!=undefined) document.getElementById("divp05mensaje2").innerHTML+="<span style='color:#ff0;'>"+document.getElementById("divp05mensaje").innerHTML.substr(posicion05++,1)+"</span>";
	}, 50);
}
function menuangled()	{
	var valor=document.querySelector(".site-branding").innerHTML;
	valor="<div style='float:left;width:30%;'>"+valor+"</div>";
	valor+="<div style='float:left;width:70%;position:relative;'>"
	valor+="<div class='hidhref' style='left:00%;' onclick='document.location.href=\"./aboutus/\"'>Nosotros</div>";
	valor+="<div class='hidhref' style='left:15%;' onclick='document.location.href=\"./methods/\"'>Metodos</div>";
	valor+="<div class='hidhref' style='left:30%;' onclick='document.location.href=\"./resources/\"'>Recursos</div>";
	valor+="<div class='hidhref' style='left:45%;' onclick='document.location.href=\"./testimonials/\"'>Testimonios</div>";
	valor+="<div class='hidhref' style='left:60%;' onclick='document.location.href=\"./contacto/\"'>Contacto</div>";
	valor+="</div>";
	document.querySelector(".site-branding").innerHTML=valor; 
}

function saltedtitle()	{
	Array.from(document.querySelectorAll(".has-text-align-center")).forEach(function(actual) { 
		string=actual.innerText;
		string.split("");
		actual.innerText="";
		var i = 0, length = string.length;
		for (i; i < length; i++) {
			actual.innerHTML += "<span>" + string[i] + "</span>";
		}
	});    
}

function foto() { 
  	if(document.querySelector(".wp-block-cover")!=undefined)	{
      	var numero=parseInt(1+Math.random()*16);
      	numero=(numero<10 ? "0"+numero : numero);
		document.querySelector(".wp-block-cover").style.transition="all 1s ease";
		document.querySelector(".wp-block-cover").style.backgroundImage="url(images/foto_"+numero+".jpg)";
    } 
}

function clock()	{
	var vstart=setInterval(function(){
		imglogopos=imglogopos+imglogosuma;
		if(imglogopos>20)	imglogosuma=-10;
		if(imglogopos<-20)	imglogosuma=10;
		if(imglogopos==0 && imglogosuma>0)	window.clearInterval(vstart);
		document.querySelector(".custom-logo").style.transform = "rotate("+imglogopos+"deg)";
	}, 100);
}
