<?php

namespace App\Http\Controllers;

use  App\Http\Controllers;
use  App\Http\Controllers\ExtraMethods;
use  App\Http\Controllers\ExtraMethds;
use Auth,DB;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Visa;
use App\Models\User;
use App\Notifications\ApplyNotification;
class VisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
        $countries=Country::all();
        return view('userdashboard.immigration_apply.immigration_visa_step_0')->with('visa',$visa)->with('countries',$countries)->with('type',null);
    }

    public function index2($type)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
        $countries=Country::all();
      if($visa!=null)
        return view('userdashboard.immigration_apply.immigration_visa_step_0')->with('visa',$visa)->with('countries',$countries)->with('type',$type);
        else
        return view('userdashboard.immigration_apply.immigration_visa_step_0')->with('visa',$visa)->with('countries',$countries)->with('type',$type);
       

    }
    

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    
    {
        $em=new ExtraMethods;
        $em->validateTripDetails($request);
        $visaexist=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
       if($visaexist==null){
        $request["status"]="Incomplete";
        $request["name"]=Auth::user()->name;
        $request["email"]=Auth::user()->email;
        $request["phone_number"]=Auth::user()->phone_number;
        $request["zip"]=Auth::user()->zip;
        $request["country"]=Auth::user()->country;
        $request["street_address"]=Auth::user()->street;
        $request["state"]=Auth::user()->state;
        $request["city"]=Auth::user()->city;
        $request["user_id"]= Auth::user()->id;
        if($request->type=='Ummrah'||$request=='Hajj')
        {
            $request["visa_apply_country"]='Saudi Arabia';

        }
        Visa::create($request->all());
     
      
    }

    return redirect('/create1');//goto step 1
    }




    public function storeupdate(Request $request)
    {
        
        if($request->type=='Visit')
        {
            $request->validate([
                'visa_apply_country'=>'required',
                'arrival_airport'=>'required',
                'type'=>'required',
                'days'=>'required',
                'departure_airport'=>'required',
    
            ]);
        }elseif($request->type=='Hajj')
        {
            $request->validate([
                'arrival_airport'=>'required',
                'type'=>'required',
                'days'=>'required',
                'departure_airport'=>'required',
    
            ]);
        }elseif($request->type=='Ummrah')
            {
                $request->validate([
                    'arrival_airport'=>'required',
                    'type'=>'required',
                    'days'=>'required',
                    'departure_airport'=>'required',
        
                ]);
            }
            else{
            $request->validate([
                'visa_apply_country'=>'required',
                'arrival_airport'=>'required',
                'type'=>'required',
    
            ]);
        }
      
        if($request->type=='Ummrah'||$request->type=='Hajj')
        {
            $request["visa_apply_country"]='Saudi Arabia';

        }
        Visa::where('id',$request->id)->update([
            'visa_apply_country'=> $request['visa_apply_country'],
            'arrival_airport'=> $request['arrival_airport'],
            'days'=>$request['days'],
            'departure_airport'=>$request['departure_airport'],
            'type'=>$request['type'],
            'departure_airport'=>$request['departure_airport'],
           ]);
       
        return redirect('/create1');//goto step 1
    }
    //step 0 ended

// step 1 started
public function create1()
{
    $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
    return view('userdashboard.immigration_apply.immigration_visa_step_1')->with('visa',$visa);
}
    
    public function store1(Request $request)
    {
         
       Visa::where('id',$request->id)->update([
        'email'=> $request['email'],
        'name'=>$request['name'],
        'date_of_birth'=>$request['date_of_birth'],
        'marital_status'=>$request['marital_status'],
        'gender'=>$request['gender'],
        'country_of_birth'=>$request['country_of_birth'],
        'number_of_people'=>$request['number_of_people'],
       ]);
     
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'country_of_birth'=>'required',
            'date_of_birth'=>'required',
            'marital_status'=>'required',
            'gender'=>'required',
            'number_of_people'=>'required',
        ]);
     
     
    return redirect('/create2');//goto step 2


    } 
    //end step 1

    //start step 2
    public function create2()
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
        return view('userdashboard.immigration_apply.immigration_visa_step_2')->with('visa',$visa);
    }
    public function store2(Request $request)
    {
    
        Visa::where('id',$request->id)->update([
            'street_address'=> $request['street_address'],
            'city'=> $request['city'],
            'state'=>$request['state'],
            'country'=>$request['country'],
            'phone_number'=>$request['phone_number'],
            'work_phone'=>$request['work_phone'],
            'postal_code'=>$request['postal_code'],
           ]);
         
       

        $request->validate([
            'street_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'phone_number'=>'required',
            'work_phone'=>'required',
            'postal_code'=>'required',
        ]);
  
    return redirect('/create3');//goto step 3
    } 
//step 3 started
    public function create3()
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
        return view('userdashboard.immigration_apply.immigration_visa_step_3')->with('visa',$visa);
    }

    
    public function store3(Request $request)
    {
        Visa::where('id',$request->id)->update([
            'father_name'=>$request['father_name'],
            'mother_name'=>$request['mother_name'],
            'language'=>$request['language'],
            'parent_location'=>$request['parent_location'],
        ]);
        $request->validate([
            'father_name'=>'required',
            'mother_name'=>'required',
            'language'=>'required',
            'parent_location'=>'required',

        ]);
     
        // dd($request);
        return redirect('create4');
    }
    
    //step 4 started
    public function create4()
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
        return view('userdashboard.immigration_apply.immigration_visa_step_4')->with('visa',$visa);
    }
    
    public function store4(Request $request)
    {

        Visa::where('id',$request->id)->update([
            'passport_type'=>$request['passport_type'],
            'passport_number'=>$request['passport_number'],
            'passport_issue_date'=>$request['passport_issue_date'],
            'passport_expiry_date'=>$request['passport_expiry_date'],
            'passport_issue_country'=>$request['passport_issue_country'],
        ]);

        $request->validate([
            'passport_type'=>'required',
            'passport_number'=>'required',
            'passport_issue_date'=>'required',
            'passport_expiry_date'=>'required',
            'passport_issue_country'=>'required',
        ]);
        $visa= Visa::find($request->id);
       if($visa->type=="Ummrah"||$visa->type=="Hajj"){
        Visa::where('id',$request->id)->update([
            'status'=>"Submitted"
        ]);

    
        User::where('email','hakimfazal426@gmail.com')->first()->notify(new ApplyNotification($visa));
       
        return redirect('/dashboard');
        
        }
        return redirect('/create5');
    } 
    
      
    //step 5 started
    public function create5()
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('status','=','incomplete')->first();
        
        return view('userdashboard.immigration_apply.immigration_visa_step_5')->with('visa',$visa);
    }
    public function store5(Request $request)
    {
 
        
        Visa::where('id',$request->id)->update([
            'charges'=>null,
            'degree_name'=>$request['degree_name'],
            'completion_date'=>$request['completion_date'],
            'employment_status'=>$request['employment_status'],
            'salary'=>$request['salary'],
            'job_location'=>$request['job_location'],
                   ]); 
                
               
        $request->validate([
            'degree_name'=>'required',
            'completion_date'=>'required',
            'employment_status'=>'required',
            'salary'=>'required',
            'job_location'=>'required',

        ]);
     Visa::where('id',$request->id)->update([
            'status'=>"Submitted"
        ]);
       $visa= Visa::find($request->id);
        User::where('email','hakimfazal426@gmail.com')->first()->notify(new ApplyNotification($visa));
        return redirect('dashboard');
       
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
    public function edit0(Request $request)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('id','=',$request->id)->first();
        //dd($visa);
        $countries=Country::all();
        return view('userdashboard.visa_update.immigration_visa_step_0')->with('visa',$visa)->with('countries',$countries);
  
    } 
       
    public function edit1(Request $request)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('id','=',$request->id)->first();
        // dd($visa);
        return view('userdashboard.visa_update.immigration_visa_step_1')->with('visa',$visa);
  
    }
    public function edit2(Request $request)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('id','=',$request->id)->first();
        // dd($visa);
        return view('userdashboard.visa_update.immigration_visa_step_2')->with('visa',$visa);
  
    }   
    public function edit3(Request $request)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('id','=',$request->id)->first();
        // dd($visa);
        return view('userdashboard.visa_update.immigration_visa_step_3')->with('visa',$visa);
  
    }   
    public function edit4(Request $request)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('id','=',$request->id)->first();
        // dd($visa);
        return view('userdashboard.visa_update.immigration_visa_step_4')->with('visa',$visa);
  
    } 
    public function edit5(Request $request)
    {
        $visa=DB::table('visas')->where('user_id','=',Auth::user()->id)->where('id','=',$request->id)->first();
        // dd($visa);
        return view('userdashboard.visa_update.immigration_visa_step_5')->with('visa',$visa);
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $em=new ExtraMethods;
      $em->validateTripDetails($request);
       

       Visa::where('id',$request->id)->update([
        'charges'=>"",
        'visa_apply_country'=>$request['visa_apply_country'],
        'arrival_airport'=>$request['arrival_airport'],
        'days'=>$request['days'],
        'arrival_date'=>$request['arrival_date'],
        'type'=>$request['type'],
    ]);
       return redirect('edit1?id='.$request->id);

    }
    







     
    public function update1(Request $request)
    {
        $request->validate([
            
            'name'=>'required',
            'email'=>'required',
            'country_of_birth'=>'required',
            'date_of_birth'=>'required',
            'marital_status'=>'required',
            'gender'=>'required',
            'number_of_people'=>'required',
        ]);
     
       Visa::where('id',$request->id)->update([
        'charges'=>"",
        'name'=> $request['name'],
        'email'=> $request['email'],
        'country_of_birth'=>$request['country_of_birth'],
        'date_of_birth'=>$request['date_of_birth'],
        'marital_status'=>$request['marital_status'],
        'gender'=>$request['gender'],
        'country_of_birth'=>$request['country_of_birth'],
        'number_of_people'=>$request['number_of_people'],
       ]);
          
       
     
        return redirect('edit2?id='.$request->id);


    } 

    public function update2(Request $request)
    {
    
        $request->validate([
            'street_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'phone_number'=>'required',
            'work_phone'=>'required',
            'postal_code'=>'required',
        ]);
        Visa::where('id',$request->id)->update([
            'charges'=>"",
            'street_address'=> $request['street_address'],
            'city'=> $request['city'],
            'state'=>$request['state'],
            'country'=>$request['country'],
            'phone_number'=>$request['phone_number'],
            'work_phone'=>$request['work_phone'],
            'postal_code'=>$request['postal_code'],
           ]);
         
       

  
        return redirect('edit3?id='.$request->id);
    } 

    
    public function update3(Request $request)
    {
        $request->validate([
            'father_name'=>'required',
            'mother_name'=>'required',
            'language'=>'required',
            'parent_location'=>'required',

        ]);
        Visa::where('id',$request->id)->update([
            'charges'=>"",
            'father_name'=>$request['father_name'],
            'mother_name'=>$request['mother_name'],
            'language'=>$request['language'],
            'parent_location'=>$request['parent_location'],
        ]);
       
     
        // dd($request);
        return redirect('edit4?id='.$request->id);
    }
    
    
    public function update4(Request $request)
    {
        $request->validate([
            'passport_type'=>'required',
            'passport_number'=>'required',
            'passport_issue_date'=>'required',
            'passport_expiry_date'=>'required',
            'passport_issue_country'=>'required',
        ]);
       
        Visa::where('id',$request->id)->update([
            'charges'=>"",
            'passport_type'=>$request['passport_type'],
            'passport_number'=>$request['passport_number'],
            'passport_issue_date'=>$request['passport_issue_date'],
            'passport_expiry_date'=>$request['passport_expiry_date'],
            'passport_issue_country'=>$request['passport_issue_country'],
        ]);

      
        return redirect('edit5?id='.$request->id);
    } 
    
      
   
    public function update5(Request $request)
    {
        $request->validate([
            'degree_name'=>'required',
            'completion_date'=>'required',
            'employment_status'=>'required',
            'salary'=>'required',
            'job_location'=>'required',

        ]);
        Visa::where('id',$request->id)->update([
            'charges'=>"",
            'degree_name'=>$request['degree_name'],
            'completion_date'=>$request['completion_date'],
            'employment_status'=>$request['employment_status'],
            'salary'=>$request['salary'],
            'job_location'=>$request['job_location'],
                   ]);
       
        Visa::where('id',$request->id)->update([
            'status'=>"Submitted"
        ]);
        return redirect('dashboard');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $post = visa::find($id);
            $post->delete();
            return back();
    

    }
}
