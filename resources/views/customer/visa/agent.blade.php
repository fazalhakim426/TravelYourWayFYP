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

        <main class="bg-white-300 flex-1 p-3 overflow-hidden">

            <div class="flex flex-col">
                <!-- Stats Row Starts Here -->
                <!--Grid Form-->

                <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                    <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center " style="background: #edf2f7">
                           Please Select Agent.
                      </div>
                        <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">


                       
                        <ul class="list-reset flex border-b">
     <div class="md:flex">
  
  <li class="mr-1">
      
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/visas">Trip Details</a>
    </li>

<li class="-mb-px mr-1 ">
     <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/personalInformationIndex">Personal Information</a>
  
</li>
<li class="mr-1 ">
    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold" href="/contactInformationIndex">Contact Information</a>
     
     
   </li>
   <li class="mr-1 ">
    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold" href="#">Select Agent</a>
     
     
   </li>
      






</div>
</ul>


                        </div>
                        <div class="p-3">
                                         
 <div class="flex justify-center flex-wrap ">




@foreach($agents as $agent)
<a class=" cursor-pointer rounded p-1 mx-1 text-blue-500" href="showUser/{{$agent->id}}">
                                       <div class="border border-gray-300 lg:border-gray-300 bg-grey-lightest bg-opacity-5 rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "  src="https://i.imgur.com/8Km9tLL.jpg" />
                                        </div>
                                        <div class="flex ">
                                            <form method='post' action="{{route('selectAgent')}}" class="px-1">
                                                @csrf   
                                            <input type=hidden name='id' value="{{$visa->id}}">
                                            <input type=hidden name='agent_id' value="{{$agent->id}}">
                                           <button type='submit' class="text-blue-500" >select</button>
                                        
                                        </form>
                                        <div class="">
                                            <p class="text-black ">{{ $agent->name}}</p>
                                            <div  >
                                                
                                           
                                               
                                                </div >
                                        </div>
                                        </div>
                                    </a>
                                      
                                    </div>
                              

@endforeach

<br>
                                    
                              

                                    
                              
                                @if(count($agents)==0)
                                         <tr><td>
                                        <p class="text-black leading-none">No Agent Found</p>
                                        </td></tr>
                                        @endif                
                    










                            

                            
                            </div>
                        </div>
                    </div>
                    <!--/Grid Form-->




 </div>
</div>



                </div>
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <!-- <footer class="bg-grey-darkest text-white p-2">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer> -->
        <!--/footer-->

    </div>

</div>






</body>




<script src="{{URL::asset('admin-master/main.js')}}"></script>
<script src="{{asset('admin-master/src/action.js')}}"></script>
</html>