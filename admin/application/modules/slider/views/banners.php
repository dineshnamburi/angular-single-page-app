<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading --->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>Tutorials</small> </h1><a href="<?php echo base_url(); ?>index.php/slider/create/" title="Add New"><span class="glyphicon glyphicon-plus pull-right"></span></a>
        </div>
      </div>
      
      <div class="row row-bottom-bordr"></div>
             <div class="row">           
<!---Right Table--->
                    <div class="col-md-12">
                    <table class="table table-hover table-striped" id="bootstrap-table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Banner</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($banners as $banners)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($banners['title']); ?></td>
                     <td><img src="<?php echo base_url(); ?>../images/slider/<?php echo $banners['image'] ?>" width="600" /></td> 
                    
                    <td><a href="<?php echo base_url(); ?>index.php/slider/del/<?php echo $banners['id']; ?>/" onclick="return confirm('are you sure?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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