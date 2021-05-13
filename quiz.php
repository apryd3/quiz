<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
html{
	height:100%;
	font-family: Arial;
	background-color: rgba(85,129,151,1);
}
div.c1{ width: 400px; height:400px; display:grid; text-align:center; padding:10px 20px 30px 40px}
div.c2{ width:100px; height:100px; display:inline; text-align:center;}
.grid-container {
	display: grid;
	grid-template-columns: auto auto auto;
	//background-color: #2196F3;
	//background-color: #770d29;
	background-color: rgba(255,236,138,0.8);
	padding: 10px;
	}
.g1 {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}

.g1:hover {background-color: rgba(119,13,41,1);
color: white;
cursor: pointer;}



/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.8); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 30px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  height: 60%;
  font-family: Arial;
  font-size: 16pt;
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 48px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

{box-sizing: border-box;}

.bottomnav{
	display: flex;
	flex-flow: row wrap;
	justify-content: space-around;
	padding: 0;
	margin: 0;
	list-style: none;
}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 1%;
  right: calc(1 * (100% / 20));
  width: 13%;
  height: 4em;
}

.button-1 {
	right: calc(4 * (100% / 20));
}

.button-2 {
	right: calc(7 * (100% / 20));
}

.button-3 {
	right: calc(10 * (100% / 20));
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 100%;
  padding: 2px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 45%;
  padding: 8px;
  margin: 5px 5px 5px 5px;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 5px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.timerbuttoncontainer{
	display: table-row;
	display: flex;
	justify-content: center;
	padding-bottom: 2em;
}

.timerbutton{
	cursor: pointer;
	font-size: 48px;
	padding: 1px;
	margin: 1px;
}
.inputQnumber{width:2em;}

@font-face{
	font-family: LCDMONO;
	src: url(LCDMONO.TTF);
}

.timertextcontainer{
	display: table-row;
	display: flex;
	justify-content: center;
}

.timertext{
	font-family: LCDMONO;
	font-size: 64pt;
	display: table-cell;
	width: 1em;
	padding-top:0.5em;
	padding-bottom:0.5em;
}

#IDquestionText{
	
	font-size: 48pt;
	margin: 0px;
	display: flex;
	justify-content: center;
}

#IDcol{
	width:1em;
	text-align:center;	
}

.quotation{
  font-size: 30px;
  //margin: 0 auto;
  quotes: "\201C""\201D""\2018""\2019";
  padding: 10px 20px;
  line-height: 0.1;
}

.quotation:before {
  content: open-quote;
  display: inline;
  height: 0;
  line-height: 0;
  left: -10px;
  position: relative;
  top: 30px;
  color: #ccc;
  font-size: 3em;
}
.quotation::after {
  content: close-quote;
  display: inline;
  height: 0;
  line-height: 0;
  left: 10px;
  position: relative;
  top: 35px;
  color: #ccc;
  font-size: 3em;
}
</style>
</head>

<body>
<h1>❔Quiz❔</h1>
<div id="IDmodalQuestion" class="modal">
	<!-- Modal content -->
	<div class="modal-content">
	<span class="close">&times;</span>
	<h3></h3>
	<p id="IDquestionText" class="quotation">Question goes here</p>
	<div class="timertextcontainer">
		<div class="timertext" id="IDmm">00</div>
		<div class="timertext" id="IDcol">:</div>
		<div class="timertext" id="IDss">00</div>
	</div>
	<div class="timerbuttoncontainer">
		<div class="timerbutton" onclick="starttimer()">⏯</div>
		<div class="timerbutton" onclick="resettimer()">🔁</div>
	</div>
	</div>
</div>

<div id="IDcontainerquestions" class='grid-container'></div>


<div class="form-popup" id="myForm">
  <div class="form-container">
	<div id="IDquestionInputs">
	</div>
    <button class="btn" onclick="saveQuestions()">Save</button>
    <button class="btn cancel" onclick="closeForm()">Close</button>
  </div>
</div>
<footer class="bottomnav">
	<button class="open-button button-1" onclick="generategrid()"><input id="IDinputQnumber" class="inputQnumber" value="12"></input> Questions</button>
	<button class="open-button button-2" onclick="randomplayer()">Pick a Question</button>
	<button class="open-button button-3" onclick="savecsv()">Save Questions</button>
	<button class="open-button button-4" onclick="openForm()">Edit Questions</button>
</footer>
<script>
var mm=00;
var ss=00;
var timelimit=120;
var timer=0;
var seconds=0;
var minutes=0;
var randomnumber;
var numberofquestions;
var appendquestions="";
var appendquestionsinput="";
var questions=["Q1: Question 1",
"Q2: Question 2 is the lingest question there is, just to test multiline compatability on this question here?","Q3: Question 3?","Q4: Question 4?","Q5: Question 5","Q6: Question 6?","Q7: Question 7?","Q8: Question 8?"];
var timerstatus="paused";
questionsnumbersarray = [];
questionsnumbersarray2 = [];
var lastselectedquestion;
//var randomTimer=setInterval(highlightquestion(selectrandom()),1000);
generategrid();

var inputQnumber;
//inputQnumber=document.getElementById("IDinputQnumber").value;
//console.log=(inputQnumber);
mm=document.getElementById("IDmm");
ss=document.getElementById("IDss");


timer = setInterval(function(){
	//console.log(timer);
	//timer=(timer+1);
	if (timerstatus=="running"){
		//console.log(timer);
		ss.innerHTML=("00" + seconds).slice (-2);
		timer=(timer+1);
		seconds=(seconds+1);
		if (ss.innerHTML==60){
			ss.innerHTML=00;
			seconds=0;
			minutes=(minutes+1);
			mm.innerHTML=("00" + minutes).slice (-2);
			
		}
	} else if (timerstatus=="paused"){
		//console.log("Paused");
	}
},1000);

function starttimer(){
	if (timerstatus=="paused"){
		timerstatus="running";
		
	} else {
		timerstatus="paused";
	}
	
}

function resettimer(){
	//console.log("Timer Reset");
	//console.log(mm);
	timer=0;
	mm.innerHTML="00";
	ss.innerHTML="00";
	minutes=0;
	seconds=0;
	timerstatus="paused";
	//console.log(mm);
}

//Generate main grid and Edit questions grid
function generategrid(numberofquestions){
	


	inputQnumber=document.getElementById("IDinputQnumber").value;
	//console.log=(inputQnumber);
	window.numberofquestions=inputQnumber;
	fillquestionnumbersarray();
	containerquestions=document.getElementById("IDcontainerquestions");
	questionInputs=document.getElementById("IDquestionInputs");
	containerquestions.innerHTML="";
	questionInputs.innerHTML="";
	appendquestions=""
	appendquestionsinput=""
	for (i=1; i <= window.numberofquestions; i++){
		appendquestions+="<div id="+i+" onclick='openquestion("+i+")' class='g1'>Question "+i+"</div>";
		appendquestionsinput+="<input type='text' placeholder='Question "+i+"' name='question"+i+"' id='IDqinput"+i+"'>";
	}
	
	
	
	containerquestions.innerHTML=appendquestions;
	questionInputs.innerHTML=appendquestionsinput;
	// console.log(containerquestions);
	// console.log("Clicked");
	// <div id=q1 class='g1'></div>
	//saveQuestions();
}

function openquestion(i){
	if (questionsnumbersarray == 0 ){
		questionsnumbersarray = questionsnumbersarray2.slice();
	}
	console.log("Clicked Question "+i);
	i=(i-1);
	IDquestionText.innerHTML=questions[i];
	modal.style.display = "block";
	disabledq=document.getElementById(i+1);
	disabledq.onclick = null;
	disabledq.style.background = "grey";
	disabledq.style.color = "white";
	disabledq.innerHTML="&times"
	lastselectedquestion=i;
	lastselectedquestionindex=questionsnumbersarray.indexOf(i);
	questionsnumbersarray.splice(lastselectedquestionindex+1, 1);
	//questionsnumbersarray = questionsnumbersarray2.slice();
	console.log("QuestionArray : " + questionsnumbersarray)
}

// Get the modal
var modal = document.getElementById("IDmodalQuestion");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  timerstatus="paused";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
	timerstatus="paused";
  }
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
	document.getElementById("myForm").style.display = "none";
}

function saveQuestions(){
	var i;
	//qinput=document.getElementById("IDqinput"+i);
	<!-- console.log(qinput); -->
	for (i=1; i <= numberofquestions; i++){
		qinput=document.getElementById("IDqinput"+(i));
		questions[i-1]=qinput.value;
		console.log(qinput);
		console.log(questions[i]);
	}
	closeForm();
}

function fillquestionnumbersarray(){
	console.log("Generating Grid Numbers");
	for (var i = 1 ; i <= numberofquestions; i++ ){
		questionsnumbersarray.push(i);
	}
	console.log("Questions Array 1 = "+questionsnumbersarray);
}

function highlightquestion(i){
	//console.log(document.getElementById(i));
	//document.getElementById(i).style.background-color=(rgba(119,13,41,1));
	document.getElementById(i).style.background = "rgba(119,13,41,1)";
	document.getElementById(i).style.color = "white";
}

function removehighlightquestion(i){
	//console.log(document.getElementById(i));
	document.getElementById(i).style.background = "rgba(255, 255, 255, 0.8)";
	document.getElementById(i).style.color = "black";
}


function qOn(){
	if (questionsnumbersarray.length != 0){
		highlightquestion(selectrandom());
		if (questionsnumbersarray.length != 0){
			qTimerOff=window.setTimeout(qOff,100);
			}
		}
	else
		{
		clearInterval(qTimer);
		openquestion(lastselectedquestion);
		}
	}
	
function qOff(){
	removehighlightquestion(lastselectedquestion)
}


function randomplayer(){
	console.log("Array1 length : " + questionsnumbersarray.length);
	//window.setInterval(highlightquestion(selectrandom()),1000);
	
	
	//todo
	//copy questionsnumbersarray2 into questionsnumbersarray
	if (questionsnumbersarray2.length != 0){
		questionsnumbersarray=[];
		questionsnumbersarray = questionsnumbersarray2.slice();
		questionsnumbersarray2=[];
	}
	
	
	console.log(questionsnumbersarray);
	qTimer=window.setInterval(qOn,200);
	
	
		
	//randomTimer();
	//openquestion(selectrandom());
}


function selectrandom(){
	console.log("Selecting Random Question");
	var num = Math.floor(Math.random() * questionsnumbersarray.length);
	var roll = questionsnumbersarray.splice(num, 1);	// splice(index,howmanytoremove,addnewitems)
	
	
	
	var selectedquestion = roll[ 0 ];
	
	if (questionsnumbersarray.length != 0){
		questionsnumbersarray2.push(selectedquestion);
		
	}
	
	
	
	console.log(selectedquestion);
	console.log(questionsnumbersarray2)
	lastselectedquestion = selectedquestion;
	
	return selectedquestion;
	
}

function savecsv(){
	//var A = [['n','sqrt(n)']];
	//var a = questions;
	<!-- for(var j=1; j<10; ++j){  -->
		<!-- A.push([j, Math.sqrt(j)]); -->
	<!-- } -->
	console.log(questions);
	var csvRows = [];

	for(var i=0, l=questions.length; i<l; ++i){
		console.log(questions[i]);
		//qtn=questions[i];
		csvRows.push(questions);
		//csvRows.push(questions.join(','));
	}

	var csvString = csvRows.join("%0A");
	var a         = document.createElement('a');
	a.href        = 'data:attachment/csv,' +  encodeURIComponent(csvString);
	a.target      = '_blank';
	a.download    = 'myFile.csv';

	document.body.appendChild(a);
	a.click();
}

</script>

</body>
</html>
