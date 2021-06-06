


  <div class="flex justify-center flex-wrap">
     
       <a href="/super-agent/dashboard">
           <div class="relative w-40 h-40 ">
            @if ($sub_active=='Dashboard')
            <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/dashboard.jpeg')}}" />
            <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Dashboard</p>
           
          @else 
            <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/dashboard.jpeg')}}" />
            <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Dashboard</p>
          @endif

             </div>
          </a>
          
          <a href="/super-agent/agents">
             
             <div class="relative w-40 h-40 ">
                @if ($sub_active=='Agents')
                  <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/agent.jpeg')}}" />
                  <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Agents</p>
                 
                @else 
                  <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/agent.jpeg')}}" />
                  <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Agents</p>
                @endif
              
                
             </div>
          </a>
          
          
          
          
          
          <a href="/super-agent/immigrations">
             
            <div class="relative w-40 h-40 ">
               @if ($sub_active=='Immigration')
                 <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/immigration.png')}}" />
                 <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Immigrations</p>
                
               @else 
                 <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/immigration.png')}}" />
                 <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Immigrations</p>
               @endif
             
               
            </div>
         </a>


         <a href="/super-agent/hajjs">
             
          <div class="relative w-40 h-40 ">
             @if ($sub_active=='Hajj')
               <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/hajj.png')}}" />
               <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Hajj</p>
              
             @else 
               <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/hajj.png')}}" />
               <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Hajj</p>
             @endif
           
             
          </div>
       </a>
             <a href="/super-agent/hotels">
             
             <div class="relative w-40 h-40 ">
                @if ($sub_active=='Hotel')
                  <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/hotel.png')}}" />
                  <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Hotel</p>
                 
                @else 
                  <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/hotel.png')}}" />
                  <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Hotel </p>
                @endif
              
                
             </div>
          </a>          
          <a href="/super-agent/tickets">
             
            <div class="relative w-40 h-40 ">
               @if ($sub_active=='Ticket')
                 <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/ticket.png')}}" />
                 <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Tickets</p>
                
               @else 
                 <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/ticket.png')}}" />
                 <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Tickets</p>
               @endif
             
               
            </div>
         </a>          
         
         <a href="/super-agent/ummrahs">
             
          <div class="relative w-40 h-40 ">
             @if ($sub_active=='Ummrah')
               <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/ummrah.png')}}" />
               <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Ummrah</p>
              
             @else 
               <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/ummrah.png')}}" />
               <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Ummrah</p>
             @endif
           
             
          </div>
       </a>          
       
       <a href="/super-agent/visits">
             
        <div class="relative w-40 h-40 ">
           @if ($sub_active=='Visit')
             <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/active/visit.png')}}" />
             <p class="mx-2 py-2 text-center text-indigo-600 font-semibold uppercase " >Visit</p>
            
           @else 
             <img class="w-24 h-24 mx-auto" src="{{URL::asset('/icon/inactive/visit.png')}}" />
             <p class="mx-2 py-2 text-center text-gray-700 font-semibold uppercase " >Visit</p>
           @endif
         
           
        </div>
     </a>






   
        
     
     
    