<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/webparts/func.php");
include ($root."webparts/constantHeaderInfo.php");
?>
<!-- page specific header information -->
<title>About Us - Mindshare Leadership | Mindshare</title>
<meta name="description" content="Learn more about Mindshare and the expereince executive leadership team." />
<link rel="canonical" href="http://www.mshare.net/about-us"/>

<link type="text/css" rel="stylesheet" href="<?php echo $link; ?>/about-us/about-us.css" />
<script src="about-us.min.js"></script>
<?php include ($root."webparts/header.php"); ?>
<!-- begin corpus -->
      <?php
      	$url = explode("/", $_SERVER['PHP_SELF']);
				$name = explode("/", $url[count($url)-2]);
				$who = $name[0];
				$lastname = explode("-", $who);
				$lastname = $lastname[1];
				$bimg = $link."about-us/".$who."/"."Big".$lastname.".png";
				if($who != "about-us"){
				$filename = $root."about-us/".$who.'/bio.php';
					$fh = fopen($filename, 'r');
				$string = fread($fh, filesize($filename)) or die("Could not read the file!");
					fclose($fh);
					
				$file = new DOMDocument;
				$file->loadHTML($string);
				$name = $file->getElementById('name')->textContent;
				$b = $file->getElementById('bio');
				$bio = $file->saveXML($b);
				 ?>
      <div id="person" class="full cut">
      		<img src="<?php echo $bimg; ?>" alt="person" class="left" />
      		<h1><?php echo $name; ?></h1>
      		<?php echo $bio; ?>
      	<span class="clear"></span>
      </div><!-- close aboutUs -->
      <div id="people" class="thirds cut">
      	
      	<?php include $root."about-us/previews.php" ?>
      	
      </div><!--  close people -->          
      	<?php } 
      	else{?>
      		<div id="aboutUs" class="full cut">
      			<h1>about us</h1>
      				<div class="divider"></div>
      				<div class="clear"></div>
      			<div class="twoThird seperate">
      				<p>Our entire team is made up of very experienced business and technology leaders. We are hands-on, service-oriented, and customer-focused. Since we teach about listening, we listen. Not only do we champion real-time responsiveness, we respond. We are fiercely committed to our client's success.</p>
      				<p>What began as a two-employee operation has expanded to serve brands throughout North America, Latin America, Asia, and Europe. We collect surveys in over 125 countries and 28 languages. Mindshare is the best choice to help you transform customer and employee feedback into actionable steps to improve your business.</p>
      			</div>
      			<img src="<?php echo $img->link; ?>about-us/images/them.png" class="oneThird left" />
      			<div class="clear"></div>
      		</div> 
      		<div id="people" class="thirds cut">
      			<?php include $root."about-us/previews.php" ?>
      		</div><!--  close people -->
      	<?php } ?>
    
<!-- end corpus -->
<?php include ($root."webparts/footer.php"); ?>