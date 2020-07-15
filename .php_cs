<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'src')
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'tests')
    ->append(['.php_cs']);

$rules = [
    '@PSR2' => true,
    'phpdoc_no_empty_return' => false,
    'array_syntax' => ['syntax' => 'short'],
    'yoda_style' => false,
    'concat_space' => ['spacing' => 'one'],
    'not_operator_with_space' => false,
    'increment_style' => ['style' => 'post'],
];

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules($rules)
    ->setFinder($finder);
