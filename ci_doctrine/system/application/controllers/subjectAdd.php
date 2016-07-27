<?php
class SubjectAdd extends Controller {

    public function __construct() {
        parent::Controller();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('subject_add');
    }

    public function submit() {

        if ($this->_submit_validate() === FALSE) {
            $this->index();
            return;
        }

        $u = new Subject();

        $u->subject_id = $this->input->post('subject_id');
        $u->fname = $this->input->post('fname');
		$u->lname = $this->input->post('lname');
        $u->address = $this->input->post('address');
		$u->email = $this->input->post('email');
		$u->dob = $this->input->post('dob');
       
        $u->save();
		mkdir("./images/" . $u->subject_id . '/' , 0700);
	   

		$v = new Data();

	  	$v->subject_id = $this->input->post('subject_id');
        $v->photo = $this->input->post('photo');
        $v->gender = $this->input->post('gender');
		$v->handedness = $this->input->post('handedness');
        $v->skin_color = $this->input->post('skin_color');
		$v->eye_color = $this->input->post('eye_color');
       	$v->height = $this->input->post('height');
		$v->weight = $this->input->post('weight');
		$v->blood_type = $this->input->post('blood_type');
		$v->hist_heart_dis = $this->input->post('hist_heart_dis');
		$v->hist_stroke = $this->input->post('hist_stroke');
		$v->hist_diabetes = $this->input->post('hist_diabetes');
		$v->hist_infectious_dis = $this->input->post('hist_infectious_dis');
		$v->hist_alcoholism = $this->input->post('hist_alcoholism');
		$v->hist_dementia = $this->input->post('hist_dementia');
		$v->hist_smoking = $this->input->post('hist_smoking');
		$v->hist_depression = $this->input->post('hist_depression');
		$v->hist_cancer = $this->input->post('hist_cancer');
		$v->degree = $this->input->post('degree');
		$v->number_languages = $this->input->post('number_languages');
		$v->number_images = $this->input->post('number_images');

        $v->save();
		
		$this->load->view('submit_success');
        
    }

    private function _submit_validate() {


        // validation rules
        $this->form_validation->set_rules('subject_id', 'Subject_id',
                'required|alpha_numeric|min_length[5]|max_length[5]|unique[Subject.subject_id]');
		//  $this->form_validation->set_rules('fname', 'Fname',
        //         'required|alpha_numeric|min_length[2]|max_length[12]|unique[Subject.fname]');
        // $this->form_validation->set_rules('lname', 'Lname',
        //         'required|alpha_numeric|min_length[10]|max_length[10]|unique[Contact.contact_phone');
        // $this->form_validation->set_rules('contact_email', 'Contact_email',
        //         'required|valid_email|unique[Contact.contact_email]');
        // $this->form_validation->set_rules('contact_about', 'Contact_about',
        //         'required|alpha_numeric|min_length[2]|max_length[12]|unique[Contact.contact_about]');
         return $this->form_validation->run();
    }

}
