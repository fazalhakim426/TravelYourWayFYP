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
    <!--Screen-->
        <!--Header Section Starts Here-->
        @include('customer.layout.navigation')

       




               <!--Main-->
               <main class="bg-white-500 flex-1 p-3 overflow-hidden">

<div class="flex flex-col">




    <!--Grid Form-->

    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
        <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
            <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                Companies
               
            </div>
            <div class="p-3">
                <table class="table-responsive w-full rounded justify-center">
                    <thead>
                      <tr>
                        <th class="border w-1/6 px-4 py-2">Serial number</th>
                        <th class="border w-1/6 px-4 py-2">Company</th>
                        <th class="border w-1/6 px-4 py-2">Number of Ads</th>
                        <th class="border w-1/6 px-4 py-2">
                        
                        <a href="upload_company"> <button
                                    class="inset-0 -right-0 right-0 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Create New
                                </button></a>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                    <span class='hidden' >{{$i=1}}</span>







                    
                    @foreach($agents as $agent)
<tr>
<td class="border px-4 py-2"> {{$agent->index    }}</td>
<td class="border px-4 py-2">
<div class="flex items-center">
<img class="w-10 h-10 rounded-full mr-4" src="{{ asset('storage/company/profile/images/' . $agent->profile_image) }}" alt="Avatar of Company Name">
<div class="text-sm">
<p class="text-black leading-none">{{$agent->name}}</p>
</div>
</div>
</td>
<td class="border px-4 py-2">{{$agent->count}}</td>
<td class="border px-4 py-2">
<a  onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="deleteCompany?id={{$agent->id}}">
<i class="fas fa-trash"></i>
</a>
<a class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500" href="editCompany?id={{$agent->id}}&page=10">
<i class="fas fa-edit"></i>
</a>
</td>
</tr>
@endforeach
                    </tbody>
                </table>

                @if(count($agents)==0)
                         <tr><td>
                        <p class="text-black leading-none"><span class="text-red-500">No Record Found</span></p>
                        </td></tr>
                        @endif  
            </div>
        </div>
    </div>
    <!--/Grid Form-->
    </div>
            </main>
            <!--/Main-->
        </div>

    </div>

</div>









</body>



<script src="{{URL::asset('admin-master/main.js')}}"></script>
<script src="{{asset('admin-master/src/action.js')}}"></script>
</html>