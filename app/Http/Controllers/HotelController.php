<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\Ticket;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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



        return view('super_agent.hotel.listing')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data['user']=Auth::user();
       $data['countries']=Country::get();
       $data['sub_active']="Hotel";
        return view('super_agent.hotel.create',$data);
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
            'name'=>'required',
            'image'=>'required',
            'country_id'=>'required',
            'state_id'=>'required',
            'city_id'=>'required',
            'address'=>'required',
            'description'=>'required|min:20|max:200',
        ]);

        $file= $request->file('image');
                $name = time() . '.' . $file->extension();
                $file->move('storage/images', $name);

        $hotel = new Hotel;
        $hotel->name = $request->name;

        $hotel->country_id= $request->country_id;
        $hotel->super_agent_id = Auth::user()->userable->id;
        $hotel->state_id = $request->state_id;
        $hotel->city_id = $request->city_id;
        $hotel->description = $request->description;
        $hotel->address = $request->address;
        
        $hotel->save();

             $hotel->images()->save(Image::create([
                 'image'=>$name,
             ]));
        //  return $this->add_room($hotel);
        return Redirect::route('add-room',$hotel->id);
        
        // return redirect('surper-agent/add-room/',$data);
  }

    public function add_room($id)
    {
       $data['user']=Auth::user();
       $data['hotel']=Hotel::find($id);
       $data['rooms']=$data['hotel']->rooms;
       $data['countries']=Country::get();
       $data['sub_active']="Hotel";
       return view('super_agent.hotel.room.listing',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function room_store(Request $request)
    {
    
         $request->validate([
             'charges_per_day'=>'required|integer|min:200',
             'title'=>'required',
             'images'=>'required',
             'capacity'=>'required|integer|max:10',
        ]);
        // dd($request->file('images'));
        $images = array();
        if ($files = $request->file('images')) {
            
            foreach ($files as $file) {
                $name = time() . '.' . $file->extension();
                $file->move('storage/images', $name);
                $images[] = $name;
            }
        }     

        
        $room=Room::create($request->all());
        
         $hotel=Hotel::find($request->hotel_id);
     
         $hotel->rooms()->save($room);
         foreach($images as $image)
         {
             $room->images()->save(Image::create(['image'=>$image]));
         }
         
        return Redirect::route('add-room',$hotel->id);
        
    }

    public function book_room(Request $request)
    {
        dd($request->all());
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
    public function room_destroy($room_id)
    {
        $room=Room::where('id',$room_id);
        $room->delete();
        return back();
    }
}
