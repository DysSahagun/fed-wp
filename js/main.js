$('#js-main-nav').addClass('main-nav-hide');
	
$('#js-menu-toggle').click(function(e) {
	$('#js-main-nav').toggleClass('main-nav-hide main-nav-show');
	e.preventDefault();
});

// Exclude these elements in activating main nav
$('#js-main-nav').click(function(e){
	e.stopPropagation();
});

// Hide main nav
function userMenuHide() {
	$('#js-main-nav').addClass('main-nav-hide');
	$('#js-main-nav').removeClass('main-nav-show');
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

$('#js-launch-dialog').click(function(e) {
	showDialog();
	showGenericDialog();
	e.preventDefault();
});

$('.dismiss-link, .cancel-link').click(function(e) {
	hideDialog();
	e.preventDefault();
});

function showDialog() {
	$('#dialog').addClass('active');
	$('#overlay').addClass('active');
	$('html').addClass('dialog-active');
}

function hideDialog() {
	$('#dialog').removeClass('active');
	$('#overlay').removeClass('active');
	$('html').removeClass('dialog-active');
}

function showGenericDialog() {
	$('#generic-dialog').addClass('active');
}

$('.notif .dismiss-link').click(function(e) {
	$(this).parents('.notif').fadeOut();
	e.preventDefault();
});