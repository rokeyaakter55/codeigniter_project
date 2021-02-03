<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Team
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">Team</a></li>
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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Designation</th>
                        <th>Facebook</th>
                        <th>Pinterest</th>
                        <th>Skype</th>
                        <th>Twitter</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($team as $k){  ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $k->name?></td>
                        <td> <img src="<?php echo base_url('uploads/'.$k->image) ?>" height="100px" weight="100px" alt="">  </td>
                        <td><?php echo $k->designation?></td>
                        <td><?php echo $k->facebook?></td>
                        <td><?php echo $k->pinter?></td>
                        <td><?php echo $k->skype?></td>
                        <td><?php echo $k->twitter?></td>
                        <td>
                            <a href="<?php echo base_url().'Admin/edit_team/'.$k->id ?>" class="btn btn-primary">Edit</a>
                            

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
