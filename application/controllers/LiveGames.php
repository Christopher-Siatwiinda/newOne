<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class LiveGames extends CI_Controller {
      
      public function __construct() {
            parent::__construct();
            $this->load->helper('url'); // Load URL helper
            $this->load->library('session');
           $this->load->model('adminmodel');
      }

      public function index($page='livegames') 
      {
 
            //  echo "quiz";
            $data['sidebar'] = 'components/sidebar';
            //  $data['content'] = 'home_content';
            $data['head'] = 'components/head';
            // Retrieve user ID from session
            $user_id = $this->session->userdata('user_id'); 

            // Retrieve admin data based on user ID
             $admin_data = $this->adminmodel->getAdminData($user_id);
          

            if ($admin_data) {
                // If admin data is found, prepare array with required fields
                $data['fullname'] = $admin_data->fullname;

                // Load the view and pass the data
                $this->load->view($page,$data);  
            }else{
                $this->load->view($page,$data); 
            }

      
      }
    }
?>
