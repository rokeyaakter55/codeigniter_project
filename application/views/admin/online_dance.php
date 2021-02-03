<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Online Dance
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
                        <th>Heading</th>
                        
                        <th>Image</th>
                        <th>Link</th>
                        <th>Image_2</th>
                        
                     
                    </tr>
                </thead>
                <tbody>
                  <tr>
                   <form action=" <?php echo base_url()?>Admin/update_online_dance_update" method="post" enctype="multipart/form-data">
                    <td> <input type="hidden" name="id" value=" <?php echo $online_dance->id ?>   "> </td>
                    <td><input type="text" name="heading" value=" <?php echo $online_dance->heading ?> "></td>
                     <td><input type="file" name="image" value=" <?php echo $online_dance->image ?> "></td>
                      <td><input type="text" name="link" value=" <?php echo $online_dance->link ?> "></td>
                      <td><input type="file" name="image_2" value=" <?php echo $online_dance->image_2 ?> "></td>
                       
              
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
