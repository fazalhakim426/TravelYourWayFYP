@extends('agent.layout.agent_layout')
@section('agent')

<div class="flex flex-col">
                 
  <!-- Card Sextion Starts Here -->
<div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

       <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">New Visa List
@error('charges')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
  </div>
<div class="table-responsive">
    <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>

<th class="border w-1/8 px-4 py-2">index</th>
<th class="border w-1/8 px-4 py-2">Name</th>
<th class="border w-1/8 px-4 py-2">Address</th>
<th class="border w-1/8 px-4 py-2">Visa Country</th>
<th class="border w-1/6 px-4 py-2">passport#</th>
<th class="border w-1/3 px-4 py-2">Request Payment</th>
<th class="border w-1/5 px-4 py-2">Actions</th>
</tr>
</thead>
<tbody>


@foreach($user->userable->visas as $visa)

@if($visa->status=="Submitted")



<tr>
<td class="border px-4 py-2">{{$i++}}</td>
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
  <input name='user_id' value="{{$visa->user_id}}" type=hidden>
  <input name='charges'  value="{{$visa->charges}}"
class="appearance-none @error('charges') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
id="charges" value="{{old('charges')}}"
type="number" placeholder="Charges PKR">
</form>

</td>

  
  <td class="border px-4 py-2">
      <a  href="/adminvisaedit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
              <i class="fas fa-eye"></i></a>
             

      <a  href="/adminvisaedit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
              <i class="fas fa-edit"></i></a>
              <a  href="/adminvisacancel?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                  <i class="fas fa-times bg-red-700"></i></a>
            

            
  </td>

  
</tr>


@endif
@endforeach
</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->









</div>



                @stop