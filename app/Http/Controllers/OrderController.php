<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{


    public function order(OrderRequest $request){
        $order = New Order;
        $order->user_id = Auth::user()->id;
        $order->name = $request->name;
        $order->date = $request->date;
        $order->pay = $request->pay;
        $order->save();
        return redirect()->route('order');

    }

    public function vieworder()
    {
        return view("order");
    }
}
