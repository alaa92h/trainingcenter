<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	  public function __construct()  
    {  
        parent::__construct();  
        $this->load->database();
        $this->load->library('session'); 
//        new data has been add
    } 


	public function index()
	{

		$data["sidebar"] = "admin/sidebar.php";
		$data["page"] = "admin/index.php";
		$data["title"] = "لوحه تحكم الادمن تعديل";
		$this->load->view('template', $data);
	}

	
	public function institutes()
	{
		// institutes `id`, `name`, `address`, `about`, `logo`, `user_id`, `created_at`
		$data["institutes"] = $this->db->get("institutes")->result();
		$data["sidebar"]    = "admin/sidebar.php";
		$data["page"]       = "admin/institutes.php";
		$data["title"]      = "المعاهد";
		$this->load->view('template', $data);
	}


	/**
	 * * @param int  is instituted id to get institut information
	 * return array institut inforamtion
	 */

public function institute($id)
	{
		// institutes `id`, `name`, `address`, `about`, `logo`, `user_id`, `created_at`
		$data["institute"] = $this->db->get_where("institutes" ,array("id" => $id))->row();
		$data["sidebar"]    = "admin/sidebar.php";
		$data["page"]       = "admin/institute.php";
		$data["title"]      = "معهد - ".$data["institute"]->name;
		$this->load->view('template', $data);
	}
	public function courses()
	{
		$data["courses"] = $this->db->get("courses")->result();
		$data["sidebar"]    = "admin/sidebar.php";
		$data["page"]       = "admin/courses.php";
		$data["title"]      = "الدورات";
		$this->load->view('template', $data);
	}

 
}
