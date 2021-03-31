<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use DB;
class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels=Hotel::get();
        $countries=DB::table('countries')->get();
        return view('agent.management.hotel')->with('hotels',$hotels)->with('countries',$countries);
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
        
        // $request->validate([
        //     'country'=>'required',
        //     'hotel_name'=>'required',
        //     'charges_per_day'=>'required',
        // ]);
        $images=array();
        if($files=$request->file('images')){
        foreach($files as $file){
                $name=time().'.'.$file->extension();
                $file->move('storage/images',$name);
                $images[]=$name;
                                }
        }
         
        $hotel=new Hotel;
        $hotel->country=$request->country;
        $hotel->images=implode(",",$images);
        $hotel->hotel_name=$request->hotel_name;
        $hotel->charges_per_day=$request->charges_per_day;
        $hotel->save();
        return redirect('hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $hotel)
    {
        dd($hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return back();
    }
}
