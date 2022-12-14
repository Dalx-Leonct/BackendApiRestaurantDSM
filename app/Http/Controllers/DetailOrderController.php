<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DetailOrder;
use App\Models\Order;
use App\Http\Requests\StoreDetailOrderRequest;
use App\Http\Requests\UpdateDetailOrderRequest;

class DetailOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DetailOrder::orderBy('id')->get();
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
     * @param  \App\Http\Requests\StoreDetailOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'quantity'=> 'required',
            'product_id'=>'required',
            'order_id'=>'required'
        ]);

        DetailOrder::create([
            'quantity'=> $request->quantity,
            'product_id'=>$request->product_id,
            'order_id'=>$request->order_id,
        ]);

        return 'Detalle de orden agregada correctamente';

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function show(DetailOrder $detailOrder)
    {
        //
    }

    public function show1($id)
    {
        return DetailOrder::where('order_id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailOrder $detailOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetailOrderRequest  $request
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetailOrderRequest $request, DetailOrder $detailOrder)
    {
        $detailOrder->update($request->all());
        return $detailOrder;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailOrder  $detailOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailOrder $detailOrder)
    {
        $detailOrder->delete();
        return 'Orden eliminada';
    }
}
