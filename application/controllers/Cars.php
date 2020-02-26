<?php 
    class Cars extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Cars';
            
            $this->load->view('templates/header');
            $this->load->view('cars/index', $data);
            $this->load->view('templates/footer');

        }
    }
    