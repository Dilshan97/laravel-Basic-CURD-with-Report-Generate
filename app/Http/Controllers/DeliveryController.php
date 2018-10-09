<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::all();

        return view('deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'order_id' => 'required|numeric',
            'customer_name' => 'required',
            'customer_id' => 'required|numeric',
            'receivers_name' => 'required',
            'receiver_contact' => 'required|min:10|numeric',
            'receivers_nic' =>            [
                'required', 'min:9',
                'regex:/^([0-9]{9}|[0-9]{12})[A-Za-z]$/'
            ]  
        ]);

        $delivery = new Delivery();

        $delivery->order_id = $request->order_id;

        $delivery->customer_name = $request->customer_name;

        $delivery->customer_id = $request->customer_id;

        $delivery->receivers_name = $request->receivers_name; 

        $delivery->receiver_contact = $request->receiver_contact; 

        $delivery->receivers_nic = $request->receivers_nic; 

        $delivery->save();

        return redirect(route('deliveries.index'));
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
        $delivery = Delivery::findOrFail($id);

        return view('deliveries.edit', compact('delivery'));
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
        $this->validate($request,[
            'order_id' => 'required|numeric',
            'customer_name' => 'required',
            'customer_id' => 'required|numeric',
            'receivers_name' => 'required',
            'receiver_contact' => 'required|min:10|numeric',
            'receivers_nic' =>            [
                'required', 'min:9',
                'regex:/^([0-9]{9}|[0-9]{12})[A-Za-z]$/'
            ]  
        ]);


        $delivery = Delivery::findOrFail($id);

        $delivery->order_id = $request->order_id;

        $delivery->customer_name = $request->customer_name;

        $delivery->customer_id = $request->customer_id;

        $delivery->receivers_name = $request->receivers_name; 

        $delivery->receiver_contact = $request->receiver_contact; 

        $delivery->receivers_nic = $request->receivers_nic; 

        $delivery->update();

        return redirect(route('deliveries.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::findOrFail($id);

        $delivery->delete();

        return redirect(route('deliveries.index'));
    }
}
