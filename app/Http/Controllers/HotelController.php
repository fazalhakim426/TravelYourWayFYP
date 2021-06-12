<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use App\Models\Ticket;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sub_active'] = 'Hotel';

        $data['user'] = Auth::user();

        $data['hotels'] = Hotel::get();
        $data['countries'] = DB::table('countries')->get();



        return view('super_agent.hotel.hotel')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $ticket=Ticket::where('user_id','=',Auth::user()->id)->where('status','=','Incomplete')->first();
       $data['user']=Auth::user();
       $data['ticket']=$ticket;
       $data['countries']=Country::get();
       $data['sub_active']="Hotel";
        return view('super_agent.hotel.add_hotel',$data);
    

        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'hotel_name'=>'required',
            'image'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
        ]);
        $images = array();
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $name = time() . '.' . $file->extension();
                $file->move('storage/images', $name);
                $images[] = $name;
            }
        }

        $hotel = new Hotel;
        $hotel->country_id= $request->country_id;
        $hotel->super_agent_id = Auth::user()->userable->id;
        $hotel->state_id = $request->state_id;
        $hotel->city_id = $request->city_id;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->charges_per_day = $request->charges_per_day;
        $hotel->save();

         foreach($images as $image)
         {
             $hotel->images()->save($image);
         }
        // $hotel->images = implode(",", $images);
dd('done');
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
