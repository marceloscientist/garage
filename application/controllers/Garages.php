<?php 
    class Garages extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Vehicles';
            $data['garages'] = $this->garage_model->get_garages();
             
            print_r($data['garages']);
            $this->load->view('templates/header');
            $this->load->view('garages/index', $data);
            $this->load->view('templates/footer');

        }
    }
