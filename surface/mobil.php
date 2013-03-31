 <?php
/**
 * @package		Surface.site.mobil
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2013 Blechdose. All rights reserved.
 */
 setcookie("IE", "true", time()+60*60*24); // 1 Tag
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mobiltemplate.css" type="text/css" />
<meta name="format-detection" content="telephone=no">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>

<style type="text/css">
	body{
	background: white;
	font-size: 18px;
	font-size: 2.3rem;
	margin: 0px;
	margin-right: 1.5em;
	display: block;
	}
	
    h2{
    background-color: #<?php echo $band_color; ?>;
    }
    
    h2:before{
    background-color: #<?php echo $dropdown_color; ?>;
    color: #<?php echo $dropdown_color; ?>;
    }
    
    p{
    width: 100%;
    }
    
    .MobileTitle{
	background-color:#<?php echo $band_color; ?>;
	outline: 3px dashed #<?php echo $dropdown_color; ?>;
	-moz-outline: 3px dashed #?<php echo $dropdown_color; ?>;
	}
    
    .social-icon {
	background-image: linear-gradient(bottom, #<?php echo $dropdown_color; ?> 0%, #<?php echo $module_color; ?> 100%);
	background-image: -o-linear-gradient(bottom, #<?php echo $dropdown_color; ?> 0%, #<?php echo $module_color; ?> 100%);
	background-image: -moz-linear-gradient(bottom, #<?php echo $dropdown_color; ?> 0%, #<?php echo $module_color; ?> 100%);
	background-image: -webkit-linear-gradient(bottom, #<?php echo $dropdown_color; ?> 0%, #<?php echo $module_color; ?> 100%);
	background-image: -ms-linear-gradient(bottom, #<?php echo $dropdown_color; ?> 0%, #<?php echo $module_color; ?> 100%);
	background-image: -webkit-gradient( linear, left bottom, left top, color-stop(0, #<?php echo $dropdown_color; ?>), color-stop(1, #<?php echo $module_color; ?>) );
	-webkit-box-shadow: inset 0px 1px 0px #<?php echo $module_color; ?>, 0px 3px 0px 0px #<?php echo $dropdown_color; ?>, 0px 5px 5px #999;
	-moz-box-shadow: inset 0px 1px 0px #<?php echo $module_color; ?>, 0px 3px 0px 0px #<?php echo $dropdown_color; ?>, 0px 5px 5px #999;
	-o-box-shadow: inset 0px 1px 0px #<?php echo $module_color; ?>, 0px 3px 0px 0px #<?php echo $dropdown_color; ?>, 0px 5px 5px #999;
	box-shadow: inset 0px 1px 0px #<?php echo $module_color; ?>, 0px 3px 0px 0px #<?php echo $dropdown_color; ?>, 0px 5px 5px #999;
	}
	
	#tagCircleIn, #tagCircleSh, #tagCircleLi{
	background-color: #<?php echo $dropdown_color; ?>;
	}
</style>
</head>
		<div class="MobileTitle"><h1>
			<?php if ($this->countModules( 'headermodule' )) : ?>
			<jdoc:include type="modules" name="headermodule" />
			<?php elseif($page_title_default) : ?>
				<a href="index.php"> <?php	 $app    = &JFactory::getApplication();
				echo $app->getCfg('sitename');
			

				else :

				echo $page_title;

				endif;
				?>
				</a>
				<div class="MobileMenu"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/mobilemenu.png"></div>
				</h1></div>	
			
					<div class="MobileMenuSelection">
					<!-- Definition der modulposition "mobil" -->
					<jdoc:include type="modules" name="user3" />
					</div>
			
			
			<?php echo "<script type='text/javascript'>$(function() {
    	    $('.MobileMenu').click(function() {
            var elem = $('.MobileMenuSelection');
       		 if (elem.css('display') == 'none') {
             elem.slideDown(200);
        		}
       			  else {
            	  elem.slideUp(200);
        		}
    		});
			});</script>";
			?>
				<div class="MobileContent">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>

						<div class="MobileFooter">
						<?php if($scrolling == "true") : ?>
						<!-- BEGINNE: Scrolling-Button -->
							<a class="scrolling" href="#page" id="page"></a>
						<!-- END: Scrolling-Button -->
						<?php endif; ?>

						<?php if ($this->countModules( 'footer' )) : ?>
							<jdoc:include type="modules" name="footer" style="xhtml" />
						<?php endif; ?>

						<?php if($timerrun == "true") : ?>
						<!-- BEGINNE: Timer -->
						<div class="MobileTimer">
							<p>
								<?php echo JText::_( 'PAGE_CLASS' ); ?>
								<?php $endTime = endTime($timer); echo $endTime . ' ' . ""; ?>
								<?php echo JText::_( 'GENERATED_CLASS' ); ?>
							</p>
							<!-- END: Timer -->
						</div>

						<?php endif; ?>				
							<jdoc:include type="modules" name="copyright" />
	</div>

	<jdoc:include type="modules" name="debug" />
</body>
</html>