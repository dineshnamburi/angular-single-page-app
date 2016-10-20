<?php  class Clients extends MX_Controller 
{
	function __construct()
	{
		$this->load->model('tutors_model');

		parent::__construct();
		$this->load->helper('url');
		modules::run('login/is_logged_in');
		
	}

	public function index()
	{
		$session_data=$this->session->all_userdata();
		$data['client'] = $this->tutors_model->getTableData('client');
		$data['main_content'] = 'client';
		$this->load->view('includes/template_log', $data);	
	}
	
	public function create()
	{

		$data['alert_message']='';
		$data['alert_message_success']='';
		$this->load->model('tutors_model');
		$session_data=$this->session->all_userdata();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');

		if ($this->form_validation->run() === FALSE)
		{


			$data['main_content'] = 'add_client';
			$this->load->view('includes/template_log', $data);


		}
		else
		{ 
			$title = $this->input->post('title');
			$res3= $this->do_upload('image');


			if($res3['status']==TRUE){
				$udata=$res3['upload_data'];

				$image = $udata['file_name'];
			}else{
				$image = '';
			}
			$client_data=array(
				'title'=>$title,
				'image'=>$image,
				);

			$res=$this->tutors_model->insertData('client',$client_data);
			if($res)
			{
				$data['alert_message_success']='Client Added  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$data['main_content'] = 'add_client';
			$this->load->view('includes/template_log', $data);

		}
	}

	function do_upload($file)
	{
		$config['upload_path'] = '../images/client/';
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
	function del_client()
	{
		$url=$this->uri->segment(3);
		$this->tutors_model->delete_tab_row('client',$url);
		redirect("clients/");
	}
	

	public function edit_client()
	{

		$data['alert_message']='';
		$data['alert_message_success']='';
		$this->load->model('tutors_model');
		$session_data=$this->session->all_userdata();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$session_data=$this->session->all_userdata();
			$id=$this->uri->segment(3);
			$data['page'] = $this->tutors_model->getTableRowData('client',$id);
			$data['main_content'] = 'edit_client';
			$this->load->view('includes/template_log', $data);


		}
		else
		{
			$title = $this->input->post('title');
			$res3= $this->do_upload('image');
			if($res3['status']==TRUE){
				$udata=$res3['upload_data'];

				$image = $udata['file_name'];
				$client_data=array(
					'title'=>$title,
					'image'=>$image
					);
			}else{
				$client_data=array(
					'title'=>$title,
					);
			}

			$id=$this->uri->segment(3);
			$res=$this->tutors_model->updateTableData('client','id',$id,$client_data);  
			if($res)
			{
				$data['alert_message_success']='client Updated  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$session_data=$this->session->all_userdata();
			$id=$this->uri->segment(3);
			$data['page'] = $this->tutors_model->getTableRowData('client',$id);
			$data['main_content'] = 'edit_client';
			$this->load->view('includes/template_log', $data);

		}
	}

}