<?php class Settings extends MX_Controller 
{
	function __construct()
	{
		$this->load->model('settings_model');

		 parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	
	
	public function index()
	{
	
	 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('settings_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
       $this->form_validation->set_rules('email', 'Email', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	$data['settings'] = $this->settings_model->getTableRowData('settings','1');
	$data['main_content'] = 'settings';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{

	  $id=$session_data['session_userid'];
             $email= $this->input->post('email');
	     $phone= $this->input->post('phone');
            $fblink=  $this->input->post('fblink');
            $twlink= $this->input->post('twlink');
			$lnkedlink= $this->input->post('lnkedlink');
            $address= $this->input->post('address');
			 $address2= $this->input->post('address2');
          $video_url= $this->input->post('video_url');
			$img= $this->do_upload('logo');
		
					  if($img['status']==TRUE){
			               $udata=$img['upload_data'];
						   $image = $udata['file_name'];
						   $s_data = array(
         'email'=>$email,                   
         'phone'=>$phone,
		 'fb'=>$fblink,
         'twitter'=>$twlink,
		 'linkedin'=>$lnkedlink,
            'address'=>$address,
			 'address2'=>$address2,
            'video_url'=>$video_url,                   
			'logo'=>$image,
                         );   
						   }else{
						   $s_data = array(
         'email'=>$email,                   
         'phone'=>$phone,
		 'fb'=>$fblink,
         'twitter'=>$twlink,
		 'linkedin'=>$lnkedlink,
            'address'=>$address,
			 'address2'=>$address2,
			'video_url'=>$video_url,     
                         );   
						   }
			
			
				$res=$this->settings_model->updateTableData('settings','id','1',$s_data);
				if($res)
				{
				
				  $data['alert_message_success']='Settings Saved Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$data['settings'] = $this->settings_model->getTableRowData('settings','1');
	$data['main_content'] = 'settings';
		$this->load->view('includes/template_log', $data);
	}
}
    
	public function profile()
	{
	
	 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('settings_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
       $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	$data['admin'] = $this->settings_model->getTableRowData('admin','1');
	$data['main_content'] = 'profile';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{

	  $id=$session_data['session_userid'];
             $username= $this->input->post('username');
	     $password= $this->input->post('password');
        $cpassword= $this->input->post('cpassword');   
		
					  
			              
						   $s_data = array(
         'username'=>$username,                   
         'password'=>md5($password),
		 
                         );   
						  
			
				$res=$this->settings_model->updateTableData('admin','id','1',$s_data);
				if($res)
				{
				
				  $data['alert_message_success']='Profile Saved Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$data['admin'] = $this->settings_model->getTableRowData('admin','1');
	$data['main_content'] = 'profile';
		$this->load->view('includes/template_log', $data);
	}
}    
function do_upload($file)
	{
		$config['upload_path'] = '../assets/images/';
		$config['allowed_types'] = 'gif|png|jpg|jpeg';
		//$config['max_size']	= '';
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($file))
		{
			$error = array('error' => $this->upload->display_errors(),'status'=>FALSE);

                        return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data(),'status'=>TRUE);

                        return $data;
		}
	}
	}