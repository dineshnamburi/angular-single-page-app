<?php  class Category extends MX_Controller 
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
		// $data['childs'] = $this->tutors_model->getTableData('child_category');
		$data['main_content'] = 'add_category';
		$this->load->view('includes/template_log', $data);	
	}



	public function add_subcategory (){
		$session_data=$this->session->all_userdata();
		$data['childs'] = $this->tutors_model->getTableData('child_category');
		$data['main_content'] = 'add_subcategory';
		$this->load->view('includes/template_log', $data);	
	}


	public function get_category(){
		$id = $_POST['id'];
		$response = array();
		$response = $this->tutors_model->getTableDataCond('child_category', 'p_id', $id);
		if($response){
			$this->output->set_content_type('application/json')
             ->set_output(json_encode($response));

		}else{
			$this->output->set_content_type('application/json')
             ->set_output(json_encode('Something Went Wrong'));
		}
	}

	public function get_subcategory(){
		$id = $_POST['id'];
		$response = array();
		$response = $this->tutors_model->getTableDataCond('subchild_category', 'c_id', $id);
		if($response){
			$this->output->set_content_type('application/json')
             ->set_output(json_encode($response));

		}else{
			$this->output->set_content_type('application/json')
             ->set_output(json_encode('Something Went Wrong'));
		}
	}
	
	public function create()
	{

		$data['alert_message']='';
		$data['alert_message_success']='';
		$this->load->model('tutors_model');
		$session_data=$this->session->all_userdata();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('p_id', 'Parent', 'required');
		if ($this->form_validation->run() === FALSE)
		{


			$data['main_content'] = 'add_category';
			$this->load->view('includes/template_log', $data);


		}
		else
		{ 
			$parent = $this->input->post('p_id');
			$child = $this->input->post('c_id');
			$title = $this->input->post('title');
			// $res3= $this->do_upload('image');
			// print_r ($parent);
			// if($res3['status']==TRUE){
			// 	$udata=$res3['upload_data'];

			// 	$image = $udata['file_name'];
			// }else{
			// 	$image = '';
			// }
			// $content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
// case sub child
			$res = '';
			if ($child){
			$category_data = array(
				'c_id'=>$child,
				'title'=>$title,
				'p_id'=>$parent,		
				);
			$res=$this->tutors_model->insertData('subchild_category',$category_data);
			}else{
				$category_data = array(
				'p_id'=>$parent,
				'title'=>$title,		
				);
			$res=$this->tutors_model->insertData('child_category',$category_data);
			}

			if($res)
			{
				$data['alert_message_success']='Category Added  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			if($child){
			$data['main_content'] = 'add_subcategory';
			$this->load->view('includes/template_log', $data);
				
			}else{
				$data['main_content'] = 'add_category';
			$this->load->view('includes/template_log', $data);
			}

		}
	}

	function do_upload($file)
	{
		$config['upload_path'] = '../images/blog/';
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
	function del_blog()
	{
		$url=$this->uri->segment(3);
		$this->tutors_model->delete_tab_row('blog',$url);
		redirect("blog/");
	}

}