<?php

namespace Imponeer\Contracts\ExtensionsSetup;

use Imponeer\Decorators\LogDataOutput\OutputDecorator;

/**
 * Defines setup step
 *
 * @package Imponeer\Contracts\ExtensionsSetup
 */
interface SetupStepInterface
{
    /**
     * Constructor.
     *
     * @param OutputDecorator|null $output Where step info will be written
     */
    public function __construct(?OutputDecorator $output);

    /**
     * Execute setup step
     *
     * @param InstallableExtensionInterface $extension Object that will be installed/updated or removed
     * @param array $params Extra params
     *
     * @return bool
     */
    public function execute(InstallableExtensionInterface $extension, ...$params): bool;

    /**
     * Get priority to use this step
     *
     * @return int
     */
    public function getPriority(): int;
}
