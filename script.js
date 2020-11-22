const voice = document.querySelector(".voice");
const voice2text = document.querySelector(".voice2text");

const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
const recorder = new SpeechRecognition();

let depts = ["All UG"," All Undergraduates","Undergraduate students"];
let dur_process= ["One day for CTS,L&T and E&Y,\n\n Two days for Accenture,Zoho and Infosys"];
let rounds=["2 rounds in Accenture and CTS,\n\n 3 rounds in L&T and Infosys,\n\n 4 rounds in E&Y,\n\n 6 rounds in Zoho"];
let pro_amount= ["L&T and E&Y offers 4.1-4.25 LPA,Zoho offers 4.6-5.6 LPA,Infosys offers 5 LPA...Isn't that sounds great?"];

function addHumanText(text) {
  const chatContainer = document.createElement("div");
  chatContainer.classList.add("chat-container");
  const chatBox = document.createElement("p");
  chatBox.classList.add("voice2text");
  const chatText = document.createTextNode(text);
  chatBox.appendChild(chatText);
  chatContainer.appendChild(chatBox);
  return chatContainer;
}

function addBotText(text) {
  const chatContainer1 = document.createElement("div");
  chatContainer1.classList.add("chat-container");
  chatContainer1.classList.add("darker");
  const chatBox1 = document.createElement("p");
  chatBox1.classList.add("voice2text");
  const chatText1 = document.createTextNode(text);
  chatBox1.appendChild(chatText1);
  chatContainer1.appendChild(chatBox1);
  return chatContainer1;
}

function botVoice(message) {
    const speech = new SpeechSynthesisUtterance();
    speech.text = "Sorry, I did not understand that.";

    if (message.includes('how are you' || 'how are you doing today')) {
      speech.text = "I am fine, thanks. How are you?";
    }

    if (message.includes('fine')) {
      speech.text = "Nice to hear that. How can I assist you today?";
    }

    if (message.includes('abbreviation of e and y')) {
      speech.text = "Ernest and Young";
    }

    if (message.includes('CTC per annum of each product-based company')) {
      let finalresult = pro_amount[Math.floor (Math.random() * pro_amount.length)];
      speech.text = finalresult;
    }

    if (message.includes('CTC per annum of service-based companies')) {
      speech.text = "3.3-3.5 LPA";
    }

    if (message.includes('which are the product based companies')) {
      speech.text = "Infosys,E&Y,L&T and Zoho";
    }

    if (message.includes('which are the service based companies')) {
      speech.text = "CTS and Accenture";
    }

    if (message.includes('how many rounds are conducted in each of these companies')) {
      let finalresult = rounds[Math.floor (Math.random() * rounds.length)];
      speech.text = finalresult;
    }

    if (message.includes('how many number of students got placed in CTS')) {
      speech.text = "40 STUDENTS got placed";
    }

    if (message.includes('departments allowed for the process')) {
      let finalresult = depts[Math.floor (Math.random() * depts.length)];
      speech.text = finalresult;
    }

    if (message.includes('types of rounds conducted in CTS')) {
      speech.text = "Online test and HR (technical and general)";
    }

    if (message.includes('types of rounds conducted in Infosys')) {
      speech.text = "Programming round, Technical HR & General HR)";
    }

    if (message.includes('duration for the process in all companies')) {
      let finalresult = dur_process[Math.floor (Math.random() * dur_process.length)];
      speech.text = finalresult;
    }

    if (message.includes('type of Placement for all companies')) {
      speech.text = "On Campus";
    }

    if (message.includes('location of all the companies')) {
      speech.text = "Zoho and E&Y is located only in chennai while all other companies are located in Mumbai,Pune,Chennai and Bangalore";
    }

    if (message.includes('does all companies provide internship opportunities')) {
      speech.text = "No,Zoho alone provides internship opportunities";
    }
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    window.speechSynthesis.speak(speech);
    var element = document.getElementById("container");
    element.appendChild(addBotText(speech.text));
}

recorder.onstart = () => {
  console.log('Voice activated');
};

recorder.onresult = (event) => {
  const resultIndex = event.resultIndex;
  const transcript = event.results[resultIndex][0].transcript;
  var element = document.getElementById("container");
  element.appendChild(addHumanText(transcript));
  botVoice(transcript);
  console.log(transcript);
};

voice.addEventListener('click', () =>{
  recorder.start();
});
