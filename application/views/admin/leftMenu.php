<div class="wrapper">
    <header class="main-header">
        <a href="" class="logo">
            <span class="logo-mini"><b>STK</b></span>
            <span class="logo-lg"><b>CONTROL PANEL</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <li><a href="" target="_blank"><i class="fa fa-globe"></i></a></li>
                  <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../admin_file/admin/dist/img/avatar5.png" class="user-image"
                        alt="User Image">
                        <span class="hidden-xs">
                            <?php
                            // echo $this->session->userdata('admin_name');
                            ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="../admin_file/admin/dist/img/avatar5.png" class="img-circle"
                            alt="User Image">
                            <p>
                                <?php
                                
                                ?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                </div>
                                <div class="col-xs-4 text-center">
                                </div>
                                <div class="col-xs-4 text-center">
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">                               
                            </div>
                            <div class="pull-right">
                               
                                    <a href="<?php echo base_url() ?>Admin/logout"
                                    class="btn btn-default btn-flat" name="logout" >Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="active"><a href=" <?php echo base_url()?>Admin/dashboard "><i class="fa fa-circle-o"></i>
                Dashboard </a></li>
                <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Users  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="active"><a href=" <?php echo base_url() ?>Admin/add_users"><i class="fa fa-user"></i>
                    Add User  </a></li>
                    <li class="active"><a href="<?php echo base_url() ?>Admin/users "><i class="fa fa-user"></i>
                    Users List </a></li>
                    </ul>
                </li>
                 <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Home  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                    
                    <li class="active"><a href="<?php echo base_url() ?>Admin/bannrer "><i class="fa fa-user"></i>
                    Banner List </a></li>
                    </ul>
                    <ul class="treeview-menu">
                    
                    <li class="active"><a href="<?php echo base_url() ?>Admin/outstanding "><i class="fa fa-user"></i>
                    Outstanding </a></li>
                    <li class="active"><a href="<?php echo base_url() ?>Admin/global "><i class="fa fa-user"></i>
                    Global </a></li>
                    <li class="active"><a href="<?php echo base_url() ?>Admin/service "><i class="fa fa-user"></i>
                    Service </a></li>
                    <li class="active"><a href="<?php echo base_url() ?>Admin/best_dance "><i class="fa fa-user"></i>
                    Best Dance  </a></li>
                     <li class="active"><a href="<?php echo base_url() ?>Admin/online_dance "><i class="fa fa-user"></i>
                    Online Dance </a></li>
                     <li class="active"><a href="<?php echo base_url() ?>Admin/testimonials "><i class="fa fa-user"></i>
                    Testimonials </a></li>
                     <li class="active"><a href="<?php echo base_url() ?>Admin/team "><i class="fa fa-user"></i>
                    Team </a></li>
                    <li class="active"><a href="<?php echo base_url() ?>Admin/classes "><i class="fa fa-user"></i>
                    Classes </a></li>
                    </ul>
                </li> 
                <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Event  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/events "><i class="fa fa-user"></i>
                    Events  </a></li>
                     <li class="active"><a href="<?php echo base_url() ?>Admin/events_details "><i class="fa fa-user"></i>
                    Events Details </a></li>
                    </ul>
                </li>  
                 <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Class Details  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/class_shedule "><i class="fa fa-user"></i>
                    Class Shedule </a></li>
                    </ul>
                </li>
                 <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Class Booking  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/booking_list "><i class="fa fa-user"></i>
                    Booking List </a></li>
                    </ul>
                </li>
                 <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Contact  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/contact_message "><i class="fa fa-user"></i>
                    Message </a></li>
                    </ul>
                </li> 

                  <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>About  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/about_us"><i class="fa fa-user"></i>
                    About Us </a></li>
                    </ul>
                </li> 
                <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Blog  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/blog_list"><i class="fa fa-user"></i>
                    Blog List </a></li>
                    </ul>
                </li> 
                     <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Gallary  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/gallary"><i class="fa fa-user"></i>
                    Gallery</a></li>
                    </ul>
                </li> 
  <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Faq  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/faq"><i class="fa fa-user"></i>
                    Frequently Asked Question</a></li>
                    </ul>
                </li> 


                <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-clone"></i> <span>Studio  </span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                      </span>
                  </a>
                  <ul class="treeview-menu">
                
                    </ul>
                    <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() ?>Admin/studio"><i class="fa fa-user"></i>
                    Our Studio</a></li>
                    </ul>
                </li> 
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
