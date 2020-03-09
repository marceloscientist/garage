<?php 
    class Garage_model extends CI_Model
    {
        public function __construct() {
            $this->load->database();
        }
        public function get_garages($slug = FALSE)
        {
            if ($slug === FALSE) {
               // $this->db->order_by('id','DESC');
                $query = $this->db->get('garages');
                return $query->result_array();
            } 
            $query = $this->db->get_where('garages', array('slug' => $slug));
            return $query->row_array();
            
        }
        public function set_garage()
        {
            $slug = url_title($this->input->post('name'));
            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'location' => $this->input->post('location'),
                'phone' =>  $this->input->post('phone')  
            );
            
            return $this->db->insert('garages', $data);
        }
        public function delete_garage($id)
        {
            $this->db->where('id', $id);
            $this->db->delete('garages');
            return true;
        }
        public function update_garage()
        {
            $slug = url_title($this->input->post('name'));
            $data = array(
                'name' => $this->input->post('name'),
                'slug' => $slug,
                'location' => $this->input->post('location'),
                'phone' =>  $this->input->post('phone')  
            );
            
            $this->db->where('id', $this->input->post('id')); 
            return $this->db->update('garages', $data);
        }
    }
    