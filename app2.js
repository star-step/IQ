var questions = [{
    question: "Which number should come next in the pattern?",
    choices: ["23", "24", "25", "26"],
    correctAnswer: 2 
},
{
    question: "Find the answer that best completes the analogy: Book is to Reading as Fork is to: ",
    choices: ["drawing", "writing", "stirring", "eating"],
    correctAnswer: 3
},
{
    question: "Find two words, one from each group, that are the closest in meaning:  Group A:talkative, job, ecstatic;Group B:angry, wind, loquacious",
    choices: ["talkative and wind", "job and angry", "talkative and loquacious", "ecstatic and angry"],
    correctAnswer: 2
},
{
    question: "Which of the following can be arranged into a 5-letter English word?",
    choices: ["H R G S T", "R I L S A", "T O O M T", "W Q R G S"],
    correctAnswer: 1
},
{
    question: "What number best completes the analogy: 8:4 as 10:",
    choices: ["3", "7", "24", "5"],
    correctAnswer: 3
},
{
    question: "If you rearrange the letters 'BARBIT' you would have the name of a:",
    choices: ["Continent", "City", "Ocean", "Animal"],
    correctAnswer: 3
},
{
    question: "A store reduced the price of one of its products by 25 percent. What percentage of the reduced price must it be increased by to put the product back to its original price?",
    choices: ["33%", "20%", "23%", "35%"],
    correctAnswer: 0
},
{
    question: "Which one of the five makes the best comparison? Brother is to sister as niece is to:",
    choices: ["Mother", "Daughter", "Uncle", "Nephew"],
    correctAnswer: 3
},
{
    question: "Which of the following words is closest in meaning to APPREHENSIVE?",
    choices: ["Anxious", "Thorough", "Foolish", "Comprehensive"],
    correctAnswer: 0
},
{
    question: "Nia,  twelve years old, is three times as old as her sister. How old will Nia be when she is twice as old as her sister?",
    choices: ["15", "16", "20", "21"],
    correctAnswer: 1
},
{
    question: "The price of an article was cut 20% for sale.  By what percent must the discounted item be increased to again sell the article at the original price?",
    choices: ["15%", "20%", "25%", "30%"],
    correctAnswer: 2
},
{
    question: "How many birthdays does the average man have?",
    choices: ["One", "Every year"],
    correctAnswer: 0
},
{
    question: "Jack is taller than Peter, and Bill is shorter than Jack. Which of the following statements would be more accurate?",
    choices: ["It is impossible to tell whether Bill or Peter is taller", "Bill is taller than Peter", "Peter is taller than Bill", "Bill is as tall as Peter"],
    correctAnswer: 0
},
{
    question: "Which one of the five makes the best comparison? Milk is to glass as letter is to:",
    choices: ["Book", "Envelope", "Pen", "Stamp"],
    correctAnswer: 1
},
{
    question: "Some months have 31 days; how many have 28?",
    choices: ["1", "3", "6", "12"],
    correctAnswer: 3
},
{
    question: "Which number should come next in this series? 25, 24, 22, 19, 15,",
    choices: ["14", "5", "10", "30"],
    correctAnswer: 2
},
{
    question: "Which one of the five is least like the other four?",
    choices: ["Brass", "Copper", "Tin", "Lead"],
    correctAnswer: 0
},
{
    question: "SOLICITOR is to ADVISOR as SYCOPHANT is to:",
    choices: ["Blackmailer", "Flautist", "Fawner", "Nobleman"],
    correctAnswer: 2
},
{
    question: "Which one of the five is least like the other four?",
    choices: ["Potato", "Carrot", "Corn", "Apple"],
    correctAnswer: 3
},
{
    question: "Mary had several cookies. After eating one, she gave half the remainder to her sister. After eating another cookie, she gave half of what was left to her brother. Mary now had only five cookies left. How many cookies did she start with?",
    choices: ["23", "11", "22", "45"],
    correctAnswer: 0
},
{
    question: "Which one of the five makes the best comparison?   CAACCAC is to 3113313 as CACAACAC is to:",
    choices: ["31313113", "31311313", "31311131", "13133313"],
    correctAnswer: 1
}];

var currentQues = 0;
var viewingAns = 0;
var correctAnswers = 0;
var quizOver = false;
var selectedAns = [];
var time;
var interval
var c = 3;
var x = document.getElementById("timer");

$(document).ready(function(){
    displayCurrentQuestion();
    $(this).find(".nextButton").on("click",function(){
        stop();
        stopTime();
        if(!quizOver){
        var val = $("input[type='radio']:checked").val();
    if(val == questions[currentQues].correctAnswer){
        correctAnswers++;
    }
    selectedAns[currentQues] = val;
    currentQues++;
   
    displayCurrentQuestion();
    
    }
    else{
        showScore();
        setTimeout(noScore,4750);
        $(".preButton").removeProp('visibility');
        $(".preButton").text("Restart Quiz");
        resetQuiz();
        viewingAns = 1;
        displayCurrentQuestion();
        hideScore();
    }
        });
});

function showTimer(){
    stopTime();
	interval = setInterval(function(){
        if(c!=-1){
            x.innerHTML = c +' secs';
            c--;
        }else{
            c = 3;
        }
        
    },1000)
}

function displayCurrentQuestion(){
    
    if(currentQues != questions.length){
        showTimer();
    	timer();
    var question = questions[currentQues].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQues].choices.length;
    $(questionClass).text(question);
    $(choiceList).find("li").remove();
    var choice;
    
    for(i = 0; i < numChoices; i++){
        choice = questions[currentQues].choices[i];
        
        if(selectedAns[currentQues] == i){
            $('<li><input type ="radio" class="radio-inline" checked="checked" value='+i+' name ="dynradio" />'+ ' ' + choice + '</li>').appendTo(choiceList);
        }else{
            $('<li><input type ="radio" class="radio-inline" value='+i+' name ="dynradio" />'+ ' ' + choice + '</li>').appendTo(choiceList);
        }
    }
}else{
    showScore();
    setTimeout(noScore,4750);
    $(".preButton").removeProp('visibility');
    $(".preButton").text("Restart Quiz");
    resetQuiz();
    viewingAns = 1;
    hideScore();
	$(".question").text(" ");
    $(".timer").text(" ");
	$(".quizMessage").add("view");
	$(".choiceList").text(" ");
}
}

function timer(){
    stop();
 	time = window.setTimeout(displayCurrentQuestion,5000);
    currentQues++;
}
function stop()
{
	clearTimeout(time);
}  
function stopTime(){
    clearInterval(interval);
    c = 3;
    return c;
}  
function showScore(){
    $(".nextButton").text("score = " + correctAnswers );
}

function noScore(){
    $(".nextButton").text("Restart Quiz");
}

function resetQuiz(){
    currentQues = 0;
    correctAnswers = 0;
    hideScore();
}

function displayScore(){
    $(document).find(".quizcontainer > .result").text("correctAnswers");
    $(document).find(".quizcontainer > .result").show();
}

function hideScore(){
    $(document).find(".result").hide();
}

function viewResults(){
    if(currentQues == questions.length){
        currentQues = 0;
        return false;
    }
    if(viewingAns == 1){
        return false;
    }
    
    hideScore();
    var question = questions[currentQues].question;
    var questionClass = $(document).find(".quizContainer > .question");
    var choiceList = $(document).find(".quizContainer > .choiceList");
    var numChoices = questions[currentQues].choices.length;
    $(questionClass).text(question);
    $(choiceList).find("li").remove();
    var choice;
    
    for(i = 0; i < numChoices; i++){
        choice = questions[currentQues].choices[i];
        if(selectedAns[currentQues] == i){
            $('<li><input type ="radio" class="radio-inline" checked="checked" value='+i+' name ="dynradio" />'+ ' ' + choice + '</li>').appendTo(choiceList);
        }else{
            $('<li><input type ="radio" class="radio-inline" value='+i+' name ="dynradio" />'+ ' ' + choice + '</li>').appendTo(choiceList);
        }
    }
    currentQues++;
    
}











