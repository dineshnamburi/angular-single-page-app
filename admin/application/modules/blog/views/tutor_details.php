<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading --->
    <div class="row">
      <div class="col-md-8">
        <h1 class="page-header dashboard-padding">Tutor Details<small> <?php echo ucwords($tutor['name']); ?></small> </h1>
      </div>
      <div class="col-md-4 hidden-print" style="margin-top: 10.5%;"></div>
    </div>
    <div class="row row-bottom-bordr"></div>
    <div class="row">
      <!---Right Table--->
      <div class="col-md-12">
        <div class="bs-example">
          <table class="table table-bordered" style="font-weight:bold; font-size: 12px;">
            <tbody>
              <tr>
                <td width="50%">
                <table class="table">
                    <tr>
                      <td width="33%">Name</td>
                      <td width="67%"><?php echo ucwords($tutor['name']); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Gender</td>
                      <td width="67%"><?php $gend= $tutor['gender']; if($gend=='1'){ echo 'Male'; } elseif($gend=='2'){ echo 'Female'; } ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Mobile</td>
                      <td width="67%"><?php echo $tutor['mob']; ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Date of Birth</td>
                      <td width="67%"><?php echo $tutor['dob']; ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Qualification</td>
                      <td width="67%"><?php echo $tutor['qualification']; ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Experience</td>
                      <td width="67%"><?php echo $tutor['experience']; ?> Years</td>
                    </tr>
                    <tr>
                      <td width="33%">Current Address</td>
                      <td width="67%"><?php echo $tutor['curr_add']; ?>
					  <?php $location = $this->tutors_model->getTableRowData('locations',$tutor['location']); echo ucfirst($location['name']);?>&nbsp; 
					   <?php $city = $this->tutors_model->getTableRowData('city',$tutor['city']); echo ucfirst($city['name']); ?>&nbsp;
					    <?php $state = $this->tutors_model->getTableRowData('state',$tutor['state']); echo ucwords($state['name']); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Permanent Address</td>
                      <td width="67%"><?php echo $tutor['perm_add']; ?>&nbsp;<?php $perm_state = $this->tutors_model->getTableRowData('state',$tutor['perm_state']); echo ucwords($perm_state['name']); ?></td>
                    </tr>
                    <tr>
                      <td width="33%">Avaliable in </td>
                      <td width="67%"><?php if($tutor['avaliable']=='1')
					  {
					   echo 'Evening'; 
					   }
					   if( $tutor['avaliable']=='2')
					   {
					   echo 'Morning';
					   }?></td>
                    </tr>
                    <tr>
                      <td width="33%">Travel By</td>
                      <td width="67%"><?php echo $tutor['travel']; ?></td>
                    </tr>
                  </table></td>
                <td width="" valign="top">
                <table>
                <tr><td><?php if($tutor['photo']!='')
				 {
				  ?><img src="<?php echo base_url(); ?>../images/<?php echo $tutor['photo']; ?>" width="200" height="200" />
                  <?php 
				  }
				  ?></td>
                  <td><?php if($tutor['certificate']!='')
				 {
				  ?><img src="<?php echo base_url(); ?>images/<?php echo $tutor['certificate']; ?>" width="200" height="200" />
                  <?php 
				  }
				  ?>
                  </td>
                  </tr>
                 <tr><td> 
				 <?php if($tutor['idproof']!='')
				 {
				  ?><img src="<?php echo base_url(); ?>images/<?php echo $tutor['idproof']; ?>" width="200" height="200" />
                  <?php 
				  }
				  ?></td><td></td></tr>
                </table>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12" style="margin-top:50px;">
        <div class="bs-example">
          <table class="table table-bordered" style="font-size: 12px;">
            <tbody>
              <tr>
                <td colspan="4" align="center"><h4><strong>Prefered Details</strong></h4></td>
              </tr>
              <tr>
                <th width="25%"><strong>Medium</strong><br />
                <table class="table">
                <?php $medium = json_decode($tutor['medium']);
				foreach ($medium as $medium)
				{
				$med= $this->tutors_model->getTableRowData('language',$medium);
				 ?>
                <tr><td><?php  echo ucwords($med['name']); ?></td></tr>
                <?php 
				}
                ?>
                </table>
                </th>
                <th width="25%"><strong>Subjects</strong>
                <table class="table">
<?php $subject = json_decode($tutor['subject']);
				foreach ($subject as $subject)
				{
				$subj= $this->tutors_model->getTableRowData('subject',$subject);
				 ?>
                <tr><td><?php  echo ucwords($subj['name']); ?></td></tr>
                <?php 
				}
                ?>
                
                </table>
                </th>
                <th width="25%"><strong>Boards</strong>
                <table class="table">
<?php $board = json_decode($tutor['board']);
				foreach ($board as $board)
				{
				
				 ?>
                <tr><td><?php  if($board=='1')
				{
				echo 'CBSE';
				}
				if($board=='2')
				{
				echo 'ICSE';
				}
				if($board=='3')
				{
				echo 'UP';
				}?></td></tr>
                <?php 
				}
                ?>                </table>
                </th>
                <th width="25%"><strong>Classes</strong>
                <table class="table">
<?php $classes = json_decode($tutor['classes']);
				foreach ($classes as $classes)
				{
				$cl= $this->tutors_model->getTableRowData('class',$classes);
				 ?>
                <tr><td><?php  echo ucwords($cl['name']); ?></td></tr>
                <?php 
				}
                ?>                </table>
                </th>
              </tr>
              <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>
              
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12" style="margin-top:50px;">
        <div class="bs-example">
          <table class="table table-bordered" style="font-size: 12px;">
            <tbody>
              <tr>
                <td align="center"><h4><strong>Preferd Locations</strong></h4></td>
              </tr>
              <table class="table table-bordered">
              <?php $fa = json_decode($tutor['prefered_area']);
				foreach ($fa as $fa)
				{
				$area= $this->tutors_model->getTableRowData('locations',$fa);
				 ?>
                <tr><td><?php  echo ucwords($area['name']); ?></td></tr>
                <?php 
				}
                ?>  
                </table>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
