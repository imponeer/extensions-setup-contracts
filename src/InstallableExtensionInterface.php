<?php

namespace Imponeer\Contracts\ExtensionsSetup;

use Imponeer\Contracts\ExtensionInfo\ExtensionInfoInterface;

/**
 * Extension that must implement all classes that supplies data for setup step
 *
 * @package Imponeer\Contracts\ExtensionsSetup
 */
interface InstallableExtensionInterface
{

    /**
     * Gets extension info
     *
     * @return ExtensionInfoInterface
     */
    public function getExtensionInfo(): ExtensionInfoInterface;

}