<?php 
    class Garage_model extends CI_Model
    {
        public function __construct() {
            $this->load->database();
        }
        public function get_garages($slug = FALSE)
        {
            if ($slug === FALSE) {
                $query = $this->db->get('garages');
                return $query->result_array();
            } 
            $query = $this->db->get_where('garages', array('slug' => $slug));
            return $query->row_array();
            
        }
        public function set_garage($data  = null)
        {
            
        }
    }
    