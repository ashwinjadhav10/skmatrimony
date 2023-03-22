
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
        <h1>xÉÉånùhÉÒ +VÉÇ</h1>
    </div>
</div>
<div class="content wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
	
	<!-- <?php if($this->session->flashdata('success')) :?>
		<?php echo '<div class="alert alert-success myriad">'.$this->session->flashdata('success').'</div>'?>
	<?php endif; ?> -->

	<!-- <?php if($this->session->flashdata('error')) :?>
		<?php echo '<div class="alert alert-danger myriad">'.$this->session->flashdata('error').'</div>'?>
	<?php endif; ?> -->
    <div class="form-wrap wow fadeIn" data-wow-duration="2s" data-wow-delay=".9s">
    <!-- <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?> -->
        <form class="form-horizontal" role="form" name="enroll_form" action="<?php echo site_url("add-enroll");?>" method="post" id="enroll_form" enctype="multipart/form-data">
            <div class="wrap-data">
                <div class="well well-sm bgDark">
                    <p>Personal Details :</p>
                </div>
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<!--<input type="hidden" name="enroll_reg_no" id="enroll_reg_no" value="MB00009">-->
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="first-name">First Name:</label>
                        <input id="first_name" class="form-control" type="text" name="first_name" placeholder="First Name" value="<?php echo set_value('first_name')?>"/>
						<?php echo form_error('first_name'); ?>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="middle-name">Middle Name:</label>
                        <input id="middle_name" class="form-control" type="text" name="middle_name"  placeholder="Middle Name" value="<?php echo set_value('middle_name')?>"/>
						<?php echo form_error('middle_name'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="last-name">Last Name:</label>
                        <input id="last_name" class="form-control" type="text" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name')?>"/>
                        <?php echo form_error('last_name'); ?>
                    </div>
                    <div class="col-md-6 " id="datepicker">
                        <label class="control-label" for="date-of-birth">Date Of Birth:</label>
                        <input id="dob" class="form-control" type="text" name="dob"  placeholder="Date of Birth" value="<?php echo set_value('dob')?>"/>
                        <?php echo form_error('dob'); ?>
                    </div>
					<!-- <div class="col-md-6 " id="datepicker">
                        <label class="control-label" for="date-of-birth">Date Of Birth:</label>
						<div class="clearfix"></div>
						<div class="col-md-2 ">
                        	<select class="form-control" name="date" id="date">
								<option value="none">DD</option>
								<?php for($i=1;$i<=31;$i++) : ?>								
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php endfor;?>
							</select>
						</div>						
						<div class="col-md-2 ">
                        	<select class="form-control" name="month" id="month">
								<option value="none">MM</option>
								<?php for($i=1;$i<=12;$i++) : ?>								
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php endfor;?>
							</select>
						</div>
						<div class="col-md-4 ">
                        	<select class="form-control" name="year" id="year">
								<option value="none">YYYY</option>
								<?php for($i=1965;$i<=1999;$i++) : ?>								
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php endfor;?>
							</select>
						</div>
                    </div> -->
					<input type="hidden" name="age" class="form-control">
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="sub-cast">Sub cast:</label>
                        <!--<input id="sub_cast" class="form-control" type="text" name="sub_cast" placeholder="Sub cast"/>-->
						<select class="form-control" name="sub_cast" id="sub_cast" value="<?php echo set_value('sub_cast')?>">
                        <option value="">Select</option>
                        <?php foreach ($sub_casts as $subcast) { ?>
                            
                            <option value="<?php echo $subcast; ?>" <?php echo set_select('sub_cast',$subcast);?>><?php echo $subcast;?></option>
                        <?php } ?>
                        <option value="Doesn't Matter">Doesn't Matter</option>
                        <!-- // <option value="none">Select</option>
                        // <option value="Kumbhar">Kumbhar</option>
                        // <option value="Lingayt Kumbhar">Lingayt Kumbhar</option>
                        // <option value="Pardeshi Kumbhar">Pardeshi Kumbhar</option>
                        // <!-- <option value="Maratha">Maratha</option>
                        // <option value="kunbi">kunbi</option>
                        // <option value="Deshmukh Maratha">Deshmukh Maratha</option>
                        // <option value="96 Kuli Maratha">96 Kuli Maratha</option>
                        // <option value="Tirale kunbi">Tirale kunbi</option> -->
                             
                        </select>
                        <?php echo form_error('sub_cast'); ?> 
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="marital-status">Marital Status:</label>
                        <select class="form-control" name="user_type" id="user_type" value="<?php echo set_value('user_type')?>">
                        <option value="">Select</option>
                        <?php foreach ($married_status as $marriedstatus) { ?>
                            
                            <option value="<?php echo $marriedstatus; ?>" <?php echo set_select('user_type',$marriedstatus);?>><?php echo $marriedstatus;?></option>
                        <?php } ?>
                        <option value="Doesn't Matter">Doesn't Matter</option>
                            <!-- <option value="none">Select</option>
                            <option value="Unmarried_Boy">Unmarried boy</option>
                            <option value="Unmarried_Girl">Unmarried girl</option>
                            <option value="Divorcee_Boy/Widower">Divorcee boy / widower</option>
                            <option value="Divorcee_Girl/Widow">Divorcee girl / widow</option> -->
                        </select>
                        <?php echo form_error('user_type'); ?> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="height">Height (ft : inch):</label>
                        <div class="form-inline" >
                            <select class="form-control" name="ft" id="ft" value="<?php echo set_value('ft')?>">
								<option value="">Select</option>
                                <?php for($i=4;$i<=8;$i++):?>
                                <option value="<?php echo $i;?>"  ><?php echo $i;?></option>
                                <?php endfor;?>
                            </select>
                            <?php echo form_error('ft'); ?> 
                            <select class="form-control" name="inch" id="inch" value="<?php echo set_value('inch')?>">
								<option value="">Select</option>
                                <?php for($i=0;$i<=12;$i++):?>
                                <option value="<?php echo $i;?>" ><?php echo $i;?></option>
                                <?php endfor;?>
                            </select>
                            <?php echo form_error('inch'); ?>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="weight">Weight (Kg):</label>
                        <select class="form-control" name="weight" id="weight" value="<?php echo set_value('weight')?>">
							<option value="">Select</option>
                            <?php for($i=25;$i<=200;$i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                        </select> 
                        <?php echo form_error('weight'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="blood-group">Blood Group:</label>
                        <select class="form-control" name="bloodgrp" id="bloodgrp" value="<?php echo set_value('bloodgrp')?>" >
                        <option value="">Select</option>
                        <?php foreach ($blood_groups as $bloodgrp) { ?>
                            
                            <option value="<?php echo $bloodgrp; ?>" <?php echo set_select('bloodgrp',$bloodgrp);?>><?php echo $bloodgrp;?></option>
                        <?php } ?>
                            <option value="Don't Know">Don't Know</option>
                        </select>
                        <?php echo form_error('bloodgrp'); ?>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="complexion">Complexion:</label>
                        <select class="form-control" name="complexion" id="complexion" value="<?php echo set_value('complexion')?>">
						<option value="">Select</option>
                        <?php foreach ($complexions as $complexion) { ?>
                            
                            <option value="<?php echo $complexion; ?>" <?php echo set_select('complexion',$complexion);?>><?php echo $complexion;?></option>
                        <?php } ?>
                            <option value="Don't Know">Don't Know</option>
                        </select>
                        <?php echo form_error('complexion'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="physical-disabilities">Physical Disabilities:</label>
                        <div class="form-inline">
                            <label class="radio-inline"><input type="radio" id="phy_disab_yes" name="phy_disab" value="Yes" <?php echo set_radio('phy_disab', 'Yes')?>>Yes</label>
                            <label class="radio-inline"><input type="radio" id="phy_disab_no" name="phy_disab" value="No" <?php echo set_radio('phy_disab', 'No')?>>No</label>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="physical-disabilities-yes">If yes, pl specify :</label>
                        <input id="phy_disab" class="form-control" type="text" name="phy_disab_yes"  placeholder="If yes, pl specify"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="diet">Diet:</label>
                        <div class="form-inline" >
                            <label class="radio-inline"><input type="radio" name="diet" value="Not specify" checked>N/A</label>
                            <label class="radio-inline"><input type="radio" name="diet" value="Vegetarian">Vegetarian</label>
                            <label class="radio-inline"><input type="radio" name="diet" value="Non-Vegetarian">Non Vegetarian</label>
                        </div> 
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="spectacles">Spectacles:</label>
                        <div class="form-inline" >
                            <label class="radio-inline"><input type="radio" name="spect" value="Yes">Yes</label>
                            <label class="radio-inline"><input type="radio" name="spect" value="No" checked>No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="lens">Lens:</label>
                        <div class="form-inline" >
                            <label class="radio-inline"><input type="radio" name="lens" value="Yes">Yes</label>
                            <label class="radio-inline"><input type="radio" name="lens" Value="No" checked>No</label>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="personality">Personality:</label>
                        <input id="personality" class="form-control" type="text" name="personality" id="personality" placeholder="About your personality.."/>
                    </div>
                </div>
            </div>
            <div class="wrap-data">
                <div class="well well-sm bgDark">
                    <p>Horoscop Details :</p>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="rashi">Rashi:</label>
                        <select class="form-control" name="rashi" id="rashi">
                            <option value="Unspecified" selected="selected">Unspecified</option>
                            <option value="Mesh">Mesh</option>
                            <option value="Vrushabh">Vrushabh</option>
                            <option value="Mithun">Mithun</option>
                            <option value="Kark">Kark</option>
                            <option value="Sinha">Sinha</option>
                            <option value="Kanya">Kanya</option>
                            <option value="Tula">Tula</option>
                            <option value="Vrischik">Vrischik</option>
                            <option value="Dhanu">Dhanu</option>
                            <option value="Makar">Makar</option>
                            <option value="Kumbh">Kumbh</option>
                            <option value="Meen">Meen</option>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="birthPlace">Birth Place:</label>
                        <input id="birth_place" class="form-control" type="text" name="birth_place" placeholder="Birth Place"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label class="control-label" for="nakshtra">Nakshtra:</label>
                        <select class="form-control" name="nakshtra" id="nakshtra">
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
                            <option value="Purva Phalgini">Purva Phalguni</option>
                            <option value="Purva Bhadra">Purva Bhadra </option>
                            <option value="Purva Shadha">Purva Shada </option>
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
                        </select>
                    </div>
					<div class="col-md-6 ">
                        <label class="control-label" for="birthTime">Birth Time:</label>
						<div class="clearfix"></div>
						<div class="col-md-2">
							<select class="form-control" name="hr" id="hr" placeholder="HR">
								<option value="none">Hr</option>						
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>					
							</select>
						</div>
						<div class="col-md-2">
							<select class="form-control" name="min" id="min" placeholder="MIN">
								<option value="none">Min</option>								<option value="00">00</option>						
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>		
								<option value="13">13</option>		
								<option value="14">14</option>		
								<option value="15">15</option>		
								<option value="16">16</option>		
								<option value="17">17</option>		
								<option value="18">18</option>		
								<option value="19">19</option>		
								<option value="20">20</option>		
								<option value="21">21</option>		
								<option value="22">22</option>		
								<option value="23">23</option>		
								<option value="24">24</option>		
								<option value="25">25</option>		
								<option value="26">26</option>		
								<option value="27">27</option>		
								<option value="28">28</option>		
								<option value="29">29</option>		
								<option value="30">30</option>		
								<option value="31">31</option>		
								<option value="32">32</option>		
								<option value="33">33</option>		
								<option value="34">34</option>		
								<option value="35">35</option>		
								<option value="36">36</option>		
								<option value="37">37</option>		
								<option value="38">38</option>		
								<option value="39">39</option>		
								<option value="40">40</option>		
								<option value="41">41</option>		
								<option value="42">42</option>		
								<option value="43">43</option>		
								<option value="44">44</option>		
								<option value="45">45</option>		
								<option value="46">46</option>		
								<option value="47">47</option>		
								<option value="48">48</option>		
								<option value="49">49</option>		
								<option value="50">50</option>		
								<option value="51">51</option>		
								<option value="52">52</option>		
								<option value="53">53</option>		
								<option value="54">54</option>		
								<option value="55">55</option>		
								<option value="56">56</option>		
								<option value="57">57</option>		
								<option value="58">58</option>		
								<option value="59">59</option>		
							</select>
						</div>
						<div class="col-md-2">
							<select class="form-control" name="am-pm" id="am-pm">
								<option value="AM">AM</option>								
								<option value="PM">PM</option>								
							</select>
						</div>
                        <!--<input id="birthtime" class="form-control ui-timepicker-input myriad tool-tip" type="text" data-toggle="popover" data-content="If your exact birthtime is not showing below options please enter exact birth time!" name="birthtime" placeholder="Birth Time"> -->                 
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="charan">Charan:</label>
                        <select class="form-control" name="charan" id="charan">
                            <option value="Unspecified" selected="selected">Unspecified</option>
                            <?php for($i=1; $i<5; $i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option><?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="mangal">Mangal:</label>
                        <select class="form-control" name="mangal" id="mangal">
                            <option value="Yes">Yes</option>
                            <option value="No" selected="selected">No</option>
                            <option value="Saumya">Saumya</option>
                            <option value="Nirdosh">Nirdosh</option>
                            <option value="Not Known">Not Known</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="nadi">Nadi:</label>
                        <select class="form-control" id="nadi" name="nadi">
                            <option value="Unspecified" selected="selected">Unspecified</option>
                            <option value="Adhya">Adhya</option>
                            <option value="Madhya">Madhya </option>
                            <option value="Antya">Antya</option>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="gotra">Gotra / Devak:</label>
                        <input id="gotra" class="form-control" type="text" name="gotra" placeholder="Gotra / Devak"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="gan">Gan:</label>
                        <select class="form-control" id="gan" name="gan">
                            <option value="Unspecified" selected="selected">Unspecified</option>
                            <option value="Dev Gan">Dev Gan</option>
                            <option value="Manushya Gan">Manushya Gan</option>
                            <option value="Rakshas Gan"> Rakshas Gan</option>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                    </div>
                </div>
            </div>
            <div class="wrap-data">
                <div class="well well-sm bgDark">
                    <p>Educational / Professional Details :</p>
                </div>
                <div class="form-group">
                    <div class="col-md-6 " >
                        <label class="control-label" for="education-area">Education Area:</label>
                        <select class="form-control" name="education_area" id="education_area">
							<option value="none">Select</option>
                            <option value="12th">12th Pass</option>
                            <option value="Graduate">Graduate</option>
                            <option value="Post Graduate">Post - Graduate</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Engineer">Engineer</option>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="education">Education:</label>
                        <input id="education" class="form-control" type="text" name="education" placeholder="Education"/>
                    </div>
                </div>
                <div class="form-group">
					<div class="col-md-6 ">
                        <label class="control-label" for="occupation">Occupation:</label>
                        <input id="occupation" class="form-control" type="text" name="occupation" placeholder="Occupation"/>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="occupation-city">Occupation Country:</label>
						<input id="occu_country" class="form-control" type="text" name="occu_country" placeholder="Occupation Country"/>
                        <!--<select class="form-control" id="occu_country" name="occu_country">
                            <option value="">Select Country</option>
                        </select> -->
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="occupation">Occupation state:</label>
                        <input id="occu_state" class="form-control" type="text" name="occu_state" placeholder="Occupation"/>
                    </div>
					<div class="col-md-6 ">
                        <label class="control-label" for="occupation">Occupation city:</label>
                        <input id="occu_city" class="form-control" type="text" name="occu_city" placeholder="Occupation"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="income">Income:</label>
                        <div class=" form-inline">
                            <input id="income" class="form-control" type="text" name="income" placeholder="Income"/>
                            <select class="form-control" name="income_type" id="income_type">
                                <option  selected="selected">PM</option>
                                <option>PA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">

                    </div>
                </div>
            </div>
            <div class="wrap-data">
                <div class="well well-sm bgDark">
                    <p>Address :</p>
                </div>       
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="emailId">Email Id:</label>
                        <input id="email" class="form-control" type="text" name="email" placeholder="Email Id"/>   
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="physic">PAN / Adhar/ Driving License / Passport No:</label>
                        <input id="identity_no" class="form-control" type="text" name="identity_no" placeholder="PAN / Adhar/ Driving License / Passport No"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="phone">Mobile for SMS alert:</label>
                        <input id="mobile" class="form-control" type="text" name="mobile" placeholder="Mobile for SMS alert"/>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="phone1">Mobile II:</label>
                        <input id="mobile_alt" class="form-control" type="text" name="mobile_alt" placeholder="Mobile II"/> 
                    </div>
                </div>
                <div class="form-group">
                     <div class="col-md-6 ">
                         <label class="control-label" for="phone3">Phone I:</label>
                         <input id="phone" class="form-control" type="text" name="phone" placeholder="Phone I"/> 
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="phone4">Phone II:</label>
                        <input id="phone_alt" class="form-control" type="text" name="phone_alt" placeholder="Phone II"/> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="address">Residence Address with city:</label>
                    <textarea class="form-control" rows="5" name="resi_address" id="resi_address"></textarea>
                    </div>
                    <div class="col-md-6 ">
                    </div>
                </div>
            </div>
            <div class="wrap-data">
                <div class="well well-sm bgDark">
                    <p>Family Background :</p>
                </div>       
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="father">Father:</label>
                        <div class="form-inline">
                            <label class="radio-inline"><input type="radio" name="father" value="Yes" checked>Yes</label>
                            <label class="radio-inline"><input type="radio" name="father" value="No">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="parentsFullname">Parents Fullname:</label>
                        <input id="parent_full_nm" class="form-control" type="text" name="parent_full_nm" placeholder="Parents Fullname"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="mather">Mother:</label>
                        <div class="form-inline">
                            <label class="radio-inline"><input type="radio" name="mother" value="Yes" checked>Yes</label>
                            <label class="radio-inline"><input type="radio" name="mother" value="No">No</label>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="parentsCity">Parents Resident City:</label>
                        <input id="parent_rec_city" class="form-control" type="text" name="parent_rec_city" placeholder="Parents Resident City"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="brothers">Brothers:</label>
                        <select class="form-control" name="brothers" id="brothers">
							<option value="none">Select</option>
                            <?php for($i=0;$i<=10;$i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="marrideBrothers">Married Brothers:</label>
                        <select class="form-control" name="m_brothers" id="m_brothers">
							<option value="none">Select</option>
                            <?php for($i=0;$i<=10;$i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                   <div class="col-md-6 ">
                       <label class="control-label" for="sisters">Sisters:</label>
                       <select class="form-control" name="sisters" id="sisters">
						   <option value="none">Select</option>
                           <?php for($i=0;$i<=10;$i++):?>
                           <option value="<?php echo $i;?>"><?php echo $i;?></option>
                           <?php endfor;?>
                       </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="marrideSisters">Married Sisters:</label>
                        <select class="form-control" name="m_sisters" id="m_sisters">
							<option value="none">Select</option>
                            <?php for($i=0;$i<=10;$i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="parentsOccupation">Parents Occupation:</label>
                        <input id="parent_occu" class="form-control" type="text" name="parent_occu" placeholder="Parents Occupation"/>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="nativeDistrict">Native District:</label>
						<input id="native_dist" class="form-control" type="text" name="native_dist" placeholder="Native District:"/>
                    </div>
                </div>
                <div class="form-group">
                    <!-- <div class="col-md-6 ">
                        <label class="control-label" for="familyWealth">Family Wealth:</label>
                        <input id="family_wealth" class="form-control" type="text" name="family_wealth" placeholder="Family Wealth"/>
                    </div> -->
                    <div class="col-md-6 ">
                        <label class="control-label" for="nativeTaluka">Native Taluka, if any:</label>
                        <input id="nativeTaluka" class="form-control" type="text" name="native_taluka" placeholder="Native Taluka, if any"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="mamaSurname">Mama’s surname / Place:</label>
                        <textarea id="mama_surname" rows="5" class="form-control"  name="mama_surname" placeholder="Mama’s surname / Place"></textarea>  
                    </div>
					 <div class="col-md-6 ">
                        <label class="control-label" for="surnamesRelatives">Surnames of Relatives:</label>
                        <textarea class="form-control" rows="5" name="relative_surname" id="relative_surname"></textarea>                     
                    </div>                    
                </div>
                <div class="form-group">
					<div class="col-md-6 ">
                        <label class="control-label" for="intercastMarriage">Any Intercast marriage in core family:</label>
                        <div class=" form-inline" >
                            <label class="radio-inline"><input type="radio" name="intercast" value="Yes">Yes</label>
                            <label class="radio-inline"><input type="radio" name="intercast" value="No" checked>No</label>
                        </div>
                    </div>                   
                    <div class="col-md-6 ">
                        <label class="control-label" for="relationCast">Intercast If yes (Relation/Caste):</label>
                        <input id="intercast_rel" class="form-control" type="text" name="intercast_rel" placeholder="Intercast If yes (Relation/Caste)"/>
                    </div>
                </div>
            </div>    
            <div class="wrap-data">
                <div class="well well-sm bgDark">
                    <p>Expectation :</p>
                </div>       
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="preferredCities">Preferred cities:</label>
                        <input id="preferred_cities" class="form-control" type="text" name="preferred_cities" placeholder="Preferred cities"/>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="expMangal">Mangal:</label>
                        <select class="form-control" name="exp_mangalik" id="exp_mangalik" >
							<option value="none">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                            <option value="Saumya">Saumya</option>
                            <option value="Nirdosh">Nirdosh</option>
                            <option value="Doesn't Matter">Doesn't Matter</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="expCaste">Expected Caste:</label>
                        <select class="form-control" name="exp_cast" id="exp_cast">
							<option value="none">Select</option>
                            <option value="Kumbhar">Kumbhar</option>
                            <option value="Lingayt Kumbhar">Lingayt Kumbhar</option>
                            <option value="Pardeshi Kumbhar">Pardeshi Kumbhar</option>
                            <!-- <option value="Deshmukh">Deshmukh</option>
                            <option value="96 Kuli">96 Kuli</option>
                            <option value="Maratha">Maratha</option>
                            <option value="kunbi">kunbi</option>
                            <option value="Deshmukh Maratha">Deshmukh Maratha</option>
                            <option value="96 Kuli Maratha">96 Kuli Maratha</option>
                            <option value="Tirale kunbi">Tirale kunbi</option> -->
                            <option value="Doesn't Matter">Doesn't Matter</option>
                        </select>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="maxAge">Max Age Difference:</label>
                        <select class="form-control" name="age_diff" id="age_diff">
							<option value="none">Select</option>
                            <?php for($i=0;$i<=14;$i++):?>
                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php endfor;?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 ">
                        <label class="control-label" for="expHeight">Expected Min Height(ft : inch):</label>
                        <div class="form-inline">
                            <select class="form-control" name="exp_ft" id="exp_ft">
								<option value="none">Select</option>
                                <?php for($i=4;$i<=8;$i++):?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php endfor;?>
                            </select>
                            <select class="form-control" name="exp_inch" id="exp_inch">
								<option value="none">Select</option>
                                <?php for($i=0;$i<=12;$i++):?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php endfor;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="expDivorcee">Divorcee:</label>
                        <div class="form-inline" style="padding:0px;">
                            <label class="radio-inline"><input type="radio" name="exp_divorcee" value="Yes">Yes</label>
                            <label class="radio-inline"><input type="radio" name="exp_divorcee" value="No" checked>No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                   <div class="col-md-6 ">
                       <label class="control-label" for="expOccupation">Expected Occupation &amp; Income per Annum:</label>
                       <textarea class="form-control" rows="5" name="exp_occu" id="exp_occu"></textarea>
                    </div>
                    <div class="col-md-6 ">
                        <label class="control-label" for="expEducation">Education:</label>
                        <textarea class="form-control" rows="5" name="exp_education" id="exp_education"></textarea>
                    </div>               
                </div>
                <div class="form-group submitDiv">
                   <div class="col-md-8 ">
                       <label class="control-label" for="profilePic">Upload your profile picture :</label>
                       <input id="userFile" class="form-control" type="file" name="userFile" />
                       <div class="clearfix"></div><br>
                       <p>You can also submit your photo after getting registration number through photo edit option.</p>
                        <div class="submitDiv text-center">
                        <button type="submit" class="btn btn-lg btn-default commonBtn">SUBMIT</button>
                        </div>
                     </div>
                </div>
            </div>
		</form>      
	</div>
</div>