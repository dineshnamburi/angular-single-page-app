<body>
    <div id="preloader"><img src="<?php echo base_url(); ?>images/preloader.GIF" width="50px" /></div>
    <div id="back_overlay"></div>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo base_url(); ?>images/logo.png" width="48%"></a>                
            </div>
            <div class="col-md-3">

                <div class="form-group has-success has-feedback">


                </div>
            </div>
            
            
            <!-- Top Menu Items --->
            <ul class="nav navbar-right top-nav">
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php $session_data=$this->session->all_userdata();
						echo $session_data['session_username']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/settings/profile/"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>-->

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/login/logout/"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav hidden-print">
                    <li class="dashboard-nav-bg">
                        <a href="<?php echo base_url(); ?>index.php/admin/dashboard/"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv5"><span class="glyphicon glyphicon-file"></span> &nbsp;CMS<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo_inv5" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/cms/">cms</a>
                            </li>
                            
                        </ul></li>
                       <!--  <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv8"><span class="glyphicon glyphicon-file"></span> &nbsp;MENU<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo_inv8" class="collapse">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/menu/category">Add Category</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/menu/category/add_subcategory">Add Sub Category</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/menu/menu">Menu List</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/menu/menu/add_item">Add Menu Item</a>
                                </li>

                            </ul></li> -->
                         <!--    <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv51"><span class="glyphicon glyphicon-file"></span> &nbsp;Blog<i class="fa fa-fw fa-caret-down"></i></a>
                                <ul id="demo_inv51" class="collapse">

                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/blog/">View Blog Post</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>index.php/blog/create">Create Blog Post</a>
                                    </li>
                                </ul></li> -->
                                <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv"><span class="glyphicon glyphicon-file"></span> &nbsp;Settings<i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="demo_inv" class="collapse">
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/settings/">Settings</a>
                                        </li>

                                    </ul>
                                </li>

                                 <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv56"><span class="glyphicon glyphicon-file"></span> &nbsp;Trainings<i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="demo_inv56" class="collapse">
                                        <li>
                                            <a href="<?php echo base_url(); ?>index.php/training/">View Trainings</a>
                                        </li>

                                    </ul>
                                </li>



                       <?php /*?><li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv2"><span class="glyphicon glyphicon-file"></span> &nbsp;Tutors<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo_inv2" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/tutors/">View Tutors</a>
                            </li>
                           
                            
                        </ul>
                    </li>  <?php */?>
                     <?php /*?><li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv3"><span class="glyphicon glyphicon-file"></span> &nbsp;Jobs<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo_inv3" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/jobs/create/">New Job</a>
                            </li>

<li>
                                <a href="<?php echo base_url(); ?>index.php/jobs/">View All Jobs</a>
                            </li>
                                    
                </ul>
            </li><?php */?>
            <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv6"><span class="glyphicon glyphicon-file"></span> &nbsp;Testimonials<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_inv6" class="collapse">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/testimonials/create/">New Testimonial</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>index.php/testimonials/">View</a>
                    </li>

                </ul>
            </li>

                 <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv76"><span class="glyphicon glyphicon-file"></span> &nbsp;Clients<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_inv76" class="collapse">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/clients/create/">New clients</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>index.php/clients/">View</a>
                    </li>

                </ul>
            </li>

             <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv767"><span class="glyphicon glyphicon-file"></span> &nbsp;Registered Users<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_inv767" class="collapse">
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/registration/">Users</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>index.php/registration/partners">Partners</a>
                    </li>

                </ul>
            </li>

            <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv7"><span class="glyphicon glyphicon-file"></span> &nbsp;Banners<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_inv7" class="collapse">


                    <li>
                        <a href="<?php echo base_url(); ?>index.php/slider/create/">New Banner</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>index.php/slider/">View</a>
                    </li>

                </ul>
            </li>
           <!--  <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv10"><span class="glyphicon glyphicon-file"></span> &nbsp;Gallery<i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo_inv10" class="collapse">
                 
                    
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/gallery/create/">Add Image</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url(); ?>index.php/gallery/">View All</a>
                    </li>
                    
                </ul>
            </li> -->

            <!--    <li> <a href="javascript:;" data-toggle="collapse" data-target="#demo_inv4"><span class="glyphicon glyphicon-file"></span> &nbsp;Portfolio<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo_inv4" class="collapse">
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/category/create/">New Category</a>
                            </li>

                            <li>
                                <a href="<?php echo base_url(); ?>index.php/category/">View Category</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/portfolio/create">New Portfolio</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>index.php/portfolio/">View Portfolio</a>
                            </li>
                        </ul -->
                    </li>

                </div>
                <!-- /.navbar-collapse -->
            </nav>
