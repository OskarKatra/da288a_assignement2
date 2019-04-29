<?php

namespace App\Http\Controllers;

use App\Store;

use Laravel\Lumen\Routing\Controller as BaseController;

class StoreController extends BaseController
{

    public function showAllStores()
    {
        return response()->json(Store::all());
    }

}