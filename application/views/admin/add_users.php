<?php $this->load->view('admin/head_c');?>
<div class="wrapper">
  <?php $this->load->view('admin/leftMenu');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>Admin/dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo base_url()?>Admin/add_users">Add User </a></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body" style="min-height: 73vh">
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                     
                    </tr>
                </thead>
                <tbody>
                  <tr>
                   <form action=" <?php echo base_url()?>Admin/save_user" method="post">
                    <td><input type="text" name="name" ></td>
                    <td><input type="text" name="email"></td>
                    <td><input type="text" name="password"></td>
                   
                   </tr>

                </tbody>
               <table> <tr> 
                
                    <input type="submit" value="Save" class="btn btn-success">
                  </tr>  </table>
                  
                  
                
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
