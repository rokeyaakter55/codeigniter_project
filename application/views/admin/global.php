<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Global
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">Global</a></li>
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
echo form_open_multipart('Admin/update_global');?>
<td> <input type="hidden" name="id" value=" <?php echo @$global->id ?>   "> </td>
  <br>
  <h2>Name</h2> 
 <br>
 <td><input type="text" name="name" class="form-control" value=" <?php echo @$global->name ?> "></td>

 <br>
  <h2>Heading</h2>
  <td><input type="text" name="heading" class="form-control" value=" <?php echo @$global->heading ?> "></td>
 <br> 
<h2>Paragraph</h2>
  <!-- <td><input type="text" name="paragraph" class="form-control" value=" <?php //echo @$global->paragraph ?> "></td> -->
  <textarea name="paragraph" id="" cols="60" rows="10"> <?php echo @$global->paragraph ?></textarea>
 <br> 
<h2>Image</h2>
 <td><input type="file" name="image" class="form-control" value=" <?php echo @$global->image ?> "></td>
 <br>
<h2>Profile Name</h2>
  <td><input type="text" name="p_name" class="form-control" value=" <?php echo @$global->p_name ?> "></td>
 <br>
 <h2>Profile Image</h2>
 <td><input type="file" name="p_image" class="form-control" value=" <?php echo @$global->p_image ?> "></td>
 <br>
 <h2>Profile Designation</h2>
 <td><input type="text" name="p_designation" class="form-control" value=" <?php echo @$global->p_designation ?> "></td>
 <br>
 <h2>Signature</h2>
 <td><input type="file" name="p_sign" class="form-control" value=" <?php echo @$global->p_sign ?> "></td>
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
