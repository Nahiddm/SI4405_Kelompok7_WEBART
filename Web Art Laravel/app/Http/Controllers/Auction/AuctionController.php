<?php

namespace App\Http\Controllers\Auction;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use App\Models\Product;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class AuctionController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('auction.index', compact('products'));
    }
}
