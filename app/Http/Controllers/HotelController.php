<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\City;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\Image;
use App\Models\Room;
use App\Models\State;
use App\Models\Ticket;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class HotelController extends Controller
{
    
   
    public function index()
    {
        $data['sub_active'] = 'Hotel';

        $data['user'] = Auth::user();

        $data['hotels'] = Hotel::get();
        $data['countries'] = DB::table('countries')->get();



        return view('super_agent.hotel.listing')->with($data);
    }

    public function hotelCredentials()
    {
        $data['from']=Carbon::now()->format('Y-m-d');
        
        $data['to']=Carbon::now()->addMonths(1)->format('Y-m-d');
        // dd()
        $data['countries']=Country::all();
        return $data;
    }
    public function hotel()
    {
        $data=$this->hotelCredentials();
        $data['rooms']=Room::with(['hotel','images'])->limit(6)->get();
        return view('hotel',$data);
    }

    public function hotel_dashboard()
    {
        
        $data['sub_active'] = 'Hotel';

        $data['user']=$user = Auth::user();
         $agent=$user->userable;
        $data['bookings']= $agent->bookings;
        return view('super_agent.hotel.dashboard')->with($data);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['user'] = Auth::user();
        $data['countries'] = Country::get();
        $data['sub_active'] = "Hotel";
        return view('super_agent.hotel.create', $data);
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
            'name' => 'required',
            'image' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
            'address' => 'required',
            'description' => 'required|min:20|max:200',
        ]);

        $file = $request->file('image');
        $name = time() . '.' . $file->extension();
        $file->move('storage/images', $name);

        $hotel = new Hotel;
        $hotel->name = $request->name;

        $hotel->country_id = $request->country_id;
        $hotel->super_agent_id = Auth::user()->userable->id;
        $hotel->state_id = $request->state_id;
        $hotel->city_id = $request->city_id;
        $hotel->description = $request->description;
        $hotel->address = $request->address;

        $hotel->save();

        $hotel->images()->save(Image::create([
            'image' => $name,
        ]));
        //  return $this->add_room($hotel);
        return Redirect::route('add-room', $hotel->id);

        // return redirect('surper-agent/add-room/',$data);
    }

    public function add_room($id)
    {
        $data['user'] = Auth::user();
        $data['hotel'] = Hotel::find($id);
        $data['rooms'] = $data['hotel']->rooms;
        $data['countries'] = Country::get();
        $data['sub_active'] = "Hotel";
        return view('super_agent.hotel.room.listing', $data);
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
            'charges_per_day' => 'required|integer|min:200',
            'title' => 'required',
            'images' => 'required',
            'capacity' => 'required|integer|max:10',
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


        $room = Room::create($request->all());

        $hotel = Hotel::find($request->hotel_id);

        $hotel->rooms()->save($room);
        foreach ($images as $image) {
            $room->images()->save(Image::create(['image' => $image]));
        }

        return Redirect::route('add-room', $hotel->id);
    }

    // public function book_room(Request $request)
    // {
    //     $request->customer_id=Auth::user()->userable_id;
    //     // dd($request->from);
    //     // $room=array();
    //     $available_room=array();
    //     foreach($request->room_id as $room_id){
    //         $room=Room::get();
    //         $room=Booking::get();


    //     }
    //     dd($room);
    //     return redirect()->back();
    // }

    public function store_room(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'room_id' => 'required',
        ]);
        $request->customer_id = Auth::user()->userable_id;
        // dd($request->customer_id);
        foreach ($request->room_id as $room_id) {
            Booking::create([
                "room_id" => $room_id,
                "from" => $request->from,
                "to" => $request->to,
                "customer_id" => $request->customer_id,
                "hotel_id" => $request->hotel_id,
            ]);
        }
        return redirect()->back();
    }



//     public function book_room(Request $request)
//     {

     

//         $request->validate([
//             'check_in' => 'required|min:today',
//             'check_out' => 'required|after:check_in',
//             // 'hotel_id' => 'required',
//         ]);

//         if ($request->room_id) {


//             $fdate = $request->from;
//             $tdate = $request->to;
//             $datetime1 = new DateTime($fdate);
//             $datetime2 = new DateTime($tdate);
//             $interval = $datetime1->diff($datetime2);
//             $days = $interval->format('%a') + 1;
//             $amount = 0;
//             foreach ($request->room_id as $room_id) {
//                 $room = Room::find($room_id);
//                 // echo $room->charges_per_day*$days;
//                 $amount += $room->charges_per_day * $days;
//                 // echo '<br>';
//             }


//             $data['from'] = $request->from;
//             $data['to'] = $request->to;


//             $data['hotel_id']=$request->hotel_id;            
//             $data['room_ids'] = $request->room_id;
//             $data['total_charges'] = $amount;




//             return view('customer.hotel.room.payment', $data);
//         } else {
//             $request->customer_id = Auth::user()->userable_id;

//             $hotel = Hotel::find($request->hotel_id);
//             $all_rooms = $hotel->rooms;
//             $from = $request->from;
//             $to = $request->to;

//             $reserved = Booking::whereBetween('from', [$from, $to])
//                 ->whereBetween('to', [$from, $to])->get();


//             foreach ($all_rooms as $all_room) {
//                 foreach ($reserved as $res) {
//                     //    dd($all_room);
//                     if ($res->room != null)
//                         if ($res->room->id == $all_room->id) {
//                             // echo dd(3);
//                             $all_room->reserved = 'reserved';
//                             break;
//                         }
//                 }
//             }
//             $data['countries'] = Country::all();
//             $data['hotel'] = $hotel;
//             $data['rooms'] = $hotel->rooms;
//             return view('customer.hotel.room.listing', $data);
//         }


//     }


    public function book_room(Request $request)
    {

     

        $request->validate([
            'check_in' => 'required|min:today',
            'check_out' => 'required|after:check_in',
            // 'hotel_id' => 'required',
        ]);


            $request->customer_id = Auth::user()->userable_id;

            // $hotel = Hotel::find($request->hotel_id);
            // $all_rooms = $hotel->rooms;
            $all_rooms=null;
            if($request->city_id)
            {
                $city=City::find($request->city_id);
                $all_rooms=$city->rooms;
            }
            elseif($request->state_id){
                $state=State::find($request->state_id);
                $all_rooms=$state->rooms;

            }
            else{
            $country=Country::find($request->country_id);
            $all_rooms=$country->rooms()->where();
            dd($all_rooms);
            }
         
// dd($all_rooms);
            $from = $request->check_in;
            $to = $request->check_out;

            $reserved = Booking::whereBetween('from', [$from, $to])
                ->whereBetween('to', [$from, $to])->get();

//    dd($reserved);

            foreach ($all_rooms as $all_room) {
                foreach ($reserved as $res) 
                {
                    if ($res->room != null)
                        if ($res->room->id == $all_room->id)
                            {
                            $all_room->reserved = 'yes';
                            break;
                            }
                }
            }
           $data=$this->hotelCredentials();
           $data['check_in']=$request->check_in;
           $data['check_out']=$request->check_out;
           $data['rooms']=$all_rooms;
// dd( $data['rooms']);
            return view('hotel', $data);
        

     


    }

    public function bookNow(Request $request)
    {

        
        $fdate = $request->check_in;
        $tdate = $request->check_out;
        $datetime1 = new DateTime($fdate);
        $datetime2 = new DateTime($tdate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a') + 1;
        $amount = 0;
        // foreach ($request->room_id as $room_id) {
            $room = Room::find($request->room_id);
            // echo $room->charges_per_day*$days;
            $amount = $room->charges_per_day * $days;
            // echo '<br>';
        // }


        $data['from'] = $request->check_in;
        $data['to'] = $request->check_out;


        $data['hotel_id']=$room->hotel->id;            
        $data['room_id'] = $request->room_id;
        $data['total_charges'] = $amount;




        return view('customer.hotel.room.payment', $data);
        
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function payment_by_hand(Request $request)
    {

        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'room_id' => 'required',
        ]);
        $request->customer_id = Auth::user()->userable_id;
        // dd($request->customer_id);
        // foreach ($request->room_id as $room_id) {
            Booking::create([
                "room_id" => $request->room_id,
                "from" => $request->from,
                "to" => $request->to,
                "customer_id" => $request->customer_id,
                "hotel_id" => $request->hotel_id,
            ]);
        // }
        return redirect('customer/dashboard');


        
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
    public function booking_destroy(Request $r)
    {
        $booking=booking::find($r->id);
        $booking->delete();
        return back();
    }

    public function room_destroy($room_id)
    {
        $room = Room::where('id', $room_id);
        $room->delete();
        return back();
    }
}
