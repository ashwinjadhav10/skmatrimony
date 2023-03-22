<div class="container-fluid">
	<div class="col-md-3" style="padding:0px;">
		<?php $this->load->view("admin/includes/sidebar");?>
	</div>
	<div class="col-md-9" style="padding:0px">
		<div class="left-panel">
			<div class="content-wrap">
                <div class="col-md-12">
                    <div class="panel panel-default panel-table">                       
                        <div class="panel-body">	
                            <br>
							<h4 class="text-center">User Profile Details</h4> 
						</div>
						<hr>
						<div class="col-md-6">
							<h4>Personal Information</h4>
						</div>
						<div class="clearfix"></div>
						<?php foreach($brid_edit as $girls):?>
						<?php echo validation_errors('<p class="alert alert-danger">'); ?>
						<form action="<?php echo site_url("brid-save/".$girls['enroll_id']);?>" method="post">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="first-name">First Name:</label>
									<input id="first_name" class="form-control" type="text" name="first_name" value="<?php echo $girls['first_name'];?>" placeholder="First Name">
									<?php echo form_error('first_name'); ?>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="middle-name">Middle Name:</label>
									<input id="middle_name" class="form-control" type="text" value="<?php echo $girls['middle_name']?>" name="middle_name"  placeholder="Middle Name">
									<?php echo form_error('<p class="alert alert-danger myriad">first_name'); ?>
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="last-name">Last Name:</label>
									<input id="last_name" class="form-control" type="text" value="<?php echo $girls['last_name']?>" name="last_name" placeholder="Last Name">
								</div>
								<div class="col-md-6 " id="datepicker">
									<label class="control-label" for="date-of-birth">Date Of Birth:</label>
									<input class="form-control date" value="<?php echo $girls['date_of_birth'];?>" type="text" name="dob" required="required" id="dateBirth" placeholder="Date of Birth">
								</div>
								<input type="hidden" name="age" class="form-control">
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="sub-cast">Sub cast:</label>
									<input id="sub_cast" class="form-control" type="text" value="<?php echo $girls['sub_cast'];?>" name="sub_cast" placeholder="Sub cast">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="user_type">Marital Status:</label>
                                    <input id="user_type" class="form-control" type="text" value="<?php echo $girls['gender']?>" name="user_type" placeholder="Marital Status">
									<!--<select class="form-control" name="user_type" id="user_type" value="<?php echo $girls['user_type'];?>" >
										<option value="Unmarried_Boy" selected="selected">Unmarried Boy</option>
										<option value="Unmarried_Girl">Unmarried Girl</option>
										<option value="Divorcee_Boy/Widower">Divorcee Boy / Widower</option>
										<option value="Divorcee_Girl/Widow">Divorcee Girl / Widow</option>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="height">Height:</label>
									<div class="form-inline " >
										<input id="ft" class="form-control" type="text" value="<?php echo $girls['height_ft'];?>" name="ft" placeholder="Height in feet ">
										<!--<select class="form-control" name="ft" id="ft" >
											<?php for($i=4;$i<=8;$i++):?>
											<option value="<?php echo $i;?>" <?php echo (set_value($i)== $i)?" selected=' selected'":""?>><?php echo $i;?></option>
											<?php endfor;?>
										</select>-->
										<input id="inch" class="form-control" type="inch" value="<?php echo $girls['height_inch']?>" name="inch" placeholder="Weight">
										<!--<select class="form-control " name="inch" id="inch">
											<?php for($i=0;$i<=12;$i++):?>
											<option value="<?php echo $i;?>" <?php echo (set_value($i)== $i)?" selected='selected'":""?> ><?php echo $i;?></option>
											<?php endfor;?>
										</select>-->
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="weight">Weight:</label>
                                    <input id="weight" class="form-control" type="text" value="<?php echo $girls['weight']?>" name="weight" placeholder="Weight">
									<!--<select class="form-control" name="weight" id="weight">
										<?php for($i=1;$i<=200;$i++):?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php endfor;?>
									</select>--> 
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="bloodgrp">Blood Group:</label>
                                    <input id="bloodgrp" class="form-control" type="text" value="<?php echo $girls['blood_group'];?>" name="bloodgrp" placeholder="Blood Group">
									<!--<select class="form-control" name="bloodgrp" id="bloodgrp">
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="--">Don't Know</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="complexion">Complexion:</label>
                                    <input id="complexion" class="form-control" type="text" value="<?php echo $girls['complexion'];?>" name="complexion" placeholder="complexion">
									<!--<select class="form-control" name="complexion" id="complexion">
										<option value="FAIR">FAIR</option>
										<option value="GORA">GORA</option>
										<option value="SAWALA">SAWALA</option>
										<option value="GAVHAL">GAVHAL</option>
										<option value="NIMGORA">NIMGORA</option>
										<option value="BLACK">BLACK</option>
										<option value="GORA,SMART">GORA,SMART</option>
										<option value="FAIR,SMART">FAIR,SMART</option>
										<option value="GAVHAL,SMART">GAVHAL,SMART</option>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="physical-disabilities">Physical Disabilities:</label>
									<div class="form-inline">
										<input id="complexion" class="form-control" type="text" value="<?php echo $girls['phy_disabal'];?>" name="phy_disab" placeholder="phy_disab">
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="physical-disabilities-yes">If yes, pl specify :</label>
									<input id="phy_disab_yes" class="form-control" type="text" name="phy_disab_yes" id="phy_disab_yes"  value="<?php echo $girls['phy_disabal_yes']?>" placeholder="If yes, pl specify">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="diet">Diet:</label>
									<div class="form-inline" >
										<input id="phy_disab_yes" class="form-control" type="text" name="diet" id="phy_disab_yes"  value="<?php echo $girls['diet']?>" placeholder="diet">
										
									</div> 
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="spectacles">Spectacles:</label>
									<div class="form-inline" >
										<input id="phy_disab_yes" class="form-control" type="text" name="spect" id="spect"  value="<?php echo $girls['spectacles']?>" placeholder="diet">
										
									</div>
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="lens">Lens:</label>
									<div class="form-inline" >
										<input id="phy_disab_yes" class="form-control" type="text" name="lens" id="lens"  value="<?php echo $girls['lens']?>" placeholder="diet">
										<!--<label class="radio-inline"><input type="radio" name="lens" value="Yes">Yes</label>
										<label class="radio-inline"><input type="radio" name="lens" Value="No" checked>No</label>-->
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="personality">Personality:</label>
									<input id="personality" class="form-control" type="text" name="personality" value="<?php $girls['personality']?>" id="personality" placeholder="About your personality..">
								</div>
                                <div class="clearfix"></div>
							</div>
							 <div class="col-md-12">
								<h4>Horoscop Details : </h4>
							</div>       
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="rashi">Rashi:</label>
                                    <input id="rashi" class="form-control" type="text" value="<?php echo $girls['rashi']?>" name="rashi" id="rashi" placeholder="Rashi">
									<!--<select class="form-control" name="rashi" id="rashi">
										<option value="Unspecified" selected="selected">Unspecified</option>
										<option value="Mesh">Mesh</option>
										<option value="Vrushabh">Vrushabh</option>
										<option value="mithun">Mithun</option>
										<option value="kark">Kark</option>
										<option value="sinha">Sinha</option>
										<option value="kanya">Kanya</option>
										<option value="tula">Tula</option>
										<option value="vrischik">Vrischik</option>
										<option value="dhanu">Dhanu</option>
										<option value="makar">Makar</option>
										<option value="kumbh">Kumbh</option>
										<option value="meen">Meen</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="birth_place">Birth Place:</label>
									<input id="birth_place" class="form-control" type="text" value="<?php echo $girls['birth_place']?>" name="birth_place" placeholder="Birth Place">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<label class="control-label" for="nakshtra">Nakshtra:</label>
                                    <input id="nakshtra" class="form-control" type="text" value="<?php echo $girls['nakshtra']?>" name="nakshtra" placeholder="Nakshtra">
									<!--<select class="form-control" name="nakshtra" id="nakshtra">
										<option value="Unspecified" selected="selected">Unspecified</option>
										<option value="Ashwini">Ashwini</option>
										<option value="Ardra">Ardra</option>
										<option value="Aslesha">Aslesha</option>
										<option value="Anuradha">Anuradha</option>
										<option value="Bharani">Bharani</option>
										<option value="Chitra">Chitra</option>
										<option value="Dhanishta">Dhanishta</option>
										<option value="Hasta">Hasta</option>
										<option value="Jyeshta">Jyeshta</option>
										<option value="Krittika">Krittika</option>
										<option value="Moola">Moola</option>
										<option value="Magha">Magha</option>
										<option value="Mrigasira">Mrigasira</option>
										<option value="Pushya">Pushya</option>
										<option value="Purva Phalgini">Purva Phalgini</option>
										<option value="Purva Bhadra">Purva </option>
										<option value="Purva Shadha">Purva </option>
										<option value="Punarvasu">Punarvasu</option>
										<option value="Rohini">Rohini</option>
										<option value="Swati">Swati</option>
										<option value="Revati">Revati</option>
										<option value="Shattarka">Shattarka</option>
										<option value="Shravan">Shravan</option>
										<option value="Uttara Phalguni">Uttara Phalguni</option>
										<option value="Uttara Bhadra">Uttara Bhadra</option>
										<option value="Uttara Shadha">Uttara Shadha</option>
										<option value="Vishakha">Vishakha</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="birthTime">Birth Time:</label>
									<input id="birthtime" class="form-control time ui-timepicker-input myriad tool-tip" type="text" data-toggle="popover" data-content="If your exact birthtime is not showing below options please enter exact birth time!" name="birthtime" value="<?php echo $girls['birth_time']?>" placeholder="Birth Time">                  
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="charan">Charan:</label>
                                    <input id="charan" class="form-control" type="text" value="<?php echo $girls['charan']?>" name="charan" placeholder="Charan ">
									<!--<select class="form-control" name="charan" id="charan">
										<option value="Unspecified" selected="selected">Unspecified</option>
										<?php for($i=1; $i<5; $i++):?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option><?php endfor;?>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="mangal">Mangal:</label>
                                    <input id="mangal" class="form-control" type="text" value="<?php echo $girls['mangal']?>" name="mangal" placeholder="Mangal state">
									<!--<select class="form-control" name="mangal" id="mangal">
										<option value="Yes">Yes</option>
										<option value="No" selected="selected">No</option>
										<option value="Saumya">Saumya</option>
										<option value="Nirdosh">Nirdosh</option>
										<option value="Not Known">Not Known</option>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="nadi">Nadi:</label>
                                    <input id="nadi" class="form-control" type="text" name="nadi" value="<?php echo $girls['nadi']?>" placeholder="Nadi type">
									<!--<select class="form-control" id="nadi" name="nadi">
										<option value="Unspecified" selected="selected">Unspecified</option>
										<option value="Adhya">Adhya</option>
										<option value="Madhya">Madhya </option>
										<option value="Antya">Antya</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="gotra">Gotra / Devak:</label>
									<input id="gotra" class="form-control" type="text" value="<?php echo $girls['gotra_devak']?>" name="gotra" placeholder="Gotra / Devak">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="gan">Gan:</label>
                                    <input id="gan" class="form-control" type="text" value="<?php echo $girls['gan']?>" name="gan" placeholder="Gan type">
									<!--<select class="form-control" id="gan" name="gan">
										<option value="Unspecified" selected="selected">Unspecified</option>
										<option value="Dev Gan">Dev Gan</option>
										<option value="Manushya Gan">Manushya Gan</option>
										<option value="Rakshas Gan"> Rakshas Gan</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="col-md-12">
								<h4>Educational / Professional Details : </h4>
							</div>
                            <div class="clearfix"></div>
							<div class="form-group">
								<div class="col-md-6 " >
									<label class="control-label" for="education_area">Education Area:</label>
                                    <input id="education_area" class="form-control" type="text" value="<?php echo $girls['edu_area']?>" name="education_area" placeholder="Education Area">
									<!--<select class="form-control" name="education_area" id="education_area">
										<option value="GRADUATE">12th to Graduate</option>
										<option value="DOUBLE GRADUATE">Post - Graduate</option>
										<option value="doctor">Doctor</option>
										<option value="engineer">Engineer</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="education">Education:</label>
									<input id="education" class="form-control" type="text" name="education" value="<?php echo $girls['education']?>" placeholder="Education">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="occupation">Occupation:</label>
									<input id="occupation" class="form-control" type="text" name="occupation" value="<?php echo $girls['occupation']?>" placeholder="Occupation">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="occupation-city">Occupation Country:</label>
									<input id="occu_country" class="form-control" type="text" name="occu_country" value="<?php echo $girls['occu_country']?>" placeholder="Occupation Country">
									<!--<select class="form-control" id="occu_country" name="occu_country">
										<option value="">Select Country</option>
									</select> -->
								</div>
                                <div class="clearfix"></div>
								<div class="col-md-6 ">
									<label class="control-label" for="occupation">Occupation state:</label>
									<input id="occu_state" class="form-control" type="text" name="occu_state" value="<?php echo $girls['occu_state']?>" placeholder="Occupation">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="occupation">Occupation city:</label>
									<input id="occu_city" class="form-control" type="text" name="occu_city" value="<?php echo $girls['occu_city']?>" placeholder="Occupation">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6">
									<label class="control-label" for="income">Income:</label>
									<div class=" form-inline">
										<input id="income" class="form-control" type="text" name="income" value="<?php echo $girls['income']?>" placeholder="Income"/>
										<input id="income_type" class="form-control" type="text" name="income_type" value="<?php echo $girls['income_type']?>" placeholder="Income"/>
										<!--<select class="form-control" name="income_type" id="income_type">
											<option  selected="selected">PM</option>
											<option>PA</option>
										</select>-->
									</div>
								</div>
								<div class="col-md-6 ">

								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="col-md-12">
								<h4>Address :</h4>
							</div>
                            <div class="clearfix"></div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="emailId">Email Id:</label>
									<input id="email" class="form-control" type="text" name="email" value="<?php echo $girls['email']?>" placeholder="Email Id">   
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="physic">PAN / Adhar/ Driving License / Passport No:</label>
									<input id="identity_no" class="form-control" type="text" name="identity_no" value="<?php echo $girls['id_no']?>" placeholder="PAN / Adhar/ Driving License / Passport No">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="phone">Mobile for SMS alert:</label>
									<input id="mobile" class="form-control" type="text" name="mobile" value="<?php echo $girls['mobile_no']?>" placeholder="Mobile for SMS alert">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="phone1">Mobile II:</label>
									<input id="mobile_alt" class="form-control" type="text" name="mobile_alt" value="<?php echo $girls['mobile_alter']?>" placeholder="Mobile II"> 
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
                                <div class="col-md-6 ">
									 <label class="control-label" for="phone3">Phone I:</label>
									 <input id="phone" class="form-control" type="text" name="phone" value="<?php echo $girls['phone']?>" placeholder="Phone I"> 
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="phone4">Phone II:</label>
									<input id="phone_alt" class="form-control" type="text" name="phone_alt" value="<?php echo $girls['phone_alter']?>" placeholder="Phone II"> 
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="resi_address">Residence Address with city:</label>
                                    <!--<textarea class="form-control" rows="5" name="resi_address" id="resi_address"></textarea>-->
                                    <input id="resi_address" class="form-control" type="text" name="resi_address" value="<?php echo $girls['resi_add']?>" placeholder="Resident address">                                    
                                </div>
                                <div class="col-md-6 ">
								</div>
                                <div class="clearfix"></div>
							</div>
							
							<div class="col-md-12">
								<h4>Family Background :</h4>
							</div>   
                            <div class="clearfix"></div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="father">Father:</label>
									<div class="form-inline">
										<input id="father" class="form-control" type="text" name="father" value="<?php echo $girls['father']?>" placeholder="father">
										<!--<label class="radio-inline"><input type="radio" name="father" value="Yes" checked>Yes</label>
										<label class="radio-inline"><input type="radio" name="father" value="No">No</label>-->
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="parentsFullname">Parents Fullname:</label>
									<input id="parent_full_nm" class="form-control" type="text" name="parent_full_nm" value="<?php echo $girls['parents_full_name']?>" placeholder="Parents Fullname">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="mather">Mother:</label>
									<div class="form-inline">
										<input id="mother" class="form-control" type="text" name="mother" value="<?php echo $girls['mother']?>" placeholder="mother">
										<!--<label class="radio-inline"><input type="radio" name="mother" value="Yes" checked>Yes</label>
										<label class="radio-inline"><input type="radio" name="mother" value="No">No</label>-->
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="parentsCity">Parents Resident City:</label>
									<input id="parent_rec_city" class="form-control" type="text" name="parent_rec_city" value="<?php echo $girls["parents_reci_city"]?>" placeholder="Parents Resident City">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="brothers">Brothers:</label>
                                    <input id="brothers" class="form-control" type="text" name="brothers" value="<?php echo $girls['brothers']?>" placeholder="Number of Brothers">
									<!--<select class="form-control" name="brothers" id="brothers">
										<?php for($i=0;$i<=10;$i++):?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php endfor;?>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="m_brothers">Marride Brothers:</label>
                                    <input id="m_brothers" class="form-control" type="text" name="m_brothers" value="<?php echo $girls['married_brothers']?>" placeholder="Number of Marride Brothers">
									<!--<select class="form-control" name="m_brothers" id="m_brothers">
										<?php for($i=0;$i<=10;$i++):?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php endfor;?>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
							   <div class="col-md-6 ">
                                   <label class="control-label" for="sisters">Sisters:</label>
                                   <input id="sisters" class="form-control" type="text" name="sisters" value="<?php echo $girls['sisters'];?>" placeholder="Number of Sisters">
								   <!--<select class="form-control" name="sisters" id="sisters">
									   <?php for($i=0;$i<=10;$i++):?>
									   <option value="<?php echo $i;?>"><?php echo $i;?></option>
									   <?php endfor;?>
								   </select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="marrideSisters">Marride Sisters:</label>
                                    <input id="m_sisters" class="form-control" type="text" name="m_sisters" value="<?php echo $girls['married_sisiters']?>" placeholder="Number of Marride Sisters">
									<!--<select class="form-control" name="m_sisters" id="m_sisters">
										<?php for($i=0;$i<=10;$i++):?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php endfor;?>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="parent_occu">Parents Occupation:</label>
									<input id="parent_occu" class="form-control" type="text" name="parent_occu" value="<?php echo $girls['parents_occupation']?>" placeholder="Parents Occupation">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="nativeDistrict">Native District:</label>
									<input id="native_dist" class="form-control" type="text" name="native_dist" value="<?php echo $girls['native_distict']?>" placeholder="Native District:">
									<!--<select class="form-control" name="native_dist" id="native_dist">
										<option>Not Specify</option>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="familyWealth">Family Wealth:</label>
									<input id="family_wealth" class="form-control" type="text" name="family_wealth" value="<?php echo $girls['family_wealth']?>" placeholder="Family Wealth">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="nativeTaluka">Native Taluka, if any:</label>
									<input id="nativeTaluka" class="form-control" type="text" name="native_taluka" value="<?php echo $girls['native_distict'];?>" placeholder="Native Taluka, if any">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="mamaSurname">Mama’s surname / Place:</label>
									<input id="mama_surname" class="form-control" type="text" name="mama_surname" value="<?php echo $girls['mama_surname']?>" placeholder="Mama’s surname / Place">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="surnamesRelatives">Surnames of Relatives:</label>
									<!--<textarea class="form-control" rows="5" name="relative_surname" id="relative_surname"></textarea> -->     
                                    <input id="relative_surname" class="form-control" type="text" name="relative_surname" value="<?php echo $girls['relatives_surname'];?>" placeholder="Surnames of Relatives">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">								
								<div class="col-md-6 ">
									<label class="control-label" for="intercastMarriage">Any Intercast marriage in core family:</label>
									<div class=" form-inline" >
										<input id="intercast" class="form-control" type="text" name="intercast" value="<?php echo $girls['intercast'];?>" placeholder="intercast">
										<!--<label class="radio-inline"><input type="radio" name="intercast" value="Yes">Yes</label>
										<label class="radio-inline"><input type="radio" name="intercast" value="No" checked>No</label>-->
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="relationCast">If yes (Relation/Caste):</label>
									<input id="intercast_rel" class="form-control" type="text" value="<?php echo $girls['relation_intercast']?>" name="intercast_rel" placeholder="Intercast If yes (Relation/Caste)">
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="col-md-12">
								<h4>Expectation :</h4>
							</div>
                            <div class="clearfix"></div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="preferredCities">Preferred cities:</label>
									<input id="preferred_cities" class="form-control" type="text" name="preferred_cities" value="<?php echo $girls['pref_city'];?>" placeholder="Preferred cities">
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="exp_mangalik">Mangal:</label>
                                    <input id="exp_mangalik" class="form-control" type="text" name="exp_mangalik" value="<?php echo $girls['exp_managl'];?>" placeholder="Required mangal state">
									<!--<select class="form-control" name="exp_mangalik" id="exp_mangalik" >
										<option value="Yes">Yes</option>
										<option value="No" selected="selected">No</option>
										<option value="Saumya">Saumya</option>
										<option value="Nirdosh">Nirdosh</option>
										<option value="Doesn't Matter">Doesn't Matter</option>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="exp_cast">Expected Caste:</label>
                                    <input id="exp_cast" class="form-control" type="text" name="exp_cast" value="<?php echo $girls['exp_cast']?>" placeholder="Expected Caste">
									<!--<select class="form-control" name="exp_cast" id="exp_cast">
										<option value="Deshmukh">Deshmukh</option>
										<option value="96 Kuli">96 Kuli</option>
										<option value="Maratha" selected="selected">Maratha</option>
										<option value="kunbi">kunbi</option>
										<option value="Deshmukh Maratha">Deshmukh Maratha</option>
										<option value="96 Kuli Maratha">96 Kuli Maratha</option>
										<option value="Tirale kunbi">Tirale kunbi</option>
										<option value="Doesn't Matter">Doesn't Matter</option>
									</select>-->
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="age_diff">Max Age Difference:</label>
                                    <input id="age_diff" class="form-control" type="text" name="age_diff" value="<?php echo $girls['age_difference']?>" placeholder="Expected age difference">
									<!--<select class="form-control" name="age_diff" id="age_diff">
										<?php for($i=0;$i<=14;$i++):?>
										<option value="<?php echo $i;?>"><?php echo $i;?></option>
										<?php endfor;?>
									</select>-->
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="expHeight">Expected Min Height:</label>
									<div class="form-inline">
										<input id="exp_ft" class="form-control" type="text" name="exp_ft" value="<?php echo $girls['exp_min_ft']?>" placeholder="Expected height in feet">
										<!--<select class="form-control" name="exp_ft" id="exp_ft" >
											<?php for($i=4;$i<=8;$i++):?>
											<option value="<?php echo $i;?>"><?php echo $i;?></option>
											<?php endfor;?>
										</select>-->
										<input id="exp_inch" class="form-control" type="text" name="exp_inch" value="<?php echo $girls['exp_min_inch']?>" placeholder="Expected height in inch">
										<!--<select class="form-control" name="exp_inch" id="exp_inch">
											<?php for($i=0;$i<=12;$i++):?>
											<option value="<?php echo $i;?>"><?php echo $i;?></option>
											<?php endfor;?>
										</select>-->
									</div>
								</div>
								<div class="col-md-6 ">
								   <label class="control-label" for="expOccupation">Expected Occupation &amp; Income per Annum:</label>
								   <input type="text" class="form-control" rows="5" name="exp_occu" value="<?php echo $girls['exp_occup'];?>" id="exp_occu">
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<div class="col-md-6 ">
									<label class="control-label" for="expDivorcee">Divorcee:</label>
									<div class="form-inline" style="padding:0px;">
										<input type="text" class="form-control" rows="5" name="exp_divorcee" value="<?php echo $girls['exp_divorcee'];?>" id="exp_divorcee">
										<!--<label class="radio-inline"><input type="radio" name="exp_divorcee" value="Yes">Yes</label>
										<label class="radio-inline"><input type="radio" name="exp_divorcee" value="No" checked>No</label>-->
									</div>
								</div>
								<div class="col-md-6 ">
									<label class="control-label" for="expEducation">Education:</label>
									<input type="text"class="form-control" rows="5" name="exp_education" value="<?php echo $girls['exp_education']?>" id="exp_education">
								</div> 
                                <div class="clearfix"></div>
							</div>
							<div class="form-group">
                                <div class="col-md-8 ">
                                    <br>								   
                                    <button type="submit" class="btn btn-lg btn-default">SUBMIT</button>
                                    <br>
								</div>
                                <div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</form>
						<?php endforeach;?>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>            
		</div>
	</div>
	<div class="clearfix"></div>
</div>