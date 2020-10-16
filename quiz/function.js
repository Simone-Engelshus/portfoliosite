

var myQuestions = [
    {
        question: "What is 1+1?",
        answers: {
            a: '2',
            b: '6',
            c: '2000'
        },
        correctAnswer: 'a'
    },
    {
        question: "Which of the following is a fruit?",
        answers: {
            a: 'Lamington',
            b: 'Apple',
            c: 'Samsung'
        },
        correctAnswer: 'b'
    },
	{
        question: "What is the opposite of sad?",
        answers: {
            a: 'Angry',
            b: 'Hungry',
            c: 'Happy'
        },
        correctAnswer: 'c'
    }
];



var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

    function showQuestions(questions, quizContainer){
        var output = [];
        var answers;

        for(var i=0; i<questions.length; i++){
            
            answers = [];

            for(letter in questions[i].answers){

                answers.push(
                    '<label>'
                        + '<input type="radio" name="question'+i+'" value="'+letter+'">'
                        + letter + ': '
                        + questions[i].answers[letter]
                    + '</label>'
                );
            }

            output.push(
                '<div class="question">' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }

        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer){
        
        var answerContainers = quizContainer.querySelectorAll('.answers');
        
        var userAnswer = '';
        var numCorrect = 0;
        $message = "";
        
        for(var i=0; i<questions.length; i++){

            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            
            if(userAnswer===questions[i].correctAnswer){
                
                numCorrect++;
                
                answerContainers[i].style.color = 'lightgreen';
            }
            
            else{
                answerContainers[i].style.color = 'red';
            }
        }
        

        if (numCorrect == 3){
            resultsContainer.innerHTML = 'Congrats! I know that was difficult, but you are now a certified genius!';
        }
        else{
            resultsContainer.innerHTML = 'Uh-oh... Try that again...';
        }

    }

    showQuestions(questions, quizContainer);
    
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
    }

}


