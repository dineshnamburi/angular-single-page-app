<?php  class Menu extends MX_Controller 
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
		$data['menu'] = $this->tutors_model->getTableData('menu');
	// print_r($data['menu']);
		$data['main_content'] = 'menu';
		$this->load->view('includes/template_log', $data);	

	}


	public function add_item(){
		$session_data=$this->session->all_userdata();
		$data['category'] = $this->tutors_model->getTableData('subchild_category');
		$data['main_content'] = 'add_menu_item';
		$this->load->view('includes/template_log', $data);	
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


			$data['main_content'] = 'add_menu_item';
			$this->load->view('includes/template_log', $data);


		}
		else
		{ 
			$parent = $this->input->post('p_id');
			$child = $this->input->post('c_id');
			$subchild = $this->input->post('s_id');
			$name = $this->input->post('name');
			$type= $this->input->post('type');
			$price = $this->input->post('price');
			$details = $this->input->post('details');
			$res3= $this->do_upload('thumb');
			// print_r ($parent);
			if($res3['status']==TRUE){
				$udata=$res3['upload_data'];

				$image = $udata['file_name'];
			}else{
				$image = '';
			}
			
			$menu_item = array(
				'p_id'=>$parent,
				'c_id'=>$child,
				's_id'=>$subchild,
				'name'=>$name,
				'food_type'=>$type,
				'price'=>$price,
				'details'=>$details,
				'thumb'=>$image,
				);

			$res=$this->tutors_model->insertData('menu',$menu_item);
			print_r($res);
			if($res)
			{
				$data['alert_message_success']='Menu Item Added  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$data['main_content'] = 'add_menu_item';
			$this->load->view('includes/template_log', $data);

		}
	}

	function do_upload($file)
	{
		$config['upload_path'] = '../images/menu_item';
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
	function del_item()
	{
		$id = end($this->uri->segment_array());
			print_r($id);
		$this->tutors_model->delete_tab_row('menu',$url);
		redirect("menu/menu/");
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


	public function edit_menu()
	{

		// $path = base_url();'js/ckfinder';
		// $width = '680px';
		// $this->editor($path,$width);

		$data['alert_message']='';
		$data['alert_message_success']='';
		$this->load->model('tutors_model');
		$session_data=$this->session->all_userdata();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Item Name', 'required');
		if ($this->form_validation->run() === FALSE)
		{
			$session_data=$this->session->all_userdata();
			// $id=$this->uri->segment(4);
			$id = end($this->uri->segment_array());
			print_r($id);
			$data['page'] = $this->tutors_model->getTableRowData('menu',$id);
			$data['main_content'] = 'add_menu_item';
			$this->load->view('includes/template_log', $data);


		}
		else
		{
			$parent = $this->input->post('p_id');
			$child = $this->input->post('c_id');
			$subchild = $this->input->post('s_id');
			$name = $this->input->post('name');
			$type= $this->input->post('type');
			$price = $this->input->post('price');
			$details = $this->input->post('details');
			$res3= $this->do_upload('thumb');
			// print_r ($parent);
			if($res3['status']==TRUE){
				$udata=$res3['upload_data'];

				$image = $udata['file_name'];
			}else{
				$image = '';
			}
			
			$menu_item = array(
				'p_id'=>$parent,
				'c_id'=>$child,
				's_id'=>$subchild,
				'name'=>$name,
				'food_type'=>$type,
				'price'=>$price,
				'details'=>$details,
				'thumb'=>$image,
				);

			$res=$this->tutors_model->insertData('menu',$menu_item);
			print_r($res);
			if($res)
			{
				$data['alert_message_success']='Menu Item Added  Successfully<br>';
			}
			else
			{
				$data['alert_message']='OOPS Server Error Please Try Again';    
			}
			$data['main_content'] = 'add_menu_item';
			$this->load->view('includes/template_log', $data);


		}
	}

}