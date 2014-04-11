
/* Handles JS needed for the main default header */
$(document).ready(function(){
	var searchRow = $("#searchRow");
	var searchRowTextInput = searchRow.find(":text");

	/* CSS slide the search row into place */
	$('#searchIconOpen').click(function() {
		var clone = searchRow.clone()
			.css({'position':'absolute','visibility':'hidden','height':'auto'})
			.addClass('searchRowClone')
			.appendTo('body');
		
		var searchRowClone = $(".searchRowClone");
		var newHeight = searchRowClone.height();
		searchRowClone.remove();
		searchRow.css('height', '75px');
		/* Auto focus the text input field */
		searchRowTextInput.focus();
	});

	/* Close the search row clicking the close icon */
	var searchIconClose = $("#searchIconClose");
	searchIconClose.click(function(){
		searchRow.css('height','0');
	});
	/* Close the search row if lose focus */
	searchRowTextInput.blur(function(){
		 searchIconClose.click();
	});

	/* Init the Bootstrap dropdown */
	$('.dropdown-toggle').dropdown();
	var defaultHeaderNavTabsItemClass = $(".default-header-nav-tabs-item");

	/* Show dropdown on mouseover */
	defaultHeaderNavTabsItemClass.mouseover(function(){
		$(this).addClass("open");
	});
	/* Hide dropdown on mouseover */
	defaultHeaderNavTabsItemClass.mouseout(function(){
		$(this).removeClass("open");
	});
});
