<?php

use PhpCsFixer\Finder;
use PhpCsFixer\Config;

return (new Config())->setFinder(Finder::create()->exclude('vendor')->in(__DIR__))
    ->setRules([
        '@PER-CS' => true,
    ]);
