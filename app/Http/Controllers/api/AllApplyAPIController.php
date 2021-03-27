<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AllApplyRequest;
use App\models\Visa;
use Validator,DB;
use Illuminate\Http\Request;
use App\Http\Resources\apply\AllApplyResource;
class AllApplyAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // return AllApplyResource::collection(Visa::all());
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



        $validator = Validator::make($request->all(), [
            'visa_apply_country'=>'required',
            'type'=>'required',
            'days'=>'required',
            'departure_airport'=>'required',
            'name'=>'required',
            'email'=>'required',
            'country_of_birth'=>'required',
            

            'city_of_birth'=>'required',
            'family_name'=>'required',
            'gender'=>'required',
            'maritial_status'=>'required',
            'number_of_people'=>'required',

            'street_address'=>'required',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'phone_number'=>'required',
            'phone_number1'=>'required',
            'work_phone'=>'required',
            'postal_code'=>'required',
            
            'father_name'=>'required',
            'mother_name'=>'required',
            'language'=>'required',
            'parent_location'=>'required',

            'passport_type'=>'required',
            'passport_number'=>'required',
            'passport_issue_date'=>'required',
            'passport_expiry_date'=>'required',
            'passport_issue_country'=>'required',

            'degree_name'=>'required',
            'completion_date'=>'required',
            'employment_status'=>'required',
            'salary'=>'required',
            'job_location'=>'required',
            
        ]);
        if ($validator->fails()) {
          return response()->json([
            'success' => false,
            'message' => $validator->errors(),
          ], 401);
        }


        if(Visa::create($request->all())!=null){

        
            return response()->json([
                'success' => true,
                'message' => "Successfully Submitted",
              ], 200);
            }
            else{
                return response()->json([
                    'success' => false,
                    'message' => " Some Error",
                  ], 200);
            }
        

   
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // return Visa::find($id);
         $visa=Visa::find($id);
        return new AllApplyResource($visa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function applied($id)
    {
        return AllApplyResource::collection(Visa::where('user_id',$id)->get());
        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $input = $request->all();
        $visa=Visa::find($id);
        $visa->fill($input)->save();
          return ['status'=>true,
                  'message'=>'updated'
                  ];
   
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visa=Visa::find($id);
        if($visa!=null)
        {
            $visa->delete();
            return [
                'status'=>true,
                'message'=>'deleted'
            ];
        }
        else{
            return [
                'status'=>false,
                'message'=>'no record found'
            ];
        }
      
    }
}
