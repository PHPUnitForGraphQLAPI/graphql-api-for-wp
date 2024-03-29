<?php

declare(strict_types=1);

namespace PHPUnitForGraphQLAPI\GraphQLAPI\Integration;

use GraphQLAPI\GraphQLAPI\Constants\ModuleSettingOptions;

class DefaultExposeSensitiveDataForSchemaConfigurationModifyPluginSettingsFixtureEndpointWebserverRequestTest extends AbstractModifyPluginSettingsFixtureEndpointWebserverRequestTestCase
{
    protected function getEndpoint(): string
    {
        // This endpoint has "Expose sensitive data in the schema" as "Default"
        return 'graphql/mobile-app/';
    }

    protected function getFixtureFolder(): string
    {
        return __DIR__ . '/fixture-default-expose-sensitive-data-for-schema-configuration';
    }

    protected function getSettingsKey(): string
    {
        return ModuleSettingOptions::DEFAULT_VALUE;
    }

    protected function getModuleID(string $dataName): string
    {
        return 'graphqlapi_graphqlapi_schema-expose-sensitive-data';
    }

    protected function getPluginSettingsNewValue(): mixed
    {
        return false;
    }
}
