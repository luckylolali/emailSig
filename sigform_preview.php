<?
$json = array();
$json['status'] = 'FAIL';
$json['msg']    = 'Invalid Request';

include('organization_options.php');

// convert to title case
$fields_to_convert = array( 
	'sigform_firstname', 
	'sigform_mi', 
	'sigform_lastname', 
	'sigform_title_1', 
	'sigform_title_2', 
	'sigform_department_1', 
	'sigform_department_2', 
	'sigform_building', 
	'sigform_suite'
	);

foreach( $fields_to_convert as $fld ) {
	$_REQUEST[ $fld ] = titleCase( $_REQUEST[ $fld ] );
}

$html = file_get_contents('sigform_base.html');

// step 1 fields
if( $_REQUEST['sigform_firstname'] != '' ){
	$html = str_replace('{firstname}', $_REQUEST['sigform_firstname'], $html );
}else{
	$html = str_replace('{firstname}', 'First', $html );
}

if( $_REQUEST['sigform_mi'] != '' ){
	$html = str_replace('{mi}', $_REQUEST['sigform_mi'] . '.', $html );
}else{
	$html = str_replace('{mi}', '', $html );
}

if( $_REQUEST['sigform_lastname'] != '' ){
	$html = str_replace('{lastname}', $_REQUEST['sigform_lastname'], $html );
}else{
	$html = str_replace('{lastname}', 'Last', $html );
}

if( $_REQUEST['sigform_title_1'] != '' ){
	$html = str_replace('{title_1}', $_REQUEST['sigform_title_1'], $html );
}else{
	$html = str_replace('{title_1}', 'Title', $html );
}

if( $_REQUEST['sigform_title_2'] != '' ) {
	$html = str_replace('{title_2}', '<br>' . $_REQUEST['sigform_title_2'], $html );
}else{
	$html = str_replace('{title_2}', '', $html );
}

if( $_REQUEST['sigform_department_1'] != '' ){
	if( $_REQUEST['sigform_department_1_web_address'] != '' && $_REQUEST['sigform_department_1_web_address'] != 'http://' ){
		$html = str_replace('{department_1}', '<a href="' . $_REQUEST['sigform_department_1_web_address'] . '" style="color: #666666; text-decoration: none;">' . $_REQUEST['sigform_department_1'] . '</a>', $html );
	}else{
		$html = str_replace('{department_1}', $_REQUEST['sigform_department_1'], $html );
	}
}else{
	$html = str_replace('{department_1}', 'Department', $html );
}

if( $_REQUEST['sigform_department_2'] != '' ) {
	if( $_REQUEST['sigform_department_2_web_address'] != '' && $_REQUEST['sigform_department_2_web_address'] != 'http://' ){
		$html = str_replace('{department_2}', '<br><a href="' . $_REQUEST['sigform_department_2_web_address'] . '" style="color: #666666; text-decoration: none;">' . $_REQUEST['sigform_department_2'] . '</a>', $html );
	}else{
		$html = str_replace('{department_2}', '<br>' . $_REQUEST['sigform_department_2'], $html );
	}
}else{
	$html = str_replace('{department_2}', '', $html );
}

if( $_REQUEST['sigform_organization'] != '' ){
	$org = $organization_options[ $_REQUEST['sigform_organization'] ];
	$html = str_replace('{organization}', $org, $html );
}else{
	$html = str_replace('{organization}', 'Organization', $html );
}

// step 2 fields
if( $_REQUEST['sigform_building'] != '' ) {
	$html = str_replace('{building}', $_REQUEST['sigform_building'], $html );
}else{
	$html = str_replace('{building}', 'Building', $html );
}

if( $_REQUEST['sigform_suite'] != '' ) {
	$html = str_replace('{suite}', ' ' . $_REQUEST['sigform_suite'], $html );
}else{
	$html = str_replace('{suite}', '', $html );
}

if( $_REQUEST['sigform_office_1'] != '' || $_REQUEST['sigform_office_2'] != '' || $_REQUEST['sigform_office_3'] != '' ) {
	$office_str  = '';
	$office_tel  = '';
	$office_link = '';

	if( $_REQUEST['sigform_office_1'] != '' ){
		$office_str .= $_REQUEST['sigform_office_1'];
		$office_tel .= $_REQUEST['sigform_office_1'];
	}

	if( $_REQUEST['sigform_office_2'] != '' ){
		if( $office_str != '' ){
			$office_str .= '.';
		}
		$office_str .= $_REQUEST['sigform_office_2'];
		$office_tel .= $_REQUEST['sigform_office_2'];
	}

	if( $_REQUEST['sigform_office_3'] != '' ){
		if( $office_str != '' ){
			$office_str .= '.';
		}
		$office_str .= $_REQUEST['sigform_office_3'];
		$office_tel .= $_REQUEST['sigform_office_3'];
	}
	
	$office_link = '<a href="tel:+1' . $office_tel . '" style="font-family: arial,helvetica; color: #666666; font-size: 12px;text-decoration:none;">' . $office_str . '</a>';
	
	$html = str_replace('{office}', $office_link, $html );
}else{
	$html = str_replace('{office}', '888.888.8888', $html );
}

if( $_REQUEST['sigform_fax_1'] != '' || $_REQUEST['sigform_fax_2'] != '' || $_REQUEST['sigform_fax_3'] != '' ) {
	$fax_str  = '';
	$fax_tel  = '';
	$fax_link = '';

	if( $_REQUEST['sigform_fax_1'] != '' ){
		$fax_str .= $_REQUEST['sigform_fax_1'];
		$fax_tel .= $_REQUEST['sigform_fax_1'];
	}

	if( $_REQUEST['sigform_fax_2'] != '' ){
		if( $fax_str != '' ){
			$fax_str .= '.';
		}
		$fax_str .= $_REQUEST['sigform_fax_2'];
		$fax_tel .= $_REQUEST['sigform_fax_2'];
	}

	if( $_REQUEST['sigform_fax_3'] != '' ){
		if( $fax_str != '' ){
			$fax_str .= '.';
		}
		$fax_str .= $_REQUEST['sigform_fax_3'];
		$fax_tel .= $_REQUEST['sigform_fax_3'];
	}
	
	$fax_link = '<a href="tel:+1' . $fax_tel . '" style="font-family: arial,helvetica; color: #666666; font-size: 12px; text-decoration:none;">' . $fax_str . '</a>';
	
	$html = str_replace('{fax}', $fax_link, $html );
	$html = str_replace('{fax_lbl}', 'Fax', $html );
}else{
	$html = str_replace('{fax}', '', $html ); // 888-888-8, $html888
	$html = str_replace('{fax_lbl}', '', $html ); // 888-888-8, $html888
}


if( $_REQUEST['sigform_mobile_1'] != '' || $_REQUEST['sigform_mobile_2'] != '' || $_REQUEST['sigform_mobile_3'] != '' ) {
	$mobile_str  = '';
	$mobile_tel  = '';
	$mobile_link = '';

	if( $_REQUEST['sigform_mobile_1'] != '' ){
		$mobile_str .= $_REQUEST['sigform_mobile_1'];
		$mobile_tel .= $_REQUEST['sigform_mobile_1'];
	}

	if( $_REQUEST['sigform_mobile_2'] != '' ){
		if( $mobile_str != '' ){
			$mobile_str .= '.';
		}
		$mobile_str .= $_REQUEST['sigform_mobile_2'];
		$mobile_tel .= $_REQUEST['sigform_mobile_2'];
	}

	if( $_REQUEST['sigform_mobile_3'] != '' ){
		if( $mobile_str != '' ){
			$mobile_str .= '.';
		}
		$mobile_str .= $_REQUEST['sigform_mobile_3'];
		$mobile_tel .= $_REQUEST['sigform_mobile_3'];
	}

	$mobile_link = '<a href="tel:+1' . $mobile_tel . '" style="font-family: arial,helvetica; color: #666666; font-size: 12px; text-decoration:none;">' . $mobile_str . '</a>';
	
	$html = str_replace('{mobile}', $mobile_link, $html );
	$html = str_replace('{mobile_lbl}', 'Mobile', $html );

}else{
	$html = str_replace('{mobile}', '', $html );
	$html = str_replace('{mobile_lbl}', '', $html );
}

if( $_REQUEST['sigform_email'] != '' ) {
	$html = str_replace('{email_link}', $_REQUEST['sigform_email'], $html );
	$html = str_replace('{email}',      $_REQUEST['sigform_email'], $html );
}else{
	$html = str_replace('{email_link}', 'email@server.com', $html );
	$html = str_replace('{email}',      'email@server.com', $html );
}

// step 3 fields
if( $_REQUEST['sigform_organization'] != '' ){

	$sigform_organization = $_REQUEST['sigform_organization'];

	if( $_REQUEST['sigform_link_' . $sigform_organization . '_facebook'] != '' ) {
		$html = str_replace('{link_facebook}', $_REQUEST['sigform_link_' . $sigform_organization . '_facebook'], $html );
	}else{
		$html = str_replace('{link_facebook}', 'http://www.facebook.com', $html );
	}

	if( $_REQUEST['sigform_link_' . $sigform_organization . '_twitter'] != '' ) {
		$html = str_replace('{link_twitter}', $_REQUEST['sigform_link_' . $sigform_organization . '_twitter'], $html );
	}else{
		$html = str_replace('{link_twitter}', 'http://www.twitter.com', $html );
	}

	if( $_REQUEST['sigform_link_' . $sigform_organization . '_instagram'] != '' ) {
		$html = str_replace('{link_instagram}', $_REQUEST['sigform_link_' . $sigform_organization . '_instagram'], $html );
	}else{
		$html = str_replace('{link_instagram}', 'http://www.instagram.com', $html );
	}

	if( $_REQUEST['sigform_link_' . $sigform_organization . '_linkedin'] != '' ) {
		$html = str_replace('{link_linkedin}', $_REQUEST['sigform_link_' . $sigform_organization . '_linkedin'], $html );
	}else{
		$html = str_replace('{link_linkedin}', 'http://www.linkedin.com', $html );
	}

	if( $_REQUEST['sigform_link_' . $sigform_organization . '_youtube'] != '' ) {
		$html = str_replace('{link_youtube}', $_REQUEST['sigform_link_' . $sigform_organization . '_youtube'], $html );
	}else{
		$html = str_replace('{link_youtube}', 'http://www.youtube.com', $html );
	}	

	if( $_REQUEST['sigform_link_' . $sigform_organization . '_pinterest'] != '' ) {
		$html = str_replace('{link_pinterest}', $_REQUEST['sigform_link_' . $sigform_organization . '_pinterest'], $html );
	}else{
		$html = str_replace('{link_pinterest}', 'http://www.pinterest.com', $html );
	}
}

$json['status']  = 'OK';
$json['msg']     = '';
// $json['content'] = htmlspecialchars( $html );
$json['content'] = $html;
// $json['content'] = base64_encode( $html );
// $json['content'] = '<textarea>' . $html .  '</textarea>';

echo json_encode( $json );
?>