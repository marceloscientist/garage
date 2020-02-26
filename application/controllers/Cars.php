<?php 
    class Cars extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Cars';
            $data['cars'] = $this->car_model->get_cars();
             
            print_r($data['cars']);
            $this->load->view('templates/header');
            $this->load->view('cars/index', $data);
            $this->load->view('templates/footer');

        }
    }
    
    #33min => https://www.youtube.com/watch?v=I752ofYu7ag