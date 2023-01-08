<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $active_bid_banner = DB::table('products')
                    ->select(DB::raw('COUNT(*) AS total_product'))
                    ->where('status', 'onprocess')
                    ->first();

        $active_bid = DB::table('bids as a')
                    ->join('products as b', 'a.product_id', '=', 'b.id')
                    ->select('b.id as product_id', 'b.name', 'b.start_date', 'b.end_date', DB::raw('COUNT(*) AS total_bid'))
                    ->where('b.status', 'onprocess')
                    ->groupBy('b.id', 'b.name', 'b.start_date', 'b.end_date')
                    ->get();
        
        $winner_banner = DB::table('bids')
        ->select(DB::raw('COUNT(*) AS total_win'))
        ->where('status', 'winner')
        ->where('user_id', auth()->user()->id)
        ->first();

        $winner = DB::table('bids as a')
                ->join('users as b', 'a.user_id', '=', 'b.id')
                ->join('products as c', 'a.product_id', '=', 'c.id')
                ->select(DB::raw('MAX(a.price) as highest_bid'),DB::raw('MIN(a.price) as lowest_bid'),
                    'b.name as username', 'c.name as product_name', 'c.open_price', 'c.end_date')
                ->where('a.status', 'winner')
                ->where('a.user_id', auth()->user()->id)
                ->groupBy('username', 'product_name', 'c.open_price', 'c.end_date')
                ->get();

        return view('dashboard.index', compact('active_bid', 'active_bid_banner', 'winner', 'winner_banner'));
    }
    public function about()
    {
        return view('about.about');
    }
    public function contact()
    {
        return view('contact.contact');
    }

}
