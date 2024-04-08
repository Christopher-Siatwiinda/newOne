<?php 
    include '../dbconnect.php';
          
    if(isset($_POST['question'])){
        $question = mysqli_real_escape_string($conn,$_POST['question']);
        $questionType = $_POST['questionType'];
        $allowedTime = $_POST['allowedTime'];
        $allowedAttempts = $_POST['allowedAttempts'];
        $correctAnswer = mysqli_real_escape_string($conn,$_POST['correctAnswer']);
        $answers = mysqli_real_escape_string($conn,$_POST['answers']);

        $randomId = uniqid();


        $sql = "INSERT INTO `questions`(`question`, `questionType`, `answers`, `rightAnswer`, `allowedAttempts`, `allowedTime`) 
                    VALUES ('$question','$questionType','$answers','$correctAnswer','$allowedAttempts','$allowedTime')";


        if(mysqli_query($conn,$sql)){
            echo 1;
        }else{
            echo mysqli_error($conn);

        }


    }


?>