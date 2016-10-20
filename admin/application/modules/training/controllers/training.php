<?php class Training extends MX_Controller 
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
		$data['training'] = $this->tutors_model->getTableData('training');

	//print_r($data['tutor']);
		$data['main_content'] = 'training';
		$this->load->view('includes/template_log', $data);	
	}
	
	public function create()
	{


		$data['alert_message']='';
		$data['alert_message_success']='';
		$this->load->model('tutors_model');
		$session_data=$this->session->all_userdata();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('courseName', 'Name', 'required');
// $this->form_validation->set_rules('link', 'Link', 'required');
// $data['category'] = $this->tutors_model->getTableData('training_category');
		if ($this->form_validation->run() === FALSE)
		{
			$session_data=$this->session->all_userdata();

			$data['main_content'] = 'add_training';
			$this->load->view('includes/template_log', $data);


		}
		else
		{
	  // $category = $this->input->post('category');
			$courseName = $this->input->post('courseName');	
			$desc = $this->input->post('description');
			$duration = $this->input->post('duration');	
			$price = $this->input->post('price');	

			$train_data=array(
				'course_name'=>$courseName,
				'duration'=>$duration,
				'description'=>$desc,
				'price'=>$price,
				);

			$res=$this->tutors_model->insertData('training',$train_data);
			if($res)
			{
				$data['alert_message_success']='New Training Created  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$session_data=$this->session->all_userdata();
			$data['main_content'] = 'add_training';
			$this->load->view('includes/template_log', $data);

		}
	}

	// function do_upload($file)
	// {
	// 	$config['upload_path'] = '../images/training/';
	// 	$config['allowed_types'] = 'gif|png|jpg|jpeg';
	// 	//$config['max_size']	= '';
	// 	$this->load->library('upload', $config);

	// 	if ( ! $this->upload->do_upload($file))
	// 	{
	// 		$error = array('error' => $this->upload->display_errors(),'status'=>FALSE);

	// 		return $error;
	// 	}
	// 	else
	// 	{
	// 		$data = array('upload_data' => $this->upload->data(),'status'=>TRUE);

	// 		return $data;
	// 	}
	// }


	function del()
	{
		$url=$this->uri->segment(3);
		$this->tutors_model->delete_tab_row('training',$url);
		redirect("training/");
	}
	// function editor($path,$width) {
 //    //Loading Library For Ckeditor
	// 	$this->load->library('ckeditor');
	// 	$this->load->library('ckFinder');
 //    //configure base path of ckeditor folder 
	// 	$this->ckeditor->basePath = base_url().'js/ckeditor/';
	// 	$this->ckeditor-> config['toolbar'] = 'Full';
	// 	$this->ckeditor->config['language'] = 'en';
	// 	$this->ckeditor-> config['width'] = $width;
 //    //configure ckfinder with ckeditor config 
	// 	$this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
	// }


	public function edit()
	{

		$data['alert_message']='';
		$data['alert_message_success']='';
		$this->load->model('tutors_model');
		$session_data=$this->session->all_userdata();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('courseName', 'Name', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$session_data=$this->session->all_userdata();

			$id=$this->uri->segment(3);
			$data['training'] = $this->tutors_model->getTableRowData('training',$id);
			$data['main_content'] = 'edit_training';
			$this->load->view('includes/template_log', $data);


		}
		else
		{
			// $id=$this->uri->segment(3);
			// $training = $this->_model->getTableRowData('training',$id);

			$courseName = $this->input->post('courseName');	
			$desc = $this->input->post('description');
			$duration = $this->input->post('duration');	
			$price = $this->input->post('price');	

			$train_data=array(
				'course_name'=>$courseName,
				'duration'=>$duration,
				'description'=>$desc,
				'price'=>$price,
				);


			$id=$this->uri->segment(3);
			$res=$this->tutors_model->updateTableData('training','id',$id,$train_data);  
			if($res)
			{
				$data['alert_message_success']='training Updated  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$session_data=$this->session->all_userdata();
			$id=$this->uri->segment(3);
			$data['training'] = $this->tutors_model->getTableRowData('training',$id);
			$data['main_content'] = 'edit_training';
			$this->load->view('includes/template_log', $data);

		}
	}

}