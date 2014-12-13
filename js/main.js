$(document).ready(function(){

	var dialogAddProject = $('#dialog-add-project');

	$('.add-work-item-link').on('click', function(e){
		e.preventDefault();
		dialogAddProject.show();
	});

	$('#dialog-add-project-but-close').on('click', function(e){
		dialogAddProject.hide();
	});

	$('.modal-back').on('click', function(e){
		dialogAddProject.hide();
	});

	$('#add-project').on('submit', function(e){
		e.preventDefault();
		dialogAddProject.hide();
	});

});