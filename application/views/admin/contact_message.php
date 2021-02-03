<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Message
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">User Message</a></li>
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
                        <th>Email</th>
                        <th>Website</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($message as $k){  ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $k->name?></td>
                        <td><?php echo $k->email?></td>
                        <td><?php echo $k->website_url?></td>
                        <td><?php echo $k->message?></td>
                        <td>
                            <a href="<?php echo base_url().'Admin/delete_message/'.$k->id ?>" onClick="return confirm('Are you sure?')" class="btn btn-danger">Delete

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
