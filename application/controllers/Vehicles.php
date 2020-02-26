<?php 
    class Vehicles extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Vehicles';
            $data['vehicles'] = $this->vehicle_model->get_vehicles();
             
            print_r($data['vehicles']);
            $this->load->view('templates/header');
            $this->load->view('vehicles/index', $data);
            $this->load->view('templates/footer');

        }
    }
    
    #33min => https://www.youtube.com/watch?v=I752ofYu7ag