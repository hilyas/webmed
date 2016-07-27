<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Search Results</title>
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
		
	<p class="heading">Contact Search Results</p>

	
		
		<?php echo form_open('subjectSearch/search'); ?>
		
	
		<p class = "leftcolumn">
		<table border ="0" width="100%">
		<tr>
		<td><b>ID</td>
		<td><b>First Name</td>
		<td><b>Last Name</td>
		<td><b>Phone</td>
		<td><b>Email</td>
		<td><b>About</td>
		</tr>
			<?php echo $contacts->count(); ?> Prospective contacts <br><br>
			<?php foreach($contacts as $contact): ?>

			<div>
	 	    	<div>
	 	   	 		<tr>
	 	   	 		<td><?php echo $contact->id; ?></td>
 					<td><?php echo $contact->contact_fname; ?></td>
					<td><?php echo $contact->contact_lname; ?></td>
					<td><?php echo $contact->contact_phone; ?></td>
					<td><?php echo $contact->contact_email; ?></td>
					<td><?php echo $contact->contact_about; ?></td>
					</tr>
				</div>
			</div>
	<?php endforeach; ?>

		</table>
	</p>

	
</div>

<?php echo anchor('subjectAdd', 'Add Subjects'); ?><br>
           
<?php echo anchor('subjectSearch', 'Search Subjects'); ?><br>
			
                <?php echo anchor('contact_manager', 'Add Contacts'); ?><br>
            
                
</body>
</html>