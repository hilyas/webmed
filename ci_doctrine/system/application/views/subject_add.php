<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Subject Search</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/subjectsearch.css" 
		type="text/css" media="all">
</head>
<body>

<!--<div id = "vsubject_search">
<p>	
	<label for="test">Test: </label>
</p>
</div>
-->
<div id="vsubject_search">
		
	<p class="heading">Add Subject Data</p>

	<?php echo form_open('subjectAdd/submit'); ?>

<?php echo validation_errors('<p class="error">', '</p>'); ?>
	<!--<p>-->
	<!--<p>-->
		<?php $genderOptions = array('male' => 'Male', 'female' => 'Female');?>
		<?php $handednessOptions = array('right' => 'Right', 'left' => 'Left');?>
		<?php $skincolorOptions = array('brown' => 'Brown', 'black' => 'Black', 'white' => 'White');?>
		<?php $eyecolorOptions = array('brown' => 'Brown', 'blue' => 'Blue', 'gray' => 'Gray');?>
		<?php $heightOptions = array('1-5' => '1-5', '6-10' => '6-10');?>
		<?php $weightOptions = array('1-5' => '1-5', '6-10' => '6-10', '11-20' => '11-20');?>
		<?php $bloodtypeOptions = array('o' => 'O', 'ab' => 'AB');?>
		<?php $languagesOptions = array('1' => '1', '2' => '2', '3' => '3', '4' => '4' );?>
		<?php $degreeOptions = array('none' => 'None', 'highschool' => 'Highschool', 'university' => 'University', 'masters' => 'Masters', 'phd' => 'PHD');?>
	
		<p class = "leftcolumn">
		<table border ="0" width="100%">
		<!--<p>-->
		<tr>
		<td >
			<label for="subject_id">SubjectID: </label>
			<?php echo form_input('subject_id',set_value('subject_id')); ?>
		</td>
		<td>
			<label for="gender">Gender: </label>
			<?php echo form_dropdown('gender', $genderOptions, 'male');?>
		</td>
		
		
		<td rowspan="9"><!--<table border="1"><tr><td>test</td></tr><tr><td>test</td></tr></table>-->
		<table border="1">
			<tr>
				<td><b>Description</b></td>
				<td><b>Yes</b></td>
				<td><b>No</b></td>
			</tr>
			<tr>
				<td><b>Heart Desease</td>
				<td><?php echo form_radio('hist_heart_dis','1')?></td>
				<td><?php echo form_radio('hist_heart_dis','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Stroke</td>
				<td><?php echo form_radio('hist_stroke','1')?></td>
				<td><?php echo form_radio('hist_stroke','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Diabetes</td>
				<td><?php echo form_radio('hist_diabetes','1')?></td>
				<td><?php echo form_radio('hist_diabetes','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Infections</td>
				<td><?php echo form_radio('hist_infectious_dis','1')?></td>
				<td><?php echo form_radio('hist_infectious_dis','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Alcoholism</td>
				<td><?php echo form_radio('hist_alcoholism','1')?></td>
				<td><?php echo form_radio('hist_alcoholism','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Dementia</td>
				<td><?php echo form_radio('hist_dementia','1')?></td>
				<td><?php echo form_radio('hist_dementia','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Smoking</td>
				<td><?php echo form_radio('hist_smoking','1')?></td>
				<td><?php echo form_radio('hist_smoking','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Depression</td>
				<td><?php echo form_radio('hist_depression','1')?></td>
				<td><?php echo form_radio('hist_depression','0', TRUE)?></td>
			</tr>
			<tr>
				<td><b>Cancer</td>
				<td><?php echo form_radio('hist_cancer','1')?></td>
				<td><?php echo form_radio('hist_cancer','0', TRUE)?></td>
			</tr>
		</table>
		
		
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td>
            <label for="fname">First name: </label>
			<?php echo form_input('fname',set_value('fname')); ?>
		</td>
		<td>
			<label for="handedness">Handedness: </label>
			<?php echo form_dropdown('handedness', $handednessOptions, 'right');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td>
		    <label for="lname">Last name: </label>
			<?php echo form_input('lname',set_value('lname')); ?>
		</td>
		<td>
			<label for="skincolor">Skin Color: </label>
			<?php echo form_dropdown('skin_color', $skincolorOptions, 'brown');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td>
		    <label for="address">Address: </label>
			<?php echo form_input('address',set_value('address')); ?>
		</td>
		<td>
			<label for="eyecolor">Eye Color: </label>
			<?php echo form_dropdown('eye_color', $eyecolorOptions, 'brown');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td>
		    <label for="email">Email: </label>
			<?php echo form_input('email',set_value('email')); ?>
		</td>
		<td>
			<label for="height">Height: </label>
			<?php echo form_dropdown('height', $heightOptions, '1-5');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td>
		    <label for="dob">Date of birth: </label>
			<?php echo form_input('dob',set_value('dob')); ?>
		</td>
		<td>
			<label for="weight">Weight: </label>
			<?php echo form_dropdown('weight', $weightOptions, '1-5');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td></td>
		<td>
			<label for="bloodtype">Blood Type: </label>
			<?php echo form_dropdown('blood_type', $bloodtypeOptions, 'o');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td></td>
		<td>
			<label for="languages"># of Languages Spoken: </label>
			<?php echo form_dropdown('number_languages', $languagesOptions, '1');?>
		</td>
		<!--<td></td>-->
		</tr>
		<tr>
		<td></td>
		<td>
			<label for="degree">Degree: </label>
			<?php echo form_dropdown('degree', $degreeOptions, 'crazy');?>
		</td>
		<!--<td></td>-->
		</tr>
		</table>
	</p>
	
	<!--<p class = "rightcolumn">
		<table border = "1">
			<tr>
				<td>Description</td>
				<td>Yes</td>
				<td>No</td>
			</tr>
			<tr>
				<td>Heart Desease</td>
				<td><?php echo form_radio('heart')?></td>
				<td><?php echo form_radio('heart')?></td>
			</tr>
			<tr>
				<td>Stroke</td>
				<td><?php echo form_radio('stroke')?></td>
				<td><?php echo form_radio('stroke')?></td>
			</tr>
			<tr>
				<td>Diabetes</td>
				<td><?php echo form_radio('diabetes')?></td>
				<td><?php echo form_radio('diabetes')?></td>
			</tr>
			<tr>
				<td>Infections</td>
				<td><?php echo form_radio('infections')?></td>
				<td><?php echo form_radio('infections')?></td>
			</tr>
			<tr>
				<td>Alcoholism</td>
				<td><?php echo form_radio('alcoholism')?></td>
				<td><?php echo form_radio('alcoholism')?></td>
			</tr>
			<tr>
				<td>Dementia</td>
				<td><?php echo form_radio('dementia')?></td>
				<td><?php echo form_radio('dementia')?></td>
			</tr>
			<tr>
				<td>Smoking</td>
				<td><?php echo form_radio('smoking')?></td>
				<td><?php echo form_radio('smoking')?></td>
			</tr>
			<tr>
				<td>Depression</td>
				<td><?php echo form_radio('depression')?></td>
				<td><?php echo form_radio('depression')?></td>
			</tr>
			<tr>
				<td>Cancer</td>
				<td><?php echo form_radio('cancer')?></td>
				<td><?php echo form_radio('cancer')?></td>
			</tr>
		</table>-->
	</p>
	<?php echo form_submit('submitAdd', 'Submit');?><br><br>
		    
                <?php echo anchor('subjectSearch', 'Search Subjects'); ?><br>
            

			
                <?php echo anchor('contact_manager', 'Add Contacts'); ?><br>
            
                <?php echo anchor('contact_manager/search', 'Search Contacts'); ?>
            


	</form>
</div>

</body>
</html>