  <div class="container">
      <div class="row">
         <div class="col-md-3"></div>
         
          <div class="col-md-6">
             <div class="head-reg text-center">
              <h2><?php echo strtoupper ($row->regimentname);?> </h2><h2>DEED DETAILS</h2>
              </div>
            
          </div>
          <div class="col-md-3"></div>
      </div>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-md-12">
                       <div class="links ">
<!--                  <a href="index.html">Home</a>|<a href="regiments.html">Regiments</a>|<a href="detail.html">Martyr Detail</a>-->

               
                  <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/bricks');?>">Wall Of Fame</a>|<a href="">Deed Details</a>

              </div>
          </div>
      </div>
  </div>
  <div class="regiment-backs">
   <div class="container">
      
       <div class="row">
           <div class="col-md-3">
              <div class="detail-img">
              <img src="<?php echo base_url("uploads");?><?php echo "/".$walloffame->image;?>">
<!--                   <img src="image/regiment.jpg">-->
               </div>
           </div>
           <div class="col-md-8">
               <div class="detail-text">
                   <h4><?php echo $walloffame->name;?></h4>
<h6><?php echo $walloffame->date;?></h6>
<h6><?php echo $walloffame->place;?></h6>

                   
               </div>
               <div class="detail-hist">
                   <h2>Deed :</h2>
                   <p><?php echo $walloffame->deed;?></p>
               </div>

           </div>
		
			
           </div>
           
       </div>
       
   </div>
    </div>
