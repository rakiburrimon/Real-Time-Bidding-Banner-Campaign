<?php

namespace Modules\RTBManagement\App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\RTBManagement\App\Models\Bid;

class BidController extends Controller
{
    public function index($campaign_id)
    {
        $bids = Bid::where('campaign_id', $campaign_id)->get();

        return response()->json([
            'status' => 'success',
            'data' => $bids,
            'message' => 'Bids retrieved successfully'
        ], 200);
    }

    public function show($campaign_id, $bid_id)
    {
        $bid = Bid::findOrFail($bid_id);

        return response()->json([
            'status' => 'success',
            'data' => $bid,
            'message' => 'Bid retrieved successfully'
        ], 200);
    }
}
