<?php 
/** 
Purpose of file:    Delete page for Payroll Group Library
Author:             Rose Anne L. Grefaldeo
System Name:        Human Resource Management Information System Version 10
Copyright Notice:   Copyright(C)2018 by the DOST Central Office - Information Technology Division
**/
?>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="<?=base_url('home')?>">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?=base_url('libraries/agency_profile')?>">Libraries</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Delete Duties and Responsibilities</span>
        </li>
    </ul>
</div>
<!-- END PAGE BAR -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
	   &nbsp;
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-trash font-dark"></i>
                    <span class="caption-subject bold uppercase"> Delete Duties and Responsibilities</span>
                </div>
                
            </div>
            <div class="portlet-body">
            <?=form_open(base_url('libraries/duties_responsibilities/delete/'.$this->uri->segment(4)), array('method' => 'post', 'id' => 'frmDutiesResponsibilities'))?>
                <div class="form-body">
                    <?php //print_r($arrPost);?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Position <span class="required"> * </span></label>
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="text" class="form-control" value="<?=isset($arrData[0]['positionCode'])?$arrData[0]['positionCode']:''?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Percent of Working Time <span class="required"> * </span></label>
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="text" class="form-control" value="<?=isset($arrData[0]['percentWork'])?$arrData[0]['percentWork']:''?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label">Duties and Responsibilities<span class="required"> * </span></label>
                                <div class="input-icon right">
                                    <i class="fa"></i>
                                    <input type="text" class="form-control" value="<?=isset($arrData[0]['duties'])?$arrData[0]['duties']:''?>" disabled>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="hidden" name="intDutiesIndex" value="<?=isset($arrData[0]['duties_index'])?$arrData[0]['duties_index']:''?>">
                                <button class="btn btn-danger" type="submit"><i class="icon-trash"></i> Yes</button>
                                <a href="<?=base_url('libraries/duties_responsibilities')?>"><button class="btn btn-primary" type="button"><i class="icon-ban"></i> Cancel</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?=form_close()?>
            </div>
        </div>
    </div>
</div>
<?php load_plugin('js',array('validation'));?>

