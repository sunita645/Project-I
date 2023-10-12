//References
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let backBtn = document.getElementById("back-button");
let countOfQuestion = document.querySelector(".number-of-question");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 11;
let countdown;

//Questions and Options array

const quizArray = [
    {
        id: "0",
        question: "Error may occur in performing numerical computation on the computer due to",
        options: ["All of them", "Inherent error", "Turncation error", "Rounding errors"],
        correct: "All of them",
    },
    {
        id: "1",
        question: "Bisection method is also known as",
        options: ["Bolzana amd interval having method", "Interval having method", "Bolzana method", "Succesive method"],
        correct: "Inter having method",
    },
    {
        id: "2",
        question: "Interpolation means?",
        options: ["Adding new data points", "Only aligning old data points", "Only removing old data points", "None of the"],
        correct: "Adding new data point",
    },
    {
        id: "3",
        question: "Newton forward interpolation is used for--------intervals.",
        options: ["Open", "Unequl", "Equal", "Closed"],
        correct: "Equal",
    },
    {
        id: "4",
        question: "Trapezoidal rule gives exact value of the integral when the integral is a",
        options: ["Linear functio", "Quadratic function", "Cubic function", "Polynominal of any degree"],
        correct: "Linear function",
    },
    {
        id: "5",
        question: "Numerical differentiation can be used only when the differnt of some order",
        options: ["Equal spaced", "Uneqal spaced", "Are constant", "Independent"],
        correct: "Are constant",
    }, {
        id: "6",
        question: "Which of the following is an iteractive method",
        options: ["Guiss-Seild", "Guess-Jordan ", "Factorization", "Guess Elimination"],
        correct: "Guess-Seild",
    },
    {
        id: "7",
        question: "What is the other name for factorization method?:",
        options: ["Muller's method", "Decomposition method", "Jacobi method", "Guess elimination method"],
        correct: "Decomposition method",
    },
    {
        id: "8",
        question: "Which is the simplest method to solve an ordinary differential equation numerically?",
        options: ["Euler's method", "Runge-Kutta fourth order method", "Picard's method", "Taylor series method"],
        correct: "Euler's method",
    },
    {
        id: "9",
        question: "Heun's method is equivalent to:",
        options: ["RK-1 method", "RK-2 method", "RK-3 method", "RK-4 method"],
        correct: "www.com.yahoo",
    },
];

//Restart Quiz
restart.addEventListener("click", () => {
    initial();
    displayContainer.classList.remove("hide");
    scoreContainer.classList.add("hide");
});

//Next Button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {
        //increment questionCount
        questionCount += 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Your score is " + scoreCount + " out of " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 11;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);

//back-button
backBtn.addEventListener(
    "click",
    (displayBack = () => {
        //increment questionCount
        questionCount -= 1;
        //if last question
        if (questionCount == quizArray.length) {
            //hide question container and display score
            displayContainer.classList.add("hide");
            scoreContainer.classList.remove("hide");
            //user score
            userScore.innerHTML =
                "Your score is " + scoreCount + " out of " + questionCount;
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            //display quiz
            quizDisplay(questionCount);
            count = 11;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);

//Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};

//Display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container-mid");
    //Hide other cards
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    //display current question card
    quizCards[questionCount].classList.remove("hide");
};

//Quiz Creation
function quizCreator() {
    //randomly sort questions
    quizArray.sort(() => Math.random() - 0.5);
    //generate quiz
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        //quiz card creation
        let div = document.createElement("div");
        div.classList.add("container-mid", "hide");
        //question number
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        //options
        div.innerHTML += `
    <button class="option-div" onclick="checker(this)">${i.options[0]}</button>
     <button class="option-div" onclick="checker(this)">${i.options[1]}</button>
      <button class="option-div" onclick="checker(this)">${i.options[2]}</button>
       <button class="option-div" onclick="checker(this)">${i.options[3]}</button>
    `;
        quizContainer.appendChild(div);
    }
}

//Checker Function to check if option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question =
        document.getElementsByClassName("container-mid")[questionCount];
    let options = question.querySelectorAll(".option-div");

    //if user clicked answer == correct option stored in object
    if (userSolution === quizArray[questionCount].correct) {
        userOption.classList.add("correct");
        scoreCount++;
    } else {
        userOption.classList.add("incorrect");
        //For marking the correct option
        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }

    //clear interval(stop timer)
    clearInterval(countdown);
    //disable all options
    options.forEach((element) => {
        element.disabled = true;
    });
}

//initial setup
function initial() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    count = 11;
    clearInterval(countdown);
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}

//when user click on start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    displayContainer.classList.remove("hide");
    initial();
});

//hide quiz and display start screen
window.onload = () => {
    startScreen.classList.remove("hide");
    displayContainer.classList.add("hide");
};