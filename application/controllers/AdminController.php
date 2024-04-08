<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct() { 
        parent::__construct();
        // Load necessary libraries and models
        $this->load->library('session');
        $this->load->model('Admin_model');
    }

    public function getAdminData() { 
        // Retrieve user ID from session
        $user_id = $this->session->userdata('user_id');

        // Check if user is logged in
        if ($user_id) {
            // Retrieve admin data based on user ID
            $admin_data = $this->Admin_model->getAdminData($user_id);

            if ($admin_data) {
                // If admin data is found, prepare array with required fields
                $admin_info = array(
                    'fullname' => $admin_data->fullname,
                    'email' => $admin_data->email,
                    'password' => $admin_data->password // Note: Password should not be stored in plain text in production
                );

                // Return admin info as JSON response
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($admin_info));
            } else {
                // If admin data not found, return error response
                $this->output
                    ->set_status_header(404)
                    ->set_output(json_encode(array('message' => 'Admin data not found')));
            }
        } else {
            // If user is not logged in, return unauthorized error response
            $this->output
                ->set_status_header(401)
                ->set_output(json_encode(array('message' => 'Unauthorized'))); 
        }
    }
}
