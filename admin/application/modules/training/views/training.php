<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header dashboard-padding"><small>Trainings</small> </h1><a href="<?php echo base_url(); ?>index.php/training/create/" title="Add New"><span class="glyphicon glyphicon-plus pull-right"></span></a>
      </div>
    </div>

    <div class="row row-bottom-bordr"></div>
    <div class="row">           
      <div class="col-md-12">
        <table class="table table-hover table-striped" id="bootstrap-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Duration</th>
              <th>price</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            foreach($training as $training)
            {
             ?>
             <tr>

              <td><?php echo ucwords($training['course_name']); ?></td> 
              <td><?php echo $training['duration']; ?></td>
              <td><?php echo $training['price']; ?></td>
              <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/training/edit/<?php echo $training['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/training/del/<?php echo $training['id']; ?>/" onclick="return confirm('are you sure?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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