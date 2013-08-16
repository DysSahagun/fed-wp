( function( $ ) {

	( function() {
		// Exclude this elements in activating main nav
		$('.menu-toggle').click(function(e){
			e.stopPropagation();
		});
		
		// Hide main nav
		function userMenuHide() {
			$('#site-navigation').removeClass('toggled-on');
		};
		
		// Hide main nav when anywhere on the document is activated
		$(document).click(function(){
			userMenuHide();
		});
		
		// Hide main nav when ESC key is pressed
		$(document).keydown(function(e) {
			if (e.keyCode == 27) {
				userMenuHide();
			}
		});
	} )();

} )( jQuery );