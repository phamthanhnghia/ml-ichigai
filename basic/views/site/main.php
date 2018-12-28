<?php
use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;

$classifier = new SVC(Kernel::LINEAR, $cost = 1000);
$classifier = new SVC(Kernel::RBF, $cost = 1000, $degree = 3, $gamma = 6);

$samples = [[4, 4], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
$labels = ['a', 'a', 'a', 'b', 'b', 'b'];

$classifier = new SVC(Kernel::LINEAR, $cost = 1000);
$classifier->train($samples, $labels);
echo '<pre>';
print_r($classifier->predict([4, 4]));
echo '</pre>';
die;
