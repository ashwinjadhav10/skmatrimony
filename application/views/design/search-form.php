
   <form class="" style="position:relative" method="get" action="<?php echo site_url('search-filters') ?>">
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <div class="form-group search col-md-12" style="margin-bottom:20px;">
            <label for="title" id="search"> ¶ÉÉävÉ</label>
        </div>
        <div class="form-group">
            <div class="col-md-5 col-sm-4 col-xs-4 text-right">
                <label for="select">Ë±ÉMÉ :</label>
            </div>
            <div class="col-md-6 col-sm-5 col-xs-6 text-left">
                <select class="form-control" name="gender" class="gender" required>
                    <option value="">Select</option>
                    <option value="Unmarried_Boy">Male</option>
                    <option value="Unmarried_Girl">Female</option>
                    <option value="Divorcee_Boy/Widower">Divorcee Male</option>
                    <option value="Divorcee_Girl/Widow">Divorcee Female</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <div class="col-md-5 col-sm-4 col-xs-4 text-right">
                <label for="select">´ÉªÉ :</label>
            </div>
            <div class="col-md-6 col-sm-5 col-xs-6 text-left">
                <select class="form-control" name="age-from" class="sel-from">
                    <option value="">Select</option>
                    <?php for($i=18;$i<=50;$i++): ?>
                    <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
            <div class="col-md-6 col-sm-5 col-xs-6"><label for="select" class="to">{ÉÉºÉÚxÉ </label></div>
            <div class="clearfix"></div>                        
        </div>
        <div class="form-group">
            <div class="col-md-5 col-sm-4 col-xs-4 text-right">
            </div>
            <div class="col-md-6 col-sm-5 col-xs-6">
                <select class="form-control" name="age-to" class="sel-to">
                    <option value="">Select</option>
                    <?php for($i=18;$i<=50;$i++): ?>
                    <option value="<?php echo $i;?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-5 col-sm-4 col-xs-4"></div>
            <div class="col-md-7 col-sm-5 col-xs-6">
                <label for="select" class="to">{ÉªÉçiÉ </label>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="form-group" style="margin-bottom:15px;">
            <div class="col-md-5 col-sm-4 col-xs-4 text-right">
                <label for="select" class="place">Ê`öEòÉhÉ :</label>
            </div>                        
            <div class="col-md-6 col-sm-5 col-xs-6">
                <select class="form-control" name="city" class="city">
                    <option value="">Select</option>
                    <?php for($i=0;$i<count($city_name);$i++): ?>
                    <option value="<?php echo $city_name[$i]['occu_city']; ?>"><?php echo ucfirst($city_name[$i]['occu_city']); ?></option>
                    <?php endfor; ?>                 
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <button type="submit" class="btn btn-default find">शोधा</button>
</form>
