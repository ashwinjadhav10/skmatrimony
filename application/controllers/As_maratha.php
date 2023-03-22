<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class As_maratha extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array("url","form","string","security","sendsms_helper"));		
		$this->load->library(array('form_validation','session','upload','image_lib','pagination','email'));	
		$this->load->database();
		$this->load->model('as_model');
		$this->load->library('email');		
	}
    
	function index()
	{
        $data['city_name'] = $this->db->query("SELECT DISTINCT occu_city FROM enroll_form")->result_array();
              
		$this->load->view('design/includes/header');
		$this->load->view('design/index',$data);
		$this->load->view('design/includes/footer');
	}
	function contact()
	{		
		//echo("Hello");
        
		$this->load->view('design/contact');
				
	} 	
	function features()
	{
		$data['city_name'] = $this->db->query("SELECT DISTINCT occu_city FROM enroll_form")->result_array();
		$this->load->view('design/includes/header');
		$this->load->view('design/features',$data);
		$this->load->view('design/includes/footer');
	}    
	function rules()
	{
        $data['city_name'] = $this->db->query("SELECT DISTINCT occu_city FROM enroll_form")->result_array();
		$this->load->view('design/includes/header');
		$this->load->view('design/rules',$data);
		$this->load->view('design/includes/footer');
	}    
	function enroll()
	{	$data['sub_casts'] = array("kumbhar","lingayat Kumbhar");
		$data['married_status'] = array("Unmarried_Boy","Unmarried_Girl","Divorcee_Boy/Widower","Divorcee_Girl/Widow");
		$data['blood_groups'] = array("A+","A","B","B+","AB","AB+","O","O+","O-");
		$data['complexions'] = array("Fair","Gora","Sawala","Gavhal","Nimgora","Black","Gora,Smart","Fair,Smart","Gavhal,Smart");
		$this->load->view('design/includes/header');
		$this->load->view('design/enroll',$data);
		$this->load->view('design/includes/footer');
	}
    
	function add_enroll()
	{
		if($this->input->post()){
			$this->form_validation->set_error_delimiters('<div class="error">','</div>');
			$this->form_validation->set_rules("enroll_reg_no",  "Enroll Reg No",      "trim");
			$this->form_validation->set_rules("first_name",     "First Name",         "trim|required");
			$this->form_validation->set_rules("middle_name",    "Middle name",        "trim|required");
			$this->form_validation->set_rules("last_name",      "Last Name",          "trim|required");
			$this->form_validation->set_rules("dob",            "Date Of Birth",      "trim|required");
			// /*$this->form_validation->set_rules("date",            "Date Of Birth",      "trim|required");*/
			// /*$this->form_validation->set_rules("month",            "Month",      "trim|required");*/
			// /*$this->form_validation->set_rules("year",            "Year",      "trim|required");*/
			$this->form_validation->set_rules("sub_cast",       "Sub Cast",           "trim|required");
			$this->form_validation->set_rules("user_type",      "User Type",          "trim|required");
			$this->form_validation->set_rules("ft",             "Feet(Height)",       "trim|required");
			$this->form_validation->set_rules("inch",           "Inch",               "trim");
			$this->form_validation->set_rules("weight",         "Weight",             "trim|required");
			$this->form_validation->set_rules("bloodgrp",       "Blood Group",        "trim|required");
			$this->form_validation->set_rules("complexion",     "Complexion",         "trim|required");
			$this->form_validation->set_rules("phy_disab",      "Physical Disablity", "trim|required");
			$this->form_validation->set_rules("phy_disab_yes",  "If yes !! Physical Disablity", "trim");
			$this->form_validation->set_rules("diet",           "Diet",               "trim|required");
			$this->form_validation->set_rules("spect",          "Spect",              "trim|required");
			$this->form_validation->set_rules("lens",           "Lens",               "trim|required");
			$this->form_validation->set_rules("personality",    "Personality",        "trim|required");
			$this->form_validation->set_rules("rashi",          "Rashi",              "trim");
			$this->form_validation->set_rules("birth_place",    "Birth Place",        "trim|required");
			$this->form_validation->set_rules("nakshtra",       "Nakshtra",           "trim|required");
			/*$this->form_validation->set_rules("hr",           "Hours birth Time",   "trim|required");*/
			/*$this->form_validation->set_rules("min",          "Miniuet Birth Time", "trim|required");*/
			/*$this->form_validation->set_rules("am-pm",        "AM/PM",              "trim|required");*/
			$this->form_validation->set_rules("charan",         "Charan",             "trim");
			$this->form_validation->set_rules("mangal",         "Mangal",             "trim|required");
			$this->form_validation->set_rules("nadi",           "Nadi",               "trim");
			$this->form_validation->set_rules("gotra",          "Gotra",              "trim");
			$this->form_validation->set_rules("gan",            "Gan",                "trim");
			$this->form_validation->set_rules("education_area", "Education Area",     "trim|required");
			$this->form_validation->set_rules("education",      "Education",          "trim|required");
			$this->form_validation->set_rules("occupation",     "Occupation",         "trim|required");
			$this->form_validation->set_rules("occu_country",   "Occupation Country", "trim");
			$this->form_validation->set_rules("occu_state",     "Occupation State",   "trim");
			$this->form_validation->set_rules("occu_city",      "Occupation City",    "trim");
			$this->form_validation->set_rules("income",         "income",             "trim|required");
			$this->form_validation->set_rules("income_type",    "income_type",        "trim|required");
			$this->form_validation->set_rules("email",          "Email",              "trim|required");
			$this->form_validation->set_rules("identity_no",    "Identity No",        "trim|required");
			$this->form_validation->set_rules("mobile",         "Mobile",             "trim|required");
			$this->form_validation->set_rules("mobile_alt",     "Mobile Alter no",    "trim");
			$this->form_validation->set_rules("phone",          "phone",              "trim");
			$this->form_validation->set_rules("phone_alt",      "Phone Alter no",     "trim");
			$this->form_validation->set_rules("resi_address",   "Residence Address",  "trim|required");
			$this->form_validation->set_rules("father",         "Father",             "trim|required");
			$this->form_validation->set_rules("parent_full_nm", "Parent Full Name",   "trim|required");
			$this->form_validation->set_rules("mother",         "Mother",             "trim|required");
			$this->form_validation->set_rules("parent_reci_city","Parent Resident City","trim");
			$this->form_validation->set_rules("brothers",       "Brother",            "trim|required");
			$this->form_validation->set_rules("m_brothers",     "Married Brothers",   "trim");
			$this->form_validation->set_rules("sisters",        "Sisters",            "trim|required");
			$this->form_validation->set_rules("m_sisters",      "Married Sisters",    "trim|required");
			$this->form_validation->set_rules("parent_occu",    "Parent Occupation",  "trim|required");
			$this->form_validation->set_rules("native_dist",    "Native Distrit",     "trim");
			//$this->form_validation->set_rules("family_wealth",  "Family Wealth",      "trim|required");
			$this->form_validation->set_rules("native_taluka",  "Native Taluka",      "trim");
			$this->form_validation->set_rules("mama_surname",   "Mama Surname",       "trim|required");
			$this->form_validation->set_rules("intercast",      "Intercast",          "trim|required");
			$this->form_validation->set_rules("relative_surname","Relative Surname",  "trim|required");
			$this->form_validation->set_rules("intercast_rel",  "Intercast Relation", "trim");
			$this->form_validation->set_rules("preferred_cities","Preferred Cities",  "trim");
			$this->form_validation->set_rules("exp_mangalik",   "Expectation Magalik","trim|required");
			$this->form_validation->set_rules("exp_cast",       "Expectation Cast",   "trim|required");
			$this->form_validation->set_rules("age_diff",       "Age Differance",     "trim|required");
			$this->form_validation->set_rules("exp_ft",         "Expectation Height", "trim|required");
			$this->form_validation->set_rules("exp_inch",       "Expectation Height", "trim");
			$this->form_validation->set_rules("exp_divorcee",   "Expectated Divorcee","trim|required");
			$this->form_validation->set_rules("exp_occu",       "Expectated Ocuupation", "trim|required");
			$this->form_validation->set_rules("exp_education",  "Expectated Education",  "trim|required");
			
			if($this->form_validation->run() == FALSE)
			{
				
				//$this->session->set_flashdata("error","File not submitted successfully..!!");
				//echo validation_errors();
				//$this->load->view('enroll');
				//redirect("enroll");
			}
			else
			{		
				/*---- Create array to upload File/Img -----*/
				$fileUpload = array();
				$isUpload = FALSE;
				
				/*----- Load Value In One Veriable for upload ------*/
				$load = array(
					'upload_path'   => './assets/profile_photos',
					'allowed_types' => 'jpg|png|jpeg|gif',
					'encrypt_name'  =>  TRUE
				);
				
				/*------- Initialize Upload Data ------*/
				$this->upload->initialize($load);
				
				if($this->upload->do_upload('userFile'))
				{
					$fileUpload = $this->upload->data();
					$isUpload   = TRUE;
				}
				if(!$this->upload->do_upload('userFile'))
				{
					$this->session->set_flashdata("error","Upload Profile picture not submited");
					
					//redirect("enroll");
				}
				if($isUpload)
				{
					$mobileno = $this->input->post("mobile");					
					$from = new DateTime($this->input->post('dob'));
					$to   = new DateTime('today');				
					$age =  $from->diff($to)->y;	
					
					$dob = $this->input->post("date")."/".$this->input->post("month")."/".$this->input->post("year");
					
					$birthTime = $this->input->post("hr").":".$this->input->post("min")." ".$this->input->post("am-pm");
					
					$data = array(					
						"first_name"        => $this->input->post("first_name"),
						"middle_name"       => $this->input->post("middle_name"),
						"last_name"         => $this->input->post("last_name"),
						"date_of_birth"     => $dob,
						"age"               => $age,
						"gender"            => $this->input->post("user_type"),
						"sub_cast"          => $this->input->post("sub_cast"),				
						"height_ft"         => $this->input->post("ft"),
						"height_inch"       => $this->input->post("inch"),
						"weight"            => $this->input->post("weight"),
						"blood_group"       => $this->input->post("bloodgrp"),
						"complexion"        => $this->input->post("complexion"),
						"phy_disabal"       => $this->input->post("phy_disab"),				
						"phy_disabal_yes"   => $this->input->post("phy_disab_yes"),
						"diet"              => $this->input->post("diet"),
						"spectacles"        => $this->input->post("spect"),				
						"lens"              => $this->input->post("lens"),				
						"personality"       => $this->input->post("personality"),
						"rashi"             => $this->input->post("rashi"),
						"nakshtra"          => $this->input->post("nakshtra"),
						"charan"            => $this->input->post("charan"),
						"nadi"              => $this->input->post("nadi"),
						"gan"               => $this->input->post("gan"),
						"birth_place"       => $this->input->post("birth_place"),
						"birth_time"        => $birthTime,
						"mangal"            => $this->input->post("mangal"),
						"gotra_devak"       => $this->input->post("gotra"),
						"edu_area"          => $this->input->post("education_area"),
						"education"         => $this->input->post("education"),
						"occupation"        => $this->input->post("occupation"),
						"occu_country"      => $this->input->post("occu_country"),
						"occu_state"        => $this->input->post("occu_state"),
						"occu_city"         => $this->input->post("occu_city"),
						"income"            => $this->input->post("income"),
						"income_type"       => $this->input->post("income_type"),
						"resi_add"          => $this->input->post("resi_address"),
						"email"             => $this->input->post("email"),
						"id_no"             => $this->input->post("identity_no"),
						"mobile_no"         => $this->input->post("mobile"),
						"mobile_alter"      => $this->input->post('mobile_alt'),
						"phone"             => $this->input->post("phone"),
						"phone_alter"     	=> $this->input->post("phone_alt"),
						"father"            => $this->input->post("father"),
						"mother"            => $this->input->post("mother"),
						"parents_full_name" => $this->input->post("parent_full_nm"),
						"parents_reci_city" => $this->input->post("parent_rec_city"),
						"brothers"          => $this->input->post("brothers"),
						"married_brothers"  => $this->input->post("m_brothers"),
						"sisters"           => $this->input->post("sisters"),
						"married_sisiters"  => $this->input->post("m_sisters"),
						"parents_occupation"=> $this->input->post("parent_occu"),
						"relatives_surname" => $this->input->post("relative_surname"),
						"native_distict"    => $this->input->post("native_dist"),
						"native_taluka"     => $this->input->post("native_taluka"),
						//"family_wealth"     => $this->input->post("family_wealth"),
						"mama_surname"      => $this->input->post("mama_surname"),
						"intercast"         => $this->input->post("intercast"),
						"relation_intercast"=> $this->input->post("intercast_rel"),
						"pref_city"         => $this->input->post("preferred_cities"),
						"exp_managl"        => $this->input->post("exp_mangalik"),
						"exp_cast"          => $this->input->post("exp_cast"),
						"age_difference"    => $this->input->post("age_diff"),
						"exp_min_ft"        => $this->input->post("exp_ft"),
						"exp_min_inch"      => $this->input->post("exp_inch"),
						"exp_divorcee"      => $this->input->post("exp_divorcee"),
						"exp_occup"         => $this->input->post("exp_occu"),
						"exp_education"     => $this->input->post("exp_education"),
						"profile_pic"       => $fileUpload['file_name']
					);	
					
					
					
					/*$number = $this->input->post("mobile");
					sendsms($number, 'Welcome To Shobha Kumbhar , your form has been saved successfully.');*/			
					$insert_data = $this->as_model->add_enroll($data);
					
					$this->session->set_flashdata("success", "Your Information Save Succesfully !!, Thank you for Visit");
					
					
					
					//redirect("enroll");
				}
			}	
		}
		$data['sub_casts'] = array("kumbhar","lingayat Kumbhar");
		$data['married_status'] = array("Unmarried_Boy","Unmarried_Girl","Divorcee_Boy/Widower","Divorcee_Girl/Widow");
		$data['blood_groups'] = array("A+","A","B","B+","AB","AB+","O","O+","O-");
		$data['complexions'] = array("Fair","Gora","Sawala","Gavhal","Nimgora","Black","Gora,Smart","Fair,Smart","Gavhal,Smart");
		$this->load->view('design/includes/header');
		$this->load->view('design/enroll',$data);
		$this->load->view('design/includes/footer');	
	}
    
	function search()
    {
        $data['city_name'] = $this->db->query("SELECT DISTINCT occu_city FROM enroll_form")->result_array();
        
        $this->load->view('design/includes/header');
        $this->load->view('design/search',$data);
        $this->load->view('design/includes/footer');
    }
    
    function search_filters()
    {
        $gender1     = $this->input->get('gender');
        $agefrom     = $this->input->get('age-from');
        $ageto       = $this->input->get('age-to');
        $heightfrom  = $this->input->get('height-from');
        $heightto    = $this->input->get('height-to');
        $edu          = $this->input->get('education');
        $cityname    = $this->input->get('city');
        
        $q = "SELECT * FROM enroll_form as ef" ;
        
        if(($gender1!="") || ($agefrom!="") || ($ageto!="") || ($heightfrom!="") || ($heightto!="") || ($edu!="") || ($cityname!="")) {$q.=" WHERE ";}
        
        if($gender1!="")
        {
            $q .= "(";
            $q.="ef.gender = '".$gender1."'";
            $q .= ") "; 
            
            if(($gender1!="" && $agefrom!="") || ($gender1!="" && $ageto!="") || ($gender1!="" && $heightfrom!="") || ($gender1!="" && $heightto!="")|| ($gender1!="" && $edu!="")|| ($gender1!="" && $cityname!="")) {$q.=" AND ";} 
        }
		
        if($agefrom!="" || $ageto!="") 
        {
            $q .= "(";
            $q.="ef.age BETWEEN  '".$agefrom."' AND '".$ageto."'"; 
            $q .= ") "; 
            if(($heightfrom!="" && $agefrom!="" && $ageto!="") || ($heightto!="" && $agefrom!="" && $ageto!="") || ($edu!="" && $agefrom!="" && $ageto!="")|| ($cityname!="" && $agefrom!="" && $ageto!="")) {$q.=" AND ";} 
         }
        
        if($heightfrom!="" || $heightto!="") 
        {
            $q .= "(";
            $q.="ef.height_ft BETWEEN  '".$heightfrom."' AND '".$heightto."'"; 
            $q .= ") "; 
            if(($edu!="" && $heightfrom!="" && $heightto!="") || ($cityname!="" && $heightfrom!="" && $heightto!="")) {$q.=" AND ";} 
         }
    
        if($edu!="")
        {
            $q .= "(";
            $q.="ef.edu_area = '".$edu."'";
            $q .= ") "; 
            
            if(($cityname!="" && $edu!="")) {$q.=" AND ";} 
        }   
        
        if($cityname!="")
        {
            $q .= "(";
            $q.="ef.occu_city = '".$cityname."'";
            $q .= ") "; 
        }
        //$q .=" AND active_status = '1' ORDER BY enroll_reg_no DESC";
		$q .=" AND active_status = '1' ORDER BY enroll_reg_no DESC";
		
        $this->load->view('design/includes/header');
        $data['profiles'] = $this->db->query($q)->result_array();
        $this->load->view('design/search_result',$data);
        $this->load->view('design/includes/footer');    
    }
    
    function search_enrollno()
    {
        $eno = $this->input->get('enroll_no');
		$active_status = 1;
        $data['profiles'] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no =? AND active_status = ? ",array($eno,$active_status))->result_array();
        
        $this->load->view('design/includes/header');
        $this->load->view('design/search_result',$data);
        $this->load->view('design/includes/footer');    
    }
     
    function display_popup()
    {
        $id = $this->input->get('enroll_no');
        $data['profiles'] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no = '$id '")->result_array();
        $this->load->view('design/model_view',$data);        
    }
	
	function grooms()
	{
		$config = array(
           'base_url'        => base_url('As-maratha/grooms'),
           'per_page'        => 300,
           'total_rows'      => $this->as_model->num_rows_grooms(),
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
		   $data['maratha_boys']=$this->as_model->getdatagrooms($config['per_page'], $this->uri->segment(3));
		   $this->load->view('design/includes/header');
		   $this->load->view('design/grooms',$data);
		   $this->load->view('design/includes/footer');  
	}
	
	function brides()
	{
		$config = array(
           'base_url'        => base_url('As-maratha/brides'),
           'per_page'        => 300,
           'total_rows'      => $this->as_model->num_rows_brides(),
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
		   $data['maratha_girls']=$this->as_model->getdatabrides($config['per_page'], $this->uri->segment(3));
		   $this->load->view('design/includes/header');
		   $this->load->view('design/brides',$data);
		   $this->load->view('design/includes/footer');  
	}
    
	function divorcee()
	{
		$config = array(
           'base_url'        => base_url('As-maratha/divorcee'),
           'per_page'        => 300,
           'total_rows'      => $this->as_model->num_rows_divorcee(),
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
		   $data['maratha_divorcee_boy']=$this->as_model->getdatadivorcee($config['per_page'], $this->uri->segment(3));
		   $this->load->view('design/includes/header');
		   $this->load->view('design/divorcee',$data);
		   $this->load->view('design/includes/footer');  
    }
	
    function divc_girl()
	{
		$config = array(
           'base_url'        => base_url('As-maratha/divc_girl'),
           'per_page'        => 300,
           'total_rows'      => $this->as_model->num_rows_divc_girl(),
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
		   $data['maratha_divorcee_girl']=$this->as_model->getdatadivc_girl($config['per_page'], $this->uri->segment(3));
		   $this->load->view('design/includes/header');
		   $this->load->view('design/divorcee-girl',$data);
		   $this->load->view('design/includes/footer');
	}
	
    function success()
	{
		$config = array(
           'base_url'        => base_url('As-maratha/success'),
           'per_page'        => 300,
           'total_rows'      => $this->as_model->num_rows_success(),
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
		   $data['success_story']=$this->as_model->getdatasuccess($config['per_page'], $this->uri->segment(3));
		   $this->load->view('design/includes/header');
		   $this->load->view('design/success',$data);
		   $this->load->view('design/includes/footer');
	}
		
    function response()
	{			
		$this->load->view('design/includes/header');
		$this->load->view('design/response');
		$this->load->view('design/includes/footer');
	}
    
	function upload_profile()
	{
		//$this->load->view('design/includes/header');
		$this->load->view('design/upload-profile');
		//$this->load->view('design/includes/footer');
	}
    
	function search_profile()
	{
		$register_no = $this->input->post('search'); 
		
		if(isset($register_no) && !empty($register_no) )
        {
           $data['register_no'] = $this->as_model->serach_reg_no($register_no);
            
         /*  $data['register_name'] = $this->->serach_artwork($name);*/
           if(count($register_no) == 0)
		   {
			   $this->session->set_flashdata('error','No Result Found');
		   }
			
           $this->load->view('admin/includes/header');
           $this->load->view('admin/search-profile',$data);
           $this->load->view('admin/includes/footer');
		}
		else
		{
			redirect('');
		}
	}
    
	function send_response()
	{
		$this->form_validation->set_rules("regEmail", "User register email id", "trim|required");
		$this->form_validation->set_rules("userRegNum", "User register no", "trim|required");
		$this->form_validation->set_rules("respOne", "Response register no.", "trim|required");
		$this->form_validation->set_rules("respTwo", "Response register no.", "trim");
		$this->form_validation->set_rules("respThree", "Response register no.", "trim");
		$this->form_validation->set_rules("respFour", "Response register no.", "trim");
		$this->form_validation->set_rules("respFive", "Response register no.", "trim");		
		$this->form_validation->set_rules("g-recaptcha-response", "recaptcha validation", "required|callback_validate_captcha");
		$this->form_validation->set_message("validate_captcha", "Please check the captcha form");
		
		if($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', 'Please check the captcha form');
			redirect("response");
		}
		else
		{			
			$active_status = 1;
			$resp = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no=? AND active_status=?",array($this->input->post("userRegNum"),$active_status))->result_array();		
			
			$get_resons_limit = $this->db->query("SELECT enroll_reg_no,count FROM response WHERE enroll_reg_no=?",array($this->input->post("userRegNum")))->result_array();
			
		    if($get_resons_limit[0]['count'] > 0 && $get_resons_limit[0]['count']<=5 )
			{
				if(count($resp)!=0)
				{						
					$active_status = 1;
					$respOneEmail ="SELECT * FROM enroll_form WHERE active_status ='".$active_status."' AND  (enroll_reg_no='".$this->input->post("respOne")."' OR enroll_reg_no='".$this->input->post("respTwo")."' OR enroll_reg_no='".$this->input->post("respThree")."' OR enroll_reg_no='".$this->input->post("respFour")."' OR enroll_reg_no='".$this->input->post("respFive")."')" ;						

					$result = $this->db->query($respOneEmail)->result_array();	


					foreach ($result as $get_email )
					{
						$user_details = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post('userRegNum')))->result_array();	
						
						$config['protocol']     = 'smtp';
						$config['smtp_host']    = 'smtpout.secureserver.net';
						$config['smtp_port']    = '465';
						$config['smtp_timeout'] = '7';
						$config['smtp_user']    = 'info@skmatrimony.com';
						$config['smtp_pass']    = 'Ashwin0616*';
						$config['charset']      = 'utf-8';
						$config['newline']      = "\r\n";
						$config['mailtype']     = 'text'; // or html
						$config['validation']   = TRUE; // bool whether to validate email or not       

						$this->email->initialize($config);

						$this->email->set_mailtype("html");   

						$this->email->from('info@skmatrimony.com', 'Shobha Kumbhar  Vadhu Var Kendra.');
						$this->email->to($get_email['email']);
						$this->email->subject('Shobha Kumbhar  Vadhu Var Kendra.');

						$this->email->message('<div style="font-family:Montserrat,sans-serif;border:1px solid #bdbdbd;padding:50px;background-color:#fff;"><div style="min-width:385px; max-width:270px; margin:auto; color:#000;"><h1 >Shobha Kumbhar  </h1> <p>Find your perfect partner and start your "<strong>Life New Journey</strong>",Now!</p>

						<div style="align:center;border:1px solid #bdbdbd;padding:20px;background-color:#fff;">
						Dear '.$get_email['first_name'].' '.$get_email['last_name'].' ('.$get_email['enroll_reg_no'].')
						<br>Pl refer to your registration with <a href="http://skmatrimony.com">skmatrimony.com</a><br>
						One of our member with registration no. '.$user_details[0]['enroll_reg_no'].', has shown interest in your profile 
						& will be contacting you within next few days. In the mean time, please view their details on our website & if found suitable, please give them positive response. If you want their contact details, pl submit this regd no. through <a href="http://skmatrimony.com/shobha-kumbhar-matrimony/response"> Response </a> option of our website.<br> Have a nice time.<br><br>
						Profile Detail Link : http://skmatrimony.com/shobha-kumbhar-matrimony/search-enrollno?enroll_no='.$user_details[0]['enroll_reg_no'].'
						<br><br>
						With best regards, <a href="http://skmatrimony.com">skmatrimony.com</a></div></div></div>');  

						$this->email->send();             
							/*echo $this->email->print_debugger();*/
						$this->email->clear();						
						
					}					
					foreach($result as $report => $key)
					{
						@$userTitle .= "<table>
										<tr><td> Enroll Reg No : ".$key['enroll_reg_no']."</td></tr>
										<tr><td>  MEMBERS NAME : ".$key['first_name']." ".$key['middle_name']." ".$key['last_name']."</td></tr>
										<tr><td>  ADDRESS :".$key['resi_add']."</td></tr>
										<tr><td>  PHONE NO's : ".$key['mobile_no']." / ".$key['mobile_alter']." / ".$key['phone']." / ".$key['phone_alter']."</td></tr>
										<tr><td>  EMAIL ID :".$key['email']."</td></tr>
										<tr><td>  PARENTS OCCUPATION :".$key['parents_occupation']."</td></tr>
										<tr><td>  DIET :".$key['diet']."</td></tr>
										<tr><td>  INTERCASTE IF ANY :".$key['intercast']." ".$key['relation_intercast']."</td></tr>
										<tr><td>  PHYSICAL DISABILITY IF ANY :".$key['phy_disabal']." ".$key['phy_disabal_yes']."</td></tr>
										<tr><td>  Profile Detail Link : http://skmatrimony.com/shobha-kumbhar-matrimony/search-enrollno?enroll_no=".$key['enroll_reg_no']."</td></tr>
									</table><br><hr><br>";
					}		
					//Your authentication key
					$authKey = "176983AoykHglY5a0024bc";
					//Multiple mobiles numbers separated by comma
					$mobileNumber = $user_details[0]['mobile_no'];

					//Sender ID,While using route4 sender id should be 6 characters long.
					$senderId = "ASHWIN";
					//Your message to send, Add URL encoding here.
					$message = urlencode("Hello, 
											Shobha Kumbhar  user, your response request sent successfully ,
										 you got response from Shobha Kumbhar  with details on your register email id.
										 Please check your email ");
					//Define route 
					$route = 4;
					//Prepare you post parameters
					$postData = array(
					   'authkey' => $authKey,
					   'mobiles' => $mobileNumber,
					   'message' => $message,
					   'sender' => $senderId,
					   'route' => $route
					);
					//API URL
					$url="https://control.msg91.com/api/sendhttp.php";
					// init the resource
					$ch = curl_init();
					curl_setopt_array($ch, array(
					   CURLOPT_URL => $url,
					   CURLOPT_RETURNTRANSFER => true,
					   CURLOPT_POST => true,
					   CURLOPT_POSTFIELDS => $postData
					   //,CURLOPT_FOLLOWLOCATION => true
					));
					//Ignore SSL certificate verification
					curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
					
					//get response
					$output = curl_exec($ch);
					
					//Print error if any
					if(curl_errno($ch))
					{
					   echo 'error:' . curl_error($ch);
					}
					curl_close($ch); // notification send via sms to user profile is activated

					$regEmail = $this->input->post("regEmail");						

					$config['protocol']     = 'smtp';
					$config['smtp_host']    = 'smtpout.secureserver.net';
					$config['smtp_port']    = '465';
					$config['smtp_timeout'] = '7';
					$config['smtp_user']    = 'info@skmatrimony.com';
					$config['smtp_pass']    = 'Ashwin0616*';
					$config['charset']      = 'utf-8';
					$config['newline']      = "\r\n";
					$config['mailtype']     = 'text'; // or html
					$config['validation']   = TRUE; // bool whether to validate email or not           

					$this->email->initialize($config);

					$this->email->set_mailtype("html");   

					$this->email->from('info@skmatrimony.com', 'Shobha Kumbhar  Vadhu Var Kendra.');
					$this->email->to($regEmail);
					$this->email->subject('Shobha Kumbhar  Vadhu Var Kendra.');

					$user_details = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post('userRegNum')))->result_array();

					$this->email->message("Dear <strong>".$user_details[0]['first_name']." ".$user_details[0]['last_name']." ( ".$user_details[0]['enroll_reg_no']." ) </strong><br><br> Please find details you want as below :- <br><br>".$userTitle."");

					$this->email->send(); 
					/*echo $this->email->print_debugger();*/
					$this->email->clear();	
					
					

					/*user send only 5 responses per day*/
					$send_status = 1;
					$count = count($result);
					$total_count = $get_resons_limit[0]['count'];
					$get_count = $total_count - $count;	
					$userRegNo = $this->input->post('userRegNum');

					$this->db->query("UPDATE response SET send_date=NOW(), resp_email=?, send_status=?, count = ?   WHERE enroll_reg_no = ?",array( $regEmail, $send_status, $get_count, $userRegNo));
					/*end user send only 5 responses per day*/
				
					$this->session->set_flashdata("success","Succesfully send email to your intrested profile !!");
					redirect('response');

				}
				else
				{
					$this->session->set_flashdata("error", "user deactivated please contact with Shobha Kumbhar  ...");					
					redirect('response');
				}
			}//check response limit
			else
			{
				$this->session->set_flashdata("error", "Your daily limit is exceed..!! user can send only 5 response per day..!! please try day after tomarrow.. ");	
				redirect('response');
			}//if response limit exceed
			
		}	
	}	
    
	function edit_profile()
	{
        $this->form_validation->set_rules("idAny",  "Enroll Register No",  "trim|required");
		$this->form_validation->set_rules("phMail", "User Register Email", "trim|required");
		
		if($this->form_validation->run() == FALSE)
		{
			redirect("upload-profile");
		}
		else
		{
			$userRegNo   = $this->input->post("idAny");
			$userRegMail = $this->input->post("phMail");
			$active_status = 1;
			
			$get_data = $this->db->query("SELECT enroll_id, enroll_reg_no, email, profile_pic, active_status FROM  enroll_form WHERE enroll_reg_no=? ",array($userRegNo))->result_array();		
			print_r($get_data);;
			if($active_status == $get_data[0]["active_status"])
			{
				print_r($get_data[0]["enroll_reg_no"]);
				print_r($get_data[0]["email"]);
				
				if($userRegNo == $get_data[0]["enroll_reg_no"] && $userRegMail == $get_data[0]["email"] )
				{
					$data['profile_pic'] = $this->db->query("SELECT enroll_id,profile_pic FROM enroll_form WHERE enroll_reg_no=?",array($userRegNo))->result_array();

					$this->load->view("design/includes/header");
					$this->load->view("design/edit-profile",$data);
					$this->load->view("design/includes/footer");
				}
				else
				{
					$this->session->set_flashdata("error","please enter valid register id and email details !!");
					redirect("upload-profile");
				}				
			}
			else
			{
				$this->session->set_flashdata("error", "your member registration number is deactivated..");
				redirect("upload-profile");
			}
						
		}
	}
    
	function save_prof_pic($id)
	{	
		/*---- Create array to upload File/Img -----*/
		$fileUpload = array();
		$isUpload = FALSE;
       // echo $id; 
		/*----- Load Value In One Veriable for upload ------*/
		$load = array(
			'upload_path'   => './assets/profile_photos/',
			'allowed_types' => 'jpg|png|jpeg|gif',
			'encrypt_name'  =>  TRUE            
		);

		/*------- Initialize Upload Data ------*/
		$this->upload->initialize($load);

		if($this->upload->do_upload('userFile'))
		{
			$fileUpload = $this->upload->data();
			$isUpload   = TRUE;
           
		}
        // echo $isUpload."Hello"; exit;
		if(!$this->upload->do_upload('userFile'))
		{			
			$this->session->set_flashdata("error","Upload Profile picture not submited.. Please try again");				

			redirect("upload-profile");
		}
		if($isUpload)
		{			
			$getFile = $fileUpload['file_name'];
			
			$this->db->query("UPDATE enroll_form SET profile_pic=? WHERE enroll_id=?",array($getFile,$id));			

			$this->session->set_flashdata("success", "Profile Picture uploaded.. !!");

			redirect("upload-profile");
		}
			
		
	}
	
	function sessiontimeout()
	{
		$send_status = 0;	
		$count = 5;

		$this->db->query("UPDATE response SET send_status=?, count=?  WHERE send_status = 1",array( $send_status, $count ));
		
		$this->session->set_flashdata("success","Reset succesfully");
		
		redirect("response");
	}
	function validate_captcha()
	{
		$captcha = $this->input->post("g-recaptcha-response");
		$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcbLDQUAAAAADLjditOXulLD3Yy1A727KlDPqU9&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
		
		if($response.'success' == false )
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}


	
