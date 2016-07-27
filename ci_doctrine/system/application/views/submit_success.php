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
	<p class="heading"> Submit success! </p>
	<p class="heading">Search Subject Data</p>

	<?php echo form_open('subjectSearch/search'); ?>
		<?php $genderOptions = array('none' => 'None', 'male' => 'Male', 'female' => 'Female');?>
		<?php $handednessOptions = array('none' => 'None', 'right' => 'Right', 'left' => 'Left');?>
		<?php $skincolorOptions = array('none' => 'None', 'brown' => 'Brown', 'black' => 'Black', 'white' => 'White');?>
		<?php $eycolorOptions = array('none' => 'None', 'brown' => 'Brown', 'blue' => 'Blue', 'gray' => 'Gray');?>
		<?php $heightOptions = array('none' => 'None', '1-5' => '1-5', '6-10' => '6-10');?>
		<?php $weightOptions = array('none' => 'None', '1-5' => '1-5', '6-10' => '6-10', '11-20' => '11-20');?>
		<?php $bloodtypeOptions = array('none' => 'None', 'o' => 'O', 'ab' => 'AB');?>
		<?php $languagesOptions = array('none' => 'None', '1' => '1', '2' => '2', '3' => '3', '4' => '4' );?>
		<?php $degreeOptions = array('none' => 'None', 'highschool' => 'Highschool', 'university' => 'University', 'masters' => 'Masters', 'phd' => 'PHD');?>
	
		<p class = "leftcolumn">
		<table border ="0" width="100%">
			<tr>
				<td>
					<?php echo form_error('subjectid','<div class="error">','</div>'); ?>
					<label for="subjectid"><input type="radio" name="radioTextFields" value="subject_id" CHECKED/> SubjectID: </label>
					<?php echo form_input('subjectid',set_value('subjectid')); ?>
					
				</td>
				<td>
					<label for="gender">Gender: </label>
					<?php echo form_dropdown('gender', $genderOptions, 'none');?>
				</td>
				<td rowspan="9">
					<table border="1">
						<tr>
							<td><b>Description</b></td>
							<td><b>Yes</b></td>
							<td><b>No</b></td>
						</tr>
						<tr>
							<td><b>Heart Desease</td>
							<td><?php echo form_radio('heart','1')?></td>
							<td><?php echo form_radio('heart','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Stroke</td>
							<td><?php echo form_radio('stroke','1')?></td>
							<td><?php echo form_radio('stroke','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Diabetes</td>
							<td><?php echo form_radio('diabetes','1')?></td>
							<td><?php echo form_radio('diabetes','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Infections</td>
							<td><?php echo form_radio('infections','1')?></td>
							<td><?php echo form_radio('infections','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Alcoholism</td>
							<td><?php echo form_radio('alcoholism','1')?></td>
							<td><?php echo form_radio('alcoholism','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Dementia</td>
							<td><?php echo form_radio('dementia','1')?></td>
							<td><?php echo form_radio('dementia','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Smoking</td>
							<td><?php echo form_radio('smoking','1')?></td>
							<td><?php echo form_radio('smoking','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Depression</td>
							<td><?php echo form_radio('depression','1')?></td>
							<td><?php echo form_radio('depression','0', TRUE)?></td>
						</tr>
						<tr>
							<td><b>Cancer</td>
							<td><?php echo form_radio('cancer','1')?></td>
							<td><?php echo form_radio('cancer','0', TRUE)?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td>
					<label for="fname"><input type="radio" name="radioTextFields" value="fname"/> First Name: </label>
					<?php echo form_input('fname',set_value('fname')); ?>
				</td>
				<td>
					<label for="handedness">Handedness: </label>
					<?php echo form_dropdown('handedness', $handednessOptions, 'none');?>
				</td>
			</tr>
			<tr>
				<td>
					<label for="lname"><input type="radio" name="radioTextFields" value="lname"/> Last Name: </label>
					<?php echo form_input('lname',set_value('lname')); ?>
				</td>
				<td>
					<label for="skincolor">Skin Color: </label>
					<?php echo form_dropdown('skincolor', $skincolorOptions, '');?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="eycolor">Eye Color: </label>
					<?php echo form_dropdown('eyecolor', $eycolorOptions, '');?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="height">Height: </label>
					<?php echo form_dropdown('height', $heightOptions, '');?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="weight">Weight: </label>
					<?php echo form_dropdown('weight', $weightOptions, '');?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="bloodtype">Blood Type: </label>
					<?php echo form_dropdown('bloodtype', $bloodtypeOptions, '');?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="languages"># of Languages Spoken: </label>
					<?php echo form_dropdown('languagesspoken', $languagesOptions, '');?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="degree">Degree: </label>
					<?php echo form_dropdown('degree', $degreeOptions, '');?>
				</td>
			</tr>
		</table>
	</p>
	<?php echo form_submit('submitSearch', 'Search');?>
			<p>
                <?php echo anchor('subjectAdd', 'Add Subjects'); ?>
            </p>

			<p>
                <?php echo anchor('contact_manager', 'Add Contacts'); ?>
            </p>
			<p>
                <?php echo anchor('contact_manager/search', 'Search Contacts'); ?>
            </p>
	</form>
</div>


</body>
</html>