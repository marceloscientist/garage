<?php 
    class Vehicle_model extends CI_Model
    {
        public function __construct() {
            $this->load->database();
        }
        public function get_vehicles($slug = FALSE)
        {
            if ($slug === FALSE) {
                $query = $this->db->get('vehicles');
                return $query->result_array();
            } 
            $query = $this->db->get_where('vehicles', array('slug' => $slug));
            return $query->row_array();
            
        }
    }
    