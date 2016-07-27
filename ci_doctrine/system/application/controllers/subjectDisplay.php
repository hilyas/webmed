<?php

class subjectDisplay extends Controller {
	
	public function __construct() 
	{
		parent::Controller();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}
	
	public function indextemp()
	{
		$sid = $this->session->userdata('item');
		$vars['appointments'] = Doctrine::getTable('appointment')->findBySubject_id($sid);
		$vars['subject'] = Doctrine::getTable('subject')->findOneBySubject_id($sid);
		$vars['images'] = Doctrine::getTable('image')->findBySubject_id($sid);
		$vars['data'] = Doctrine::getTable('data')->findOneById($sid);
		$this->load->view('subject_display', $vars);
	}
	
	public function index() 
	{
		$sid = $this->uri->segment(3);
		//$sid = 11111;
		$this->load->library('session');
		$this->session->unset_userdata('item'); 
		//$this->indextemp();
	
		$vars['appointments'] = Doctrine::getTable('appointment')->findBySubject_id($sid);
		$vars['subject'] = Doctrine::getTable('subject')->findOneBySubject_id($sid);
		$vars['images'] = Doctrine::getTable('image')->findBySubject_id($sid);
		$vars['data'] = Doctrine::getTable('data')->findOneBySubject_id($sid);
		$this->load->view('subject_display', $vars);
		
	}


	
}
