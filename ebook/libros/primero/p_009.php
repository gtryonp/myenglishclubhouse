<script>
var modo=1;	
var msg = new SpeechSynthesisUtterance();
var divspeechtxt="";
window.onload=function()	{
	var buffer=document.getElementById("divspeech").innerText;
	var voices = window.speechSynthesis.getVoices();
	msg.voice = voices[0]; 
	msg.volume = 1; // From 0 to 1
	msg.rate = 1; // From 0.1 to 10
	msg.pitch = 2; // From 0 to 2
	msg.lang = 'en';
	msg.text = buffer;
}	
function speechme()	{
	modo++;
	if(modo/2==parseInt(modo/2))	{
		speechSynthesis.speak(msg);		
	} else {
		speechSynthesis.cancel();		
	};
}
function cambio()	{
	if(document.getElementById("divspeech").classList.contains("spa"))	{
		document.getElementById("divspeech").classList.remove("spa")
		document.getElementById("divspeech").innerHTML=divspeechtxt;
		msg.lang = 'en';
		msg.text = document.getElementById("divspeech").innerHTML;
	} else {
		divspeechtxt=document.getElementById("divspeech").innerHTML;
		document.getElementById("divspeech").innerHTML="George Washington (22 de febrero de 1732 (NS) [b] - 14 de diciembre de 1799) fue un líder político estadounidense, general militar, estadista y padre fundador que se desempeñó como primer presidente de los Estados Unidos de 1789 a 1797. Anteriormente, llevó a las fuerzas patriotas a la victoria en la Guerra de Independencia de la nación. Presidió la Convención Constitucional de 1787, que estableció la Constitución de los Estados Unidos y un gobierno federal. Washington ha sido llamado el 'Padre de su país' por su liderazgo múltiple en los días formativos de la nueva nación. Washington recibió su entrenamiento militar inicial y comando con el Regimiento de Virginia durante la Guerra de Francia e India. Más tarde fue elegido miembro de la Cámara de Burgueses de Virginia y fue nombrado delegado en el Congreso Continental, donde fue nombrado Comandante General del Ejército Continental. Mandó a las fuerzas estadounidenses, aliadas con Francia, en la derrota y rendición de los británicos durante el asedio de Yorktown. Renunció a su comisión después del Tratado de París en 1783. Washington desempeñó un papel clave en la adopción y ratificación de la Constitución y luego fue elegido presidente (dos veces) por el Colegio Electoral. Implementó un gobierno nacional fuerte y bien financiado sin dejar de ser imparcial en una feroz rivalidad entre los miembros del gabinete Thomas Jefferson y Alexander Hamilton. Durante la Revolución Francesa, proclamó una política de neutralidad mientras sancionaba el Tratado de Jay. Él estableció precedentes duraderos para el cargo de presidente, incluido el título de 'Sr. Presidente', y su discurso de despedida es ampliamente considerado como una declaración preeminente sobre el republicanismo. Washington poseía esclavos y, para preservar la unidad nacional, apoyó las medidas aprobadas por el Congreso para proteger la esclavitud. Más tarde tuvo problemas con la institución de la esclavitud y liberó a sus esclavos en un testamento de 1799. Se esforzó por asimilar a los nativos americanos en la cultura angloamericana, pero combatió la resistencia indígena en ocasiones de conflicto violento. Era miembro de la Iglesia Anglicana y de los masones, e instó a una amplia libertad religiosa en su papel de general y presidente. Tras su muerte, fue elogiado como 'primero en la guerra, primero en paz y primero en los corazones de sus compatriotas'. Ha sido conmemorado por monumentos, arte, ubicaciones geográficas, sellos y moneda, y muchos eruditos y encuestas lo ubican entre los mejores presidentes de EE. UU.";
		document.getElementById("divspeech").classList.add("spa");
		msg.lang = 'es';
		msg.text = document.getElementById("divspeech").innerHTML;
	}
}
</script>
<style>
body	{
	background:url(media/gw.jpg) no-repeat center center fixed; 
	background-size: cover;
}	
@font-face {
	font-family:ech;
	src: url(media/nw.ttf);
}
.fontech {
	font-family: ech;
}
::-webkit-scrollbar 								{width: .5em;height: .5em}
::-webkit-scrollbar-button 				{background: #ccc}
::-webkit-scrollbar-track-piece 	{background: #888}
::-webkit-scrollbar-thumb 				{background: #eee}	
</style>
<body>
<div style='float:left;text-align:justify;font-size:18px;padding:0px 10px 0px 50px;font-weight:bold;letter-spacing: 2px;word-spacing: 6px;' class='fontech'>
	<div style='float:left;text-align:justify;font-size:20px;padding:0px 50px;font-weight:bold;' class='fontech' id='divspeech' ondblclick="cambio()">
		George Washington (February 22, 1732 (N.S.)[b] – December 14, 1799) was an American political leader, military general, statesman, and founding father who served as the first president of the United States from 1789 to 1797. Previously, he led Patriot forces to victory in the nation's War for Independence. He presided at the Constitutional Convention of 1787, which established the U.S. Constitution and a federal government. Washington has been called the "Father of His Country" for his manifold leadership in the formative days of the new nation.
		Washington received his initial military training and command with the Virginia Regiment during the French and Indian War. He was later elected to the Virginia House of Burgesses and was named a delegate to the Continental Congress, where he was appointed Commanding General of the Continental Army. He commanded American forces, allied with France, in the defeat and surrender of the British during the Siege of Yorktown. He resigned his commission after the Treaty of Paris in 1783.
		Washington played a key role in adopting and ratifying the Constitution and was then elected president (twice) by the Electoral College. He implemented a strong, well-financed national government while remaining impartial in a fierce rivalry between cabinet members Thomas Jefferson and Alexander Hamilton. During the French Revolution, he proclaimed a policy of neutrality while sanctioning the Jay Treaty. He set enduring precedents for the office of president, including the title "Mr. President", and his Farewell Address is widely regarded as a pre-eminent statement on republicanism.
		Washington owned slaves, and, in order to preserve national unity, he supported measures passed by Congress to protect slavery. He later became troubled with the institution of slavery and freed his slaves in a 1799 will. He endeavored to assimilate Native Americans into Anglo-American culture but combated indigenous resistance during occasions of violent conflict. He was a member of the Anglican Church and the Freemasons, and he urged broad religious freedom in his roles as general and president. Upon his death, he was eulogized as "first in war, first in peace, and first in the hearts of his countrymen". He has been memorialized by monuments, art, geographical locations, stamps, and currency, and many scholars and polls rank him among the greatest U.S. presidents.	
	</div>	
	<div style="float:left;position:fixed;bottom:0px;left:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="speechme()"><img src="media/speaker.png" style="border-radius:36px;"></div>
	<div style="float:left;position:fixed;bottom:0px;right:000px	;cursor:pointer;z-Index:7000;opacity:0.5" onclick="cambio()"><img src="media/lang.png" style="border-radius:36px;"></div>
</div>
</body>