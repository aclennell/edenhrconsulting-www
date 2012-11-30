<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
    
    	 <!-- <meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
  <!-- <meta name="robots" content="noindex, nofollow" /> -->
  <meta name="keywords" content="Human Resources, Employment Tribunal, Personal Development" />
  <!-- <meta name="title" content="Where We Are and What Area We Cover" /> -->
  <meta name="author" content="Adam Clennell" />
  <meta name="description" content="EdenHrConsulting are experts in Human Resource management and development" />
 
 
	<title>
		Eden HR Consulting :
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	//	echo $this->Html->meta('icon');

		echo $this->Html->css('eden');

	//	echo $this->fetch('meta');
	//	echo $this->fetch('css');
	//	echo $this->fetch('script');
	?>
  

</head>
<body>
   
	<div id="container"> 
        
		<div id="header">
                        <div id="banner">
       <?php echo $this->Html->image('eden/banner.png', array('alt' => $cakeDescription, 'border' => '0')) ?>
       <?php echo $this->Html->image('eden/logo.png', array('alt' => $cakeDescription, 'border' => '0', 'id'=>'logo')) ?>
                            <h2 class="pagetel">01403 734455</h2>
        </div>
                    <div class="topmenu">
                    <ul>
                        <li><?php echo $this->Html->link("Home", "/")?></li>
                        
                        <li><?php echo $this->Html->link("Our People", "/humanresources/people")?></li>     
                        <li><?php echo $this->Html->link("Our Services", "/humanresources/ourservices")?></li>
                        <li><?php echo $this->Html->link("Case Studies", "/humanresources/library")?></li>
                        <li><?php echo $this->Html->link("Testimonials", "/humanresources/testimonials")?></li> 
                        <li><?php echo $this->Html->link("About us", "/humanresources/aboutus")?></li>                        
                        <li><?php echo $this->Html->link("Contact us", "/humanresources/contact")?></li>                                               
                    </ul>
                    </div>
		</div>
            
		<div id="content">                    
			<?php echo $this->fetch('content'); ?>
		</div>
            
		<div id="footer">
                    
                     <div class="footmenu">
                    <ul>
                        <li class="navlink"><?php echo $this->Html->link("Terms & Conditions", "/humanresources/legal")?></li>
                        <li>&nbsp;</li>                        
                        <li class="navlink"><?php echo $this->Html->link("Linkedin", "http://www.linkedin.com/in/eveclennell");?></li>
                        <li class="navlink"><?php echo $this->Html->link("Facebook", "http://www.facebook.com/pages/Eden-HR-Consulting/139948316037232");?></li>                
                        <li>&nbsp;</li>
                        <li class="contactinfo">Tel: <?php echo $this->Html->link("01403 734455", "tel:01403734455")?></li>
                        <li class="contactinfo">Email: <?php echo $this->Html->link("info@edenhrconsulting.com", "mailto:info@edenhrconsulting.com")?></li>                        
                    </ul>
                     </div>
                    
                    <div class="maditoryinfo">
                    <p>Company Registration Number : 05398879, VAT Number: 862552613, Office Address: Milnwood, 13 North Parade, Horsham, West Sussex, RH12 2BT, Registered Address: 5 Porchester Close, Southwater, Horsham, West Sussex, RH13 9XR.</p>
                    <p>© 2012 Eden HR Consulting</p>                        
                    </div>
		</div>
	</div>
    
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36724333-1']);
  _gaq.push(['_setDomainName', 'edenhrconsulting.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
