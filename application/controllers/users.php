<?php
defined('BASEPATH') OR exit('No direct script acess allowed');
class Users extends CI_Controller
{
    public function User()
    {
        $this->load->model('Usermodel'); 
        $data['users']=$this->Usermodel->getUserdata();
        $this->load->view('Users/userlist',$data);
    }
}
?>  
