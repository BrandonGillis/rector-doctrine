<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\ReturnNotation\ReturnAssignmentFixer;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (\Symplify\EasyCodingStandard\Config\ECSConfig $ecsConfig): void {
    $ecsConfig->sets([SetList::PSR_12, SetList::SYMPLIFY, SetList::COMMON, SetList::CLEAN_CODE]);

    $ecsConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/rules',
        __DIR__ . '/rules-tests',
        __DIR__ . '/tests',
        __DIR__ . '/config',
        __DIR__ . '/ecs.php',
    ]);

    $ecsConfig->skip([
        '*/Source/*', '*/Fixture/*',
        // breaks annotated code - removed on symplify dev-main
        ReturnAssignmentFixer::class,
    ]);

    $ecsConfig->lineEnding("\n");
};
