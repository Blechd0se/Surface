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
			font-size: 12px;
		   }
	

.ArrowLeft{
border-right:20px solid #<?php echo $band_color; ?>;
}

.ArrowRight{
border-left:20px solid #<?php echo $band_color; ?>;
}

.StripeBackground{
	background-color: #<?php echo $band_color; ?>;
	margin: 0 <?php echo substr($main_size, 0, strlen($main_size)-2)-35;?>px 0 <?php echo substr($main_size, 0, strlen($main_size)-2)-35;?>px;
}

input.signin_submit{
background-color: #<?php echo $module_color; ?>;
}

#signin_menu input{
border:1px solid #<?php echo $dropdown_color; ?>;

}
.StripeContent{
background-color: #<?php echo $band_color; ?>;
}

.StripeMenu>ul.menu li:hover>a, .StripeMenu>ul.menu span.separator:hover{
background-color: #<? echo $dropdown_color; ?>;
}

.StripeMenu>ul.menu ul a{
background-color:  #<? echo $dropdown_color; ?>;
border: 1px groove #<?php echo $band_color; ?>;
}

.StripeMenu>ul.menu li a:hover, .StripeMenu>ul.menu li.current a, .StripeMenu>ul.menu span.separator:hover{
background-color: #<? echo $dropdown_color; ?>;
}


	a:hover,a:active, span.separator:active,span.separator:hover{
	color:#<?php echo $module_color; ?>;
	text-decoration:underline;
	border: none;
}
	
	.date {
	font-family: <?php echo $font_content; ?>;
	}
	
	#header ul li ul { background: #<?php echo $dropdown_color; ?>; }
	<?php if($mainsheet_rounded) : ?>
	.MainContent, #topnav a.signin, #signin_menu, #header ul li ul, .inputbox, #fontsize,
	.moduletable, .moduletableaccordion, .moduletablesearch, .MainHeading, .Content, .Content_ext_right
	{ 
		border-radius: 2px; 
		-moz-border-radius: 2px; 
		-o-border-radius: 2px; 
		-ms-border-radius: 2px; 
		-webkit-border-radius: 2px; 
	}
	#signin_submit, #signin_menu input[type=text], #signin_menu input[type=password], input.signin_submit, .button {
		border-radius: 4px;
		-moz-border-radius: 4px;
		-webkit-border-radius: 4px; 
		-o-border-radius: 4px; 
		-ms-border-radius: 4px; 
	}
	.inputboxsearch {
		border-radius: 3px;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px; 
		-o-border-radius: 3px; 
		-ms-border-radius: 3px; 
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
	
	.PolishedFront {
	border-radius: 3px;
	}

    <?php endif; ?>
	<?php if($beta_warnung) : ?>
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
	<?php if ($this->countModules( 'newsflashload' ) or $javascript_slider) : ?>
	/* Tue nichts */

    <?php endif; ?>  
	<?php if ($this->countModules( 'breadcrumb' )) : ?>
	.Right {
		margin-top: -55px;
	}
	<?php endif; ?>
	<?php
	// Zwar im Output etwas unschön, aber zweckmäßig
	// Fix für die rechte Spalte
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
			margin-left: 1%;
		 }
		<?php endif; ?>
	<?php endif; ?>
	.MainSheet
	{
		left: <?php echo $main_size; ?>;
		right: <?php echo $main_size; ?>;
		min-width: 90em;
	}
	.Left
	{
		width: <?php echo $left_column; ?>;
	}
	.Content
	{
		width: <?php echo $main_column; ?>;
		font-size: <?php echo $size; ?>;
		line-height: 145%;
	}
	.Right
	{
		width: <?php echo $right_column; ?>;
	}
	
	.ContentWrapper	{
	float: left;
	width: 100%;
	margin-top: 23.1em;
	}

	<?php if(!$javascript_slider) : ?>
	
	.PolishedFront{
	margin-top: 14em;
	}
	
	.ContentWrapper, .LeftArrowSpace, .RightArrowSpace{
	margin-top: 16em;
	}

	.Title{
	margin-top: 3em;
	}
	
	<?php endif; ?>	
	
	#tagCircleIn, #tagCircleSh, #tagCircleLi{
	background-color: #<?php echo $dropdown_color; ?>;
	}
	
	#tagLeft{
	color: #<?php echo $dropdown_color; ?>;
	}

	.Right>.moduletable h3:after, .Right>.moduletableaccordion h3:after{
	background-color: #<?php echo $dropdown_color; ?>;
	color: #<?php echo $dropdown_color; ?>;
	}
	
	.Left>.moduletable h3:before, .Left>.moduletableaccordion h3:before{
	width: 3px;
	background-color: #<?php echo $dropdown_color; ?>;
	color: #<?php echo $dropdown_color; ?>;
	}

	/* Customised native CSS arrows */
	
	.LeftArrowSpace{
	float:left;
	width: <?php echo substr($main_size, 0, strlen($main_size)-2)-35;?>px;
	margin-left: -100%;
	margin-top: 23.1em;
	}
	
	.RightArrowSpace{
	float: left;
	width: <?php echo substr($main_size, 0, strlen($main_size)-2)-35;?>px;
	margin-left: -<?php echo substr($main_size, 0, strlen($main_size)-2)-35;?>px;
	margin-top: 23.1em;
	}
	
	.ArrowLeft{
	margin-left: <?php echo substr($main_size, 0, strlen($main_size)-2)-55;?>px;
	}
	
	.smallarrow-right{
	border-left: 5px solid #<?php echo $module_color; ?>;
	}

	.smallarrow-bottom{
	border-top: 5px solid #<?php echo $dropdown_color; ?>;
	}
	
	.Accordion-arrow-left{
	border-right: 5px solid #<?php echo $dropdown_color; ?>;
	}
	
	.Accordion-arrow-bottom{
	border-top: 5px solid #<?php echo $dropdown_color; ?>;
	}
	
	.Title{
	    background-color:#<?php echo $band_color; ?>;
	    outline: 1px dashed #<?php echo $dropdown_color; ?>;
	    -moz-outline: 1px dashed #?<php echo $dropdown_color; ?>;
	}
	
	.copyBrand a:link, .copyBrand a:visited, .copyBrand p{
	color: #<?php echo $band_color; ?>;
	}
	
	.date{
	color: #<?php echo $band_color; ?>;
	}

	/* Customised Share icons */ 
	
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
</style>
