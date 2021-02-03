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
                        <th>SL</th>
                        <th>Paragraph</th>
                        <th>Image</th>
                        <th>Profile Name</th>
                        <th>Profile Designation</th>

                     
                    </tr>
                </thead>
                <tbody><tr>
                   <form action=" <?php echo base_url()?>Admin/update_testimonials" method="post" enctype="multipart/form-data">
                    <td> <input type="hidden" name="id" value=" <?php echo $edit_testimonials->id ?>   "> </td>
                    <td><input type="text" name="paragraph" value=" <?php echo $edit_testimonials->paragraph ?> "></td>
                     <td><input type="file" name="p_image" value=" <?php echo $edit_testimonials->p_image ?> "></td>
                      <td><input type="text" name="p_name" value=" <?php echo $edit_testimonials->p_name ?> "></td>
                       <td><input type="text" name="p_designation" value=" <?php echo $edit_testimonials->p_designation ?> "></td>
              
                   
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
