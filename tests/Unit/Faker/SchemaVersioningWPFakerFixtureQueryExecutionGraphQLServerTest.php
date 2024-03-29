<?php

declare(strict_types=1);

namespace PHPUnitForGraphQLAPI\GraphQLAPI\Unit\Faker;

use PHPUnitForGraphQLAPI\WPFakerSchema\Unit\AbstractWPFakerFixtureQueryExecutionGraphQLServerTestCase;
use PoP\Root\Module\ModuleInterface;

class SchemaVersioningWPFakerFixtureQueryExecutionGraphQLServerTest extends AbstractWPFakerFixtureQueryExecutionGraphQLServerTestCase
{
    protected function getFixtureFolder(): string
    {
        return __DIR__ . '/fixture-schema-versioning';
    }

    /**
     * @return array<class-string<ModuleInterface>>
     */
    protected static function getGraphQLServerModuleClasses(): array
    {
        return [
            ...parent::getGraphQLServerModuleClasses(),
            ...[
                \PHPUnitForGraphQLAPI\DummySchema\Module::class,
            ]
        ];
    }
}
