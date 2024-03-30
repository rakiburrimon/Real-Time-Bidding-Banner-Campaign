<?php

namespace Modules\RTBManagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\RTBManagement\Database\factories\BidRequestFactory;

class BidRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): BidRequestFactory
    {
        //return BidRequestFactory::new();
    }
}
