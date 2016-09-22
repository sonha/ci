<section class="content">
<?php echo form_open('news/update/'.$news_info->id); ?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              	<?php if(validation_errors()) { ?>
					       <div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
				        <?php } ?>
              	<div class="form-group">
                  <div class="row">
                    <div class="col-md-2">
                  <label for="exampleInputEmail1">Title</label>
                  </div>
                  <div class="col-md-10">
                  <input type="text" name="title" value="<?php echo set_value('title',$news_info->title); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Content</label>
                  </div>
                  <div class="col-md-10">
                    <!-- <input type="text" name="content" value="<?php echo set_value('content'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter description"> -->
                    <textarea id="content" name="content" rows="10" cols="80">
                                            <?php echo set_value('content', $news_info->content ); ?>      
                          </textarea>
                  </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="exampleInputEmail1">Author</label>
                  </div>
                  <div class="col-md-10">
                    <input type="text" name="author" value="<?php echo set_value('author',$news_info->author); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Dang ky">
              </div>
            </form>
          </div>
          

        </div>
       
      </div>
      <!-- /.row -->
      </form>
    </section>
