<?php

declare(strict_types=1);

namespace PHPUnitForGraphQLAPI\GraphQLAPI\Integration;

/**
 * Test that updating the base path for the private persisted queries works well
 */
class PrivatePersistedQueryBasePathSettingsWebserverRequestTest extends AbstractPersistedQueryBasePathSettingsWebserverRequestTest
{
    protected function getModuleID(string $dataName): string
    {
        return 'graphqlapi_graphqlapi_private-persisted-queries';
    }

    protected function getPersistedQueryURL(string $basePath): string
    {
        return $basePath . '/comments-from-this-month/';
    }

    protected function getNonExistingPathEntry(): string
    {
        return 'privaaaaaate-queeeeery';
    }

    protected function sendAuthenticatedRequest(): bool
    {
        return true;
    }
}
