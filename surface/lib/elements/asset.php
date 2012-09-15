<?php

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField {
        protected $type = 'Asset';

        protected function getInput() {
                $doc = JFactory::getDocument();
				// Load some Scripts:
                $doc->addScript(JURI::root().$this->element['path'].'update.js');
				$doc->addScript(JURI::root().$this->element['path'].'helpers/jquery.js');
				$doc->addScript(JURI::root().$this->element['path'].'helpers/jscolor.js');
				$doc->addScript(JURI::root().$this->element['path'].'helpers/jquery.uniform.min.js');
				// Stylesheet for admin:
                $doc->addStyleSheet(JURI::root().$this->element['path'].'admin.css');        
                return null;
        }
}