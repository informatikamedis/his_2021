<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();

        return view('room.index', [
            'rooms' => $rooms
        ]);
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        //dd($request);

        $room->update([
            'bed_used' => $request->bed_used,
            'status' => $request->status,
        ]);

        return redirect()->route('room');
    }

    public function getcost(Request $request)
    {
        $data = $request->all();
        $rooms = Room::where('room_name', '=', $data)->get('cost');

        return response()->json($rooms, 200);
    }
}
