<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<h1>Create News</h1>
		<?php if(validation_errors()) { ?>
		<div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
		<?php } ?>
		<?php echo form_open('news/create'); ?>
		<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Title</label>
	      <div class="controls">
	        <input type="text" id="title" name="title" placeholder="" value="<?php echo set_value('title'); ?>" class="input-xlarge">
	        <p class="help-block">Title can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>	
    	<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Content</label>
	      <div class="controls">
	        <?php echo $editor;?>
			<textarea></textarea>  
	        <p class="help-block">Content can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>
    	<div class="control-group">
      <!-- Username -->
	      <label class="control-label"  for="username">Author</label>
	      <div class="controls">
	        <input type="text" id="author" name="author" placeholder="" value="<?php echo set_value('author'); ?>" class="input-xlarge">
	        <p class="help-block">Author can contain any letters or numbers, without spaces</p>
	      </div>
    	</div>	
			<input type="submit" class="btn btn-success" name="submit" value="Register">
		</form>
	</div>
</body>
</html>


