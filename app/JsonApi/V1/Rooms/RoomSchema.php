<?php

namespace App\JsonApi\V1\Rooms;

use App\Models\Room;
use LaravelJsonApi\Eloquent\Contracts\Paginator;
use LaravelJsonApi\Eloquent\Fields\Boolean;
use LaravelJsonApi\Eloquent\Fields\DateTime;
use LaravelJsonApi\Eloquent\Fields\ID;
use LaravelJsonApi\Eloquent\Fields\Number;
use LaravelJsonApi\Eloquent\Fields\Relations\BelongsTo;
use LaravelJsonApi\Eloquent\Fields\Str;
use LaravelJsonApi\Eloquent\Filters\WhereIdIn;
use LaravelJsonApi\Eloquent\Pagination\PagePagination;
use LaravelJsonApi\Eloquent\Schema;

class RoomSchema extends Schema
{
    public static string $model = Room::class;

    public function fields(): array
    {
        return [
            ID::make(),
            Number::make('room_number'),
            BelongsTo::make('hotel_id')->type('hotels')->readOnly(),
            Str::make('description'),
            Number::make('number_of_beds')->sortable(),
            Boolean::make('is_booked'),
            DateTime::make('starts_at'),
            DateTime::make('ends_at'),
        DateTime::make('createdAt')->sortable()->readOnly(),
            DateTime::make('updatedAt')->sortable()->readOnly(),
        ];
    }

    public function filters(): array
    {
        return [
            WhereIdIn::make($this),
        ];
    }

    public function pagination(): ?Paginator
    {
        return PagePagination::make();
    }

}
