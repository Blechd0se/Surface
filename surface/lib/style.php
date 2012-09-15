<?php
/**
 * @package		Surface.site
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2012 Blechdose. All rights reserved.
 */

defined('_JEXEC') or die('Restricted access');

// Style-Component
?>
<style type="text/css">
	body { 
	font-family: <?php echo $font_content; ?>;
	<?php if ($image == 1) :
			$image = "background.png"; ?>
			background: #<?php echo $con_bg_color; ?>;
		  	background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/<?php echo $image; ?>);
			<?php endif; ?>
		   <?php if ($image == 2) : ?>
		   	background: #<?php echo $con_bg_color; ?>;
			background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMCUiIHN0b3AtY29sb3I9IiM3ZGI5ZTgiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjMWU1Nzk5IiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
			background: -moz-radial-gradient(center, ellipse cover, #<?php echo $starting_color; ?> 0%, #<?php echo $end_color; ?> 100%);
			background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#<?php echo $starting_color; ?>), color-stop(100%,#<?php echo $end_color; ?>));
			background: -webkit-radial-gradient(center, ellipse cover, #<?php echo $starting_color; ?> 0%,#<?php echo $end_color; ?> 100%);
			background: -o-radial-gradient(center, ellipse cover, #<?php echo $starting_color; ?> 0%,#<?php echo $end_color; ?> 100%);
			background: -ms-radial-gradient(center, ellipse cover, #<?php echo $starting_color; ?> 0%,#<?php echo $end_color; ?> 100%);
			background: radial-gradient(center, ellipse cover, #<?php echo $starting_color; ?> 0%,#<?php echo $end_color; ?> 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#<?php echo $starting_color; ?>', endColorstr='#<?php echo $end_color; ?>',GradientType=1 );
			<?php endif; ?>
			<?php if ($image == 3) : ?>
			background: #<?php echo $con_bg_color; ?>;
			<?php endif; ?>
		   font-size: <?php echo $size; ?>;
		   }
	.moduletable h3, .moduletableaccordion h3 { background-color: #<?php echo $module_color; ?>; }
	#header ul li ul { background: #<?php echo $dropdown_color; ?>; }
	<?php if($mainsheet_rounded == "true") : ?>
	.MainContent, #topnav a.signin, #signin_menu, #header ul li ul, .inputbox, #fontsize,
	.moduletable, .moduletableaccordion, .moduletablesearch, .MainHeading, .Content, .Content_ext_right, .breadcrumps
	{ 
		border-radius: 5px; 
		-moz-border-radius: 5px; 
		-o-border-radius: 5px; 
		-ms-border-radius: 5px; 
		-webkit-border-radius: 5px; 
	}
	#signin_submit, #signin_menu input[type=text], #signin_menu input[type=password], input.signin_submit {
		border-radius: 4px;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px; 
		-o-border-radius: 4px; 
		-ms-border-radius: 4px; 
	}
	.MainMenue, .inputboxsearch {
		border-radius: 10px;
		-moz-border-radius: 10px;
		-webkit-border-radius: 10px; 
		-o-border-radius: 10px; 
		-ms-border-radius: 10px; 
	}
	.button, input.buttonsearch {
		border-radius: 2px;
		-moz-border-radius: 2px;
		-webkit-border-radius: 2px;
		-o-border-radius: 2px; 
		-ms-border-radius: 2px; 
	}
	#main .pagination li {
		border: 1px solid #CACACA;
		border-radius: 5px;
	}
	.RightPicture {
		border-radius: 5px;
	}
    <?php endif; ?>
	<?php if($beta_warnung == "true") : ?>
	.beta {
		position: fixed;
		background-image: url(<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/beta.png);
		background-repeat: no-repeat;
		height: 112px;
		width: 112px;
		z-index: 100;
	}
	<?php endif; ?>
	<?php if ($this->countModules( 'newsflashload' )) : ?>
                
	.RightPicture {
		-moz-box-shadow: 0 0 0px #000;
		-webkit-box-shadow: 0 0 0px #000;
		box-shadow: 0 0 0px #000;
	}
    <?php endif; ?>
	<?php if ($this->countModules( 'newsflashload' ) or $javascript_slider == "true") : ?>
	/* Tue nichts */
	<?php else : ?>
	.MainContent {
		top: 260px;
	}
	#fontsize {
		margin-top: 265px;
	}
    <?php endif; ?>  
	<?php if ($this->countModules( 'breadcrumb' )) : ?>
	.Right {
		margin-top: -60px;
	}
	<?php endif; ?>
	<?php
	// Zwar im Output etwas unsch�n, aber zweckm��ig
	// Fix f�r die rechte Spalte
	if ($this->countModules( 'position-1' ) or $this->countModules( 'position-2' ) or $this->countModules( 'position-3' )) : ?>
	.Right {
		margin-top: -280px;
	}	
		<?php if ($this->countModules( 'breadcrumb' )) : ?>
		.Right {
			margin-top: -310px;
		}
		<?php endif; ?>
	<?php endif; ?>
	<?php
	// Content darf sich nicht verschieben:
	$left_counter = $this->countModules( 'left' );
	$position1_counter = $this->countModules( 'position-1' );
	$position2_counter = $this->countModules( 'position-2' );
	$position3_counter = $this->countModules( 'position-3' );
	if ($left_counter == "1") : ?>
	.Content, .Content_ext_right, .breadcrumps {
		margin-left: 18%;
	}
		 <?php if ($position1_counter == "0" AND $position2_counter == "0" AND $position3_counter == "0") : ?>
		 .Content, .Content_ext_right, .breadcrumps {
			margin-left: 20px;
		 }
		<?php endif; ?>
	<?php endif; ?>
	.MainSheet
	{
		left: <?php echo $main_size; ?>;
		right: <?php echo $main_size; ?>;
	}
	.Left
	{
		width: <?php echo $left_column; ?>;
	}
	.Content
	{
		width: <?php echo $main_column; ?>;
	}
	.Right
	{
		width: <?php echo $right_column; ?>;
	}
</style> 