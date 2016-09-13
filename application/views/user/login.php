<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
</head>
<body>
	<h1>Login Form</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('user/login'); ?>
	Username
		<input type="text" name="username" value="<?php echo set_value('username'); ?>">
	Age
		<input type="text" name="age" value="<?php echo set_value('age'); ?>">
	Password
		<input type="password" name="password" value="<?php echo set_value('password'); ?>">
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>