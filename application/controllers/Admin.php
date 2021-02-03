<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		
	}


	public function index()
	{
		$adminID=$this->session->userdata('adminID');
		if($adminID){
			redirect(base_url().'Admin/dashboard','refresh');
		}
		$this->load->view('admin/index');
	}


	public function login()
	{
		$data=$this->input->post();
		//var_dump($data);
		$user=$this->Dry_model->find('user','*',NULL,$data);
		if($user){
			$this->session->set_userdata('adminID',$user->id);
			$this->session->set_userdata('name',$user->name);
			redirect(base_url().'Admin/dashboard','refresh');

		}
		else{
			$this->session->set_flashdata('msg','Invalid email or password');
			redirect(base_url().'Admin','refresh');
		}

	}
	public function dashboard(){
		$this->session->set_userdata('menu','g');
		$adminID=$this->session->userdata('adminID');
		if(!isset($adminID)){
			redirect(base_url().'Admin','refresh');
		}
		$this->load->view('admin/dashboard');
	}

	public function logout(){
		$this->session->unset_userdata('adminID');
		$this->session->unset_userdata('name');
		redirect(base_url().'Admin','refresh');
	}
	public function users(){
		$this->session->set_userdata('menu','user');
		$adminID=$this->session->userdata('adminID');
		if(!isset($adminID)){
			redirect(base_url().'Admin','refresh');
		}
		$data['list']=$this->Dry_model->fetchAll('user','*');
		$this->load->view('admin/user_list',$data);
	}

	public function delete_user($id){
		$adminID=$this->session->userdata('adminID');
		if(!isset($adminID)){
			redirect(base_url().'Admin','refresh');
		}
		$this->Dry_model->delete('user',array('id'=>$id));
		redirect(base_url().'Admin/users','refresh');

	}
	public function isloggedin(){
		$this->session->set_userdata('menu','user');
		$adminID=$this->session->userdata('adminID');
		if(!isset($adminID)){
			redirect(base_url().'Admin','refresh');
		}
	}
	public function edit($id){
		$this->isloggedin();
		$data['user']=$this->Dry_model->find('user','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/edit_user',$data);
	}
	public function update_user(){
		$data=$this->input->post();
		$this->Dry_model->update('user',$data,array('id'=>$data['id']));
		redirect(base_url().'Admin/users','refresh');
	}
	public function add_users(){
		$this->isloggedin();
		$this->load->view('admin/add_users');
	}

	public function save_user(){
		$data=$this->input->post();
		$this->Dry_model->insert('user',$data);
		redirect(base_url().'Admin/users','refresh');
	}
	public function bannrer(){
		$data['edit']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('admin/banner',$data);
		//var_dump($data);exit();
	}
	public function update_banner(){
		$data=$this->input->post();

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('logo_2')) {
			$d=$this->upload->data();
			$data['logo_2']=$d['file_name']; 
				}

		
		if ($this->upload->do_upload('image')) {
			$d=$this->upload->data();
			$data['image']=$d['file_name']; 
		}

		
		if ($this->upload->do_upload('logo')) {
			$d=$this->upload->data();
			$data['logo']=$d['file_name'];
		}

		else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
		$this->Dry_model->update('banner',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/bannrer','refresh');

	}

	public function outstanding(){
		$data['outstanding']=$this->Dry_model->find('outstanding','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/outstanding',$data);
	}

	public function update_outstanding(){
		$data=$this->input->post();

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$d=$this->upload->data();
			$data['image']=$d['file_name']; 
				}

		
		

		else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
		$this->Dry_model->update('outstanding',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/outstanding','refresh');

	}
	public function global(){
		$data['global']=$this->Dry_model->find('global','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/global',$data);
	}

public function update_global(){
		$data=$this->input->post();

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$d=$this->upload->data();
			$data['image']=$d['file_name']; 
				}

		
		if ($this->upload->do_upload('p_image')) {
			$d=$this->upload->data();
			$data['p_image']=$d['file_name']; 
		}

		
		if ($this->upload->do_upload('p_sign')) {
			$d=$this->upload->data();
			$data['p_sign']=$d['file_name'];
		}

		else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
		$this->Dry_model->update('global',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/global','refresh');

	}
	public function service(){
		$data['service']=$this->Dry_model->fetchAll('service','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/service',$data);
	}

	public function edit_service($id=NULL){
		$data['edit_service']=$this->Dry_model->find('service','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/update_service',$data);
	}
	public function update_service($id=NULL){
		$data=$this->input->post();

    $this->Dry_model->update('service',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/service','refresh');
	}
	public function best_dance(){
		$data['best_dance']=$this->Dry_model->find('best_dance','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/best_dance',$data);
	}
		public function update_best_dance(){
		$data=$this->input->post();

    $this->Dry_model->update('best_dance',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/best_dance','refresh');
}
public function online_dance(){
$data['online_dance']=$this->Dry_model->find('online_dance','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/online_dance',$data);
 }
 public function update_online_dance_update(){
   		$data=$this->input->post();
		 $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$d=$this->upload->data();
			$data['image']=$d['file_name']; 
			//var_dump($d);exit();
				}

		
		if ($this->upload->do_upload('image_2')) {
			$d=$this->upload->data();
			$data['image_2']=$d['file_name']; 
		}

else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
		$this->Dry_model->update('online_dance',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/online_dance','refresh');


 }
 public function testimonials(){
 	$data['testimonials']=$this->Dry_model->fetchAll('testimonials','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/testimonials',$data);
 }

 public function edit_testimonials($id=NULL){
		$data['edit_testimonials']=$this->Dry_model->find('testimonials','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/update_testimonials',$data);
	}

	public function update_testimonials($id=NULL){
			$data=$this->input->post();
		 $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('p_image')) {
			$d=$this->upload->data();
			$data['p_image']=$d['file_name']; 
			//var_dump($data);exit();
}
else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
		$this->Dry_model->update('testimonials',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/testimonials','refresh');
	}
	public function team(){
			$data['team']=$this->Dry_model->fetchAll('team','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/team',$data);
	}
	public function edit_team($id=NULL){
		$data['edit_team']=$this->Dry_model->find('team','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/update_team',$data);
	}
	public function update_team($id=NULL){
		$data=$this->input->post();
		 $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('image')) {
			$d=$this->upload->data();
			$data['image']=$d['file_name']; 
			//var_dump($data);exit();
}
else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
		$this->Dry_model->update('team',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/team','refresh');
	}
	public function classes($id=NULL){
		$data['classes']=$this->Dry_model->fetchAll('classes','*',NULL,NULL);
			
		//var_dump($data);exit();
		$this->load->view('admin/classes',$data);
	}
	public function edit_classes($id=NULL){
			$data['edit_classes']=$this->Dry_model->find('classes','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/update_classes',$data);
	}
	public function update_classes($id=NULL){
		$data=$this->input->post();
		 $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('photo')) {
			$d=$this->upload->data();
			$data['photo']=$d['file_name']; 
			//var_dump($data);exit();
}
else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
	$this->Dry_model->update('classes',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/classes','refresh');
	}

	public function events()
	{
		$data['events']=$this->Dry_model->fetchAll('events','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/events',$data);
	}

	public function edit_events($id=NULL){
		$data['edit_events']=$this->Dry_model->find('events','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/edit_events',$data);
	}

	public function update_events(){
		$data=$this->input->post();

    $this->Dry_model->update('events',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/events','refresh');
}




	public function events_details($id=NULL){
		$data['events_details']=$this->Dry_model->find('events_details','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/events_details',$data);
	}
	public function update_events_details($id=NULL)
	{
		$data=$this->input->post();
		 $config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';

		$this->load->library('upload', $config);
		if ($this->upload->do_upload('photo')) {
			$d=$this->upload->data();
			$data['photo']=$d['file_name']; 
			//var_dump($data);exit();
}
else{
			$error=$this->upload->display_errors();
        	$this->session->set_flashdata('error', $error);
        	//redirect(base_url('Control/file_upload'),'refresh');
		}
	$this->Dry_model->update('events_details',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/events_details','refresh');

	}

	public function message()
	{
		$data=$this->input->post();
		//var_dump($data);exit();
		$this->Dry_model->insert('message',$data);
		redirect(base_url().'Front/contact_us','refresh');
	}
	public function contact_message()
	{
		$data['message']=$this->Dry_model->fetchAll('message','*',NULL,NULL);
		//var_dump($data);exit();
			$this->load->view('admin/contact_message',$data);

	}
	public function delete_message($id=NULL)
	{
		$this->Dry_model->delete('message',array('id'=>$id));
		redirect(base_url().'Admin/contact_message','refresh');
	}

	public function class_shedule($id=NULL)
	{
		$data['class_schedule']=$this->Dry_model->fetchAll('`class_schedule','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('admin/class_shedule',$data);
	}
	public function edit_class_schedule($id=NULL)
	{
		$data['edit_class_schedule']=$this->Dry_model->find('class_schedule','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/edit_class_schedule',$data);
	}
	public function update_class_schedule()
	{
		$data=$this->input->post();

    $this->Dry_model->update('class_schedule',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/class_shedule','refresh');
	}

	public function booking_list()
	{
		$data['class_booking']=$this->Dry_model->fetchAll('class_booking','*',NULL,NULL);
		//var_dump($data);exit();
			$this->load->view('admin/class_booking',$data);
	}
	public function delete_class_booking($id=NULL)
	{
		$this->Dry_model->delete('class_booking',array('id'=>$id));
		redirect(base_url().'Admin/booking_list','refresh');
	}

	public function about_us()
	{
		$data['edit']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('Admin/about_us',$data);

	}
	public function blog_list($id=NULL)
	{
		$data['blog']=$this->Dry_model->fetchAll('blog','*',NULL,NULL);
		$this->load->view('Admin/blog_list',$data);
	}
		public function edit_blog_list($id=NULL)
	{
		$data['edit_blog']=$this->Dry_model->find('blog','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('admin/edit_blog_list',$data);
	}
	public function update_blog_list()
	{
		$data=$this->input->post();

    $this->Dry_model->update('blog',$data,array('id'=>$data['id']));
			redirect(base_url().'Admin/blog_list','refresh');
	}
	public function delete_blog_list($id=NULL)
	{
		$data=$this->Dry_model->delete('blog',array('id'=>$id));
		redirect(base_url().'Admin/blog_list','refresh');
	}
	public function insert_blog()
	{
		$data=$this->input->post();

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['encrypt_name'] = TRUE;
		$config['max_size']     = '100000';
		$config['max_width'] = '102400';
		$config['max_height'] = '76800';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('photo')) {
			$d=$this->upload->data();
			$data['photo']=$d['file_name']; 
				}

		if ($this->upload->do_upload('image')) {
			$d=$this->upload->data();
			$data['image']=$d['file_name']; 
		}
		$this->Dry_model->insert('blog',$data);
		redirect(base_url().'Admin/blog_list','refresh');
	}
	
	
}
