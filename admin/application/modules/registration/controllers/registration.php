<?php  class Registration extends MX_Controller 
{
	function __construct()
	{
		$this->load->model('tutors_model');

		parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	public function index()
	{
		$session_data=$this->session->all_userdata();
		$data['users'] = $this->tutors_model->getTableData('users');
		$data['main_content'] = 'registration';
		$this->load->view('includes/template_log', $data);	
	}



	public function partners()
	{
		$session_data=$this->session->all_userdata();
		$data['users'] = $this->tutors_model->getTableData('partners');
		$data['main_content'] = 'partners';
		$this->load->view('includes/template_log', $data);	
	}

	// public function editPartner (){
	// 	$session_data=$this->session->all_userdata();
	// 	$id = $this->uri->segment(3);
	// 	$data['users'] = $this->tutors_model->getTableRowData('partners', $id);
	// 	$data['main_content'] = 'edit_partner';
	// 	$this->load->view('includes/template_log', $data);
	// }

	// public function editUser (){
	// 	$session_data=$this->session->all_userdata();
	// 	$id = $this->uri->segment(3);
	// 	$data['users'] = $this->tutors_model->getTableRowData('users', $id);
	// 	$data['main_content'] = 'edit_user';
	// 	$this->load->view('includes/template_log', $data);
	// }

	public function editUser(){
		$data['alert_message']='';
		$data['alert_message_success']='';
		$session_data=$this->session->all_userdata();
		$this->load->model('tutors_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'email', 'required');
		if ($this->form_validation->run() === FALSE){
			$session_data=$this->session->all_userdata();
			$id = $this->uri->segment(3);
			$data['users'] = $this->tutors_model->getTableRowData('users', $id);
			$data['main_content'] = 'edit_user';
			$this->load->view('includes/template_log', $data);

		}else{

			// $ids = $this->input->post('id');

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$title = $this->input->post('title');
			$phone = $this->input->post('phone');
			$position = $this->input->post('position');
			$company = $this->input->post('company');
			$address = $this->input->post('address');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$postal_code = $this->input->post('postal_code');
			$country = $this->input->post('country');
			$verified = $this->input->post('verified');
			
			if($password == ''){

				$user_data=array(
					'name'=>$name,
					'email'=>$email,
					'phone'=>$phone,		
					'position'=>$position,
					'company'=>$company,
					'address'=>$address,
					'city'=>$city,
					'state'=>$state,
					'country'=>$country,
					'verified'=>$verified,
					'postal_code'=>$postal_code,
					'title'=>$title,
					'modified'=>date('Y-m-d,h:i:s'),
					
					);
			}else{
				$user_data=array(
					'name'=>$name,
					'email'=>$email,
					'phone'=>$phone,		
					'position'=>$position,
					'company'=>$company,
					'address'=>$address,
					'city'=>$city,
					'state'=>$state,
					'country'=>$country,
					'verified'=>$verified,
					'postal_code'=>$postal_code,
					'title'=>$title,
					'modified'=>date('Y-m-d,h:i:s'),
					'password'=>md5($password),
					
					);
			}
			print_r($user_data);

			$id=$this->uri->segment(3);
			$res=$this->tutors_model->updateTableData('users','id',$id,$user_data);  
			if($res)
			{
				$data['alert_message_success']='User Updated  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$session_data=$this->session->all_userdata();
			$id = $this->uri->segment(3);
			$data['users'] = $this->tutors_model->getTableRowData('users', $id);
			$data['main_content'] = 'edit_user';
			$this->load->view('includes/template_log', $data);

		}
	}


	public function editPartner(){
		$data['alert_message']='';
		$data['alert_message_success']='';
		$session_data=$this->session->all_userdata();
		$this->load->model('tutors_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'email', 'required');
		if ($this->form_validation->run() === FALSE){
			$session_data=$this->session->all_userdata();
			$id = $this->uri->segment(3);
			$data['users'] = $this->tutors_model->getTableRowData('partners', $id);
			$data['main_content'] = 'edit_partner';
			$this->load->view('includes/template_log', $data);

		}else{

			// $ids = $this->input->post('id');

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$phone = $this->input->post('phone');
			$website = $this->input->post('website');
			$company = $this->input->post('company');
			$street = $this->input->post('street');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$country = $this->input->post('country');
			$verified = $this->input->post('verified');
			
			if($password == ''){

				$user_data=array(
					'name'=>$name,
					'email'=>$email,
					'phone'=>$phone,		
					'website'=>$website,
					'company'=>$company,
					'street'=>$street,
					'city'=>$city,
					'state'=>$state,
					'country'=>$country,
					'verified'=>$verified,
					'modified'=>date('Y-m-d,h:i:s'),
					
					);
			}else{
				$user_data=array(
					'name'=>$name,
					'email'=>$email,
					'phone'=>$phone,		
					'website'=>$website,
					'company'=>$company,
					'street'=>$street,
					'city'=>$city,
					'state'=>$state,
					'country'=>$country,
					'verified'=>$verified,
					'modified'=>date('Y-m-d,h:i:s'),
					'password'=>md5($password),
					
					);
			}

			$id=$this->uri->segment(3);
			$res=$this->tutors_model->updateTableData('partners','id',$id,$user_data);  
			if($res)
			{
				$data['alert_message_success']='User Updated  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$session_data=$this->session->all_userdata();
			$id = $this->uri->segment(3);
			$data['users'] = $this->tutors_model->getTableRowData('partners', $id);
			$data['main_content'] = 'edit_partner';
			$this->load->view('includes/template_log', $data);
		}
	}

}