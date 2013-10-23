<?php
include ($_SERVER['DOCUMENT_ROOT']."/webparts/func.php");
include ($root."webparts/constantHeaderInfo.php");
?>
<!-- page specific header information -->
<title>Mindshare Clients & Testimonials | Mindshare</title>
<meta name="description" content="Mindshare  delivers results to its customers.  View client testimonials and case studies to see what Mindshare's technology can do for you." />
<link rel="canonical" href="http://www.mshare.net/clients"/>

<link type="text/css" rel="stylesheet" href="<?php echo $link; ?>clients/clients.css" />
<!-- link to video stylesheet -->
<link type="text/css" rel="stylesheet" href="<?php echo $link; ?>css/video-js.css" />
<script src="<?php echo $link; ?>clients/clients.min.js"></script>
<!-- link to video javascript file -->
<?php include ($root."webparts/header.php"); ?>
<!-- begin corpus -->
      <div id="testimonials" class="full cut">
      	<h2>Our Clients</h2>
      	<h1>Testimonials</h1>
      	<h3>hear what our clients are saying</h3>
      	<div id="videos" class="half">
				  <div class="oneHalf left">
          <div class="whiteBoxContainer" style="width: 412px;">
            <div class="wbTop">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/topLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/topRight.png" alt class="r" />
            </div>
              <div class="whiteBox">
               <div class="youtubeVideo">
								<img id="img" src="<?php echo $link; ?>clients/images/Hertz-vidShot.png" alt="http://www.youtube.com/embed/1k2yGan9nbI?rel=0&autoplay=1" />
							</div>
              <div class="r"></div>
             </div>
             <div class="wbBottom">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomRight.png" alt class="r" />
            </div>
          	</div>
          
	      		<br />
	      		<img src="<?php echo $img->link; ?>clients/images/hertzLogo.png" />
	      	</div>
        
        
	      	<div class="oneHalf right">
          	<div class="whiteBoxContainer" style="width: 412px;">
            <div class="wbTop">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/topLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/topRight.png" alt class="r" />
              </div>
              <div class="whiteBox">
              	<div class="youtubeVideo">
									<img id="img" src="<?php echo $link; ?>clients/images/Arbys-vidShot.png" alt="http://www.youtube-nocookie.com/embed/AY9gdvjufEA?rel=0&autoplay=1" />
								</div>
              <div class="r"></div>
             </div>
             <div class="wbBottom">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomRight.png" alt class="r" />
            </div>
          	</div>
	      		<br />
	      		<img src="<?php echo $img->link; ?>clients/images/arbysLogo.png" />
	      	</div>
          
	      	
	      	
	      <div class="clear"></div>	
          
	<div class="oneHalf left">
          <div class="whiteBoxContainer" style="width: 412px;">
            <div class="wbTop">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/topLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/topRight.png" alt class="r" />
              </div>
              <div class="whiteBox">
              	<div class="youtubeVideo">
									<img id="img" src="<?php echo $link; ?>clients/images/tony_romas_vidShot.jpg" alt="http://www.youtube-nocookie.com/embed/rpqOZGkW8qI?rel=0&autoplay=1" />
								</div>
              <div class="r"></div>
             </div>
             <div class="wbBottom">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomRight.png" alt class="r" />
            </div>
          	</div>
          
	      		<br />
	      		<img src="<?php echo $img->link; ?>clients/images/tonyromasLogo.png" />
	      	</div>
        
        
	      	<div class="oneHalf right">
          	<div class="whiteBoxContainer" style="width: 412px;">
            <div class="wbTop">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/topLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/topRight.png" alt class="r" />
              </div>
              <div class="whiteBox">
              	<div class="youtubeVideo">
									<img id="img" src="<?php echo $link; ?>clients/images/taco_bueno_vidShot.jpg" alt="http://www.youtube-nocookie.com/embed/uWvcGnqSaHc?rel=0&autoplay=1" />
								</div>
              <div class="r"></div>
             </div>
             <div class="wbBottom">
              <img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomLeft.png" alt class="l" />
							<img src="<?php echo $img->link; ?>images/formats/whiteBox/bottomRight.png" alt class="r" />
            </div>
          	</div>
	      		<br />
	      		<img src="<?php echo $img->link; ?>clients/images/tacobuenoLogo.png" />
	      	</div>
      	
	      	
	      <div class="clear"></div>	
        
        
      	<!--<div id="moreVids" class="moreSlider">
      		<a href="#moreVids" class="more">+ EXPLORE ADDITIONAL TESTIMONIALS</a>
      	</div>-->
      	</div><!-- close videos -->
      </div><!-- close testimonials -->
      
      <div id="caseStudies" class="full cut">
      	<h1>Case Studies</h1>
      	<span class="divider"></span>
      	
      	<div id="studies" class="subCut">
		    	<div class="oneThird seperate">
		    		<?php  include $root."webparts/dynamicPosts/feature.php"; feature("case/restaurant_chain_saves_operational_costs_using_real_time_feedback.php");?>
		    	</div>
		    	<div class="oneThird seperate">
		    		<?php feature("case/using_customer_feedback_from_automated_surveys_to_improve_customer_retention_&_value_perception.php");?>
		    	</div>
		    	<div class="oneThird left">
		    		<?php feature("case/using_customer_feedback_tools_to_reduce_customer_churn.php");?>
		    	</div>
		    	
		    	<div class="clear"></div>	
		    	<div id="moreCaseStudies" class="moreSlider">
		    		<a href="<?php echo $link; ?>case-studies" class="more">+ EXPLORE ADDITIONAL Case Studies</a>
		    	</div>
      	</div><!-- close studyies -->
      </div><!-- close case Studies -->
      
      <!-- Blocked out untill further notices
      	<div id="clients" class="full cut">
      	<h1>Case Studies</h1>
      	<span class="divider"></span>
      	<div id="logos" class="subCut">
      		<div class="oneFourth seperate"><img src="<?php echo $img->link; ?>clients/images/clientLogos/tonys.PNG" /></div>
      		<div class="oneFourth seperate"><img src="<?php echo $img->link; ?>clients/images/clientLogos/tonys.PNG" /></div>
      		<div class="oneFourth seperate"><img src="<?php echo $img->link; ?>clients/images/clientLogos/tonys.PNG" /></div>
      		<div class="oneFourth left"><img src="<?php echo $img->link; ?>clients/images/clientLogos/tonys.PNG" /></div>
      		
      		<div class="clear"></div>	
      		<div id="moreLogos" class="moreSlider">
		    		<a href="#moreLogos" class="more">+ See a Comprehensive List</a>
		    	</div>
      	</div><!-- close logos 
      </div><!-- close clients -->
<!-- end corpus -->
<?php include ($root."webparts/footer.php"); ?>