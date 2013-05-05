 <?php
/**
 * @package		Surface.site.mobil
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2013 Blechdose. All rights reserved.
 */
 ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mobiltemplate.css" type="text/css" />
<meta name="format-detection" content="telephone=no">
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
<?php 
// include our style.php:
require_once dirname(__FILE__) . DS . '/lib/style.php';
?>
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
             elem.show();
        		}
       			  else {
            	  elem.hide();
        		}
    		});
			});</script>";
			?>
				<div class="MobileContent">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>

						<div class="MobileFooter">
						<?php if($scrolling) : ?>
						<!-- BEGINNE: Scrolling-Button -->
							<a class="scrolling" href="#page" id="page"></a>
						<!-- END: Scrolling-Button -->
						<?php endif; ?>

						<?php if ($this->countModules( 'footer' )) : ?>
							<jdoc:include type="modules" name="footer" style="xhtml" />
						<?php endif; ?>

						<?php if($timerrun) : ?>
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