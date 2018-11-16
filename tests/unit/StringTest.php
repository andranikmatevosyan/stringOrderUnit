<?php

use Tnq\Services\StringService;

class StringTest extends \PHPUnit\Framework\TestCase 
{
	public function testSortAlphabet() 
	{
		$stringHandler = new StringService();
		
		$this->assertEquals($stringHandler->sort_alphabet('lemon orange banana apple'), 'elmno aegnor aaabnn aelpp');
		$this->assertEquals($stringHandler->sort_alphabet('лимон апельсин банан яблоко'), 'илмно аеилнпсь аабнн бклооя');
		$this->assertEquals($stringHandler->sort_alphabet('αβγαβγ αβγαβγαβγ'), 'ααββγγ αααβββγγγ');
	}
}