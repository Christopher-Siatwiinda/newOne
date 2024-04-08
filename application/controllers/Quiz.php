<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

	public function index()
	{
  	//  echo "quiz";
    	$this->load->view('quizview');
	}
    public function test()
	{
  	 echo "quiz";
    //	$this->load->view('quizview');
	}
}
?>
