<?php 
    class Garages extends CI_Controller
    {
        public function index()
        {
            $data['title'] = 'Vehicles';
            $data['garages'] = $this->garage_model->get_garages();
             
            $this->load->view('templates/header');
            $this->load->view('garages/index', $data);
            $this->load->view('templates/footer');

        }

        public function view($slug = null)
        {
            $data['garage'] = $this->garage_model->get_garages($slug);
            if (empty($data['garage'])) {
                show_404();
            }

            $data['title'] = $data['garage']['name'];
            $this->load->view('templates/header');
            $this->load->view('garages/view', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $data['title'] = 'Create New Garage';

            $this->form_validation->set_rules('name','Name','required');
            $data['garage'] = $this->garage_model->set_garages();
             
            $this->load->view('templates/header');
            $this->load->view('garages/create', $data);
            $this->load->view('templates/footer');

            $this->load->view('garages/success');

        }
    }
