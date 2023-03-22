<div class="featureBg">
<div class="grey-bar wow fadeInUp marT155" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="middle" id="">
        <h1>¶ÉÉävÉõ</h1>
    </div>
</div>
<div class="content wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
    <div class="middle" id=""><br><br>
        <div class="col-md-8 feature-cont wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s"><br>
            <div class="search-data form-data">
                
                <form class="form-horizontal" method="get" action="<?php echo site_url('search-filters') ?>"><br>                    
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">                    
                    <div class="form-group">
                        <!-- Select Gender -->
                        <div class="col-md-4 col-xs-4 text-right">
                            <label for="select">Ë±ÉMÉ :</label>
                        </div>                        
                        <div class="col-md-2 col-xs-7 text-left">
                            <select class="form-control" name="gender" class="gender" required>
                                <option value="">Select</option>
                                <option value="Unmarried_Boy">Male</option>
                                <option value="Unmarried_Girl">Female</option>
                                <option value="Divorcee_Boy/Widower">Divorcee Male</option>
                                <option value="Divorcee_Girl/Widow">Divorcee Female</option>
                            </select>
                        </div><div class="clearfix"></div>
                    </div>                    
                    <!-- age range from -->
                    <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                            <label for="select">´ÉªÉ :</label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-7 text-left">
                            <select class="form-control" name="age-from" class="sel-from">
                                <option value="">Select</option>
                                <?php for($i=18;$i<=50;$i++): ?>
                                <option><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>                        
                        <!-- age range To -->
						<div class="col-xs-6 visible-xs"></div>
                        <div class="col-md-1 col-sm-1 col-xs-6">
                            <label for="select" class="to">{ÉÉºÉÚxÉ </label>
						</div><div class="clearfix visible-xs"></div>
                        <div class="col-xs-4 visible-xs"></div>
                        <div class="col-md-2 col-sm-2 col-xs-7">
                            <select class="form-control" name="age-to" class="sel-to">
								<option value="">Select</option>
								<?php for($i=18;$i<=50;$i++): ?>
								<option><?php echo $i; ?></option>
								<?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-xs-4 visible-xs"></div>
                        <div class="col-md-1 col-sm-1 col-xs-7">
                            <label for="select" class="to">{ÉªÉçiÉ </label>
                        </div>
                        <div class="clearfix"></div>   
                    </div>                    
                    <div class="form-group">
                        <!-- Select height from -->
                        <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                            <label for="select">>ÆðSÉÒ :</label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-7 text-left">
                            <select class="form-control" name="height-from" class="height-from">
                                <option value="">Select</option>
                                <?php for($i=4;$i<=8;$i++): ?>
                                <option><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div><div class="clearfix visible-xs"></div>
						<div class="col-xs-4 visible-xs"></div>
                        <div class="col-md-1 col-sm-1 col-xs-8"><label for="select" class="to">{ÉÉºÉÚxÉ </label></div>
                        
                        <!-- Select height from -->
                        <div class="col-xs-4 visible-xs"></div>
                        <div class="col-md-2 col-sm-2 col-xs-7">
                            <select class="form-control" name="height-to" class="height-to">
                                <option value="">Select</option>
                                <?php for($i=4;$i<=8;$i++): ?>
                                <option><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="col-xs-4 visible-xs"></div>
						
                        <div class="col-md-1 col-sm-1 col-xs-6">
                            <label for="select" class="to">{ÉªÉçiÉ </label>
                        </div>
                        <div class="clearfix"></div>                        
                    </div>  
                    
                    <!-- Select education -->
                    <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                            <label for="select">Ê¶ÉIÉhÉ  :</label>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-7">
                            <select class="form-control" name="education" class="education">
                            <option value="">Select</option>
                           <option value="Graduate">12th to Graduate</option>
                            <option value="Post Graduate">Post - Graduate</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Engineer">Engineer</option>
                        </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="form-group" style="margin-bottom:15px;">
                        <div class="col-md-4 col-xs-4 text-right">
                            <label for="select" class="place">xÉÉäEò®úÒSÉä Ê`öEòÉhÉ :</label>
                        </div>                        
                        <div class="col-md-2 col-xs-7 ">
                            <br class="visible-xs">
                            <select class="form-control" name="city" class="city">
                                <option value="">Select</option>
                                 <?php for($i=0;$i<count($city_name);$i++): ?>
                                 <option value="<?php echo $city_name[$i]['occu_city']; ?>"><?php echo ucfirst($city_name[$i]['occu_city']); ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-9" id="mSearch">
                        <button type="submit" id="send" class="btn btn-default find ">¶ÉÉävÉÉ</button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
            <br>
        </div> 
        <div class="col-md-4 col-sm-4"></div>
        <div class="clearfix"></div>
        <br>
        
        <div class="col-md-8 feature-cont wow fadeIn" data-wow-duration="2s" data-wow-delay="0.7s" style="position:relative;">
            <div class="search-data bottom">
                <form class="form-default" method="get" action="<?php echo site_url('search-enrollno'); ?>">
                    <div class="col-md-5 col-sm-5">
                        <label for="title" id="idSearch">
                            <span class="myriad">Single Registration ID Search</span>:
                        </label>           
                        <br class="visible-xs">       
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-10">
                        <span class="myriad">
                            <input type="text" name="enroll_no" class="form-control" id="text">
                        </span>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <button type="submit" class="btn btn-default  text-uppercase commonBtnsmall">
                           Search
                        </button>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <br><br> <br class="hidden-xs">
        <br class="hidden-xs"> <br class="hidden-xs">
    </div>
</div>
</div>