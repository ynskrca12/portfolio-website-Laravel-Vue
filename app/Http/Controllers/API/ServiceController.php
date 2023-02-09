<?php

namespace App\Http\Controllers\API;

use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function get_all_service() {
        $services = Service::orderBy('id','DESC')->get();

        return response()->json([
            'services' => $services
        ],200);
    }

    public function create_service(Request $request) {

        $this->validate($request,[
            'name' => 'required'
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->icon = $request->icon;
        $service->description = $request->description;
        $service->save();
    }
}
