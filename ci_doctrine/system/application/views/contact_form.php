<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Home</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
              type="text/css" media="all">
    </head>
    <body>
        <div id="signup_form">

            <p class="heading">Contact Form</p>

            <?php echo form_open('contact_manager/submit'); ?>

            <?php echo validation_errors('<p class="error">', '</p>'); ?>

            <p>
                <label for="contact_fname">First Name: </label>
                <?php echo form_input('contact_fname', set_value('contact_fname')); ?>
            </p>
            <p>
                <label for="contact_lname">Last Name: </label>
                <?php echo form_input('contact_lname', set_value('contact_lname')); ?>
            </p>
            <p>
                <label for="contact_phone">Phone Number </label>
                <?php echo form_input('contact_phone', set_value('contact_phone')); ?>
            </p>
            <p>
                <label for="contact_email">E-mail Address: </label>
                <?php echo form_input('contact_email', set_value('contact_email')); ?>
            </p>
            <p>
                <label for="contact_about">About you: </label>
                <?php echo form_input('contact_about', set_value('contact_about')); ?>
            </p>
            <p>
                <?php echo form_submit('submit', 'Add Contact'); ?>
            </p>
            <?php echo form_close(); ?>
            
            
                <?php echo anchor('subjectAdd', 'Add Subjects'); ?><br>
            <?php echo anchor('subjectSearch', 'Search Subjects'); ?><br>
                            
			    <?php echo anchor('contact_manager/search', 'Search Contacts'); ?>
			    
            

        </div>
    </body>
</html>