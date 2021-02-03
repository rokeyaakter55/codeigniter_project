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
                        <th>Heading</th>
                        <th>Paragraph</th>
                        <th>Icon</th>
                        <th>Number</th>
                     
                    </tr>
                </thead>
                <tbody><tr>
                   <form action=" <?php echo base_url()?>Admin/update_service" method="post">
                    <td> <input type="hidden" name="id" value=" <?php echo $edit_service->id ?>   "> </td>
                    <td><input type="text" name="heading" value=" <?php echo $edit_service->heading ?> "></td>
                     <td><input type="text" name="paragraph" value=" <?php echo $edit_service->paragraph ?> "></td>
                      <td><input type="text" name="icon" value=" <?php echo $edit_service->icon ?> "></td>
                       <td><input type="text" name="number" value=" <?php echo $edit_service->number ?> "></td>
              
                   
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
