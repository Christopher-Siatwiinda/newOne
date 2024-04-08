<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Load necessary database library
        $this->load->database();
    }

    public function getAdminData($user_id) {
        // Query the admin table based on the user ID
        $query = $this->db->get_where('admin', array('id' => $user_id));

        // Check if any rows are returned
        if ($query->num_rows() > 0) {
            // If rows are found, return the first row as an object
            return $query->row();
        } else {
            // If no rows are found, return false
            return false;
        }
    }
}
