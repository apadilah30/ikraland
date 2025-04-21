<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Plant;
use App\Models\PlantFavorite;
use App\Models\Scans;
use Illuminate\Http\Request;
use Str;

class GeneralController extends Controller
{
    function getNewDeviceId(Request $request)
    {
        return response()->json([
            'token' => Str::uuid(),
        ]);
    }

    function addFavorite(Request $request)
    {
        $request->validate([
            'device_id' => 'required',
            'plant_id' => 'required',
        ]);

        $data = [
            'device_id' => $request->device_id,
            'plant_id' => $request->plant_id,
        ];

        $store = PlantFavorite::where('device_id', $request->device_id)
            ->where('plant_id', $request->plant_id)
            ->first();

        return response()->json([
            'status' => true,
            'message' => "Berhasil menambahkan ke favorit",
            'data' => $data,
        ]);
    }

    function getFavorite(Request $request)
    {
        $data = PlantFavorite::with('plant.category', 'plant.images')
            ->where('device_id', $request->device_id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return response()->json([
            'status' => true,
            'message' => "Berhasil mendapatkan data favorit",
            'data' => $data,
        ]);
    }

    function scan(Request $request)
    {
        $request->validate([
            'device_id' => 'required',
            'plant_id' => 'required',
        ]);

        $plant = Plant::with('images', 'category')
            ->where('slug', $request->plant_id)
            ->first();

        $data = [
            'device_id' => $request->device_id,
            'plant_id' => $plant->id,
            'device_name' => $request->device_id,
        ];

        Scans::create($data);

        return response()->json([
            'status' => true,
            'message' => "Berhasil menambahkan ke scan",
            'data' => $plant,
        ]);
    }
}
