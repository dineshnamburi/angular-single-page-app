<?php class Portfolio extends MX_Controller 
{
	function __construct()
	{
		$this->load->model('portfolio_model');
		

		 parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	public function index()
	{
	$session_data=$this->session->all_userdata();
	$data['portfolio'] = $this->portfolio_model->getTableData('portfolio');
	
	//print_r($data['tutor']);
	$data['main_content'] = 'portfolio';
		$this->load->view('includes/template_log', $data);	
	}
	
	public function create()
	{
	
	$path = base_url();'js/ckfinder';
    $width = '680px';
    $this->editor($path,$width);
	
		 $data['alert_message']='';
            $data['alert_message_success']='';
			$this->load->model('portfolio_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
$this->form_validation->set_rules('name', 'Name', 'required');
$this->form_validation->set_rules('link', 'Link', 'required');
$data['category'] = $this->portfolio_model->getTableData('portfolio_category');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	
	$data['main_content'] = 'add_portfolio';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	  $category = $this->input->post('category');
	   $name = $this->input->post('name');	
	  $link = $this->input->post('link');
	  $res2= $this->do_upload('thumb');
					  if($res2['status']==TRUE){
			               $udata=$res2['upload_data'];
						   $thumb = $udata['file_name'];
						   }else{
						   $thumb = '';
						   }		
						   
						   $res3= $this->do_upload('image');
					  if($res3['status']==TRUE){
			               $udata2=$res3['upload_data'];
						   $image = $udata2['file_name'];
						   }else{
						   $image = '';
						   }			   
			$category_data=array(
		'name'=>$name,
		'cat'=>$category,
		'link'=>$link,
		'thumb'=>$thumb,
		'image'=>$image,
		'status'=>'1',
		);
					 
$res=$this->portfolio_model->insertData('portfolio',$category_data);
				if($res)
				{
				  $data['alert_message_success']='New Portfolio Created  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$data['main_content'] = 'add_portfolio';
		$this->load->view('includes/template_log', $data);
		
	}
}

function do_upload($file)
	{
		$config['upload_path'] = '../images/portfolio/';
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
$this->portfolio_model->delete_tab_row('portfolio',$url);
         redirect("portfolio/");
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
			$this->load->model('portfolio_model');
			$session_data=$this->session->all_userdata();
			 $this->load->library('form_validation');
$this->form_validation->set_rules('name', 'Name', 'required');
	    if ($this->form_validation->run() === FALSE)
	{
	$session_data=$this->session->all_userdata();
	
	$id=$this->uri->segment(3);
	$data['portfolio'] = $this->portfolio_model->getTableRowData('portfolio',$id);
	$data['category'] = $this->portfolio_model->getTableData('portfolio_category');
	$data['main_content'] = 'edit_portfolio';
		$this->load->view('includes/template_log', $data);
		
	
	}
	else
	{
	$id=$this->uri->segment(3);
	$portfolio = $this->portfolio_model->getTableRowData('portfolio',$id);
	
	  $name = $this->input->post('name');
	  $category = $this->input->post('category');
	  $link = $this->input->post('link');
	  
	 	$res2= $this->do_upload('thumb');
					  if($res2['status']==TRUE){
			               $udata=$res2['upload_data'];
						   $thumb = $udata['file_name'];
						   }else{
						   $thumb = $portfolio['thumb'];
						   }		
						   
						   $res3= $this->do_upload('image');
					  if($res3['status']==TRUE){
			               $udata2=$res3['upload_data'];
						   $image = $udata2['file_name'];
						   }else{
						   $image = $portfolio['image'];
						   }		
		
			$data=array(
			'name'=>$name,
		'cat'=>$category,
		'link'=>$link,
		'thumb'=>$thumb,
		'image'=>$image,
		'status'=>'1',
		);
		$id=$this->uri->segment(3);
					 $res=$this->portfolio_model->updateTableData('portfolio','id',$id,$data);  
				if($res)
				{
				  $data['alert_message_success']='Portfolio Updated  Successfully<br>';
				}
				else
				{
				  $data['alert_message']='OOPS Server Error Please Try Again';    
				}
	$session_data=$this->session->all_userdata();
	$id=$this->uri->segment(3);
	$data['portfolio'] = $this->portfolio_model->getTableRowData('portfolio',$id);
		$data['category'] = $this->portfolio_model->getTableData('portfolio_category');
	$data['main_content'] = 'edit_portfolio';
		$this->load->view('includes/template_log', $data);
		
	}
}

	}