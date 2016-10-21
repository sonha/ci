<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title><?php echo $title;?></title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url().'news/category/1'?>">Event</a></li>
                <li><a href="<?php echo base_url().'news/category/2'?>">Social</a></li>
                <li><a href="<?php echo base_url().'news/category/3'?>">Sports</a></li>
                <li><a href="<?php echo base_url().'news/category/4'?>">Education</a></li>
                <li><a href="<?php echo base_url().'news/category/5'?>">Love&Care</a></li>
                <li><a href="<?php echo base_url().'news/category/6'?>">Thể Thao 12121212</a></li>
              </ul>
            </div>
          </div>
        </nav>
	<div class="container">
      <div class="row">
       
        <?php foreach ($all_news as $key => $value) { ?>
       
        <div class="col-md-4">
          <h2><a href="<?php echo base_url().'news/view/'.$value->id;?>"><?php echo $value->title;?></a></h2>
          <p><?php echo substr($value->content, 0, 50).'...';?></p> 
          <p><a class="btn btn-default" href="<?php echo base_url().'news/view/'.$value->id;?>" role="button">View details »</a></p>
        </div>
        <?php } ?>
      </div>
      <?php echo $pagination;?>
      <hr>
      <footer>
        <p>© 2016 Company, Inc.</p>
      </footer>
    </div>
</body>
</html>