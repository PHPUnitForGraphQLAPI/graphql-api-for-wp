<?php

declare(strict_types=1);

namespace PHPUnitForGraphQLAPI\GraphQLAPI\Integration;

class AccessPasswordProtectedCustomEndpointSuccessQueryExecutionFixtureWebserverRequestTest extends AbstractAccessPasswordProtectedCustomEndpointQueryExecutionFixtureWebserverRequestTestCase
{
    protected function getResponseFixtureFolder(): string
    {
        return __DIR__ . '/fixture-password-protected-custom-endpoints-success';
    }

    protected function accessClient(): bool
    {
        return false;
    }
}
