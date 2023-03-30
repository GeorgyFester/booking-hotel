<?php

namespace App\JsonApi\V1;

use LaravelJsonApi\Core\Server\Server as BaseServer;

class Server extends BaseServer
{
    protected string $baseUri = '/api/v1';

    public function serving(): void
    {
        // no-op
    }

    protected function allSchemas(): array
    {
        return [
            Hotels\HotelSchema::class,
            Rooms\RoomSchema::class,
        ];
    }
}
