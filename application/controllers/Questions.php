<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function index() {

        $sql = "SELECT * FROM questions ORDER BY id DESC";
        $query = $this->db->query($sql);

        $questions_array = array();

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $id = $row['id'];
                $question = $row['question'];
                $answers = $row['answers'];
                $rightAnswer = $row['rightAnswer'];

                $questions_array[] = array("id" => $id, "question" => $question, "answers" => $answers, "rightAnswer" => $rightAnswer);
            }
        }

        echo json_encode($questions_array);
    }
}
