<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading --->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>Portfolio</small> </h1><a href="<?php echo base_url(); ?>index.php/portfolio/create/" title="Add New"><span class="glyphicon glyphicon-plus pull-right"></span></a>
        </div>
      </div>
      
      <div class="row row-bottom-bordr"></div>
             <div class="row">           
<!---Right Table--->
                    <div class="col-md-12">
                    <table class="table table-hover table-striped" id="bootstrap-table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Link</th>
                    <th>Thumb</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($portfolio as $portfolio)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($portfolio['name']); ?></td> 
                     
                    <td><?php echo $portfolio['link']; ?></td>
                    <td><img src="<?php echo base_url(); ?>../images/portfolio/<?php echo $portfolio['thumb']; ?>" width="200" /></td>
                    <td><img src="<?php echo base_url(); ?>../images/portfolio/<?php echo $portfolio['image']; ?>" width="200" /></td>
                    <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/portfolio/edit/<?php echo $portfolio['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/portfolio/del/<?php echo $portfolio['id']; ?>/" onclick="return confirm('are you sure?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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