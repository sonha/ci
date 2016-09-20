<section class="content">
	<div class="row">
		<div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Descripption</th>
                  <th>Create At</th>
                  <th>Update At</th>
                </tr>
                
                <?php foreach($list_category as $key => $value) { ?>
                <tr>
                  <td><?php echo $value->id;?></td>
                  <td><?php echo $value->category_name;?></td>
                  <td><?php echo $value->description;?></td>
                  <td>121212</td>
                  <td>121212</td>
                </tr>

                <?php } ?>
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
	</div>
</section>