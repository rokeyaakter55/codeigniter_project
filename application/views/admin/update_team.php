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
                        <th>Paragraph</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Facebook</th>
                        <th>Pinterest</th>
                        <th>Skype</th>
                        <th>Twitter</th>

                     
                    </tr>
                </thead>
                <tbody><tr>
                   <form action=" <?php echo base_url()?>Admin/update_team" method="post" enctype="multipart/form-data">
                    <td> <input type="hidden" name="id" value=" <?php echo $edit_team->id ?>   "> </td>
                    <td><input type="text" name="name" value=" <?php echo $edit_team->name ?> "></td>
                     <td><input type="file" name="image" value=" <?php echo $edit_team->image ?> "></td>
                      <td><input type="text" name="designation" value=" <?php echo $edit_team->designation ?> "></td>
                       <td><input type="text" name="facebook" value=" <?php echo $edit_team->facebook ?> "></td>
                       <td><input type="text" name="pinter" value=" <?php echo $edit_team->pinter ?> "></td>
                       <td><input type="text" name="skype" value=" <?php echo $edit_team->skype ?> "></td>
                         <td><input type="text" name="twitter" value=" <?php echo $edit_team->twitter ?> "></td>

              
                   
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
