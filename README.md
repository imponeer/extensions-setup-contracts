[![License](https://img.shields.io/github/license/imponeer/extensions-setup-contracts.svg)](LICENSE) [![GitHub release](https://img.shields.io/github/release/imponeer/extensions-setup-contracts.svg)](https://github.com/imponeer/extensions-setup-contracts/releases) [![PHP](https://img.shields.io/packagist/php-v/imponeer/extensions-setup-contracts.svg)](http://php.net) [![Packagist](https://img.shields.io/packagist/dm/imponeer/extensions-setup-contracts.svg)](https://packagist.org/packages/imponeer/extensions-setup-contracts)

# Extensions Setup Contracts

Interfaces for writing setup logic when installing extensions. This package provides standardized contracts that define how extensions should be installed, updated, or removed in a consistent and predictable manner.

## Installation

To install and use this package, we recommend using [Composer](https://getcomposer.org):

```bash
composer require imponeer/extensions-setup-contracts
```

Alternatively, you can manually include files from the `src/` directory, though this approach is not recommended.

## Example

Here's a basic example of how to implement the contracts:

```php
use Imponeer\Contracts\ExtensionsSetup\InstallableExtensionInterface;
use Imponeer\Contracts\ExtensionsSetup\SetupStepInterface;
use Imponeer\Contracts\ExtensionInfo\ExtensionInfoInterface;
use Imponeer\Decorators\LogDataOutput\OutputDecorator;

// Implement an installable extension
class MyExtension implements InstallableExtensionInterface
{
    public function getExtensionInfo(): ExtensionInfoInterface
    {
        // Return extension information
        return new MyExtensionInfo();
    }
}

// Implement a setup step
class DatabaseSetupStep implements SetupStepInterface
{
    public function __construct(?OutputDecorator $output)
    {
        // Initialize with optional output decorator for logging
    }

    public function execute(InstallableExtensionInterface $extension, array $params): bool
    {
        // Perform database setup logic
        return true;
    }

    public function getPriority(): int
    {
        // Return priority (lower numbers = higher priority)
        return 10;
    }
}
```

## Development

This section describes the development-related Composer commands available for this project.

### Code Style Checking

```bash
composer phpcs
```

### Code Style Fixing

```bash
composer phpcbf
```

### Static Analysis

```bash
composer phpstan
```

## API Documentation

Detailed API documentation is available in the [project wiki](https://github.com/imponeer/extensions-setup-contracts/wiki). This documentation is automatically updated whenever changes are made to the codebase.

## How to contribute?

If you want to add functionality or fix bugs, you can fork the repository, make your changes, and create a pull request.

If you find any bugs or have questions, please use the [issues tab](https://github.com/imponeer/extensions-setup-contracts/issues) to report them.
