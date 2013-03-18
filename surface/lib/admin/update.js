
window.addEvent("load",function(){
	// get the updates
	getUpdates();
	
// function to generate the updates list
function getUpdates() {
	document.id('jform_params_surface_updates-lbl').destroy(); // Löschen für korrekte Anzeige
	var update_url = 'http://www.blechdose-live.de/update/surface/updates.raw';
	var update_div = document.id('surface_templates_updates');
	update_div.innerHTML = '<div id="template_update_div"><span id="template_loader"></span>Loading Update...</div>';
	
	new Asset.javascript(update_url,{
		id: "new_script",
		onload: function(){
			content = '';
			$TEMPLATE_UPDATE.each(function(el){
				content += '<li><span><strong>Version: </strong> ' + el.version + ' </span><span><strong>Date: </strong> ' + el.date + ' </span><span><a href="' + el.link + '" target="_blank">Download</a></span></li>';
			});
			update_div.innerHTML = '<ul>' + content + '</ul>';
			if(update_div.innerHTML == '<ul></ul>') update_div.innerHTML = '<p>Kein Update verfügbar</p>';	
		}
	});
}
});