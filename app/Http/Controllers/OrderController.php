<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'title' => 'Home'
        ]);
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $request->validate([
            'pelanggan_id' => 'required',
            'menu_id' => 'required'
        ]);

        $id = $request->menu_id;
        $jumlah = 1;
        for ($i=0; $i < count($request->menu_id); $i++) { 
            if($i > 0){
                if ($id[$i]==$id[$i-1]) {
                    $jumlah += 1;
                }
                else {
                    $save = [
                        'pelanggan_id' => $request->pelanggan_id,
                        'menu_id' => $id[$i-1],
                        'jumlah' => $jumlah
                    ];
                    DB::table('orders')->insert($save);
                    if ($i == (count($request->menu_id)-1)) {
                        $save = [
                            'pelanggan_id' => $request->pelanggan_id,
                            'menu_id' => $id[$i],
                            'jumlah' => $jumlah
                        ];
                        DB::table('orders')->insert($save);
                    }
                    $jumlah = 1;
                }
            }
        }
        return redirect('/info')->with('success', 'Data saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Pelanggan $pelanggan)
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
