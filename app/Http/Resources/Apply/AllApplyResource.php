<?php

namespace App\Http\Resources\Apply;

use Illuminate\Http\Resources\Json\JsonResource;

class AllApplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
            return [
                'id'=>$this->id,
                'status'=>$this->status,
            'charges'=>$this->charges,
                'user_id'=>$this->user_id,
                'visa_apply_country'=>$this->visa_apply_country,
                'purpose'=>$this->purpose,
                'days'=>$this->days,
                'arrival_date'=>$this->arrival_date,
                'type'=>$this->type,
                'departure_airport'=>$this->departure_airport,
                'name'=>$this->name,
                'country_of_birth'=>$this->country_of_birth,
                'city_of_birth'=>$this->city_of_birth,
                'family_name'=>$this->family_name,
                'marital_status'=>$this->marital_status,
                'date_of_birth'=>$this->date_of_birth,
                'number_of_people'=>$this->number_of_people,
                'street_address'=>$this->street_address,
                'city'=>$this->city,
                'state'=>$this->state,
                'phone_number'=>$this->phone_number,
                'phone_number1'=>$this->phone_number1,
                'work_number'=>$this->work_number,
                'postal_code'=>$this->postal_code,
                'father_name'=>$this->father_name,
                'mother_name'=>$this->mother_name,
                'parent_location'=>$this->parent_location,
                'passport_type'=>$this->passport_type,
                'passport_number'=>$this->passport_number,
                'passport_issue_date'=>$this->passport_issue_date,
                'passport_expiry_date'=>$this->passport_expiry_date,
                'passport_issue_country'=>$this->passport_issue_country,
                'degree'=>$this->degree,
                'completion_date'=>$this->completion_date,
                'employment_status'=>$this->employment_status,
                'salary'=>$this->salary,
                'job_location'=>$this->job_location,
            ];
    }
}
