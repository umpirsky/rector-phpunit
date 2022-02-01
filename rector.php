<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();
    $parameters->set(Option::PATHS, [
        __DIR__ . '/ProblematicTest.php'
    ]);

    $services = $containerConfigurator->services();
    $services->set(Rector\PHPUnit\Rector\ClassMethod\MigrateAtToConsecutiveExpectationsRector::class);
};
