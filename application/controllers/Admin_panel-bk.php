<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_panel extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
		$this->load->helper(array("url","form"));
		$this->load->library(array("form_validation","session","pagination"));
		$this->load->database();        
		$this->load->model('as_model');		 
	}
	
	public function index()
	{
		$this->load->view('admin/includes/header');
		$this->load->view('admin/admin_login');
		$this->load->view('admin/includes/footer');
	}
    
	function dashboard()
	{
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			
			redirect("admin_panel");
		}
		$this->load->view('admin/includes/header');
		$this->load->view('admin/index');
		$this->load->view('admin/includes/footer');
		
	} 
	 function grooms_list()
    {
		 if(!$this->session->userdata("user_name"))
		 {
			 $this->session->set_flashdata("error","session expired please login again..");	
			 redirect("admin_panel");
		 }
        $config = array(
            'base_url'        => base_url('admin_panel/grooms_list'),
            'per_page'        => 20,
            'total_rows'      => $this->as_model->num_rows(),
            'full_tag_open'   => '<ul class="pagination hidden-xs pull-right">',
            'full_tag_close'  => '</ul>',
            'first_tag_open'  => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open'   => '<li>',
            'last_tag_close'  => '</li>',
            'next_tag_open'   => '<li>',
            'next_tag_close'  => '</li>',
            'prev_tag_open'   => '<li>',
            'prev_tag_close'  => '</li>',
            'num_tag_open'    => '<li>',
            'num_tag_close'   => '</li>',
            'cur_tag_open'    => '<li class="active"><a>',
            'cur_tag_close'   => '</a></li>'
           );
        
        $this->pagination->initialize($config); 
        $data['maratha_boys']=$this->as_model->getdata($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/includes/header');
        $this->load->view('admin/grooms-list',$data);
        $this->load->view('admin/includes/footer'); 
    }
    
    function brides_list()
    {
		if(!$this->session->userdata("user_name"))
		 {
			 $this->session->set_flashdata("error","session expired please login again..");	
			 redirect("admin_panel");
		 }
        $config = array(
            'base_url'        => base_url('admin_panel/brides_list'),
            'per_page'        => 20,
            'total_rows'      => $this->as_model->brides_num_rows(),
            'full_tag_open'   => '<ul class="pagination hidden-xs pull-right">',
            'full_tag_close'  => '</ul>',
            'first_tag_open'  => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open'   => '<li>',
            'last_tag_close'  => '</li>',
            'next_tag_open'   => '<li>',
            'next_tag_close'  => '</li>',
            'prev_tag_open'   => '<li>',
            'prev_tag_close'  => '</li>',
            'num_tag_open'    => '<li>',
            'num_tag_close'   => '</li>',
            'cur_tag_open'    => '<li class="active"><a>',
            'cur_tag_close'   => '</a></li>'
           );
        
        $this->pagination->initialize($config); 
        $data['maratha_girls']=$this->as_model->getdata_brides($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/includes/header');
        $this->load->view('admin/brides-list',$data);
        $this->load->view('admin/includes/footer'); 
    }
    
    function divorcee_girl_list()
    {
		if(!$this->session->userdata("user_name"))
		 {
			 $this->session->set_flashdata("error","session expired please login again..");	
			 redirect("admin_panel");
		 }
        $config = array(
            'base_url'        => base_url('admin_panel/divorcee_girl_list'),
            'per_page'        => 20,
            'total_rows'      => $this->as_model->divorcee_girl_num_rows(),
            'full_tag_open'   => '<ul class="pagination hidden-xs pull-right">',
            'full_tag_close'  => '</ul>',
            'first_tag_open'  => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open'   => '<li>',
            'last_tag_close'  => '</li>',
            'next_tag_open'   => '<li>',
            'next_tag_close'  => '</li>',
            'prev_tag_open'   => '<li>',
            'prev_tag_close'  => '</li>',
            'num_tag_open'    => '<li>',
            'num_tag_close'   => '</li>',
            'cur_tag_open'    => '<li class="active"><a>',
            'cur_tag_close'   => '</a></li>'
           );
        
        $this->pagination->initialize($config); 
        $data['maratha_divorcee_girl']=$this->as_model->getdata_divorcee_girl($config['per_page'], $this->uri->segment(3));    
        $this->load->view('admin/includes/header');
        $this->load->view('admin/divorcee-list',$data);
        $this->load->view('admin/includes/footer'); 
    }
    
    function divorcee_boy_list()
    {
		if(!$this->session->userdata("user_name"))
		 {
			 $this->session->set_flashdata("error","session expired please login again..");	
			 redirect("admin_panel");
		 }
        $config = array(
            'base_url'        => base_url('admin_panel/divorcee_boy_list'),
            'per_page'        => 20,
            'total_rows'      => $this->as_model->divorcee_boy_num_rows(),
            'full_tag_open'   => '<ul class="pagination hidden-xs pull-right">',
            'full_tag_close'  => '</ul>',
            'first_tag_open'  => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open'   => '<li>',
            'last_tag_close'  => '</li>',
            'next_tag_open'   => '<li>',
            'next_tag_close'  => '</li>',
            'prev_tag_open'   => '<li>',
            'prev_tag_close'  => '</li>',
            'num_tag_open'    => '<li>',
            'num_tag_close'   => '</li>',
            'cur_tag_open'    => '<li class="active"><a>',
            'cur_tag_close'   => '</a></li>'
           );
        
        $this->pagination->initialize($config); 
        $data['maratha_divorcee_boy']=$this->as_model->getdata_divorcee_boy($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/includes/header');
        $this->load->view('admin/divorcee-boy-list',$data);
        $this->load->view('admin/includes/footer'); 
    }
    
    function success_story_list()
    {
		if(!$this->session->userdata("user_name"))
		 {
			 $this->session->set_flashdata("error","session expired please login again..");	
			 redirect("admin_panel");
		 }
        $config = array(
            'base_url'        => base_url('admin_panel/success_story_list'),
            'per_page'        => 20,
            'total_rows'      => $this->as_model->success_story_num_rows(),
            'full_tag_open'   => '<ul class="pagination hidden-xs pull-right">',
            'full_tag_close'  => '</ul>',
            'first_tag_open'  => '<li>',
            'first_tag_close' => '</li>',
            'last_tag_open'   => '<li>',
            'last_tag_close'  => '</li>',
            'next_tag_open'   => '<li>',
            'next_tag_close'  => '</li>',
            'prev_tag_open'   => '<li>',
            'prev_tag_close'  => '</li>',
            'num_tag_open'    => '<li>',
            'num_tag_close'   => '</li>',
            'cur_tag_open'    => '<li class="active"><a>',
            'cur_tag_close'   => '</a></li>'
           );
        
        $this->pagination->initialize($config); 
        $data['success_story']=$this->as_model->getdata_success_story($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/includes/header');
        $this->load->view('admin/success-story',$data);
        $this->load->view('admin/includes/footer'); 
    }
	    
	public function signin()
    { 
        
        $this->form_validation->set_rules('username', 'username', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
       
        //set color to error msg
        $this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
        
        if($this->form_validation->run() == FALSE)
        { 
			redirect("admin_panel");
        }
        else
        {
            //Get Post Data
            $username = $this->input->post('username');            
            $password = md5($this->input->post('password'));
            
            /*$this->db->query("INSERT INTO admin (user_name, user_pass) values (?,?)",array($username, $password));*/			
                       
            $user_id = $this->as_model->login_valid($username,$password);
			
            if($user_id)
            {
                $user_data = array(
                    'id'        => $user_id,
                    'user_name'  => $username,
                    'logged_in' => true
                );                                
                $this->session->set_userdata('user_name',$username);				
                $this->session->set_flashdata('success','user login succesfully');
                redirect('admin_panel/dashboard');  
            }
            else
            {  
                $this->session->set_flashdata('error','invalid username or password');                
                redirect('admin_panel');                
            }          
        }
    }
    
    function logout()
    {
        $set = $this->session->unset_userdata('user_name');		
        $this->session->set_flashdata('error','admin logout succesfully');		
        redirect('admin_panel');
	}
    
    function activate_user($id)
    {	
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");	
		 	redirect("admin_panel");
		}
		$act_user = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($id))->result_array();		
		$activate_date = date('d-m-Y');
		if($act_user[0]['gender'] == "Unmarried_Boy")
		{   		   
			$reg_serial_no = 10000;
			$reg_serial_no +=  $id;
			
            $reg_no = "UB".$reg_serial_no;
            $active_status = 1;
           
            $this->db->query("UPDATE enroll_form SET enroll_reg_no =?, active_status=?, activate_date=?  WHERE enroll_id=?",array($reg_no, $active_status, $activate_date, $id));
		    $this->session->set_flashdata('success','user activated succesfully');
		  
            redirect('grooms-list');
        }
        elseif($act_user[0]['gender'] == "Unmarried_Girl")
        {		  
            $reg_serial_no = 10000;
            $reg_serial_no +=  $id;
           
            $reg_no = "UG".$reg_serial_no;
            $active_status = 1;
           
            $this->db->query("UPDATE enroll_form SET enroll_reg_no =?, active_status=?, activate_date=?  WHERE enroll_id=?",array($reg_no,  $active_status, $activate_date,$id)); 
		    $this->session->set_flashdata('success','user activated succesfully');
		   
		    redirect('brides-list');
        }
        elseif($act_user[0]['gender'] == "Divorcee_Boy/Widower")
        {	
		    $reg_serial_no = 10000;
            $reg_serial_no +=  $id;
           
            $reg_no = "WB".$reg_serial_no;
            $active_status = 1;
           
            $this->db->query("UPDATE enroll_form SET enroll_reg_no =?, active_status=?, activate_date=?  WHERE enroll_id=?",array($reg_no,  $active_status, $activate_date,$id));    
		    $this->session->set_flashdata('success','user activated succesfully');
		   
		    redirect('divorcee-boy');
        }
        elseif($act_user[0]['gender'] == "Divorcee_Girl/Widow")
        {
		    $reg_serial_no = 10000;
            $reg_serial_no +=  $id;
           
            $reg_no = "WG".$reg_serial_no;
            $active_status = 1;
           
            $this->db->query("UPDATE enroll_form SET enroll_reg_no =?, active_status=?, activate_date=?  WHERE enroll_id=?",array($reg_no,  $active_status, $activate_date, $id)); 
		    $this->session->set_flashdata('success','user activated succesfully');
		   
		    redirect('divorcee-girl');
        }
	}
    
    function deactivate_user($id)
    {
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");	
		 	redirect("admin_panel");
		}
		$act_user = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($id))->result_array();
        
        $deactive_user = 0;  
		$reg_serial_no = " "; 
        
        $this->db->query("UPDATE enroll_form SET enroll_reg_no=?, active_status=? WHERE enroll_id=?",array($reg_serial_no,$deactive_user,$id)); 
		
		if($act_user[0]['gender'] == "Unmarried_Boy")
		{  
			$this->session->set_flashdata('error','user deactivated succesfully');
            redirect('grooms-list');
		}
		elseif($act_user[0]['gender'] == "Unmarried_Girl")
		{
			$this->session->set_flashdata('error','user deactivated succesfully');
            redirect('brides-list');			
		}
		elseif($act_user[0]['gender'] == "Divorcee_Boy/Widower")
		{
			$this->session->set_flashdata('error','user deactivated succesfully');
			redirect('divorcee-boy');		
		}
		elseif($act_user[0]['gender'] == "Divorcee_Girl/Widow")
		{
			$this->session->set_flashdata('error','user deactivated succesfully');
            redirect('divorcee-girl');
		}
    }	
	function bride_edit($id)
	{
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			redirect("admin_panel");
		}
		$data['brid_edit'] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($id))->result_array();
		
		$this->load->view('admin/includes/header');
		$this->load->view('admin/brides-edit',$data);
		$this->load->view('admin/includes/footer');
	}
    
	function brid_edit_save($Brid_id)
	{
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			redirect("admin_panel");
		}
		$this->form_validation->set_rules("enroll_reg_no", "Enroll Reg No", "trim");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("middle_name", "Middle name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("dob", "Date Of Birth", "trim|required");
		$this->form_validation->set_rules("sub_cast", "Sub Cast", "trim|required");
		$this->form_validation->set_rules("user_type", "User Type", "trim|required");
		$this->form_validation->set_rules("ft", "Feet(Height)", "trim|required");
		$this->form_validation->set_rules("inch", "Inch(Height)", "trim");
		$this->form_validation->set_rules("weight", "Weight", "trim|required");
		$this->form_validation->set_rules("bloodgrp", "Blood Group", "trim|required");
		$this->form_validation->set_rules("complexion", "Complexion", "trim|required");
		$this->form_validation->set_rules("phy_disab", "Physical Disablity", "trim|required");
		$this->form_validation->set_rules("phy_disab_yes", "If yes !! Physical Disablity", "trim");
		$this->form_validation->set_rules("diet", "Diet", "trim|required");
		$this->form_validation->set_rules("spect", "Spect", "trim|required");
		$this->form_validation->set_rules("lens", "Lens", "trim|required");
		$this->form_validation->set_rules("personality", "Personality", "trim");
		$this->form_validation->set_rules("rashi", "Rashi", "trim");
		$this->form_validation->set_rules("birth_place", "Birth Place", "trim|required");
		$this->form_validation->set_rules("nakshtra", "Nakshtra", "trim|required");
		$this->form_validation->set_rules("birthtime", "Birth Time", "trim|required");
		$this->form_validation->set_rules("charan", "Charan", "trim");
		$this->form_validation->set_rules("mangal", "Mangal", "trim|required");
		$this->form_validation->set_rules("nadi", "Nadi", "trim");
		$this->form_validation->set_rules("gotra", "Gotra", "trim");
		$this->form_validation->set_rules("gan", "Gan", "trim");
		$this->form_validation->set_rules("education_area", "Education Area", "trim|required");
		$this->form_validation->set_rules("education", "Education", "trim|required");
		$this->form_validation->set_rules("occupation", "Occupation", "trim|required");
		$this->form_validation->set_rules("occu_country", "Occupation Country", "trim");
		$this->form_validation->set_rules("occu_state", "Occupation State", "trim");
		$this->form_validation->set_rules("occu_city", "Occupation City", "trim");
		$this->form_validation->set_rules("income", "income", "trim|required");
		$this->form_validation->set_rules("income_type", "income_type", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("identity_no", "Identity No", "trim|required");
		$this->form_validation->set_rules("mobile", "Mobile", "trim|required");
		$this->form_validation->set_rules("mobile_alt", "Mobile Alter no", "trim");
		$this->form_validation->set_rules("phone", "phone", "trim");
		$this->form_validation->set_rules("phone_alt", "Phone Alter no", "trim");
		$this->form_validation->set_rules("resi_address", "Residence Address", "trim|required");
		$this->form_validation->set_rules("father", "Father", "trim|required");
		$this->form_validation->set_rules("parent_full_nm", "Parent Full Name", "trim|required");
		$this->form_validation->set_rules("mother", "Mother", "trim|required");
		$this->form_validation->set_rules("parent_reci_city", "Parent Resident City", "trim");
		$this->form_validation->set_rules("brothers", "Brother", "trim|required");
		$this->form_validation->set_rules("m_brothers", "Married Brothers", "trim");
		$this->form_validation->set_rules("sisters", "Sisters", "trim|required");
		$this->form_validation->set_rules("m_sisters", "Married Sisters", "trim|required");
		$this->form_validation->set_rules("parent_occu", "Parent Occupation", "trim|required");
		$this->form_validation->set_rules("native_dist", "Native Distrit", "trim");
		$this->form_validation->set_rules("family_wealth", "Family Wealth", "trim|required");
		$this->form_validation->set_rules("native_taluka", "Native Taluka", "trim");
		$this->form_validation->set_rules("mama_surname", "Mama Surname", "trim|required");
		$this->form_validation->set_rules("intercast", "Intercast", "trim|required");
		$this->form_validation->set_rules("relative_surname", "Relative Surname", "trim|required");
		$this->form_validation->set_rules("intercast_rel", "Intercast Relation", "trim");
        $this->form_validation->set_rules("preferred_cities", "Preferred Cities", "trim");
		$this->form_validation->set_rules("exp_mangalik", "Expectation Magalik", "trim|required");
		$this->form_validation->set_rules("exp_cast", "Expectation Cast", "trim|required");
		$this->form_validation->set_rules("age_diff", "Age Differance", "trim|required");
		$this->form_validation->set_rules("exp_ft", "Expectation Height", "trim|required");
		$this->form_validation->set_rules("exp_inch", "Expectation Height", "trim");
		$this->form_validation->set_rules("exp_divorcee", "Expectated Divorcee", "trim|required");
		$this->form_validation->set_rules("exp_occu", "Expectated Ocuupation", "trim|required");
		$this->form_validation->set_rules("exp_education", "Expectated Education", "trim|required");
		
		if($this->form_validation->run() == FALSE)
		{
			$data['brid_edit'] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($Brid_id) )->result_array();
			
			$this->load->view('admin/includes/header');
			$this->load->view('admin/brides-edit',$data);
			$this->load->view('admin/includes/footer');
		}
		else
		{
			$from = new DateTime($this->input->post('dob'));
            $to   = new DateTime('today');
			$age =  $from->diff($to)->y;
			$data = array(					
				"first_name" => $this->input->post("first_name"),
				"middle_name" => $this->input->post("middle_name"),
				"last_name" => $this->input->post("last_name"),
				"date_of_birth" => $this->input->post("dob"),
				"age" => $age,
				"gender" => $this->input->post("user_type"),
				"sub_cast" => $this->input->post("sub_cast"),				
				"height_ft" => $this->input->post("ft"),
				"height_inch" => $this->input->post("inch"),
				"weight" => $this->input->post("weight"),
				"blood_group" => $this->input->post("bloodgrp"),
				"complexion" => $this->input->post("complexion"),
				"phy_disabal" => $this->input->post("phy_disab"),				
				"phy_disabal_yes" => $this->input->post("phy_disab_yes"),
				"diet" => $this->input->post("diet"),
				"spectacles" => $this->input->post("spect"),				
				"lens" => $this->input->post("lens"),				
				"personality" => $this->input->post("personality"),
				"rashi" => $this->input->post("rashi"),
				"nakshtra" => $this->input->post("nakshtra"),
				"charan" => $this->input->post("charan"),
				"nadi" => $this->input->post("nadi"),
				"gan" => $this->input->post("gan"),
				"birth_place" => $this->input->post("birth_place"),
				"birth_time" => $this->input->post("birthtime"),
				"mangal" => $this->input->post("mangal"),
				"gotra_devak" => $this->input->post("gotra"),
				"edu_area" => $this->input->post("education_area"),
				"education" => $this->input->post("education"),
				"occupation" => $this->input->post("occupation"),
				"occu_country" => $this->input->post("occu_country"),
				"occu_state" => $this->input->post("occu_state"),
				"occu_city" => $this->input->post("occu_city"),
				"income" => $this->input->post("income"),
				"income_type" => $this->input->post("income_type"),
				"resi_add" => $this->input->post("resi_address"),
				"email" => $this->input->post("email"),
				"id_no" => $this->input->post("identity_no"),
				"mobile_no" => $this->input->post("mobile"),
				"mobile_alter" => $this->input->post('mobile_alt'),
				"phone" => $this->input->post("phone"),
				"phone_alter" => $this->input->post("phone_alt"),
				"father" => $this->input->post("father"),
				"mother" => $this->input->post("mother"),
				"parents_full_name" => $this->input->post("parent_full_nm"),
				"parents_reci_city" => $this->input->post("parent_rec_city"),
				"brothers" => $this->input->post("brothers"),
				"married_brothers" => $this->input->post("m_brothers"),
				"sisters" => $this->input->post("sisters"),
				"married_sisiters" => $this->input->post("m_sisters"),
				"parents_occupation" => $this->input->post("parent_occu"),
				"relatives_surname" => $this->input->post("relative_surname"),
				"native_distict" => $this->input->post("native_dist"),
				"native_taluka" => $this->input->post("native_taluka"),
				"family_wealth" => $this->input->post("family_wealth"),
				"mama_surname" => $this->input->post("mama_surname"),
				"intercast" => $this->input->post("intercast"),
				"relation_intercast" => $this->input->post("intercast_rel"),
				"pref_city" => $this->input->post("preferred_cities"),
				"exp_managl" => $this->input->post("exp_mangalik"),
				"exp_cast" => $this->input->post("exp_cast"),
				"age_difference" => $this->input->post("age_diff"),
				"exp_min_ft" => $this->input->post("exp_ft"),
				"exp_min_inch" => $this->input->post("exp_inch"),
				"exp_divorcee" => $this->input->post("exp_divorcee"),
				"exp_occup" => $this->input->post("exp_occu"),
				"exp_education" => $this->input->post("exp_education")				
			);
			
			$insert_data = $this->as_model->update_user_details($Brid_id,$data);
			
			$get_data = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($Brid_id))->result_array();
			
			if($get_data[0]['gender'] == "Unmarried_Boy")
			{ 
				$this->session->set_flashdata("success","grooms details updated successfully ");
				redirect('grooms-list');
			}
			elseif($get_data[0]['gender'] == "Unmarried_Girl")
			{
				$this->session->set_flashdata("success","brides details updated successfully ");
				redirect('brides-list');
			}
			elseif($get_data[0]['gender'] == "Divorcee_Boy/Widower")
			{
				$this->session->set_flashdata("success","divorcee boy(widower) details updated successfully ");
				redirect('divorcee-boy');
			}
			elseif($get_data[0]['gender'] == "Divorcee_Girl/Widow")
			{
				$this->session->set_flashdata("success","divorcee girl(widow) details updated successfully ");				
				redirect('divorcee-girl');
			}			
		}
	}	
	function suc_story()
	{
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			redirect("admin_panel");
		}
		$this->load->view("admin/includes/header");
		$this->load->view("admin/add-suc-story");
		$this->load->view("admin/includes/footer");
	}
    
	function add_new_story()
	{
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			redirect("admin_panel");
		}
		$this->form_validation->set_rules("groom_reg_no", "Groom Reg No", "trim|required");
		$this->form_validation->set_rules("groom_details", "Groom Details", "trim|required");
		$this->form_validation->set_rules("brides_reg_no", "Brides Reg No", "trim|required");
		$this->form_validation->set_rules("brides_details", "Brides Details", "trim|required");
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view("admin/includes/header");
			$this->load->view("admin/add-suc-story");
			$this->load->view("admin/includes/footer");
		}
		else
		{
			
			$groom_reg = $this->input->post("groom_reg_no");
			$groom_details = $this->input->post("groom_details");
			$brides_reg = $this->input->post("brides_reg_no");
			$brides_details = $this->input->post("brides_details");
			
			$add_story = $this->db->query("INSERT INTO success_story (groom_reg_no, groom_details, brides_reg_no, brides_details) VALUES (?, ?, ?, ?)",array($groom_reg, $groom_details, $brides_reg, $brides_details));
						
			if(count($add_story) == 1)
			{
				$this->session->set_flashdata("success","new success story add successfully");				
				redirect("success-story");
			}
			else
			{
				$this->session->set_flashdata("error","something wrong !! please insert record again");				
				$this->load->view("admin/includes/header");
				$this->load->view("admin/add-suc-story");
				$this->load->view("admin/includes/footer");				
			}
			
		}
		
	}
	function edit_story($id)
	{
		$data['edit_suc'] = $this->db->query("SELECT * FROM success_story WHERE success_id = ? ",array($id))->result_array();
		$this->load->view("admin/includes/header");
		$this->load->view("admin/edit-suc-story",$data);
		$this->load->view("admin/includes/footer");	
	}
	function save_story($id)
	{
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			redirect("admin_panel");
		}
		$this->form_validation->set_rules("groom_reg_no", "Groom Reg No", "trim|required");
		$this->form_validation->set_rules("groom_details", "Groom Details", "trim|required");
		$this->form_validation->set_rules("brides_reg_no", "Brides Reg No", "trim|required");
		$this->form_validation->set_rules("brides_details", "Brides Details", "trim|required");
		
		if($this->form_validation->run() == FALSE)
		{
			redirect("edit-story");
		}
		else
		{
			
			$groom_reg = $this->input->post("groom_reg_no");
			$groom_details = $this->input->post("groom_details");
			$brides_reg = $this->input->post("brides_reg_no");
			$brides_details = $this->input->post("brides_details");
			
			$update_story = $this->db->query("UPDATE success_story SET groom_reg_no = ?, groom_details = ?, brides_reg_no = ?, brides_details = ? WHERE success_id = ?",array($groom_reg, $groom_details, $brides_reg, $brides_details,$id));
						
			if(count($update_story) == 1)
			{
				$this->session->set_flashdata("success","success story update successfully");				
				redirect("success-story");
			}
			else
			{
				$this->session->set_flashdata("error","something wrong !! please insert record again");				
				$this->load->view("admin/includes/header");
				$this->load->view("admin/add-suc-story");
				$this->load->view("admin/includes/footer");				
			}
			
		}
		
	}
	
	function delete_user($id)
	{
		
		if(!$this->session->userdata("user_name"))
		{
			$this->session->set_flashdata("error","session expired please login again..");			
			redirect("admin_panel");
		}
		
		$user = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($id))->result_array();
		$this->db->query("DELETE  FROM enroll_form WHERE enroll_id=?",array($id));
		
		if($user[0]['gender'] == "Unmarried_Boy")
		{   
			$this->session->set_flashdata("error","grooms details deleted successfully ");			
			redirect('grooms-list');
		}
		elseif($user[0]['gender'] == "Unmarried_Girl")
		{
			$this->session->set_flashdata("error","brides details deleted successfully ");			
			redirect('brides-list');

		}
		elseif($user[0]['gender'] == "Divorcee_Boy/Widower")
		{
			$this->session->set_flashdata("error","divorcee boy(widower) details deleted successfully ");			
			redirect('divorcee-boy');
		}
		elseif($user[0]['gender'] == "Divorcee_Girl/Widow")
		{
			$this->session->set_flashdata("error","divorcee girl(widow) details deleted successfully ");			
			redirect('divorcee-girl');
		}	
	}
}
