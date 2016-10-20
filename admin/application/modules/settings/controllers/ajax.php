<?php  class Ajax extends MX_Controller 
{
	function __construct()
	{
		$this->load->model('settings_model');

		 parent::__construct();
		modules::run('login/is_logged_in');
		
	}

	public function get_city()
	{
	$state_id=$this->uri->segment(4);
        $data['ajax_city']=$this->settings_model->getTableDataCond('city','state_id',$state_id);
		//print_r($data['ajax_propert_type']);
         $this->load->view('ajax_city',$data);
		
	}
	public function get_loc()
	{
	$city_id=$this->uri->segment(4);
        $data['ajax_loc']=$this->settings_model->getTableDataCond('locations','city_id',$city_id);
		//print_r($data['ajax_propert_type']);
         $this->load->view('ajax_loc',$data);
		
	}
}