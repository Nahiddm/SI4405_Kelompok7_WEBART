<?php

namespace App\Http\Controllers\Bid;

use App\Http\Controllers\Controller;
use App\Models\Bid;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class BidController extends Controller
{
    public function listBid($product_id)
    {
        $product = Product::findOrfail($product_id);
        $listBid = DB::table('bids as a')
                ->join('users as b', 'a.user_id', 'b.id')
                ->join('products as c', 'a.product_id', '=', 'c.id')
                ->select('a.*', 'b.name as user', 'c.status as status_auction')
                ->where('a.product_id', $product_id)
                ->orderBy('a.created_at', 'asc')
                ->get();

        return view('bid.list_bid', compact('product', 'listBid'));
    }

    public function bid(Request $request, $product_id)
    {
        $data = $request->validate([
            "price" => ['required']
        ]);

        Product::findOrFail($product_id);
        
        Bid::create([
            "user_id" => $request->user()->id,
            "product_id" => $product_id,
            "price" => $data['price'],
            "tgl_bid" => Carbon::now(),
            "status" => "waiting-list"
        ]);

        return to_route("listBid", $product_id);
    }

    public function save_winner(Request $request, $id)
    {
        $bid = Bid::findOrFail($id);

        if($bid)
        {
            Bid::where('id', $id)->update([
                'status' => 'winner'
            ]);

            Product::where('id', $request['product_id'])->update([
                'status' => 'done'
            ]);
        }

        return to_route("products.index");
    }
}
