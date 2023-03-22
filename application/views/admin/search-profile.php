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
							<?php if($this->session->flashdata('success')) :?>
								<?php echo '<div class="alert alert-success">'.$this->session->flashdata('success').'</div>'?>
							<?php endif; ?>

							<?php if($this->session->flashdata('error')) :?>
								<?php echo '<div class="alert alert-danger">'.$this->session->flashdata('error').'</div>'?>
							<?php endif; ?>
                            <table class="table table-striped table-bordered table-list">
                                <thead>
                                    <tr>                                       
                                        <th class="hidden-xs">ID</th>
                                        <th>Title</th>
                                        <th>Dob</th>
                                        <th>Photo</th>
                                         <th><em class="fa fa-cog"></em></th>
                                    </tr> 
                                </thead>
								<?php foreach($register_no as $search):?>
                                <tbody>
                                    <tr>                                        
                                        <td class="hidden-xs"><?php echo $search->enroll_reg_no;?></td>
                                        <td><?php echo $search->last_name;?></td>
                                        <td><?php echo $search->date_of_birth;?></td>
                                        <td><img src="<?php echo base_url('assets/profile_photos/'.$search->profile_pic);?>" width="50px" height="50px"></td>
                                        <td>
                                            <a class="btn btn-default" href="<?php echo site_url('brides-edit/'.$search->enroll_id);?>"><em class="fa fa-pencil"></em></a>
                                            <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                        </td>
                                    </tr>                                    
                                </tbody>
								<?php endforeach;?>
                            </table>
                        </div>
                        <hr>
                       
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>            
        </div>
    </div>
    <div class="clearfix"></div>
</div>