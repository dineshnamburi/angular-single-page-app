<?php  class Admin extends MX_Controller 
{
	function __construct()
	{
		 parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	public function dashboard()
	{
	$this->load->model('admin_model');
	$session_data=$this->session->all_userdata();
	$data['user'] = $this->admin_model->getTableRowData('admin',$session_data['session_userid']);
	$data['main_content'] = 'dashboard';
		$this->load->view('includes/template_log', $data);
		
	}
	

}