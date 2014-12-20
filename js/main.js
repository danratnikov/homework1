$(document).ready(function(){

	var dialogAddProject = $('#dialog-add-project');
	var addProjectForm = $('#add-project');
	var authForm = $('#auth_form');

	$('.add-work-item-link').on('click', function(e){
		e.preventDefault();
		dialogAddProject.show();
	});

	$('#dialog-add-project-but-close').on('click', function(e){
		dialogAddProject.hide();
	});

	$("#input-file").on('change', function(e){
		$('#filename').val(e.target.value);
	});

	$('form').on('submit', function(e){
		e.preventDefault();


		var form = $(this),
				inputs = form.find('input[type="text"], input[type="email"], textarea'),
				valid = true;


		$.each(inputs, function(i, val){

			if (val.value.length === 0) {
				var title = "Введите " + $(val).data('name');
				$(val).tooltip({trigger: "manual", title: title, placement: "left" }).tooltip('show').addClass('input-error');
				valid = false;
			}
		});

		if(valid) {

			$.ajax({
			  type: "POST",
			  url: form.attr('id') + ".php",
			  data: form.serialize()
			})
			.done(function( msg ) {
			  
			});
		} else {
			
		}

	});

	$('input, textarea').on('focus', function(e){
		$(e.target).removeClass('input-error').tooltip('destroy');
	});

	$('#clear_button').on('click', function(){
		var fields = $('#sendmail').find('#input-name, #input-email, #input-message');
		console.log(fields);
		$.each(fields, function(i, val){
			$(val).val('');
		});
	});

});



