<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Comment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function order(OrderRequest $request){
        $orders = Order::where("user_id", Auth::id())->get();
        $comments = Comment::all();
        return view('profile', compact('orders', 'comments'));
    }

    public function orderform(OrderRequest $request){
        $order = New Order;
        $order->user_id = Auth::user()->id;
        $order->name = $request->name;
        $order->date = $request->date;
        $order->payment = $request->payment;
        $order->save();
        return redirect()->route('order');

    }

    public function vieworder()
    {
        return view("order");
    }
}
