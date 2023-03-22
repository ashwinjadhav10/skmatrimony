<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper(array("url","form","security"));
		$this->load->library(array('form_validation','session'));	
		$this->load->database();
		
	}
	function index()
	{
		
	}
	
	function view_details($activation)
	{
		$this->load->view("design/includes/header");
		$info = $this->db->query("SELECT * FROM response WHERE activation=?", array($activation))->result_array();
			
		if(count($info)==1) {
			$arr = explode(",", $info[0]['ids']);
			
			for($i=0; $i<count($arr)-1; $i++) 
			{
				$data['resp'] = $data[$i] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no = ?", array($arr[$i]))->result_array();	
				$this->load->view("design/response-details",$data);
			}
		} else {
			$this->session->set_flashdata("error","Something went wrong. We have no information for you.");
		
			$this->load->view("design/response-details");
		}
		//print_r($info);
		$this->load->view("design/includes/footer");
	
	}
}
