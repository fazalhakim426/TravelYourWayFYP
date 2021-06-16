@extends('agent.layout.agent_layout')
@section('agent')

<div class="flex flex-col">
                 
  <!-- Card Sextion Starts Here -->
<div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

       <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">New {{$sub_active}}
@error('charges')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
  </div>
<div class="table-responsive">
    <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
<th class="border w-1/8 px-4 py-2">Name</th>
<th class="border w-1/8 px-4 py-2">Address</th>
<th class="border w-1/8 px-4 py-2">Country</th>
<th class="border w-1/6 px-4 py-2">passport#</th>
<th class="border w-1/3 px-4 py-2">Request Payment</th>
<th class="border w-1/5 px-4 py-2">Actions</th>
</tr>
</thead>
<tbody>


@foreach($user->userable->visas()->where('type',$sub_active)->where('status','Submitted')->get() as $visa)




<tr>
<td class="border px-4 py-2">
{{$visa->title." ".$visa->first_name." ".$visa->last_name}}
</td>

<td class="border px-4 py-2 center">
 {{$visa->street." ".$visa->phone_number}}

</td>
 <td class="border px-4 py-2 center">
 {{ $visa->type=="Hajj"|| $visa->type=="Ummrah"?"":$visa->visa_apply_country}}<br>
 
 {{$visa->type}}
</td>
  <td class="border">
  {{$visa->passport_number}}

  </td>


<td class="border px-4 py-2 w-12/2">
  <form action="{{route('applycharges')}}" method="post">
  @csrf
  <input name='id' value="{{$visa->id}}" type=hidden>
  <input name='customer_id' value="{{$visa->customer_id}}" type=hidden>
  <input name='charges'  value="{{$visa->charges}}"
class="appearance-none @error('charges') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
id="charges" value="{{old('charges')}}"
type="number" placeholder="Charges PKR">
</form>



  </td>
  
  {{-- <td class="border px-4 py-2"> --}}
      {{-- <a  href="/adminvisaedit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
              <i class="fas fa-eye"></i></a>
             

      <a  href="/adminvisaedit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
              <i class="fas fa-edit"></i></a>
              <a  href="/visa_cancel?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                  <i class="fas fa-times bg-red-700"></i></a> --}}
            

            
  {{-- </td> --}}

  
</tr>

@endforeach
</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->



  <!-- in progress Card Sextion Starts Here -->
  <div id="totalinprogress" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

      <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">In Progress {{ $sub_active }}</div>
 </div>
<div class="table-responsive">
   <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
<th class="border w-1/8 px-4 py-2">Name</th>
<th class="border w-1/8 px-4 py-2">Address</th>
<th class="border w-1/8 px-4 py-2">Country</th>
<th class="border w-1/6 px-4 py-2">passport#</th>
<th class="border w-1/3 px-4 py-2">Request Payment</th>
<th class="border w-1/5 px-4 py-2">Actions</th>
</tr>
</thead>
<tbody>

@foreach($user->userable->visas()->where('type',$sub_active)->where('status','Payment Request')->get() as $visa)





<tr>
<td class="border px-4 py-2">
{{$visa->title." ".$visa->first_name." ".$visa->last_name}}
</td>

<td class="border px-4 py-2 center">
{{$visa->street." ".$visa->phone_number}}

</td>
<td class="border px-4 py-2 center">
{{ $visa->type=="Hajj"|| $visa->type=="Ummrah"?"":$visa->visa_apply_country}}<br>

{{$visa->type}}
</td>
<td class="border">
 {{$visa->passport_number}}

</td>
<td>
<form action="{{route('applycharges')}}" method="post">
 @csrf
 <input name='id' value="{{$visa->id}}" type=hidden>
 <input name='charges'  value="{{$visa->charges}}"
        class="appearance-none @error('charges') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
     id="charges" value="{{old('charges')}}"
   type="number" placeholder="Charges PKR">
    </form>

</td>

 
 <td class="border px-4 py-2">
     {{-- <a  href="/adminvisaedit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
             <i class="fas fa-eye"></i></a>
            

             <a  href="/adminvisaedit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
             <i class="fas fa-edit"></i></a> --}}

             <a  href="/visa_cancel?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
             <i class="fas fa-times bg-red-700"></i></a>
           

             {{-- <form method="POST" action="{{route('adminvisadestroy') }}"  >
             @method('DELETE')
           @csrf
           <input type=hidden name='id' value='{{$visa->id}}'>
     <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
             <i class="fas fa-trash"></i>

             </form> --}}
     
 </td>

 
</tr>



@endforeach







</tbody>
</table>
</div>
</div>
</div>
<!--/Grid  in progress Form-->




  <!-- Done Card Sextion Starts Here -->
  <div id="totaldone" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

      <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Paid and Pending {{ $sub_active }}</div>
 </div>
<div class="table-responsive">
   <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
<th class="border w-1/8 px-4 py-2">Name</th>
<th class="border w-1/8 px-4 py-2">Address</th>
<th class="border w-1/8 px-4 py-2">Country</th>
<th class="border w-1/6 px-4 py-2">passport#</th>
<th class="border w-1/7 px-4 py-2">Paid</th>
<th class="border w-1/7 px-4 py-2">Mail</th>
</tr>
</thead>
<tbody>

@foreach($user->userable->visas()->where('type',$sub_active)->where('status','Paid')->get() as $visa)






<tr>
<td class="border px-4 py-2">
{{$visa->title." ".$visa->first_name." ".$visa->last_name}}
</td>

<td class="border px-4 py-2 center">
 {{$visa->street." ".$visa->phone_number}}

</td>
 <td class="border px-4 py-2 center">
 {{ $visa->type=="Hajj"|| $visa->type=="Ummrah"?"":$visa->visa_apply_country}}<br>
 
 {{$visa->type}}
</td>
  <td class="border">
  {{$visa->passport_number}}

  </td>

<td class="border px-4 py-2"> <i class="fas fa-check text-green-500 mx-2"></i> {{ $visa->charges}} PKR

@if($visa->charges&&$visa->status=='Paid')
<br>
@can('super_agent')
<a href='done/{{$visa->id}}' class="m-55  bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
 Mark Done
</a>
@endif
@endif

</td>
 <td class="border px-4 py-2">



@if($visa->super_agent_id==null)
  <form >
    @csrf
    <input name='id' value="{{$visa->id}}" type=hidden>
    <button name='charges' value='Super Agent'
    class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg"
       >
       Notify
      </button>
       </form>

            @endif 
     
 </td>

 
</tr>



@endforeach







</tbody>
</table>
</div>
</div>
</div>
<!--/Grid done Form-->





  <!-- Card Sextion Starts Here -->
  <div id="totalcancel" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

      <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Cancelled {{ $sub_active }}</div>
 </div>
<div class="table-responsive">
   <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
<th class="border w-1/8 px-4 py-2">Name</th>
<th class="border w-1/8 px-4 py-2">Address</th>
<th class="border w-1/8 px-4 py-2">Country</th>
<th class="border w-1/6 px-4 py-2">passport#</th>
<th class="border w-1/3 px-4 py-2">Request Payment</th>
<th class="border w-1/7 px-4 py-2">Order Status</th>
<th class="border w-1/5 px-4 py-2">Actions</th>
</tr>
</thead>
<tbody>

@foreach($user->userable->visas()->where('type',$sub_active)->where('status','Cancel')->get() as $visa)




<tr>
<td class="border px-4 py-2">
{{$visa->title." ".$visa->first_name." ".$visa->last_name}}
</td>

<td class="border px-4 py-2 center">
 {{$visa->street." ".$visa->phone_number}}

</td>
 <td class="border px-4 py-2 center">
 {{ $visa->type=="Hajj"|| $visa->type=="Ummrah"?"":$visa->visa_apply_country}}<br>
 
 {{$visa->type}}
</td>
  <td class="border">
  {{$visa->passport_number}}

  </td>
  
  <td class="border px-4 py-2">
  <i class="fas fa-times text-red-500 mx-2">{{ $visa->charges}} PKR</i>

</td>
 <td class="border px-4 py-2">
 <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
{{ $visa->status}} 
 </button>


 </td>
 
 <td class="border px-4 py-2">
     {{-- <a  href="/adminvisaedit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
             <i class="fas fa-eye"></i></a>
            

             <a  href="/adminvisaedit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
             <i class="fas fa-edit"></i></a> --}}

             <a  href="/visa_revoke?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
             <i class="fas fa-undo bg-red-700"></i></a>
           

             {{-- <form method="POST" action="{{route('adminvisadestroy') }}"  >
             @method('DELETE')
           @csrf
           <input type=hidden name='id' value='{{$visa->id}}'>
     <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
             <i class="fas fa-trash"></i>

             </form> --}}
     
 </td>

 
</tr>



@endforeach







</tbody>
</table>
</div>
</div>
</div>
<!--/Grid  in progress Form-->











  <!-- Done Card Sextion Starts Here -->
  <div id="totaldone" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

      <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Done {{ $sub_active }} </div>
 </div>
<div class="table-responsive">
   <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
<th class="border w-1/8 px-4 py-2">Name</th>
<th class="border w-1/8 px-4 py-2">Address</th>
<th class="border w-1/8 px-4 py-2">Country</th>
<th class="border w-1/6 px-4 py-2">passport#</th>
<th class="border w-1/7 px-4 py-2">Done</th>
<th class="border w-1/7 px-4 py-2">Order Status</th>
{{-- <th class="border w-1/5 px-4 py-2">Actions</th> --}}
</tr>
</thead>
<tbody>

@foreach($user->userable->visas()->where('type',$sub_active)->where('status','Done')->get() as $visa)
<tr>
<td class="border px-4 py-2">
{{$visa->title." ".$visa->first_name." ".$visa->last_name}}
</td>

<td class="border px-4 py-2 center">
 {{$visa->street." ".$visa->phone_number}}

</td>
 <td class="border px-4 py-2 center">
 {{ $visa->type=="Hajj"|| $visa->type=="Ummrah"?"":$visa->visa_apply_country}}<br>
 
 {{$visa->type}}
</td>
  <td class="border">
  {{$visa->passport_number}}

  </td>
   <td class="border px-4 py-2"> <i class="fas fa-check text-green-500 mx-2"></i> {{ $visa->charges}} PKR</td>
</td>
 <td class="border px-4 py-2">
 <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
{{ $visa->status}}
 </button>


 </td>                                
   
</tr>



@endforeach







</tbody>
</table>
</div>
</div>
</div>
<!--/Grid done Form-->








</div>



                @stop