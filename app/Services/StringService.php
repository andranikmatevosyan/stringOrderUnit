<?php 

namespace Tnq\Services;

class StringService 
{
	public function sort_alphabet($sentence) 
	{
		$utfSentence = mb_convert_encoding($sentence, 'UTF-8', 'auto');

		$strings = explode(' ', $utfSentence);
		$alphaStrings = [];

		foreach ($strings as $key => $string) {
			$stringParts = $this->utf8_str_split(mb_convert_encoding($string, 'UTF-8', 'auto'));
			sort($stringParts);
			$alphaString = implode('', $stringParts);

			$alphaStrings[] = $alphaString;
		}

		return implode(' ', $alphaStrings);
	}
	
	private function utf8_str_split($str, $split_len=1)
	{
		if (!preg_match('/^[0-9]+$/', $split_len) || $split_len < 1)
			return false;
		$len = strlen($str);
		if($len <= $split_len)
			return array($str);
		preg_match_all('/.{'.$split_len.'}|[^\x00]{1,'.$split_len.'}$/us', $str, $ar);
		return $ar[0];
	}
}