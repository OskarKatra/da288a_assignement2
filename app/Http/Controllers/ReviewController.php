<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Review;

class ReviewController extends BaseController
{

    public function showAllReviews()
    {
        return response()->json(Review::all());
    }
}