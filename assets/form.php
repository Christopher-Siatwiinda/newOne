<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CastleBet Quiz Entry</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>        
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body >
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <img src="">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>  CASTLEBET QUIZ</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
  <button type="button" class="btn btn-primary"   onclick='$("#questionModal").modal("show")'  style="margin-right: 20px">New</button>

</nav>
	<div class="page-content" style="padding: 40px"> 

<div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: teal">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white">New Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="height: 400px; width: 500px">
        <form class="form-detail" action="#" method="post">
        <div class="form-row">
            <label for="question" class="title">Question</label>
            <textarea name="question" id="question" class="input-text form-control" style="width: 100%; height: 100px; padding: 16px" placeholder="Enter Question" required></textarea>
        </div>

              <div style="display: flex; background-color: whitesmoke; padding: 10px 15px; border-radius: 10px">
                <div class="" style="flex: 1; margin-right: 10px;">
                    <div class="title">Question Type:</div>
                    <select class="form-control" id="questionType" style="height: 50px;" onchange="addAnswerOptions(this.value)">
                        <option value="1">Yes / No</option>
                        <option value="2">Multiple (1)</option>
                        <option value="3">Multiple (3)</option>
                        <option value="4">Open Answer</option>
                    </select>
                </div>
                <div style="flex: 1;">
                    <div class="title">Allowed Time:</div>
                    <input type="text" class="form-control" id="allowedTime">
                </div>
                <div style="flex: 1;">
                    <div class="title">Allowed Attempts:</div>
                    <input type="text" class="form-control" id="allowedAttempts">
                </div>
            </div>
            <div style="height: 4px"></div>
            <div style="background-color: whitesmoke; padding: 10px 15px; border-radius: 10px">
                <div style="display: flex; justify-content: space-between;">
                    <div class="title">
                        Answer Options
                    </div>
                    <div onclick="optionEntryAppender()" style="width: 60px; height: 20px; cursor: pointer; background: teal; color: white; font-size: 13px; display: flex; justify-content: center; align-items: center; border-radius: 20px;">
                        Add
                    </div>
                </div>
                <div id="answer-options-container"> </div>
            </div>
<!--
            <div style="cursor: pointer; display: flex; align-items: center;margin-left: 20px">
                      <div style="font-size: 13px">Yes</div>
                      <div style="width: 10px; height: 10px; background: teal; border-radius: 20px; margin-left: 10px; <script>this.innerHTML='display: none'</script>"></div>
                  </div>

                  <div style="height: 4px"></div>
                  
                  <div style=" cursor: pointer; display: flex; align-items: center;margin-left: 20px">
                      <div style="font-size: 13px">No</div>
                      <div style="width: 10px; height: 10px; background: teal; border-radius: 20px; margin-left: 10px;"></div>
                  </div>
-->
        
        </form>
      </div>
      <div class="modal-footer">
          <div class="form-row-last">
            <button class="submitbtn" id="submitbtn" style="background: teal; width: 100px; border-radius: 5px; color: white; border: none; padding: 5px; 10px">SUBMIT</button>
          </div>
      </div>
    </div>
    
  </div>
</div>
		<!-- Modal -->
<div class="modal fade" id="add-options" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header" style="background: teal">
        <h6 class="modal-title" id="exampleModalLabel" style="color: white">Answer Options</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="answer-options-add">
          <div style="display: flex;">
              <div style="padding: 8px">1</div>
              <div><input type="text" id="option-field" class="form-control"></div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button onclick="pushOption()" type="button" style="background: teal; color: white; height: 30px; width: 100px; border: none; border-radius: 5px;">Save</button>
      </div>
    </div>
  </div>
</div>
	</div>
</body>

<style>
  .title{
    font-size: 14px
  }
</style>
   

<script> 
        var trueAnswer = 'yes';
        var questionType =  $('#questionType').val()
        var optionsArray =  []

        $('#submitbtn').click(function(){
            submitQuestion()
        });


        function validate(){

        }

        //Generate answer options HTML for yes / no questions type
        function yesno(){
          $("#answer-options-container").html(`
                  <div style="margin-left: 15px">
                      <div style="display: flex; align-items: center">
                        <div style="font-size: 13px; color: grey">Correct answer:   </div>
                        <select id="YesNotrueAnswer" style="padding: 0 10px; border: none; border-radius: 10px; margin-left: 10px;font-size: 13px; color: teal">
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                      </div>
                  </div>
                `)
        }

        function multipleChoice(optsArray) {
          let i = 1  
         
            // Clear the existing content
            $("#answer-options-container").empty();

            // Loop through the optionsArray
            optsArray.forEach(option => {
                // Generate HTML for each option
                let optionHtml = `
                <div style="margin-left: 15px; margin-top: 5px">
                    <div style="display: flex; align-items: center">
                        <div style="font-size: 13px; color: grey">${i}. ${option}</div>
                        <select class="answer-select" style="padding: 0 10px; border: none; border-radius: 10px; margin-left: auto; font-size: 13px; color: teal">
                            <option value="${option}">Correct</option>
                            <option value="incorrect" selected>Incorrect</option>
                        </select>
                         <div style="display: flex; align-items: space-between; width: 50px">
                         <div style="width: 10px"></div>
                              <div class="fas fa-trash-alt" style="color: red; cursor: pointer"></div>
                              <div style="width: 6px"></div>
                              <div class="fas fa-edit" style="color: dodgerblue; cursor: pointer"></div>
                              <div style="width: 10px"></div></div>
                        </div>
                </div>

                `;
                
                // Append the generated HTML to the container
                $("#answer-options-container").append(optionHtml);
                i++
            });
        }
        //function to push answer options based on the question type selected
        function addAnswerOptions(selectedQuestionType){
        
          switch(selectedQuestionType){
             case '1': //yes or no
              yesno() //evoke yes / no function
             break
             case '2': //multiple choice of 1
              multipleChoice(optionsArray)
             break

          }
        }

        function optionEntryAppender(){
          $("#add-options").modal('show')
        }

        function pushOption(){
          var option = $('#option-field').val()
          optionsArray.push(option)
          $("#add-options").modal('hide')
          $('#option-field').val("")
          multipleChoice(optionsArray)
        }


        
        function submitQuestion(){
           var question = $('#question').val()
           var qType = $('#questionType').val()
           var allowedTime = $('#allowedTime').val()
           var allowedAttempts = $('#allowedAttempts').val()
           var correctAnswer =  $('.answer-select').val()
           var answers = optionsArray

       
           $.post(
                  'backend_operations.php',
                  {
                    'question':question,
                    'questionType':qType,
                    'allowedTime':allowedTime,
                    'allowedAttempts':allowedAttempts,
                    'correctAnswer':correctAnswer,
                    'answers': JSON.stringify(answers)
                  },
                  function(response){
                    if(reponse=="1"){
                      
                    }
                  }
                )
                $('#questionModal').modal('hide')
                
        }

</script>
</html>