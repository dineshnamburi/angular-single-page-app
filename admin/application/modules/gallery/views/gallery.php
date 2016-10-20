<div id="page-wrapper">
  <div class="container-fluid">

    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Gallery</small> </h1><a href="<?php echo base_url(); ?>index.php/gallery/create/" title="Add New"><span class="glyphicon glyphicon-plus pull-right"></span></a>
      </div>
    </div>

    <div class="row row-bottom-bordr"></div>
    <div class="row">           

      <div class="col-md-12">
        <table class="table table-hover table-striped" id="bootstrap-table">
          <thead>
            <tr>
              <th>Title</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            foreach($gallery as $image)
            {
             ?>
             <tr>

              <td><?php echo ucwords($image['title']); ?></td>
              <td><img src="<?php echo base_url(); ?>../images/gallery/<?php echo $image['image'] ?>" width="100" /></td> 

              <td><a href="<?php echo base_url(); ?>index.php/gallery/del/<?php echo $image['id']; ?>/" onclick="return confirm('are you sure?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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