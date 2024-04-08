<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CastleBet - Deposit Form</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background: teal" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quiz Settings:</h6>
                        <a class="collapse-item" href="questions_form.php">Questions</a>
                        <a class="collapse-item" href="cards.html">Schedule</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="tables.html" >
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Deposits</span>
                </a>
    
            </li>

            <!--  

                


            -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

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
                                <option value="2">Multiple (1)</option>
                                <option value="3">Multiple (3)</option>
                                <option value="4">Open Answer</option>
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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

                    <div>
                        <h5>DEPOSIT FORMS</h5>
                    </div>

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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Kaluba Chakanga</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
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
                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center">
                                    <img src="img/airtel.png" style="width: 30px; border-radius: 8px; margin-right: 10px">
                                    <h6 class="m-0 font-weight-bold text-primary">Airtel Deposit</h6>
                        
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height: 270px; overflow-y: auto">
                                    <form>
                                        <div style="padding: 20px; background: whitesmoke; border-radius: 10px; border: 0.5px solid white; font-size: 13px">
                                                <div style="display: flex">
                                                    <div style="padding: 10px 0; margin-right: 10px">+260</div>
                                                    <select class="form-control" style="width: 65px">
                                                        <option value="7">7</option>
                                                        <option value="97">97</option>
                                                    </select>
                                                    <div style="width:60px"><input type="text" class="form-control" pattern="{0-9}"></div> 
                                                    <input type="text" class="form-control" placeholder="e.g. 230033">
                                                </div>
                                                <div style="display: flex; margin-top: 10px">
                                                    <div>MP2402 ******</div>
                                                </div>
                                                <div style="display: flex; margin-top: 10px; ">
                                                    <div style="margin-right: 10px; padding:10px 0">AMOUNT</div><input type="text" class="form-control" placeholder="e.g. 230033">
                                                </div>
                                        </div>
                                        <div style="margin-top: 20px">
                                            <input type="submit" value="SUBMIT" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="width: 150px">
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
 
                        <!-- Pie Chart -->
                        <div class="col-xl-6 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center">
                                    <img src="img/mtn.jpg" style="width: 30px; border-radius: 8px; margin-right: 10px">
                                    <h6 class="m-0 font-weight-bold text-primary">MTN Deposit</h6>
                        
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div style="height: 230px; overflow-y: auto">
                                    <div style="padding: 20px; background: whitesmoke; border-radius: 10px; border: 0.5px solid white; font-size: 13px">
                                        <div style="display: flex">
                                            <div style="padding: 10px 0; margin-right: 10px">+260</div>
                                            <select class="form-control" style="width: 65px">
                                                <option value="6">6</option>
                                                <option value="9">96</option>
                                            </select>
                                            <div style="width:60px"><input type="text" class="form-control" pattern="[0-9]{1}"></div> 
                                            <input type="text" class="form-control" placeholder="e.g. 230033">
                                        </div>
                                        <div style="display: flex; margin-top: 10px">
                                            <div><input type="text" class="form-control" placeholder="*********"></div>
                                        </div>
                                        <div style="display: flex; margin-top: 10px; ">
                                            <div style="margin-right: 10px; padding:10px 0">AMOUNT</div><input type="text" class="form-control" placeholder="e.g. 200">
                                        </div>
                                   </div>
                                   <div style="margin-top: 20px">
                                        <button type="submit" onclick='' class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="width: 150px"> SUBMIT</a>
                                    </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-bar-demo.js"></script>
    <style>
  .title{
    font-size: 14px
  }
</style>
   

<script> 



</script>

</body>

</html>