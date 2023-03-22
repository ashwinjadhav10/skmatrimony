<div class="featureBg">
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay=".3s">
    <div class="middle" id="">
        <h1>|ÉÊiÉºÉÉn</h1>
    </div>
</div>
<div class="content wow fadeIn paddTB50" data-wow-duration="2s" data-wow-delay=".5s"><!--
            
	<div class="text-center" style="color:red; padding-top: 2cm ;"><span class="myriad">Comming Soon...</span></div>
	<span class="myriad text-center"><div id="demo" style="color:green; padding-bottom:2cm;"></div></span>
    -->
    <div class="middle myriad feature-cont " id="" >
    
		<?php if($this->session->flashdata('success')) :?>
			<?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'?>
		<?php endif; ?>
		<?php if($this->session->flashdata('error')) :?>
			<?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'?>
		<?php endif; ?>
		
        <br><br>
        <p class="temp padd25">आपण प्रतिसाद प्रतिसाद फॉर्म सबमिट केल्यानंतर तत्सम जुळणा-या प्रस्तावांचा संपर्क तपशील आता मिळवू शकता. कृपया आपली नोंदणी क्रमांक भरा. आवश्यक मेल नंबरसह नोंदणीकृत ईमेल आयडी व तसेच आपली नोंदणी क्रमांक आपल्याला ईमेल आणि एसएमएसद्वारे या ईमेलद्वारे जुळलेल्या प्रोफाइलशी सूचित केले जाईल.</p>
        <form class="form-default wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s" id="respForm" role="form" action="<?php echo site_url("send-response");?>" method="post">
            <p class="temp padd25">मी आपल्या लग्नाच्या ब्यूरोचा सदस्य आहे आणि माझा नोंदणी क्रमांक: <span class="bottom-bor"><input type="text" name="userRegNum" id="userRegNum" placeholder=" user register no" style="width:140px;"></span><?php echo form_error("userRegNum");?> कृपया आपल्या ब्यूरोच्या खालील सदस्यांचे नाव व पत्ता सादर करा.</p>
			<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <br>
            <div class="col-md-3 col-sm-5">
                <table class="table" border=0>
                    <tr>
                        <td>1.</td>
                        <td><input type="text" name="respOne" id="respOne" placeholder=" Register no 1"><?php echo form_error("respOne");?></td>
                    </tr>
                </table>
            </div>
			<div class="clearfix"></div>
            <div class="col-md-3 col-sm-5 ">
                <table class="table" border=0>
                    <tr>
                        <td>2.</td>
                        <td><input type="text" name="respTwo" id="respTwo" placeholder=" Register no 2"></td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-3 col-sm-5">
                <table class="table" border=0>
                    <tr>
                        <td>3.</td>
                        <td><input type="text" id="respThree" name="respThree" placeholder=" Register no 3"></td>
                    </tr>
                </table>
            </div>
			<div class="clearfix"></div>
            <div class="col-md-3 col-sm-5">
                <table class="table" border=0>
                    <tr>
                        <td>4.</td>
                        <td><input type="text" name="respFour" id="respFour" placeholder=" Register no 4"></td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-3 col-sm-5">
                <table class="table" border=0>
                    <tr>
                        <td>5.</td>
                        <td><input type="text" name="respFive" id="respFive" placeholder=" Register no 5"></td>
                    </tr>
                </table>
            </div>
            
            <div class="clearfix"></div>
         
        <p class="temp padd25">आमच्या मानक पद्धतीनुसार आम्ही दररोज जास्तीत जास्त पाच प्रोफाईलचे संपर्क तपशील प्रदान करीत आहोत.</p><br>
        <p class="temp padd25">आपला ई-मेल पत्ता (बायोडाटा मध्ये उल्लेखित): <span class="bottom-bor"><input type="text" name="regEmail" id="regEmail" placeholder="Please enter your register email id. " style="width:100%;min-width:140px;max-width:270px;"></span></p>
			<?php echo form_error("regEmail");?>
        <br>
       <!-- <p class="" ><?php echo $image;?><input type="hidden" name="hideCaptcha" id="hideCaptcha" value="<?php echo $word;?>"></p>-->
        <!--<p class="temp myriad">Please enter above verification code: <span class="bottom-bor"><input type="text" name="captcha" id="captcha" placeholder="Enter above code" style="width:100%;min-width:140px;max-width:270px;"></span></p>-->
		<div class="g-recaptcha padd25" data-sitekey="6LcbLDQUAAAAAKkNg8TBu5wZme1aVLKo_ukDb82I"></div><br>
			
			<div class="col-md-6 padd25"><button type="submit" name="submit" id="submit_id" class="btn btn-default commonBtn">SUBMIT</button></div><div class="col-md-6 padd25"><a href="http://skmatrimony.com/shobha-kumbhar-matrimony/response"><button type="button" class="btn btn-default commonBtn">RESET</button></a></div><div class="clearfix"></div>
		</form>
        <br>
    </div>
</div>
</div>

