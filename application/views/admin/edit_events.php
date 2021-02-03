<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="dashboard.php">Dashboard </a></li>
      </ol> -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body" style="min-height: 73vh">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th>Countdown</th>
                        <th>Data</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Title</th>
                       

                     
                    </tr>
                </thead>
                <tbody><tr>
                   <form action=" <?php echo base_url()?>Admin/update_events" method="post" enctype="multipart/form-data">
                    <td> <input type="hidden" name="id" value=" <?php echo $edit_events->id ?>   "> </td>
                   
                     
                      <td><input type="dateTime" name="date" value=" <?php echo $edit_events->date ?> "></td>
                      <td><input type="dateTime" name="st_time" value=" <?php echo $edit_events->st_time ?> "></td>
                       <td><input type="dateTime" name="end_time" value=" <?php echo $edit_events->end_time ?> "></td>
                       <td><input type="text" name="title" value=" <?php echo $edit_events->title ?> "></td>
                                             

              
                   
                   </tr>

                </tbody>
                <tfoot> 
                  <table><tr>
                     <input type="submit" value="Update" class="btn btn-success">  </
                  
                </tr></table>

                  </tfoot>
                </form>
            </table>
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/footer_c');?>
