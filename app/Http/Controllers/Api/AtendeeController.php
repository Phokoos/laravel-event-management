<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AttendeeResource;
use App\Http\Resources\EventResource;
use App\Models\Atendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AtendeeController extends Controller
{
    public function index(Event $event)
    {
        $attendees = $event->attendees()->latest();

        return AttendeeResource::collection(
            $attendees->paginate()
        );
    }

    public function store(Request $request, Event $event)
    {
        $attendee = $event->attendees()->create([
            'user_id' => 1,
        ]);

        return new AttendeeResource($attendee);
    }

    public function show(Event $event, Atendee $attendee)
    {
        return new AttendeeResource($attendee);
    }

//    public function update(Request $request, string $id)
//    {
//    }

    public function destroy(string $event, Atendee $attendee)
    {
        $attendee->delete();

        return response(status: 204);
    }
}
