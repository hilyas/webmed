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

            <p class="heading">Add Appointment Form</p>

            <?php echo form_open('appointmentAdd/submit'); ?>

            <?php echo validation_errors('<p class="error">', '</p>'); ?>

            <p>
                <label for="subject_id">SubjectID: </label>
                <?php echo form_input('subject_id', set_value('subject_id')); ?>
            </p>
            <p>
                <label for="staff_id">StaffID: </label>
                <?php echo form_input('staff_id', set_value('staff_id')); ?>
            </p>
            <p>
                <label for="datetime">DateTime </label>
                <?php echo form_input('datetime', set_value('datetime')); ?>
            </p>
            <p>
                <label for="comment">Comment: </label>
                <?php echo form_input('comment', set_value('comment')); ?>
            </p>
            <p>
                <?php echo form_submit('submit', 'Add'); ?>
            </p>
            <?php echo form_close(); ?>

        </div>
    </body>
</html>