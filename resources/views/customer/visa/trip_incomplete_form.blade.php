<form method="POST"   action="{{ route('storeupdate') }}">
    @csrf

    <div class="flex flex-wrap -mx-3 mb-6">
                                <div id='visaapplycountry' class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker  mb-1"
                                           for="grid-state">
                                        Visa Apply Country
                                    </label>
                                    <div class="relative">
                                        <select name='visa_apply_country' class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                id="grid-state"
                                                
                                                >
                                                
                                                <option>{{ old('visa_apply_country')==null? $visa->visa_apply_country:old('visa_apply_country') }}</option>
                                         
                                            <option>India</option>
                                            <option>pakisatan</option>
                                            <option>america</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                                      

                               
                               
                            </div>

                            <input name=id type=hidden value="{{$visa->id }}">


                    <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-grey-darker  mb-1"
                                           for="grid-state">
                                        Type
                                    </label>
                                    <div class="relative">
                                        <select id=type name='type' onchange="myFunction(this.value)" class="border-yellow-500 block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey"
                                                id="grid-state">
                                                <option value="{{ old('type')==null?$visa->type:old('type') }}">{{ old('type')==null?$visa->type:old('type') }}</option>
                                               
                                                @if((Request::url()==URL::to('/').'/apply/Ummrah')||(Request::url()==URL::to('/').'/apply/Hajj'))
                                             
                                             <option>{{$type}}</option>
                                             @endif
                                             <option>{{$type}}</option>
                                <option value='Immigration'>Immigration</option>
                                <option  value='Ummrah'>Ummrah</option>
                                <option value='Hajj'>Hajj</option>
                                <option  value='Visit'>Visit</option>
                                
                                      
                                        </select>
                                        @error('type')
                                           <label class="text-red-500 text-xs italic"
                                           for="grid-first-name">
                                           {{ $message }}
                                    </label>
                                           @enderror

                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                                      

                               
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0 " >
                                    <label class="block uppercase tracking-wide text-gray-700  mb-1"
                                           for="grid-first-name">
                                      Number of Days you want to stay
                                    </label>
                                    <input name='days' 
                                     class="appearance-none @error('days') border-red-500 @enderror block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 border-yellow-500   leading-tight focus:outline-none focus:bg-white-500"
                                           value="{{  old('days')==null?$visa->days:old('days') }}"
                                           type="number" placeholder="Days">

                                    @error('days')
                                    <p class="text-red-500 text-xs italic">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                             


                                <div class="inline-flex">
                                     <a href="/da   shboard">
                            <p class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                Close
                            </p></a>
                            
                            <button type=submit class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                Save & Next
                            </button>
                            </form>



            
                                <form method="POST" action="{{route('visas.destroy', $visa->id) }}"  >
                                @method('DELETE')
                              @csrf
                        <button  type="submit" onclick="return confirm('Are you sure?')" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">
                                <i class="fas fa-trash"></i>
                                </form>
                        </a>

