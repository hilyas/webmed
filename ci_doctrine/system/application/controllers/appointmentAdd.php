<?php
class AppointmentAdd extends Controller{

  public function __construct() {
	parent::Controller();
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
  }

  public function index() {
	$this->load->view('appointment_add');
  }

  public function submit(){

	if ($this->_submit_validate() === FALSE) {
            $this->index();
            return;
        }

	$u = new Appointment();

	$u->subject_id = $this->input->post('subject_id');
	$u->staff_id = $this->input->post('staff_id');
	$u->datetime = $this->input->post('datetime');
	$u->comment = $this->input->post('comment');
	$u->active = $this->input->post('active');
    
	$u->save();

	$this->load->view('submit_success');
	redirect("http://localhost/webmed/ci_doctrine/index.php/subjectDisplay/index/" . $u->subject_id);
	//$this->load->view('vsubject_search');
  }

 private function _submit_validate() {

        // validation rules
        $this->form_validation->set_rules('datetime', 'Datetime',
                'required|min_length[5]|max_length[12]|unique[Appointment.datetime]');
		$this->form_validation->set_rules('subject_id', 'Subject_id',
                'required|alphanumeric|min_length[5]|max_length[5]|unique[Appointment.datetime]');
        return $this->form_validation->run();
    }

}