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
                            <div class="table responsive">
                                <table class="table table-striped table-bordered table-list">
                                    <thead>
                                        <tr>                                       
                                            <th class="hidden-xs">Categary ID</th>
                                            <th>Title</th>
                                             <th><em class="fa fa-cog"></em></th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <tr>                                        
                                            <td class="hidden-xs">1</td>
                                            <td>John Doe</td>
                                            <td>
                                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                            </td>
                                        </tr>
                                        <tr>                                        
                                            <td class="hidden-xs">1</td>
                                            <td>John Doe</td>
                                            <td>
                                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                            </td>
                                        </tr>
                                        <tr>                                        
                                            <td class="hidden-xs">1</td>
                                            <td>John Doe</td>
                                            <td>
                                                <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                                <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <hr>
						<!--<div class="panel-footer">
                            <div class="row">
                                <div class="col col-xs-4">
                                     <button type="button" class="btn btn-sm btn-primary btn-create">Add New</button>
                                </div>
                                <div class="col col-xs-8">
                                    <?php  echo $this->pagination->create_links(); ?>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>            
        </div>
    </div>
    <div class="clearfix"></div>
</div>