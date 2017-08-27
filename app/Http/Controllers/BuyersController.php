<?php

namespace App\Http\Controllers;

use App\Farmers;
use App\Buyers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Redirect;

class BuyersController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands = Buyers::orderBy('id', 'desc')->paginate(5);;
        return view('Buyers.index')->with('demands',$demands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Buyers.create');
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
        $demands = new Buyers;
        //$bid->user_id = Input::get('userId');
        $demands->crop_type = Input::get('crop_type');
        $demands->order_quantity = Input::get('order_quantity');
        $demands->start_date_of_order = date('Y-m-d', strtotime(Input::get('start_date_of_order')));
        $demands->end_date_of_order = date('Y-m-d', strtotime(Input::get('end_date_of_order')));
        $demands->user_id = auth()->id();
        $demands->order_status = 'approved';
        $demands->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function show(Buyers $buyers)
    {
      return view('Buyers.show')->with('buyers', $buyers);
      //dd($demands);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demands = Buyers::findorFail($id);
        return view('Buyers.edit')->with('demands', $demands);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    // public function update(Buyers $Buyer)
    // {
    //   $request = new Request;
    //   $Buyer = new Buyers;
    //
    //   $Buyer->update(['crop_type' => $request->crop_type,
    //                      'order_quantity' => $request->order_quantity,
    //                      'end_date_of_order' => date('Y-m-d', strtotime($request->end_date_of_order)),
    //                      'order_status' => $request->order_status
    //                     ]);
    //     //dd($Buyer);
    //    return $this->index();
    // }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
                'crop_type' => 'required',
                'order_quantity' => 'required',
                'end_date_of_order' => 'required',
                'order_status' => 'required'
            ]);
        $post =  Buyers::find($id);
        $post->crop_type = $request->input('crop_type');
        $post->order_quantity = $request->input('order_quantity');
        $post->end_date_of_order = date('Y-m-d', strtotime($request->end_date_of_order));
        $post->order_status = $request->input('order_status');
        $post->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyers  $buyers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $demands = Buyers::find($id);
        $demands->delete();
        return $this->index();
    }
}
