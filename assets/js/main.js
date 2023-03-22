$(document).ready(function(){       

    $('input[id$=birthtime]').timepicker();
    
    
    $('[data-toggle="popover"]').popover({
        placement:"top",
        trigger:'hover'
    });
    
    $('#divorceDD').click(function(){
       $('#divorceDD span').toggleClass('fa fa-caret-down fa fa-caret-up');
    });	
	
});
	
(function() {
	
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("#respForm").validate({
	  rules: {
		  userRegNum : { required: true, minlength:2, maxlength: 20 },
		  respOne : { required: true, minlength:2, maxlength: 20},
		  captcha : { required : true},
		  regEmail : { required: true, email: true}
	  },
	  messages: {
		  userRegNum : "Please enter your register no",
		  respOne : "Please enter at list one register no",
		  captcha : "Please enter the above verification Code" 
		 
	  },
	  errorElement: "div",
		errorPlacement: function ( error, element ) {
			// add error to .errorTxt
			error.addClass( "help-block" );
			if ( element.prop( "type" ) === "checkbox" || element.prop( "type" ) === "radio") {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter( element );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parent().addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parent().addClass( "has-success" ).removeClass( "has-error" );
		}
	  
  });
    	
    
  $("#enroll_form").validate({
		rules: {
			first_name: { required: true, minlength:2,  maxlength: 20, lettersonly: true },
			middle_name: { required: true,  minlength:2,  maxlength: 20, lettersonly: true},
			last_name: { required: true,   minlength:2, maxlength: 20, lettersonly: true},
			date : { required: {
        				 depends: function(element) {
            			 	if('none' == $('#date').val())
							{	//Set predefined value to blank.
								$('#date').val('');
							}
							 return true;
						 } 
			}},
			month: { required: {
        				 depends: function(element) {
            			 	if('none' == $('#month').val())
							{	//Set predefined value to blank.
								$('#month').val('');
							}
							 return true;
						 } 
			}},
			year : { required: {
        				 depends: function(element) {
            			 	if('none' == $('#year').val())
							{	//Set predefined value to blank.
								$('#year').val('');
							}
							 return true;
						 } 
			} },
            sub_cast:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#sub_cast').val())
							{	//Set predefined value to blank.
								$('#sub_cast').val('');
							}
							 return true;
						 }
			}},
			user_type: { required: {
        				 depends: function(element) {
            			 	if('none' == $('#user_type').val())
							{	//Set predefined value to blank.
								$('#user_type').val('');
							}
							 return true;
						 }
			}},
			ft: { required: {
        				 depends: function(element) {
            			 	if('none' == $('#ft').val())
							{	//Set predefined value to blank.
								$('#ft').val('');
							}
							 return true;
						 }
			}},
			inch:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#ft').val())
							{	//Set predefined value to blank.
								$('#ft').val('');
							}
							 return true;
						 }
			}},
			weight:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#weight').val())
							{	//Set predefined value to blank.
								$('#weight').val('');
							}
							 return true;
						 }
			}},
			bloodgrp:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#bloodgrp').val())
							{	//Set predefined value to blank.
								$('#bloodgrp').val('');
							}
							 return true;
						 }
			}},
			complexion:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#complexion').val())
							{	//Set predefined value to blank.
								$('#complexion').val('');
							}
							 return true;
						 }
			}},
			education_area:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#education_area').val())
							{	//Set predefined value to blank.
								$('#education_area').val('');
							}
							 return true;
						 }
			}},
			brothers:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#brothers').val())
							{	//Set predefined value to blank.
								$('#brothers').val('');
							}
							 return true;
						 }
			}},
			m_brothers:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#m_brothers').val())
							{	//Set predefined value to blank.
								$('#m_brothers').val('');
							}
							 return true;
						 }
			}},
			sisters:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#sisters').val())
							{	//Set predefined value to blank.
								$('#sisters').val('');
							}
							 return true;
						 }
			}},
			m_sisters:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#m_sisters').val())
							{	//Set predefined value to blank.
								$('#m_sisters').val('');
							}
							 return true;
						 }
			}},
			exp_mangalik:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#exp_mangalik').val())
							{	//Set predefined value to blank.
								$('#exp_mangalik').val('');
							}
							 return true;
						 }
			}},
			exp_cast:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#exp_cast').val())
							{	//Set predefined value to blank.
								$('#exp_cast').val('');
							}
							 return true;
						 }
			}},
			exp_cast:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#exp_cast').val())
							{	//Set predefined value to blank.
								$('#exp_cast').val('');
							}
							 return true;
						 }
			}},
			age_diff:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#age_diff').val())
							{	//Set predefined value to blank.
								$('#age_diff').val('');
							}
							 return true;
						 }
			}},
			exp_ft:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#exp_ft').val())
							{	//Set predefined value to blank.
								$('#exp_ft').val('');
							}
							 return true;
						 }
			}},
			exp_inch:{ required: {
        				 depends: function(element) {
            			 	if('none' == $('#exp_inch').val())
							{	//Set predefined value to blank.
								$('#exp_inch').val('');
							}
							 return true;
						 }
			}},           
            phy_disab_yes:{maxlength: 20},
            personality:{required: true, maxlength: 50},
            birth_place:{required: true, maxlength: 20},   
			hr : { required: {
        				 depends: function(element) {
            			 	if('none' == $('#hr').val())
							{	//Set predefined value to blank.
								$('#hr').val('');
							}
							 return true;
						 } 
			}},
			min : {required: {
        				 depends: function(element) {
            			 	if('none' == $('#min').val())
							{	//Set predefined value to blank.
								$('#min').val('');
							}
							 return true;
						 } 
			}},			
            gotra:{ maxlength: 30},
            education:"required",
            occupation:{required: true,  maxlength: 70},
            occu_country:{required: true, maxlength: 50, lettersonly: true},
            occu_state:{required: true, maxlength: 50, lettersonly: true},
            occu_city:{required: true, maxlength: 50, lettersonly: true},
            income:{required: true, maxlength: 20},
			email: { required: true, email: true},	
            identity_no:{required: true, maxlength: 20},
            mobile:{required: true, number:true, minlength:10, maxlength: 13},
            mobile_alt:{ number:true, minlength:10, maxlength: 13},
            phone:{ number:true, maxlength: 13},
            phone_alt:{ number:true, maxlength: 13},
            resi_address:"required",
			parent_full_nm:{required: true, minlength:2,  maxlength: 50},
			parent_rec_city:{required: true, minlength:2, maxlength: 50, lettersonly: true},
			parent_occu:{required: true, minlength:2, maxlength: 70},
			native_dist:{required: true, minlength:2, maxlength: 50, lettersonly: true},
			family_wealth:{required: true,  maxlength: 50},
			mama_surname:{required: true, minlength:2, maxlength: 70},
            relative_surname: {required: true, minlength:2, maxlength: 70},
            intercast_rel:{ maxlength: 70},
            preferred_cities:{required: true, minlength:2, maxlength: 70},
            exp_occu:{required: true, minlength:2, maxlength: 70},
            exp_education:{required: true, minlength:2, maxlength: 70},
            userFile:"required"
            
		},
		messages: {
			first_name: "Please enter your first name min 2 characters, letters only !",
            middle_name: "Please enter your middle name min 2 characters, letters only !",
			last_name: "Please enter your last name min 2 characters, letters only !",
            sub_cast: "Please select your sub caste ",
			user_type: {
      			required: "Please select an option from the list, if none are appropriate please select any one",
     		},
			ft: {
      			required: "Please select an option from the list, if none are appropriate please select 'Other'",
     		},
			inch: {
      			required: "Please select an option from the list, if none are appropriate please select 'Other'",
     		},            
            phy_disab_yes:"Please enter your physical disability",
            personality:"Please enter about your personality",
            birth_place:"Birth place is required",            
            gotra:"Please enter your gotra",
            education:"Please enter your eduction details",
            occupation:"Please enter your occupation",
            occu_country:"Please enter your occupation country name..!! letters only",
            occu_state:"Please enter your occupation state name....!! letters only",
            occu_city:"Please enter your occupation city name..!! letters only",
            income:"Please enter your income ",
			email:"valid e-mail id is required",	
            identity_no:"Please enter your identity number",
            mobile:"Please enter valid mobile number",
            mobile_alt:"Your alter mobile number is not valid",
            phone:"Your phone number is not valid",
            phone_alt:"Your enter number is not valid",
            resi_address:"Please enter residense address with city",
			parent_full_nm:"Please enter Your parents full name",
			parent_rec_city:"Please enter Your parents city name..!! letters only",
			parent_occu:"Please enter Your parents occupation",
			native_dist:"Please enter native district name..!! letters only",
			family_wealth:"Family wealth is required",
			mama_surname:"Please enter mama's surname",
            relative_surname:"Please enter relatives surnames",
            intercast_rel:"Please enter relation with intercast",
            preferred_cities:"Please netr at leastr one city name",
            exp_occu:"Please enter expected occcupation name",
            exp_education:"Please enter expected education ",
            userFile:"Please upload latest profile picture "
		},
		errorElement: "div",
		errorPlacement: function ( error, element ) {
			// add error to .errorTxt
			error.addClass( "help-block" );
			if ( element.prop( "type" ) === "checkbox" || element.prop( "type" ) === "radio") {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter( element );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parent().addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parent().addClass( "has-success" ).removeClass( "has-error" );
		}
	  
      
      
      
	});
    /*Upload*/
    $("#upload").validate({
	  rules: {
		  idAny : { required: true, minlength:5, maxlength: 8},
		  phMail : { required: true, email: true}
	  },
	  messages: {
          idAny : {
              required:"Please enter your valid register no.",
              minlength:"Please enter minimum 5 character",
              maxlength:"Only 8 characters are allowed"
          }
		 
	  },
	  errorElement: "div",
		errorPlacement: function ( error, element ) {
			// add error to .errorTxt
			error.addClass( "help-block" );
			if ( element.prop( "type" ) === "checkbox" || element.prop( "type" ) === "radio") {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter( element );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parent().addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parent().addClass( "has-success" ).removeClass( "has-error" );
		}
	  
  });
})();
$("#dob").datepicker({ dateFormat: 'dd-mm-yy', changeYear: true, yearRange: '1970:1999'});
/*
$('#brothers').on('change', function(){
	if($(this).val()==0){
		$('#m_brothers').val(0);
		$('#m_brothers').attr('disabled','disabled');
	}
	else{
		$('#m_brothers').removeAttr('disabled');		
	}
	
});
$('#sisters').on('change', function(){	
	if($(this).val()==0){
		$('#m_sisters').val(0);
		$('#m_sisters').attr('disabled','disabled');
	}
	else{
		$('#m_sisters').removeAttr('disabled');		
	}	
});*/
$( ".alert-success,.alert-danger" ).fadeOut(9000);
new WOW().init();
/*Perevent right click for modal*/
$(document).bind("contextmenu",function(e){
	return false;
	$(this).keypress("contextmenu",function(e){
		return false;
	});
});
$(document).keydown(function(event){
	if(event.keyCode==123){
		return false;
	}
	else if(event.ctrlKey && event.shiftKey && event.keyCode==73 ){        
		return false;  //Prevent from ctrl+shift+i
	}
	if(event.ctrlKey && (event.keyCode === 67 || event.keyCode === 86 || event.keyCode === 85 || event.keyCode === 117)) {
		return false;
	} else {
		return true;
	}
});




 



