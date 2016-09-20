<section class="content">
<?php echo form_open('category/update/'.$category_id); ?>
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
                  <label for="exampleInputEmail1">Username</label>
                  </div>
                  <div class="col-md-6">
                  <input type="text" name="category_name" value="<?php echo set_value('category_name', $category_info->category_name); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter category_name">
                  </div>
                  </div>
                </div>
                <div class="form-group">
                <div class="row">
                  <div class="col-md-2">
                    <label for="exampleInputEmail1">description</label>
                  </div>
                  <div class="col-md-4">
                    <input type="text" name="description" value="<?php echo set_value('description', $category_info->description); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter description">
                  </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Update">
              </div>
            </form>
          </div>
          

        </div>
       
      </div>
      <!-- /.row -->
      </form>
    </section>