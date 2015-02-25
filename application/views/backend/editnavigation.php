<div class="row">
	<div class="col-lg-12">
	    <section class="panel">
		    <header class="panel-heading">
				 Navigation Details
			</header>
			
			<div class="panel-body">
				<form class="form-horizontal row-fluid" method="post" action="<?php echo site_url('site/editnavigationsubmit');?>" enctype= "multipart/form-data">
					<div class="form-row control-group row-fluid" style="display:none;">
						<label class="control-label span3" for="normal-field">ID</label>
						<div class="controls span9">
						  <input type="text" id="normal-field" class="row-fluid" name="id" value="<?php echo $before->id;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
						  <input type="text" id="normal-field" class="form-control" name="name" value="<?php echo set_value('name',$before->name);?>">
						</div>
					</div>		
					<div class="form-group">
						<label class="col-sm-2 control-label">Parent</label>
						<div class="col-sm-4">
						   <?php 
								echo form_dropdown('parent',$navigation,set_value('parent',$before->parent),'id="select1" class="form-control populate placeholder select2-offscreen"');
								 
							?>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">&nbsp;</label>
						<div class="col-sm-4">	
							<button type="submit" class="btn btn-info">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</section>
    </div>
</div>

<!--
<script type="text/javascript">
     var nodata=9;
    function changeimageortag() {
        console.log($('#typeofimage').val());
        if($('#typeofimage').val()==0)
        {
            $("#ontagselect").show();
            $("#onimageselect").hide();
        }
        else if( $('#typeofimage').val()==1)
        {
            $("#onimageselect").show();
            $("#ontagselect").hide();
        }
       
    }
    changeimageortag();
</script>-->
