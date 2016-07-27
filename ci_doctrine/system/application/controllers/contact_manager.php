<?php

class Contact_Manager extends Controller {

    public function __construct() {
        parent::Controller();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('contact_form');
    }

	public function search(){
	  $vars['contacts'] = Doctrine::getTable('Contact')->findAll();
	  $this->load->view('contact_search',$vars);
	}

    public function submit() {

        if ($this->_submit_validate() === FALSE) {
            $this->index();
            return;
        }

        $u = new Contact();

        $u->contact_fname = $this->input->post('contact_fname');
        $u->contact_lname = $this->input->post('contact_lname');
		$u->contact_phone = $this->input->post('contact_phone');
        $u->contact_email = $this->input->post('contact_email');
		$u->contact_about = $this->input->post('contact_about');
       
        $u->save();
        $this->load->view('submit_success');
        
    }

    private function _submit_validate() {
        // validation rules
        $this->form_validation->set_rules('contact_fname', 'Contact_fname',
                'required|alpha_numeric|min_length[2]|max_length[12]');
        $this->form_validation->set_rules('contact_lname', 'Contact_lname',
                'required|alpha_numeric|min_length[2]|max_length[12]');
        $this->form_validation->set_rules('contact_phone', 'Contact_phone',
                'required|alpha_numeric|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('contact_email', 'Contact_email',
                'required|valid_email|unique[Contact.contact_email]');
        $this->form_validation->set_rules('contact_about', 'Contact_about',
                'required|min_length[2]|max_length[150]');
        return $this->form_validation->run();
    }

}

