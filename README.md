# Cosine-Similiarity
[![Build Status](https://travis-ci.org/algenza/cosine-similiarity.svg?branch=master)](https://travis-ci.org/algenza/cosine-similiarity)

## Installation
```sh
composer require algenza/cosine-similiarity 
```

## How to use?
```sh
use Algenza\Cosinesimiliarity\Cosine;

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

$similiarity = Cosine::similiarity($vectorA, $vectorB);
```
## Lisence
MIT

