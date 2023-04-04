<?php

namespace App\JsonApi\V1\Rooms;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class RoomRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'room_number' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'number_of_beds' => ['required', 'integer'],
            'is_booked' => ['nullable', 'boolean'],
            'starts_at' => ['nullable', JsonApiRule::dateTime(), 'after_or_equal:today'],
            'ends_at' => ['nullable', JsonApiRule::dateTime(), 'after:starts_at'],
            'hotel' => ['required', JsonApiRule::toOne()]
        ];
    }

}
