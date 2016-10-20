<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading --->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>CMS</small> </h1>
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
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($cms as $cms)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($cms['name']); ?></td> 
                    
                    <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/cms/edit_page/<?php echo $cms['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a></td>
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