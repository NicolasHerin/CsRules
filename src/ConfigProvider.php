<?php

namespace PhpCsFix;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

class ConfigProvider {
    public static function getConfig(Finder $finder): Config
    {
        // rules taken from https://github.com/zephir-lang/zephir/blob/development/.php-cs-fixer.dist.php

        return (new Config())
        ->setRiskyAllowed(true)
        ->setFinder($finder)
        ->setRules([
            '@Symfony' => true,
            '@Symfony:risky' => true,
            '@PHPUnit48Migration:risky' => true,
            '@PSR2' => true,
            'php_unit_no_expectation_annotation' => false,
            'array_syntax' => ['syntax' => 'short'],
            'fopen_flags' => false,
            'ordered_imports' => [
                'sort_algorithm' => 'alpha',
                'imports_order' => [
                    'class',
                    'function',
                    'const',
                ],
            ],
            'protected_to_private' => false,
            'phpdoc_summary' => false,
            'phpdoc_to_comment' => false,
            'phpdoc_var_annotation_correct_order' => true,
            'no_superfluous_phpdoc_tags' => false,
            'native_constant_invocation' => false,
            'native_function_invocation' => false,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'continue',
                    'curly_brace_block',
                    'default',
                    'extra',
                    'parenthesis_brace_block',
                    'square_brace_block',
                    'switch',
                    'throw',
                    'use_trait',
                ],
            ],
            'single_line_throw' => false,
            'psr_autoloading' => false,
            'types_spaces' => ['space' => 'single'],
            'yoda_style' => false,
        ]);
    }
}
