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
</head>
<body class="contentpane" id="page">
	<div class="MainBackground"></div>
	</div>
<div class="MainSheet">
		<div class="Title">
			<?php if ($this->countModules( 'headermodule' )) : ?>
			<jdoc:include type="modules" name="headermodule" />
			<?php elseif($page_title_default == "true") : ?>
			<h1>
				<a href="index.php"> <?php	 $app    = &JFactory::getApplication();
				echo $app->getCfg('sitename');

				else :

				echo $page_title;

				endif;
				?>
				</a>
			</h1>
		</div>		
	<div class="MainContent">
				<div class="StripeContent">
					<div class="StripeMenu">
					<!-- Definition der modulposition "mobil" -->
						<jdoc:include type="modules" name="mobil" />
					</div>
				</div>
				<div class="Content">
					<jdoc:include type="message" />
					<jdoc:include type="component" />
				</div>

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
</div>
	<jdoc:include type="modules" name="debug" />
</body>
</html>