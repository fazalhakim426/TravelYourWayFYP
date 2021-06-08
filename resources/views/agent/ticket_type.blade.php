@extends('agent.layout.agent_layout')
@section('agent')

<div class="flex flex-col">
     
  
  

<div class="flex flex-col">
     
  
  
  <!-- Card Sextion Starts Here -->
<div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

  <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">New Ticket List
@error('total_payable')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
</div>
<div class="table-responsive">
<table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
<th class="border w-1/8 px-4 py-2">journey type</th>
<th class="border w-1/8 px-4 py-2">class</th>
<th class="border w-1/8 px-4 py-2">Visa Country</th>
<th class="border w-1/6 px-4 py-2">Route#</th>
<th class="border w-1/3 px-4 py-2" colspan="2">Request Payment</th>
<th class="border w-1/5 px-4 py-2">Actions</th>

</tr>
</thead>
<tbody>



{{-- {{dd($user->userable->tickets->where('status','Submitted'))}} --}}
@foreach($user->userable->tickets->where('status','Submitted') as $ticket)
<tr>


<td class="border px-4 py-2">
{{$ticket->journey_type   }}
</td>

<td class="border px-4 py-2 center">
 {{$ticket->class   }}

</td>
 <td class="border px-4 py-2 center">
 
  {{$ticket->issuing_airline}}
  {{$ticket->booking_source}}
</td>
  <td class="border">
      From: {{$ticket->departure_airport}}<br>
      To: {{$ticket->arrival_airport}} <br>
      on: {{$ticket->departure_date}}

  </td>
   
     {{-- <td class="border px-4 py-2">{{$ticket->total_payable==null?'Pending':$ticket->total_payable}}
         @if($ticket->total_payable&&$ticket->status=='Payment Request')
         <a href='payments/{{$ticket->id}}' class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
             Pay
         </a>
         @elseif($ticket->total_payable&&$ticket->status=='Paid')
         <a href='done/{{$ticket->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
            Done
         </a> @elseif($ticket->total_payable&&$ticket->status=='Done')
         <a href='done/{{$ticket->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
            Review
         </a>
         @endif
         </td> --}}

     {{-- <td class="border px-4 py-2">
         @if($ticket->status=="Paid")
     <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
          
         @elseif($ticket->status=="Cancel")
         <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
              
             @elseif($ticket->status=="Paid")
             <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                  
                     
         <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
           
         @endif
    {{ $ticket->status}}
     </button>
    

     </td> --}}
     


     <td class="border px-4 py-2 w-12/2" colspan="2">
       <form action="{{route('ticket-apply-charges')}}" method="post">
       @csrf
       <input name='id' value="{{$ticket->id}}" type=hidden>
       <input name='user_id' value="{{$ticket->user_id}}" type=hidden>
       <input name='total_payable'  value="{{$ticket->total_payable}}"
     class="appearance-none @error('total_payable') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
     id="total_payable" value="{{old('charges')}}"
     type="number" placeholder="Charges PKR">
     </form>
     
     </td>



     <td class="border px-4 py-2">
         <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                 <i class="fas fa-eye"></i></a>
                

         <a  href="tickets/{{$ticket->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                 <i class="fas fa-edit"></i></a>
                 <a  href="/agent/ticket_cancel?id={{$ticket->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                  <i class="fas fa-times bg-red-700"></i></a>


                 <form method="POST" action="{{route('tickets.destroy', $ticket->id) }}"  >
                 @method('DELETE')
               @csrf
         <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                 <i class="fas fa-trash"></i>
                 </form>
         </a>
     </td>

     
 </tr>

 @endforeach



</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->






  <!-- Card Sextion Starts Here -->
  <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

    <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Inprogress Ticket List
@error('total_payable')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
</div>
<div class="table-responsive">
 <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
 <th class="border w-1/8 px-4 py-2">journey type</th>
 <th class="border w-1/8 px-4 py-2">class</th>
 <th class="border w-1/8 px-4 py-2">Visa Country</th>
 <th class="border w-1/6 px-4 py-2">Route#</th>
 <th class="border w-1/3 px-4 py-2" colspan="2" >Request Payment</th>
 <th class="border w-1/5 px-4 py-2">Actions</th>

</tr>
</thead>
<tbody>


{{-- {{dd($user->userable->tickets->where('status','Submitted'))}} --}}
@foreach($user->userable->tickets->where('status','Payment Request') as $ticket)
 <tr>


 <td class="border px-4 py-2">
{{$ticket->journey_type   }}
</td>

 <td class="border px-4 py-2 center">
   {{$ticket->class   }}

 </td>
   <td class="border px-4 py-2 center">
   
    {{$ticket->issuing_airline}}
    {{$ticket->booking_source}}
</td>
    <td class="border">
        From: {{$ticket->departure_airport}}<br>
        To: {{$ticket->arrival_airport}} <br>
        on: {{$ticket->departure_date}}

    </td>
     
       {{-- <td class="border px-4 py-2">{{$ticket->total_payable==null?'Pending':$ticket->total_payable}}
           @if($ticket->total_payable&&$ticket->status=='Payment Request')
           <a href='payments/{{$ticket->id}}' class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
               Pay
           </a>
           @elseif($ticket->total_payable&&$ticket->status=='Paid')
           <a href='done/{{$ticket->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
              Done
           </a> @elseif($ticket->total_payable&&$ticket->status=='Done')
           <a href='done/{{$ticket->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
              Review
           </a>
           @endif
           </td> --}}

       {{-- <td class="border px-4 py-2">
           @if($ticket->status=="Paid")
       <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
            
           @elseif($ticket->status=="Cancel")
           <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                
               @elseif($ticket->status=="Paid")
               <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                    
                       
           <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
             
           @endif
      {{ $ticket->status}}
       </button>
      

       </td> --}}
       


       <td class="border px-4 py-2 w-12/2" colspan="2">
         <form action="{{route('ticket-apply-charges')}}" method="post">
         @csrf
         <input name='id' value="{{$ticket->id}}" type=hidden>
         <input name='user_id' value="{{$ticket->user_id}}" type=hidden>
         <input name='total_payable'  value="{{$ticket->total_payable}}"
       class="appearance-none @error('total_payable') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
       id="total_payable" value="{{old('charges')}}"
       type="number" placeholder="Charges PKR">
       </form>
       
       </td>



       <td class="border px-4 py-2">
           <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-eye"></i></a>
                  

           <a  href="tickets/{{$ticket->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-edit"></i></a>
                   <a  href="/agent/ticket_cancel?id={{$ticket->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                    <i class="fas fa-times bg-red-700"></i></a>


                   <form method="POST" action="{{route('tickets.destroy', $ticket->id) }}"  >
                   @method('DELETE')
                 @csrf
           <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                   <i class="fas fa-trash"></i>
                   </form>
           </a>
       </td>

       
   </tr>

   @endforeach



</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->



























  <!-- Card Sextion Starts Here -->
  <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

    <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Paid and Progress
@error('total_payable')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
</div>
<div class="table-responsive">
 <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
 <th class="border w-1/8 px-4 py-2">journey type</th>
 <th class="border w-1/8 px-4 py-2">class</th>
 <th class="border w-1/8 px-4 py-2">Visa Country</th>
 <th class="border w-1/6 px-4 py-2">Route#</th>
 <th class="border w-1/3 px-4 py-2" >Status</th>
 <th class="border w-1/5 px-4 py-2">Actions</th>

</tr>
</thead>
<tbody>


{{-- {{dd($user->userable->tickets->where('status','Submitted'))}} --}}
@foreach($user->userable->tickets->where('status','Paid') as $ticket)
 <tr>


 <td class="border px-4 py-2">
{{$ticket->journey_type   }}
</td>

 <td class="border px-4 py-2 center">
   {{$ticket->class   }}

 </td>
   <td class="border px-4 py-2 center">
   
    {{$ticket->issuing_airline}}
    {{$ticket->booking_source}}
</td>
    <td class="border">
        From: {{$ticket->departure_airport}}<br>
        To: {{$ticket->arrival_airport}} <br>
        on: {{$ticket->departure_date}}

    </td>
     
  

       <td class="border px-4 py-2">
           @if($ticket->status=="Paid")
       <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
            
           @elseif($ticket->status=="Cancel")
           <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                
               @elseif($ticket->status=="Paid")
               <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                    
                       
           <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
             
           @endif
      {{ $ticket->status}}
       </button>
      

       </td>

       <td class="border px-4 py-2">
           <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-eye"></i></a>
                  

           <a  href="tickets/{{$ticket->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-edit"></i></a>
                 

                   <form method="POST" action="{{route('tickets.destroy', $ticket->id) }}"  >
                   @method('DELETE')
                 @csrf
           <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                   <i class="fas fa-trash"></i>
                   </form>
           </a>
       </td>

       
   </tr>

   @endforeach



</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->









  <!-- Card Sextion Starts Here -->
  <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

    <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Cancelled
@error('total_payable')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
</div>
<div class="table-responsive">
 <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
 <th class="border w-1/8 px-4 py-2">journey type</th>
 <th class="border w-1/8 px-4 py-2">class</th>
 <th class="border w-1/8 px-4 py-2">Visa Country</th>
 <th class="border w-1/6 px-4 py-2">Route#</th>
 <th class="border w-1/3 px-4 py-2" >Status</th>
 <th class="border w-1/5 px-4 py-2">Actions</th>

</tr>
</thead>
<tbody>


@foreach($user->userable->tickets->where('status','Cancel') as $ticket)
 <tr>


 <td class="border px-4 py-2">
{{$ticket->journey_type   }}
</td>

 <td class="border px-4 py-2 center">
   {{$ticket->class   }}

 </td>
   <td class="border px-4 py-2 center">
   
    {{$ticket->issuing_airline}}
    {{$ticket->booking_source}}
</td>
    <td class="border">
        From: {{$ticket->departure_airport}}<br>
        To: {{$ticket->arrival_airport}} <br>
        on: {{$ticket->departure_date}}

    </td>
     
  

       <td class="border px-4 py-2">
           @if($ticket->status=="Paid")
       <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
            
           @elseif($ticket->status=="Cancel")
           <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                
               @elseif($ticket->status=="Paid")


                <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                  Cancel
 </button>
             
       @endif
      

       </td>

       <td class="border px-4 py-2">
           <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-eye"></i></a>
                  

           <a  href="tickets/{{$ticket->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-edit"></i></a>
                 

                   <form method="POST" action="{{route('tickets.destroy', $ticket->id) }}"  >
                   @method('DELETE')
                 @csrf
           <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                   <i class="fas fa-trash"></i>
                   </form>
           </a>

           <a  href="/ticket_revoke?id={{$ticket->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
            <i class="fas fa-undo bg-red-700"></i></a>

       </td>

       
   </tr>

   @endforeach



</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->

















  <!-- Card Sextion Starts Here -->
  <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

    <!-- card -->

<div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
<div class="px-6 py-2 border-b border-light-grey">
<div class="font-bold text-xl">Done
@error('total_payable')
<p class="text-red-700 italic ">{{$message}}</p>
@enderror
</div>
</div>
<div class="table-responsive">
 <table class="table text-grey-darkest">
<thead class="bg-gray-400  text-white text-normal">
<tr>
 <th class="border w-1/8 px-4 py-2">journey type</th>
 <th class="border w-1/8 px-4 py-2">class</th>
 <th class="border w-1/8 px-4 py-2">Visa Country</th>
 <th class="border w-1/6 px-4 py-2">Route#</th>
 <th class="border w-1/3 px-4 py-2" >Status</th>
 <th class="border w-1/5 px-4 py-2">Actions</th>

</tr>
</thead>
<tbody>


@foreach($user->userable->tickets->where('status','Done') as $ticket)
 <tr>


 <td class="border px-4 py-2">
{{$ticket->journey_type   }}
</td>

 <td class="border px-4 py-2 center">
   {{$ticket->class   }}

 </td>
   <td class="border px-4 py-2 center">
   
    {{$ticket->issuing_airline}}
    {{$ticket->booking_source}}
</td>
    <td class="border">
        From: {{$ticket->departure_airport}}<br>
        To: {{$ticket->arrival_airport}} <br>
        on: {{$ticket->departure_date}}

    </td>
     
  

    <td class="border px-4 py-2">
      <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
     {{ $ticket->status}}
      </button>
     
     
      </td>  


       <td class="border px-4 py-2">
           <a  href="tickets/{{$ticket->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-eye"></i></a>
                  

           <a  href="tickets/{{$ticket->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                   <i class="fas fa-edit"></i></a>
                 
                
                   <form method="POST" action="{{route('tickets.destroy', $ticket->id) }}"  >
                   @method('DELETE')
                 @csrf
           <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                   <i class="fas fa-trash"></i>
                   </form>
           </a>
       </td>

       
   </tr>

   @endforeach



</tbody>
</table>
</div>
</div>
</div>
<!--/Grid Form-->











</div>



                @stop