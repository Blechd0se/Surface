<?php
/**
 * @package		Surface.site
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2012 Blechdose. All rights reserved.
 */

defined('_JEXEC') or die;

//Parameter
$date                                            = ($this->params->get("date", 1)  == 0)?"false":"true";
$javascript                                      = ($this->params->get("javascript", 1)  == 0)?"false":"true";
$mootools                                        = ($this->params->get("mootools", 1)  == 0)?"false":"true";
$timerrun                                        = ($this->params->get("timerrun", 1)  == 0)?"false":"true";
$beta_warnung                                    = ($this->params->get("beta_warnung", 1)  == 0)?"false":"true";
$kompression                                     = ($this->params->get("kompression", 1)  == 0)?"false":"true";
$fontsizeparam                                   = ($this->params->get("fontsizeparam", 1)  == 0)?"false":"true";
$scrolling                                       = ($this->params->get("scrolling", 1)  == 0)?"false":"true";
$page_title_default                              = ($this->params->get("page_title_default", 1)  == 0)?"false":"true";
$mainsheet_rounded                               = ($this->params->get("mainsheet_rounded", 1)  == 0)?"false":"true";
$link_animation                                  = ($this->params->get("link_animation", 1)  == 0)?"false":"true";
$bild_animation                                  = ($this->params->get("bild_animation", 1)  == 0)?"false":"true";
$javascript_slider                               = ($this->params->get("javascript_slider", 1)  == 0)?"false":"true";
$mobil_support                                   = $this->params->get("mobil_support");
$size                                            = $this->params->get("size");
$javascript_slider_plugin_picture1               = $this->params->get("javascript_slider_plugin_picture1");
$javascript_slider_plugin_picture2               = $this->params->get("javascript_slider_plugin_picture2");
$javascript_slider_plugin_picture3               = $this->params->get("javascript_slider_plugin_picture3");
$javascript_slider_plugin_picture1_link          = $this->params->get("javascript_slider_plugin_picture1_link");
$javascript_slider_plugin_picture2_link          = $this->params->get("javascript_slider_plugin_picture2_link");
$javascript_slider_plugin_picture3_link          = $this->params->get("javascript_slider_plugin_picture3_link");
$javascript_slider_plugin_picture1_text          = $this->params->get("javascript_slider_plugin_picture1_text");
$javascript_slider_plugin_picture2_text          = $this->params->get("javascript_slider_plugin_picture2_text");
$javascript_slider_plugin_picture3_text          = $this->params->get("javascript_slider_plugin_picture3_text");
$left_column                                     = $this->params->get("left_column");
$right_column                                    = $this->params->get("right_column");
$main_column                                     = $this->params->get("main_column");
$main_size                                       = $this->params->get("main_size");
$con_bg_color                                    = $this->params->get("con_bg_color");
$module_color                                    = $this->params->get("module_color");
$band_color                                		 = $this->params->get("band_color");
$dropdown_color                                  = $this->params->get("dropdown_color");
$starting_color                                  = $this->params->get("starting_color");
$end_color                                       = $this->params->get("end_color");
$font_content                                    = $this->params->get("font_content");
$page_title                                      = $this->params->get("page_title");
$ie_support                                      = $this->params->get("ie_support");
$image                                           = $this->params->get("image");
$anzeige_dauer                                   = $this->params->get("anzeige_dauer");

$copyright = "true";
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;

?>