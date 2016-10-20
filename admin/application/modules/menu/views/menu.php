<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Food Menu</small> </h1>
      </div>
    </div>

    <div class="row row-bottom-bordr"></div>
    <div class="row">           
      <div class="col-md-12">
        <table class="table table-hover table-striped" id="bootstrap-table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Thumb</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
             <?php 
            $i=1;
            foreach($menu as $item)
            {
             ?>
            <tr>
                    
                    <td><?php echo ucwords($item['id']); ?></td> 
           <td><img src="<?php echo base_url(); ?>../images/menu_item/<?php echo $item['thumb']; ?>" width="80" /></td> 
                    <td><?php echo $item['name']; ?></td> 
                    <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/menu/menu/edit_menu/<?php echo $item['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp; <a href="<?php echo base_url(); ?>index.php/menu/menu/del_item/<?php echo $item['id']; ?>/"><span class=" glyphicon glyphicon-remove"></span></a></td>
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