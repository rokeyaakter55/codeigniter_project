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
            <div class="col-md-12">
            <?php echo form_open_multipart('Admin/insert_blog');?>
            <div class="col-md-6">
<td> <input type="hidden" name="id" value="" > </td>
  <br>
  <label>Photo</label> 
 <br>
 <td><input type="file" name="photo" class="form-control" value=" "></td>

 <br>
  <label>Date</label>
  <td><input type="date" name="date" class="form-control" value="" > </td>
 <br> 
<label>Title</label>
  <td><input type="text" name="title" class="form-control" value="  "?> </td>
 <br> </div>
 <div class="col-md-6"><br>
<label>Details</label>
  <td><input type="text" name="details" class="form-control" value=" "></td>
 <br>
 <label>Name</label>
 <td><input type="text" name="name" class="form-control" value=" "></td><br><br>
 
 <?php echo form_submit(array(
        
        'value'=> 'Update' ,'class'=>"btn btn-success"
));?></div>
 <?php echo form_close(); ?></div>
            <table class="table table-bordered" id="example1">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Photo</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($blog as $k){  ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>

                        <td><img src="<?php echo base_url('uploads/'. $k->photo)?>" height="100px" weight="100px"></td>
                        <td><?php echo $k->date?></td>
                        <td><?php echo $k->title?></td>
                        <td><?php echo $k->details?></td>
                        <td><?php echo $k->name?></td>
                        <td>
                         <a href="<?php echo base_url().'Admin/delete_blog_list/'.$k->id ?>" onClick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                         <a href="<?php echo base_url().'Admin/edit_blog_list/'.$k->id ?>" class="btn btn-primary">Edit</a>

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
