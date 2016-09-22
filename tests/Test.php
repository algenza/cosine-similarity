<?php
use PHPUnit\Framework\TestCase;

use Algenza\Cosinesimilarity\Cosine;

class Test extends PHPUnit_Framework_TestCase
{
	public function test_similiar()
	{
		$docA = [
		'saya' => 5,
		'lihat' => 4,
		'kamu' => 3
		];

		$docB = [
		'saya' => 5,
		'lihat' => 4,
		'kamu' => 3
		];

		$sim = Cosine::similarity($docA, $docB);

		$this->assertEquals(1,$sim);
	}

	public function test_unsimiliar()
	{
		$docA = [
		'saya' => 5,
		'lihat' => 4,
		'kamu' => 3
		];

		$docB = [
		'dia' => 5,
		'kejar' => 4,
		'mereka' => 3
		];

		$sim = Cosine::similarity($docA, $docB);

		$this->assertEquals(0,$sim);
	}

	public function test_between0to1()
	{
		$docA = [
		'saya' => 5,
		'lihat' => 4,
		'kamu' => 3
		];

		$docB = [
		'saya' => 5,
		'kejar' => 4,
		'kamu' => 3
		];

		$sim = Cosine::similarity($docA, $docB);

		$this->assertGreaterThan(0,$sim);
		$this->assertLessThan(1,$sim);
	}

	public function test_wn1()
	{
		$docA = [0,1,2,3];

		$docB = [0,1,2,3];

		$sim = Cosine::similarity($docA, $docB);

		$this->assertEquals(1,$sim);

	}
	public function test_wn2()
	{
		$docA = [1,0,1,0];

		$docB = [0,1,0,1];

		$sim = Cosine::similarity($docA, $docB);

		$this->assertEquals(0,$sim);

	}
}