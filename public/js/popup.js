$(document).ready(function(){
	// Open and close modal window ---
	$('body').on('click', '.openPopup_js', function(){
		$('.popup_js').addClass('active');
	});
	$('body').on('click', '.closePopup_js', function(){
		$('.popup_js').removeClass('active');
	});
	// --- Open and close modal window

	// Registration Popup ---
	$('body').on('click', '.openRegistrationPopup_js', function(){
		$('.registrationPopup_js').addClass('active');
	});
	$('body').on('click', '.closePopupRegistration_js', function(){
		$('.registrationPopup_js').removeClass('active');
	});
	// --- Registration Popup

	// Authorization Popup ---
	$('body').on('click', '.openAuthorizationPopup_js', function(){
		$('.authorizationPopup_js').addClass('active');
	});
	$('body').on('click', '.closePopupAuthorization_js', function(){
		$('.authorizationPopup_js').removeClass('active');
	});
	// --- Authorization Popup

	// Open m4mObject Popup Set ---
	$('body').on('click', '.openNewEntityPopup_js', function(){
		$('.newEntity_js').addClass('active');
	});
	$('body').on('click', '.closeNewEntity_js', function(){
		$('.newEntity_js').removeClass('active');

		$(this).closest('.newEntity_js').removeClass('newEntity_chagesWidth');
		$('.screen.screen_active').removeClass('screen_active');
		$('.screen[data-step="1"]').addClass('screen_active');
	});
	// --- Open m4mObject Popup Set

	// Add m4mObject Popup Set ---
	$('body').on('click', '.nextStepBtn_js', function(e){
		e.preventDefault();

		var $parent = $(this).closest('.screen_js'),
			step = $parent.data('step');

		switch (step) {
			case 1:
                $('#error_m4mEntityName_massage').empty();
                if ($('input[name="m4mEntityName"]').val() !== '') {
                    $parent.removeClass('screen_active').next().addClass('screen_active');
                    $parent.closest('.newEntity_js').addClass('newEntity_chagesWidth');
				} else {
                    $('#error_m4mEntityName_massage').html('<span class="text-danger">Поле обязательное для заполнения</span>');
				}
				break;
            case 2:
                $('#error_deviceId').empty();
                if ($('input[name="deviceId"]').val() !== '') {
                    deviceIdCheck($parent);
                } else {
                    $('#error_deviceId').html('<span class="text-danger">Поле обязательное для заполнения</span>');
                }
                break;
            case 3:
                $('#error_deviceMac').empty();
                if ($('input[name="deviceMac"]').val() !== '') {
                    $parent.removeClass('screen_active').next().addClass('screen_active');
                } else {
                    $('#error_deviceMac').html('<span class="text-danger">Поле обязательное для заполнения</span>');
                }
                break;
            case 4:
                if ($('input[name="accept_the_terms"]').prop('checked')) {
                    $parent.removeClass('screen_active').next().addClass('screen_active');
                } else {
                }
                break;
            case 5:
                	$parent.closest('.newEntity_js').removeClass('newEntity_chagesWidth');
                	step = 1;
                	$('.newEntity_js').removeClass('active');
                	$('.screen[data-step="1"]').addClass('screen_active');
                break;
		}
        //
		// if (step >= 1) {
		// 	$parent.closest('.newEntity_js').addClass('newEntity_chagesWidth');
		// }else{
		// 	$parent.closest('.newEntity_js').removeClass('newEntity_chagesWidth');
		// }
        //
		// if (step == 1 && $('input[name="m4mEntityName"]').val() == 1) {
		// 	$parent.removeClass('screen_active');
		// 	$('.screen_error_js').addClass('screen_active');
		// }else{
		// 	$parent.removeClass('screen_active').next().addClass('screen_active');
		// }
        //
		// if (step == 5) {
		// 	$parent.closest('.newEntity_js').removeClass('newEntity_chagesWidth');
		// 	step = 1;
		// 	$('.newEntity_js').removeClass('active');
		// 	$('.screen[data-step="1"]').addClass('screen_active');
		// }

	});

	$('body').on('change', '#accept-the-terms', function(){
		if ($(this).is(':checked')) {
			$(this).closest('.checkboxBlock').find('.icon-ok').addClass('active');
		}else{
			$(this).closest('.checkboxBlock').find('.icon-ok').removeClass('active');
		}
	});

	$('body').on('click', 'input[name="provider"]', function(){

		$('.radioBtnsBlock label.active').removeClass('active');
		$(this).closest('.form-check').find('label').addClass('active');

	});

	// --- Add m4mObject Popup Set

});

function deviceIdCheck($parent) {
    $.ajax({
        type: "POST",
        url: "/object/check",
        data: $("#createEntity").serialize(),
        cache: false,
        dataType: "json",
        success: function(data){
            if(data.error==0){
                $parent.removeClass('screen_active').next().addClass('screen_active');
            } else {
                $('#error_deviceId').html('<span class="text-danger">Идентификатор не валидный</span>');
            }
        }
    });
}