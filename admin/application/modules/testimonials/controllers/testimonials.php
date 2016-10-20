<?php  class Testimonials extends MX_Controller 
{
	function __construct()
	{
		$this->load->model('testimonials_model');

		 parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	public function index()
	{
	$session_data=$this->session->all_userdata();
	$data['testimonials'] = $this->testimonials_model->getTableData('testimonials');
	//print_r($data['tutor']);
	$data['main_content'] = 'testimonials';
		$this->load->view('includes/template_log', $data);	
	}
	
	public function create()
	{
	
	$path = base_url();'js/ckfinder';
    $width = '680px';
    $this->editor($path,$width);
	
		 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('testimonials_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
$this->form_validation->set_rules('name', 'Name', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	$data['main_content'] = 'add_testimonial';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	  $name = $this->input->post('name');
	  $designation = $this->input->post('designation');
		$content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
		$img= $this->do_upload('image');
					  if($img['status']==TRUE){
			               $udata=$img['upload_data'];
						   $image = $udata['file_name'];
						   }else{
						   $image = '';
						   }
						   
			$tutor_data=array(
		'name'=>$name,
		'content'=>$content,
		'designation'=>$designation,
		'image'=>$image,
		'status'=>'1',
		);
					 
$res=$this->testimonials_model->insertData('testimonials',$tutor_data);
				if($res)
				{
				  $data['alert_message_success']='Testimonial Uploaded  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$data['main_content'] = 'add_testimonial';
		$this->load->view('includes/template_log', $data);
		
	}
}

function do_upload($file)
	{
		$config['upload_path'] = '../images/testimonials/';
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


function del()
	{
	 $url=$this->uri->segment(3);
$this->testimonials_model->delete_tab_row('testimonials',$url);
         redirect("testimonials/");
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
  

public function edit()
	{
	
	$path = base_url();'js/ckfinder';
    $width = '680px';
    $this->editor($path,$width);
	
		 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('testimonials_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
$this->form_validation->set_rules('name', 'Name', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	$id=$this->uri->segment(3);
	$data['testimonial'] = $this->testimonials_model->getTableRowData('testimonials',$id);
	$data['main_content'] = 'edit_testimonial';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	  $name = $this->input->post('name');
	  $designation = $this->input->post('designation');
		$content=htmlspecialchars($this->input->post('content'),ENT_QUOTES);
			$tutor_data=array(
		'name'=>$name,
		'content'=>$content,
		'designation'=>$designation,
		);
		$id=$this->uri->segment(3);
					 $res=$this->testimonials_model->updateTableData('testimonials','id',$id,$tutor_data);  
				if($res)
				{
				  $data['alert_message_success']='Testimonial Updated  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$id=$this->uri->segment(3);
	$data['testimonial'] = $this->testimonials_model->getTableRowData('testimonials',$id);
	$data['main_content'] = 'edit_testimonial';
		$this->load->view('includes/template_log', $data);
		
	}
}

	}