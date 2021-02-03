<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="<?php echo base_url() ?>admin_file/admin/bootstrap/css/bootstrap.min.css">
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-6">
		<?php 
echo form_open_multipart('Control/save_user');?>
<?php $c=array();
foreach ($class as $k) {
	$c[$k->id]=$k->name;
}
echo form_dropdown('classID',$c,'select option', 'class=>"form-control"');
  ?>
  <br>
 Name 
 <br>
 <?php echo form_input(array('name'=>'name', 'value'=>'','class'=>'form-control')); ?> 
 <br>
 Roll 
 <br>
 <?php echo form_input(array('name'=>'roll', 'value'=>'','class'=>'form-control')); ?>
 <br>
 Department 
 <br>
 <?php echo form_input(array('name'=>'department', 'value'=>'','class'=>'form-control')); ?>
 <br>
  Email
  <br> 
 <?php echo form_input(array('name'=>'email', 'value'=>'','class'=>'form-control')); ?>
 <br> <br>
 <?php echo form_submit(array(
        
        'value'          => 'submit','class'=>"btn btn-success"
));?>
 <?php echo form_close(); ?></div>
 
</div>
<div class="row"><div class="col-md-12">
	<table class="table-bordered">
		<thead>
			<tr>
				<th>A</th>
				<th>B</th>
				<th>C</th>
			</tr>
		</thead>
	</table>

</div></div>
