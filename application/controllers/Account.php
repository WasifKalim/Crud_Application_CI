<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
    }

  /*  *     
	*
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/userguide3/general/urls.html
	* */ 
	public function index()
	{
		$this->load->view('home');	
	}
	public function login()
	{
        // $this->load->view('page/header');/// header part 
		$this->load->view('account/login');/// body 
        // $this->load->view('page/footer'); /// footer part 
	}
	
	public function register()
	{	
        $this->load->view('account/register');
	}
	public function submit(){
		// change by using ajax
		$this->load->library('form_validation');
        $this->form_validation->set_rules('Full_Name', 'Name', 'required');
        $this->form_validation->set_rules('Email_Id', 'email', 'required|valid_email');
        $this->form_validation->set_rules('Phone_Number', 'number', 'required');
        $this->form_validation->set_rules('Password', 'password', 'required');
		if($this->form_validation->run()){
		$data = $this->input->post();
		$this->load->model('usermodel');
		$postData = json_encode($data);
		var_dump($postData);
		// echo '<pre>';print_r(json_decode($postData));
		die();
		$result = $this->usermodel->save($data);
		if($result) {
			$this->session->set_flashdata('message', 'Registration successfully!');
			redirect('register');
		} else {
			$this->session->set_flashdata('message', 'Email already exist!');
			redirect('register');
		}  
	}
	else{
		$this->load->view('account/register');
	}
	} 
	public function account_login(){
		$data = $this->input->post();
		$this->load->model('usermodel');
		$response = $this->usermodel->login($data);
		$email = $data['email'];
		if($response->num_rows() > 0) {
			$result = $response->row_array();
			$userData['logged_in'] = 1;
			$userData['user_id'] = $result['id'];
			$userData['email'] = $email;
			$userData['name'] = $result['Full_Name'];
			$this->session->set_userdata(array('user'=>$userData));
           redirect('index');
		} else {
			$this->session->set_flashdata('message', 'Userid and password incorrect');
        	redirect('login');
		}
	}
	public function datatable()
	{
		$this->load->model('usermodel');
		$data['users']=$this->usermodel->getUserdata();
       $this->load->view('account/datatable',$data);
	}
	public function edit($id){
		$this->load->view('page/header');
		$this->load->model('usermodel');
		$data['rec'] = $this->usermodel->editv($id); 
		$this->load->view('account/edit', $data);
		$this->load->view('page/footer');
	}
	public function update($id){
		$userdata = $this->input->post();
        $data = [
		'Full_Name'   =>$userdata['Full_Name'],
        'Email_Id'    =>$userdata['Email_Id'],
		'Phone_Number'=>$userdata['Phone_Number'],
        ];
	
		$this->load->model('usermodel');
		$result=$this->usermodel->update_d($data,$id);
		if($result==true)
		{
			redirect('datatable');
		}
		else
		{
			$this->session->set_flashdata('message','TEchnical erro r once  check feild path');
			redirect('edit');
		}
	}
	public function delete($id)
	{   
		
		$this->load->model('usermodel');
		$result=$this->usermodel->delete_d($id);
        if($result==true)
		{
			redirect('datatable');
		}
		else
		{
			$this->session->set_flashdata('message',"id does'nt matched ");
			redirect('datatable');
		}
	}
	public function change()
	{
	 	$this->load->view('page/header');
	 	$this->load->view('account/change');
	 	$this->load->view('page/footer');
	}
	public function changepassword_process()
	{
		$data=$this->input->post();
		// print_r($data);die();
		$this->load->model('usermodel');
		$result=$this->usermodel->changepass_process($data);
		if($result==true)
		{
			$this->session->set_flashdata('success',"Your password change Successfully.");
			redirect('change');
		}
		else
		{
			$this->session->set_flashdata('error',"problem in model part");
			redirect('change');
		}
		
	}
	public function logout()
	{
		//session_start();
		$this->session->sess_destroy();
		redirect('index');
	}
}  
////unset_userdata('user')
