<?php

namespace App\Http\Controllers;

use App\Listings;
use Illuminate\Http\Request;

class ListingsController extends Controller
{

    public function featuredListings()
    {
        $listings = Listings::all();

        return view('welcome', ['listings' => $listings]);
    }
}
