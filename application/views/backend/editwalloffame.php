<section class="panel">
    <header class="panel-heading">
        walloffame Details
    </header>
    <div class="panel-body">
        <form class='form-horizontal tasi-form' method='post' action='<?php echo site_url("site/editwalloffamesubmit");?>' enctype='multipart/form-data'>
            <input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">Name</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="name" value='<?php echo set_value(' name ',$before->name);?>'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">From Email</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="fromemail" value='<?php echo set_value(' fromemail ',$before->fromemail);?>'>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">To Email</label>
                <div class="col-sm-4">
                    <input type="text" id="normal-field" class="form-control" name="toemail" value='<?php echo set_value(' toemail ',$before->toemail);?>'>
                </div>
            </div>
            
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Date</label>
                            <div class="col-sm-4">
                                <input type="date" id="normal-field" class="form-control" name="date" value='<?php echo set_value(' date ',$before->date);?>'>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Place</label>
                            <div class="col-sm-4">
                                <input type="text" id="normal-field" class="form-control" name="place" value='<?php echo set_value(' place ',$before->place);?>'>
                            </div>
                        </div>
                        
				<div class=" form-group">
				  <label class="col-sm-2 control-label" for="normal-field">Image</label>
				  <div class="col-sm-4">
					<input type="file" id="normal-field" class="form-control" name="image" value="<?php echo set_value('image',$before->image);?>">
					<?php if($before->image == "")
						 { }
						 else
						 { ?>
							<img src="<?php echo base_url('uploads')."/".$before->image; ?>" width="140px" height="140px">
						<?php }
					?>
				  </div>
				</div>
				
                        <div class=" form-group">
                            <label class="col-sm-2 control-label" for="normal-field">Short Deed</label>
                            <div class="col-sm-8">
                                <textarea name="shortdeed" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'shortdeed',$before->shortdeed);?></textarea>
                            </div>
                        </div>
                        
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Deed</label>
                <div class="col-sm-8">
                    <textarea name="deed" id="" cols="20" rows="10" class="form-control tinymce"><?php echo set_value( 'deed',$before->deed);?></textarea>
                </div>
            </div>
            
            <div class=" form-group">
                <label class="col-sm-2 control-label" for="normal-field">Status</label>
                <div class="col-sm-4">
                    <?php echo form_dropdown( "status",$status,set_value( 'status',$before->status),"class='chzn-select form-control'");?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="normal-field">&nbsp;</label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href='<?php echo site_url("site/viewwalloffame"); ?>' class='btn btn-secondary'>Cancel</a>
                </div>
            </div>
        </form>
    </div>
</section>
