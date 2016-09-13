

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title><?php echo $title;?></title>
</head>
<body>
	<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h2><?php echo $news->title;?></h2>
          <p><?php echo $news->content;?></p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div>

      </div>
      <hr>
      <footer>
        <p>© 2016 Company, Inc.</p>
      </footer>
    </div>
</body>
</html>