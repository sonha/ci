<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<h1>Update Form</h1>
		<?php if(validation_errors()) { ?>
		<div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
		<?php } ?>
		<?php echo form_open('user/update/'.$user_info->id); ?>
		<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Username</label>
	      <div class="controls">
	        <input type="text" id="username" name="username" placeholder="" value="<?php echo set_value('username', $user_info->username); ?>" class="input-xlarge">
	        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>	
    	<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Email</label>
	      <div class="controls">
	        <input type="text" id="username" name="email" placeholder="" value="<?php echo set_value('email', $user_info->email); ?>" class="input-xlarge">
	        <p class="help-block">Email can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>
    	<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Age</label>
	      <div class="controls">
	        <input type="text" id="username" name="age" placeholder="" value="<?php echo set_value('age', $user_info->age); ?>" class="input-xlarge">
	        <p class="help-block">Age can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>	
    	<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Password</label>
	      <div class="controls">
	        <input type="password" id="username" name="password" placeholder="" value="<?php echo set_value('password', $user_info->password); ?>" class="input-xlarge">
	        <p class="help-block">Password can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>	
			<input type="submit" class="btn btn-success" name="submit" value="Update User">
		</form>
	</div>
</body>
</html>


