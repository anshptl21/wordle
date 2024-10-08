const url = 'https://raw.githubusercontent.com/tabatkins/wordle-list/main/words';

// Global variable to hold the word list
let words = [];
let wordleOfTheDay = []
// Function to fetch the word list
async function fetchWordList() {
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    const text = await response.text();
    words = text.split('\n').map(word => word.trim()).filter(word => word.length > 0);
	wordleOfTheDay = text.split('\n').map(word => word.trim()).filter(word => word.length > 0);
    console.log('Word list fetched successfully:', words);
    // Call a function to check for a specific word after fetching
    checkWord('example'); // Replace 'example' with the variable you want to check
  } catch (error) {
    console.error('There was a problem with the fetch operation:', error);
  }
}

// Function to check if a word exists in the global words array
function checkWord(wordToCheck) {
  if (words.includes(wordToCheck)) {
    console.log(`The word "${wordToCheck}" is in the list.`);
  } else {
    console.log(`The word "${wordToCheck}" is not in the list.`);
  }
}

// Fetch the word list when the script runs
fetchWordList();

// Fetch the word list when the script runs
console.log(typeof(fetchWordList()))

var wordle_word = "WARPS"
wordleWinner = wordle_word.toLowerCase();
for (let j = 0; j < wordleOfTheDay.length; j++){
	if (wordleWinner == wordleOfTheDay[j]){
		delete wordleOfTheDay[j]
		break;
	}
}
var now = new Date();
	var night = new Date(
    	now.getFullYear(),
    	now.getMonth(),
    	now.getDate() + 1, // the next day, ...
    	0, 0, 0 // ...at 00:00:00 hours
	);
function retrieveExistingData(){
    
	var msTillMidnight = night.getTime() - now.getTime();
	if (msTillMidnight == 0){
		window.localStorage.clear();
		return false;
	}
	setTimeout('document.location.refresh()', msTillMidnight);
	document.getElementById("wordle").style.animation = "1s ease-in fadeIn"
	items_in_store = []
	for (var item = 1; item < 7; item++){
		color_items = []
		retrieveItem = window.localStorage.getItem("row" + item)
		row = document.getElementById("row" + item)
		rows = row.getElementsByClassName("row")
		if (retrieveItem != null){
			row.value = retrieveItem
			items_in_store.push(retrieveItem);
		}else {
			return false
		}
		for (var box = 0; box < 5; box++){
			colorItem = window.localStorage.getItem("row" + item + "_" + box)
			color_items.push(colorItem)
		}
		for (var i = 0; i < 5; i++){
				rows[i].innerHTML = row.value[i]
				rows[i].style.background = color_items[i]
				rows[i].style.border = "3px solid transparent"
		}
	}
}

//const gistUrl = 'https://gist.github.com/cfreshman/cdcdf777450c5b5301e439061d29694c.js';

//const {data, error} = await getGistFirstFileText(`${gistUrl}.json`);
//console.log(data);

	
	
document.getElementById('wordle-keyboard').addEventListener('click', function(event) {
   // if (!stop){
   	if (event.target.classList.contains('key')) {
        	choosingKeyBoard(event.target.getAttribute('data-letter'));
    	}
   // }
});
document.getElementById('wordle-keyboard-last-row').addEventListener('click', function(event) {
	if (event.target.classList.contains('key')) {
        choosingKeyBoard(event.target.getAttribute('data-letter'));
    } else if (event.target.classList.contains('enter')){
		row = findRow()
		enterWord(row)
	} else if (event.target.classList.contains('backspace')){
		row = findRow()
		backspace(row)
	}
});
function findRow(){
	var length = 6;
	for (var i = 1; i <= length; i++){
		if (document.getElementById("row" + i).value == undefined){
			return "row" + i
		}
	}
}

function choosingKeyBoard(key) {
	row_number = findRow()
	var row = document.getElementById(row_number);
	var rows = row.getElementsByClassName("row");
	for (var i = 0; i < rows.length; i++){
		if (rows[i].innerHTML == ""){
			rows[i].innerHTML = key;
			break;			
		}
	}
}

document.addEventListener("keypress", function(event) {
	//if (!stop){	
    		if (event.key !== undefined && event.key !== "Enter") {
    			var keyboard;
    			keyboard = event.key.toUpperCase();
        		choosingKeyBoard(keyboard);
  		//}
	}
	if (event.key == "Backspace"){
		row = findRow()
		backspace(row)
	}
	if (event.key == "Enter"){
		row = findRow()
		enterWord(row);
	}

});

document.addEventListener("keydown", function(event){
	if (event.key == "Backspace"){
		row = findRow()
		backspace(row)
	}

});

function backspace(row_number){
	var row = document.getElementById(row_number);
	var rows = row.getElementsByClassName("row");
	for (var i = 4; i >= 0; i--){
		if (rows[i].innerHTML != ""){
			rows[i].innerHTML = ""
			break;
		}
	}
}

function enterWord(row){
	var final_guess = ""
	
	var answer = []
	for (i in wordle_word){
		answer.push(wordle_word[i])
	}
	row_word = []
	row_num = document.getElementById(row)
	var rows = row_num.getElementsByClassName("row");
	for (var i = 0;  i < rows.length; i++){
		if (rows[i].innerHTML == ""){
			return alert("Row is still empty")
		} else {
			row_word.push(rows[i].innerHTML)
		}
	}
	console.log(row_word)
	final_guess = ''
	for (var i = 0; i < row_word.length; i++){
		final_guess += row_word[i]
	}
	console.log(final_guess)
	final = final_guess.toLowerCase()
	console.log(final)
	if (words.includes(final)){
	//analyzing word alg
	//making every letter background automatically gray
	for (var i = 0; i < rows.length; i++){
			rows[i].style.background = "#476b6b"; //gray
			rows[i].style.border = "3px solid transparent";
	}
	for (var j=k=0; j < row_word.length && k < answer.length; j++, k++){
		if (row_word[j] == answer[k]){
			if (rows[j].innerHTML == row_word[j]){
				rows[j].style.background = "#29a329"; //green
				rows[j].style.border = "3px solid transparent";
				answer[k] = 0
			}	
		}
	}
	for (var j=0; j < row_word.length; j++){
		if(answer.includes(row_word[j])){
			rows[j].style.background = "rgb(230, 230, 0)"; //yellow
			rows[j].style.border = "3px solid transparent"
			index = answer.indexOf(row_word[j]);
			answer[index] = 0
		}
	}
	row_num.value = row_word
	var green_count = 0
	for (var i = 0; i < rows.length; i++){
		if (rows[i].style.background == "rgb(41, 163, 41)"){
			green_count++
		}
	}
	if (green_count == 5){
		showWin("win")
	}else if (row == "row6"){
		showWin("lost")
	}
	final_guess = ''
	for (var i = 0; i < row_word.length; i++){
		final_guess += row_word[i]
	}
	}
	else{
		return alert("Word Not Found")
	}
	//putting entered words in window session storage 
	//session storage will delete once browser is closed 
	window.localStorage.setItem(row, final_guess)
	for (var i = 0; i < rows.length; i++){
		window.localStorage.setItem(row + "_" + i, rows[i].style.background)
	}
}



function showWin(state){
	win_html = document.getElementById("win")
	win = ["Great", "Awesome", "Incredible", "Nice Job", "Excellent", "Outstanding", "Remarkable"]
	if (state == "win"){
		$("#win").css("display", "inherit");
			win_html.innerHTML = win[(Math.floor(Math.random() * win.length))]
			win_html.style.animation = "1s ease-in fadeIn"
	} else if (state == "lost"){
		$("#win").css("display", "inherit");
		win_html.innerHTML = wordle_word
		win_html.style.animation = "1s ease-in fadeIn"

	}
}	
	
	
