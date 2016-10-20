<div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>Registered Users</small> </h1>
        </div>
      </div>
      
      <div class="row row-bottom-bordr"></div>
             <div class="row">           
                    <div class="col-md-12">
                    <table class="table table-hover table-striped" id="bootstrap-table">
                <thead>
                <tr>
                   <th>Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php 
				$i=1;
				foreach($users as $users)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($users['id']); ?></td>
                    <td><?php echo ucwords($users['name']); ?></td>
                    <td><?php echo ucwords($users['email']); ?></td> 
                    
                    <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/registration/editUser/<?php echo $users['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a></td>
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