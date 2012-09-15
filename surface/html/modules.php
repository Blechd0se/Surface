<?php
defined('_JEXEC') or die('Restricted access');


/*
 * Module chrome that wraps the module in a definition list
 */
function modChrome_accordion($module, &$params, &$attribs)
{ 
		$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	if (!empty ($module->content)) { ?>
<div class="moduletable<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
<?php if ($module->showtitle) { ?> <h<?php echo $headerLevel; ?>><span
	class="backh"><span class="backh2"><span class="backh3"><?php echo $module->title; ?></span></span></span></h><?php echo $headerLevel; ?>>
<?php }; ?> <?php echo $module->content; ?></div>
<?php };
}

