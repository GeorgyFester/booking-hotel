<?php

namespace App\JsonApi\V1\Hotels;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class HotelRequest extends ResourceRequest
{

    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string'],
            'address' => ['required', 'string'],
            'star_rating' => ['integer'],
            'rooms' => JsonApiRule::toMany(),
        ];
    }

}
