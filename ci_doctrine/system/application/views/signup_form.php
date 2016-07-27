<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Signup Form</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css"
              type="text/css" media="all">
    </head>
    <body>

        <div id="signup_form">

            <p class="heading">Add a Staff Member</p>

            <?php echo form_open('signup/submit'); ?>

            <?php echo validation_errors('<p class="error">', '</p>'); ?>

            <p>
                <label for="username">Username: </label>
                <?php echo form_input('username', set_value('username')); ?>
            </p>
            <p>
                <label for="user_fname">Staff First Name: </label>
                <?php echo form_input('user_fname', set_value('user_fname')); ?>
            </p>
            <p>
                <label for="user_lname">Staff Last Name: </label>
                <?php echo form_input('user_lname', set_value('user_lname')); ?>
            </p>
            <p>
                <label for="email">E-mail: </label>
                <?php echo form_input('email', set_value('email')); ?>
            </p>
            <p>
                <label for="password">Password: </label>
                <?php echo form_password('password'); ?>
            </p>
            <p>
		<label for="passconf">Confirm Password: </label>
		<input type="password" name="passconf" value=""  />
            </p>
            <p>
                <?php echo form_submit('submit', 'Create account'); ?>
            </p>
            <?php echo form_close();?>
                <p>
                <?php echo anchor('login', 'Login Form'); ?>
            </p>


        </div>

    </body>
</html>