<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading --->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>Blog</small> </h1>
        </div>
      </div>
      
      <div class="row row-bottom-bordr"></div>
             <div class="row">           
<!---Right Table--->
                    <div class="col-md-12">
                    <table class="table table-hover table-striped" id="bootstrap-table">
                <thead>
                <tr>
                    <th>Page</th>
					<th>Image</th>
					<th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($blog as $blog)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($blog['title']); ?></td> 
					 <td><img src="<?php echo base_url(); ?>../images/blog/<?php echo $blog['image']; ?>" width="100" /></td> 
                    <td><?php echo $blog['date']; ?></td> 
                    <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/blog/edit_blog/<?php echo $blog['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp; <a href="<?php echo base_url(); ?>index.php/blog/del_blog/<?php echo $blog['id']; ?>/"><span class=" glyphicon glyphicon-remove"></span></a></td>
                </tr>
                <?php
				$i++;
				}
				?> 
            </tbody>
            </table>
                     </div>
                    </div>
      
    </div>
  </div>