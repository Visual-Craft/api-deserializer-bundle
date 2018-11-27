<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src')
    ->in(__DIR__ . '/tests')
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/.php_cs.cache')
    ->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP56Migration' => true,
        '@PHP70Migration' => true,
        '@PHP71Migration' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        'combine_consecutive_unsets' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'no_useless_else' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => true,
        'concat_space' => ['spacing' => 'one'],
        'psr4' => true,
        'strict_comparison' => true,
        'strict_param' => true,
        'phpdoc_align' => false,
        'phpdoc_order' => true,
        'phpdoc_separation' => false,
        'phpdoc_to_comment' => false,
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => false,
        ],
        'modernize_types_casting' => true,
        'no_php4_constructor' => true,
        'php_unit_construct' => true,
        'php_unit_strict' => true,
        'semicolon_after_instruction' => true,
        'doctrine_annotation_braces' => [
            'syntax' => 'with_braces',
        ],
        'doctrine_annotation_indentation' => true,
        'doctrine_annotation_spaces' => true,
        'declare_strict_types' => false,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
        ],
        'void_return' => false,
        'increment_style' => false,
        'yoda_style' => false,
        'compact_nullable_typehint' => true,
        'native_function_invocation' => false,
    ])
;
