<?php

class As_model extends CI_Model 
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model("as_model");
        $this->load->database();
    }
    
    function add_enroll($data)
    {
        $this->db->insert("enroll_form", $data);			
    }
    
	function login_valid($username,$password)
    {
        $query = $this->db->select('*')
                          ->from('admin')
                          ->where('user_name', $username)
                          ->where('user_pass', $password)
                          ->get();
        
        if($query->num_rows() == 1 )
        {
            return $query->row();        
            //return $query->row()->admin_id;        
        }
        else
        {
            return false;
        }
    }
    
	function serach_reg_no($register_no)
	{
        $this->db->select('*');
        $this->db->from('enroll_form');
        $this->db->like('enroll_reg_no',$register_no,'after');
        
        $query = $this->db->get();
        
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return $query->result();
        }		
	}
    
	function update_profile_pic($id,$data)
	{
		$this->db->set('profile_pic', $data); //value that used to update column  
		$this->db->where('enroll_id', $id); //which row want to upgrade  
		$this->db->update('enroll_form');  //table name			
		
	}
    
	function update_user_details($Brid_id,$data)
	{
		 //value that used to update column  
		$this->db->where('enroll_id', $Brid_id); //which row want to upgrade  
		$this->db->update('enroll_form',$data);
	}
	//grooms list
    function getdata($limit,$offset)
    {          
        $query = $this->db->limit($limit,$offset)
                          ->where('gender','Unmarried_boy')
                          ->get('enroll_form');
        return $query->result_array();
    }
        
    function num_rows()
    {   
        $query = $this->db->get('enroll_form');
        return $query->num_rows();   
    } 
    
    //brides list
    function getdata_brides($limit,$offset)
    {          
        $query = $this->db->limit($limit,$offset)
                          ->where('gender','Unmarried_Girl')
                          ->get('enroll_form');
        return $query->result_array();   
    }
        
    function brides_num_rows()
    {   
        $query = $this->db->get('enroll_form');
        return $query->num_rows();   
    }
    
    //divorcee girl list
    function getdata_divorcee_girl($limit,$offset)
    {          
        $query = $this->db->limit($limit,$offset)
                          ->where('gender','Divorcee_Girl/Widow')
                          ->get('enroll_form');
        return $query->result_array();
    }
        
    function divorcee_girl_num_rows()
    {   
        $query = $this->db->get('enroll_form');
        return $query->num_rows();   
    } 
    
    //divorcee boy list
    function getdata_divorcee_boy($limit,$offset)
    {          
        $query = $this->db->limit($limit,$offset)
                          ->where('gender','Divorcee_Boy/Widower')
                          ->get('enroll_form');
        return $query->result_array();
    }
        
    function divorcee_boy_num_rows()
    {   
        $query = $this->db->get('enroll_form');
        return $query->num_rows();   
    }  
    //success story list
    function getdata_success_story($limit,$offset)
    {          
        $query = $this->db->limit($limit,$offset)
                          ->get('success_story');
        return $query->result_array();  
    }
        
    function success_story_num_rows()
    {   
        $query = $this->db->get('success_story');
        return $query->num_rows();   
    }    
	
	//UI grooms list 
	function num_rows_grooms()
	{
		$query = $this->db->get('enroll_form');
		return $query->num_rows();   
	}
	function getdatagrooms($limit,$offset)
	{
		$query = $this->db->limit($limit,$offset)
						  ->where('gender','Unmarried_Boy')
			 			  ->where('active_status',1)
						  ->order_by("enroll_reg_no", "DESC")
						  ->get('enroll_form');
		return $query->result_array();        
	}
	
	function num_rows_brides()
	{
		$query = $this->db->get('enroll_form');
		return $query->num_rows();   
	}
	
	function getdatabrides($limit,$offset)
	{
		$query = $this->db->limit($limit,$offset)
                          ->where('gender','Unmarried_Girl')
                          ->where('active_status',1)
						  ->order_by("enroll_reg_no", "DESC")
                          ->get('enroll_form');
		return $query->result_array();        
	}
	
	function num_rows_divorcee()
	{
		$query = $this->db->get('enroll_form');
		return $query->num_rows();   
	}
	
	function getdatadivorcee($limit,$offset)
	{
		$query = $this->db->limit($limit,$offset)
                          ->where('gender','Divorcee_Boy/Widower')
                          ->where('active_status',1)
					      ->order_by("enroll_reg_no", "DESC")
                          ->get('enroll_form');
		return $query->result_array();        
	}
	
	function num_rows_divc_girl()
	{
		$query = $this->db->get('enroll_form');
		return $query->num_rows();   
	}
	
	function getdatadivc_girl($limit,$offset)
	{
		$query = $this->db->limit($limit,$offset)
                          ->where('gender','Divorcee_Girl/Widow')
                          ->where('active_status',1)
					      ->order_by("enroll_reg_no", "DESC")
                          ->get('enroll_form');
		return $query->result_array();        
	}
	
	function num_rows_success()
	{
		$query = $this->db->get('success_story');
		return $query->num_rows();   
	}
	
	function getdatasuccess($limit,$offset)
	{
		$query = $this->db->limit($limit,$offset)
                          ->get('success_story');
		return $query->result_array();        
	}
	
}

?>