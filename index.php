<?php

require "Sorter.php";
require "Searcher.php";

use Components\Sorter;
use Components\Searcher;

$array = [2,1,6,3,9,7,43,21,15,32];

$sorter = new Sorter($array);
$sorter->selectionSort();

$searcher = new Searcher($sorter->getSorteredArray());
$searcher->binarySearch(1);
