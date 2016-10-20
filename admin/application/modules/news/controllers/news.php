<?php  class News extends MX_Controller 
{
	function __construct()
	{
		$thiload->model('tutors_model');

		 parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	public function index()
	{
	$session_data=$this->session->all_userdata();
	$data['news'] = $this->tutors_model->getTableData('news');
	//print_r($data['tutor']);
	$data['main_content'] = 'news';
		$this->load->view('includes/template_log', $data);	
	}
	
	public function create()
	{
	
	$path = base_url();'js/ckfinder';
    $width = '680px';
    $this->editor($path,$width);
	
		 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('tutors_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
$this->form_validation->set_rules('title', 'Job Title', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	$data['user'] = $this->tutors_model->getTableRowData('users',$session_data['session_userid']);
	$data['main_content'] = 'add_news';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	  $title = $this->input->post('title');
		$content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
			$tutor_data=array(
		'title'=>$title,
		'description'=>$content,
		'date'=>date('Y-m-d,h:i:s'),
		'status'=>'1',
		);
					 
$res=$this->tutors_model->insertData('news',$tutor_data);
				if($res)
				{
				  $data['alert_message_success']='News Uploaded  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$data['user'] = $this->tutors_model->getTableRowData('users',$session_data['session_userid']);
	$data['main_content'] = 'add_news';
		$this->load->view('includes/template_log', $data);
		
	}
}

function do_upload($file)
	{
		$config['upload_path'] = './images/portfolio/';
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
function del_news()
	{
	 $url=$this->uri->segment(3);
$this->tutors_model->delete_tab_row('news',$url);
         redirect("news/");
	}
 function editor($path,$width) {
    //Loading Library For Ckeditor
    $this->load->library('ckeditor');
    $this->load->library('ckFinder');
    //configure base path of ckeditor folder 
    $this->ckeditor->basePath = base_url().'js/ckeditor/';
    $this->ckeditor-> config['toolbar'] = 'Full';
    $this->ckeditor->config['language'] = 'en';
    $this->ckeditor-> config['width'] = $width;
    //configure ckfinder with ckeditor config 
    $this->ckfinder->SetupCKEditor($this->ckeditor,$path); 
  }
  

public function edit_news()
	{
	
	$path = base_url();'js/ckfinder';
    $width = '680px';
    $this->editor($path,$width);
	
		 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('tutors_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
$this->form_validation->set_rules('title', 'News Title', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	$id=$this->uri->segment(3);
	$data['news'] = $this->tutors_model->getTableRowData('news',$id);
	$data['main_content'] = 'edit_news';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	  $title = $this->input->post('title');
		$content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
			$tutor_data=array(
		'title'=>$title,
		'description'=>$content,
		);
		$id=$this->uri->segment(3);
					 $res=$this->tutors_model->updateTableData('news','id',$id,$tutor_data);  
				if($res)
				{
				  $data['alert_message_success']='News Updated  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$id=$this->uri->segment(3);
	$data['news'] = $this->tutors_model->getTableRowData('news',$id);
	$data['main_content'] = 'edit_news';
		$this->load->view('includes/template_log', $data);
		
	}
}

	}