<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index($id=NULL)
	{	
		$data['outstanding']=$this->Dry_model->find('outstanding','*',NULL,NULL);
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$data['global']=$this->Dry_model->find('global','*',NULL,NULL);
		$data['service']=$this->Dry_model->fetchAll('service','*',NULL,NULL);
		$data['best_dance']=$this->Dry_model->find('best_dance','*',NULL,NULL);
		$data['online_dance']=$this->Dry_model->find('online_dance','*',NULL,NULL);
		$data['testimonials']=$this->Dry_model->fetchAll('testimonials','*',NULL,NULL);
		$data['team']=$this->Dry_model->fetchAll('team','*',NULL,NULL);
		$data['classes']=$this->Dry_model->fetchAll('classes','*',NULL,NULL);
		$data['events']=$this->Dry_model->fetchAll('events','*',NULL,NULL);
		// //$data['articles']=$this->Dry_model->fetchAll('articles','*',NULL,NULL);
		$data['blog']=$this->Dry_model->fetchAll('blog','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('index',$data);
	}
	public function events_details($id)
	{	
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$data['events_details']=$this->Dry_model->find('events_details','*',NULL,array('id'=>$id));
		$data['events']=$this->Dry_model->find('events','*',NULL,array('id'=>$id));
		//var_dump($data);exit();
		$this->load->view('events_details',$data);
	}
	public function events($id=NULL)
	{$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
	$data['events']=$this->Dry_model->fetchAll('events','*',NULL,NULL);
//var_dump($data);exit();
		$this->load->view('events',$data);
	}
	public function our_class($id=NULL)
	{
		$data['classes']=$this->Dry_model->fetchAll('classes','*',NULL,NULL);
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('our_class',$data);
	}
		public function class_details($id=NULL)
	{
	
		$data['class_schedule']=$this->Dry_model->fetchAll('class_schedule','*',NULL,NULL);
		$data['class_details']=$this->Dry_model->find('classes_details','*',NULL,NULL);	
		$data['classes']=$this->Dry_model->find('classes','*',NULL,array('id'=>$id));	
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('class_details',$data);
	}
	public function about_us()
	{$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('about_us',$data);
	}
	public function our_studio()
	{$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('our_studio',$data);
	}
	public function protfolio()
	{$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('protfolio',$data);
	}

	public function faq()
	{$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('faq',$data);
	}
	public function contact_us()
	{
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('contact_us',$data);
	}
	public function blog()
	{
		$data['blog']=$this->Dry_model->fetchAll('blog','*',NULL,NULL);

		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		//var_dump($data);exit();
		$this->load->view('blog',$data);
	}
	public function blog_details($id=NULL)
	{
		$data['blog']=$this->Dry_model->find('blog','*',NULL, array('id'=>$id));
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$this->load->view('blog_details',$data);
	}

	public function class_booking()
	{
		$data['banner']=$this->Dry_model->find('banner','*',NULL,NULL);
		$data['classes']=$this->Dry_model->fetchAll('classes','*',NULL,NULL);
		$this->load->view('class_booking',$data);
	}
	public function bookingData()
	{
		$data=$this->input->post();
		$this->Dry_model->insert('class_booking',$data);
		redirect(base_url().'Front/class_booking','refresh');

	}
}


