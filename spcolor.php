<style>
	#divcolor	{
		font:bold 100px verdana;
		text-align:center;
		padding:10% 0%;
		atext-shadow:-5px 0px 5px #ff0,5px 0px 5px #ff0;
		color:rgba(0,0,0,.25);
	}
</style>
<body>
	<div id="divcolor">NAME ONE COLOR</div>	
</body>
<script type="text/javascript">
window.onerror = function(msg, url, linenumber) {alert('Error : '+msg+'\nURL: '+url+'\nLine Number: '+linenumber);return true;}
var arrcolors={"white" :"#fff","black" :"#000","blue" :"#00f","green" :"#0f0","red" :"#f00","yellow" :"#ff0","orange" :"#fa0","cyan" :"#cff","pink" :"#f99","grey" :"#ccc","purple" :"#A40190","lime" :"#77FF05","aqua" :"#05F3CF","navy" :"#0E385E","coral" :"#FF974E","teal" :"#009788","mustard" :"#E3A51E","brown" :"#775549","indigo" :"#2C0F7D","amber" :"#FCC400","peach" :"#FEAA92","maroon" :"#8D0809","charcoal" :"#6A757B","turquoise" :"#00A2B1","olive" :"#477F40","copper" :"#DE9A1D","violet" :"#B9B3D9","plum" :"#771D7D","camel" :"#E7C39F","fucshia" :"#E73D96" };
window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
var recognizing;
var recognition = new SpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
recognition.start();
var id = setInterval(mostrardebuganimacion, 500);
recognition.onresult = function (event) {
	for (var i = 0; i < event.results.length; ++i) {
		ultimo=event.results[i][0].transcript.toLowerCase().split(" ");
		orden=ultimo[ultimo.length-1];
		console.log(event.results[i][0].transcript.toLowerCase(),orden);
		for (var key in arrcolors) {
			var value = arrcolors[key];
			if(key==orden)	document.body.style.background=value;
		}		
		document.getElementById("divcolor").innerHTML=orden.toUpperCase();
	}
}
function mostrardebuganimacion() {
	try { recognition.start();;}	catch(err)	{console.log(err);};	
}
</script>