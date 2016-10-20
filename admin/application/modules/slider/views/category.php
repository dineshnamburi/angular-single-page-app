<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading --->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>Tutorial Category</small> </h1><a href="<?php echo base_url(); ?>index.php/tutorials/create_category/" title="Add New"><span class="glyphicon glyphicon-plus pull-right"></span></a>
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
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($category as $category)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($category['name']); ?></td> 
                    
                    <td><a href="<?php echo base_url(); ?>index.php/tutorials/del_tut_cat/<?php echo $category['id']; ?>/" onclick="return confirm('are you sure?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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