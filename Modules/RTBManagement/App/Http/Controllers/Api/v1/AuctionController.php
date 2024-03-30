<?php

namespace Modules\RTBManagement\App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Modules\RTBManagement\App\Models\Campaign;

class AuctionController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();
        return response()->json(['data' => $campaigns], 200);
    }

    public function show($id)
    {
        $campaign = Campaign::findOrFail($id);
        return response()->json(['data' => $campaign], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for campaign parameters here
        ]);

        $campaign = Campaign::create($request->all());

        return response()->json(['data' => $campaign], 201);
    }
}
