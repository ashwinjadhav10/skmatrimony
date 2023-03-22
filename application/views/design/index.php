<div class="wow fadeIn marT155" data-wow-duration="2s" data-wow-delay="0.3s" id="mainBg" style="position:relative;" >
    <div class="pageLogo text-center"><img class="img-responsive pagelogo" src="<?php echo base_url('assets/images/title.png');?>"></div>
	
	
	<!--<div class="col-md-5 text-center" style="position:relative">
        <img class=" couple wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s" src="<?php //echo base_url('assets/images/couple.png');?>">
    </div>-->
    
    <div class="col-md-12  rightWrap" style="position:initial">
	
		
        <!--<img class="red-img wow fadeInDown" data-wow-duration="2s" data-wow-delay=".7s" src="<?php echo base_url('assets/images/red-img-1.png');?>" style="position:relative;">-->
        <div class="text-wrap col-md-6">
            <img class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".9s" src="<?php echo base_url('assets/images/text-bg.png');?>">
            <!--<div class="text-one">¡òCiÉ ¨É®úÉ`öÉ ºÉ¨ÉÉVÉÉºÉÉ`öÒ ¨É½þÉ®úÉ¹]ÅõÉiÉÒ±É <br> +OÉMÉhªÉ  ´ÉvÉÖ´É®ú ºÉÚSÉEò Eåòpù</div>-->
        </div>
        <div class="text-wrap text-right col-md-6">
            <img class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.1s" src="<?php echo base_url('assets/images/text-two.png');?>">
            <!--<div class="text-two"><span>ªÉälÉä xÉÉ´É xÉÉånù´É±ªÉÉxÉÆiÉ®ú iÉ®ú EòÉähÉiªÉÉ½þÒ ´ÉvÉÚ´É®ú ºÉÖSÉEò </span> <br> <span> EäòpùÉiÉ xÉÉÆ´É xÉÉånù´ÉhªÉÉSÉÒ +É´É¶ªÉEòiÉÉ xÉÉ½þÒ.</span></div>-->
        </div>
       <!-- <img class="red-img wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.3s" src="<?php echo base_url('assets/images/red-img-2.png');?>"><br>-->
        
        <div class="clearfix"></div>
      <div class="dark form-data  hidden-xs max70 wow fadeInUp" data-wow-duration="2s" data-wow-delay="1.5s">
            <form class="form-inline" style="position:relative" method="get" action="<?php echo site_url('search-filters') ?>">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <div class="form-group search">
                    <img src="<?php echo base_url('assets/images/shod.png');?>">
                </div>
                <!-- Select Gender-->
                <div class="form-group">
                    <label for="sel1">Ë±ÉMÉ :</label>
                    <select class="form-control" name="gender" class="gender" required >
                         <option value="">Select</option>
                         <option value="Unmarried_Boy">Male</option>
                         <option value="Unmarried_Girl">Female</option>
                         <option value="Divorcee_Boy/Widower">Divorcee Male</option>
                         <option value="Divorcee_Girl/Widow">Divorcee Female</option>
                    </select>
                </div>
                
                <!-- age range from-->
                <div class="form-group">
                    <label for="sel2">´ÉªÉ :</label>
                    <select class="form-control" name="age-from" class="sel-from">
                        <option value="">Select</option>
                        <?php for($i=18;$i<=50;$i++): ?>
                        <option><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <label for="select" class="to">{ÉÉºÉÚxÉ </label>
                </div>
                
                <!-- age range To -->
                <div class="form-group">
                    <label for="sel3"> </label>
                    <select class="form-control" name="age-to" class="sel-to">
                        <option value="">Select</option>
                        <?php for($i=18;$i<=50;$i++): ?>
                        <option><?php echo $i; ?></option>
                        <?php endfor; ?>
                    </select>
                    <label for="select" class="to">{ÉªÉçiÉ </label>
                </div>
                <div class="form-group">
                    <label for="sel4">Ê`öEòÉhÉ :</label> 
                    <select class="form-control" name="city" class="city">
                        <option value="">Select</option>
                        <?php for($i=0;$i<count($city_name);$i++): ?>
                        <option value="<?php echo $city_name[$i]['occu_city']; ?>"><?php echo ucfirst($city_name[$i]['occu_city']); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default find">शोधा</button>
                </div>
            </form>
        </div>
        
        <div class="col-md-4 panels  vissible-xs">
            <div class="dark form-data">
                <?php //$this->load->view('design/search-form'); ?>
            </div>
            <!-- <div class="dark form-data">
                <?php $this->load->view('design/search-form'); ?>
            </div> -->
        </div>
    </div>
    <div class="clearfix"></div>
	<!--<div>
        <img class="img-responsive" style="position:relative;" src="<?php echo base_url('assets/images/bottom-design.png');?>">
    </div>-->
</div>