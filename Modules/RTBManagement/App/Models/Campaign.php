<?php

namespace Modules\RTBManagement\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\RTBManagement\Database\factories\CampaignFactory;

class Campaign extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];

    protected static function newFactory()
    {
        return \Database\Factories\Modules\RTBManagement\App\Models\CampaignFactory::new();
    }
}
