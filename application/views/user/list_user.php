

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title><?php echo $title;?></title>
</head>
<body>
	<div class="container">
		<h1><?php echo $title;?></h1>
		<a href="<?php echo base_url().'user/register';?>">
			<button type="button" class="btn btn-success">Add Member</button>
		</a>
		<table class="table table-striped table-bordered table table-hove table-condensed">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
			<?php foreach($all_user as $key => $value) { ?>
			<tr>
				<td><?php echo $value->id;?></td>
				<td><?php echo $value->username;?></td>
				<td><?php echo $value->email;?></td>
				<td>
					<a href="<?php echo base_url().'user/delete/'.$value->id;?>">
						<button type="button" class="btn btn-danger">Delete</button>
					</a>
					<a href="<?php echo base_url().'user/update/'.$value->id;?>">
						<button type="button" class="btn btn-success">Update Member</button>
					</a>
				</td>
		<f	/tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>