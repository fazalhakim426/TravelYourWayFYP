<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/styles.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/admin-master/dist/all.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>User</title>
</head>

<body>
@include('customer.layout.navigation')
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                    <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Not Submitted
                                </a>
                            </div>
                        </div>


                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Cancelled 
                                </a>
                            </div>
                        </div>





                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Submitted
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total In Progress
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#" class="no-underline text-white text-lg">
                                    Total Done
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- /Stats Row Ends Here -->













                    
                                            <!-- Card Sextion Starts Here -->
                                            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">Visa History</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                     <tr>
                                       <th class="border w-1/8 px-4 py-2">Name</th>
                                       <th class="border w-1/8 px-4 py-2">Address</th>
                                       <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                       <th class="border w-1/6 px-4 py-2">passport#</th>
                                       <th class="border w-1/7 px-4 py-2">Payment</th>
                                       <th class="border w-1/7 px-4 py-2">Order Status</th>
                                       <th class="border w-1/5 px-4 py-2">Actions</th>
                                     </tr>
                                   </thead>
                                   <tbody>
        
                                   @foreach($visas as $visa)
                                   @if($visa->status!=null)     
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
                                         
                                           <td class="border px-4 py-2">{{$visa->charges==null?'Pending':$visa->charges}}
                                               @if($visa->charges&&$visa->status=='Payment Request')
                                               <a href='payments/{{$visa->id}}' class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                   Pay
                                               </a>
                                               @elseif($visa->charges&&$visa->status=='Paid')
                                               <a href='done/{{$visa->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                  Done
                                               </a> @elseif($visa->charges&&$visa->status=='Done')
                                               <a href='done/{{$visa->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                  Review
                                               </a>
                                               @endif
                                               </td>
                                           <td class="border px-4 py-2">
                                               @if($visa->status=="Paid")
                                           <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                
                                               @elseif($visa->status=="Cancel")
                                               <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                    
                                                   @elseif($visa->status=="Paid")
                                                   <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                        
                                                           
                                               <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                 
                                               @endif
                                          {{ $visa->status}}
                                           </button>
                                          

                                           </td>
                                           
                                           <td class="border px-4 py-2">
                                               <a  href="edit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-eye"></i></a>
                                                      

                                               <a  href="edit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-edit"></i></a>
                                                     

                                                       <form method="POST" action="{{route('visas.destroy', $visa->id) }}"  >
                                                       @method('DELETE')
                                                     @csrf
                                               <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                       <i class="fas fa-trash"></i>
                                                       </form>
                                               </a>
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















                   
                    
                                            <!-- Card Sextion Starts Here -->
                                            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">Ticket History</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                     <tr>
                                       <th class="border w-1/8 px-4 py-2">journey type</th>
                                       <th class="border w-1/8 px-4 py-2">class</th>
                                       <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                       <th class="border w-1/6 px-4 py-2">Route#</th>
                                       <th class="border w-1/7 px-4 py-2">Payment</th>
                                       <th class="border w-1/7 px-4 py-2">Order Status</th>
                                       <th class="border w-1/5 px-4 py-2">Actions</th>
                                     </tr>
                                   </thead>
                                   <tbody>
        
                                   @foreach($tickets as $visa)
                                   @if($visa->status!=null)     
<tr>


                                     <td class="border px-4 py-2">
                                    {{$visa->journey_type   }}
                                    </td>

                                     <td class="border px-4 py-2 center">
                                       {{$visa->class   }}
                                  
                                     </td>
                                       <td class="border px-4 py-2 center">
                                       
                                        {{$visa->issuing_airline}}
                                        {{$visa->booking_source}}
                                   </td>
                                        <td class="border">
                                            From: {{$visa->departure_airport}}<br>
                                            To: {{$visa->arrival_airport}} <br>
                                            on: {{$visa->departure_date}}

                                        </td>
                                         
                                           <td class="border px-4 py-2">{{$visa->total_payable==null?'Pending':$visa->total_payable}}
                                               @if($visa->total_payable&&$visa->status=='Payment Request')
                                               <a href='payments/{{$visa->id}}' class="bg-green-500 hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                   Pay
                                               </a>
                                               @elseif($visa->total_payable&&$visa->status=='Paid')
                                               <a href='done/{{$visa->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                  Done
                                               </a> @elseif($visa->total_payable&&$visa->status=='Done')
                                               <a href='done/{{$visa->id}}' class="bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                                  Review
                                               </a>
                                               @endif
                                               </td>
                                           <td class="border px-4 py-2">
                                               @if($visa->status=="Paid")
                                           <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                
                                               @elseif($visa->status=="Cancel")
                                               <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                    
                                                   @elseif($visa->status=="Paid")
                                                   <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                        
                                                           
                                               <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg    ">
                                                 
                                               @endif
                                          {{ $visa->status}}
                                           </button>
                                          

                                           </td>
                                           
                                           <td class="border px-4 py-2">
                                               <a  href="edit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-eye"></i></a>
                                                      

                                               <a  href="edit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-edit"></i></a>
                                                     

                                                       <form method="POST" action="{{route('visas.destroy', $visa->id) }}"  >
                                                       @method('DELETE')
                                                     @csrf
                                               <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                       <i class="fas fa-trash"></i>
                                                       </form>
                                               </a>
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
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        <!--/footer-->

    </div>

</div>
<script src="{{URL::asset('admin-master/main.js')}}"></script>
</body>

</html>