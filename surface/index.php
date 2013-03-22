 <?php

/**
 * @package		Surface.site
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2012 Blechdose. All rights reserved.
 */
require_once dirname(__FILE__) . DS . '/lib/config.php';
require_once dirname(__FILE__) . DS . '/lib/core.php';
require_once dirname(__FILE__) . DS . '/lib/timer.php';

header('Vary: Accept-Encoding');
defined('_JEXEC') or die;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
	xml:lang="<?php echo $this->language; ?>"
	lang="<?php echo $this->language; ?>"
	dir="<?php echo $this->direction; ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="version" content="1.1 Build: 18032012 // Blechdose" />
<?php  
// Browserweiche aufrufen
// Cookies auslesen
$variable = $_COOKIE["IE"];
if (detect_ie() && $ie_support == "1" && $variable != true) {
		require_once dirname(__FILE__) . DS . '/lib/ie/ie.php';
}
// ToDo: Mobil Cookie setzen
elseif (detect_mobil() && $mobil_support) {
			// Code für Umleitung:
require_once dirname(__FILE__) . DS . 'mobil.php';
			}
else {

?>
<jdoc:include type="head" />
<?php 
// Mootools-Weiche
if($mootools == "true") :
$headerstuff = $this->getHeadData();
mootools( $headerstuff );
$this->setHeadData($headerstuff);
?>
<script type="text/javascript"
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/mootools.js"></script>
<?php endif; ?>
<link rel="stylesheet"
	href="<?php echo $this->baseurl ?>/templates/system/css/general.css"
	type="text/css" />
<link rel="stylesheet"
	href="<?php echo $this->baseurl ?>/templates/system/css/system.css"
	type="text/css" />
<?php if($kompression == "true") : ?>
<link rel="stylesheet" type="text/css"
	href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/css_compress.php" />
<?php else : ?>
<link rel="stylesheet"
	href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/general.css"
	type="text/css" />

<?php if($fontsizeparam == "true") : ?>
<!-- BEGINNE: FONTSIZE -->
<link rel="stylesheet"
	href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fontsize.css"
	type="text/css" />
<!-- END: FONTSIZE -->
<?php endif; ?>
<?php endif; ?>
<?php if($ie_support == "2") : ?>
<!--[if lte IE 8]>
  	  <style type="text/css">
     .MainContent, .MainHeading, .MainMenue, .RightPicture, #header ul li a, #header ul li ul, .Content, .Content_ext_right,
     .moduletable, body, .MainSheet, .MenueRight, .moduletable_login, .MainBackground, .moduletableaccordion, div.moduletable, #topnav a.signin,
     #signin_menu, #signin_submit, #signin_menu input[type=text], #signin_menu input[type=password], input.signin_submit, .moduletablesearch,
     #article-index, #header, #fontsize, div.Content #main img, .breadcrumbs {behavior:url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/PIE.php);} 
      </style>
    <![endif]-->
<?php endif; ?>
<?php 
require_once dirname(__FILE__) . DS . '/lib/style.php';
?>
<?php if($javascript == "true") : ?>
<script
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/mootools-more.js"></script>
<script
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/noconflict.js"></script>
<script
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js"></script>
<script
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/slides.min.jquery.js"></script>
<script
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/script.js"></script>
		<?php if($link_animation == "true") : ?>
<script
	src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.color.js"></script>		
		<?php endif; ?>
<?php if($fontsizeparam == "true") : ?>



<?php endif; ?>
<?php if($scrolling == "true") : ?>
<!-- BEGINNE: Scroll-Effekt -->
<link rel="stylesheet" type="text/css"
	href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/scrolling.css" />
<script type="text/javascript">window.addEvent('domready',function() { new SmoothScroll({ duration: 700 }); });</script>
<!-- END: Scroll-Effekt -->
<?php endif; ?>
<?php if($javascript_slider == "true") : ?>
<!-- BEGINNE: Slider -->
<script type="text/javascript">
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/loading.gif',
				play: <?php echo $anzeige_dauer; ?>,
				pause: 6500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},200);
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
<!-- END: Slider -->
<?php endif; ?>
<?php if($link_animation == "true") : ?>
<!-- BEGINNE: Hover-Effekt -->
<script type="text/javascript">
   $(document).ready(function(){
    $(".moduletable li a").hover(function() {
                $(this).stop().animate({ color: "#7db9e8" }, 600);
        },function() {
                 $(this).stop().animate({ color: "#5A5A5A" }, 400);
        });
	$(".moduletable ul li span").hover(function() {
                $(this).stop().animate({ color: "#7db9e8" }, 600);
        },function() {
                 $(this).stop().animate({ color: "#5A5A5A" }, 400);
        });
	$(".moduletableaccordion li a").hover(function() {
                $(this).stop().animate({ color: "#7db9e8" }, 600);
        },function() {
                 $(this).stop().animate({ color: "#5A5A5A" }, 400);
        });
	$(".moduletableaccordion ul li span").hover(function() {
                $(this).stop().animate({ color: "#7db9e8" }, 600);
        },function() {
                 $(this).stop().animate({ color: "#5A5A5A" }, 400);
        });
	});
    </script>
<!-- END: Hover-Effekt -->
<?php endif; ?>
<!-- BEGINNE: Dropdown-Effekt -->
<script type="text/javascript">
    $(function(){
        $('#header ul li ul').hide();
        $('#header ul li').hover(
            function(){
                $('#header ul li').not($('ul', this)).stop();
                $('ul li:first-child', this).before(
                    '<li class="arrow">arrow</li>'
                );
                $('ul li.arrow', this).css('border-bottom', '0');
                $('ul', this).slideDown();
            },
            function(){
                $('ul', this).slideUp();
                $('ul li.arrow', this).remove();
            }
        );
    
    });
    </script>
<!-- END: Dropdown-Effekt  -->

<!-- BEGINNE: Accordion-Effekt -->
<script type="text/javascript">
    jQuery(document).ready(function()
    {
		
		jQuery("#accordion span.separator").click(function(current) {
			/* Abfrage für korrekten Pfeil: */
			if ( $("span.separator").attr("id") == "0" ) {	
				jQuery(this).css({background:"url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/tipsy-west.gif') center right no-repeat"}).next("ul.accordion").slideToggle(300).siblings("ul.accordion").slideDown("slow");
					$("span.separator").attr("id", "1");
			}
			else {
				jQuery(this).css({background:"url('<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/tipsy-south.gif') center right no-repeat"}).next("ul.accordion").slideToggle(300).siblings("ul.accordion").slideDown("slow");
					$("span.separator").attr("id", "0");
			}
				 });
    });
    </script>
<!-- END: Accordion-Effekt -->
<?php endif; ?>


</head>
<body class="contentpane" id="page">
	<?php if($beta_warnung == "true") : ?>
	<div class="beta"></div>
	<?php endif; ?>

	<div class="MainBackground"></div>
	<div class="MenueRight">

		<div id="searching"></div>

	</div>

	</div>
	
	<!-- BEGINNE: Hintergrundfahne -->

		<div class="ContentWrapper">
		<div class="StripeBackground"></div></div>
		<div class="LeftArrowSpace"><div class="ArrowLeft"></div></div>	
		<div class="RightArrowSpace"><div class="ArrowRight"></div></div>
		<!-- END: Hintergrundfahne --> 

	
	<div class="MainSheet">
		<!-- BEGINNE: Datum -->
		<?php if($date == "true") : ?>
		<div class="date">
			<?php $now = &JFactory::getDate(); echo $now->toFormat("%A, %d %b %Y"); ?>
		</div>
		<?php endif; ?>
		<!-- END: Date -->
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

		<?php if ($this->countModules( 'newsflashload' ) or $javascript_slider == "true") : ?>
		<div class="RightPicture">

			<!-- BEGINNE: Slider -->
			<div id="container">
				<div id="example">

					<div id="slides">
						<div class="slides_container">
							<div class="slide">
								<a href="<?php echo $javascript_slider_plugin_picture1_link; ?>"
									title="<?php echo $javascript_slider_plugin_picture1_link; ?>"
									target="_blank"><img
									src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/slider/<?php echo $javascript_slider_plugin_picture1; ?>"
									width="570" height="200" alt="Slide 1"> </a>
								<?php if ($javascript_slider_plugin_picture1_text != null) : ?>
								<div class="caption" style="bottom: 0">
									<p>
										<?php echo $javascript_slider_plugin_picture1_text; ?>
									</p>
								</div>
								<?php endif; ?>
							</div>
							<div class="slide">
								<a href="<?php echo $javascript_slider_plugin_picture2_link; ?>"
									title="<?php echo $javascript_slider_plugin_picture2_link; ?>"
									target="_blank"><img
									src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/slider/<?php echo $javascript_slider_plugin_picture2; ?>"
									width="570" height="200" alt="Slide 2"> </a>
								<?php if ($javascript_slider_plugin_picture2_text != null) : ?>
								<div class="caption" style="bottom: 0">
									<p>
										<?php echo $javascript_slider_plugin_picture2_text; ?>
									</p>
								</div>
								<?php endif; ?>
							</div>
							<div class="slide">
								<a href="<?php echo $javascript_slider_plugin_picture3_link; ?>"
									title="<?php echo $javascript_slider_plugin_picture3_link; ?>"
									target="_blank"><img
									src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/slider/<?php echo $javascript_slider_plugin_picture3; ?>"
									width="570" height="200" alt="Slide 3"> </a>
								<?php if ($javascript_slider_plugin_picture3_text != null) : ?>
								<div class="caption" style="bottom: 0">
									<p>
										<?php echo $javascript_slider_plugin_picture3_text; ?>
									</p>
								</div>
								<?php endif; ?>
							</div>
						</div>
						<?php if($javascript_slider == "true") : ?>
						<a href="#" class="prev"><img
							src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/left_prev.png"
							width="48" height="48" alt="Arrow Prev"> </a> <a href="#"
							class="next"><img
							src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/right_next.png"
							width="48" height="48" alt="Arrow Next"> </a>
						<?php endif; ?>
					</div>
				</div>
			</div>

			<!-- END: Slider -->
			<jdoc:include type="modules" name="newsflashload" style="xhtml" />
		</div>

		<?php endif; ?>


		<div class="PolishedFront"></div>
		
<div class="MainContent">
			<div class="StripeContent">
				<div class="StripeMenu">
					<jdoc:include type="modules" name="user3" />
				</div>


				<?php if($fontsizeparam == "true") : ?>
				<!-- BEGINNE: FONTSIZE -->
				<script
					src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/md_stylechanger.js"></script>
				<!-- BEGINNE: FONTSIZE -->
				
				<div class="fontsize_class" id="fontsize">
					<script type="text/javascript">
					//<![CDATA[
					document.write('<a href="#" title="<?php echo JText::_('DECREASE_SIZE'); ?>" onclick="changeFontSize(-2); return false;" class="smaller">A-</a><span class="unseen">&nbsp;</span>');
					 document.write('<a href="#" title="<?php echo JText::_('RESET_DEFAULT'); ?>" onclick="revertStyles(); return false;" class="reset">A </a></p>');
						document.write('<a href="#" title="<?php echo JText::_('INCREASE_SIZE'); ?>" onclick="changeFontSize(2); return false;" class="larger">A+</a><span class="unseen">&nbsp;</span>');
					//]]>
				</script>
				</div>
				<!-- END: FONTSIZE -->
				<?php endif; ?>
				<jdoc:include type="modules" name="loginload" style="_login" />

			</div>
			<div class="Space"></div>
			<div class="Left">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div>
			<?php if ($this->countModules( 'position-1' ) or $this->countModules( 'position-2' ) or $this->countModules( 'position-3' )) : ?>
			<div class="module_content">
				<?php if ($this->countModules( 'position-1' )) : ?>
				<div class="left_content">
					<jdoc:include type="modules" name="position-1" style="xhtml" />
				</div>
				<?php endif; ?>
				<?php if ($this->countModules( 'position-2' )) : ?>
				<div class="main_content">
					<jdoc:include type="modules" name="position-2" style="xhtml" />
				</div>
				<?php endif; ?>
				<?php if ($this->countModules( 'position-3' )) : ?>
				<div class="right_content">
					<jdoc:include type="modules" name="position-3" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
			<?php endif; ?>
			<?php if ($this->countModules( 'breadcrumb' )) : ?>
			<div class="breadcrumps">
				<jdoc:include type="modules" name="breadcrumb" />
			</div>
			<?php endif; ?>
			<?php if ($this->countModules( 'right' )) : ?>
			<div class="Content">
				<?php else : ?>
				<div class="Content_ext_right">
					<?php endif; ?>
					<div id="main" role="main" style="font-size: 100%;">
						<jdoc:include type="modules" name="position-4" style="xhtml" />
						<jdoc:include type="message" />
						<jdoc:include type="component" />
						<jdoc:include type="modules" name="position-5" style="xhtml" />
					</div>
				</div>

				<?php if ($this->countModules( 'right' )) : ?>
				<div class="Right">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
				<?php endif; ?>


				<div class="Footer">
  				<?php if($scrolling == "true") : ?>
          	<!-- BEGINNE: Scrolling-Button -->
          	<div class="scrolling">
          	<a href="#page" id="page">
          	<div class="smallarrow-top"></div>
          	<br>TOP</a>
          	</div>
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
					<jdoc:include type="modules" name="syndicate" />
				</div>
			</div>
			<?php if($copyright == "true") : ?>
			<!-- BEGINNE: Copyright -->
			<div class="copyBrand">
				<? echo "uniquely crafted by <a href='http://www.blechdose-live.de/' target='_blank'>Alexander Christ </a> and
                                  beautifully designed by <a href='http://dl.dropbox.com/u/4854858/portfolio/index.html' target='_blank'>Yannick Lober</a>"; ?>
			</div>

			<!-- END: Copyright -->
			<?php endif; ?>
		</div>
	</div>

	<jdoc:include type="modules" name="debug" />
	<?php if($bild_animation == "true") : ?>
	<script
		src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.lazyload.js"></script>
	<script type="text/javascript" charset="utf-8">
      $(function() {
          $(".Content img").lazyload({
              effect : "fadeIn"
          });
      });
  </script>
	<?php endif; ?>
</body>
</html>
<?php } ?>