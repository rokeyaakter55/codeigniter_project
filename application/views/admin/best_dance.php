<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Best Dance
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
                        <th>Paragraph</th>
                        <th>Icon_1</th>
                        <th>Icon_2</th>
                        <th>Heading_2</th>
                        <th>Paragraph_2</th>
                        <th>Trainer</th>
                        <th>Client</th>
                        <th>Winner</th>
                        <th>Features</th>
                        <th>Heading_3</th>
                        <th>Paragraph_3</th>
                        <th>Trainer_number</th>
                        <th>Client_number</th>
                        <th>Winner_number</th>
                        <th>Features_number</th>
                     
                    </tr>
                </thead>
                <tbody>
                  <tr>
                   <form action=" <?php echo base_url()?>Admin/update_best_dance" method="post">
                    <td> <input type="hidden" name="id" value=" <?php echo $best_dance->id ?>   "> </td>
                    <td><input type="text" name="heading" value=" <?php echo $best_dance->heading ?> "></td>
                     <td><input type="text" name="paragraph" value=" <?php echo $best_dance->paragraph ?> "></td>
                      <td><input type="text" name="icon_1" value=" <?php echo $best_dance->icon_1 ?> "></td>
                       <td><input type="text" name="icon_2" value=" <?php echo $best_dance->icon_2 ?> "></td>
                       <td><input type="text" name="heading_2" value=" <?php echo $best_dance->heading_2 ?> "></td>
                       <td><input type="text" name="paragraph_2" value=" <?php echo $best_dance->paragraph_2 ?> "></td>
              
                   <td><input type="text" name="trainer" value=" <?php echo $best_dance->trainer ?> "></td>
                    <td><input type="text" name="client" value=" <?php echo $best_dance->client ?> "></td>
                    <td><input type="text" name="winner" value=" <?php echo $best_dance->winner ?> "></td>
                    <td><input type="text" name="features" value=" <?php echo $best_dance->features ?> "></td>
                     <td><input type="text" name="heading_3" value=" <?php echo $best_dance->heading_3 ?> "></td>
                     <td><input type="text" name="paragraph_3" value=" <?php echo $best_dance->paragraph_3 ?> "></td>
                     <td><input type="text" name="trainer_number" value=" <?php echo $best_dance->trainer_number ?> "></td>
                     <td><input type="text" name="client_number" value=" <?php echo $best_dance->client_number ?> "></td>
                     <td><input type="text" name="winner_number" value=" <?php echo $best_dance->winner_number ?> "></td>
                     <td><input type="text" name="features_number" value=" <?php echo $best_dance->features_number ?> "></td>
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
