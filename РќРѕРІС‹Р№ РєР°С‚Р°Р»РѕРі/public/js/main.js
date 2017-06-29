function dataCheck(field){
    var check=$("#"+field).val();
    if (check==""){
        $("#"+field).css("border-bottom","2px solid red");
        return false;
    } else {
        $("#"+field).css("border-bottom","2px solid green");
        return true;
    }
}
$(document).ready(function(){
    // $(".reg").on('click', function (e) {
    //     e.preventDefault();
    //
    //     var password = $("#newUserPassword").val();
    //     var name = $("#newUserFname").val();
    //     var surname = $("#newUserSname").val();
    //     var email = $("#newUserEmail").val();
    //     if (valueX != valueY) {
    //         alert("Passwords do not match.");
    //         return false;
    //     } else {
    //     	return
		// }
    // });

	function loginForm() {
		$('.authorizationPopup_js').show();
    }
  
    var hash = window.location.hash;
    if (hash.substring(1) === 'login-form') {
        loginForm();
    }

	$('.closePopup ').on('click', function (e) {
		e.preventDefault();
		$('.authorizationPopup_js').hide();
    });



	// Open and close mobile menu ---
	$('body').on('click', '.mobileMenuBtn_js, .mobile_active .menuPanel_js, .closeMenu__btn_js', function(){
		$('.headerMenu_js').toggleClass('mobile_active');

		if ( $('.headerMenu_js').hasClass('mobile_active') ) {
			$('body').css('overflow', 'hidden');

			if (window.outerHeight < 768) {
				$('.headerMenu__nav').css({
					'overflow': 'scroll'
				});
			}
		}else{
			$('body').css('overflow', 'scroll');
		}
	});
	// --- Open and close mobile menu

	// Контекстное меню на странице "Настройки" ---
	$('body').on('click', '.inspector__mobileBtns_js', function(){
		$(this).closest('.inspector__pannel').find('.inspector__btns_js').toggleClass('active');
		$('#substrate').toggleClass('contextMenu');
	});

	$('body').on('click', '.counterItem__mobileControls_js', function(){
		$(this).closest('.counterItem').find('.counterItem__controls').toggleClass('active');
		$('#substrate').toggleClass('contextMenu');
	});

	$('body').on('click', '#substrate.contextMenu', function(){
		$('.inspector__btns_js.active, .counterItem__controls.active').toggleClass('active');
		$('#substrate').toggleClass('contextMenu');
	});
	// --- Контекстное меню на странице "Настройки"

	if (window.outerWidth < 767) {
		$('.inspectors').find('button.btnStyle_сolorgray').each(function() {
			$( this ).removeClass('btnStyle_сolorgray').addClass('btnStyle_сolor').text('Добавить');
		});
		$('#addCounter').text('Добавить');
	}

	// Toggle tabs ---
	$(".tabs").on("click", ".tabs__item:not(.active)", function() {
		var $tabsBlockJs = $(this).parents(".tabs_block_js");
		toggleTabs($tabsBlockJs, $(this));
	});
	// --- Toggle tabs


	// Show/Hide financeArchive block on the page 'Finance'.
	$('body').on('click', '.toShowArchive_js', function(){
		$(this).closest('.archiveMarker_js').toggleClass('showArchive');
	});




	// Валидация формы регистрации ---

	$('body').on('focusout', '.input_validator_js', function(){
		validationOfRegistration($(this));
	});

	function validationOfRegistration(el){
		var thisInput = el,
			str = el.val(),
			errorMsg,
			type = el.data('input-validate');

		var email_reg = /(^([\w\.]+)@([\w]+)\.([\w]+)$)|(^$)/gi;

		switch(type){
			case 'fname':
				str.length > 2 
					? validateSuccess(thisInput)
					: function(){
						if (str.length < 3) errorMsg = 'The name must be at least 3 characters';
						
						validateError(thisInput, errorMsg);
					}();
			break;
			case 'sname':
				str.length > 2
					? validateSuccess(thisInput)
					: function(){
						if (str.length < 3) errorMsg = 'The surname must be at least 3 characters';

						validateError(thisInput, errorMsg);
					}();
			break;
			case 'email':
				email_reg.test(str) ? validateSuccess(el) : validateError(el, 'The email must be a valid email address');
			break;
			case 'password':
				str.length > 5 ? validateSuccess(el) : validateError(el, 'The password must be at least 6 characters');
			break;
			case 'confirmpassword':
				str.length > 5 ? validateSuccess(el) : validateError(el, 'The password must be at least 6 characters');
			break;
		}
	}

	function validateSuccess(el){
		el.closest('.form-group').addClass('has-success').removeClass('has-danger').find('.errorMsg_js').text('');
	}

	function validateError(el, errorMsg){
		var errorMsg = errorMsg;
		if (el.val().length < 1) errorMsg = 'This is a required field';
		el.closest('.form-group').addClass('has-danger').removeClass('has-success').find('.errorMsg_js').text(errorMsg);
	}

	// --- Валидация формы регистрации


	function toggleTabs(tabsBlock, el) {
		el.addClass("active").siblings().removeClass("active");

		tabsBlock.find(".box_js").eq( el.index()).show(1, function() {
			el.addClass("open_tab");
		}).siblings(".box_js").hide(1, function() {
			el.removeClass("open_tab");
		})
	}

    function updateController() {
        $.ajax({
            url: '/object/update/json',
            dataType: 'json',
            data: {
            	ajax: true
			},
            type:'GET',
            success:function(html){
                var data = JSON.parse(html);
                $('#hot-water b').html(data.response[0].value);
            }
        });
    }
    updateController();
    setInterval(updateController , 10000);

	$('#search_controller_button').on('click', function (e) {

        //e.stopPropagation(e);
        e.preventDefault(e);

		var controllerID = $('#search_controller_field').val();
        var m4mEntityName = $('#m4mEntityName').val();
		var _token = $('#token').val();


        if(m4mEntityName === ""){
            alert('Заполните поле Название');
            return false;
        }
        if(controllerID === ""){
            alert('Пустой контроллер');
            return false;
        }

        $.ajax({
            type: "POST",
            url: "/object/update/add",
            data: {
                'controller' : controllerID,
                '_token' : _token
            },
            cache: false,
            dataType: "json",
            success: function(html){
                var data = jQuery.parseJSON(html);
                if(data.response === null) {
                    //$('.add_controller').hide();
                    //$('.add_device').hide();
                    $(".screen_active").removeClass('screen_active');
					$('.screen_error').addClass('screen_active');

				}

				//return false;
                // if(data.response === null) {
                 //    alert('Не существующий контроллер');
                // } else {
                 //    return true;
				// }


            }
        });
	});

    $("#start").on('click', function () {

		var m4mEntityName = $('#m4mEntityName').val();
		var search_controller_field = $('#search_controller_field').val();
		var deviceId = $('#deviceId').val();
		var deviceMac = $('#deviceMac').val();
		var city = $('#city').val();
        var _token = $('#token').val();

        $.ajax({
            type: "POST",
            url: "/object/save",
            data: {
                'm4mEntityName' : m4mEntityName,
                'search_controller_field' : search_controller_field,
                'deviceId' : deviceId,
                'deviceMac' : deviceMac,
                'city' : city,
                '_token' : _token
            },
            cache: false,
            dataType: "json",
            success: function(html){
                var data = jQuery.parseJSON(html);
            }
        });
		location.reload();
    });

    $('.step2').on('click', function () {
        var deviceId = $('#deviceId').val();
        if(deviceId === ""){
            alert('Заполните поле');
            return false;
        }
    });








    $('.step3').on('click', function () {
        var deviceId = $('#deviceId').val();
        if(deviceId === ""){
            alert('Заполните поле');
            return false;
        }
    });



});