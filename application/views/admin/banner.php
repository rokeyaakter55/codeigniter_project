<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">Banner</a></li>
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
echo form_open_multipart('Admin/update_banner');?>
<td> <input type="hidden" name="id" value=" <?php echo @$edit->id ?>   "> </td>
  <br>
  <h2>Logo</h2> 
 <br>
 <td><input type="file" name="logo" class="form-control" value=" <?php echo @$edit->logo ?> "></td>

 <br>
  <h2>Heading</h2>
  <td><input type="text" name="heading" class="form-control" value=" <?php echo @$edit->heading ?> "></td>
 <br> 
<h2>Paragraph</h2>
  <td><input type="text" name="paragraph" class="form-control" value=" <?php echo @$edit->paragraph ?> "></td>
 <br> 
<h2>Video</h2>
  <td><input type="text" name="video" class="form-control" value=" <?php echo @$edit->video ?> "></td>
 <br>
 <h2>Image</h2>
 <td><input type="file" name="image" class="form-control" value=" <?php echo @$edit->image ?> "></td>
 <br>
 <h2>Logo_2</h2>
 <td><input type="file" name="logo_2" class="form-control" value=" <?php echo @$edit->logo_2 ?> "></td>
 <br>
 <?php echo form_submit(array(
        
        'value'          => 'Update' ,'class'=>"btn btn-success"
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
