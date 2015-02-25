<!--
<div class="text-center">
    <h2>Light a lamp or send a message for Martyr </h2>
</div>
-->
<?php
//print_r($category);
?>
<div class="head-reg text-center">
    <h2>LIGHT A LAMP OR SEND A MESSAGE FOR THE MARTYR'S FAMILY</h2>
</div>
    <div class="container">
      <div class="row">
          <div class="col-md-12">

                  <div class="links ">
<a href="http://sarejahanseacha.in/">Home</a>|<a href="#">Martyr</a>

               
<!--                  <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?id=').$row->regiment;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Martyr Detail</a>-->

              </div>
          </div>
      </div>
  </div>
<?php $cats1=$category->children[0]->children; $cats2=$category->children[1]->children;$cats3=$category->children[2]->children; //print_r($cats2); ?>
<div class="home-img">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="row">
                    <div class="col-md-4 ">
                        <div class="ministri text-center">
                            <div class="section1 menu">
                                <i class="show">ministry of Defence</i>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="ministri text-center">
                            <div class="section2 menu">
                                <i class="show img-po">ministry of home central</i>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ministri text-center">
                            <div class="section3 menu">
                                <i class="show img-po">ministry of home state</i>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-1" ></div>
<div class="col-md-10">


            <span class="tobedone done">
                                   
                      <ul class="cssMenu cssMenu1">
                      
	<?php foreach($cats1 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php
//    print_r($subcategory);
    foreach($subcategory as $sub) {?>
			<li ><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub->name;?></a>
		
		            <ul class="megamenu">
            <?php 
            $subcategory1=$sub->children;
                                  // print_r($subcategory1);
        ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub1->name;?></a></li>
			 <?php } ?>
			</ul>
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>

    
                                </span>

 <span class="tobedone done">
                                   
                      <ul class="cssMenu cssMenu2">
                      
	<?php foreach($cats2 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li ><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub->name;?></a>
		
		            <ul class="megamenu">
            <?php 
            $subcategory1=$sub->children;
        ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub1->name;?></a></li>
			 <?php } ?>
			</ul>
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>

    
                 </span>


            <span class="tobedone done">
                                   
                      <ul class="cssMenu cssMenu3">
                      
	<?php foreach($cats3 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li ><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub->name;?></a>
		
		            <ul class="megamenu">
            <?php 
            $subcategory1=$sub->children;
            ?>  
            <?php foreach($subcategory1 as $sub1) { ?>
			    <li><a href="<?php echo site_url('website/regiments?category=').$sub->id;?>"><?php echo $sub1->name;?></a></li>
			<?php } ?>
			</ul>
			
			</li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>

    
             </span>


        </div>
    </div>
</div>



<div class="">
    <audio class="mybackground">
        <source src="<?php echo base_url('frontassets/audio/sare.mp3'); ?>" type="audio/mpeg">
            Your browser does not support the audio element.
    </audio>
</div>
<!--
<div class="disc">
    <p style="color:black;"> disclaimer :</p>
</div>
-->
<script>
    $(document).ready(function () {

        $(".cssMenu").hide();
            
        $(".section1").click(function () {
            $(".menu").removeClass("active");
            $(this).addClass("active");
            $(".cssMenu").hide();
            $(".cssMenu1").show(300);
            
        });
        $(".section2").click(function () {
             $(".menu").removeClass("active");
            $(this).addClass("active");
            $(".cssMenu").hide();
            $(".cssMenu2").show(300);
            
        });
        $(".section3").click(function () {
             $(".menu").removeClass("active");
            $(this).addClass("active");
            $(".cssMenu").hide();
            $(".cssMenu3").show(300);
            
        });
        $(".mybackground").get(0).loop = true;
        //$(".mybackground").get(0).autoplay=true;

    });
</script>