      	<?php 
      	$url = explode("/", $_SERVER['PHP_SELF']);
				$name = explode("/", $url[count($url)-2]);
				$lastname = explode("-", $name[0]);				
				$who = $lastname[1];

      	function get($fullname){
      		global $link;
					global $who;
					global $root;
					$ex = explode("-", $fullname);
					$name = $ex[1];
      		$path = $link."about-us/".$fullname."/";
					$img = 	$path.$name.".png";
					$gimg = 	$path."Grey".$name.".png";
					
					$filename = $root."about-us/".$fullname.'/bio.php';
					$fh = fopen($filename, 'r');
					$string = fread($fh, filesize($filename)) or die("Could not read the file!");
					fclose($fh);
					
					$bio = new DOMDocument;
					$bio->loadHTML($string);
					$person = $bio->getElementById('name')->textContent;
					$title = $bio->getElementById('title')->textContent;
                              $p = $bio->getElementById("preview");
					$preview = $bio->saveXML($p);
					$img = ($who == $name)? $gimg:$img;
                              
					echo '<a class="biolink" href="'.$path.'" ><img src="'.$img.'" alt="Person" /><h3 style="padding-bottom: 0;">'.$person.'</h3><h3 style="font-size: .8em; padding: 0 0 5px 0;">'.$title.'</h3></a><div class="preview">'.$preview.'</div><a href="'.$path.'" >READ MORE</a>';
					
      		      		
	      	}
      	?>
      	<div class="peopleRow">
                  <div class="oneThird left">
                        <?php get("john-sperry")?>
                  </div>
                  
                  <div class="oneThird left">
                        <?php get("lonnie-mayne")?>
                  </div>
                  
                  <div class="oneThird left">
                        <?php get("kurt-williams")?>
                  </div>
                  <div class="clear"></div>
            </div>
      	
      	<div class="peopleRow">
                  <div class="oneThird left">
                        <?php get("brad-clark")?>
                  </div>
                  
                  <div class="oneThird left">
                       <?php get("derek-newbold")?>
                 </div>
                  
                  <div class="oneThird left">
                        <?php get("mark-webb")?>
                  </div>   

                  <div class="clear"></div>
            </div>


            <div class="peopleRow">
                  <div class="oneThird  left">
                       <?php get("kristi-knight")?>
                  </div>
                  <div class="oneThird left">
                        <?php get("erich-dietz")?>
                  </div>
                  <div class="oneThird  left">
                       <?php get("randy-jordan")?>
                  </div>
                  
                  <div class="clear"></div>
            </div>

            
           <!-- <div class="peopleRow">
                  <div class="oneThird left">
                        <?php get("chadly-hortin")?>
                  </div>
                 <div class="oneHalf left">
                        <?php get("shane-evans")?>
                  </div> 

                  <div class="oneThird left">
                        <?php get("jon-sanderson")?>
                  </div>
                 
           </div> -->
            
      	<!--[if !IE 7]><div class="clear"></div><![endif]-->

      	<!-- <div class="peopleRow">
                  <div class="oneHalf left">
                        <?php get("john-crofts")?>
                  </div>
                  
                  <div class="oneHalf left">
                        <?php get("jon-grover")?>
                  </div>
            </div> -->

      	
      	<!--[if !IE 7]><div class="clear"></div><![endif]-->