<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <div class="pull-right">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                walloffame Details
            </header>
            <div class="panel-body">
                <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/createwalloffamesubmit");?>' enctype='multipart/form-data'>
                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Name</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ');?>'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">From Email</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="fromemail" value='<?php echo set_value(' fromemail ');?>'>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">To Email</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="toemail" value='<?php echo set_value(' toemail ');?>'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Date</label>
                            <div class="col-sm-4">
                                <input type="date" id="normal-field" class="form-control" name="date" value='<?php echo set_value(' date ');?>'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Place</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="place" value='<?php echo set_value(' place ');?>'>
                            </div>
                        </div>
                        
                        <div class=" form-group">
                          <label class="col-sm-2 control-label" for="normal-field">Image</label>
                          <div class="col-sm-4">
                            <input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image');?>">
                          </div>
                        </div>
				
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Short Deed</label>
                            <div class="col-sm-8">
                                <textarea name="shortdeed" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'shortdeed');?></textarea>
                            </div>
                        </div>
                        
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Deed</label>
                            <div class="col-sm-8">
                                <textarea name="deed" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'deed');?></textarea>
                            </div>
                        </div>
                        
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Status</label>
                            <div class="col-sm-4">
                                <?php echo form_dropdown( "status",$status,set_value( 'status'), "id='select2' class='chzn-select form-control'");?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <a href="<?php echo site_url("site/viewwalloffame"); ?>" class="btn btn-secondary">Cancel</a>
                            </div>
                        </div>
                </form>
                </div>
        </section>
        </div>
    </div>
