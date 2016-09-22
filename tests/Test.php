<?php
use PHPUnit\Framework\TestCase;

use Algenza\Cosinesimiliarity\Cosine;

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

		$sim = Cosine::similiarity($docA, $docB);

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

		$sim = Cosine::similiarity($docA, $docB);

		$this->assertEquals(0,$sim);
	}

	public function test_()
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

		$sim = Cosine::similiarity($docA, $docB);

		$this->assertGreaterThan(0,$sim);
		$this->assertLessThan(1,$sim);
	}
}