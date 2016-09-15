<section class="content">
<?php echo form_open('user/create'); ?>
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
              	<?php if(validation_errors()) { ?>
					<div class="alert alert-danger" role="alert"><?php echo validation_errors(); ?></div>
				<?php } ?>
              	<div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Age</label>
                  <input type="text" name="age" value="<?php echo set_value('age'); ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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