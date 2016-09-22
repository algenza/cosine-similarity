<?php

/*
 * This file is part of the fzt-stemming package.
 *
 * (c) Billy Renyut <milhanol068@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Algenza\Cosinesimilarity;


class Cosine
{
	public static function similarity(array $vec1, array $vec2)
	{
		$vectorKey = array_keys(array_merge($vec1, $vec2));

		$dotProduct = 0;
		$magnitudeVec1 = 0;
		$magnitudeVec2 = 0;

		foreach ($vectorKey as $key) 
		{
			$keyVec1Val = isset($vec1[$key])?$vec1[$key]:0;
			$keyVec2Val = isset($vec2[$key])?$vec2[$key]:0;
			$dotProduct += ($keyVec1Val * $keyVec2Val);
			$magnitudeVec1 += ($keyVec1Val * $keyVec1Val);
			$magnitudeVec2 += ($keyVec2Val * $keyVec2Val);
		}

		$magnitudeVec1 = sqrt($magnitudeVec1);
		$magnitudeVec2 = sqrt($magnitudeVec2);

		$similarity = $dotProduct / ($magnitudeVec1 * $magnitudeVec2);

		return $similarity;
	}
}