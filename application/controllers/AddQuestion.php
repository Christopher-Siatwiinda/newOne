<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddQuestion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary models, libraries, helpers, etc. if needed
        $this->load->database(); // Load database library
        $this->load->library('session');

    }

    public function insert_question() {
        if ($this->input->post('question')) {
            // Retrieve data from POST request
            $question = $this->input->post('question');
            $questionType = $this->input->post('questionType');
            $allowedTime = $this->input->post('allowedTime');
            $allowedAttempts = $this->input->post('allowedAttempts');
            $correctAnswer = $_POST['correctAnswer']; 
            $answers = $this->input->post('answers');

            // Escape user inputs to prevent SQL injection
            $question = $this->db->escape_str($question);
            //$correctAnswer = $this->db->escape_str($correctAnswer);
            $answers = $_POST['answers']; 

            // Generate a unique ID
            $randomId = uniqid();

            // Prepare data for insertion
            $data = array(
                'question' => $question,
                'questionType' => $questionType,
                'answers' => $answers,
                'rightAnswer' => $correctAnswer,
                'allowedAttempts' => $allowedAttempts,
                'allowedTime' => $allowedTime
            );

            // Insert data into the database
            if ($this->db->insert('questions', $data)) {
                echo 1; // Success
            } else {
                echo $this->db->error(); // Display database error
            }
        }
    }

    public function delete_question() {
        // Get the ID of the question to be deleted from POST request
        $id = $this->input->post('id');

        // Escape the ID to prevent SQL injection
        $id = $this->db->escape_str($id);

        // Prepare the SQL query
        $sql = "DELETE FROM questions WHERE id = '$id'";

        // Execute the query
        if ($this->db->query($sql)) {
            echo 1; // Success
        } else {
            echo $this->db->error(); // Display database error
        }
    }

    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');


        // Query to select user based on email
        $query = $this->db->get_where('admin', array('email' => $email));

        if($query->num_rows()===1){
            $user = $query->row();

           // $this->session->set_userdata('user_id', $user->id);

           $this->session->set_userdata('user_id', $user->id);
           
            echo 1;
        }else{
            echo 0;
        }

    }
    
    
}
