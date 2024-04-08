<?php 
    include "../dbconnect.php";

    $sql = "SELECT * FROM user_history";
    $result = mysqli_query($conn,$sql);

    $array = array();

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $msisdn = $row['msisdn'];
            $quizStartTime = $row['quizStartTime'];
            $questionTime = $row['questionTime'];
            $questionsAsked = $row['questionsAsked'];
            $status = $row['status'];
            $dateTime  = $row['datetime'];

            array_push($array,["id"=>$id,"msisdn"=>$msisdn,"quizStartTime"=>$quizStartTime,"questionTime"=>$questionTime,"status"=>$status,"questionsAsked"=>$questionsAsked,"datetime"=>$dateTime]);
        }
    }


    echo json_encode($array);

?>