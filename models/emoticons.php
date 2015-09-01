<?php
	function ConvertEmoticons ( $text ) {
		$text = str_replace(":)", addslashes("<img style='display:inline;' src='images/emoticons/smile.gif' alt=':)'>"), $text);
		$text = str_replace(":s", addslashes("<img src='images/emoticons/confused_smile.gif' alt=':s'>"), $text);
		$text = str_replace(":S", addslashes("<img src='images/emoticons/confused_smile.gif' alt=':s'>"), $text);
		$text = str_replace(":'(", addslashes("<img src='images/emoticons/crying_face.gif' alt=':'('>"), $text);
		$text = str_replace(":$", addslashes("<img src='images/emoticons/embarrased_smile.gif' alt=':$'>"), $text);
		$text = str_replace(":D", addslashes("<img src='images/emoticons/open_mouthed_smile.gif' alt=':D'>"), $text);
		$text = str_replace(":(", addslashes("<img src='images/emoticons/sad_smile.gif' alt=':('>"), $text);
		$text = str_replace(":p", addslashes("<img src='images/emoticons/smile_with_tongue_out.gif' alt=':p'>"), $text);
		$text = str_replace(":P", addslashes("<img src='images/emoticons/smile_with_tongue_out.gif' alt=':p'>"), $text);
		$text = str_replace(":@", addslashes("<img src='images/emoticons/steaming_mad.gif' alt=':@'>"), $text);
		$text = str_replace(";)", addslashes("<img src='images/emoticons/winking_smile.gif' alt=';)'>"), $text);
		
		return $text;
	}
?>