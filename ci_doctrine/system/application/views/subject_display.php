<!DOCTYPE html>
<html lang="en">

<head>  
<?php 
//redirect('/subjectDisplay');
?>
<?php 
	

	$subject_id = $subject->subject_id;
	

	/*$sid = $this->session->userdata('item');
	$vars['subject'] = Doctrine::getTable('subject')->findOneBySubject_id($sid);
		$vars['images'] = Doctrine::getTable('image')->findBySubject_id($sid);
		$vars['data'] = Doctrine::getTable('data')->findOneBySubject_id($sid);
	*/

	
	$image_path = 'http://localhost/webmed/ci_doctrine/images/' . $subject_id . '/';
?>


        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php echo $subject->fname . ' ' . $subject->lname ?></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
              type="text/css" media="all">
		<!-- include the Tools --> 
	<script src="<?php echo base_url(); ?>/js/jquery.tools.min.js"></script> 
</head>
<body>

<img src="
<?php 
	$profile_string = $image_path . 'profile.jpg';
	$profile2f_string = base_url() . 'images/profile2f.gif';
	$profile2m_string = base_url() . 'images/profile2m.gif';

echo $profile_string;

?>
">

	<div class="heading"><?php echo $subject->fname . ' ' . $subject->lname ?></p>

<ul class="tabs"> 
	<li><a href="#">Personal</a></li> 
	<li><a href="#">Medical Data</a></li> 
	<li><a href="#">Images</a></li> 
	<li><a href="#">Appointments</a></li>
</ul> 
 
<!-- tab "panes" --> 
<div class="panes"> 
	<div id="subject_display">
		

		<p class="heading">Subject Data:  <?php echo $subject->fname . ' ' . $subject->lname . ' ' ?></p>
	
			<table width="100%">

			<tr><td>Address:  </td><td><?php echo $subject->address; ?></td></tr>
			<tr><td>Email:  </td><td><?php echo $subject->email; ?></td></tr>
			<tr><td>Date of Birth:</td><td><?php echo $subject->dob; ?></td></tr>

			
			</table>
		</p>

	</div>

	<div id="data_display">

		<p class="heading">Subject Data:  <?php echo $subject->fname . ' ' . $subject->lname; ?></p>
	

		<p class = "leftcolumn">
		
		<table border ="0" width="50%">

			<tr><td>Gender:  </td><td> <?php echo $data->gender; ?></td></tr>
			<tr><td>Handedness:  </td><td><?php echo $data->handedness; ?></td></tr>
			<tr><td>Skin Color:</td><td><?php echo $data->skin_color; ?></td></tr>
			<tr><td>Eye Color:  </td><td> <?php echo $data->eye_color; ?></td></tr>
			<tr><td>Height:  </td><td> <?php echo $data->height; ?></td></tr>
			<tr><td>Weight:  </td><td> <?php echo $data->weight; ?></td></tr>
			<tr><td>Blood Type:  </td><td> <?php echo $data->blood_type; ?></td></tr>
			<tr><td>History of Heart Disease:  </td><td> <?php echo $data->hist_heart_dis; ?></td></tr>
			<tr><td>History of Stroke:  </td><td> <?php echo $data->hist_stroke; ?></td></tr>
			<tr><td>History of Diabetes:  </td><td> <?php echo $data->hist_diabetes; ?></td></tr>
			<tr><td>History of Infectious Disease:  </td><td> <?php echo $data->hist_infectious_dis; ?></td></tr>
			<tr><td>History of Alcoholism:  </td><td> <?php echo $data->hist_alcoholism; ?></td></tr>
			<tr><td>History of Dementia:  </td><td> <?php echo $data->hist_dementia; ?></td></tr>
			<tr><td>History of Smoking:  </td><td> <?php echo $data->hist_smoking; ?></td></tr>
			<tr><td>History of Depression:  </td><td> <?php echo $data->hist_depression; ?></td></tr>
			<tr><td>History of Cancer:  </td><td> <?php echo $data->hist_cancer; ?></td></tr>
			<tr><td>Degree:  </td><td> <?php echo $data->hist_heart_dis; ?></td></tr>
			<tr><td>Number of Languages Spoken:  </td><td> <?php echo $data->hist_heart_dis; ?></td></tr>

		</table>
		</p>
	</div>

	<div id="image_display">

		<table border ="0" width="100%">
			<tr>
			<?php foreach($images as $image): 
				if($image->title != 'profile.jpg')
				echo '<td><img src="' . $image_path . $image->title . '"></td>';
			?>
			<?php endforeach; ?>
			</tr>
			<tr>
			<?php foreach($images as $image):
			if($image->title != 'profile.jpg')
				echo '<td>' . $image->title . '</td>';
			?> 
			<?php endforeach; ?>
			</tr>
			<tr><td>Upload an image.</td></tr>
			<tr><td>

			<?php echo form_open_multipart('upload/do_upload');?>

			<input type="file" name="userfile" size="20000" />

			<br /><br />
			<?php $this->load->library('session'); $this->session->set_userdata('item',$subject_id); ?>

			<input type="submit" value="upload" />
			</form>
			</td>
			</tr>
		</table>
	</div>

	<div id="appointment_display">

<!--<h3><?php echo $subject->fname . "'s Appointments" ?></h3>-->

		<table border ="0" width="100%">

			
			<?php  foreach($appointments as $appointment): 
				echo 
					'<tr class="appt_header" ><td>  Staff ID </td>
						<td> Date/Time </td>
						<td> Comment </td></tr>' .
					'<tr><td>  ' . $appointment->staff_id . ' </td>
						<td> ' . $appointment->datetime . ' </td>
						<td> ' . $appointment->comment . ' </td>	</tr> '; ?>
			<?php endforeach; ?>
			
			
			
		</table>
<br/><br/>
	<a href="http://localhost/webmed/ci_doctrine/index.php/appointmentAdd">Add an appointment.</a>
	</div>

</div>
<a class="heading" href="http://localhost/webmed/ci_doctrine/index.php/subjectSearch">Back to home page.</a>
<script> 
 
// perform JavaScript after the document is scriptable.
$(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	$("ul.tabs").tabs("div.panes > div");
});
</script> 




</body>
</html>