<?php

namespace Modules\RTBManagement\App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\RTBManagement\App\Models\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();

        return response()->json([
            'status' => 'success',
            'data' => $campaigns,
            'message' => 'Campaigns retrieved successfully'
        ], 200);
    }

    public function show($id)
    {
        $campaign = Campaign::findOrFail($id);

        return response()->json([
            'status' => 'success',
            'data' => $campaign,
            'message' => 'Campaign retrieved successfully'
        ], 200);
    }

    public function store(Request $request)
    {
        // Validate incoming campaign data
        $request->validate([
            // Add validation rules here
        ]);

        // Create a new campaign
        $campaign = Campaign::create($request->all());

        return response()->json([
            'status' => 'success',
            'data' => $campaign,
            'message' => 'Campaign created successfully'
        ], 201);
    }
}
