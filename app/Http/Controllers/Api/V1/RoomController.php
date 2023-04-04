<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\JsonApi\V1\Rooms\RoomRequest;
use App\JsonApi\V1\Rooms\RoomSchema;
use App\Models\Room;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Response;
use LaravelJsonApi\Laravel\Http\Controllers\Actions;
use LaravelJsonApi\Laravel\Http\Requests\AnonymousQuery;
use LaravelJsonApi\Core\Responses\DataResponse;

class RoomController extends Controller
{

    use Actions\FetchMany;
    use Actions\FetchOne;
    use Actions\Store;
    use Actions\Update;
    use Actions\Destroy;
    use Actions\FetchRelated;
    use Actions\FetchRelationship;
    use Actions\UpdateRelationship;
    use Actions\AttachRelationship;
    use Actions\DetachRelationship;

    public function booking (
        RoomSchema $schema,
        AnonymousQuery $query,
        RoomRequest $request,
        Room $room
    ): Responsable|Response {

        $room->update();

        $model = $schema
            ->repository()
            ->update($room)
            ->withRequest($query)
            ->store($request->validated());

        return new DataResponse($model);
    }

}
