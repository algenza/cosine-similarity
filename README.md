# Cosine-Similarity
[![Build Status](https://travis-ci.org/algenza/cosine-similarity.svg?branch=master)](https://travis-ci.org/algenza/cosine-similarity)

## Installation
```sh
composer require algenza/cosine-similarity 
```

## How to use?
```sh
use Algenza\Cosinesimilarity\Cosine;

$vectorA = [
'type' => 3,
'code' => 5,
'run' => 2
];

$vectorB = [
'type' => 3,
'code' => 5,
'run' => 2
];

$similarity = Cosine::similarity($vectorA, $vectorB);
```
## Lisence
MIT

