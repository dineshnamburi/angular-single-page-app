<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Clients</small> </h1>
      </div>
    </div>

    <div class="row row-bottom-bordr"></div>
    <div class="row">           
      <div class="col-md-12">
        <table class="table table-hover table-striped" id="bootstrap-table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            foreach($client as $client)
            {
             ?>
             <tr>

              <td><?php echo $client['id']; ?></td> 
              <td><?php echo $client['title']; ?></td> 
              <td><img src="<?php echo base_url(); ?>../images/client/<?php echo $client['image']; ?>" width="100" /></td> 
              <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/clients/edit_client/<?php echo $client['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp; <a href="<?php echo base_url(); ?>index.php/clients/del_client/<?php echo $client['id']; ?>/"><span class=" glyphicon glyphicon-remove"></span></a></td>
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