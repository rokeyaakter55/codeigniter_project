<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Outstanding
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">Outstanding</a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body" style="min-height: 73vh">
           <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-6">
    <?php 
echo form_open_multipart('Admin/update_outstanding');?>
<td> <input type="hidden" name="id" value=" <?php echo @$outstanding->id ?>   "> </td>
  <br>
  <h2>Name</h2> 
 <br>
 <td><input type="text" name="name" class="form-control" value=" <?php echo @$outstanding->name ?> "></td>

 <br>
  <h2>Heading</h2>
  <td><input type="text" name="heading" class="form-control" value=" <?php echo @$outstanding->heading ?> "></td>
 <br> 
<h2>Paragraph</h2>
  <!-- <td><input type="text" name="paragraph" class="form-control" value=" <?php //echo @$outstanding->paragraph ?> "></td> -->
  <textarea name="paragraph" id="" cols="60" rows="10"> <?php echo @$outstanding->paragraph ?></textarea>
 <br> 
<h2>Ballet</h2>
  <td><input type="text" name="ballet" class="form-control" value=" <?php echo @$outstanding->ballet ?> "></td>
 <br>
 <h2>Theatre</h2>
 <td><input type="text" name="theatre" class="form-control" value=" <?php echo @$outstanding->theatre ?> "></td>
 <br>
 <h2>Image</h2>
 <td><input type="file" name="image" class="form-control" value=" <?php echo @$outstanding->image ?> "></td>
 <br>
 <?php echo form_submit(array(
        
        'value'          => 'Update','class'=>"btn btn-success"
));?>
 <?php echo form_close(); ?></div>
 
</div>
           
        </div>
        </div>
        </div>
        
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('admin/footer_c');?>
