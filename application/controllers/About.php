<?php 
    class About extends CI_Controller
    {
        $data['title'] = 'About';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/about', $data);
        $this->load->view('templates/footer');    
    }
    