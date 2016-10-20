<div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading --->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header dashboard-padding"><small>News</small> </h1><a href="<?php echo base_url(); ?>index.php/news/create/" title="Add New"><span class="glyphicon glyphicon-plus pull-right"></span></a>
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
				foreach($news as $news)
				{
				 ?>
                <tr>
                    
                    <td><?php echo ucwords($news['title']); ?></td> 
                    
                    <td>&nbsp; <a href="<?php echo base_url(); ?>index.php/news/edit_news/<?php echo $news['id']; ?>/"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>index.php/news/del_news/<?php echo $news['id']; ?>/" onclick="return confirm('are you sure?');"><span class="glyphicon glyphicon-trash"></span></a> </td>
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