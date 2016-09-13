    <!-- Main content -->
    <section class="content">
       
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
           	<div class="row" style="margin-left: -5px;">
           		<div class="col-md-2">
           		 <button type="button" class="btn btn-block btn-success">Create</button>
      		</div>
           	</div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>Password</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	<?php foreach($all_user as $key => $value) { ?>
		                <tr>
		                  <td><?php echo $value->username;?></td>
		                  <td><?php echo $value->email;?></td>
		                  <td><?php echo $value->age;?></td>
		                  <td><?php echo $value->password;?></td>
		                  <td>
		                  	<button type="button" class="btn btn-block btn-success">Update</button>
		                  	<button type="button" class="btn btn-block btn-danger btn-sm">Delete</button>
		                  </td>
		                </tr>
	                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  