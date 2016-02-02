<?
$organization_options       = array();
$organization_options['0']  = 'Bellarmine College of Liberal Arts';
$organization_options['1']  = 'College of Business Administration';
$organization_options['2']  = 'College of Communication and Fine Arts';
$organization_options['3']  = 'Loyola Law School';
$organization_options['4']  = 'School of Education';
$organization_options['5']  = 'School of Film and Television';
$organization_options['6']  = 'Seaver College of Science and Engineering';
$organization_options['7']  = 'Academic Affairs';
$organization_options['8']  = 'Administration';
$organization_options['9']  = 'Business and Finance';
$organization_options['10'] = 'President\'s Division';
$organization_options['11'] = 'Student Affairs';
$organization_options['12'] = 'University Relations';

function titleCase($string) {
 
	$smallWords = array('of', 'a', 'the', 'and', 'an', 
				'or', 'nor', 'but', 'is', 'if', 'then', 
				'else', 'when', 'at', 'from', 'by', 'on', 
				'off', 'for', 'in', 'out', 'over', 'to', 
				'into', 'with');
 
	$specialWords        = array();
	$punctuation         = array('.', '-', ':', '!', '\'', '-', '?');
	$replacements        = array( array("'", '\'') );
	$cleanString         = preg_replace("/[^\w]/", ' ', $string);
	$originalStringSplit = str_split($string);
	$allWords            = explode(' ', $cleanString);
 
	foreach($allWords as $key => $word) {
		if(!in_array($word, $smallWords)){
			$allWords[$key] = ucfirst($word);
		}
	}
 
	$allWords         = implode(' ', $allWords);
	$titleStringSplit = str_split($allWords);
 
	foreach($titleStringSplit as $key => $char) {
		if($char != " ") {
			$originalStringSplit[$key] = $char;
		}
	}
 
	$titleString = implode('', $originalStringSplit);
 
	foreach($punctuation as $char) {
		$titleString = preg_replace("/(" . preg_quote($char) . "\s*[a-zA-Z])/ie", "strtoupper('\\1')", $titleString);
	}
 
	$titleString = preg_replace("/(^[^a-zA-Z]*[a-zA-Z])/ie", "strtoupper('\\1')", $titleString);
 
	foreach($replacements as $replacement) {
		$find = $replacement[0];
		$replace = $replacement[1];
		$titleString = str_ireplace($find, $replace, $titleString);
	}
 
	foreach($specialWords as $specialWord) {
		$titleString = preg_replace("/\b" . $specialWord . "\b/i", $specialWord, $titleString);
	}
 
	return $titleString;
}
?>