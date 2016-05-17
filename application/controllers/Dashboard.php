<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this -> load -> library('session');
		// $this -> load -> library('ptime');
        	// $this->load->helper('url');
		(!$this -> session -> userdata('memberid')) ? redirect('/login') : null;

		$this->load->model('users');
		$this->load->model('loans');

	}

          
	public function index()
	{
        $data['pagetitle'] = 'JA Dashboard Home';
		$data['userdata'] = $this -> session -> userdata();
		$data['loans_count'] = count($this->loans->get_loans());
		$data['pendingloans_count'] = count($this->loans->get_pendingloans());
		$data['disbursedloans_count'] = count($this->loans->get_disbursedloans());
		$data['members_count'] = count($this->users->get_members());
	
		$this->load->view('dashboard/dashboard_view',$data);
	}


	public function members()
	{
        $data['pagetitle'] = 'JA Dashboard';
		$data['userdata'] = $this -> session -> userdata();
		$data['members'] = $this->users->get_members();
		$data['member_types'] = $this->users->get_user_types();

		$data['members_count'] = count($data['members']);
		// echo "<pre>";		print_r($data['members']);die;
 		$this->load->view('dashboard/dashboard_members_view',$data);
	}

	public function member($username = null, $application = null)
	{
		// if(isset($application)){print_r($application);die;}
		$view = (isset($application)) ? 'dashboard_member_application_view' :'dashboard_member_profile_view' ;
		$username = str_replace('@', '', $username);
        $data['pagetitle'] = 'JA Dashboard';
		$data['member_loans'] = $this->loans->get_memberloans($username);
		$data['userdata'] = $this -> session -> userdata();
		$data['memberdetails'] = $this->users->get_user_by_username($username);
		// echo "<pre>";		print_r($data['memberdetails']);die;
 		$this->load->view('dashboard/'.$view,$data);
	} 
	
	
	public function loans()
	{
        $data['pagetitle'] = 'JA Dashboard';
		$data['userdata'] = $this -> session -> userdata();
		$data['pendingloans_count'] = count($this->loans->get_pendingloans());
		$data['disbursedloans_count'] = count($this->loans->get_disbursedloans());
		$data['members_count'] = count($this->users->get_members());
		$data['loans'] = $this->loans->get_loans();
		$data['loans_count'] = count($data['loans']);
		$this->load->view('dashboard/dashboard_loans_view',$data);
	} 
	
	public function loan($loanid = null)
	{
        $data['pagetitle'] = 'JA Dashboard';
		$data['userdata'] = $this -> session -> userdata();
		$data['loandetails'] = $this->loans->get_loan($loanid);
		$data['loanrepayments'] = $this->loans->get_loanrepayments($loanid);

		// echo "<pre>";		print_r($data['loandetails']);die;
		$this->load->view('dashboard/dashboard_loan_profile_view',$data);
	}

	public function mentorship()
	{
        $data['pagetitle'] = 'JA Dashboard';
		$data['userdata'] = $this -> session -> userdata();
		$this->load->view('dashboard/dashboard_mentorship_view',$data);
	} 
        
	public function settings()
	{
        $data['pagetitle'] = 'JA Dashboard';
		$data['userdata'] = $this -> session -> userdata();
		$this->load->view('dashboard/dashboard_settings_view',$data);
	} 
        
          


	public function loyalty()
	{
		// $this->load->view('welcome_message');
		// var_dump($this -> session -> userdata());die;
		$merchant_details = $this -> session -> userdata() ['merchant_details'];
		$till = $merchant_details->merchant_businessno;


		$data['userdata'] = $this -> session -> userdata();
		$this->load->view('dashboard/loyalty_view',$data);
	}
	 

 }
