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
    <title>Admin</title>
</head>

<body>
<!--Container -->
@include('agent.layout.navigation')
<!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                <div class="flex flex-col">
                    <!-- Stats Row Starts Here -->
                    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                  




                        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#totalneworder" class="no-underline text-white text-lg">
                                    New Order
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#totalinprogress" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#totalinprogress" class="no-underline text-white text-lg">
                                    Total In Progress
                                </a>
                            </div>
                        </div>

                        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#totaldone" class="no-underline text-white text-lg">
                                    Total Done
                                </a>
                            </div>
                        </div>
                       


                        <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                            <div class="p-4 flex flex-col">
                                <a href="#" class="no-underline text-white text-2xl">
                                    1
                                </a>
                                <a href="#totalcancelled" class="no-underline text-white text-lg">
                                    Total Cancelled 
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- /Stats Row Ends Here -->













                    
                                            <!-- Card Sextion Starts Here -->
                                 <div id="totalneworder" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                 <!-- card -->

                                        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                      <div class="px-6 py-2 border-b border-light-grey">
                                         <div class="font-bold text-xl">New Order List
                                         @error('charges')
                                       <p class="text-red-700 italic ">{{$message}}</p>
                                       @enderror
                                         </div>
                                            </div>
                                          <div class="table-responsive">
                                              <table class="table text-grey-darkest">
                                       <thead class="bg-grey-dark text-white text-normal">
                                      <tr>

                                        <th class="border w-1/8 px-4 py-2">index</th>
                                        <th class="border w-1/8 px-4 py-2">Name</th>
                                        <th class="border w-1/8 px-4 py-2">Address</th>
                                        <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                        <th class="border w-1/6 px-4 py-2">passport#</th>
                                        <th class="border w-1/7 px-4 py-2">Request Payment</th>
                                        <th class="border w-1/7 px-4 py-2">Order Status</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        
                                    @foreach($visas as $visa)
                                  
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

                                      
                                      <td class="border px-4 py-2">
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
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                                           {{ $visa->status}}
                                            </button>


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


                    
                                            <!-- in progress Card Sextion Starts Here -->
                                            <div id="totalinprogress" class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                                                <!-- card -->

                                       <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                     <div class="px-6 py-2 border-b border-light-grey">
                                        <div class="font-bold text-xl">In Progress List</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        <th class="border w-1/8 px-4 py-2">index</th>
                                        <th class="border w-1/8 px-4 py-2">Name</th>
                                        <th class="border w-1/8 px-4 py-2">Address</th>
                                        <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                        <th class="border w-1/6 px-4 py-2">passport#</th>
                                        <th class="border w-1/7 px-4 py-2">Request Payment</th>
                                        <th class="border w-1/7 px-4 py-2">Order Status</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                       
                                  <span class="hidden"> {{$i=1}} </span>
                                   @foreach($visas as $visa)
                                 
                                      @if($visa->status=="Payment Request")
                                 
                     
                                     
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
                                           <button class="bg-yellow-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                                                  {{ $visa->status}}<br> {{ $visa->charges}} PKR
                                           </button>


                                           </td>
                                           
                                           <td class="border px-4 py-2">
                                               <a  href="/adminvisaedit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-eye"></i></a>
                                                      

                                                       <a  href="/adminvisaedit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-edit"></i></a>

                                                       <a  href="/adminvisacancel?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-times bg-red-700"></i></a>
                                                     

                                                       <form method="POST" action="{{route('adminvisadestroy') }}"  >
                                                       @method('DELETE')
                                                     @csrf
                                                     <input type=hidden name='id' value='{{$visa->id}}'>
                                               <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                       <i class="fas fa-trash"></i>

                                                       </form>
                                               
                                           </td>

                                           
                                       </tr>

                                       
                                     @endif
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
                                        <div class="font-bold text-xl">Paid and Pending</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        <th class="border w-1/8 px-4 py-2">index</th>
                                        <th class="border w-1/8 px-4 py-2">Name</th>
                                        <th class="border w-1/8 px-4 py-2">Address</th>
                                        <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                        <th class="border w-1/6 px-4 py-2">passport#</th>
                                        <th class="border w-1/7 px-4 py-2">Paid</th>
                                        <th class="border w-1/7 px-4 py-2">Order Status</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                       
                                  <span class="hidden"> {{$i=1}} </span>
                                   @foreach($visas as $visa)
                                 
                                      @if($visa->status=="Paid")
                                 
                     
                                     
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

                                     <td class="border px-4 py-2"> <i class="fas fa-check text-green-500 mx-2"></i> {{ $visa->charges}} PKR
                                      
                                        @if($visa->charges&&$visa->status=='Paid')
                                        <br>
                                        <a href='done/{{$visa->id}}' class="m-55  bg-success hover:bg-green-800 text-white font-light py-1 px-2 rounded-full">
                                           Mark Done
                                        </a>
                                        @endif

                                    </td>
                                           <td class="border px-4 py-2">
                                           <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                                          {{ $visa->status}}
                                           </button>


                           @if($visa->super_agent_id==null)
                                            <form action="{{route('visa_assign_super_agent')}}" method="post">
                                              @csrf
                                              <input name='id' value="{{$visa->id}}" type=hidden>
                                              <button name='charges' value='Super Agent'
                                              class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg"
                                                 >Assign Super Agent</button>
                                                 </form>

                                                      @endif 
                                               
                                           </td>

                                           
                                       </tr>

                                       
                                     @endif
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
                                        <div class="font-bold text-xl">Cancelled List</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                       <th class="border w-1/8 px-4 py-2">index</th>
                                        <th class="border w-1/8 px-4 py-2">Name</th>
                                        <th class="border w-1/8 px-4 py-2">Address</th>
                                        <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                        <th class="border w-1/6 px-4 py-2">passport#</th>
                                        <th class="border w-1/7 px-4 py-2">Request Payment</th>
                                        <th class="border w-1/7 px-4 py-2">Order Status</th>
                                        <th class="border w-1/5 px-4 py-2">Actions</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                       
                                  <span class="hidden"> {{$i=1}} </span>
                                   @foreach($visas as $visa)
                                 
                                      @if($visa->status=="Cancel")
                                 
                     
                                     
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
                                            
                                            <td class="border px-4 py-2">
                                            <i class="fas fa-times text-red-500 mx-2">{{ $visa->charges}} PKR</i>
                                     
                                       </td>
                                           <td class="border px-4 py-2">
                                           <button class="bg-red-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                                          {{ $visa->status}} 
                                           </button>


                                           </td>
                                           
                                           <td class="border px-4 py-2">
                                               <a  href="/adminvisaedit0?id={{$visa->id}}"   class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-eye"></i></a>
                                                      

                                                       <a  href="/adminvisaedit0?id={{$visa->id}}"  class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-edit"></i></a>

                                                       <a  href="/adminvisarevoke?id={{$visa->id}}"  class="bg-red-700 cursor-pointer rounded p-1 mx-1 text-white">
                                                       <i class="fas fa-undo bg-red-700"></i></a>
                                                     

                                                       <form method="POST" action="{{route('adminvisadestroy') }}"  >
                                                       @method('DELETE')
                                                     @csrf
                                                     <input type=hidden name='id' value='{{$visa->id}}'>
                                               <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                                       <i class="fas fa-trash"></i>

                                                       </form>
                                               
                                           </td>

                                           
                                       </tr>

                                       
                                     @endif
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
                                        <div class="font-bold text-xl">Done</div>
                                           </div>
                                         <div class="table-responsive">
                                             <table class="table text-grey-darkest">
                                      <thead class="bg-grey-dark text-white text-normal">
                                      <tr>
                                        <th class="border w-1/8 px-4 py-2">index</th>
                                        <th class="border w-1/8 px-4 py-2">Name</th>
                                        <th class="border w-1/8 px-4 py-2">Address</th>
                                        <th class="border w-1/8 px-4 py-2">Visa Country</th>
                                        <th class="border w-1/6 px-4 py-2">passport#</th>
                                        <th class="border w-1/7 px-4 py-2">Done</th>
                                        <th class="border w-1/7 px-4 py-2">Order Status</th>
                                       {{-- <th class="border w-1/5 px-4 py-2">Actions</th> --}}
                                     </tr>
                                   </thead>
                                   <tbody>
                                       
                                  <span class="hidden"> {{$i=1}} </span>
                                   @foreach($visas as $visa)
                                 
                                      @if($visa->status=="Done")
                                 
                     
                                     
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
                                             <td class="border px-4 py-2"> <i class="fas fa-check text-green-500 mx-2"></i> {{ $visa->charges}} PKR</td>
                                      </td>
                                           <td class="border px-4 py-2">
                                           <button class="bg-green-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-lg">
                                          {{ $visa->status}}
                                           </button>


                                           </td>                                
                                             
                                       </tr>

                                       
                                     @endif
                                     @endforeach




                                  


                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <!--/Grid done Form-->





                    


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