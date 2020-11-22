const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')

let shuffledQuestions, currentQuestionIndex

let correctAnswer=0;
var texts=["Great job!","You have to improvise","That's just okay!"];
var images=["http://localhost/placement/congo.jpeg" ,"http://localhost/placement/workhard.gif","http://localhost/placement/lose.gif"];
var picker;

startButton.addEventListener('click', startquiz)
nextButton.addEventListener('click', () => {
  currentQuestionIndex++
  setNextQuestion()
})

function startquiz() {
  console.log('Quiz_started')
  startButton.classList.add('hide')
  shuffledQuestions = questions.sort(() => Math.random() - .5)
  currentQuestionIndex = 0
  correctAnswer = 0
  questionContainerElement.classList.remove('hide')
  setNextQuestion()
}

function setNextQuestion() {
  resetting_State()
  showQuestion(shuffledQuestions[currentQuestionIndex])
}

function showQuestion(question) {
  questionElement.innerText = question.question
  question.answers.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
      button.dataset.correct = answer.correct
      
    }
    button.addEventListener('click', selectAnswer)
    answerButtonsElement.appendChild(button)
  })
}

function resetting_State() {
  clearStatusClass(document.body)
  nextButton.classList.add('hide')
  while (answerButtonsElement.firstChild) {
    answerButtonsElement.removeChild(answerButtonsElement.firstChild)
  }
}

function selectAnswer(e) {
  const selectedButton = e.target
  const correct = selectedButton.dataset.correct
  if(selectedButton.dataset=correct){
  	correctAnswer++
  }
  setStatusClass(document.body, correct)
  Array.from(answerButtonsElement.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
  })
  if (shuffledQuestions.length > currentQuestionIndex + 1) {
    nextButton.classList.remove('hide')
  } else {
    startButton.innerText = 'Restart'
    startButton.classList.remove('hide')
    document.getElementById("after_submit").style.visibility = "visible";
    document.getElementById("right-answers").innerHTML = "Your Score " + correctAnswer + ".";
  }
}

function setStatusClass(element, correct) {
  clearStatusClass(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }
}

function clearStatusClass(element) {
  element.classList.remove('correct')
  element.classList.remove('wrong')
}

const questions = [
  {
    question: 'What is 2 + 2?',
    answers: [
      { text: '4', correct: true },
      { text: '22', correct: false }
    ]
  },
  {
    question: 'What is 4 * 2?',
    answers: [
      { text: '6', correct: false },
      { text: '8', correct: true }
    ]
  },
  {
  question:'In each series, look for the degree and direction of change between the numbers. In other words, do the numbers increase or decrease, and by how much Look at this series: 2, 1, (1/2), (1/4), ... What number should come next?',
  answers:[ 
    {text:'(1/3)',correct:false},
	{text:'(1/8)',correct:true},
	{text:'(2/8)',correct:false},
	{text:'(1/16)',correct:false}
	]
   },
   {
  question:'Look at this series: 36, 34, 30, 28, 24, ... What number should come next?',
	answers:[ 
	{text:'20',correct:false},
	{text:'22',correct:true},
	{text:'23',correct:false},
	{text:'26',correct:false}
	]
},
 {  
  question:'Look at this series: 22, 21, 23, 22, 24, 23, ... What number should come next?',
	answers:[
	{text:'22',correct:false},
	{text:'24',correct:false},
	{text:'25',correct:true},
	{text:'26',correct:false}
	]
	},
	{
	question:'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?',
	answers:[
	{text:'12',correct:false},
	{text:'14',correct:true},
	{text:'27',correct:false},
	{text:'53',correct:false}
	]
	}
]

	
if (correctAnswer == 0 && correctAnswer < 2) {
    picker = 2;
    }

    if (correctAnswer > 2 && correctAnswer < 6) {
      picker = 1;
    }

    if (correctAnswer == 6) {
      picker = 0;
    }
    document.getElementById("text").innerHTML = texts[picker];

    document.getElementById("image").src = images[picker];
