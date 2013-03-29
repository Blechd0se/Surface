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
<?php 
require_once dirname(__FILE__) . DS . '/lib/style.php';
?>
<style type="text/css">
	body{
	background: white;
	font-size: 2.3rem;
	margin: 0px;
	}
	
    h2{
    background-color: #<?php echo $band_color; ?>;
    }
    
    h2:before{
    background-color: #<?php echo $dropdown_color; ?>;
    color: #<?php echo $dropdown_color; ?>;
    }
</style>
</head>
		<div class="MobileTitle"><h1>
			<?php if ($this->countModules( 'headermodule' )) : ?>
			<jdoc:include type="modules" name="headermodule" />
			<?php elseif($page_title_default) : ?>
				<?php	 $app    = &JFactory::getApplication();
				echo $app->getCfg('sitename');

				else :

				echo $page_title;

				endif;
				?>
				<div class="MobileMenu"><a href="#"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/mobilemenu.png"> </a></div>
				</h1></div>	
			
				<div class="StripeContent">
					<div class="StripeMenu">
					<!-- Definition der modulposition "mobil" -->
						<jdoc:include type="modules" name="mobil" />
					</div>
				</div>
				<div class="MobileContent">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>

	<div class="Footer">
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
						<div class="timer">
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