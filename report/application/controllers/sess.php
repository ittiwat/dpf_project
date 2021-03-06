<?php
class sess extends CI_Controller{
    
    public function __construct() 
	{
        parent::__construct();
		$this->load->library('session');
		$this->load->model('member_model','member');
    }

	public function index()
	{
		if ($this->input->post("bt")!=null) 
		{
			$checkuser = $this->input->post("username");
			$data['member'] = $this->db->where('username',$checkuser)->get('member')->result();
			if ($data['member'] == null)
			{
				echo "Member is not found!!!";
			}
			else if (( $data['member'][0]->admin == '1' ) && ( $this->input->post("username") == $data['member'][0]->username ) && ( $this->input->post("password")== $data['member'][0]->password )) 
			{
				$ar=array(
						"mysess_id"=>$this->input->post("username")
				);
				$this->session->set_userdata($ar);
			}
			else
			{
				echo "Wrong ID or Password !!!";
			}
		}
		if ($this->session->userdata("mysess_id")==null) {
			$data['sess']=$this->form();
		}
		else {
			$data['sess']=$this->session->userdata("mysess_id")." ".anchor("index.php/sess/logout","logout",array("class"=>"logout","onclick"=>"javascript:return confirm('log out ?');"));
		}
		$this->load->view("sess",$data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("index.php/sess","refresh");
		exit();
	}
	public function form() 
	{
	
		$this->load->view("member/login");
	}
}