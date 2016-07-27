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
		
	<p class="heading">Search Results</p>

	
		
		<?php echo form_open('subjectSearch/search'); ?>
		
	
		<p class = "leftcolumn">
		<table border ="0" width="100%">
			
			<?php 
				//echo $subjectID[1];
				for($i=0; $i<sizeof($results);$i++)
				{
					//echo $subjectID[$i];
					echo "<tr align='center'><td>" .anchor('subjectDisplay/index/' . $subjectID[$i] ,$results[$i]) . "</td></tr>";
				}
			?>
		</table>
	</p>

	
</div>


</body>
</html>