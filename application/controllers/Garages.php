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
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('phone','Phone','required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('garages/create', $data);
                $this->load->view('templates/footer');                   
            } else {
                $this->garage_model->set_garage();
                redirect('garages');
            }    
        }
        public function delete($id)
        {
            $this->garage_model->delete_garage($id);
            redirect('garages');
        }
        public function edit($slug) 
        {           
            $data['garage'] = $this->garage_model->get_garages($slug);
            if (empty($data['garage'])) {
                show_404();
            }

            $data['title'] = 'Edit garage';
            $this->load->view('templates/header');
            $this->load->view('garages/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update()
        {
            $data['title'] = 'Update New Garage';

            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('location','Location','required');
            $this->form_validation->set_rules('phone','Phone','required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('garages/edit', $data);
                $this->load->view('templates/footer');                   
            } else {
                $this->garage_model->update_garage();
                redirect('garages');
            } 
        }
    }
