$(document).ready(function() {
	try {
		$('.collapsible').collapsible();
		$('select').formSelect();
		$('.dropdown-trigger').dropdown();
		$('.slider').slider();
		$('.modal').modal();
		$('.sidenav').sidenav();
		$('.datepicker').datepicker({
			yearRange: [1950,2019],
		});	
	} catch (error) {
	}
});