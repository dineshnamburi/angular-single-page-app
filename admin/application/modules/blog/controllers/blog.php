<?php  class Blog extends MX_Controller 
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
	$data['blog'] = $this->tutors_model->getTableData('blog');
	$data['main_content'] = 'blog';
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
$this->form_validation->set_rules('title', 'Blog Title', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	
	
	$data['main_content'] = 'add_blog';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{ 
      $meta_title = $this->input->post('meta_title');
	  $description = $this->input->post('description');
	  $keywords = $this->input->post('keywords');
	  $title = $this->input->post('title');
	   $res3= $this->do_upload('image');
	  

	$slug = url_title($title, 'dash', TRUE);
					  if($res3['status']==TRUE){
			               $udata=$res3['upload_data'];
						   
						   $image = $udata['file_name'];
						   }else{
						   $image = '';
						   }
		$content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
			$blog_data=array(
		'meta_title'=>$meta_title,
        'description'=>$description,
         'keywords'=>$keywords,		
		'title'=>$title,
		'slug'=>$slug,
		'image'=>$image,
		'content'=>$content,
		'date'=>date('Y-m-d,h:i:s'),
		'status'=>'1',
		);
					 
$res=$this->tutors_model->insertData('blog',$blog_data);
				if($res)
				{
				  $data['alert_message_success']='Blog Post Added  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
		$data['main_content'] = 'add_blog';
		$this->load->view('includes/template_log', $data);
		
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
  

public function edit_blog()
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
	$id=$this->uri->segment(3);
	$data['page'] = $this->tutors_model->getTableRowData('blog',$id);
	$data['main_content'] = 'edit_blog';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	 $meta_title = $this->input->post('meta_title');
	  $description = $this->input->post('description');
	  $keywords = $this->input->post('keywords');
	  $title = $this->input->post('title');
	   $res3= $this->do_upload('image');
	  $slug = url_title($title, 'dash', TRUE);
					  if($res3['status']==TRUE){
			               $udata=$res3['upload_data'];
						   
						   $image = $udata['file_name'];
						   $content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
			$blog_data=array(
		'meta_title'=>$meta_title,
        'description'=>$description,
         'keywords'=>$keywords,		
		'title'=>$title,
		'slug'=>$slug,
		'image'=>$image,
		'content'=>$content,
		'date'=>date('Y-m-d,h:i:s'),
		'status'=>'1',
		);
						   }else{
						  $content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
			$blog_data=array(
		'meta_title'=>$meta_title,
        'description'=>$description,
         'keywords'=>$keywords,		
		'title'=>$title,
		'content'=>$content,
		'date'=>date('Y-m-d,h:i:s'),
		'status'=>'1',
		);
						   }
		
		$id=$this->uri->segment(3);
					 $res=$this->tutors_model->updateTableData('blog','id',$id,$blog_data);  
				if($res)
				{
				  $data['alert_message_success']='Post Updated  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$id=$this->uri->segment(3);
	$data['page'] = $this->tutors_model->getTableRowData('blog',$id);
	$data['main_content'] = 'edit_blog';
		$this->load->view('includes/template_log', $data);
		
	}
}

	}