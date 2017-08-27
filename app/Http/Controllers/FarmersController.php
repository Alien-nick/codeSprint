<?php

namespace App\Http\Controllers;

use App\Farmers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Buyers;
use Redirect;

class FarmersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = Buyers::all();
        return view('Buyers.index')->with('demands', $demands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Farmers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = Input::all();
      $inStocks = new Farmers;
      //$bid->user_id = Input::get('userId');
      $inStocks->crop_name = Input::get('crop_name');
      $inStocks->crop_quantity = Input::get('crop_quantity');
      $inStocks->crop_cost_per_lb = Input::get('crop_cost_per_lb');
      $inStocks->crop_produce_date = date('Y-m-d', strtotime(Input::get('crop_produce_date')));
      $inStocks->crop_estimate_reap_date = date('Y-m-d', strtotime(Input::get('crop_estimate_reap_date')));
      $inStocks->save();
      return redirect::route('Farmers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmers  $farmers
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $inStocks = Farmers::find($id);
      return view('Farmers.show')->with('inStocks', $inStocks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmers  $farmers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inStocks = Farmers::findorFail($id);
        return view('Farmers.edit')->with('inStocks', $inStocks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmers  $farmers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $inStocks = new Farmers;
      $demands = Farmers::findOrFail($id);

      $inStocks->update(['crop_name' => $request->crop_name,
                         'crop_quantity' => $request->crop_quantity,
                         'crop_produce_date' => date('Y-m-d', strtotime($request->crop_produce_date)),
                         'crop_estimate_reap_date' => date('Y-m-d', strtotime($request->crop_estimate_reap_date)),
                         'crop_price_per_lb' => $request->crop_cost_per_lb
                        ]);
      return redirect::route('Farmers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmers  $farmers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $inStocks = Farmers::find($id);
      $inStocks->delete();
      return $this->index();
    }

  
}
