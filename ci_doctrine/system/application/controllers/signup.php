<?php

class Signup extends Controller {

    public function __construct() {
        parent::Controller();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('signup_form');
    }

    public function submit() {

        if ($this->_submit_validate() === FALSE) {
            $this->index();
            return;
        }

        $u = new User();

        $u->username = $this->input->post('username');
        $u->user_fname = $this->input->post('user_fname');
        $u->user_lname = $this->input->post('user_lname');
        $u->email = $this->input->post('email');
        $u->password = $this->input->post('password');

        $u->save();

        $this->load->view('submit_success');
    }

    private function _submit_validate() {

        // validation rules
        $this->form_validation->set_rules('username', 'Username',
                'required|alpha_numeric|min_length[4]|max_length[12]|unique[User.username]');

        $this->form_validation->set_rules('user_fname', 'User_fname',
                'required|alpha_numeric|min_length[2]|max_length[12]|unique[User.user_fname]');

        $this->form_validation->set_rules('user_lname', 'User_lname',
                'required|alpha_numeric|min_length[2]|max_length[12]|unique[User.user_lname]');

        $this->form_validation->set_rules('email', 'E-mail',
                'required|valid_email|unique[User.email]');

        $this->form_validation->set_rules('password', 'Password',
			'required|min_length[6]|max_length[12]');

        $this->form_validation->set_rules('passconf', 'Confirm Password',
                        'required|matches[password]');

        return $this->form_validation->run();
    }

}
