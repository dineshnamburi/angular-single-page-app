<?php  class Gallery extends MX_Controller 
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
		$data['gallery'] = $this->tutors_model->getTableData('gallery');
		print_r($data);
		$data['main_content'] = 'gallery';
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
			$session_data=$this->session->all_userdata();
			$data['main_content'] = 'add_image';
			$this->load->view('includes/template_log', $data);
		}
		else
		{
			$title = $this->input->post('title');	
			$res2= $this->do_upload('image');
			if($res2['status']==TRUE){
				$udata=$res2['upload_data'];
				$image = $udata['file_name'];
			}else{
				$image = '';
			}
			
			$tutor_data=array(
				'title'=>$title,
				'image'=>$image,
				'status'=>'1',
				);
			
			
			$res=$this->tutors_model->insertData('gallery',$tutor_data);
			if($res)
			{
				$data['alert_message_success']='Image Uploaded  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$session_data=$this->session->all_userdata();
			
			$data['main_content'] = 'add_image';
			$this->load->view('includes/template_log', $data);
			
		}
	}

	function do_upload($file)
	{
		$config['upload_path'] = '../images/gallery/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']	= '200';
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
	function del()
	{
		$url=$this->uri->segment(3);
		$this->tutors_model->delete_tab_row('gallery',$url);
		redirect("gallery/");
	}
}