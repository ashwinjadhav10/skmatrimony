<?php

class As_maratha extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array("url","form","string","captcha","security"));
		$this->load->library(array('form_validation','session','upload','image_lib'));	
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
	{
		$this->load->view('design/includes/header');
		$this->load->view('design/enroll');
		$this->load->view('design/includes/footer');
	}
    
	function add_enroll()
	{
		$this->form_validation->set_rules("enroll_reg_no",  "Enroll Reg No",      "trim");
		$this->form_validation->set_rules("first_name",     "First Name",         "trim|required");
		$this->form_validation->set_rules("middle_name",    "Middle name",        "trim|required");
		$this->form_validation->set_rules("last_name",      "Last Name",          "trim|required");
		$this->form_validation->set_rules("dob",            "Date Of Birth",      "trim|required");
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
		$this->form_validation->set_rules("birthtime",      "Birth Time",         "trim|required");
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
		$this->form_validation->set_rules("family_wealth",  "Family Wealth",      "trim|required");
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
			$this->load->view('design/includes/header');
			$this->load->view('design/enroll');
			$this->load->view('design/includes/footer');
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
				
				$this->load->view('design/includes/header');
				$this->load->view('design/enroll');
				$this->load->view('design/includes/footer');
			}
			if($isUpload)
			{
				$from = new DateTime($this->input->post('dob'));
                $to   = new DateTime('today');
                $age =  $from->diff($to)->y;
				
				$data = array(					
					"first_name"      => $this->input->post("first_name"),
					"middle_name"     => $this->input->post("middle_name"),
					"last_name"       => $this->input->post("last_name"),
					"date_of_birth"   => $this->input->post("dob"),
					"age"             => $age,
					"gender"          => $this->input->post("user_type"),
					"sub_cast"        => $this->input->post("sub_cast"),				
					"height_ft"       => $this->input->post("ft"),
					"height_inch"     => $this->input->post("inch"),
					"weight"          => $this->input->post("weight"),
					"blood_group"     => $this->input->post("bloodgrp"),
					"complexion"      => $this->input->post("complexion"),
					"phy_disabal"     => $this->input->post("phy_disab"),				
					"phy_disabal_yes" => $this->input->post("phy_disab_yes"),
					"diet"            => $this->input->post("diet"),
					"spectacles"      => $this->input->post("spect"),				
					"lens"            => $this->input->post("lens"),				
					"personality"     => $this->input->post("personality"),
					"rashi"           => $this->input->post("rashi"),
					"nakshtra"        => $this->input->post("nakshtra"),
					"charan"          => $this->input->post("charan"),
					"nadi"            => $this->input->post("nadi"),
					"gan"             => $this->input->post("gan"),
					"birth_place"     => $this->input->post("birth_place"),
					"birth_time"      => $this->input->post("birthtime"),
					"mangal"          => $this->input->post("mangal"),
					"gotra_devak"     => $this->input->post("gotra"),
					"edu_area"        => $this->input->post("education_area"),
					"education"       => $this->input->post("education"),
					"occupation"      => $this->input->post("occupation"),
					"occu_country"    => $this->input->post("occu_country"),
					"occu_state"      => $this->input->post("occu_state"),
					"occu_city"       => $this->input->post("occu_city"),
					"income"          => $this->input->post("income"),
					"income_type"     => $this->input->post("income_type"),
					"resi_add"        => $this->input->post("resi_address"),
					"email"           => $this->input->post("email"),
					"id_no"           => $this->input->post("identity_no"),
					"mobile_no"       => $this->input->post("mobile"),
					"mobile_alter"    => $this->input->post('mobile_alt'),
					"phone"           => $this->input->post("phone"),
					"phone_alter"     => $this->input->post("phone_alt"),
					"father"          => $this->input->post("father"),
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
					"family_wealth"     => $this->input->post("family_wealth"),
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
			
				$insert_data = $this->as_model->add_enroll($data);

				$this->session->set_flashdata("success", "Your Information Save Succesfully !!, Thank you for Visit");
				
				$this->load->view('design/includes/header');
				$this->load->view('design/enroll');
				$this->load->view('design/includes/footer');
			}
		}		
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
            $q.="ef.age BETWEEN  '".$agefrom."'AND'".$ageto."'"; 
            $q .= ") "; 
            if(($heightfrom!="" && $agefrom!="" && $ageto!="") || ($heightto!="" && $agefrom!="" && $ageto!="") || ($edu!="" && $agefrom!="" && $ageto!="")|| ($cityname!="" && $agefrom!="" && $ageto!="")) {$q.=" AND ";} 
         }
        
        if($heightfrom!="" || $heightto!="") 
        {
            $q .= "(";
            $q.="ef.height_ft BETWEEN  '".$heightfrom."'AND'".$heightto."'"; 
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
        
        $this->load->view('design/includes/header');
        $data['profiles'] = $this->db->query($q)->result_array();
        $this->load->view('design/search_result',$data);
        $this->load->view('design/includes/footer');    
    }
    
    function search_enrollno()
    {
        $eno = $this->input->get('enroll_no');
        $data['profiles'] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no = '$eno'")->result_array();
        
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
		$data['maratha_boys'] = $this->db->query("SELECT * FROM enroll_form WHERE gender='Unmarried_Boy' AND active_status='1'")->result_array();
		
		$this->load->view('design/includes/header');
		$this->load->view('design/grooms',$data);
		$this->load->view('design/includes/footer');
	}		
	
	function brides()
	{
		$data['maratha_girls'] = $this->db->query("SELECT * FROM enroll_form WHERE gender='Unmarried_Girl' AND active_status='1' ")->result_array();	
		
		$this->load->view('design/includes/header');
		$this->load->view('design/brides',$data);
		$this->load->view('design/includes/footer');
       
	}
    
	function divorcee()
	{
		$data['maratha_divorcee_boy'] = $this->db->query("SELECT * FROM enroll_form WHERE gender=? AND active_status=?",array("Divorcee_Boy/Widower","1"))->result_array();
		
		$this->load->view('design/includes/header');
		$this->load->view('design/divorcee',$data);
		$this->load->view('design/includes/footer');
    }
	
    function divc_girl()
	{
		$data['maratha_divorcee_girl'] = $this->db->query("SELECT * FROM enroll_form WHERE gender=? AND active_status=?",array("Divorcee_Girl/Widow","1"))->result_array();
            
		$this->load->view('design/includes/header');
		$this->load->view('design/divorcee-girl',$data);
		$this->load->view('design/includes/footer');
    }
	
    function success()
	{
		$data["success_story"] = $this->db->query("SELECt * FROM success_story")->result_array();
		$this->load->view('design/includes/header');
		$this->load->view('design/success',$data);
		$this->load->view('design/includes/footer');
	}
	
    function response()
	{	
		/*--captcha code array */
		$data = array(
			'img_path' => './assets/captcha/',
			'img_url'  => 'http://skmatrimony.com/shobha-kumbhar-matrimony/assets/captcha/',
			'img_width' => '150',
			'img_height' => '40',
			'word_length' => 5,			
			'colors'        => array(
                'background' => array(255, 66, 66),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
			
		);
		//Create captcha code
		$captcha = create_captcha($data);
		
		// session set for captcha code
		$this->session->set_userdata("captchaCode");		
		
		$this->load->view('design/includes/header');
		$this->load->view('design/response',$captcha);
		$this->load->view('design/includes/footer');
	}
    
	function upload_profile()
	{
		$this->load->view('design/includes/header');
		$this->load->view('design/upload-profile');
		$this->load->view('design/includes/footer');
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
		$this->form_validation->set_rules("respOne", "Response register no", "trim|required");
		
		if($this->form_validation->run() == FALSE)
		{
			redirect("response");
		}
		else
		{
			$captchaCode = $this->input->post("hideCaptcha"); 
			$captcha = 	$this->input->post("captcha"); 
			$resp = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("userRegNum")))->result_array();
			
			if($captchaCode == $captcha && count($resp)!=0)
			{
				$inf = "";
				if($this->input->post("respOne")!= "")
				{
					$respOneEmail = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respOne")))->result_array();
					$emailOne = $respOneEmail[0]['email'];
					$inf .= $this->input->post("respOne").",";
				}
				else
				{
					$emailOne = " ";
				}
				if($this->input->post("respTwo")!= "")
				{
					$respTwoEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respTwo")))->result_array();
					$emailTwo = $respTwoEmail[0]['email'];
					$inf .= $this->input->post("respTwo").",";
				}
				else
				{
					$emailTwo = " ";
				}
				if($this->input->post("respThree")!= "")
				{
					$respThreeEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respThree")))->result_array();
					$emailThree = $respThreeEmail[0]['email'];
					$inf .= $this->input->post("respThree").",";
				}
				else
				{
					$emailThree = " ";
				}
				if($this->input->post("respFour")!= "")
				{
					$respFourEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respFour")))->result_array();
					$emailFour = $respFourEmail[0]['email'];
					$inf .= $this->input->post("respFour").",";
				}
				else
				{
					$emailFour = " ";
				}
				if($this->input->post("respFive")!= "")
				{
					$respFiveEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respFive")))->result_array();
					$emailFive = $respFiveEmail[0]['email'];
					$inf .= $this->input->post("respFive").",";
				}
				else
				{
					$emailFive = " ";
				}
				if($this->input->post("respSix")!= "")
				{
					$respSixEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respSix")))->result_array();
					$emailSix= $respFiveEmail[0]['email'];
					$inf .= $this->input->post("respSix").",";
				}
				else
				{
					$emailSix = " ";
				}
				if($this->input->post("respSeven")!= "")
				{
					$respSevenEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respSeven")))->result_array();
					$emailSeven= $respSevenEmail[0]['email'];
					$inf .= $this->input->post("respSeven").",";
				}
				else
				{
					$emailSeven = " ";
				}
				if($this->input->post("respEight")!= "")
				{
					$respEightEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respEight")))->result_array();
					$emailEight = $respEightEmail[0]['email'];
					$inf .= $this->input->post("respEight").",";
				}
				else
				{
					$emailEight = " ";
				}
				if($this->input->post("respNine")!= "")
				{
					$respNineEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respNine")))->result_array();
					$emailNine = $respNineEmail[0]['email'];
					$inf .= $this->input->post("respNine").",";
				}
				else
				{
					$emailNine = " ";
				}
				if($this->input->post("respTen")!= "")
				{
					$respTenEmail = $this->db->query("SELECT email FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post("respTen")))->result_array();
					$emailTen = $respTenEmail[0]['email'];
					$inf .= $this->input->post("respTen").",";
				}
				else
				{
					$emailTen = " ";
				}

				$tags = array($emailOne, $emailTwo, $emailThree, $emailFour, $emailFive, $emailSix, $emailSeven, $emailEight, $emailNine, $emailTen);

				foreach($tags as $email_send )
				{
					$user_details = $this->db->query("SELECT * FROM enroll_form WHERE enroll_reg_no=?",array($this->input->post('userRegNum')))->result_array();

					$this->load->library('email');

					$config['protocol']     = 'smtp';
					$config['smtp_host']    = 'ssl://smtp.gmail.com';
					$config['smtp_port']    = '465';
					$config['smtp_timeout'] = '7';
					$config['smtp_user']    = 'ashwinjadhav10@gmail.com';
					$config['smtp_pass']    = 'Ajj67704*';
					$config['charset']      = 'utf-8';
					$config['newline']      = "\r\n";
					$config['mailtype']     = 'text'; // or html
					$config['validation']   = TRUE; // bool whether to validate email or not       

					$this->email->initialize($config);

					$this->email->set_mailtype("html");   

					$this->email->from('ashwinjadhav10@gmail.com', 'Shobha Kumbhar Matrimony your profile shortlisted by '.$user_details[0]['last_name'].'');
					$this->email->to($email_send);
					$this->email->subject('Shobha Kumbhar Matrimony your profile shortlisted by '.$user_details[0]['last_name'].'');

					$this->email->message('<div style="font-family:Montserrat,sans-serif;border:1px solid #bdbdbd;padding:50px;background-color:#fff;"><div style="min-width:385px; max-width:270px; margin:auto; color:#c22127;"><h1 >Shobha Kumbhar Matrimony </h1> <p>Find your perfect partner and start your "<strong>Life New Journey</strong>", Now!</p>
					<div style="align:center;border:1px solid #bdbdbd;padding:20px;background-color:#fff;">Hi,This is '.$user_details[0]['first_name'].' '.$user_details[0]['last_name'].'<br> <h4> I am intrested in your profile, If you are intrested in my profile find my profile using my register number '.$user_details[0]['enroll_reg_no'].'</h4>
					</p><br /><a href="http://www.start-ster.com/demo/login" style="background-color: #174f80;border: 1px solid #174f80;padding: 5px 20px;color: #fff; cursor:pointer;text-decoration:none;" >Accept Invite</a><br /><br /> About Shobha Kumbhar Matrimony : </div></div></div>');  

					$this->email->send();             
					/*echo $this->email->print_debugger();*/
					$this->email->clear();

				}				
				$ab = false;
				$regEmail = $this->input->post("regEmail");
				if(count($resp)==1) {
					$ab = $this->db->query("INSERT INTO response (enroll_reg_no, resp_email, ids, activation) VALUES (?, ?, ?, ?)",
					array(
						$this->input->post('userRegNum'),
						$regEmail,
						$inf,
						md5(time())
					));
				}
				
				$sent_url = $this->db->query("SELECT * FROM response WHERE enroll_reg_no=?",array($this->input->post("userRegNum")))->result_array();
				
				$this->load->library('email');
											 
				$config['protocol']     = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.gmail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '7';
				$config['smtp_user']    = 'ashwinjadhav10@gmail.com';
				$config['smtp_pass']    = 'Ajj67704*';
				$config['charset']      = 'utf-8';
				$config['newline']      = "\r\n";
				$config['mailtype']     = 'text'; // or html
				$config['validation']   = TRUE; // bool whether to validate email or not       

				$this->email->initialize($config);

				$this->email->set_mailtype("html");   

				$this->email->from('ashwinjadhav10@gmail.com', 'Shobha Kumbhar Matrimony your profile shortlisted by Shobha Kumbhar Matrimony');
				$this->email->to($regEmail);
				$this->email->subject('Respond to your request from Shobha Kumbhar Matrimony');

				$this->email->message('<div style="font-family:Montserrat,sans-serif;border:1px solid #bdbdbd;padding:50px;background-color:#fff;"><div style="min-width:385px; max-width:270px; margin:auto; color:#c22127;"><h1 >Shobha Kumbhar Matrimony </h1> <p>Find your perfect partner and start your "<strong>Life New Journey</strong>", Now!</p>
				<div style="align:center;border:1px solid #bdbdbd;padding:20px;background-color:#fff;">From, <br> Shobha Kumbhar Matrimony <br> <h4> as per your request we are found your selected profile please click following link for more details your shortlisted profiles</h4>
				</p><br /><a href="http://skmatrimony.com/shobha-kumbhar-matrimony/enquiries/view-details/'.$sent_url[0]["activation"].'" style="background-color: #174f80;border: 1px solid #174f80;padding: 5px 20px;color: #fff; cursor:pointer;text-decoration:none;" >click hear to see your requested profile view </a><br /><br /> About Shobha Kumbhar Matrimony : </div></div></div>');  

				$this->email->send();   

				$this->session->set_flashdata("success","Succesfully send email to your intrested profile !!");

				redirect('response');
			} // captcha right
			else
			{
				$this->session->set_flashdata("error", "Please enter valid capture code ..!!");				
				redirect('response');
			} // captcha not right
		}
        
		function as_popup()
		{
			$enroll_reg_id = $this->input->post("enroll_id");
			$d = array('sec' => "".$this->security->get_csrf_hash()."");
			//$d['u'] = $this->db->query("SELECT * FROM enroll_form WHERE gender=Unmarried Boy ")->result_array();
			//$d['a'] = $this->db->query("SELECT * FROM enroll_form WHERE enroll_id=?",array($enroll_reg_id))->result_array();
			echo json_encode($d);
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
			
			$get_data = $this->db->query("SELECT enroll_id, enroll_reg_no, email, profile_pic FROM  enroll_form WHERE enroll_reg_no=?",array($userRegNo))->result_array();
			
			if($userRegNo == $get_data[0]["enroll_reg_no"] && $userRegMail == $get_data[0]["email"])
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
	}
    
	function save_prof_pic($id)
	{	
		/*---- Create array to upload File/Img -----*/
		$fileUpload = array();
		$isUpload = FALSE;

		/*----- Load Value In One Veriable for upload ------*/
		$load = array(
			'upload_path'   => './assets/profile_photos',
			'allowed_types' => 'jpg|png|jpeg|gif',
			'encrypt_name'  =>  TRUE,
            'max_size'      => '100',
            'max_width'     => '1024',
            'max_height'    => '768'
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
			$this->session->set_flashdata("error","Upload Profile picture not submited.. Please try again");				

			$this->load->view('design/includes/header');
			$this->load->view('design/upload-profile');
			$this->load->view('design/includes/footer');
		}
		if($isUpload)
		{			
			$getFile = $fileUpload['file_name'];
			
			$this->db->query("UPDATE enroll_form SET profile_pic=? WHERE enroll_id=?",array($getFile,$id));			

			$this->session->set_flashdata("success", "Profile Picture uploaded.. !!");

			redirect("upload-profile");}
			
		
	}
}


	