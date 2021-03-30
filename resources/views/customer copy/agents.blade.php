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
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
   @include('layouts.usernavigation')

       

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

                <ul class="list-reset flex flex-col">
                    


    <li class="w-full h-full py-3 px-2 borderight-border ">
        <a href="/ads"
        class="font-sans  hover:font-normal text-sm text-nav-item no-underline">
              
                                <!--<i class="fas fa-tachometer-alt float-left mx-2"></i> -->
            Ads
            <span><i class="fas fa-angle-right float-right"></i></span>
        </a>
    </li>



   

    <li class=" w-full h-full py-3 px-2 borderight-border bg-white">
        <a href="/classification"
           class="font-sans  hover:font-normal text-sm text-nav-item no-underline">
                <!--<i class="fas fa-tachometer-alt float-left mx-2"></i> -->
            Classification
            <span><i class="fas fa-angle-right float-right"></i></span>
        </a>
    </li>
    <li class=" w-full h-full py-3 px-2 borderight-border">
        <a href="/companies"
           class="font-sans hover:font-normal text-sm text-nav-item no-underline">
                <!--<i class="fas fa-tachometer-alt float-left mx-2"></i> -->
            Companies
            <span><i class="fas fa-angle-right float-right"></i></span>
        </a>
    </li>
    
    






           
                </ul>

            </aside>
            <!--/Sidebar-->
           
           <!--Main-->
           <main class="bg-white-500 flex-1 p-3 overflow-hidden">

<div class="flex flex-col">



















    


    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                
                <ul class="list-reset md:flex md:items-center">
                <li class="md:ml-4"> Classifications </li>
</ul>
           </div>
            <div class="p-3">         
                  
<div class="flex justify-center flex-wrap ">





                  
                    
              





            <div class="border border-gray-300 lg:border-gray-300 bg-grey-lightest bg-opacity-5 rounded-b lg:rounded-b-none lg:rounded-r p-4 m-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href="specific_classification?type=both&classification=ads">
                                        <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "  src="{{asset('admin-master/icons/atoz.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                        <div class="text-sm ">
                                            <p class="text-black leading-none">Flying</p>
                                        </div>
                                        </div></a>

                                    </div>



                                    
 <div class="border border-gray-300 lg:border-gray-300 bg-grey-lightest bg-opacity-5 rounded-b lg:rounded-b-none lg:rounded-r p-4 m-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href="specific_classification?type=both&classification=Flying">
                                        <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "  src="{{asset('admin-master/icons/flying.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                        <div class="text-sm ">
                                            <p class="text-black leading-none">Flying</p>
                                        </div>
                                        </div></a>

                                    </div>
                              




                              <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                  <div class="mb-2">  
                                  <a href='specific_classification?type=both&classification=Bank%20%26%20Money%20
                                  Services'>
                                      
                                  <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Bank & Money Services.png')}}" />

                                  </div>
                                  <div class="flex items-center">
                                 
                                  <div class="text-sm">
                                      <p class="text-black leading-none">Bank & Money Services</p>
                                  </div>
                                  </div></a>
                              </div>




                              
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Telecommunication'>
                                   
                                        <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Telecommunication.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Telecommunication</p>
                                        </div>
                                        </div></a>
                                    </div>



                                    
                              
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Travel%20%26%20Tourism'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Travel & Tourism.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Travel & Tourism</p>
                                        </div>
                                        </div>
                                        </a>
                                    </div>


                                    
                              
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Car%20%26%20Rent'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Cars & Rent.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Cars & Rent</p>
                                        </div>
                                        </div></a>
                                    </div>


                                    
                              
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Super%20Market'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Super Market.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Super Market</p>
                                        </div>
                                        </div></a>
                                    </div>


                                    
                              
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Entertainment'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Entertainment.png')}}" />
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Entertainment</p>
                                        </div>
                                        </div></a>
                                    </div>

                                    
                    
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Fitness%20%26%20Health'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Fitness & Health.png')}}"/>
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Fitness & Health</p>
                                        </div>
                                        </div></a>
                                    </div>
                                    
                    
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Restaurant'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Restaurant.png')}}"/>
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Restaurant</p>
                                        </div>
                                        </div></a>
                                    </div>
                                    
                    
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Furniture'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Furniture.png')}}"/>
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Furniture</p>
                                        </div>
                                        </div></a>
                                    </div>
                                             
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Clothes%20%26%20Accessorie'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Clothes and Accessorie.png')}}"/>
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Clothes & Accessorie</p>
                                        </div>
                                        </div></a>
                                    </div>
                                                                        
                    
                                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                        <div class="mb-2">
                                        <a href='specific_classification?type=both&classification=Electrical%20%26%20Electronics'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Electrical & Electronics.png')}}"/>
      
                                        </div>
                                        <div class="flex items-center">
                                       
                                        <div class="text-sm">
                                            <p class="text-black leading-none">Electrical & Electronics</p>
                                        </div>
                                        </div></a>
                                    </div>                                    
                    
                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-2">
                        <a href='specific_classification?type=both&classification=Estates'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Estates.png')}}"/>

                        </div>
                        <div class="flex items-center">
                       
                        <div class="text-sm">
                            <p class="text-black leading-none">Estates</p>
                        </div>
                        </div></a>
                    </div>                                    
                    
                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-2">
                        <a href='specific_classification?type=both&classification=Engineering%20%26%20Services'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Engineering & Services.png')}}"/>

                        </div>
                        <div class="flex items-center">
                       
                        <div class="text-sm">
                            <p class="text-black leading-none">Engineering & Services</p>
                        </div>
                        </div></a>
                    </div>                                    
                    
                    <div class="border border-gray-300 m-4 lg:border-gray-300 bg-grey-lightest rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="mb-2">
                        <a href='specific_classification?type=both&classification=Jobs'>
                                   <img class="w-40 h-40 md:w-80  md:h-80  lg:w-100 lg:h-100  xl:w-120 lg:h-120  2xl:w-140 2xl:h-140 "src="{{asset('admin-master/icons/Jobs.png')}}"/>

                        </div>
                        <div class="flex items-center">
                       
                        <div class="text-sm">
                            <p class="text-black leading-none">Jobs</p>
                        </div>
                        </div></a>
                    </div>                                    
                    






                           
    










            

            
            </div>
        </div>
    </div>
    <!--/Grid Form-->









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


<script src="{{URL::asset('admin-master/main.js')}}"></script>
<script src="{{asset('admin-master/src/action.js')}}"></script>
</body>

</html>