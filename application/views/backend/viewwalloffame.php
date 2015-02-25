<div class="row" style="padding:1% 0">
    <div class="col-md-12">
        <a class="btn btn-primary pull-right" href="<?php echo site_url("site/createwalloffame"); ?>"><i class="icon-plus"></i>Create </a> &nbsp;
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                walloffame Details
            </header>
            <div class="drawchintantable">
                <?php $this->chintantable->createsearch("walloffame List");?>
                <table class="table table-striped table-hover" id="" cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th data-field="id">ID</th>
                            <th data-field="name">Name</th>
                            <th data-field="deed">Deed</th>
                            <th data-field="status">Status</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <?php $this->chintantable->createpagination();?>
            </div>
        </section>
        <script>
            function drawtable(resultrow) {
                
            if(resultrow.status==1)
            {
                var status="<a href='<?php echo site_url('site/changewalloffamestatus?id=');?>"+resultrow.id+"' class='label label-success label-mini'>Approved</a>";
            }
            else
            {
                var status="<a href='<?php echo site_url('site/changewalloffamestatus?id=');?>"+resultrow.id+"' class='label label-danger label-mini'>Un Approved</a>";
            }
                return "<tr><td>" + resultrow.id + "</td><td>" + resultrow.name + "</td><td>" + resultrow.deed + "</td><td>" + status + "</td><td><a class='btn btn-primary btn-xs' href='<?php echo site_url('site/editwalloffame?id=');?>" + resultrow.id + "'><i class='icon-pencil'></i></a><a class='btn btn-danger btn-xs' href='<?php echo site_url('site/deletewalloffame?id='); ?>" + resultrow.id + "'><i class='icon-trash '></i></a></td></tr>";
            }
            generatejquery("<?php echo $base_url;?>");
        </script>
    </div>
</div>
