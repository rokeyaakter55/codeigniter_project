<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Service
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">Service</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body" style="min-height: 73vh">
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Heading</th>
                        <th>Paragraph</th>
                        <th>Icon</th>
                        <th>Number</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($service as $k){  ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $k->heading?></td>
                        <td><?php echo $k->paragraph?></td>
                        <td><?php echo $k->icon?></td>
                        <td><?php echo $k->number?></td>
                        <td>
                            <a href="<?php echo base_url().'Admin/edit_service/'.$k->id ?>" class="btn btn-primary">Update</a>
                            

                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
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
