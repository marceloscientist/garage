<?php 
    class Car_model extends CI_Model
    {
        public function __construct() {
            $this->load->database();
        }
        public function get_cars($slug = FALSE)
        {
            if ($slug === FALSE) {
                $query = $this->db->get('cars');
                return $query->result_array();
            } 
            $query = $this->db->get_where('cars', array('slug' => $slug));
            return $query->row_array();
            
        }
    }
    