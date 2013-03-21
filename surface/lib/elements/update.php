<?php
/**
 * @package		Surface.site
 * @subpackage	Templates.Surface
 * @copyright	Copyright (C) 2009 - 2012 Blechdose. All rights reserved.
 */

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldUpdate extends JFormField {
	protected $type = 'Update';

	protected function getInput() {
		return '<div id="surface_templates_updates"></div>';
	}
}

?>