<?php

namespace Modules\RTBManagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\RTBManagement\Database\factories\BidFactory;

class Bid extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory(): BidFactory
    {
        //return BidFactory::new();
    }
}
