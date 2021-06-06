<?php

namespace App\Http\Controllers;
use App\Models\Visa;
use DB;
use Illuminate\Http\Request;

class AdminGeneralController extends Controller
{
    public function index(){
        $visas=DB::table('visas')->get();
        return view('admindashboard.dashboard')->with('visas',$visas)->with('i',1);
    }
    
    public function manage($type){
         $visas=Visa::where('type',$type)->get();
         return view('admindashboard.dashboard')->with('visas',$visas);
    }
    public function edit0(Request $request)
    {
        $visa=Visa::where('id',$request->id)->first();
        //dd($visa);
        $countries=DB::table('countries')->get();
        return view('admindashboard.visa_update.immigration_visa_step_0')->with('visa',$visa)->with('countries',$countries);
    } 
       
    public function edit1(Request $request)
    {
        $visa=Visa::where('id',$request->id)->first();
        // dd($visa);
        return view('admindashboard.visa_update.immigration_visa_step_1')->with('visa',$visa);
  
    }
    public function edit2(Request $request)
    {
        $visa=Visa::where('id',$request->id)->first();
        // dd($visa);
        return view('admindashboard.visa_update.immigration_visa_step_2')->with('visa',$visa);
  
    }   
    public function edit3(Request $request)
    {
        $visa=Visa::where('id',$request->id)->first();
        // dd($visa);
        return view('admindashboard.visa_update.immigration_visa_step_3')->with('visa',$visa);
  
    }   
    public function edit4(Request $request)
    {
        $visa=Visa::where('id',$request->id)->first();
        // dd($visa);
        return view('admindashboard.visa_update.immigration_visa_step_4')->with('visa',$visa);
  
    }
    public function edit5(Request $request)
    {
        $visa=Visa::where('id',$request->id)->first();
        // dd($visa);
        return view('admindashboard.visa_update.immigration_visa_step_5')->with('visa',$visa);
  
    }


    
    
    public function update(Request $request)
    {
        $em=new ExtraMethods;
        $em->validateTripDetails($request);
       
        if($request->type=='Ummrah'||$request->type=='Hajj')
        {
            $request["visa_apply_country"]='Saudi Arabia';

        }

       Visa::where('id',$request->id)->update([
        'charges'=>"",
        'visa_apply_country'=>$request['visa_apply_country'],
        'days'=>$request['days'],
        'arrival_date'=>$request['arrival_date'],
        'arrival_date'=>$request['arrival_date'],
        'type'=>$request['type'],
    ]);
       return redirect('adminvisaedit1?id='.$request->id);

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
          
       
     
        return redirect('adminvisaedit2?id='.$request->id);


    } 

    public function update2(Request $request)
    {
    
        $request->validate([
            'charges'=>"",
            'street_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'phone_number'=>'required',
            'work_phone'=>'required',
            'postal_code'=>'required',
        ]);
        Visa::where('id',$request->id)->update([
            'street_address'=> $request['street_address'],
            'city'=> $request['city'],
            'state'=>$request['state'],
            'country'=>$request['country'],
            'phone_number'=>$request['phone_number'],
            'work_phone'=>$request['work_phone'],
            'postal_code'=>$request['postal_code'],
           ]);
         
       

  
        return redirect('adminvisaedit3?id='.$request->id);
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
        return redirect('adminvisaedit4?id='.$request->id);
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

        $visa= Visa::find($request->id);
        if($visa->type=="Ummrah"||$visa->type=="Hajj"){
         Visa::where('id',$request->id)->update([
             'status'=>"Submitted"
         ]);
         return redirect('/dashboard');
         }

        return redirect('adminvisaedit5?id='.$request->id);
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



    public function destroy(Request $request)
    {
            $post = visa::find($request->id);
            $post->delete();
            return back();
    

    }

    public function cancel(Request $request)
    {
        $visa=Visa::where('id',$request->id)->update([
              'status'=>"Cancel",
              'charges'=>""
        ]);
        
        return back();
    }
    public function revoke(Request $request)
    {
        $visa=Visa::where('id',$request->id)->update([
            'status'=>"Submitted",
            'charges'=>""
        ]);
        
        return back();
    }

}
