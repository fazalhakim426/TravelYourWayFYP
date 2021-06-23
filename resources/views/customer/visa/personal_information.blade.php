<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="{{ URL::asset('/admin-master/dist/styles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/admin-master/dist/all.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>{{ Auth::user()->name }} </title>
</head>

<body>
    @include('customer.layout.navigation')

    <main class="bg-white-300 flex-1 p-3 overflow-hidden">

        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            @include('customer.layout.tab')
            <!--Grid Form-->

            <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b items-center "
                        style="background: #edf2f7">
                        Please provide your Personal Information.
                    </div>
                    <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">



                        <ul class="list-reset flex border-b">
                            <div class="md:flex">
                                <li class="mr-1">

                                    <a class="bg-white inline-block py-2 px-4 text-blue hover:text-blue-darker font-semibold"
                                        href="/customer/visas">Trip Details</a>
                                </li>

                                <li class="-mb-px mr-1 ">
                                    <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-dark font-semibold"
                                        href="/personalInformationIndex">Personal Information</a>

                                </li>

                                <li class="mr-1 ">
                                    <!-- <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold" href="#">Tab</a> -->
                                    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold"
                                        href="#">Contact Information</a>


                                </li>
                                <li class="mr-1">
                                    <a class="bg-white inline-block py-2 px-4 text-grey-light font-semibold"
                                        href="#">Select Agent</a>

                                </li>

                            </div>
                        </ul>


                    </div>
                    <div class="p-3">




                        <form class="w-full" method="post" action="{{ route('personalInformationStore') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="flex flex-wrap -mx-3 mb-6">

                                <input name='id' type='hidden' value="{{ $visa->id }}">

                            </div>


                            <div class="flex flex-wrap -mx-3 mb-6">

                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Title
                                    </label>
                                    <input name="title"
                                        value="{{ old('title') == null ? ($visa->title = null ? 'Mr' : 'Mr') : old('title') }}"
                                        class="appearance-none block w-full bg-gray-200 @error('first_name')  border-red-500 @enderror text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                        id="grid-last-name" type="text" placeholder="Mr">
                                    @error('title')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        First_name
                                    </label>
                                    <input name="first_name"
                                        value="{{ old('first_name') == null ? ($visa->first_name = null ? 'Pakistan' : 'Pakistan') : old('first_name') }}"
                                        class="appearance-none block w-full bg-gray-200 @error('first_name')  border-red-500 @enderror text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                        id="grid-last-name" type="text" placeholder="Pakistan">
                                    @error('first_name')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Last Name
                                    </label>
                                    <input name="last_name"
                                        value="{{ old('last_name') == null ? ($visa->last_name = null ? 'Pakistan' : 'Pakistan') : old('last_name') }}"
                                        class="appearance-none block w-full bg-gray-200 @error('last_name')  border-red-500 @enderror text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                        id="grid-last-name" type="text" placeholder="Pakistan">
                                    @error('last_name')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Passport Number
                                    </label>
                                    <input name="passport_number"
                                        value="{{ old('passport_number') == null ? $visa->passport_number : old('passport_number') }}"
                                        class="appearance-none block w-full bg-gray-200 @error('last_name')  border-red-500 @enderror text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                        id="grid-last-name" type="text" placeholder="Passport Number">
                                    @error('passport_number')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Passport Front Image
                                    </label>

                                    {{-- <input name=""
                                        class="appearance-none block w-full bg-gray-200 @error('last_name')  border-red-500 @enderror text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white-500 focus:border-gray-600"
                                        type="file"> --}}

                                    <input type="file" id="FileUpload1" name='passport_front_image' />


                                    @error('passport_front_image')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror

                                    {{-- @if ($visa->passport_front_image != null) --}}
                                    <img src="{{ asset('/storage/visa_ticket' . $visa->passport_front_image) }}" alt="">
                                    {{-- @endif --}}

                                </div>


                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Passport Back Image
                                    </label>
                                    <input name="passport_back_image" type='file'>
                                    @error('passport_back_image')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>
                                 {{-- show passport images --}}
                                @if ($visa->passport_front_image != null)
                                    <div class="w-full md:w-1/2 px-3 pt-5">
                                        <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                            for="grid-last-name">
                                            Passport Front Image
                                        </label>


                                        <img class="w-full md:w-1/2 px-3 pt-5"
                                            src="{{ asset('storage/visa_ticket/images/' . $visa->passport_front_image) }}"
                                            alt="image">


                                    </div>
                                @endif


                                @if ($visa->passport_back_image != null)
                                    <div class="w-full md:w-1/2 px-3 pt-5">
                                        <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                            for="grid-last-name">
                                            Passport back Image
                                        </label>


                                        <img class="w-full md:w-1/2 px-3 pt-5"
                                            src="{{ asset('storage/visa_ticket/images/' . $visa->passport_back_image) }}"
                                            alt="image">


                                    </div>
                                @endif












                                <div class="w-full md:w-1/2 px-3 pt-5 ">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        CNIC Front Image
                                    </label>
                                    <input name="cnic_front_image"  type="file">
                                    @error('cnic_front_image')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>



                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        CNIC Back Image
                                    </label>
                                    <input name="cnic_back_image" type='file'>
                                    @error('cnic_back_image')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>





                                   {{-- show passport images --}}
                                   @if ($visa->cnic_front_image != null)
                                   <div class="w-full md:w-1/2 px-3 pt-5">
                                       <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                           for="grid-last-name">
                                           CNIC Front Image
                                       </label>


                                       <img class="w-full md:w-1/2 px-3 pt-5"
                                           src="{{ asset('storage/visa_ticket/images/' . $visa->cnic_front_image) }}"
                                           alt="image">


                                   </div>
                               @endif


                               @if ($visa->cnic_back_image != null)
                                   <div class="w-full md:w-1/2 px-3 pt-5">
                                       <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                           for="grid-last-name">
                                           CNIC Back Image
                                       </label>


                                       <img class="w-full md:w-1/2 px-3 pt-5"
                                           src="{{ asset('storage/visa_ticket/images/' . $visa->cnic_back_image) }}"
                                           alt="image">


                                   </div>
                               @endif

                            </div>


                          

                            <div class="flex flex-wrap -mx-3 mb-6">

                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Date Of Birth
                                    </label>
                                    <input name='date_of_birth'
                                        value="{{ old('date_of_birth') == null ? $visa->date_of_birth : old('date_of_birth') }}"
                                        class="appearance-none  @error('date_of_birth')  border-red-500 @enderror block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white focus:border-grey"
                                        id="grid-city" type="date" placeholder="34/33/1988">
                                    @error('date_of_birth')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="w-full md:w-1/2 px-3 pt-5">
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                        for="grid-last-name">
                                        Gender
                                    </label>
                                    <select name="gender"
                                        class="appearance-none  @error('gender')  border-red-500 @enderror block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight border-yellow-500   leading-tight focus:outline-none focus:bg-white-500 focus:bg-white focus:border-grey"
                                        id="grid-city" placeholder="Albuquerque">

                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                    @error('gender')
                                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                    @enderror
                                </div>


                            </div>

                            <div class="inline-flex">
                                <a href="/customer/visas">
                                    <p
                                        class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                        Prev
                                    </p>
                                </a>
                                <button
                                    class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                    Save & Next
                                </button>
                        </form>

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
    <footer class="bg-grey-darkest text-white p-2">
        <div class="flex flex-1 mx-auto">&copy; My Design</div>
    </footer>
    <!--/footer-->

    </div>

    </div>
    <script src="{{ URL::asset('admin-master/main.js') }}"></script>
</body>

</html>
