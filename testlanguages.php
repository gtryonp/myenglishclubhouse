<style>
@charset "UTF-8";
*, *:before, *:after {box-sizing: border-box;}

:root {
  --textcolor:black;
  --accentcolor:#269;
  --lightaccentcolor:#9df;
  --reversecolor:#fff;
}
html {
  font-size:16px;
  font-family:Trebuchet,sans-serif;
}
body {
  background:var(--accentcolor);
  color:var(--reversecolor);
  margin:0;padding:0;
  line-height:1.5;
}
strong, b {font-weight:bold;}
#wrapper {
  margin:0 auto;padding:1.2rem;
  width:100%;height:auto;
  min-width:320px;max-width:960px;
  background:var(--reversecolor);
  color:var(--textcolor);
  text-align:left;
  border:2px solid var(--accentcolor);
  border-radius:0 0 16px 16px;
  box-shadow:4px 4px 16px #333;
}
h1, h2 {
  color:var(--accentcolor);
  text-align:left;
}
h1 {font-size:4rem;margin:0;}
h2 {font-size:1.5rem;margin:0 0 0 0;}
p {font-size:1rem;margin:1rem 0 1rem 0;}
a:link, a:visited {color:var(--accentcolor);}
a:hover {text-decoration:none;}

#rateFld {font-size:1.2rem;width:4rem;text-align:center;padding:0;margin:0 0 0 4px;}
#txtFld {width:100%;height:4.2rem;font-size:1.8rem;font-family:inherit;}
button {
  -webkit-appearance:none;
  font-size:1.4rem;
  font-weight:normal;
  background:var(--lightaccentcolor);
  border-radius:12px;
  border:2px solid var(--accentcolor);
  color:var(--textcolor);
  padding:0.3rem 0.5rem 0.3rem 0.5rem;
  cursor:pointer;
  margin:10px 20px 10px 20px;
}
button:hover {
  color:var(--reversecolor);
  background:var(--accentcolor);
}
button:disabled, select:disabled {
  cursor:not-allowed;
  opacity:0.3;
}
select {
  background:var(--lightaccentcolor);
  color:var(--textcolor);
  width:auto;
  font-size:inherit;
  font-weight:normal;
  text-align:center;
  height:auto;
  border-radius:8px;
  margin:10px 0;
}
.uiunit {display:inline-block;margin:1rem;text-align:left;}

#warning {color:red;font-size:1.4rem;display:none;}
</style>
<body>
<div id="wrapper">
  <h1>Polyglot 🇬🇧🇫🇷🇩🇪🇪🇸</h1>
    <h2>Text to Speech in Multiple Languages</h2>
    <ol>
        <li>Choose a language.</li>
        <li>Optional: Replace the text if you know another phrase in the chosen language.</li>
        <li>Choose a voice. (Some languages only have one choice.)</li>
        <li>Optional: Modify the speed of the speech.</li>
        <li>Click the Speak button.</li>
    </ol>
  <p id="warning">Sorry, your web browser does not support the Speech Synthesis API.</p>
    <div class="uiunit">
        <label for="languageMenu">Language: </label><select id="languageMenu"><option selected value="all">Show All</option></select>
    </div>
    <div class="uiunit">
        <label for="speakerMenu">Voice: </label><select id="speakerMenu"></select>
    </div>
    <div class="uiunit">
      <label for="rateFld">Speed: </label><input type="number" id="rateFld" min="0.5" max="2" step="0.1" value="0.8">
    </div>
    
    <textarea id="txtFld">Hello world.</textarea>
  <label for="txtFld">Choose a language to display a translation of the English phrase “I enjoy the traditional music of my native country.”</label>
    <div style="text-align:left;">
        <button type="button" id="speakBtn">Speak</button>
        <br>
        <p>Note: For best results on a Mac, use the latest version of Chrome, Safari, or FireFox. On Windows, Chrome is best.</p>
      <p>This app was created in April 2019 by Steven Estrella of <a href="https://shearspiremedia.com" target="_blank">ShearSpire Media</a>. Please retain this comment if you fork this pen. The original pen can be found at:
<a href="https://codepen.io/sgestrella/pen/QodzgY" target="_blank">https://codepen.io/sgestrella/pen/QodzgY</a></p>
    </div>
  <div id="temp"></div>
</div>
</body>
<script>
/*
This code originated with Steven Estrella of ShearSpire Media. Please retain this comment if you fork this pen. The original pen can be found at:
https://codepen.io/sgestrella/pen/QodzgY
*/
let allVoices, allLanguages, primaryLanguages, langtags, langhash, langcodehash;
let txtFld, rateFld, speakBtn, speakerMenu, languageMenu, blurbs;
let voiceIndex = 0;
let initialSetup = true;
let defaultBlurb = "I enjoy the traditional music of my native country.";

function init(){
  speakBtn = qs("#speakBtn");
  txtFld = qs("#txtFld"); 
  speakerMenu = qs("#speakerMenu");
  langtags = getLanguageTags();
  speakBtn.addEventListener("click",talk,false);
  speakerMenu.addEventListener("change",selectSpeaker,false);
  
  createBlurbs();
  rateFld = qs("#rateFld");
  languageMenu = qs("#languageMenu"); 
  languageMenu.addEventListener("change",selectLanguage,false);
  langhash = getLookupTable(langtags,"name");
  langcodehash = getLookupTable(langtags,"code");
  
  if (window.speechSynthesis) {
    if (speechSynthesis.onvoiceschanged !== undefined) {
      //Chrome gets the voices asynchronously so this is needed
      speechSynthesis.onvoiceschanged = setUpVoices;
    }
    setUpVoices(); //for all the other browsers
  }else{
    speakBtn.disabled = true;
    speakerMenu.disabled = true;
    languageMenu.disabled = true;
    qs("#warning").style.display = "block";
  }
}
function setUpVoices(){
  allVoices = getAllVoices();
  allLanguages = getAllLanguages(allVoices);
  primaryLanguages = getPrimaryLanguages(allLanguages);
  filterVoices();
  if (initialSetup && allVoices.length){
    initialSetup = false;
    createLanguageMenu();
  }
}
function talk(){
  let sval = Number(speakerMenu.value);
  let u = new SpeechSynthesisUtterance();
  u.voice = allVoices[sval];
  u.lang = u.voice.lang;
  u.text = txtFld.value;
  u.rate = Number(rateFld.value);
  speechSynthesis.speak(u);
}
function createLanguageMenu(){
  let code = `<option selected value="all">Show All</option>`;
  let langnames = [];
  primaryLanguages.forEach(function(lobj,i){
    langnames.push(langcodehash[lobj.substring(0,2)].name);
  });
  langnames.sort();
  langnames.forEach(function(lname,i){
    let lcode = langhash[lname].code;
    code += `<option value=${lcode}>${lname}</option>`;
  });
  languageMenu.innerHTML = code;
}
function createSpeakerMenu(voices){
  let code = ``;
  voices.forEach(function(vobj,i){
    code += `<option value=${vobj.id}>${vobj.name} (${vobj.lang})`;
    code += vobj.voiceURI.includes(".premium") ? ' (premium)' : ``;
    code += `</option>`;
  });
  speakerMenu.innerHTML = code;
}
function getAllLanguages(voices){
  let langs = [];
  voices.forEach(vobj => {
    langs.push(vobj.lang.trim());
  });
  return [...new Set(langs)];
}
function  getPrimaryLanguages(langlist){
  let langs = [];
  langlist.forEach(vobj => {
    langs.push(vobj.substring(0,2));
  });
  return [...new Set(langs)];
}
function selectSpeaker(){
  voiceIndex = speakerMenu.selectedIndex;
}
function selectLanguage(){
  filterVoices();
  speakerMenu.selectedIndex = 0;
}
function filterVoices(){
  let langcode = languageMenu.value;
  voices = allVoices.filter(function (voice) {
    return langcode === "all" ? true : voice.lang.indexOf(langcode + "-") >= 0;
  });
  createSpeakerMenu(voices);
  let t = blurbs[languageMenu.options[languageMenu.selectedIndex].text];
  txtFld.value = t ? t : defaultBlurb;
  speakerMenu.selectedIndex = voiceIndex;
}


function getAllVoices() {
  let voicesall = speechSynthesis.getVoices();
  let vuris = [];
  let voices = [];
  //unfortunately we have to check for duplicates
  voicesall.forEach(function(obj,index){
    let uri = obj.voiceURI;
    if (!vuris.includes(uri)){
        vuris.push(uri);
        voices.push(obj);
     }
  });
  voices.forEach(function(obj,index){obj.id = index;});
  return voices;
}
function createBlurbs(){
  blurbs = {
    "Arabic" : "أنا أستمتع بالموسيقى التقليدية لبلدي الأم.",
    "Chinese" : "我喜歡我祖國的傳統音樂。",
    "Czech" : "Mám rád tradiční hudbu mé rodné země.",
    "Danish" : "Jeg nyder den traditionelle musik i mit hjemland.",
    "Dutch" : "Ik geniet van de traditionele muziek van mijn geboorteland.",
    "English" : "I enjoy the traditional music of my native country.",
    "Finnish" : "Nautin kotimaassani perinteistä musiikkia.",
    "French" : "J'apprécie la musique traditionnelle de mon pays d'origine.",
    "German" : "Ich genieße die traditionelle Musik meiner Heimat.",
    "Greek" : "Απολαμβάνω την παραδοσιακή μουσική της πατρίδας μου.",
    "Hebrew" : "אני נהנה מהמוסיקה המסורתית של מולדתי.",
    "Hindi" : "मैं अपने मूल देश के पारंपरिक संगीत का आनंद लेता हूं।",
    "Hungarian" : "Élvezem az én hazám hagyományos zenéjét.",
    "Indonesian" : "Saya menikmati musik tradisional negara asal saya.",
    "Italian" : "Mi piace la musica tradizionale del mio paese natale.",
    "Japanese" : "私は母国の伝統音楽を楽しんでいます。",
    "Korean" : "나는 내 조국의 전통 음악을 즐긴다.",
    "Norwegian Bokmal" : "Jeg liker den tradisjonelle musikken i mitt hjemland.",
    "Polish" : "Lubię tradycyjną muzykę mojego kraju.",
    "Portuguese" : "Eu gosto da música tradicional do meu país natal.",
    "Romanian" : "Îmi place muzica tradițională din țara mea natală.",
    "Russian" : "Мне нравится традиционная музыка моей родной страны.",
    "Slovak" : "Mám rád tradičnú hudbu svojej rodnej krajiny.",
    "Spanish" : "Disfruto de la música tradicional de mi país natal.",
    "Swedish" : "Jag njuter av traditionell musik i mitt hemland.",
    "Thai" : "ฉันเพลิดเพลินกับดนตรีดั้งเดิมของประเทศบ้านเกิดของฉัน",
    "Turkish" : "Ülkemdeki geleneksel müzikten zevk alıyorum."
  };
}
function getLanguageTags(){
  let langs = ["ar-Arabic","cs-Czech","da-Danish","de-German","el-Greek","en-English","eo-Esperanto","es-Spanish","et-Estonian","fi-Finnish","fr-French","he-Hebrew","hi-Hindi","hu-Hungarian","id-Indonesian","it-Italian","ja-Japanese","ko-Korean","la-Latin","lt-Lithuanian","lv-Latvian","nb-Norwegian Bokmal","nl-Dutch","nn-Norwegian Nynorsk","no-Norwegian","pl-Polish","pt-Portuguese","ro-Romanian","ru-Russian","sk-Slovak","sl-Slovenian","sq-Albanian","sr-Serbian","sv-Swedish","th-Thai","tr-Turkish","zh-Chinese"];
  let langobjects = [];
  for (let i=0;i<langs.length;i++){
    let langparts = langs[i].split("-");
    langobjects.push({"code":langparts[0],"name":langparts[1]});
  }
  return langobjects;
}
// Generic Utility Functions
function qs(selectorText){
  //saves lots of typing for those who eschew Jquery
  return document.querySelector(selectorText);
}
function getLookupTable(objectsArray,propname){
  return objectsArray.reduce((accumulator, currentValue) => (accumulator[currentValue[propname]] = currentValue, accumulator),{});
}
document.addEventListener('DOMContentLoaded', function (e) {
  try {init();} catch (error){
    console.log("Data didn't load", error);}
});	
</script>	