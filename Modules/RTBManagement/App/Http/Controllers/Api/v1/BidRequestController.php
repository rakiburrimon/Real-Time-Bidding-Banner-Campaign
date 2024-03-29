<?php

namespace Modules\RTBManagement\App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Modules\RTBManagement\App\Models\BidRequest;

class BidRequestController extends Controller
{
    public function index($campaign_id)
    {
        $bids = BidRequest::where('campaign_id', $campaign_id)->get();
        return response()->json(['data' => $bids], 200);
    }

    public function show($campaign_id, $bid_id)
    {
        $bid = BidRequest::where('campaign_id', $campaign_id)->findOrFail($bid_id);
        return response()->json(['data' => $bid], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for bid parameters here
        ]);

        $bid = BidRequest::create($request->all());

        return response()->json(['data' => $bid], 201);
    }
}
