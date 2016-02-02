<? $show_view_download_buttons = false; ?>

	<link rel="stylesheet" href="css/flickity.min.css" media="screen">
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="js/flickity.pkgd.min.js"></script>
	<script src="js/featherlight.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="//cdn.rawgit.com/noelboss/featherlight/1.3.5/release/featherlight.min.css" type="text/css" rel="stylesheet" />
	<style type="text/css">
		html{
			padding: 0;
			margin: 0;
		}
		body{
			padding: 0;
			margin: 0;
		}
		#sigform_container{
			width: 1278px;
			height: 580px;
			overflow: hidden;
			margin: 0px auto;
		}
		#sigform_container input:focus,
		#sigform_container select:focus,
		#sigform_container textarea:focus,
		#sigform_container .sigform_preview a {
		  outline-color: transparent;
		  outline-style: none;
		}
		.sigform_cell{
			font-family: 'Open Sans', sans-serif;
			font-size: 16px;
			width:  1278px;
			height:  580px;
			background: #fff;
		}
		.sigform_left{
			float: left;
			height: 580px;
			width: 639px;
			background: #efeff1;
		}
		.sigform_left_padding{
			padding: 25px 50px;
		}
		.sigform_left_contents{
			padding: 25px;
		}
		.sigform_arrow{
			float: left;
			width: 24px;
			height: 580px;
			background: #fff url('images/sigform_arrow.gif') no-repeat center center;
		}
		.sigform_right{
			float: left;
			height: 580px;
			width: 615px;
			background: #fff;
		}
		.sigform_right:after {
			content:'';
			display:block;
			clear: both;
			padding-bottom: 20px;
		}
		.sigform_right_pad{
			padding: 18px;
		}
		.sigform_steps{
			margin: 0;
			padding: 0;
			list-style-type: none;
			font-size: 13px;
		}
		.sigform_steps li{
			float: left;
			color: #666666;
			margin-right: 30px;
		}

		.sigform_steps li.current{
			font-weight: bold;
		}
		.sigform_steps li.sigform_last_step{
			margin-right: 0;
		}

		.sigform_steps li a,
		.sigform_steps li a:visited,
		.sigform_steps li a:active{
			color: #666666;
			text-decoration: none;
		}
		.sigform_steps li a:hover{
			color: #696969;
			text-decoration: none;
		}
		.sigform_steps:after {
			content:'';
			display:block;
			clear: both;
			padding-bottom: 20px;
		}
		.sigform_current_step{
			/* franklin itc pro thin */
			font-size: 36px;
			color: #000;
			line-height: 36px;
		}
		.sigform_current_step span{
			display: inline-block;
			background: #fff;
			padding: 10px;
			border-radius: 36px;
			margin-right: 15px;
			width: 56px;
			text-align: center;
		}
		.sigform_lbl{
			font-size: 14px;
		}
		.sigform_lbl span{
			color: #a82a27;
		}
		.sigform_fld{
			border: 1px solid #999999;
			background: #fff;
		}
		.sigform_fld input{
			padding: 5px;
			margin: 0;
			border: 0;
			background: none;
			box-sizing: border-box;
			width: 100%;
			font-size: 12px;
			line-height: 14px;
			color: #666;
		}
		.sigform_fld select{
			box-sizing: border-box;
			padding: 5px;
			margin: 0;
			border: 0;
			width: 100%;
			box-shadow: none;
			background-color: #fff;
			background-image: url('images/email-sig-dropdown-arrow.gif');
			background-position: right center;
			background-repeat:   no-repeat;
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			white-space: nowrap;
		}
		.clearfix{
			clear:both;
		}
		.sigform_row{
			margin-bottom: 10px;
		}
		.sigform_firstname{
			float: left;
			width: 182px;
			margin-right: 9px;
		}
		.sigform_mi{
			float: left;
			width: 52px;
			margin-right: 9px;
		}
		.sigform_lastname{
			float: left;
			width: 237px;
		}
		.sigform_lastname:after{
			content:'';
			display:block;
			clear: both;
		}
		.sigform_5050{
			float: left;
			width: 239px;
			margin-right: 9px;
		}
		.sigform_5050:nth-child(2) {
			margin-right: 0;
		}
		.no_right_margin{
			margin-right: 0;
		}

		.sigform_preview_title{
			color: #164d6d;
			font-weight: bold;
			font-size: 30px;
			margin-bottom: 40px;
		}
		.sigform_preview{
			padding-left: 185px;
			padding:right 20px;
			height: 430px;
		}
		.sigform_instruction_links,
		.sigform_instruction_links a,
		.sigform_instruction_links a:hover,
		.sigform_instruction_links a:visited,
		.sigform_instruction_links a:active {
			color: #164d6d;
			text-decoration: none;
			display: block;
			margin-bottom: 10px;
		}
		.sigform_btn_left{
			float: left;
			width: 50%;
		}
		.sigform_btn_right{
			float: left;
			width: 50%;
			text-align: right;
		}
		.sigform_btn_right:after {
			content:'';
			display:block;
			clear: both;
			padding-bottom: 20px;
		}
		.sigform_btn_left  a,
		.sigform_btn_left  a:visited,
		.sigform_btn_left  a:hover,
		.sigform_btn_left  a:active,
		.sigform_btn_right a,
		.sigform_btn_right a:visited,
		.sigform_btn_right a:hover,
		.sigform_btn_right a:active{
			display: inline-block;
			width: 172px;
			border: 1px solid #000;
			color: #000;
			padding: 10px;
			border-radius: 5px;
			text-align: center;
			text-decoration: none;
			font-weight: bold;
			line-height: 16px;
			font-size: 14px;
		}
		/*
		.sigform_fld input.sigform_phone_1,
		.sigform_fld input.sigform_phone_2{
			width: 54px;
			margin-right: 10px;
		}
		.sigform_fld input.sigform_phone_3{
			width: 54px;
			margin-right: 10px;
		}
		*/

		.sigform_phone_1{
			float: left;
			width: 54px;
			margin-right: 10px;
		}
		.sigform_phone_2{
			float: left;
			width: 54px;
			margin-right: 10px;
		}
		.sigform_phone_3{
			float: left;
			width: 111px;
		}
		.sigform_phone_3:after{
			content:'';
			display:block;
			clear: both;
		}
		.sigform_preview_status{
			text-align: center;
		}
		.instructions_box{
			width: 800px;
			font-family: 'Open Sans', sans-serif;
			font-size: 14px;
		}
		.instructions_box li{
			margin-bottom: 5px;
		}
		.instructions_title{
			font-size: 18px;
			margin-bottom: 20px;
			font-weight: bold;
		}
		.sigform_email_error{
			border-color: #f00;
		}

		@media only screen and ( max-width: 1278px ){
			#sigform_container{
				width: 1024px;
			}
			.sigform_cell{
				width:  1024px;
				font-size: 15px;
			}
			.sigform_left{
				width: 512px;
			}
			.sigform_left_padding{
				/*padding: 25px 50px;*/
			}
			.sigform_left_contents{
				/*padding: 25px;*/
			}
			.sigform_right{
				width: 488px;
			}
			.sigform_steps li{
				margin-right: 15px;
			    font-size: 11px;
			}

			.sigform_lbl{
				font-size: 12px;
			}
			.sigform_row{
				margin-bottom: 15px;
			}
			.sigform_firstname{
				width: 142px;
			}
			.sigform_mi{
				width: 52px;
			}
			.sigform_lastname{
				width: 150px;
			}
			.sigform_5050{
				width: 176px;
			}
			.sigform_preview{
				padding-left: 100px;
			}
			.sigform_btn_left  a,
			.sigform_btn_left  a:visited,
			.sigform_btn_left  a:hover,
			.sigform_btn_left  a:active,
			.sigform_btn_right a,
			.sigform_btn_right a:visited,
			.sigform_btn_right a:hover,
			.sigform_btn_right a:active{
				width: 152px;
				font-size: 12px;
			}
			.sigform_sm_full_row{
				width: 100%;
			}
			.sigform_sm_full_row .sigform_fld{
				max-width: 237px;
			}
		}
        
        /* hide disabled button */
        .flickity-prev-next-button:disabled {
            display: none;
        }
        
        /* adjust close icon */
        .featherlight-close-icon {
            line-height: 40px;
            width: 40px;
            font-size: 28px;
        }

		@media only screen 
		  and (min-device-width: 768px) 
		  and (max-device-width: 1024px) 
		  and (orientation: portrait) 
		  and (-webkit-min-device-pixel-ratio: 1) {

		  	#sigform_container{
		  		width: 768px;
		  		height: 700px;
		  	}
		  	.sigform_cell{
		  		width:  768px;
		  		height: 700px;
		  		font-size: 15px;
		  	}
		  	.sigform_left{
		  		width: 384px;
		  		height: 700px;
		  	}
		  	.sigform_left_padding{
		  		padding-right: 15px;
		  		padding-top: 18px;
		  	}
		  	.sigform_left_contents{
		  		/*padding: 25px;*/
		  	}
		  	.sigform_preview_title{
		  		line-height: 56px;
		  	}
		  	.sigform_arrow{
		  		height: 700px;
		  	}
		  	.sigform_right{
		  		width: 359px;
		  		height: 700px;
		  	}
		  	.sigform_steps{
		  		display:none;
		  	}

		  	.sigform_steps li{
		  		float: none;
		  	}

		  	.sigform_current_step {
		  	    font-size: 30px;
		  	}
		  	.sigform_current_step span{
		  		width: 36px;
		  	}

		  	.sigform_lbl{
		  		font-size: 12px;
		  	}
		  	.sigform_row{
		  		margin-bottom: 15px;
		  	}
		  	.sigform_firstname{
		  		width: 100%;
		  		margin-bottom: 15px;
		  	}
		  	.sigform_mi{
		  		width: 52px;
		  		margin-bottom: 15px;
		  	}
		  	.sigform_lastname{
		  		width: 100%;
		  	}
		  	.sigform_5050{
		  		width: 100%;
		  	}
		  	.sigform_preview{
		  		padding-left: 10px;
		  	}
		  	.sigform_btn_left  a,
		  	.sigform_btn_left  a:visited,
		  	.sigform_btn_left  a:hover,
		  	.sigform_btn_left  a:active,
		  	.sigform_btn_right a,
		  	.sigform_btn_right a:visited,
		  	.sigform_btn_right a:hover,
		  	.sigform_btn_right a:active{
		  		width: 152px;
		  		font-size: 12px;
		  	}
		  	.sigform_sm_full_row{
		  		width: 100%;
		  	}
		  	.sigform_sm_full_row .sigform_fld{
		  		max-width: 237px;
		  	}

		  	.sigform_btn_left,
		  	.sigform_btn_right{
		  		float: none;
		  		width: 300px;
		  		margin 0px auto;
		  		text-align: left;
		  		margin-bottom: 20px;
		  	}

		  	.sigform_building{
		  		margin-bottom:15px;
		  	}
		}

	</style>


<div id="sigform_container">
	<form action="sigform_download.php" method="post" accept-charset="utf-8" id="sigform_form">
	<div class="gallery was-js-flickity" data-flickity-options='{ "resize": false, "draggable": false }'>
		<div class="gallery-cell">
			<div class="sigform_cell">
				<div class="sigform_left"><div class="sigform_left_padding">
					<ul class="sigform_steps">
						<li class="current"><a href="#" class="sigform_slide_dot" data-slide="0" >1. Getting Started</a></li>
						<li><a href="#" class="sigform_slide_dot" data-slide="1" >2. Contact Info</a></li>
						<li><a href="#" class="sigform_slide_dot" data-slide="2" >3. Get Social</a></li>
						<li class="sigform_last_step"><a href="#" class="sigform_slide_dot" data-slide="3" >4. Install Signature</a></li>
					</ul>
					<div class="clearfix"></div>

					<div class="sigform_row">
						<div class="sigform_current_step"><span>1</span> Getting Started</div>
					</div>

					<div class="sigform_left_contents">
						<div class="sigform_row">
							<div class="sigform_firstname">
								<div class="sigform_lbl">
									First Name <span>*</span>
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_firstname" id="sigform_firstname" value="">
								</div>
							</div>

							<div class="sigform_mi">
								<div class="sigform_lbl">
									M.I.
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_mi" id="sigform_mi" value="" size="1" maxlength="1">
								</div>
							</div>

							<div class="sigform_lastname">
								<div class="sigform_lbl">
									Last Name <span>*</span>
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_lastname" id="sigform_lastname" value="">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050">
								<div class="sigform_lbl">
									Title <span>*</span>
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_title_1" id="sigform_title_1" value="">
								</div>
							</div>
							<div class="sigform_5050">
								<div class="sigform_lbl">
									Title 2
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_title_2" id="sigform_title_2" value="">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050">
								<div class="sigform_lbl">
									Department <span>*</span>
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_department_1" id="sigform_department_1" value="">
								</div>
							</div>
							<div class="sigform_5050">
								<div class="sigform_lbl">
									Department Web Address <span>*</span>
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_department_1_web_address" id="sigform_department_1_web_address" value="http://">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050">
								<div class="sigform_lbl">
									Department 2
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_department_2" id="sigform_department_2" value="">
								</div>
							</div>
							<div class="sigform_5050">
								<div class="sigform_lbl">
									Department 2 Web Address
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_department_2_web_address" id="sigform_department_2_web_address" value="http://">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<!-- <div class="sigform_5050"> -->
								<div class="sigform_lbl">
									Organization <span>*</span>
								</div>
								<div class="sigform_fld">
									<select id="sigform_organization" name="sigform_organization">
										<option value=  "">Select One</option>
										<? include('organization_options.php'); ?>
										<? foreach( $organization_options as $id => $val ){ ?>
											<option value="<?= $id; ?>"><?= $val; ?></option>
										<? } ?>
									</select>
								</div>
							<!-- </div> -->
							<!-- <div class="sigform_5050"> -->
							<!-- </div> -->
							<!-- <div class="clearfix"></div> -->
						</div>

						<div class="sigform_row">
							<div class="sigform_lbl">
								<span>* Required Field</span>
							</div>
						</div>
					</div>
				</div></div>
				<div class="sigform_arrow"></div>
				<div class="sigform_right"><div class="sigform_right_pad">
					<div class="sigform_preview_title">Signature Preview</div>
					<div class="sigform_preview" id="sigform_preview_step_1">
						...
					</div>
					<div class="sigform_preview_status">
						<img class="sigform_slide_dot" data-slide="0" src="images/status-dot-full.gif">
						<img class="sigform_slide_dot" data-slide="1" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="2" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="3" src="images/status-dot-empty.gif">
					</div>
				</div></div>
			</div>
		</div>

		<div class="gallery-cell">
			<div class="sigform_cell">
				<div class="sigform_left"><div class="sigform_left_padding">
					<ul class="sigform_steps">
						<li><a href="#" class="sigform_slide_dot" data-slide="0" >1. Getting Started</a></li>
						<li class="current"><a href="#" class="sigform_slide_dot" data-slide="1" >2. Contact Info</a></li>
						<li><a href="#" class="sigform_slide_dot" data-slide="2" >3. Get Social</a></li>
						<li class="sigform_last_step"><a href="#" class="sigform_slide_dot" data-slide="3" >4. Install Signature</a></li>
					</ul>

					<div class="sigform_row">
						<div class="sigform_current_step"><span>2</span> Contact Info</div>
					</div>

					<div class="sigform_left_contents">
						<div class="sigform_row">
							<div class="sigform_5050 sigform_sm_full_rowx">
								<div class="sigform_lbl">
									Building <span>*</span>
								</div>
								<div class="sigform_fld sigform_building">
									<input type="text" name="sigform_building" id="sigform_building" value="">
								</div>
							</div>
							<div class="sigform_5050 sigform_sm_full_rowx">
								<div class="sigform_lbl">
									Suite
								</div>
								<div class="sigform_phone_1">
									<div class="sigform_fld">
										<input type="text" name="sigform_suite" id="sigform_suite" value="" class="" size="4" maxlength="4">
									</div>	
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050 sigform_sm_full_row">
								<div class="sigform_lbl">
									Office <span>*</span>
								</div>
								<div class="sigform_phone_1">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="3" data-next_field_id="sigform_office_2" data-prev_field_id="" name="sigform_office_1" id="sigform_office_1" size="3" maxlength="3" style="text-align:center;">
									</div>	
								</div>
								<div class="sigform_phone_2">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="3" data-next_field_id="sigform_office_3" data-prev_field_id="sigform_office_1" name="sigform_office_2" id="sigform_office_2" size="3" maxlength="3" style="text-align:center;">
									</div>	
								</div>
								<div class="sigform_phone_3">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="4" data-next_field_id="" data-prev_field_id="sigform_office_2" name="sigform_office_3" id="sigform_office_3" size="4" maxlength="4" style="text-align:center;">
									</div>	
								</div>
							</div>
							<div class="sigform_5050">
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050 sigform_sm_full_row">
								<div class="sigform_lbl">
									Fax
								</div>
								<div class="sigform_phone_1">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="3" data-next_field_id="sigform_fax_2" data-prev_field_id="" name="sigform_fax_1" id="sigform_fax_1" size="3" maxlength="3" style="text-align:center;">
									</div>	
								</div>
								<div class="sigform_phone_2">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="3" data-next_field_id="sigform_fax_3" data-prev_field_id="sigform_fax_1" name="sigform_fax_2" id="sigform_fax_2" size="3" maxlength="3" style="text-align:center;">
									</div>	
								</div>
								<div class="sigform_phone_3">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="4" data-next_field_id="" data-prev_field_id="sigform_fax_2" name="sigform_fax_3" id="sigform_fax_3" size="4" maxlength="4" style="text-align:center;">
									</div>	
								</div>
							</div>
							<div class="sigform_5050">
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050 sigform_sm_full_row">
								<div class="sigform_lbl">
									Mobile
								</div>
								<div class="sigform_phone_1">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="3" data-next_field_id="sigform_mobile_2" data-prev_field_id="" name="sigform_mobile_1" id="sigform_mobile_1" size="3" maxlength="3" style="text-align:center;">
									</div>	
								</div>
								<div class="sigform_phone_2">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="3" data-next_field_id="sigform_mobile_3" data-prev_field_id="sigform_mobile_1" name="sigform_mobile_2" id="sigform_mobile_2" size="3" maxlength="3" style="text-align:center;">
									</div>	
								</div>
								<div class="sigform_phone_3">
									<div class="sigform_fld">
										<input type="text" class="sigform_auto_tab" data-max_chars="4" data-next_field_id="" data-prev_field_id="sigform_mobile_2" name="sigform_mobile_3" id="sigform_mobile_3" size="4" maxlength="4" style="text-align:center;">
									</div>	
								</div>
							</div>
							<div class="sigform_5050">
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_5050 sigform_sm_full_row">
								<div class="sigform_lbl">
									Email <span>*</span>
								</div>
								<div class="sigform_fld">
									<input type="text" name="sigform_email" id="sigform_email" value="">
								</div>
							</div>
							<div class="sigform_5050">
							</div>
							<div class="clearfix"></div>
						</div>

						<div class="sigform_row">
							<div class="sigform_lbl">
								<span>* Required Field</span>
							</div>
						</div>
					</div>
				</div></div>
				<div class="sigform_arrow"></div>
				<div class="sigform_right"><div class="sigform_right_pad">
					<div class="sigform_preview_title">Signature Preview</div>
					<div class="sigform_preview" id="sigform_preview_step_2">
						...
					</div>
					<div class="sigform_preview_status">
						<img class="sigform_slide_dot" data-slide="0" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="1" src="images/status-dot-full.gif">
						<img class="sigform_slide_dot" data-slide="2" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="3" src="images/status-dot-empty.gif">
					</div>
				</div></div>
			</div>
		</div>

		<div class="gallery-cell">
			<div class="sigform_cell">
				<div class="sigform_left"><div class="sigform_left_padding">
					<ul class="sigform_steps">
						<li><a href="#" class="sigform_slide_dot" data-slide="0" >1. Getting Started</a></li>
						<li><a href="#" class="sigform_slide_dot" data-slide="1" >2. Contact Info</a></li>
						<li class="current"><a href="#" class="sigform_slide_dot" data-slide="2" >3. Get Social</a></li>
						<li class="sigform_last_step"><a href="#" class="sigform_slide_dot" data-slide="3" >4. Install Signature</a></li>
					</ul>

					<div class="sigform_row">
						<div class="sigform_current_step"><span>3</span> Get Social</div>
					</div>

					<div class="sigform_left_contents">

						<div id="sigform_social_options_">
							To use your organization's social links, you must select an organization on step 1.
						</div>

						<div id="sigform_social_options_0" style="display:none;">
							<!-- 
							0
							Ballarmine College of Liberal Arts
								none
							 -->
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_0_facebook" name="sigform_link_0_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_0_twitter" id="sigform_link_0_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_0_instagram" id="sigform_link_0_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_0_linkedin" id="sigform_link_0_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_0_youtube" id="sigform_link_0_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_0_pinterest" id="sigform_link_0_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						1
						College of Business Administration	
							https://www.facebook.com/lmucba	
							https://twitter.com/LMU_CBA		
							https://www.linkedin.com/grp/home?gid=5153752		
						 -->
						<div id="sigform_social_options_1" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_1_facebook" name="sigform_link_1_facebook">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
											<option value="https://www.facebook.com/lmucba">College of Business Administration Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_1_twitter" id="sigform_link_1_twitter">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
											<option value="https://twitter.com/LMU_CBA">College of Business Administration Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_1_instagram" id="sigform_link_1_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_1_linkedin" id="sigform_link_1_linkedin">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
											<option value="https://www.linkedin.com/grp/home?gid=5153752">College of Business Administration LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_1_youtube" id="sigform_link_1_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_1_pinterest" id="sigform_link_1_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						2
						College of Communication and Fine Arts						
							none
						 -->
						<div id="sigform_social_options_2" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_2_facebook" name="sigform_link_2_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_2_twitter" id="sigform_link_2_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_2_instagram" id="sigform_link_2_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_2_linkedin" id="sigform_link_2_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_2_youtube" id="sigform_link_2_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_2_pinterest" id="sigform_link_2_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						3
						Loyola Law School
							https://www.facebook.com/LoyolaLawSchool	
							https://twitter.com/LoyolaLawSchool	
							https://instagram.com/loyolalawschool/	
							https://www.linkedin.com/company/loyola-law-school	
							https://www.youtube.com/user/loyolalawschool	
						 -->
						<div id="sigform_social_options_3" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_3_facebook" name="sigform_link_3_facebook">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
											<option value="https://www.facebook.com/LoyolaLawSchool">Loyola Law School Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_3_twitter" id="sigform_link_3_twitter">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
											<option value="https://twitter.com/LoyolaLawSchool">Loyola Law School Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_3_instagram" id="sigform_link_3_instagram">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
											<option value="https://instagram.com/loyolalawschool/">Loyola Law School Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_3_linkedin" id="sigform_link_3_linkedin">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
											<option value="https://www.linkedin.com/company/loyola-law-school">Loyola Law School LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_3_youtube" id="sigform_link_3_youtube">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
											<option value="https://www.youtube.com/user/loyolalawschool">Loyola Law School Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_3_pinterest" id="sigform_link_3_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						4
						School of Education	
							https://www.facebook.com/lmusoe	
							https://twitter.com/lmusoe
						 -->
						<div id="sigform_social_options_4" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_4_facebook" name="sigform_link_4_facebook">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
											<option value="https://www.facebook.com/lmusoe">School of Education Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_4_twitter" id="sigform_link_4_twitter">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
											<option value="https://twitter.com/lmusoe">School of Education Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_4_instagram" id="sigform_link_4_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_4_linkedin" id="sigform_link_4_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_4_youtube" id="sigform_link_4_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_4_pinterest" id="sigform_link_4_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						5
						School of Film and Television
							https://www.facebook.com/LMUSFTV
							https://twitter.com/LMUsftv	
							https://instagram.com/lmusftv/		
							https://www.youtube.com/user/SFTVLMU	
						 -->
						<div id="sigform_social_options_5" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_5_facebook" name="sigform_link_5_facebook">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
											<option value="https://www.facebook.com/LMUSFTV">School of Film and Television Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_5_twitter" id="sigform_link_5_twitter">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
											<option value="https://twitter.com/LMUsftv">School of Film and Television Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_5_instagram" id="sigform_link_5_instagram">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
											<option value="https://instagram.com/lmusftv/">School of Film and Television Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_5_linkedin" id="sigform_link_5_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_5_youtube" id="sigform_link_5_youtube">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
											<option value="https://www.youtube.com/user/SFTVLMU">School of Film and Television Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_5_pinterest" id="sigform_link_5_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						6
						Seaver College of Science and Engineering	
							https://www.facebook.com/lmuseaver	
							https://twitter.com/seaverlmu	
							https://instagram.com/lmuseaver/		
							https://www.youtube.com/channel/UC_YGMt3hNu7iVjxD9Y6fSsA	
						 -->
						<div id="sigform_social_options_6" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_6_facebook" name="sigform_link_6_facebook">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
											<option value="https://www.facebook.com/lmuseaver">Seaver College of Science and Engineering Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_6_twitter" id="sigform_link_6_twitter">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
											<option value="https://twitter.com/seaverlmu">Seaver College of Science and Engineering Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_6_instagram" id="sigform_link_6_instagram">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
											<option value="https://instagram.com/lmuseaver/">Seaver College of Science and Engineering Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_6_linkedin" id="sigform_link_6_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_6_youtube" id="sigform_link_6_youtube">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
											<option value="https://www.youtube.com/channel/UC_YGMt3hNu7iVjxD9Y6fSsA">Seaver College of Science and Engineering Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_6_pinterest" id="sigform_link_6_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						7
						Academic Affairs						
							none
						 -->
						<div id="sigform_social_options_7" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_7_facebook" name="sigform_link_7_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_7_twitter" id="sigform_link_7_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_7_instagram" id="sigform_link_7_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_7_linkedin" id="sigform_link_7_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_7_youtube" id="sigform_link_7_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_7_pinterest" id="sigform_link_7_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						8
						Administration
							none
						 -->
						<div id="sigform_social_options_8" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_8_facebook" name="sigform_link_8_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_8_twitter" id="sigform_link_8_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_8_instagram" id="sigform_link_8_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_8_linkedin" id="sigform_link_8_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_8_youtube" id="sigform_link_8_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_8_pinterest" id="sigform_link_8_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						9
						Business and Finance						
							none
						 -->
						<div id="sigform_social_options_9" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_9_facebook" name="sigform_link_9_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_9_twitter" id="sigform_link_9_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_9_instagram" id="sigform_link_9_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_9_linkedin" id="sigform_link_9_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_9_youtube" id="sigform_link_9_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_9_pinterest" id="sigform_link_9_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						10	
						President's Division						
							none
						 -->
						 <div id="sigform_social_options_10" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_10_facebook" name="sigform_link_10_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_10_twitter" id="sigform_link_10_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_10_instagram" id="sigform_link_10_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_10_linkedin" id="sigform_link_10_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_10_youtube" id="sigform_link_10_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_10_pinterest" id="sigform_link_10_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						11	
						Student Affairs						
							none
						 -->
						 <div id="sigform_social_options_11" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_11_facebook" name="sigform_link_11_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_11_twitter" id="sigform_link_11_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_11_instagram" id="sigform_link_11_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_11_linkedin" id="sigform_link_11_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_11_youtube" id="sigform_link_11_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_11_pinterest" id="sigform_link_11_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>

						<!-- 
						12	
						University Relations						
							none
						 -->
						<div id="sigform_social_options_12" style="display:none;">
							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Facebook <span>*</span>
									</div>
									<div class="sigform_fld">
										<select id="sigform_link_12_facebook" name="sigform_link_12_facebook" style="background-image:none;">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_12_twitter" id="sigform_link_12_twitter" style="background-image:none;">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Instagram <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_12_instagram" id="sigform_link_12_instagram" style="background-image:none;">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										LinkedIn <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_12_linkedin" id="sigform_link_12_linkedin" style="background-image:none;">
											<option value="http://www.linkedin.com/edu/school?id=17875">LMU LinkedIn</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_5050">
									<div class="sigform_lbl">
										YouTube <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_12_youtube" id="sigform_link_12_youtube" style="background-image:none;">
											<option value="http://www.youtube.com/loyolamarymount">LMU Youtube</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Pinterest <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_12_pinterest" id="sigform_link_12_pinterest" style="background-image:none;">
											<option value="https://www.pinterest.com/loyolamarymount/">LMU Pinterest</option>
										</select>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="sigform_row">
								<div class="sigform_lbl">
									<span>* Required Field</span>
								</div>
							</div>
						</div>						

					</div>
				</div></div>
				<div class="sigform_arrow"></div>
				<div class="sigform_right"><div class="sigform_right_pad">
					<div class="sigform_preview_title">Signature Preview</div>
					<div class="sigform_preview" id="sigform_preview_step_3">
						...
					</div>
					<div class="sigform_preview_status">
						<img class="sigform_slide_dot" data-slide="0" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="1" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="2" src="images/status-dot-full.gif">
						<img class="sigform_slide_dot" data-slide="3" src="images/status-dot-empty.gif">
					</div>
				</div></div>
			</div>
		</div>

		<div class="gallery-cell">
			<div class="sigform_cell">
				<div class="sigform_left"><div class="sigform_left_padding">
					<ul class="sigform_steps">
						<li><a href="#" class="sigform_slide_dot" data-slide="0" >1. Getting Started</a></li>
						<li><a href="#" class="sigform_slide_dot" data-slide="1" >2. Contact Info</a></li>
						<li><a href="#" class="sigform_slide_dot" data-slide="2" >3. Get Social</a></li>
						<li class="current sigform_last_step"><a href="#" class="sigform_slide_dot" data-slide="3" >4. Install Signature</a></li>
					</ul>

					<div class="sigform_row">
						<div class="sigform_current_step"><span>4</span> Install Signature</div>
					</div>

					<div class="sigform_left_contents">
						<div class="sigform_row">
							If you are satisfied with your signature please press download to save or copy the html code to your browser.
							<br /><br />
							Please follow the instructions below to add to your email client.
							<br /><br />
							<div class="sigform_instruction_links">	
								<a href="#" data-featherlight="instructions/instructions_outlook_pc.html">Outlook (PC)</a>								
								<a href="#" data-featherlight="instructions/instructions_outlook_mac.html">Outlook (Mac)</a>								
								<a href="#" data-featherlight="instructions/instructions_apple_mail.html">Apple Mail</a>								
								<a href="#" data-featherlight="instructions/instructions_ios_mail.html">iOS Mail</a>								
								<a href="#" data-featherlight="instructions/instructions_android_gmail.html">Android Gmail App</a>								
								<a href="#" data-featherlight="instructions/instructions_android_email.html">Android Email App</a>
							</div>
							
						</div>
					</div>

					<div class="sigform_btn_left">
						<? if( $show_view_download_buttons ){ ?>
							<a href="javascript:copy_html();">VIEW HTML ></a>
						<? } ?>
					</div>

					<div class="sigform_btn_right">
						<? if( $show_view_download_buttons ){ ?>
							<a href="javascript:download_signature();">DOWNLOAD ></a>
						<? } ?>
					</div>

					<div class="clearfix"></div>
					

				</div></div>
				<div class="sigform_arrow"></div>
				<div class="sigform_right"><div class="sigform_right_pad">
					<div class="sigform_preview_title">Signature Preview</div>
					<div class="sigform_preview" id="sigform_preview_step_4">
						...
					</div>
					<div class="sigform_preview_status">
						<img class="sigform_slide_dot" data-slide="0" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="1" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="2" src="images/status-dot-empty.gif">
						<img class="sigform_slide_dot" data-slide="3" src="images/status-dot-full.gif">
					</div>
				</div></div>
			</div>
		</div>
	</div>
	</form>
</div>

<div style="display:none" id="sigform_base">
	<? include('sigform_base.html'); ?>
</div>

<script type="text/javascript">

	/*
	0
	Ballarmine College of Liberal Arts
		none

	1
	College of Business Administration	
		https://www.facebook.com/lmucba	
		https://twitter.com/LMU_CBA		
		https://www.linkedin.com/grp/home?gid=5153752		

	2
	College of Communication and Fine Arts						
		none

	3
	Loyola Law School
		https://www.facebook.com/LoyolaLawSchool	
		https://twitter.com/LoyolaLawSchool	
		https://instagram.com/loyolalawschool/	
		https://www.linkedin.com/company/loyola-law-school	
		https://www.youtube.com/user/loyolalawschool	

	4
	School of Education	
		https://www.facebook.com/lmusoe	
		https://twitter.com/lmusoe

	5
	School of Film and Television
		https://www.facebook.com/LMUSFTV
		https://twitter.com/LMUsftv	
		https://instagram.com/lmusftv/		
		https://www.youtube.com/user/SFTVLMU	

	6
	Seaver College of Science and Engineering	
		https://www.facebook.com/lmuseaver	
		https://twitter.com/seaverlmu	
		https://instagram.com/lmuseaver/		
		https://www.youtube.com/channel/UC_YGMt3hNu7iVjxD9Y6fSsA	

	7
	Academic Affairs						
		none

	8
	Administration
		none

	9
	Business and Finance						
		none
	
	10	
	President's Division						
		none
	
	11	
	Student Affairs						
		none
	
	12	
	University Relations						
		none
		
	*/


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

		$('#sigform_social_options_'  ).hide();
		$('#sigform_social_options_0' ).hide();
		$('#sigform_social_options_1' ).hide();
		$('#sigform_social_options_2' ).hide();
		$('#sigform_social_options_3' ).hide();
		$('#sigform_social_options_4' ).hide();
		$('#sigform_social_options_5' ).hide();
		$('#sigform_social_options_6' ).hide();
		$('#sigform_social_options_7' ).hide();
		$('#sigform_social_options_8' ).hide();
		$('#sigform_social_options_9' ).hide();
		$('#sigform_social_options_10').hide();
		$('#sigform_social_options_11').hide();
		$('#sigform_social_options_12').hide();

		$('#sigform_social_options_' + selected_option).show();
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
			var org = $('#sigform_organization option:selected').text();
			html = html.replace("{organization}", org );
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

			console.log('#sigform_link_' + sigform_organization + '_facebook');

			var sigform_organization = $('#sigform_organization').val();

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

</script>

<div style="display:none">
	<a href="#" data-featherlight="#preview_html" id="preview_hidden_link">
	<div id="preview_html">
		<div class="instructions_box">
			<div class="instructions_title">HTML For Signature</div>
			<textarea id="preview_html_code" name="preview_html_code" style="width: 100%" rows="24" onclick="this.focus();this.select()"></textarea>	
		</div>
		
	</div>	
</div>

