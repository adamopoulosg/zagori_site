jQuery.noConflict();

jQuery(document).ready(function(){
	var items = jQuery('#stage li'),
		itemsByTags = {};
	
	// Looping though all the li items:
	items.each(function(i){
		var elem = jQuery(this),
			tags = elem.data('type').split(',');
		
           
		// Adding a data-id attribute. Required by the Quicksand plugin:
		elem.attr('data-id',i);
		jQuery.each(tags,function(key,value){
			
			// Removing extra whitespace:
			value = jQuery.trim(value);
			
			if(!(value in itemsByTags)){
				// Create an empty array to hold this item:
				itemsByTags[value] = [];
			}
			
			// Each item is added to one array per tag:
			itemsByTags[value].push(elem);
		});
		
	});
    

	// Creating the "Everything" option in the menu:
    var filtertext = jQuery('<span>'+WORD_FILTER_BY+'</span>').appendTo('#filter');
	createList(WORD_EVERYTHING,items);

	// Looping though the arrays in itemsByTags:
	jQuery.each(itemsByTags,function(k,v){
		createList(k,v);
	});
	
	jQuery('#filter a').live('click',function(e){
		var link = jQuery(this);
		
		link.addClass('active').siblings().removeClass('active');
		
		// Using the Quicksand plugin to animate the li items.
		// It uses data('list') defined by our createList function:
		
		jQuery('#stage').quicksand(link.data('list').find('li'));
		e.preventDefault();
	});
	
	jQuery('#filter a:first').click();
	
	function createList(text,items){
		
		// This is a helper function that takes the
		// text of a menu button and array of li items
		
		// Creating an empty unordered list:
		var ul = jQuery('<ul>',{'class':'hidden'});
		
		jQuery.each(items,function(){
			// Creating a copy of each li item
			// and adding it to the list:
			
			jQuery(this).clone().appendTo(ul);
		});

		ul.appendTo('#portfolio-container');

		// Creating a menu item. The unordered list is added
		// as a data parameter (available via .data('list'):
		
		var a = jQuery('<a>',{
			html: text,
			href:'#',
			data: {list:ul}
		}).appendTo('#filter');
	}
});