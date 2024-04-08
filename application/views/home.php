    <html>
        <?php 
            
            //$user_id = $this->session->userdata('user_id');
        
        ?>
    <?php $this->load->View($head); ?>
    <!-- / head -->
<body id="page-top">
        <div id="wrapper">
            <!-- Sidebar -->
            <?php $this->load->View($sidebar); ?>  
            <!-- End of Sidebar -->
            <!-- Content -->
            <!-- <?php //$this->load->View($content); ?> -->
              <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        
        <!-- EDIT QUESTION MODAL -->
        <div class="modal fade" id="editQuestionModal" tabindex="-1" aria-labelledby="editquestionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background: teal">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white">Edit Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 400px; width: 500px">
                <form class="form-detail" action="#" method="post">
                <div class="form-row">
                    <label for="edit-question" class="title">Question</label>
                    <textarea name="edit-question" id="edit-question" class="input-text form-control" style="width: 100%; height: 100px; padding: 16px" placeholder="Enter Question" required></textarea>
                </div>
                <br>
                    <div style="display: flex; background-color: whitesmoke; padding: 10px 15px; border-radius: 10px">
                        <div class="" style="flex: 1; margin-right: 10px;">
                            <div class="title">Question Type:</div>
                            <select class="form-control" id="edit-questionType" style="height: 50px;" onchange="addAnswerOptions(this.value)">
                                <option value="1">Yes / No</option>
                                <option value="3">Multiple Choice</option>
                            </select>
                        </div>
                        <div style="flex: 1;">
                            <div class="title">Allowed Time:</div>
                            <input type="text" class="form-control" id="edit-allowedTime">
                        </div>
                        <div style="flex: 1;">
                            <div class="title">Allowed Attempts:</div>
                            <input type="text" class="form-control" id="edit-allowedAttempts">
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
                        <div id="edit-answer-options-container"> </div>
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
                    <button class="editsubmitbtn" id="editsubmitbtn" style="background: teal; width: 100px; border-radius: 5px; color: white; border: none; padding: 5px; 10px">SAVE</button>
                </div>
            </div>
            </div>
            
        </div>
        </div>
                <!-- Modal -->
        <div class="modal fade" id="edit-add-options" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                <div class="modal-header" style="background: teal">
                    <h6 class="modal-title" id="exampleModalLabel" style="color: white">Answer Options</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="edit-answer-options-add">
                    <div style="display: flex;">
                        
                        <div><input type="text" id="edit-option-field" class="form-control"></div>
                        <div style="padding: 8px"><input type="check"></div>
                    </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="editpushOption()" type="button" style="background: teal; color: white; height: 30px; width: 100px; border: none; border-radius: 5px;">Save</button>
                </div>
                </div>
            </div>
        </div>
        <!-- END OF EDIT MODAL-->



    <div class="modal fade" id="questionModal" tabindex="-1" aria-labelledby="questionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header" style="background: teal">
                <h5 class="modal-title" id="exampleModalLabel" style="color: white">New Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="$('#questionModal').modal('hide')">x</button>
            </div>
            <div class="modal-body" style="height: 400px; width: 500px">
                <form class="form-detail" action="#" method="post">
                <div class="form-row">
                    <label for="question" class="title">Question</label>
                    <textarea id="question" class="input-text form-control question" style="width: 100%; height: 100px; padding: 16px" placeholder="Enter Question" required></textarea>
                </div>
                <br>
                    <div style="display: flex; background-color: whitesmoke; padding: 10px 15px; border-radius: 10px">
                        <div class="" style="flex: 1; margin-right: 10px;">
                            <div class="title">Question Type:</div>
                            <select class="form-control" id="questionType" style="height: 37px;" onchange="addAnswerOptions(this.value)">
                                <option value="1">Yes / No</option>
                                <option value="2">Multiple Choice</option>
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
                    <button class="submitbtn" id="submitbtn" style="background: teal; width: 100px; border-radius: 5px; color: white; border: none; padding: 5px; 10px">SAVE</button>
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
                        <div><input type="text" id="option-field" class="form-control"></div>
                        <div style="padding: 8px; font-size: 8px">Is right? <input type="checkbox" onclick='correctAnswer(`${$("#option-field").val()}`)'></div>
                    </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="pushOption()" type="button" style="background: teal; color: white; height: 30px; width: 100px; border: none; border-radius: 5px;">Save</button>
                </div>
                </div>
            </div>
        </div>

        <!-- DELETE PROMPT MODAL -->
                        <!-- Modal -->
        <div class="modal slide" id="delete-prompt" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                <div class="modal-header" style="background: teal">
                    <h6 class="modal-title" id="exampleModalLabel" style="color: white; text-align: center">Are you sure you want to delete question?</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="question-title">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button  onclick="deleteQuestion()" type="button" style="background: teal; color: white; height: 30px; width: 100px; border: none; border-radius: 5px;">Confirm</button>
                </div>
                </div>
            </div>
        </div>


                <!-- Modal -->
                <div class="modal fade" id="questionDetailsModal" tabindex="-1" aria-labelledby="questionDetailsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                <div class="modal-header" style="background: teal">
                    <h6 class="modal-title" id="exampleModalLabel" style="color: white">Question Details</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="question-details">
            

                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="editpushOption()" type="button" style="background: teal; color: white; height: 30px; width: 100px; border: none; border-radius: 5px;">Save</button>
                </div>
                </div>
            </div>
        </div>
        <!-- END OF EDIT MODAL-->


            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <h1 class="h4 mb-0 text-gray-800">QUIZ QUESTIONS</h1>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $fullname;?></span>
                                <img class="img-profile rounded-circle"
                                    src="/assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                 <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Recorded Questions</h6>
                                    <div class="dropdown no-arrow">
                                    <a href="#" onclick='$("#questionModal").modal("show")' class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-add fa-sm text-white-50"></i> New Question</a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" onclick='$("#questionModal").modal("show")' style="cursor: pointer">Add Questions</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" id="recorded-questions" style="height: 360px; overflow-y: auto">
                                   
                                </div>
                            </div>
                        </div>

                       <!--
                            USER HISTORY

                             <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                              
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">User History</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="card-body">
                                    <div style="height: 320px; overflow-y: auto">
                                       <div id="users_history" >
                                       </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>

                        -->
                    </div>

            

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Castle Holdings 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>



            <!-- Content -->
            <!-- Footer -->

            <!-- End of Footer -->
</body>
  <!-- Bootstrap core JavaScript-->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/js/sb-admin-2.min.js"></script>

    <style>
        .title{ 
            font-size: 14px
        }
    </style>
   

<script> 
        var trueAnswer = 'yes';
        var questionType =  $('#questionType').val()
        var optionsArray =  []
        var questionID = ''
        var correctAnswer1 = ''

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
                        <div style="display: flex; align-items: space-between">
                            <div style="font-size: 13px; color: ${correctAnswer1 == option? "teal":"grey"} ">${i}. ${option}</div>
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
          console.log(selectedQuestionType)
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
           var correctAnswer = correctAnswer1
           var answers = optionsArray

       
           $.post(
                  'AddQuestion/insert_question',
                  {
                    'question':question,
                    'questionType':qType,
                    'allowedTime':allowedTime,
                    'allowedAttempts':allowedAttempts,
                    'correctAnswer':correctAnswer,
                    'answers': JSON.stringify(answers)
                  },
                  function(response){
                    fetchQuestions()
                    if(reponse=="1"){
                      
                    }
                  }
                )
                $('#questionModal').modal('hide')
                
        }


        function fetchQuestions(){
            
            $.post('questions',function(response){
                var data = JSON.parse(response);
    
                if(data.length>0){
                    $("#recorded-questions").html('')
                    $('#recorded-questions').html(`
                    <div class="table-responsive" >
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr style="font-size: 13px">
                                            <th>SN</th>
                                            <th>Question</th>
                                            <th>Right Answer</th>
                                            <th>Answer Options</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="append-rows">
                                  
                                 
                    
                    `)
                    for(let i = 0; i<data.length; i++){

                        var arr = JSON.parse(data[i].answers);
                        var answers = arr.join(', ');

                        $("#append-rows").append(`

                            <tr style="font-size: 13px">
                                <td>${i+1}</td>
                                <td>${data[i].question}</td>
                                <td>${data[i].rightAnswer}</td>
                                <td>${answers}</td>
                                <td><i class="fa fa-trash" style="color: red; cursor: pointer" onclick="openDeletePrompt(${data[i].id}, '${data[i].question}')"></i>
                                <i class="fa fa-edit" style="color: dodgerblue; margin-left: 10px; cursor: pointer" onclick="openEditQuestionPrompt(${data[i].id}, '${data[i].question}')"></i>
                                </td>
                                    
                            </tr>
                        
                        `);
                    }

                    $('#recorded-questions').append(`</tbody>
                                </table>
                            </div>`)
                 
                }else{
                    $("#recorded-questions").html(`
                    <div style="height: 100%;display: flex; align-items: center; justify-content: center">
                        <img src="img/not-found.png" style="width: 90px">
                       
                    </div> `)
                }

            })
        }

       function questionDetails(data){

           
            $.post('<?php echo base_url()?>assets/fetch_question_by_id.php',{'id':data},function(response){
                var questionData = JSON.parse(response)[0]

                $('#question-details').html(`
                    <div style="font-size: 12px"><span>Question: </span> <span style="color: darkblue">${questionData.question}</span></div>
                    <div style="font-size: 12px"><span>Right Answer: </span> <span style="color: darkblue">${questionData.rightAnswer}</span></div>
                    <div style="font-size: 12px"><span>Options: </span> <span style="color: darkblue">${questionData.answers}</span></div>
                `)

    
               $('#questionDetailsModal').modal('show')

            })
        }

        function openDeletePrompt(id, question){

           questionID = id
           $('#question-title').text(question)
           $('#delete-prompt').modal('show')
           
        }

        function openEditQuestionPrompt(id, question){

            questionID = id
        
            $('#question').val(question)
            $('#editQuestionModal').modal('show')

        }

        function deleteQuestion(){ 
        
            $.post('AddQuestion/delete_question',{"id":questionID},function(response){
                fetchQuestions()   
            })
            
    
           $('#delete-prompt').modal('hide')
           
        }

        function correctAnswer(value){
            correctAnswer1 = value
            console.log(value)
        }


        function fetchUsersHistory(){
            $.post('<?php echo base_url()?>assets/fetch_user_history.php',function(response){
                $('#users_history').html('')
                var usershistory = JSON.parse(response)

                for(let i = 0; i < usershistory.length; i++){
                    $('#users_history').append(`
                        <div style="font-size: 11px; padding: 8px 0; border-bottom: whitesmoke 1px solid; display: flex">
                            <div style="width: 30px">
                                <i class="fa fa-history"></i>
                            </div>
                            <div>
                                 <span style="font-weight: bolder">${usershistory[i].msisdn}</span>
                                 <div style="font-size: 10px; color: teal; font-weight: bold">
                                    <span style="font-size: 10px; color: teal">Status:</span><span> ${usershistory[i].status.toUpperCase()}</span>    |    
                                    <span> ${usershistory[i].datetime.toUpperCase()}</span>
                                 </div>
                            </div>
                              
                        </div>
                    
                    `)
                }

                console.log(usershistory[1].msisdn)
            })
        }

        setInterval(() => {
            fetchUsersHistory()
        }, 1000);

        fetchQuestions()

</script>

</html>


