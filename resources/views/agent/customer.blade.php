@extends('agent.layout.agent_layout')
@section('agent')






    <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
      <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
          <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
             Passengers
             
          </div>
          <div class="p-3">
              <table class="table-responsive w-full rounded justify-center">
                  <thead>
                   

                        <tr>
                          <th class="bg-white border w-1/6 px-4 py-2">Title</th>
                          <th class="bg-white border w-1/6 px-4 py-2">First Name</th>
                          <th class="bg-white border w-1/6 px-4 py-2">Last Nmae</th>
                          <th class="bg-white border w-1/6 px-4 py-2">DOB</th>
                          <th class="bg-white border w-1/6 px-4 py-2">Passport #</th>
                          <th class="bg-white border w-1/6 px-4 py-2">Nationality</th>

                        </tr>
                  </thead>
                  <tbody>
                  @foreach($ticket->passengers as $p)
<tr>
  <td class="border px-4 py-2">{{$p->title}}</td>

  <td class="border px-4 py-2">{{$p->first_name}}</td>
  
<td class="border px-4 py-2">{{$p->last_name}}</td>
<td class="border px-4 py-2">{{$p->date_of_birth}}</td>
<td class="border px-4 py-2">{{$p->passport_number}}</td>
<td class="border px-4 py-2">{{$p->nationality}}</td>

</tr>
@endforeach
                  </tbody>
              </table>

         
          </div>
      </div>
  </div>

  <!--/Grid Form-->


@stop
