<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use DB;
use DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.orders');
    }

    public function showOrders()
    {
        $order = Order::join('menus','orders.item_id','menus.id')->join('users','users.id','orders.user_id')->select('menus.name','contact_number','prize','users.name as user_name','orders.*')->get();
//        dd($order);
        foreach ($order as $ord){
            $ord->prize = $ord->quantity*$ord->prize;
        }
        return Datatables::of($order)->addColumn('action', function ($order) {
            $re = 'orders/' . $order->id.'/edit';
            $sh = 'orders/' . $order->id;
            $del = 'orders/delete/' . $order->id;
            return '<a href=' . $sh . '><i class="glyphicon glyphicon-eye-open"></i></a> <a href=' . $re . '><i class="glyphicon glyphicon-edit"></i></a> <a href=' . $del . '><i class="glyphicon glyphicon-trash"></i></a>';
        })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::beginTransaction();

        try {
            $order = Order::find($id);
            $order->delete();
            DB::commit();
            return redirect('orders')->with("status", "Order Item deleted successfully");
        } catch (\Exception $e) {
            return redirect('orders')->with("error", "Could not delete order item, please contact system admin".$e);
        }
    }
}
