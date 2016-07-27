<?php

class Upload extends Controller {
	
	function Upload()
	{
		parent::Controller();
		$this->load->helper(array('form', 'url'));
	}
	
	function index()
	{	
		$this->load->view('upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$this->load->library('session');
		echo 'first test - ' . $this->session->userdata('item');
		$sid = $this->session->userdata('item');
		$config['upload_path'] = './images/' . $sid . '/';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '100';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			
			$this->load->view('subject_display', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$n = 0;

			foreach ($this->upload->data() as $item => $value) { if($n == 0) $filename = $value; $n++; } 

		$i = new Image();
		$i->title = $filename;
		$i->subject_id = $sid;
		$i->save();
	
			$filename;
			
//			echo $this->upload->data('file_name');

			
			// $this->load->view('submit_success');
			//$vars['filename'] = $this->upload->data->file_name;
			
			// $vars['filename'] = $filename;
			$vars['images'] = Doctrine::getTable('image')->findBySubject_id($sid);
			$vars['subject'] = Doctrine::getTable('subject')->findOneBySubject_id($sid);
			$vars['images'] = Doctrine::getTable('image')->findBySubject_id($sid);
			$vars['data'] = Doctrine::getTable('data')->findOneById($sid);
			
			//$this->load->view('subject_display', $vars);
			echo $sid;	
			redirect('subjectDisplay/index/' . $sid);
		


		
		}
	}	
}
?>