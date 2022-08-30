<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Resources\V2\IsyolSettingCollection;
use App\Models\IsyolSetting;

class IsyolSettingController extends Controller
{
    public function index()
    {
        return new IsyolSettingCollection(IsyolSetting::all());
    }
}
