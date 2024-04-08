<?php 
    include "../dbconnect.php";

    $id = $_POST['id'];

    $sql ="SELECT * FROM questions WHERE id = '$id' ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);


    $questions_array = array();


    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $question = $row['question'];
            $answers = $row['answers'];
            $rightAnswer = $row['rightAnswer'];

            array_push($questions_array,["id"=>$id,"question"=>$question,"answers"=>$answers,"rightAnswer"=>$rightAnswer]);
        }
    }


    echo json_encode($questions_array);

?>