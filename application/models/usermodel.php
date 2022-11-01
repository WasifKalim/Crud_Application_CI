<?php
 class Usermodel extends CI_model{
    public function __construct()
    {
        $this->load->database();
        parent::__construct();
        $this->load->library('session');
    }
     public function getUserdata()
     {
         //$this->load->database();
         $q=$this->db->query("select * from test");
         return $q->result();
     }
    public function save($data)
    { 
        $result = false;  /////dupiliacte data checking.
        $email = $data['Email_Id'];
        $userData = [
            'Full_Name' => $data['Full_Name'],
            'Email_Id' =>$email,
            'Phone_Number'=>$data['Phone_Number'],
            'Password'=> sha1($data['Password'])
        ];
        $query = $this->db->get_where('test', ['Email_Id' => $email], 1);
        if($query->num_rows() > 0) { 
            $result = false;
        } else {
            $this->db->insert('test', $userData);
            $result = true;
        }  
        return $result;
    }

    public function login($data)
    {
        $result = false;
        $email = $data['email'];
        $password = sha1($data['password']);
        $userData = ['Email_Id' =>$email,'Password'=>$password];
        return $this->db->get_where('test', $userData, 1);
    }
    public function editv($id)
    {
        $this->load->database();
        $query = $this->db->get_where('test', ['id' => $id]);
        $data =  $query->row();
        return $data;
    }
    public function update_d($data,$id)
    { 
        $query=$this->db->update('test',$data,['id' => $id]);
         if($query > 0) {
          $result = true;
      } else {
          $result = false;
      }
      return $result;
     }
     public function delete_d($id)
     {
       $q= $this->db->delete('test',['id' => $id]); 
       return $q->result;
     }
     public function changepass_process($data)
     {
        $email = $data['email'];
        $currentPassword = sha1($data['current_password']);
        $newPassword = sha1($data['new_password']);
        $confirmpassword = sha1($data['confirm_password']);
        if($newPassword != $confirmpassword) {
            
            $this->session->set_flashdata('message',"New and Confirm Password Does't match ");
			redirect('account/change');
           // header('Location: change_password.php?message=New and Confirm password does not match!');
        }
        $query = $this->db->get_where('test', ['Email_Id' => $email,'Password'=>$currentPassword],1);
        $value=$query->num_rows();
        if($value > 0)
        {
            $this->db->update('test',['password'=>$confirmpassword]);
         $result=true;
        }
        else 
        {
        
         $result=false; 
        }
        return $result;
     }
}
?>