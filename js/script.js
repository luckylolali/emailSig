$( document ).ready(function() {

	var flickity_sig = $('.was-js-flickity').flickity({
        "resize": false, 
        "draggable": false
    });

	sigform_generate_signature();
        
		$('.sigform_slide_dot').on('click', function(event) {
			event.preventDefault();
			var slide_i = $(this).data('slide');
			console.log('sigform_slide_dot clicked. slide i: ' + slide_i );
			flickity_sig.flickity('select', slide_i);
		});

		$('.sigform_section_link').on('click', function(event) {
			event.preventDefault();
			var slide_i = $(this).data('slide');
			console.log('sigform_section_link clicked. slide i: ' + slide_i );
			flickity_sig.flickity('select', slide_i);
		});

		$( ".sigform_fld input" ).keyup(function() {
			sigform_generate_signature();
		});

		$( ".sigform_fld select" ).change(function() {

			if( $(this).attr('id') == 'sigform_organization' ){
				toggle_social_options();
			} 

			sigform_generate_signature();
		});

		$("#sigform_email").keyup(function (e) {
			// var parent_fild_id = $(this).data('parent_fld_id')
			if( $(this).val() == '' || validateEmail( $(this).val() ) ){
				$(this).parent().removeClass('sigform_email_error');
			}else{
				$(this).parent().addClass('sigform_email_error');
			}
		});

		$(".sigform_auto_tab").keydown(function (e) {
			// Allow: backspace, delete, tab, escape, enter and .
			// if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
			
			if ($.inArray(e.keyCode, [46, 9, 27, 13, 110, 190]) !== -1 ||
				 // Allow: Ctrl+A, Command+A
				(e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
				 // Allow: home, end, left, right, down, up
				(e.keyCode >= 35 && e.keyCode <= 40)) {
					 // let it happen, don't do anything
					 return;
			}

			if( e.keyCode == 8 ) {
				var prev_field_id = $(this).data('prev_field_id');
				console.log('current length: ' + $(this).val().length );
				console.log('prev_field_id:' + prev_field_id );
				if( prev_field_id != '' ){
					if( 0 == $(this).val().length ){
						e.preventDefault();
						$( '#' + prev_field_id ).focus();
					}else{
						return;
					}
				}else{
					return;
				}	
			}

			// Ensure that it is a number and stop the keypress
			if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
				e.preventDefault();
			}
		});

		$('.sigform_auto_tab').on('keyup', function(e) {
			console.log('auto_tab handler');
			
			var auto_tab_ok = false;
			var mode        = 'forward';

			if( e.keyCode >= 48 && e.keyCode <= 57 ) {
				auto_tab_ok = true;
			}

			if( e.keyCode >= 96 && e.keyCode <= 105 ) {
				auto_tab_ok = true;
			}

			if( e.keyCode == 8 ) {
				auto_tab_ok = true;
				mode        = 'reverse';
			}

			if( auto_tab_ok ){
				var next_field_id = $(this).data('next_field_id');
				var prev_field_id = $(this).data('prev_field_id');
				console.log('max_chars:' + $(this).data('max_chars') );
				console.log('current length: ' + $(this).val().length );
				console.log('next_field_id:' + next_field_id );
				console.log('prev_field_id:' + prev_field_id );
				if( mode == 'forward' && next_field_id != '' ){
					if( $(this).data('max_chars') == $(this).val().length ){
						$( '#' + next_field_id ).focus();
					}
				}
				if( mode == 'reverse' && prev_field_id != '' ){
					/*
					if( 0 == $(this).val().length ){
						$( '#' + prev_field_id ).focus();
					}
					*/
				}
			}
		});

		
		$('.modal-view').on('click', function() {
		  var ajax = $(this).attr('data-ajax');
		  if (ajax !== undefined) {
			$.get(ajax, function(data) {
			  $('body').addClass('body--no-scroll');
			  $('body').append(data);
			  $('.modal').show(0, function() {
				$('.modal').addClass('modal--active');
			  });
			});
		  }
		});

		// modal close
		$('body').on('click', '.modal__close', function() {
		  $('.modal').removeClass('modal--active');
		  setTimeout(function() {
			$('.modal').remove();
			$('body').removeClass('body--no-scroll');
		  }, transitionSpeed * 2);
		});
	});

	function show_slide( slide_i ) {
		flickity_sig.flickity( 'select', slide_i );
	}

	function toggle_social_options() {
		var selected_option = $('#sigform_organization').val();
		console.log('selected_option: ' + selected_option );
        $('#sigform_social_options_0' ).hide();
    	$('#sigform_social_options_1' ).hide();
		$('#sigform_social_options_2' ).hide();
		$('#sigform_social_options_3' ).hide();
		$('#sigform_social_options_4' ).hide();
		$('#sigform_social_options_5' ).hide();
		$('#sigform_social_options_6' ).hide();
		$('#sigform_social_options_7' ).hide();
        if (selected_option <= 6) {
			$('#sigform_social_options_' + selected_option).show();
		} else {
			$('#sigform_social_options_7' ).show();
		}

    
	}

	function download_signature() {
		$('#sigform_form').submit();
	}	

	function sigform_generate_signature(argument) {
		// initialize signature
		var html = $('#sigform_base').html();

		// step 1 fields
		if( $('#sigform_firstname').val() != '' ){
			html = html.replace("{firstname}", toTitleCase( $('#sigform_firstname').val() ) );
		}else{
			html = html.replace("{firstname}", 'First' );
		}
		
		if( $('#sigform_mi'       ).val() != '' ){
			html = html.replace("{mi}", toTitleCase( $('#sigform_mi').val() + '.' ) );
		}else{
			html = html.replace("{mi}", '' );
		}

		if( $('#sigform_lastname' ).val() != '' ){
			html = html.replace("{lastname}", toTitleCase( $('#sigform_lastname' ).val() ) );
		}else{
			html = html.replace("{lastname}", 'Last' );
		}

		if( $('#sigform_title_1').val() != '' ){
			html = html.replace("{title_1}", toTitleCase( $('#sigform_title_1').val() ) );
		}else{
			html = html.replace("{title_1}", 'Title' );
		}
		
		if( $('#sigform_title_2').val() != '' ) {
			html = html.replace("{title_2}", '<br>' + toTitleCase( $('#sigform_title_2').val() ) );
		}else{
			html = html.replace("{title_2}", '' );
		}

		if( $('#sigform_department_1').val() != '' ){
			if( $('#sigform_department_1_web_address').val() != '' && $('#sigform_department_1_web_address').val() != 'http://' ){
				html = html.replace("{department_1}", '<a href="' + $('#sigform_department_1_web_address').val() + '" style="color: #666666; text-decoration: none;">' + toTitleCase( $('#sigform_department_1').val() ) + '</a>' );
			}else{
				html = html.replace("{department_1}", toTitleCase( $('#sigform_department_1').val() ) );
			}
		}else{
			html = html.replace("{department_1}", 'Department' );
		}
		
		if( $('#sigform_department_2').val() != '' ) {
			if( $('#sigform_department_2_web_address').val() != '' && $('#sigform_department_2_web_address').val() != 'http://' ){
				html = html.replace("{department_2}", '<br><a href="' + $('#sigform_department_2_web_address').val() + '" style="color: #666666; text-decoration: none;">' + toTitleCase( $('#sigform_department_2').val() ) + '</a>' );
			}else{
				html = html.replace("{department_2}", '<br>' + toTitleCase( $('#sigform_department_2').val() ) );
			}
		}else{
			html = html.replace("{department_2}", '' );
		}

		if( $('#sigform_organization').val() != '' ){
            if( $('#sigform_organization').val() <= 6 ) {
			var org = $('#sigform_organization option:selected').text();
			html = html.replace("{organization}", org );
            } else {
                html = html.replace("{organization}", '' );
            }
		}else{
			html = html.replace("{organization}", 'Organization' );
		}

		// step 2 fields
		if( $('#sigform_building').val() != '' ) {
			html = html.replace("{building}", toTitleCase( $('#sigform_building').val() ) );
		}else{
			html = html.replace("{building}", 'Building' );
		}

		if( $('#sigform_suite').val() != '' ) {
			html = html.replace("{suite}", ' ' + toTitleCase( $('#sigform_suite').val() ) );
		}else{
			html = html.replace("{suite}", '' );
		}

		if( $('#sigform_office_1').val() != '' || $('#sigform_office_2').val() != '' || $('#sigform_office_3').val() != '' ) {
			var office_str  = '';
			var office_tel  = '';
			var office_link = '';

			if( $('#sigform_office_1').val() != '' ){
				office_str += $('#sigform_office_1').val();
				office_tel += $('#sigform_office_1').val();
			}

			if( $('#sigform_office_2').val() != '' ){
				if( office_str != '' ){
					office_str += '.';
				}
				office_str += $('#sigform_office_2').val();
				office_tel += $('#sigform_office_2').val();
			}

			if( $('#sigform_office_3').val() != '' ){
				if( office_str != '' ){
					office_str += '.';
				}
				office_str += $('#sigform_office_3').val();
				office_tel += $('#sigform_office_3').val();
			}
			office_link = '<a href="tel:+1' + office_tel + '" style="font-family: arial,helvetica; color: #666666; font-size: 12px;text-decoration:none;">' + office_str + '</a>';
			html = html.replace("{office}", office_link );
		}else{
			html = html.replace("{office}", '888.888.8888' );
		}

		if( $('#sigform_fax_1').val() != '' || $('#sigform_fax_2').val() != '' || $('#sigform_fax_3').val() != '' ) {
			var fax_str  = '';
			var fax_tel  = '';
			var fax_link = '';

			if( $('#sigform_fax_1').val() != '' ){
				fax_str += $('#sigform_fax_1').val();
				fax_tel += $('#sigform_fax_1').val();
			}

			if( $('#sigform_fax_2').val() != '' ){
				if( fax_str != '' ){
					fax_str += '.';
				}
				fax_str += $('#sigform_fax_2').val();
				fax_tel += $('#sigform_fax_2').val();
			}

			if( $('#sigform_fax_3').val() != '' ){
				if( fax_str != '' ){
					fax_str += '.';
				}
				fax_str += $('#sigform_fax_3').val();
				fax_tel += $('#sigform_fax_3').val();
			}

			fax_link = '<a href="tel:+1' + fax_tel + '" style="font-family: arial,helvetica; color: #666666; font-size: 12px; text-decoration:none;">' + fax_str + '</a>';
			html = html.replace("{fax}", fax_link );
			html = html.replace("{fax_lbl}", 'Fax' );
		}else{
			html = html.replace("{fax}", '' ); // 888-888-8888
			html = html.replace("{fax_lbl}", '' ); // 888-888-8888
		}

		if( $('#sigform_mobile_1').val() != '' || $('#sigform_mobile_2').val() != '' || $('#sigform_mobile_3').val() != '' ) {
			var mobile_str  = '';
			var mobile_tel  = '';
			var mobile_link = '';

			if( $('#sigform_mobile_1').val() != '' ){
				mobile_str += $('#sigform_mobile_1').val();
				mobile_tel += $('#sigform_mobile_1').val();
			}

			if( $('#sigform_mobile_2').val() != '' ){
				if( mobile_str != '' ){
					mobile_str += '.';
				}
				mobile_str += $('#sigform_mobile_2').val();
				mobile_tel += $('#sigform_mobile_2').val();
			}

			if( $('#sigform_mobile_3').val() != '' ){
				if( mobile_str != '' ){
					mobile_str += '.';
				}
				mobile_str += $('#sigform_mobile_3').val();
				mobile_tel += $('#sigform_mobile_3').val();
			}
			
			mobile_link = '<a href="tel:+1' + mobile_tel + '" style="font-family: arial,helvetica; color: #666666; font-size: 12px; text-decoration:none;">' + mobile_str + '</a>'

			html = html.replace("{mobile}", mobile_link );
			html = html.replace("{mobile_lbl}", 'Mobile' );

		}else{
			html = html.replace("{mobile}", '' );
			html = html.replace("{mobile_lbl}", '' );
		}

		

		if( $('#sigform_email').val() != '' ) {
			html = html.replace("{email_link}", $('#sigform_email').val() );
			html = html.replace("{email}", $('#sigform_email').val() );
		}else{
			html = html.replace("{email_link}", 'email@server.com' );
			html = html.replace("{email}", 'email@server.com' );
		}

		// step 3 fields
		if( $('#sigform_organization').val() != '' ){

			//console.log('#sigform_link_' + sigform_organization + '_facebook');
			var current = $('#sigform_organization').val();
			var sigform_organization = current <= 6 ? current : 7;

			if( $('#sigform_link_' + sigform_organization + '_facebook').val() != '' ) {
				html = html.replace("{link_facebook}", $('#sigform_link_' + sigform_organization + '_facebook').val() );
			}else{
				html = html.replace("{link_facebook}", 'http://www.facebook.com' );
			}

			if( $('#sigform_link_' + sigform_organization + '_twitter').val() != '' ) {
				html = html.replace("{link_twitter}", $('#sigform_link_' + sigform_organization + '_twitter').val() );
			}else{
				html = html.replace("{link_twitter}", 'http://www.twitter.com' );
			}

			if( $('#sigform_link_' + sigform_organization + '_instagram').val() != '' ) {
				html = html.replace("{link_instagram}", $('#sigform_link_' + sigform_organization + '_instagram').val() );
			}else{
				html = html.replace("{link_instagram}", 'http://www.instagram.com' );
			}

			if( $('#sigform_link_' + sigform_organization + '_linkedin').val() != '' ) {
				html = html.replace("{link_linkedin}", $('#sigform_link_' + sigform_organization + '_linkedin').val() );
			}else{
				html = html.replace("{link_linkedin}", 'http://www.linkedin.com' );
			}

			if( $('#sigform_link_' + sigform_organization + '_youtube').val() != '' ) {
				html = html.replace("{link_youtube}", $('#sigform_link_' + sigform_organization + '_youtube').val() );
			}else{
				html = html.replace("{link_youtube}", 'http://www.youtube.com' );
			}	

			if( $('#sigform_link_' + sigform_organization + '_pinterest').val() != '' ) {
				html = html.replace("{link_pinterest}", $('#sigform_link_' + sigform_organization + '_pinterest').val() );
			}else{
				html = html.replace("{link_pinterest}", 'http://www.pinterest.com' );
			}
		}				

		// step 4 fields

		// update previews
		$('#sigform_preview_step_1').html( html );
		$('#sigform_preview_step_2').html( html );
		$('#sigform_preview_step_3').html( html );
		$('#sigform_preview_step_4').html( html );
	}

	function copy_html(){

		var args = {};

		args.sigform_firstname                = $('#sigform_firstname').val();
		args.sigform_mi                       = $('#sigform_mi').val();
		args.sigform_lastname                 = $('#sigform_lastname').val();
		args.sigform_title_1                  = $('#sigform_title_1').val();
		args.sigform_title_2                  = $('#sigform_title_2').val();
		args.sigform_department_1             = $('#sigform_department_1').val();
		args.sigform_department_1_web_address = $('#sigform_department_1_web_address').val();
		args.sigform_department_2             = $('#sigform_department_2').val();
		args.sigform_department_2_web_address = $('#sigform_department_2_web_address').val();
		args.sigform_organization             = $('#sigform_organization').val();
		args.sigform_building                 = $('#sigform_building').val();
		args.sigform_suite                    = $('#sigform_suite').val();
		args.sigform_office_1                 = $('#sigform_office_1').val();
		args.sigform_office_2                 = $('#sigform_office_2').val();
		args.sigform_office_3                 = $('#sigform_office_3').val();
		args.sigform_fax_1                    = $('#sigform_fax_1').val();
		args.sigform_fax_2                    = $('#sigform_fax_2').val();
		args.sigform_fax_3                    = $('#sigform_fax_3').val();
		args.sigform_mobile_1                 = $('#sigform_mobile_1').val();
		args.sigform_mobile_2                 = $('#sigform_mobile_2').val();
		args.sigform_mobile_3                 = $('#sigform_mobile_3').val();
		args.sigform_email                    = $('#sigform_email').val();
		args.sigform_link_0_facebook          = $('#sigform_link_0_facebook').val();
		args.sigform_link_0_twitter           = $('#sigform_link_0_twitter').val();
		args.sigform_link_0_instagram         = $('#sigform_link_0_instagram').val();
		args.sigform_link_0_linkedin          = $('#sigform_link_0_linkedin').val();
		args.sigform_link_0_youtube           = $('#sigform_link_0_youtube').val();
		args.sigform_link_0_pinterest         = $('#sigform_link_0_pinterest').val();
		args.sigform_link_1_facebook          = $('#sigform_link_1_facebook').val();
		args.sigform_link_1_twitter           = $('#sigform_link_1_twitter').val();
		args.sigform_link_1_instagram         = $('#sigform_link_1_instagram').val();
		args.sigform_link_1_linkedin          = $('#sigform_link_1_linkedin').val();
		args.sigform_link_1_youtube           = $('#sigform_link_1_youtube').val();
		args.sigform_link_1_pinterest         = $('#sigform_link_1_pinterest').val();
		args.sigform_link_2_facebook          = $('#sigform_link_2_facebook').val();
		args.sigform_link_2_twitter           = $('#sigform_link_2_twitter').val();
		args.sigform_link_2_instagram         = $('#sigform_link_2_instagram').val();
		args.sigform_link_2_linkedin          = $('#sigform_link_2_linkedin').val();
		args.sigform_link_2_youtube           = $('#sigform_link_2_youtube').val();
		args.sigform_link_2_pinterest         = $('#sigform_link_2_pinterest').val();
		args.sigform_link_3_facebook          = $('#sigform_link_3_facebook').val();
		args.sigform_link_3_twitter           = $('#sigform_link_3_twitter').val();
		args.sigform_link_3_instagram         = $('#sigform_link_3_instagram').val();
		args.sigform_link_3_linkedin          = $('#sigform_link_3_linkedin').val();
		args.sigform_link_3_youtube           = $('#sigform_link_3_youtube').val();
		args.sigform_link_3_pinterest         = $('#sigform_link_3_pinterest').val();
		args.sigform_link_4_facebook          = $('#sigform_link_4_facebook').val();
		args.sigform_link_4_twitter           = $('#sigform_link_4_twitter').val();
		args.sigform_link_4_instagram         = $('#sigform_link_4_instagram').val();
		args.sigform_link_4_linkedin          = $('#sigform_link_4_linkedin').val();
		args.sigform_link_4_youtube           = $('#sigform_link_4_youtube').val();
		args.sigform_link_4_pinterest         = $('#sigform_link_4_pinterest').val();
		args.sigform_link_5_facebook          = $('#sigform_link_5_facebook').val();
		args.sigform_link_5_twitter           = $('#sigform_link_5_twitter').val();
		args.sigform_link_5_instagram         = $('#sigform_link_5_instagram').val();
		args.sigform_link_5_linkedin          = $('#sigform_link_5_linkedin').val();
		args.sigform_link_5_youtube           = $('#sigform_link_5_youtube').val();
		args.sigform_link_5_pinterest         = $('#sigform_link_5_pinterest').val();
		args.sigform_link_6_facebook          = $('#sigform_link_6_facebook').val();
		args.sigform_link_6_twitter           = $('#sigform_link_6_twitter').val();
		args.sigform_link_6_instagram         = $('#sigform_link_6_instagram').val();
		args.sigform_link_6_linkedin          = $('#sigform_link_6_linkedin').val();
		args.sigform_link_6_youtube           = $('#sigform_link_6_youtube').val();
		args.sigform_link_6_pinterest         = $('#sigform_link_6_pinterest').val();
		args.sigform_link_7_facebook          = $('#sigform_link_7_facebook').val();
		args.sigform_link_7_twitter           = $('#sigform_link_7_twitter').val();
		args.sigform_link_7_instagram         = $('#sigform_link_7_instagram').val();
		args.sigform_link_7_linkedin          = $('#sigform_link_7_linkedin').val();
		args.sigform_link_7_youtube           = $('#sigform_link_7_youtube').val();
		args.sigform_link_7_pinterest         = $('#sigform_link_7_pinterest').val();
		args.sigform_link_8_facebook          = $('#sigform_link_8_facebook').val();
		args.sigform_link_8_twitter           = $('#sigform_link_8_twitter').val();
		args.sigform_link_8_instagram         = $('#sigform_link_8_instagram').val();
		args.sigform_link_8_linkedin          = $('#sigform_link_8_linkedin').val();
		args.sigform_link_8_youtube           = $('#sigform_link_8_youtube').val();
		args.sigform_link_8_pinterest         = $('#sigform_link_8_pinterest').val();
		args.sigform_link_9_facebook          = $('#sigform_link_9_facebook').val();
		args.sigform_link_9_twitter           = $('#sigform_link_9_twitter').val();
		args.sigform_link_9_instagram         = $('#sigform_link_9_instagram').val();
		args.sigform_link_9_linkedin          = $('#sigform_link_9_linkedin').val();
		args.sigform_link_9_youtube           = $('#sigform_link_9_youtube').val();
		args.sigform_link_9_pinterest         = $('#sigform_link_9_pinterest').val();
		args.sigform_link_10_facebook         = $('#sigform_link_10_facebook').val();
		args.sigform_link_10_twitter          = $('#sigform_link_10_twitter').val();
		args.sigform_link_10_instagram        = $('#sigform_link_10_instagram').val();
		args.sigform_link_10_linkedin         = $('#sigform_link_10_linkedin').val();
		args.sigform_link_10_youtube          = $('#sigform_link_10_youtube').val();
		args.sigform_link_10_pinterest        = $('#sigform_link_10_pinterest').val();
		args.sigform_link_11_facebook         = $('#sigform_link_11_facebook').val();
		args.sigform_link_11_twitter          = $('#sigform_link_11_twitter').val();
		args.sigform_link_11_instagram        = $('#sigform_link_11_instagram').val();
		args.sigform_link_11_linkedin         = $('#sigform_link_11_linkedin').val();
		args.sigform_link_11_youtube          = $('#sigform_link_11_youtube').val();
		args.sigform_link_11_pinterest        = $('#sigform_link_11_pinterest').val();
		args.sigform_link_12_facebook         = $('#sigform_link_12_facebook').val();
		args.sigform_link_12_twitter          = $('#sigform_link_12_twitter').val();
		args.sigform_link_12_instagram        = $('#sigform_link_12_instagram').val();
		args.sigform_link_12_linkedin         = $('#sigform_link_12_linkedin').val();
		args.sigform_link_12_youtube          = $('#sigform_link_12_youtube').val();
		args.sigform_link_12_pinterest        = $('#sigform_link_12_pinterest').val();

		var configuration = {};

		$.post(
			"sigform_preview.php", 
			args,
			function( response ){
				console.log( response );
				if( response.status == 'OK' ){
					$('#preview_html_code').text( response.content );
					$('#preview_html_code').focus().select();
					$('#preview_hidden_link').click();
					// $.featherlight( escapeHtml( response.content ) );
				}else{
					alert( response.msg );
				}
			},
			'json'
		);
	}

	/*
	function escapeHtml(text) {
		var map = {
			'&': '&amp;',
			'<': '&lt;',
			'>': '&gt;',
			'"': '&quot;',
			"'": '&#039;'
		};

		return text.replace(/[&<>"']/g, function(m) { return map[m]; });
	}
	*/

	function toTitleCase( string ){
		// \u00C0-\u00ff for a happy Latin-1
		return string.toLowerCase().replace(/_/g, ' ').replace(/\b([a-z\u00C0-\u00ff])/g, function (_, initial) {
			return initial.toUpperCase();
		}).replace(/(\s(?:de|of|and|a|o|e|da|do|em|ou|[\u00C0-\u00ff]))\b/ig, function (_, match) {
			return match.toLowerCase();
		});
	}

	function validateEmail( email ){
		var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}