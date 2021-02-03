<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       events_details
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/users">events_details</a></li>
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
echo form_open_multipart('Admin/update_events_details');?>
<td> <input type="hidden" name="id" value=" <?php echo $events_details->id ?>   "> </td>
  <br>
  <h2>Title</h2> 
 <br>
 <td><input type="text" name="title" class="form-control" value=" <?php echo $events_details->title ?> "></td>

 <br>
  <h2>Details</h2>
  <td><input type="text" name="details" class="form-control" value=" <?php echo $events_details->details ?> "></td>
 <br> 
<h2>Photo</h2>
  <td><input type="file" name="photo" class="form-control" value=" <?php echo $events_details->photo ?> "></td>
 <br> 
<h2>Fee</h2>
  <td><input type="text" name="fee" class="form-control" value=" <?php echo $events_details->fee ?> "></td>
 <br>
 <h2>Start_time</h2>
 <td><input type="dateTime" name="start_time" class="form-control" value=" <?php echo $events_details->start_time ?> "></td>
 <br>
 <h2>End_time</h2>
 <td><input type="dateTime" name="end_time" class="form-control" value=" <?php echo $events_details->end_time ?> "></td>
 <br>
  <h2>Category</h2>
 <td><input type="text" name="category" class="form-control" value=" <?php echo $events_details->category ?> "></td>
 <br>
 <h2>Address</h2>
 <td><input type="text" name="address" class="form-control" value=" <?php echo $events_details->address ?> "></td>
 <br>
 <h2>Vanue</h2>
 <td><input type="text" name="venue" class="form-control" value=" <?php echo $events_details->venue ?> "></td>
 <br>
 <h2>Organizer_name</h2>
 <td><input type="text" name="organizer_name" class="form-control" value=" <?php echo $events_details->organizer_name ?> "></td>
 <br>
  <h2>Organizer_trainer</h2>
 <td><input type="text" name="organizer_trainer" class="form-control" value=" <?php echo $events_details->organizer_trainer ?> "></td>
 <br>
 <h2>Organizer_phone</h2>
 <td><input type="text" name="organizer_phone" class="form-control" value=" <?php echo $events_details->organizer_phone ?> "></td>
 <br>
  <h2>Organizer_email</h2>
 <td><input type="text" name="organizer_email" class="form-control" value=" <?php echo $events_details->organizer_email ?> "></td>
 <br>

 <?php echo form_submit(array(
        
        'value'          => 'Update','class'=>'btn btn-primary'
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
