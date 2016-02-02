<? $show_view_download_buttons = false; ?>



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
										<!--
										<? include('organization_options.php'); ?>
										<? foreach( $organization_options as $id => $val ){ ?>
											<option value="<?= $id; ?>"><?= $val; ?></option>
										<? } ?>-->
										<option value="1">College of Business Administration</option>
										<option value="2">College of Communication and Fine Arts</option>
										<option value="3">Loyola Law School</option>
										<option value="4">School of Education</option>
										<option value="5">School of Film and Television</option>
										<option value="6">Seaver College of Science and Engineering</option>
										<option value="7">Academic Affairs</option>
										<option value="8">Administration</option>
										<option value="9">Business and Finance</option>
										<option value="10">President's Division</option>
										<option value="11">Student Affairs</option>
										<option value="12">University Relations</option>
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
										<select id="sigform_link_0_facebook" name="sigform_link_0_facebook">
											<option value="https://www.facebook.com/lmula">LMU Facebook</option>
                                            <option value="https://www.facebook.com/LMUBellarmine">Ballarmine College of Liberal Arts Facebook</option>
										</select>
									</div>
								</div>
								<div class="sigform_5050">
									<div class="sigform_lbl">
										Twitter <span>*</span>
									</div>
									<div class="sigform_fld">
										<select name="sigform_link_0_twitter" id="sigform_link_0_twitter">
											<option value="http://twitter.com/loyolamarymount">LMU Twitter</option>
                                            <option value="https://twitter.com/LMUBellarmine">Ballarmine College of Liberal Arts Twitter</option>
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
										<select name="sigform_link_0_instagram" id="sigform_link_0_instagram">
											<option value="https://instagram.com/loyolamarymount/?hl=en">LMU Instagram</option>
                                            <option value="https://www.instagram.com/lmubellarmine/">Ballarmine College of Liberal Arts Instagram</option>
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
                        
                        <!--Other-->
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
							If you are satisfied with your signature please follow the instructions below to add to your email client.
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
<script type="text/javascript" src="js/script.js"></script>

<div style="display:none">
	<a href="#" data-featherlight="#preview_html" id="preview_hidden_link">
	<div id="preview_html">
		<div class="instructions_box">
			<div class="instructions_title">HTML For Signature</div>
			<textarea id="preview_html_code" name="preview_html_code" style="width: 100%" rows="24" onclick="this.focus();this.select()"></textarea>	
		</div>
		
	</div>	
</div>

