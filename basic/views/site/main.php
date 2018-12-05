<?php
$samples = [['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta'], ['alpha', 'beta', 'epsilon'], ['alpha', 'beta', 'theta']];
$labels  = [];

use Phpml\Association\Apriori;
//https://php-ml.readthedocs.io/en/latest/machine-learning/association/apriori/
$associator = new Apriori($support = 0.5, $confidence = 0.5);
$associator->train($samples, $labels);
echo '<pre>';
print_r($associator->getRules());
echo '</pre>';
die;
